<?php

// ------------------------------------
// Add stylesheet
// ------------------------------------

function load_resources() {

  wp_enqueue_style('site', get_template_directory_uri() . '/assets/css/site.css');
  wp_enqueue_script('site', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'), '1.0.0', true );

}

add_action('wp_enqueue_scripts', 'load_resources');

// Navigation Menus
register_nav_menus(array(
  'primary' => __( 'Primary Menu'),
  'footer' => __( 'Footer Menu')
));

// Get top ancestor
function get_top_ancestor_id() {

  global $post;

  if ($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];

  }

  return $post->ID;

}

// Does page have children
function has_children() {

  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);

}

// Customize excerpt word count Length
function custom_excerpt_length() {
  return 25;
}


// Product Row Images
add_filter('excerpt_length', 'custom_excerpt_length');

function product_images($parent, $image_class) {
  if( have_rows($parent) ):

    while ( have_rows($parent) ) : the_row(); ?>

      <div class="color-image <?php echo $image_class ?>"><img src="<?php the_sub_field('product_photo_image') ?>"></div>

    <?php
    endwhile;

  endif;

}
