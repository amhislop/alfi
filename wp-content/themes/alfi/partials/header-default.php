<?php if( !empty(get_field('header_image')) ) : ?>

	<header class="site-header" style="background-image: url(<?php the_field('header_image');?>)">

<?php else : ?>

	<header class="site-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/alfi-header.jpeg)">

<?php endif; ?>

		<div class="container">

				<div class="logo-header">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/alfi-logo.svg" alt="Alfi Logo">

				</div>

	  		<div class="subheader">

					<?php if( !empty(get_field('header_subtext'))) : ?>

	  				<p><?php the_field('header_subtext'); ?></p>

					<?php else : ?>

						<p><?php bloginfo('description'); ?></p>

					<?php endif; ?>


	  		</div>

		</div>

</header>
