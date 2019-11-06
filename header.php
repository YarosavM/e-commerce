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

<section class="slider-example">
	<div class="newhomeslider wrapper">
		<ul class="slides">
			<?php $slider = ale_sliders_get_slider('test-slider');  ?>
			<?php if($slider):?>
				<?php foreach ($slider['slides'] as $slide) : ?>
					<li>
						<figure>
							<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
							<figcaption>
								<div class="sliderdata">
									<?php if($slide['title']){ ?>
										<div class="titleslide headerfont">
											<?php if($slide['url']){
												echo "<a href='".$slide['url']."'>";
											} ?>

											<?php echo $slide['title']; ?>

											<?php if($slide['url']){
												echo "</a>";
											} ?>
										</div>
									<?php } ?>
									<?php if($slide['description']){ ?>
										<div class="descriptionslide">
											<?php echo $slide['description']; ?>
										</div>
									<?php } ?>
									<?php if($slide['html']){ ?>
										<div class="descriptionslide">
											<?php echo $slide['html']; ?>
										</div>
									<?php } ?>
								</div>
							</figcaption>
						</figure>
					</li>
				<?php endforeach; ?>
			<?php endif;?>
		</ul>
	</div>
</section>

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
					<!--<li>
						<a href="">
							<div class="user-cabinet"></div>
						</a>
					</li>-->
					<li>
						<a href="http://localhost/wamp_wordpress/wordpress/cart/">
							<div class="basket"></div>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="sections-menu" id="sections-menu">
		<ul class="menu">
			<li class="sections-menu-element">
				<a href="http://localhost/wamp_wordpress/wordpress/product-category/shop/">
					<div class="header-menu-option">Women</div>
				</a>
			</li>
			<li class="sections-menu-element">
				<a href="http://localhost/wordpress/shop/#men">
					<div class="header-menu-option">Men</div>
				</a>
			</li>
			<li class="sections-menu-element">
				<a href="http://localhost/wordpress/shop/#new">
					<div class="header-menu-option">New</div>
				</a>
			</li>
			<li class="sections-menu-element">
				<a href="http://localhost/wordpress/shop/#sale">
					<div class="header-menu-option">Sales</div>
				</a>
			</li>
		</ul>
	</div>
</header>