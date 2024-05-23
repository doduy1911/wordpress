<?php
/**
 * Block Patterns
 *
 * @since 1.0.0
 */

/**
 * Registers pattern categories for Blockskit Shop
 *
 * @since 1.0.0
 *
 * @return void
 */
function blockskit_shop_register_pattern_category() {
	$block_pattern_categories = array(
		'all'      => array( 'label' => __( 'Blockskit Shop Patterns', 'blockskit-shop' ) ),
		'home'     => array( 'label' => __( 'Home', 'blockskit-shop' ) ),
		'services' => array( 'label' => __( 'Services', 'blockskit-shop' ) ),
		'clients'  => array( 'label' => __( 'Clients', 'blockskit-shop' ) ),
		'pricing'  => array( 'label' => __( 'Pricing', 'blockskit-shop' ) ),
		'callback' => array( 'label' => __( 'Call to Action', 'blockskit-shop' ) ),
	);

	$block_pattern_categories = apply_filters( 'blockskit_shop_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}		
	}
}
add_action( 'init', 'blockskit_shop_register_pattern_category', 9 );


