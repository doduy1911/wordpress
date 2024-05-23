<?php
/**
 * Title: Client Posts
 * Slug: blockskit-shop/client-posts
 * Categories: all, client posts
 * Keywords: client posts
 */
$blockskit_shop_images = array(
BLOCKSKIT_SHOP_URL . 'assets/images/testimonial-img1.jpg',
);
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'CUSTOMER&#39;S', 'blockskit-shop' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'REVIEW', 'blockskit-shop' ); ?></mark></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"24px"},"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="margin-top:24px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"id":41,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($blockskit_shop_images[0]); ?>" alt="" class="wp-image-41" style="border-radius:100%;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Quisque adipisicing praesent anim, vestibulum morbi felis magni quaerat habitasse conubia aptent, aptent, proin rhoncus inset unit.', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6,"fontSize":"x-small"} -->
<h6 class="wp-block-heading has-x-small-font-size"><?php echo esc_html__( 'NAVY SMITH', 'blockskit-shop' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"12px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:12px"><?php echo esc_html__( 'Customer', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:columns {"verticalAlignment":"bottom"} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:90%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'LATEST', 'blockskit-shop' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'BLOG', 'blockskit-shop' ); ?></mark></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:10%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|outline","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0","right":"0","top":"2px","bottom":"2px"}},"typography":{"fontSize":"12px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:12px"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:2px;padding-right:0;padding-bottom:2px;padding-left:0"><?php echo esc_html__( 'VIEW MORE', 'blockskit-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":42,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"","height":"200px"} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small"}}},"textColor":"primary","className":"is-style-swt-post-terms-pill"} /-->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-small"}},"typography":{"lineHeight":"1.3","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->

<!-- wp:post-content {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->