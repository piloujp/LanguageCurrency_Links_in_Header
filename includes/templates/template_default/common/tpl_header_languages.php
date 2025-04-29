<?php
/**
 * Header Languages Links Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 April 6 Modified in v2.1.0 $
*/

    $content = '';
    if (count($lng->catalog_languages) >= 3) { // number of installed languages before using dropdown menu
        $content .= '<button class="lanbtn">' . zen_image(DIR_WS_LANGUAGES .  $lng->catalog_languages[$_SESSION['languages_code']]['directory'] . '/images/' . $lng->catalog_languages[$_SESSION['languages_code']]['image'], $lng->catalog_languages[$_SESSION['languages_code']]['name'], '24', '15', 'style="vertical-align: middle"') . '&nbsp;</button>' . PHP_EOL;
        $content .= '<div class="language-header-content">';
        foreach ($lng->catalog_languages as $key => $value) {
            if ($key != substr($_SESSION['language'],0,2)) {
                $content .= '<a href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('language')) . 'language=' . $key, $request_type) . '">' . zen_image(DIR_WS_LANGUAGES .  $value['directory'] . '/images/' . $value['image'], $value['name'], '24', '15', 'style="vertical-align: middle"') . '</a>' . PHP_EOL;
            }
        }
        $content .= '</div>' . PHP_EOL;
        
    } elseif (count($lng->catalog_languages) > 1) {
        foreach ($lng->catalog_languages as $key => $value) {
            if ($key != substr($_SESSION['language'],0,2)) {
                $content .= '<a href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('language')) . 'language=' . $key, $request_type) . '">' . zen_image(DIR_WS_LANGUAGES .  $value['directory'] . '/images/' . $value['image'], $value['name'], '24', '15', 'style="vertical-align: middle"') . '</a>&nbsp;&nbsp;' . PHP_EOL;
            }
        }
    }
  
    echo $content;
