<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper row grid-x images-list">

		<div class="product-image product-image-colored">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>

			<figure id="zoom" class="zoom" style="background-image: url(<?php 

				echo $image[0];

				?>)" onmousemove='zoom(event)'>
	  			<img src="<?php echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" class="product-full-image">
	  		</figure>
		</div>

		<div class="sub-images-zone row grid-x" id="subImageContainer">
			<div class="cell medium-1 large-1 small-1 slide-block" id="slideBack">&#8249;</div>
			<div class="cell medium-10 large-10 small-10">
				<div class="row grid-x images-list" id="subImageContent">
					<img src="<?php echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" class="cell large-4 medium-4 small-6 product-sub-image">
					<?php
						$attachment_ids = $product->get_gallery_attachment_ids();

						//Get URL of Gallery Images - default wordpress image sizes
						foreach( $attachment_ids as $attachment_id ) {?>
						  	<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" data-id="<?php echo $loop->post->ID; ?>" class="cell large-4 medium-4 small-6 product-sub-image">
						<?php }
					?>
				</div>
			</div>
			<div class="cell medium-1 large-1 small-1 slide-block" id="slide">&#8250;</div>
		</div>

	</figure>
</div>
