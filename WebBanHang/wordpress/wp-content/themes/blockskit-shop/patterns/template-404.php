<?php
 /**
  * Title: Template 404
  * Slug: blockskit-shop/template-404
  * Categories: template
  * Inserter: false
  */
$blockskit_shop_images = array(
BLOCKSKIT_SHOP_URL . 'assets/images/inner-banner-img1.jpg',
);
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"UAGDay":[]} -->
<main class="wp-block-group" style="padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[0]); ?>","id":18,"dimRatio":70,"overlayColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><span aria-hidden="true" class="wp-block-cover__background has-surface-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="<?php echo esc_url($blockskit_shop_images[0]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 30vw, 15rem)","fontWeight":"400","lineHeight":"1"}},"className":"has-text-align-center"} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(4rem, 30vw, 15rem);font-weight:400;line-height:1">
<?php echo esc_html__( '404', 'blockskit-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","backgroundColor":"primary","textColor":"light"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->