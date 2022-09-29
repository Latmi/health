<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=2830
/**
 * @var array $arResult
 * @var array $arParams
 */


$arSelect = ['ID', 'NAME', 'DATE_ACTIVE_FROM', 'PREVIEW_TEXT', 'PROPERTY_ATT_SHOW_ON_MAIN'];
$arFilter = ['IBLOCK_ID' => 3, 'SECTION_CODE' => $arParams['SECTION_CODE'], 'ACTIVE_DATE' => 'Y', 'ACTIVE' => 'Y'];

if ($arParams['ON_MAIN']) {
    $arFilter = Array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE'=>'Y', 'PROPERTY_ATT_SHOW_ON_MAIN' => 'Y');
}

$rs = CIBlockElement::GetList(['sort' => 'asc'], $arFilter, false, false, $arSelect);
while($arFields = $rs->GetNext())
{
    $arResult['ITEMS'][] = $arFields;
}