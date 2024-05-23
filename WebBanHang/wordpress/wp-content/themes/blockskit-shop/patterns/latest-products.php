
<?php
/**
 * Title: Latest Products
 * Slug: blockskit-shop/latest-products
 * Categories: all, latest products
 * Keywords: latest products
 */
$blockskit_shop_images = array(
    BLOCKSKIT_SHOP_URL . 'assets/images/shop-img1.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/shop-img2.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/shop-img3.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/shop-img4.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/shop-img5.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/shop-img6.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/ad-banner-img1.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/ad-banner-img2.jpg',
    BLOCKSKIT_SHOP_URL . 'assets/images/ad-banner-img3.png',
    BLOCKSKIT_SHOP_URL . 'assets/images/ad-banner-img4.jpg',
);
?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"94%"} -->
<div class="wp-block-column" style="flex-basis:94%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'LATEST', 'blockskit-shop' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'PRODUCTS', 'blockskit-shop' ); ?></mark></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"6%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:6%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|outline","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0","right":"0","top":"2px","bottom":"2px"}},"typography":{"fontSize":"12px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:12px"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:2px;padding-right:0;padding-bottom:2px;padding-left:0"><?php echo esc_html__( 'VIEW MORE', 'blockskit-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":46,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_shop_images[0]); ?>" alt="" class="wp-image-46"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<h5 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Headphone', 'blockskit-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><s><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-neutral-color"><?php echo esc_html__( '$450.00', 'blockskit-shop' ); ?></mark></s> <?php echo esc_html__( '$420.00', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":47,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_shop_images[1]); ?>" alt="" class="wp-image-47"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<h5 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'DSLR Camera', 'blockskit-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '$150.00', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":48,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_shop_images[2]); ?>" alt="" class="wp-image-48"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<h5 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Samsung S23', 'blockskit-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '$215.00', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":49,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_shop_images[3]); ?>" alt="" class="wp-image-49"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<h5 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Vintage Watch', 'blockskit-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><s><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-neutral-color"><?php echo esc_html__( '$550.00', 'blockskit-shop' ); ?></mark></s> <?php echo esc_html__( '$520.00', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":50,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_shop_images[4]); ?>" alt="" class="wp-image-50"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<h5 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Camera Lens', 'blockskit-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '$210.00', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":51,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_shop_images[5]); ?>" alt="" class="wp-image-51"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<h5 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Kodak Camera', 'blockskit-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><s><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-neutral-color"><?php echo esc_html__( '$850.00', 'blockskit-shop' ); ?></mark></s> <?php echo esc_html__( '$820.00', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[6]); ?>","id":52,"dimRatio":0,"minHeight":350,"contentPosition":"top center","isDark":false,"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-52" alt="" src="<?php echo esc_url($blockskit_shop_images[6]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:700"><strong><?php echo esc_html__( 'BEST OFFER FOR ELECTRONIC', 'blockskit-shop' ); ?></strong> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'GADGETS', 'blockskit-shop' ); ?></mark></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
<p class="has-text-align-center" style="font-size:12px"><?php echo esc_html__( 'HEAVY DISCOUNT OFFER', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|cyan-bluish-gray","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0","right":"0","top":"2px","bottom":"2px"}},"typography":{"fontSize":"11px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:11px"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--cyan-bluish-gray);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:2px;padding-right:0;padding-bottom:2px;padding-left:0"><?php echo esc_html__( 'SHOP NOW', 'blockskit-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[7]); ?>","id":53,"dimRatio":0,"minHeight":350,"contentPosition":"top center","isDark":false,"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-53" alt="" src="<?php echo esc_url($blockskit_shop_images[7]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:700"><strong><?php echo esc_html__( 'BEST GAMING', 'blockskit-shop' ); ?></strong> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'LAPTOP', 'blockskit-shop' ); ?></mark></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
<p class="has-text-align-center" style="font-size:12px"><?php echo esc_html__( 'LATEST &amp; STYLISH DESIGN', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|cyan-bluish-gray","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0","right":"0","top":"2px","bottom":"2px"}},"typography":{"fontSize":"11px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:11px"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--cyan-bluish-gray);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:2px;padding-right:0;padding-bottom:2px;padding-left:0"><?php echo esc_html__( 'SHOP NOW', 'blockskit-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[8]); ?>","id":56,"dimRatio":0,"minHeight":50,"isDark":false,"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-56" alt="" src="<?php echo esc_url($blockskit_shop_images[8]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-left has-small-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__( '360° CURVE 8K SAMSUNG', 'blockskit-shop' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"> <?php echo esc_html__( 'OLED TELEVISION', 'blockskit-shop' ); ?></mark></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"12px"}}} -->
<p class="has-text-align-left" style="font-size:12px"><?php echo esc_html__( '"18% SUMMER DISCOUNT"', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|outline","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0","right":"0","top":"2px","bottom":"2px"}},"typography":{"fontSize":"11px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:11px"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:2px;padding-right:0;padding-bottom:2px;padding-left:0"><?php echo esc_html__( 'SHOP NOW', 'blockskit-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_shop_images[9]); ?>","id":55,"dimRatio":0,"minHeight":50,"isDark":false,"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-55" alt="" src="<?php echo esc_url($blockskit_shop_images[9]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-text-align-left has-small-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'BRAND', 'blockskit-shop' ); ?> NEW ASUS NITRO <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'GAMING LAPTOP', 'blockskit-shop' ); ?></mark></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"12px"}}} -->
<p class="has-text-align-left" style="font-size:12px"><?php echo esc_html__( 'Get "UPTO 30%" off !!', 'blockskit-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"style":{"border":{"radius":"0px","bottom":{"color":"var:preset|color|outline","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0","right":"0","top":"2px","bottom":"2px"}},"typography":{"fontSize":"11px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:11px"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:2px;padding-right:0;padding-bottom:2px;padding-left:0"><?php echo esc_html__( 'SHOP NOW', 'blockskit-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->