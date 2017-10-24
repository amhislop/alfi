<section class="specs-row">

  <div class="container">

    <div class="wide-content">

      <div class="stripes-center">

        <span class="stripe"></span>
        <span class="stripe"></span>
        <span class="stripe"></span>

      </div>

      <?php if( have_rows('product_spec') ): ?>

        <div class="specs-items">

          <?php while ( have_rows('product_spec') ) : the_row(); ?>

            <div class="specs-description">

              <span class="specs-title"><?php the_sub_field('specs_title'); ?></span>

              <span class="specs-subtitle"><?php the_sub_field('specs_subtitle'); ?></span>

            </div>

          <?php endwhile;?>

        </div>

      <?php endif;?>

      <div class="specs-image">

        <div>

          <img src="<?php the_sub_field('specs_row_image') ?>" alt="#">

        </div>

      </div>
      
    </div>

  </div>

</section>
