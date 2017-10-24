<section class="features-row">

  <div class="container">

    <div class="wide-content">

      <?php if(!empty(get_sub_field('basic_content_title'))) : ?>

        <h2 class="title"><?php the_sub_field('basic_content_title'); ?></h2>

        <hr>

      <?php endif; ?>

      <div class="three-column-feature">

        <?php if( have_rows('feature_row_content') ):

          while ( have_rows('feature_row_content') ) : the_row(); ?>

          <div class="feature-item">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/alfi-tick.svg" alt="Alfi Tick" class="tick-icon">

            <p class="feature-text"><?php echo the_sub_field('feature_row_item'); ?></p>

          </div>

          <?php endwhile ?>

        <?php endif ?>

      </div>

    </div>

  </div>

</section>
