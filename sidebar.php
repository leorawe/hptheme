<?php
/**
 * The Template for the sidebar containing the main widget area
 *
 * @package  WordPress
 * @subpackage  Timber
 */

// Timber::render( array( 'sidebar.twig' ), $data );
$context = array();
$context['widget'] = timber_hp_theme_widgets_init();
Timber::render('footer.twig', $context);
