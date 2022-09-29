<?php

$arSelect = ['ID', 'NAME', 'DATE_ACTIVE_FROM', 'PROPERTY_ATT_DOCTOR', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'DETAIL_PAGE_URL'];
$arFilter = ['IBLOCK_ID' => 1, 'ACTIVE_DATE' => 'Y', 'ACTIVE' => 'Y', 'PROPERTY_ATT_DOCTOR' => $arResult['ID']];
$rs = CIBlockElement::GetList(['sort' => 'asc'], $arFilter, false, false, $arSelect);
while($arFields = $rs->GetNext())
{
    $arFields['PREVIEW_PICTURE'] = CFile::GetPath($arFields['PREVIEW_PICTURE']);
    $arResult['NEWS'][] = $arFields;

}


