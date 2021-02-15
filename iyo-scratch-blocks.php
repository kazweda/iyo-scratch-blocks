<?php
/*
Plugin Name: Iyo Scratch Blocks
Plugin URI: https://coderdojo-iyo.com/
Description: Visualize Scratch Code
Version: 1.0.1
Author: Kazuaki Ueda
Author URI: https://www.netplan.co.jp/
License: GPL2
*/

if ( !function_exists( 'iyo_scratch_blocks' ) ) {

  function iyo_scratch_blocks() {
    wp_enqueue_script(
      'scratchblocks',
      'https://scratchblocks.github.io/js/scratchblocks-v3.5-min.js',
      array(),
      '3.5'
    );
    wp_enqueue_script(
      'scratchblocks-translations',
      'https://scratchblocks.github.io/js/translations-all-v3.5.js',
      array(),
      '3.5'
    );
  }
  add_action('wp_enqueue_scripts', 'iyo_scratch_blocks');

}

if ( !function_exists( 'iyo_scratch_render' ) ) {

  function iyo_scratch_render() {
    ?>
    <script>
      scratchblocks.renderMatching(
        '.scratchblocks',
        {
          languages: ["en", "ja"],
          style: "scratch3"
        }
      );
    </script>
    <?php
  }
  add_action('wp_footer', 'iyo_scratch_render');

}