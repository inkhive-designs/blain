<div id="featured-angle">
    <div class="container">
    <?php if ( get_theme_mod('blain_featured_angle_enable',true) && is_front_page() ) : ?>
            <div class="popular-articles col-md-12">
                <?php if(get_theme_mod('blain_featured_angle_title')):?>
                    <div class="section-title">
                        <span><?php echo get_theme_mod('blain_featured_angle_title',__('Popular Articles','blain')); ?></span>
                    </div>
                <?php endif;?>
                <div class="container">
                <div id="curve"></div>
                </div>
                <?php /* Start the Loop */ $count=0; ?>
                <?php
                $args = array( 'posts_per_page' => 3, 'category' => get_theme_mod('blain_featured_angle_cat') );
                $lastposts = get_posts( $args );
                foreach ( $lastposts as $post ) :
                    setup_postdata( $post ); ?>

                    <div class="col-md-4 col-sm-4 col-xs-12 imgcontainer">
                        <a href="<?php the_permalink()?>">
                            <div class="popimage">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('blain-thumb'); ?></a>
                                <?php else : ?>
                                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
                                <?php endif; ?>
                            </div>
                            <div class="titledesc">
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                            <p class="description">
                                <?php echo substr(get_the_excerpt(),0,400).(get_the_excerpt() ? "..." : "" ); ?>
                            </p>
                            </div>
                        </a>
                    </div>

                    <?php $count++;
                    if ($count == 4) break;
                endforeach;
                wp_reset_postdata(); ?>
                <div class="featured-angle-after"></div>
            </div>

        <?php endif; ?>
</div>
</div>
