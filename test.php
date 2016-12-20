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
      <section class="page1">
        <h2>Web design</h2>
        <div class="flex-container">
             <div class="flex-item"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/site1.jpg" alt=""></a>
                <ul class="site">
                    <li>UL design</li>
                    <li>HTML/CSS</li>
                    <li>gulp/Scss</li>
                    <li>Bootstrap</li>
                    <li>jQuery</li>
                </ul>
            </div>
        <div class="flex-item"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/site2.jpg" alt=""></a>
            <ul class="site">
                <li>UL design</li>
                        <li>HTML/CSS</li>
                        <li>gulp/Scss</li>
                        <li>Bootstrap</li>
                        <li>jQuery</li>
                    </ul>
        </div>
