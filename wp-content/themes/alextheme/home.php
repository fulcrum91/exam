<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skokov
 */

get_header(); ?>

    <section class="title-banner" style="background: url('<?php echo get_theme_mod('img-upload2');?>') center/cover no-repeat;">
        <div class="container">
            <div class="row">
                <div class="portfolio">
                    <h1 class="section-title"><?php single_post_title()?></h1>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
    <div class="row">
    <div class="col-sm-8 blogg">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );

        endwhile;

            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>


    </div>
        <?php
        get_sidebar();
        ?>
    </div>
    </div>

<?php
get_footer();
