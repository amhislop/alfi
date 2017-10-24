<section class="location-row" style="background-image: url(<?php the_sub_field('product_row_background_image')?>)">

  <div class="container">

    <div class="wide-content">

      <div class="location-cards">

        <?php $sep = ', ' ?>


        <?php if( have_rows('location_row_item') ):

          while ( have_rows('location_row_item') ) : the_row(); ?>

          <div class="location-item">

            <h4><?php the_sub_field('location_name'); ?></h4>

            <p><?php the_sub_field('location_steet_address');?><br>
              <?php
                the_sub_field('location_suburb');
                echo $sep;
                strtoupper(the_sub_field('location_state'));
                echo $sep;
                the_sub_field('location_postcode');?>
            </p>

            <div class="location-buttons">

              <?php if( !empty(get_sub_field('button_label_1'))) : ?>

                <a href="<?php the_sub_field('location_button_URL_1') ?>"><?php the_sub_field('button_label_1') ?></a>

              <?php endif ?>

              <?php if( !empty(get_sub_field('button_label_2'))) : ?>

                <a href="<?php the_sub_field('location_button_URL_2') ?>"><?php the_sub_field('button_label_2') ?></a>

              <?php endif ?>

            </div>

          </div>

          <?php endwhile ?>

        <?php endif ?>

      </div>

    </div>

  </div>

</section>
