<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

// ***
// Custom Function Starts here
// ***


// Add Purge Assets button
add_action('admin_bar_menu', function ($bar) {
    $bar->add_node(
        [
            'parent' => 'fl-builder-frontend-edit-link',
            'id' => 'purge-spacestation-assets',
            'title' => 'Purge Assets',
            'href' => add_query_arg('spacestation-purge-assets', 1),
        ]);
}, 100);

add_action('init', function () {
    if (!isset($_GET['spacestation-purge-assets']) || !is_user_logged_in()) {
        return;
    }

    if (is_callable('BWCustomizerLess::refresh_css')) {
        BWCustomizerLess::refresh_css();
    }

    if (is_callable('FLBuilderModel::delete_asset_cache_for_all_posts')) {
        FLBuilderModel::delete_asset_cache_for_all_posts();
    }

    if (is_callable('FLCustomizer::clear_all_css_cache')) {
        FLCustomizer::clear_all_css_cache();
    }
}, 1);