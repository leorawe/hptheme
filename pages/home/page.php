<?php

namespace timber_hp_theme\timber_hp_theme;

use Timber;

/** Stop executing files when accessing them directly */
if ( ! defined( 'ABSPATH' ) ){
	die( 'Direct access to theme files is not allowed.' );
}

$context          = Timber::context();
$context['post']  = Timber::get_post();
$context['posts'] = Timber::get_posts();
// $templates        = [ "home/view.twig" ];
$templates        = array( 'single.twig' );

Timber::render(
	$templates,
	$context
);
