<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alextheme
 */

?>
<section class="whyus">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'slider' ); ?>
            <?php echo do_shortcode('[wpaft_logo_slider]') ?>
        </div>
    </div>
</section>
<section class="contact" style="background: url('<?php echo get_theme_mod('img-upload');?>') center/cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
            <div class="col-sm-6">
                <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
        </div>
    </div>
</section>
<section class="footerlogo">
    <div class="container">
        <div class="row center">
            <h1 class="logo"><?php echo get_custom_logo();?>AJ<span class="y">y</span></h1>
        </div>
    </div>
</section>
<section class="footercopy">
    <div class="container">
        <div class="row center">
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>
