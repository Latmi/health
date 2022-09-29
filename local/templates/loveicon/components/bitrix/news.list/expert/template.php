<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<!--Start Team Style2 Area-->
<section class="team-style2-area">
    <div class="container">
        <div class="row">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <!--Start Single Team Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-team-style2">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="<?=$arItem['DETAIL_PICTURE']['ALT']?>" />
                        </div>
                    </div>
                    <div class="title-holder">
                        <h4><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h4>
                        <p><?=$arItem['PROPERTIES']['ATT_WORK_POSITION']['VALUE']?></p>

                    </div>
                </div>
            </div>
            <!--End Single Team Style2-->
            <?endforeach;?>

        </div>
        <div class="row">
            <div class="col-xl-12">
                <?=$arResult["NAV_STRING"]?>
            </div>
        </div>
    </div>
</section>
<!--End Team Style2 Area-->




