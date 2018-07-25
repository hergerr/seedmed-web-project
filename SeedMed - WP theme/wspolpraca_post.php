<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */ 
?>

    <!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

    <!-- Post Wrap Start-->
    <div class="post hentry ivycat-post">

        <!-- 	This outputs the post TITLE -->
        <div class="company-description row">
            <div class="four columns">

                <h2 class="entry-title">

                    <div class="company-logo">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </div>

                </h2>

            </div>


            <!-- 	This outputs the post EXCERPT.  To display full content including images and html, 
		replace the_excerpt(); with the_content();  below. -->
            <div class="six columns">

                <div class="entry-summary">
                    <?php the_content(); ?>
                </div>

            </div>

        </div>
    </div>
    <!-- // Post Wrap End -->
