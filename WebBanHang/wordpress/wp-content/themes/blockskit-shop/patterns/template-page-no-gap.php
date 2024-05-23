<?php
/**
 * Title: Template Page No Gap
 * Slug: blockskit-shop/template-page-no-gap
 * Categories: template
 * Inserter: false
 */
$blockskit_shop_images = array(
	BLOCKSKIT_SHOP_URL . 'assets/images/inner-banner-img1.jpg',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[0]); ?>","id":12,"dimRatio":50,"focalPoint":{"x":0.5,"y":0},"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--x-large)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-12" alt="" src="<?php echo esc_url($blockskit_shop_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.666%"} -->
<div class="wp-block-column" style="flex-basis:66.666%"><!-- wp:post-title {"textAlign":"center","level":1,"textColor":"accent-text"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;padding-top:0;padding-bottom:0"><!-- wp:post-featured-image /-->

<!-- wp:post-content {"layout":{"type":"default"}} /--></main>
<!-- /wp:group -->