<?php



function dateToNumberMonth($strDate) {
    return explode('.',  $strDate)[0];
}

foreach ($arResult['ITEMS'] as &$item) {
    if ($item['DATE_ACTIVE_FROM']) {
       $item['DISPLAY_DATE'] = dateToNumberMonth($item['DATE_ACTIVE_FROM']);
    }

}
