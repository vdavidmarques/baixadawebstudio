<<<<<<< HEAD
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
=======
<?php
/*
Template Name: Página Inicial
*/
get_header();

if (!\Elementor\Plugin::$instance->editor->is_edit_mode()) {
    $homePageId = 289;
    include 'components/main-banner.php';
    include 'components/services.php';
    include 'components/accounting-solutions.php';
    include 'components/contact-us.php';
    include 'components/blog.php';
}
?>
<section class="elementor-container">
    <div class="rectangle-2">&nbsp;</div>
    <div class="container scroll-top-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/top.svg" alt="Moonlight" class="icon" id="scrollToTopBtn">
    </div>
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</section>
<?php

get_footer();
>>>>>>> c55160ed23d76172e0a5992bd6c3b25ae630b0a5
