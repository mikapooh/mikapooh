<?php
/**
 * Page template
 */

get_header(); ?>

    <div class="sub-banner">
        <div class="bodywrap">
            <?php if (function_exists('simtiful_breadcrumbs')) simtiful_breadcrumbs(); ?>
            <div class="search-top">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>

    <div class="bodywrap main-content-wrap">

<!--         <canvas width="1200" height="650" id="myCanvas"></canvas>
 -->        <div class="m1">
            <div class="monku">
                <div class="type-mask"><h2>Creation&Fantasy</h2>   </div>
            </div>
            <p class="word">自分の中からつくりだすものがすきです。</p>
        </div>
        <div class="m2">
            <div class="monku">
                    <div class="type-mask"><h2>Drowing&Reading</h2></div>
            </div>
            <p class="word">描きたい絵に、読みたい本に夢中になることがすきです。</p>
        </div>
        <div class="m3">
            <div class="monku">
                    <div class="type-mask"><h2>Winnie the POOH</h2></div>
            </div>
            <p class="word">こよなく愛して人生の半分以上。いつも一緒です。</p>
        </div>
               <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                        echo '<div class="comment-wrap">';
                            comments_template();
                        echo '</div>';
                        endif;


                    // End the loop.
                    endwhile;
                ?>
    </div> <!-- END bodywrap -->

<?php get_footer(); ?>
