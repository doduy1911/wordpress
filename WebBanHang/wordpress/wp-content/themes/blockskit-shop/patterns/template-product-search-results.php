<?php
/**
 * Title: Template Product Search Results
 * Slug: blockskit-shop/template-product-search-results
 * Categories: template
 * Inserter: false
 */
$blockskit_shop_images = array(
	BLOCKSKIT_SHOP_URL . 'assets/images/inner-banner-img1.jpg',
);
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-large","padding":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"inherit":true,"type":"constrained"},"UAGDay":[]} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[0]); ?>","id":345,"dimRatio":70,"focalPoint":{"x":0.5,"y":0},"minHeight":350,"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-bottom:var(--wp--preset--spacing--xx-large);min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-345" alt="" src="<?php echo esc_url($blockskit_shop_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:woocommerce/breadcrumbs {"align":""} /-->

<!-- wp:query-title {"type":"search","textAlign":"left","showPrefix":false} /--></div></div>
<!-- /wp:cover -->

<!-- wp:woocommerce/store-notices {"align":""} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","UAGDay":[]} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"medium"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'No products were found matching your selection.', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"Search products…","query":{"post_type":"product"}} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->