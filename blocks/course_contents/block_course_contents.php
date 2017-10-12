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
 * Provides the {@link block_course_contents} class.
 *
 * @package    block_course_contents
 * @copyright  2009 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/course/format/lib.php');
require_once($CFG->dirroot.'/blocks/course_overview/locallib.php');

/**
 * Course contents block generates a table of course contents based on the
 * section descriptions
 */
class block_course_contents extends block_base {

    /**
     * Initializes the block, called by the constructor
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_course_contents');
    }

    /**
     * Amend the block instance after it is loaded
     */
    public function specialization() {
        if (!empty($this->config->blocktitle)) {
            $this->title = $this->config->blocktitle;
        } else {
            $this->title = get_string('config_blocktitle_default', 'block_course_contents');
        }
        $this->title ="";
    }

    /**
     * Which page types this block may appear on
     * @return array
     */
//     public function applicable_formats() {
//         return array('site-index' => true, 'course-view-*' => true);
//     }
    public function applicable_formats() {
    	return array('my' => true);
    }

    /**
     * Does the block have a global settings.
     *
     * @return bool
     */
    public function has_config() {
        return true;
    }

    /**
     * Populate this block's content object
     * @return stdClass block content info
     */
    public function get_content() {
    	global $USER, $CFG, $DB;

        if (!is_null($this->content)) {
            return $this->content;
        }

        $selected = optional_param('section', null, PARAM_INT);

        $this->content = new stdClass();
        $this->content->footer = '';
        $this->content->text   = '';
        $text="";

        if (empty($this->instance)) {
            return $this->content;
        }
        list($sortedcourses, $sitecourses, $totalcourses) = block_course_overview_get_sorted_courses($showallcourses);
        foreach ($sortedcourses as $sid){
       // $format = course_get_format($this->page->course);
        $format = course_get_format($sid->id);
        $course = $format->get_course(); // Needed to have numsections property available.

        if (!$format->uses_sections()) {
            if (debugging()) {
                $this->content->text = get_string('notusingsections', 'block_course_contents');
            }
           continue;// return $this->content;
        }

        $sections = $format->get_sections();

        if (empty($sections)) {
           continue;// return $this->content;
        }	

        $context = context_course::instance($course->id);
        $globalconfig = get_config('block_course_contents');

            $text .= html_writer::start_tag('div', array('class' => 'row','style'=>'border-left:1.1px solid #F86C39 ;'));
        $r = 0;
        foreach ($sections as $section) {
            $i = $section->section;
            if ($i > $course->numsections) {
                break;
            }
            if (!$section->uservisible) {
                continue;
            }

            if ($globalconfig->autotitle === 'forced_off') {
                $autotitle = false;

            } else if ($globalconfig->autotitle === 'forced_on') {
                $autotitle = true;

            } else if (empty($this->config) or !isset($this->config->autotitle)) {
                // Instance not configured, use the globally defined default value.
                if ($globalconfig->autotitle === 'optional_on') {
                    $autotitle = true;
                } else {
                    $autotitle = false;
                }

            } else if (!empty($this->config->autotitle)) {
                $autotitle = true;

            } else {
                $autotitle = false;
            }

            $title = null;

            if (!empty($section->name)) {
                // If the section has explic title defined, it is used.
                $title = format_string($section->name, true, array('context' => $context));

            } else if ($autotitle) {
                // Attempt to extract the title from the section summary.
                $summary = file_rewrite_pluginfile_urls($section->summary, 'pluginfile.php', $context->id, 'course',
                    'section', $section->id);
                $summary = format_text($summary, $section->summaryformat, array('para' => false, 'context' => $context));
                $title = format_string($this->extract_title($summary), true, array('context' => $context));
            }

            // If at this point we have no title available, use the default one.
            if (empty($title)) {
                $title = $format->get_section_name($section);
            }
            
            if ($i == 0) {
            	// Never enumerate the section number 0.
            	$enumerate = false;
            
            } else if ($globalconfig->enumerate === 'forced_off') {
            	$enumerate = false;
            
            } else if ($globalconfig->enumerate === 'forced_on') {
            	$enumerate = true;
            
            } else if (empty($this->config) or !isset($this->config->enumerate)) {
            	// Instance not configured, use the globally defined default value.
            	if ($globalconfig->enumerate === 'optional_on') {
            		$enumerate = true;
            	} else {
            		$enumerate = false;
            	}
            
            } else if (!empty($this->config->enumerate)) {
            	$enumerate = true;
            
            } else {
            	$enumerate = false;
            }
            
            
            if(0==$section->section)
            {
            	$title =$course->fullname;
            	$text .='<div style=" margin-top: 2rem;" ></div>';
            	$text .='<div style="width:37px;margin-left:-37px;height: 1.1px;background-color: #F86C39; margin-top: 2rem;">    
            	</div>';
            	$text .= html_writer::start_tag('div', array('class' => 'col-md-12   current r'.$odd, 'style'=>'font-size:x-large;   '));
            	$text .= '<span style=" margin-left: -18px;  border-left: 5.1px solid #F86C39; padding-right: 2rem;"> </span>';//画竖杠
            	$title = html_writer::span($title, 'course-title bolder not-enumerated');//课程名称
            	
            }
            else
            {
            	$text .= html_writer::start_tag('div', array('class' => ' col-lg-1 col-md-3 col-sm-4 p-y-1  10rem','style'=>'width；120px; margin:20px;'));
	            $odd = $r % 8;
// 	            if (5==$odd) {
	           
	           
	            //	$text .= '<span style=" margin-left: -32px;     font-size: -webkit-xxx-large; color: #F86C39; ">+</span>';//画竖杠
// 	            }

	            if(empty($section->name))
	                          
	                            	$title = html_writer::span($title, 'section-title');
	            					else
	            						$title = html_writer::span($i, '').' '.html_writer::span($title, 'section-title');
	                        }
            


//             if ($enumerate) {
//             	if(empty($section->name))
//                 	$title = html_writer::span($i, '').' '.html_writer::span($title, 'section-title');
// 					else 
// 						$title = html_writer::span($title, 'section-title');
//             }
//             else {
//                // $title = html_writer::span($title, 'course-title bolder not-enumerated');//课程名称
            	
//             }

            if (is_null($selected) or $i <> $selected) {
            	if(0==$section->section)
               		 $text .= html_writer::link($format->get_view_url($section), $title, ['class' => $section->visible ? '' : 'dimmed']);
            	else 
            		$text .= html_writer::link($format->get_view_url($section), $title, ['class' => $section->visible ? 'btn btn-default btn-secondary1 bolder' : 'dimmed']);
            } else {
                $text .= $title;
            }
            $text .= html_writer::end_tag('div');//col
            if(0==$section->section)
            {
            	
            	$text .='<DIV style="BORDER-TOP: #DCDCDC 2px dashed; OVERFLOW: hidden; HEIGHT: 3px;width:100%;"></DIV>';//	虚线分隔符
            }
            
            $r++;
        }
        $text .= html_writer::end_tag('div');//rom

        
        }
//        $text .=' <DIV style="width: 100%;margin-left:-37px;height: 20px;background-color: #1D2B36">    
//         </DIV>';//下面的黑边
        $this->content->text = $text;
        return $this->content;
    }


    /**
     * Given a section summary, exctract a text suitable as a section title
     *
     * @param string $summary Section summary as returned from database (no slashes)
     * @return string Section title
     */
    private function extract_title($summary) {
        global $CFG;
        require_once(dirname(__FILE__).'/lib/simple_html_dom.php');

        $node = new simple_html_dom();
        $node->load($summary);
        return $this->node_plain_text($node);
    }


    /**
     * Recursively find the first suitable plaintext from the HTML DOM.
     *
     * Internal private function called only from {@link extract_title()}
     *
     * @param simple_html_dom $node Current root node
     * @return string
     */
    private function node_plain_text($node) {
        if ($node->nodetype == HDOM_TYPE_TEXT) {
            $t = trim($node->plaintext);
            if (!empty($t)) {
                return $t;
            }
        }
        $t = '';
        foreach ($node->nodes as $n) {
            $t = $this->node_plain_text($n);
            if (!empty($t)) {
                break;
            }
        }
        return $t;
    }
}