<?php



foreach ($arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['LINK_ELEMENT_VALUE'] as $doctor) {
    $arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['IMAGE']['PREVIEW'] = CFile::GetPath($doctor['PREVIEW_PICTURE']);
    $arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['IMAGE']['DETAIL'] = CFile::GetPath($doctor['DETAIL_PICTURE']);
    $arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['NAME_UNLINK'] = $doctor['NAME'];
}

$arSelect = ['ID', 'NAME', 'PREVIEW_TEXT'];
$arFilter = [
    'IBLOCK_ID' => $arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['LINK_IBLOCK_ID'],
    'ACTIVE_DATE' => 'Y',
    'ACTIVE' => 'Y',
    'ID' => $arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['VALUE']
];
$rs = CIBlockElement::GetList(['sort' => 'asc'], $arFilter, false, false, $arSelect);
while($arFields = $rs->GetNext())
{
//    pre($arFields);
    $arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];
}

//pre($arResult);
