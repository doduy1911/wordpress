<?php
/**
 * Title: Template Page
 * Slug: blockskit-shop/template-page
 * Categories: template
 * Inserter: false
 */
$blockskit_shop_images = array(
	BLOCKSKIT_SHOP_URL . 'assets/images/inner-banner-img1.jpg',
);
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0px","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;padding-top:0px;padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[0]); ?>","id":345,"dimRatio":70,"focalPoint":{"x":0.5,"y":0},"minHeight":350,"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-bottom:var(--wp--preset--spacing--xx-large);min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-345" alt="" src="<?php echo esc_url($blockskit_shop_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1} /--></div></div>
<!-- /wp:cover -->

<!-- wp:post-featured-image /-->

<!-- wp:post-content {"layout":{"type":"default"}} /--></main>
<!-- /wp:group -->