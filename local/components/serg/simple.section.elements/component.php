<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * @var array $arParams
 */

CModule::IncludeModule("iblock");

$arFilter = Array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE'=>'Y', 'CODE' => $arParams['SECTION_CODE']);

$rsSections = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
while($arSections = $rsSections->GetNext()) {
    $arResult['SECTION_NAME'] = $arSections['NAME'];
}

$APPLICATION->AddChainItem($arResult['SECTION_NAME']);

if($this->startResultCache()) {

}
$this->includeComponentTemplate();