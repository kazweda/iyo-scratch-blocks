<?php
/*
Plugin Name: Iyo Block Code Renderer for Scratch
Plugin URI: https://github.com/kazweda/iyo-block-code-renderer-scratch
Description: Visualize Scratch Code
Version: 1.1.6
Author: Kazuaki Ueda
Author URI: https://netplan.co.jp/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( !function_exists( 'iyo_scratch_blocks' ) ) {

  function iyo_scratch_blocks() {
    wp_enqueue_script(
      'scratchblocks',
      plugins_url( 'assets/js/scratchblocks/scratchblocks-v3.7.1-min.js', __FILE__ ),
      array(),
      '3.7.1',
      true
    );
    wp_enqueue_script(
      'scratchblocks-translations',
      plugins_url( 'assets/js/scratchblocks/translations-all-v3.7.1.js', __FILE__ ),
      array( 'scratchblocks' ),
      '3.7.1',
      true
    );
    wp_add_inline_script(
      'scratchblocks-translations',
      'scratchblocks.renderMatching(".scratchblocks", { languages: ["en", "ja"], style: "scratch3" });'
    );
  }
  add_action('wp_enqueue_scripts', 'iyo_scratch_blocks');

}
