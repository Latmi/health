<?php



function dateToNumberMonth($strDate) {
    return explode('.',  $strDate)[0];
}

foreach ($arResult['ITEMS'] as &$item) {
    if ($item['DATE_CREATE']) {
       $item['DISPLAY_DATE'] = dateToNumberMonth($item['DATE_CREATE']);
    }

}
