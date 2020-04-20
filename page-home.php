<?php
/*
  * Template name: Home
  * */
get_header();

?>


<main class="main">
	<div class="main-image-block">
		<div class="mib-image">
			<div class="picture-moto-zone">
				<a href="<?php echo get_theme_mod( 'cust_hp_moto_link_settings' ) ?>">
					<div class="picture-moto">
						<?php echo get_theme_mod( 'cust_hp_moto_section_settings' ); ?>
					</div>
				</a>
			</div>
		</div>
	</div>
</main>


<?php get_footer();