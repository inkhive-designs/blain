<!--front page builder start-->
<?php if ( get_theme_mod('blain_static_page_enable') && is_home()) : ?>
    <div id="static_page" class="static_page-content">
        <div class="container static_page-container">
            <?php $class = wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('blain_static_page_selectpage')) ) ? 'col-md-8 col-sm-8' : 'col-md-12 centered'?>
            <div class ="<?php echo $class;?> h-content">
                <h1 class="title">
                    <?php echo get_the_title(esc_html(get_theme_mod('blain_static_page_selectpage'))); ?>
                </h1>
                <?php if(get_theme_mod('blain_static_page_full_content', true)) : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('blain_static_page_selectpage');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo $content; ?>
                    </div>
                <?php else : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('blain_static_page_selectpage');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo substr($content, 0, 200)."..."; ?>
                    </div>
                <?php endif; ?>
                <?php if ( get_theme_mod('blain_static_page_button') != '') : ?>
                    <a href="<?php the_permalink(get_theme_mod('blain_static_page_selectpage')); ?>" class="more-button">
                        <?php echo esc_html(get_theme_mod('blain_static_page_button')); ?>
                    </a>
                <?php endif; ?>
            </div>

            <?php if(wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('blain_static_page_selectpage')) )):?>
                <div class="f-image col-md-4 col-sm-4">
                    <?php $a =  wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('blain_static_page_selectpage')) ); ?>
                    <a href="<?php the_permalink(get_theme_mod('blain_static_page_selectpage')); ?>"><img alt="<?php the_title()?>" src="<?php echo $a; ?>"></a>
                </div>
            <?php endif;?>
		</div>
    </div>
<?php endif; ?>
<!--front page builder end-->