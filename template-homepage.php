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



            <div class="homepage-slider">

            </div><!-- .homepage-slider -->


                <main id="main" class="site-main" role="main">
 
                        <div id="homepage-central-content-block">

                            <?php $args = array(
                                'order'                  => 'ASC',
                                'orderby'                => 'menu_order',
                                'post_type'              => 'nav_menu_item',
                                'post_status'            => 'publish',
                                'output'                 => ARRAY_A,
                                'output_key'             => 'menu_order',
                                'nopaging'               => true,
                                'update_post_term_cache' => false );

                            $menu = "Default";

                            $menu_items = wp_get_nav_menu_items( $menu, $args );

                            $output = array();

                            $column = 0;
                            $column_limit = 4;
                            $item = 0;
                            $item_limit = 4;

                            foreach ($menu_items as $menu_item) {

                                // Increment item counter, because we just got a new item.
                                $item++;

                                // Check for new column. This is signified by $menu_item->menu_item_parent = 0.
                                // If it's a new one, increment $column and reset $item.
                                if ($menu_item->menu_item_parent == 0) {
                                    $column++;
                                    $item = 0;
                                }
                                if ($column < $column_limit) {
                                    // This is a column we should display.

                                    if ($item < $item_limit) {
                                        // Less than item max, display it.
                                        $output[$column][] = $menu_item->ID . ': ' . $menu_item->title . ', parent: ' . $menu_item->menu_item_parent;

                                    }
                                    else {
                                        // Greater than item_max, don't display it.

                                    }

                                }
                                else {
                                    // This is not a column we should display.

                                }

                            }


                            echo "<div class=\"dept-hp-menu-wrapper\">\n";

                            foreach ($output as $col => $vals) {

                                echo '<div class="col' . $col . "\">\n<ul>\n";

                                foreach ($vals as $key => $val) {
                                    echo "<li>" . $val . "</li>\n";
                                }

                                echo "</ul>\n</div>\n";

                            }

                            echo "</div>\n";

                            ?>




                        </div><!-- #homepage-central-content-block -->

                </main><!-- #main -->
                
                <!-- site-main-footer-shim -->
                <div id="main-footer-shim" class="site-main-footer-shim"></div>
                
        </div><!-- #primary -->

<?php get_footer(); ?>
