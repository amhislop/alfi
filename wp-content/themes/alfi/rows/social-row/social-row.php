<section class="social-row">

  <div class="container">

    <div class="wide-content">

      <?php if(!empty(get_sub_field('basic_content_title'))) : ?>

        <h2 class="title"><?php the_sub_field('basic_content_title'); ?></h2>

        <hr>

      <?php endif; ?>

      <?php if(!empty(get_sub_field('subtext_social_link'))) : ?>

      <a target="_blank" href="http://www.instagram.com/<?php the_sub_field('subtext_social_link'); ?>" class="instagram-link">@<?php the_sub_field('subtext_social_link'); ?></a>

      <?php endif; ?>

      <?php $instaNum = get_sub_field('instagram_photos_number'); ?>

      <?php if( $instaNum == 6 ) : ?>

        <div class="instagram-feed six">

      <?php else : ?>

        <div class="instagram-feed three">

      <?php endif; ?>

      </div>

    </div>

  </div>

</section>
