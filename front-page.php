<?php
$context          = Timber::context();
// Set a home page variable
$context['is_front_page'] = 'true';

Timber::render(array('home.twig'), $context);