<?php
/*
Plugin Name: Enigma BBS Connector
Description: Connect and manage an Enigma½ BBS node from WordPress.
Version: 1.0
Author: Jeremy Anderson
*/

defined('ABSPATH') or die('No script kiddies please!');

require_once plugin_dir_path(__FILE__) . 'includes/bbs-control.php';
require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';

function enigma_bbs_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'public/terminal-embed.php';
    return ob_get_clean();
}
add_shortcode('bbs_terminal', 'enigma_bbs_shortcode');

function enigma_bbs_enqueue_assets() {
    wp_enqueue_style('enigma-bbs-css', plugins_url('assets/css/terminal.css', __FILE__));
    wp_enqueue_script('xterm-js', 'https://unpkg.com/xterm/lib/xterm.js', [], null, true);
    wp_enqueue_script('bbs-terminal', plugins_url('assets/js/terminal.js', __FILE__), ['xterm-js'], null, true);
}
add_action('wp_enqueue_scripts', 'enigma_bbs_enqueue_assets');
