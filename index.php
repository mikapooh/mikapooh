<?php
/**
 * The main template file
 *
 * Simtiful 1.0.0
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */

get_header(); ?>

<div class="main-banner">
    <canvas id="myCanvas" width="2000" height="800"></canvas>
        <div class="bodywrap">
            <div class="home-cta">
            <h1><img src="<?php echo get_template_directory_uri();?>/img/mikapooh.png" height="348" width="818" alt="" class="mikapooh"></h1>
            </div>

        </div>
    </div>

    <div class="bodywrap home-showcase">
        <div class="mansory">
        <?php
            while ( have_posts() ) : the_post();

                echo '<div class="grid6">';
                    // Include the page content template.
                    get_template_part( 'content', 'simple' );
                echo '</div>';

            // End the loop.
            endwhile;

        ?>
        </div>
    </div> <!-- END bodywrap -->

    <div class="bodywrap home-pgn">
        <?php
            // Page navigation.
            simtiful_posts_nav_link();
        ?>
    </div>

<?php get_footer(); ?>
