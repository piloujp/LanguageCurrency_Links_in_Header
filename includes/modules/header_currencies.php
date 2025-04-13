<?php
/**
 * Currencies Header Links - allows customer to select from available currencies
 *
 * @package templateSystem
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_currencies.php  2006-05-31 bunyip $  Twitch Certified for v1.5.5f 2018 $
 * @version $Id:Benny Philibel: Adjusted and verified for v1.5.7c and php 7.4 2021-03-30 $
 * @version $Id:piloujp Adjusted and verified for v2.0.0 and php 8.1.27 2024-02-14 $
 */

// test if box should display
  $show_currencies= false;

  // don't display on checkout page:
  if (substr($current_page, 0, 8) != 'checkout') {
    $show_currencies= true;
  }

  if ($show_currencies == true) {
    if (isset($currencies) && is_object($currencies)) {

      reset($currencies->currencies);
      $currencies_array = array();
      foreach($currencies->currencies as $key => $value) {
        $currencies_array[] = array('id' => $key, 'text' => (zen_not_null($value['symbol_left']) ? $value['symbol_left'] : $value['symbol_right']) );
      }

      $hidden_get_variables = '';
      reset($_GET);
      foreach($_GET as $key => $value) {
        if ( ($key != 'currency') && ($key != zen_session_name()) && ($key != 'x') && ($key != 'y') ) {
          $hidden_get_variables .= zen_draw_hidden_field($key, $value);
        }
      }

      require($template->get_template_dir('tpl_header_currencies.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_header_currencies.php');
    }
  }
