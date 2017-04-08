<?php

get_header(); ?>
    <section class="title-banner" style="background: url('<?php echo get_theme_mod('img-upload2');?>') center/cover no-repeat;">
        <div class="container">
            <div class="row">
                <h1 class="section-title"><?php wp_title('')?></h1>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blogg">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_post_thumbnail('full', 'class=img-responsive float'); ?>
                    <p class="singleblogtitle"><?php the_title();?></p>
                    <div class="singletext">
                        <?php the_content();?>
                    </div>
                            <!--<div class="col-sm-6">
                                <?php /*the_post_thumbnail('full', 'class=img-responsive'); */?>
                            </div>
                            <div class="col-sm-6">
                                <p class="singleblogtitle"><?php /*the_title();*/?></p>
                                <div class="singletext">
                                    <?php /*the_content();*/?>
                                </div>
                            </div>-->
            <?php endwhile; ?>
            </div>
                <?php
                get_sidebar();
                ?>

        </div>
    </div>

<?php
get_footer();
