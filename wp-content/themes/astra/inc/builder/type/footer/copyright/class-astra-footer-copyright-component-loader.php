<?php
/**
 * Copyright Styling Loader for Astra theme.
 *
 * @package     Astra Builder
 * @link        https://www.brainstormforce.com
 * @since       Astra 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Customizer Initialization
 *
 * @since 3.0.0
 */
class Astra_Footer_Copyright_Component_Loader {
	/**
	 * Constructor
	 *
	 * @since 3.0.0
	 */
	public function __construct() {
		add_action( 'customize_preview_init', array( $this, 'preview_scripts' ), 110 );
	}

	/**
	 * Customizer Preview
	 *
	 * @since 3.0.0
	 */
	public function preview_scripts() {
		/**
		 * Load unminified if SCRIPT_DEBUG is true.
		 */
		/* Directory and Extension */
		$dir_name    = SCRIPT_DEBUG ? 'unminified' : 'minified';
		$file_prefix = SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_script( 'astra-footer-copyright-customizer-preview-js', ASTRA_BUILDER_FOOTER_COPYRIGHT_URI . '/assets/js/' . $dir_name . '/customizer-preview' . $file_prefix . '.js', array( 'customize-preview', 'astra-customizer-preview-js' ), ASTRA_THEME_VERSION, true );
	}
}

/**
 *  Kicking this off by creating the object of the class.
 */
new Astra_Footer_Copyright_Component_Loader();
