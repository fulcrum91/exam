<?php
/*
 Template name: home
 */

get_header(); ?>
<section class="whyus">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <img class="img-responsive" src="<?php echo get_theme_mod('img-logo');?>" alt="logo2"/>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-responsive" src="<?php echo get_theme_mod('img-logo2');?>" alt="logo2"/>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-responsive" src="<?php echo get_theme_mod('img-logo3');?>" alt="logo2"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <?php dynamic_sidebar( 'body-1' ); ?>
            </div>
        </div>
    </div>
</section>
<section class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive" src="<?php echo get_theme_mod('img-logo4');?>" alt="logo2"/>
            </div>
            <div class="col-sm-6">
                <?php dynamic_sidebar( 'body-2' ); ?>
            </div>
        </div>
    </div>
</section>
<section class="offering">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'body-3' ); ?>
            <?php
            $query = new WP_Query( array('post_type' => 'offering', 'posts_per_page' => 100 ) );
            if ($query->have_posts()):?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="">
                            <div>
                                <?php the_post_thumbnail('full', 'class=img-responsive center-block'); ?>
                            </div>
                            <h3 class="offeringpost">
                                <?php the_title();?>
                            </h3>
                            <div class="offeringposttext">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="works">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'body-4' ); ?>
            <?php
            $query = new WP_Query( array('post_type' => 'latestwork', 'posts_per_page' => 100 ) );
            if ($query->have_posts()):?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="">
                            <div>
                                <?php the_post_thumbnail('', ''); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>

    </div>
</section>



<?php
get_footer();
