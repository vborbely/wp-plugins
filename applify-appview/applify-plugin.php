<?php
/*
  Plugin Name: Applify Mobile App Actions and Filters
  Description: This is a plugin for setup mobile app view on URL params.
      Hides the Site Footer and Header, when the GET param 'appview=1' set.
  Version: 0.1
  Author: Viktor Borbély
  Author URI: https://uira-tervezve.hu
  Date: 6 August 2023
*/

// Add the ability to hide elements when a "appview" query string is present.

function hide_header_on_appview_css() {
    // Check if 'appview' exists in the GET query
    if (isset($_GET['appview'])) {
        echo '<style type="text/css">header { display: none !important; }</style>';
    }
}

function hide_footer_on_appview_css() {
    // Check if 'appview' exists in the GET query
    if (isset($_GET['appview'])) {
        echo '<style type="text/css">footer { display: none !important; }</style>';
    }
}

add_action('wp_head', 'hide_header_on_appview_css');
add_action('wp_head', 'hide_footer_on_appview_css');
