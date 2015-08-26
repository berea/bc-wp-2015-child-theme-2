<?php
/**
 * Template Name: Homepage (Department)
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package berea
 */

get_header(); ?>

        <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">
 
                        <div id="homepage-central-content-block">

     <?php

     $output = berea_get_default_menu();

                            echo "<div class=\"menu-block-wrapper\">\n";

                            foreach ($output as $col => $vals) {

                                echo "<div class=\"menu-block\">\n<ul>\n";

                                foreach ($vals as $key => $val) {
                                    echo "<li>" . $val . "</li>\n";
                                }

                                echo "</ul>\n</div>\n";

                            }

                            echo "</div>\n";




                            ?>

                            <div class="entry-content">


                            <?php
     if (have_posts()) :
         while (have_posts()) :
             the_post();
             the_content();
         endwhile;
     endif;
     ?>


                            </div>


                        </div><!-- #homepage-central-content-block -->

                </main><!-- #main -->
                
        </div><!-- #primary -->

<?php get_footer(); ?>
