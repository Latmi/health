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

<!--Start Cause Details Area-->
<section class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="blog-details-content">

                    <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img
                                src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                                width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                                height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                                alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                                title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
                            >
                        </div>
                        <div class="text-holder">

                            <h3 class="blog-title"><?=$arResult['NAME']?></h3>
                            <div class="meta-box">
                                <div class="author-thumb">
                                    <img src="<?=$arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['IMAGE']['PREVIEW']?>"  />
                                </div>
                                <ul class="meta-info">
                                    <li><?=$arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['DISPLAY_VALUE']?></li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <a href="blog-single.html#"><?=$arResult['FIELDS']['DATE_ACTIVE_FROM']?></a></li>
                                </ul>
                            </div>
                            <div class="text"><?=$arResult['FIELDS']['DETAIL_TEXT']?></div>


                        </div>
                    </div>

                    <div class="author-box-holder">
                        <div class="inner-box">
                            <div class="img-box">
                                <img src="<?=$arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['IMAGE']['DETAIL']?>" alt="AUTHOR">
                            </div>
                            <div class="text-box">
                                <h3><?=$arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['NAME_UNLINK']?> <span>(Автор)</span></h3>
                                <p><?=$arResult['DISPLAY_PROPERTIES']['ATT_DOCTOR']['PREVIEW_TEXT']?></p>
                                <div class="author-social-links"></div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>




        </div>
    </div>
</section>
<!--End Cause Details Area-->



