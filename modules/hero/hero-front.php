<?php// if (is_front_page() ) : ?>
<div id="hero" data-parallax="scroll" data-speed="0.15" data-image-src="<?php echo get_header_image() ?>">
	<div class="layer"></div>
	<div class="hero-content">
		<div class="container">
            <?php get_template_part('modules/navigation/primary-mobile','menu');?>
			<?php if (get_theme_mod('blain_heading')) : ?>
			<h2 class="hero-title"><?php echo get_theme_mod('blain_heading') ?></h2>
			<?php endif; ?>

			<?php if (get_theme_mod('blain_btn')) : ?>
			<div class="hero-button-wrapper">
				<a class="hero-button hvr-icon-wobble-horizontal" href="<?php echo get_theme_mod('blain_h_url') ?>"><?php echo get_theme_mod('blain_btn') ?></a>
            </div>
			<?php endif; ?>
		</div>

            <span id="searchicon" class="fa fa-search"></span>

	</div>
</div>
<?php //endif; ?>

