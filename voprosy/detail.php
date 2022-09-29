<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы");

$APPLICATION->IncludeComponent(
    "serg:simple.section.elements",
    ".default",
    array(
        'SECTION_CODE' => $_REQUEST['SECTION_CODE'],
        'IBLOCK_ID' => 3
    ),
    false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>