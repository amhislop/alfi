<section class="basic-content">

  <div class="container">

    <?php if(!empty(get_sub_field('basic_content_title'))) : ?>

      <h2 class="title"><?php the_sub_field('basic_content_title'); ?></h2>

      <hr>

    <?php endif; ?>

    <?php if(!empty(get_sub_field('basic_content'))) : ?>

      <div class="wide-content"><?php the_sub_field('basic_content'); ?></div>

    <?php endif; ?>

  </div>

</section>
