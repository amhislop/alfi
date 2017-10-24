<?php // Template Name: Page Builder ?>

<?php get_header(); ?>

<?php get_template_part('partials/top','bar'); ?>

<?php get_template_part('/partials/header', 'default'); ?>

<?php Agency_Rows::render($post->ID); ?>

<?php get_template_part('/partials/enquiry', 'button'); ?>

<?php get_footer(); ?>
