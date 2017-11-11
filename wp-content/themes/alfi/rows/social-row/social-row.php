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

      <?php
        $username = 'espressocompany';
        $json = file_get_contents('https://www.instagram.com/'.$username.'/?__a=1');
        $instagram_feed_data = json_decode($json, true);

        if (isset($instagram_feed_data['user']['media']['nodes'])) {

          foreach ($instagram_feed_data['user']['media']['nodes'] as $item) {
            $link = 'https://www.instagram.com/p/' . $item['code'];
            $img_url = $item['thumbnail_src'];
            $caption = isset($item['caption']) ? $item['caption']['text'] : '';

            ?>

            <a href="<?= $link; ?>" target='_blank'>
              <img src="<?= $img_url; ?>" class="insta-item">
            </a>

            <?php
            if($i++ == ($instaNum-1) ) break;
            ?>

            <?php
          }
        }
      ?>

      </div>

    </div>

  </div>

</section>
