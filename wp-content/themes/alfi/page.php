<?php get_header(); ?>

	<?php get_template_part('partials/top','bar'); ?>

	<?php get_template_part('/partials/header', 'default'); ?>

	<section style="margin-top: 2em">

	  <div class="container">

	    <div class="wide-content">

				<?php the_content(); ?>


			</div>

	  </div>

	</section>


	<?php get_template_part('/partials/enquiry', 'button'); ?>

<?php get_footer(); ?>
