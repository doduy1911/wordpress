<?php
/**
 * Title: Header
 * Slug: blockskit-shop/header
 * Categories: all, header
 */

$blockskit_shop_images = array(
BLOCKSKIT_SHOP_URL . 'assets/images/contact-img1.png',
);
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"26%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:26%"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontSize":"12px","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-text"} -->
<p class="has-text-align-center has-accent-text-color has-text-color" style="font-size:12px;font-style:normal;font-weight:500;line-height:1"><?php echo esc_html__( 'FREE RETURNS. STANDARD SHIPPING ORDERS $99+', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"32%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="flex-basis:32%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":5,"textColor":"accent-text","overlayTextColor":"heading","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} /-->

<!-- wp:social-links {"iconColor":"secondary-accent","iconColorValue":"#ebeefc","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"84%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:84%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":6,"icon":"menu","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"4%","style":{"border":{"right":{"color":"var:preset|color|outline","width":"1px"},"top":[],"bottom":[],"left":[]}},"className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="border-right-color:var(--wp--preset--color--outline);border-right-width:1px;flex-basis:4%"><!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"17%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:17%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:media-text {"mediaId":70,"mediaLink":"<?php echo esc_url($blockskit_shop_images[0]); ?>","mediaType":"image","mediaWidth":15,"isStackedOnMobile":false,"imageFill":false,"style":{"layout":{"selfStretch":"fixed","flexSize":"190px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-media-text" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url($blockskit_shop_images[0]); ?>" alt="" class="wp-image-70 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:0;margin-bottom:0">Contact for info :</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h6 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( '+21(352) 8489', 'blockskit-shop' ); ?></h6>
<!-- /wp:heading --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->