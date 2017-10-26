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
 * Essential is a clean and customizable theme.
 *
 * @package     theme_essential
 * @copyright   2016 Gareth J Barnard
 * @copyright   2014 Gareth J Barnard, David Bezemer
 * @copyright   2013 Julian Ridden
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;



?>

<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" /
    <?php
    echo $OUTPUT->standard_head_html();
    ?>
   
    <!-- Google web fonts -->
    <?php require_once(\theme_essential\toolbox::get_tile_file('fonts')); ?>
    <!-- iOS Homescreen Icons -->
    <?php require_once(\theme_essential\toolbox::get_tile_file('iosicons')); ?>
    <!-- Start Analytics -->
    <?php require_once(\theme_essential\toolbox::get_tile_file('analytics')); ?>
    <!-- End Analytics -->
</head>







<div id="page" class=" clearfix   " style="margin-top: -10px; padding: 0; ">
    <!-- Start Main Regions -->
    <div id="page-content" class="row-fluid  ">
        <section id="region-main" class="span12 clearfix nologo"    style =" padding:20px; width:100%; height: 100%;position:absolute;">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
    </div>
    <!-- End Main Regions -->
</div>


</body>
</html>
