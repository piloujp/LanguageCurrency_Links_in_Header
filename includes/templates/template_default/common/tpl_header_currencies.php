<?php
/**
 * Header Currencies Links Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 April 6 Modified in v2.1.0 $
 */
    $content = '';
    $currencies_array = [];
    if (count($currencies->currencies) >= 3) { // number of installed currencies before using dropdown menu
        $content .= '<button class="curbtn">' . zen_image(DIR_WS_IMAGES .  'icons/' . $_SESSION['currency'] . '.png', $_SESSION['currency'], '24', '24', 'style="vertical-align: middle"') . '</button>' . PHP_EOL;
        $content .= '<div class="currency-header-content">';
        foreach ($currencies->currencies as $key => $value) {
            if ($key != $_SESSION['currency']) {
                $content .= '<a href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('currency')) . 'currency=' . $key, $request_type) . '">' . $key . '</a>' . PHP_EOL;
            }
        }
        $content .= '</div>' . PHP_EOL;

    } elseif (count($currencies->currencies) > 1) {
        foreach ($currencies->currencies as $key => $value) {
            if ($key != $_SESSION['currency']) {
                $content .= '<a href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('currency')) . 'currency=' . $key, $request_type) . '" title="'. $key . '">' . $value['symbol_left'] . '</a>&nbsp;' . PHP_EOL;
            }
        }
    }

    echo $content;
