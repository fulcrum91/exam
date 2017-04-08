<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package alextheme
 */

?>
<div class="col-sm-6">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php
            if ( is_single() ) :
                the_post_thumbnail('full', 'class=img-responsive center-block');
                the_title( '<h1 class="entry-title bloggtitle">', '</h1>' );
            else :
                the_post_thumbnail('full', 'class=img-responsive center-block');
                the_title( '<h2 class="entry-title bloggtitle "><a class="bloggtitle" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content bloggtext">
            <?php
            the_excerpt();


            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alextheme' ),
                'after'  => '</div>',
            ) );
            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta bloggtime">
                    <?php the_time('m,j,Y ') ?>
                </div><!-- .entry-meta -->
                <?php
            endif;
            ?>
        </div><!-- .entry-content -->

       <!-- <footer class="entry-footer">
            <?php /*alextheme_entry_footer(); */?>
        </footer><!-- .entry-footer -->
    </article><!-- #post-## -->
</div>
