<div class="top-bar">
  <nav class="nav-primary">
    <div class="container">
    <?php
    $args = array(
      'theme_location' => 'primary'
    );
    ?>

    <?php wp_nav_menu(  $args ); ?>
    </div>
  </nav>
  <nav class="nav-mobile">
    <div id="menuMobile" class="menu-mobile-bars">
      <span class="menu-mobile-handle-top"></span>
      <span class="menu-mobile-handle-middle"></span>
      <span class="menu-mobile-handle-bottom"></span>
    </div>
    <?php
    $args = array(
      'theme_location' => 'primary'
    );
    ?>

    <?php wp_nav_menu(  $args ); ?>
    </nav>
</div>
