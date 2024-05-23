<?php
 /**
  * Title: Sidebar Shop
  * Slug: blockskit-shop/sidebar-shop
  * Categories: all
  */
?>

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}},"backgroundColor":"background-secondary","UAGDay":[]} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"body","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-body-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Product Search', 'blockskit-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"","placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"10px","left":"0","right":"0"}}},"backgroundColor":"background-secondary","UAGDay":[]} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"body","fontSize":"large","UAGDay":[]} -->
<h3 class="wp-block-heading has-text-align-left has-body-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Product Categories', 'blockskit-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories {"hasEmpty":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"10px","left":"0","right":"0"}}},"backgroundColor":"background-secondary","UAGDay":[]} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Filter by price', 'blockskit-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"10px","left":"0","right":"0"}}},"backgroundColor":"background-secondary","UAGDay":[]} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"body","fontSize":"large","UAGDay":[]} -->
<h3 class="wp-block-heading has-text-align-left has-body-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Recent Products', 'blockskit-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"5","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2},"fontSize":"x-small"} -->
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"width":"80px","height":"80px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->