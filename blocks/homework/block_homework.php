<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Main homework block
 *
 * @package    block_homework
 * @copyright  2016 Overnet Data Ltd. (@link http://www.overnetdata.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once(__DIR__ . "/../../config.php");
require_once("edulink_classes/controls.php");
require_once("edulink_classes/homework.php");

use block_homework\local\edulink as e;

class block_homework extends \block_base {

    protected $blockid = 'block_homework';
    protected $userid;
    protected $usertype;
    protected $children;

    public function init() {
        $this->title = " ";//get_string('pluginname', $this->blockid);
    }

    public function get_content() {
        if (!isloggedin()) {
            return null;
        }
        global $CFG, $COURSE, $USER, $PAGE;

        $PAGE->requires->css(new \moodle_url('/blocks/homework/style/styles.css'));
        $PAGE->requires->css(new \moodle_url('https://fonts.googleapis.com/css?family=Lato'));
        $PAGE->requires->js_call_amd('block_homework/block', 'start');

        if ($this->content !== null) {
            return $this->content;
        }
        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }
        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->text = "";
      
        
        $text = html_writer::start_tag('div', array('class' => 'row','style'=>'border-left:1.1px solid #F86C39 ;'));
        $text .=$this->get_block_title("需要留意的作业");
        $text .='<DIV style="BORDER-TOP: #DCDCDC 2px dashed; OVERFLOW: hidden; HEIGHT: 3px;width:100%;"></DIV>';
        $BtnsText=  '<div class="card" style= "border:0; padding-left :0; ">
    	<div  class="card-block row admininfos">';
        $path = $CFG->wwwroot . '/blocks/homework/';

        $coursespecifier = '?course=' . $COURSE->id;

        $onfrontpage = $COURSE->id == get_site()->id;	

        $this->userid = $USER->id;
        $this->usertype = block_homework_moodle_utils::get_user_type($this->userid);
        if ($this->usertype == "parent") {
            $this->children = HomeworkAccess::get_children($this->userid);
        }

        $courses = array();
        if ($onfrontpage) {
            if (empty($this->children)) {
                $courses = block_homework_moodle_utils::get_users_courses($this->userid);
            } else {
                foreach ($this->children as $childuserid => $childname) {
                    $childscourses = block_homework_moodle_utils::get_users_courses($childuserid);
                    foreach ($childscourses as $courseid => $course) {
                        if (!isset($courses[$courseid])) {
                            $courses[$courseid] = $course;
                        }
                    }
                }
            }
        } else {
            $courses[$COURSE->id] = get_course($COURSE->id);
        }
        if (!empty($courses)) {
            $context = context_course::instance(reset($courses)->id);
        } else {
            $context = context_course::instance($COURSE->id);
        }

        $somehomework = false;
        $users = array();
        if (!empty($this->children)) {
            foreach ($this->children as $id => $name) {
                $users[$id] = $name;
            }
        } else {
            $users[$this->userid] = "";
        }

        $nohomeworklabel = new e\htmlLabel('label-info', get_string('nohomeworkduewithintwoweeks', $this->blockid));
        if (empty($courses)) {
            $nocourseslabel = new e\htmlLabel('label-info', get_string('nocourses', $this->blockid));
           $text .= $nocourseslabel->get_html();
            $this->content->icons[] = '';
        }

        foreach ($users as $userid => $usersname) {
            if ($usersname != "") {
               $text .= '<h3>' . $usersname . '</h3>';
                $this->content->icons[] = '';
            }
            $somehomeworkthisuser = false;
            $homeworkactivities = array();
            if ($this->usertype == "employee") {
                $maxdaysage = get_config('block_homework', 'max_age_employee');
                if (($maxdaysage < 1) || ($maxdaysage > 14)) {
                    $maxdaysage = 1;
                }
            } else {
                $maxdaysage = get_config('block_homework', 'max_age_other');
                if (($maxdaysage < 1) || ($maxdaysage > 14)) {
                    $maxdaysage = 8;
                }
            }
            foreach ($courses as $course) {
                $homeworkactivities = array_merge($homeworkactivities,
                    block_homework_utils::get_homework_for_course($course->id, $userid, true, $maxdaysage));
            }
            if (!empty($homeworkactivities)) {
                $homeworkhtml = block_homework_utils::homework_items_for_block_list($homeworkactivities, $userid, $onfrontpage,
                    $this->usertype);
                if (!empty($homeworkhtml)) {
                    $somehomework = true;
                    $somehomeworkthisuser = true;
                   $text .= $homeworkhtml;
                    $this->content->icons[] = '';
                }	
            }
            if (!$somehomeworkthisuser) {
                $text .= $nohomeworklabel->get_html();
                $this->content->icons[] = '';
            }
        }
        if (!empty($this->children)) {
           $text .= "<hr>";
            $this->content->icons[] = '';
        }

        $text .= '<br>';
        $this->content->icons[] = "";

        if ($this->usertype == "employee") {
            $sethomework = get_string('sethomework', $this->blockid);
            $sethomework = $this->get_icon_html('homework-create-small', $sethomework) . ' ' . $sethomework;
            $SetHWlink = new e\htmlHyperlink('', $sethomework, $path . 'set.php' . $coursespecifier);
          // $text .= $this->get_block_button('ond_sethomework', $SetHWlink);
           $BtnsText	.=  '
        <div class="col-md-6 col-lg-3" style = "width:265px;margin-right:10px;"	>
          <!-- small box -->
        	<a' .	$SetHWlink->get_properties() . '>
          <div class="small-box btn-info "style="min-height:105px;">
            <div class="inner">
              <h3>布置作业</h3>
           
           
            
            </div>
            <div class="icon">
              <i class="fa fa-hdd-o"></i>
            </div>
          </div>
        </a>
        </div>';

        }

        $viewpermission = ($this->usertype == "parent") || ($this->usertype == "employee") || ($this->usertype == "learner");
        if ($viewpermission) {
            $viewhomework = get_string('viewhomework', $this->blockid);
            $viewhomework = $this->get_icon_html('homework-view-small', $viewhomework) . ' ' . $viewhomework;
            $ViewHWlink = new e\htmlHyperlink('', $viewhomework, $path . 'view.php' . $coursespecifier);
         // $text .=$this->get_block_button('ond_viewhomework', $ViewHWlink);
          $BtnsText	.=  '
  
          
       <div class="col-md-6 col-lg-3" style = "width:265px;margin-right:10px;"	>
       	<a' .	$ViewHWlink->get_properties() . '>
          <!-- small box -->
          <div class="small-box btn-warning"style="min-height:105px;">
          
            <div class="inner">
              <h3>全部作业</h3>
          
              <p></p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          
          </div>
       	</a>
        </div>';

        }

        if ($this->usertype == "employee") {
            $tomark = block_homework_utils::get_unmarked_homework_count_for_course($COURSE->id, $this->userid);
            $tomarkhtml = '';
            if (!empty($tomark)) {
                $badge = new e\htmlBadge($tomark);
                $tomarkhtml = $badge->get_html();
            }
            $markhomework = get_string('markhomework', $this->blockid);
            $markhomework = $this->get_icon_html('homework-mark-small', $markhomework) . ' ' . $markhomework;
            $MarkHWlink = new e\htmlHyperlink('', $markhomework . $tomarkhtml, $path . 'view.php' . $coursespecifier .
                    '&mark=1');
        //  $text .= $this->get_block_button('ond_markhomework', $MarkHWlink);
         $BtnsText	.=  '
        
       <div class="col-md-6 col-lg-3" style = "width:265px;margin-right:10px;"	>
         	<a' .	$MarkHWlink->get_properties() . '>	
          <!-- small box -->
          <div class="small-box btn-success"style="min-height:105px;">
            <div class="inner">
              <h3 >批改作业</h3>
        
           
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
          </div>
         </a>			
        </div>';
        }

        if ($this->usertype == "employee") {
            $viewreports = get_string('viewreports', $this->blockid);
            $viewreports = $this->get_icon_html('homework-reports-small', $viewreports) . ' ' . $viewreports;
            $viewreportslink = new e\htmlHyperlink('', $viewreports, $path . 'reports.php' . $coursespecifier);
          //$text .= $this->get_block_button('ond_viewreports', $viewreportslink);
       //  $BtnsText	.=  '
     //      <div class="col-md-5 col-lg-3">
    //      <a' .	$viewreportslink->get_properties() . '>			
    //      <!-- small box -->
    //      <div	 class="small-box btn-danger"style="min-height:110px;min-width: 270px;">
    //        <div class="inner">
    //          <h3>查看成绩</h3>
        
    //          <p></p>
    //        </div>
    //        <div class="icon">
     //         <i class="fa fa-plug"></i>
     //       </div>
     //     </div>
    //     	</a>		
    //    </div>';
        }

        if (!empty($this->content->items)) {
            if (is_siteadmin()) {
                $versionfile = file_get_contents($CFG->dirroot . '/blocks/homework/version.php');
                $i = stripos($versionfile, '->release');
                $i = stripos($versionfile, "'", $i);
                $j = stripos($versionfile, "'", $i + 1);
                $version = get_string('versionx', $this->blockid, substr($versionfile, $i + 1, $j - $i - 1)) . ' - ';
            } else {
                $version = '';
            }
            
            
//             $this->content->footer = '<div class="clearer"></div>' .
//                     '<div style="border-top:1px solid #ccc; padding-top:0.2em; display:block !important; text-align:center; ' .
//                     'width:auto; font-size: 85%;">' . $version .
//                     '<a target="_blank" href="' . get_string('poweredbyurl', $this->blockid) .
//                     '" style="display:inline !important;">' . get_string('poweredby', $this->blockid) . '</a></div>';
        }
        
        $text .= html_writer::end_tag('div');//rom
        $BtnsText	.=  '
				    </div>
				</div>
        ';//enddiv
      $BtnsText  .=$text;
        $this->content->text =$BtnsText;
        return $this->content;
    }

    protected function get_icon_html($iconid, $alt) {
        global $CFG;
        $path = $CFG->wwwroot . "/blocks/homework/pix";
        $img = new e\htmlImage($iconid, "{$path}/{$iconid}-mono.png", 24, 24, $alt);
        $img->set_class('smallicon navicon');
        return $img->get_html();
    }

    protected function get_block_title($title) {
    $text ="";
    $text .='<div style=" margin-top: 2rem;" ></div>';
    $text .='<div style="width:37px;margin-left:-37px;height: 1.1px;background-color: #F86C39; margin-top: 2rem;">
            	</div>';
    
    $text .= html_writer::start_tag('div', array('class' => 'col-md-12   ', 'style'=>'font-size:x-large;   '));
    $text .= '<span style=" margin-left: -18px;  border-left: 5.1px solid #F86C39; padding-right: 2rem;"> </span>';//画竖杠
    $text .= html_writer::span($title, 'course-title bolder not-enumerated');//block  名称
    return $text;
    }
    protected function get_block_button($class, $link) {
        $link->set_class('');
        $div = new e\htmlDiv(null, $class . ' ond_homework_block_link', $link->get_html());
        return $div->get_html();
    }

    public function applicable_formats() {
        return array('my' => true);
    }

    public function instance_allow_multiple() {
        return false;
    }

    public function has_config() {
        return true;
    }

    public function get_aria_role() {
        return 'navigation';
    }

}
