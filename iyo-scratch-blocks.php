<?php
/*
Plugin Name: Iyo Scratch Blocks
Plugin URI: https://coderdojo-iyo.com/
Description: Visualize Scratch Code
Version: 1.0
Author: Kazuaki Ueda
Author URI: https://www.netplan.co.jp/
License: GPL2
*/

function add_scratch_blocks() {
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
add_action('wp_enqueue_scripts', 'add_scratch_blocks');

function add_scratch_render() {
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
add_action('wp_footer', 'add_scratch_render');
