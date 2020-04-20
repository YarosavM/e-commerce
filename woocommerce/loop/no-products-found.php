<?php
/**
 * Displayed when no products are found matching the current query
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/no-products-found.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

?>
<p class="woocommerce-info"><?php esc_html_e( 'No products were found matching your selection.', 'woocommerce' ); ?></p>
<div class="row grid-x shop-content-grid">
    <div class="columns large-3 medium-3 small-12 sidebar-filter sidebar_home" id="sidebar_left">
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'filter_sidebar' ); ?>
        </div>
    </div>
    <div class="cell large-9 medium-9 small-12">
        
    </div>
</div>
