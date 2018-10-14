<?php
if (!is_admin()) show_admin_bar(false);

require get_template_directory() . '/includes/init.php';
// require get_template_directory() . '/includes/woocommerce.php';
// require get_template_directory() . '/includes/wc-cart.php';

// Используется для телефона, чтобы оставить только цифры в номере
function return_numbers_from_string( $string ){
  $result = preg_replace("/[^+0-9]/", '', $string);
  return $result;
}