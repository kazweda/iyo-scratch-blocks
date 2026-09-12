<?php
/*
Plugin Name: Iyo Scratch Blocks
Plugin URI: https://github.com/kazweda/iyo-scratch-blocks
Description: Visualize Scratch Code
Version: 1.1.1
Author: Kazuaki Ueda
Author URI: https://www.netplan.co.jp/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( !function_exists( 'iyo_scratch_blocks' ) ) {

  function iyo_scratch_blocks() {
    wp_enqueue_script(
      'scratchblocks',
      plugins_url( 'assets/js/scratchblocks/scratchblocks-v3.7.1-min.js', __FILE__ ),
      array(),
      '3.7.1'
    );
    wp_enqueue_script(
      'scratchblocks-translations',
      plugins_url( 'assets/js/scratchblocks/translations-all-v3.7.1.js', __FILE__ ),
      array(),
      '3.7.1'
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