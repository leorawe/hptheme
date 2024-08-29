<?php

namespace timber_hp_theme\timber_hp_theme;

use Timber;

/** Stop executing files when accessing them directly */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access to theme files is not allowed.' );
}

$context         = Timber::context();
$timber_post     = Timber::get_post();
$context['post'] = $timber_post;

Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );


