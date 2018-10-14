<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=get_field('title')?></title>
  <meta name="description" content="<?=get_field('description')?>">
  <meta name="keywords" content="<?=get_field('keywords')?>">

  <?php wp_head(); ?>
</head>
<body>
  <?php 
    //Номер телефона
    $phone_number = "+7 (495) 005-96-43";
    $phone_link = '<a href="tel:' . return_numbers_from_string( $phone_number ) . '" target="_blank" rel="nofollow">' . $phone_number . '</a>';

    //Путь темы
    $theme_directory = "/wp-content/themes/" . get_template();
  ?>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-3">
          <img src="<?=$theme_directory?>/img/logo.svg" alt="Manicure-planing Ежедневник для мастеров маникюра">
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Заказать звонок
          </button>
        </div>
        <div class="col-12 col-sm-1">
          <a href="/cart/" rel="nofollow" title="Корзина"><img src="<?=$theme_directory?>/img/cart.svg" alt="Корзина"></a>
        </div>
      </div>
    </div>
  </header>