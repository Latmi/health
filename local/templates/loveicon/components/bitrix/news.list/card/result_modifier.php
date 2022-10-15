<?php



function dateToNumberMonth($strDate) {
    $arMonth = [
        '01' => 'янв',
        '02' => 'фев',
        '03' => 'мар',
        '04' => 'апр',
        '05' => 'мар',
        '06' => 'июн',
        '07' => 'июл',
        '08' => 'авг',
        '09' => 'сен',
        '10' => 'окт',
        '11' => 'ноя',
        '12' => 'дек',
    ];
    return [explode('.',  $strDate)[0], $arMonth[explode('.',  $strDate)[1]]];
}
foreach ($arResult['ITEMS'] as &$item) {
    if ($item['DATE_ACTIVE_FROM']) {
       $item['DISPLAY_DATE'] = dateToNumberMonth($item['DATE_ACTIVE_FROM']);
    }

}
