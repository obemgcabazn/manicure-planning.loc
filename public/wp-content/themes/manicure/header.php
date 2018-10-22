<!DOCTYPE html>
<html lang="ru">
  <?php require get_template_directory() . '/includes/head.php'; ?>

<body <?=is_front_page() ? 'class="front_page"' : '' ?>>

  <!-- Pushy Menu -->
  <nav class="pushy pushy-left">
    <div class="pushy-content">
      <button class="pushy-close">close</button>
      <ul>
        <!-- Submenu -->
        <li class="pushy-link"><a href="#">Item 1</a></li>
        <li class="pushy-link"><a href="#">Item 2</a></li>
      </ul>
    </div>
  </nav>

  <!-- Site Overlay -->
  <div class="site-overlay"></div>

  <!-- Pushy Content -->
  <div id="container">
    <!-- Menu Button -->
    <button class="menu-btn d-sm-none">&#9776; Menu</button>
    <header>
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-sm-3">
            <?php the_field('phone_num', 'option'); ?>
            <a href="/"><img src="<?=$theme_directory?>/img/logo.svg" alt="Manicure-planing Ежедневник для мастеров маникюра"></a>
          </div>
          <div class="col-12 col-sm-4">
            <?php
            $menu = wp_nav_menu( array(
              'theme_location'  => 'top_menu',
              'container'       => 'div',
              'container_class' => '',
              'container_id'    => 'navbarSupportedContent',
              'menu_class'      => 'menu nav',
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>',
              'depth'           => 2,
              'echo' => 0
            ) );
            $menu = str_replace('class="menu-item', 'class="menu-item nav-item', $menu);
            $menu = str_replace('<a', '<a class="nav-link"', $menu);
            echo $menu;
            ?>
          </div>
          <div class="col-12 col-sm-2">
            <?=$phone_link?>
          </div>
          <div class="col-12 col-sm-2">
            <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter">
              Заказать звонок
            </button>
          </div>
          <div class="col-12 col-sm-1">
            <a href="/cart/" rel="nofollow" title="Корзина"><img src="<?=$theme_directory?>/img/cart.svg" alt="Корзина"></a>
          </div>
        </div>
      </div>
    </header>
