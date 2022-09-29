<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы");
?>

	<!--Start Features Style2 Arae-->
	<section class="features-style2-area">
		<div class="shape1"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/shape/thm-shape-24.png" alt=""></div>
		<div class="container">
			<div class="row">

				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list",
					"animate.card",
					array(
						"COMPONENT_TEMPLATE" => "animate.card",
						"IBLOCK_TYPE" => "info",
						"IBLOCK_ID" => "3",
						"SECTION_ID" => $_REQUEST["SECTION_ID"],
						"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
						"COUNT_ELEMENTS" => "N",
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
						"TOP_DEPTH" => "1",
						"SECTION_FIELDS" => array(
							0 => "ID",
							1 => "NAME",
							2 => "DESCRIPTION",
							3 => "PICTURE",
							4 => "IBLOCK_CODE",
							5 => "",
						),
						"SECTION_USER_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"FILTER_NAME" => "sectionsFilter",
						"VIEW_MODE" => "LINE",
						"SHOW_PARENT_NAME" => "Y",
						"SECTION_URL" => "",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"CACHE_GROUPS" => "Y",
						"CACHE_FILTER" => "N",
						"ADD_SECTIONS_CHAIN" => "N"
					),
					false
				);?>

			</div>
		</div>
	</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>