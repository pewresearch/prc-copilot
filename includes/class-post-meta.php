<?php
/**
 * Post Meta
 *
 * @package PRC Copilot
 */

namespace PRC\Platform\Copilot;

/**
 * Post Meta
 */
class Post_Meta {

	/**
	 * Post meta key.
	 *
	 * @var string
	 */
	public static $post_meta_key = '_copilot_log';

	/**
	 * Constructor.
	 *
	 * @param Loader $loader Loader.
	 */
	public function __construct( $loader ) {
		$loader->add_action( 'init', $this, 'register_post_meta' );
	}

	/**
	 * Register post meta.
	 */
	public function register_post_meta() {
		// register_post_meta(
		// 'post',
		// self::$post_meta_key,
		// array(
		// 'show_in_rest' => true,
		// 'single'       => true,
		// 'type'         => 'array',
		// 'schema'       => array(
		// 'type'       => 'object',
		// 'properties' => array(
		// 'key'   => array( 'type' => 'string' ),
		// 'value' => array( 'type' => 'string' ),
		// ),
		// ),
		// )
		// );
	}
}
