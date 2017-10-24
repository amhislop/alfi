<footer class="site-footer">

    <div class="container">

      <div class="wide-content">

      <nav class="nav-footer">

        <?php

        $args = array(
          'theme_location' => 'footer'
        );

        ?>

        <?php wp_nav_menu( $args ) ?>

        <hr>
        <p class="copywrite">&copy; <?php echo date('Y'); bloginfo('name'); ?></p>
      </nav>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
