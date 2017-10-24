<section class="color-row" style="background-image: url(<?php the_sub_field('product_row_background_image')?>)">

  <div class="container">

    <div class="wide-content">

      <div class="image-container">

        <?php
        $white_photo = 'product_row_white_photo';
        $black_photo = 'product_row_black_photo';
        ?>

        <div class="color-row-images white">

          <?php product_images($white_photo, 'white'); ?>

        </div>

        <div class="color-row-images black" style="display: none">

          <?php product_images($black_photo, 'black'); ?>

        </div>

      </div>

      <div class="color-row-buttons">

        <div class="white">

          <p class="color-text">White</p>

          <div class="color-button white"></div>

        </div>

        <div class="black">

          <div class="color-button black"></div>

          <p class="color-text">Black</p>

        </div>

      </div>

    </div>

  </div>

</section>
