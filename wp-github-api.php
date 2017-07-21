<?php
/**
 * WP Github API (https://developer.github.com/)
 *
 * @package WP-Github-API
 */

/*
* Plugin Name: WP Github API
* Plugin URI: https://github.com/wp-api-libraries/wp-github-api
* Description: Perform API requests to Github in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI:https://developer.github.com/
* GitHub Branch: master
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
/* Check if class exists. */
if ( ! class_exists( 'GithubAPI' ) ) {

require_once( plugin_dir_path( __FILE__ ) . 'lib/Github/HttpClient/Builder.php' );
	/**
	 * GithubAPI class.
	 */
	class GithubAPI {

	}
}
