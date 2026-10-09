<?php
/**
 * Plugin Name: Word Counter Plugin
 * Version: 1.0.0
 * Description: Adds a word counter + reading time estimator to the top of posts
 * Author: Gordon Huang
 *
 */

// prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

function swc_get_stats_html($content) {

    $clean_content = wp_strip_all_tags($content);.
    $word_count = str_word_count($clean_content);
    
    // assume avg reading speed of 200 words/min
    $reading_time = ceil($word_count / 200);

    
    $output  = '<div class="swc-stats-box" style="background:#f4f4f4; border-left:4px solid #0073aa; padding:10px 15px; margin-bottom:20px; font-size:14px;">';
    $output .= '<strong>Post Statistics:</strong> ';
    $output .= number_format($word_count) . ' words | Approx. ' . $reading_time . ' min read';
    $output .= '</div>';

    return $output;
}

function swc_append_word_count($content) {
    // only display on main single blog posts (ignore pages, archives, or sidebars).
    if (is_single() && is_main_query()) {
        $stats = swc_get_stats_html($content);
        // add the output html to the start of the post
        return $stats . $content;
    }
    
    return $content;
}
// call swc_append_word_count when 'the_content' (filter hook) is executed
add_filter('the_content', 'swc_append_word_count');

// shortcode handler for custom placement
function swc_shortcode_handler() {
    global $post;
    if (!$post) {
        return '';
    }
    
    return swc_get_stats_html($post->post_content);
}
add_shortcode('word_count', 'swc_shortcode_handler');