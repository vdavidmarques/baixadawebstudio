<?php
/*
Template Name: Página Inicial
*/
get_header();
$slug = 'portfolio';
$homePageId = get_page_id_by_slug($slug);

include 'components/main-banner.php';
include 'components/services.php';
include 'components/accounting-solutions.php';
include 'components/contact-us.php';
include 'components/blog.php';

get_footer();
