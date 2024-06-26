<?php

namespace timber_hp_theme\timber_hp_theme;

use Timber;

/** Stop executing files when accessing them directly */
if ( ! defined( 'ABSPATH' ) ){
	die( 'Direct access to theme files is not allowed.' );
}

global $wp_query;

if ( is_archive() ){
	if ( is_post_type_archive() ){

	} elseif ( is_tax( 'category' ) ) {

	} elseif ( is_tax( 'post_tag' ) ) {

	}
}

$context          = Timber::context();
// Timber::get_posts( [ 'post_type' => 'portfolio', 'posts_per_page' => 3 ] )
// $context['posts'] = Timber::get_posts( [ 'post_type' => 'post', 'posts_per_page' => 10 ] );
$context['posts'] = Timber::get_posts( $wp_query );
$templates        = [ "archive.twig" ];


Timber::render(
	$templates,
	$context
);
