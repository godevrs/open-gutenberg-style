<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Plugin Name: Gutenberg Style
 * Plugin URI: https://github.com/WordPress/gutenberg
 * Description: Simple style for Gutenberg editor.
 * Requires at least: 5.7
 * Requires PHP: 5.6
 * Version: 1.0.0
 * Author: Goran Petrovic
 * Text Domain: gutenberg
 *
 * @package gutenberg
 */

if ( !class_exists( 'Open_Gutenberg_Style' ) ) :

 class Open_Gutenberg_Style{

  function __construct(){
    //add block editor style
    add_action( 'enqueue_block_editor_assets', array( $this,  'enqueue_block_editor_assets' ), 999 );
  }


  function enqueue_block_editor_assets(){
    //custom block editor style
    wp_enqueue_style(  'custom-block-editor', plugin_dir_url( __FILE__ ). '/style.editor.css', false, '1.0', 'all' );

  }

 }
 new Open_Gutenberg_Style;
endif;
