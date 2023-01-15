<?php

if ( ! defined( 'ABSPATH' ) ){
	die( 'Direct access to theme files is not allowed.' );
}

// $currentPage = get_page_by_title('Home Sweet Home');
// print_r($currentPage);

get_template_part( 'pages/home/news' );
// get_template_part( 'pages/home/page' );
// get_template_part( 'sidebar' );
