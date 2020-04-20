<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<?php /*if(ale_get_option('sitelogo')){
    echo "<img src='".ale_get_option('sitelogo')."' />";
}*/ ?>
<?php ale_option('sitelogo'); /*?>


<?php */ ?>


<!-- Custom Header -->

<header class="header">
	<div class="header-navbar">
		<nav class="navbar" id="navbar">
			<div class="navbar-block  navbar-left">
				<ul class="navbar-block-section float-left menu">
					<a href="http://localhost/wamp_wordpress/wordpress/">
						<li class="menu-text">
							<span class="site-name decored-font-1">Lia</span><span class="pre-site-name">.go</span>
						</li>
					</a>
				</ul>
				<ul class="navbar-block-section float-right menu">
					<li>
						<div class="input-group search-zone">
							<input type="text" class="input-group-field search-field" name="" placeholder="I want to find...">
							<div class="input-group-button">
								<input type="submit" class="black-button button search-button small" value="Search">
							</div>
						</div>
					</li>
					<li>
						<a href="http://localhost/wamp_wordpress/wordpress/cart/">
							<div class="basket"></div>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'shop_categories_pos',
			'container_class' => 'sections-menu',
			'container_id' => 'sections-menu',
		) );
		?>
</header>