<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=get_field('title')?></title>
  <meta name="description" content="<?=get_field('description')?>">
  <meta name="keywords" content="<?=get_field('keywords')?>">
  <?php wp_head(); ?>
</head>
<?php
//Номер телефона
$phone_number = "+7 (495) 005-96-43";
$phone_link = '<a href="tel:' . return_numbers_from_string( $phone_number ) . '" target="_blank" rel="nofollow">' . $phone_number . '</a>';

//Путь темы
$theme_directory = "/wp-content/themes/" . get_template();
?>
