<?php
/**
 * Functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @see https://codex.wordpress.org/Plugin_API for more information on hooks, actions, and filters.
 * @see https://github.com/wpbrasil/odin for documentation Odin Theme.
 *
 * @package Odin
 * @subpackage Custom_Theme
 */

/**
 * Core Odin Framework.
 */
require_once get_template_directory() . '/inc/core.php';

/**
 * Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Admin.
 */
require_once get_template_directory() . '/inc/theme.php';

/**
 * Woocommerce.
 */
require_once get_template_directory() . '/inc/woocommerce.php';
