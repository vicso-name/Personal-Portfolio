<?php

// Register Custom Post Type for Levels
function register_level_cpt() {
    $labels = array(
        'name'               => 'Levels',
        'singular_name'      => 'Level',
        'menu_name'          => 'Levels',
        'name_admin_bar'     => 'Level',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Level',
        'new_item'           => 'New Level',
        'edit_item'          => 'Edit Level',
        'view_item'          => 'View Level',
        'all_items'          => 'All Levels',
        'search_items'       => 'Search Levels',
        'not_found'          => 'No levels found.',
        'not_found_in_trash' => 'No levels found in Trash.'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'levels' ),
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true, // Enable REST API support
    );
    register_post_type( 'level', $args );
}
add_action( 'init', 'register_level_cpt' );


// Register Custom Post Type for Units
function register_unit_cpt() {
    $labels = array(
        'name'               => 'Units',
        'singular_name'      => 'Unit',
        'menu_name'          => 'Units',
        'name_admin_bar'     => 'Unit',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Unit',
        'new_item'           => 'New Unit',
        'edit_item'          => 'Edit Unit',
        'view_item'          => 'View Unit',
        'all_items'          => 'All Units',
        'search_items'       => 'Search Units',
        'not_found'          => 'No units found.',
        'not_found_in_trash' => 'No units found in Trash.'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'units' ),
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true, // Enable REST API support
    );
    register_post_type( 'unit', $args );
}
add_action( 'init', 'register_unit_cpt' );


// Register Custom Post Type for Lessons
function register_lesson_cpt() {
    $labels = array(
        'name'               => 'Lessons',
        'singular_name'      => 'Lesson',
        'menu_name'          => 'Lessons',
        'name_admin_bar'     => 'Lesson',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Lesson',
        'new_item'           => 'New Lesson',
        'edit_item'          => 'Edit Lesson',
        'view_item'          => 'View Lesson',
        'all_items'          => 'All Lessons',
        'search_items'       => 'Search Lessons',
        'not_found'          => 'No lessons found.',
        'not_found_in_trash' => 'No lessons found in Trash.'
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'lessons' ),
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true, // Enable REST API support
    );
    register_post_type( 'lesson', $args );
}
add_action( 'init', 'register_lesson_cpt' );
