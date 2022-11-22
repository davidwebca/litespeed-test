<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_action('init', function() {
    if(isset($_GET['force_purge'])) {
        do_action( 'litespeed_purge_all' );
    }
}, PHP_INT_MIN);


/**
 * Litespeed ESI
 * Load any view in ESI
 */
add_action('litespeed_esi_load-fondues_loader', function($params=[]) {
    if(isset($params['view']) && \Roots\view()->exists($params['view'])) {
        do_action( 'litespeed_control_set_nocache' );
        echo \Roots\view($params['view'])->render();
    }
});

/**
 * Provide fallback if Litespeed isn't installed
 */
// add_filter('litespeed_esi_url', function($url_or_name, $context, $params=[]) {
//     // If ESI is not enabled (or if search? bug here with ?s=)
//     if(!apply_filters( 'litespeed_esi_status', false ) || is_search() && isset($params['view']) && \Roots\view()->exists($params['view'])) {
//         do_action( 'litespeed_esi_load-' . $url_or_name, $params );
//         // shortcircuit further executions of this block as it's been found to be useless by returning empty string
//         return '';
//     }
//     return $url_or_name;
// }, 0, 3);
