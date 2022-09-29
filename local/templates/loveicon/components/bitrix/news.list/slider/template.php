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


<!-- Start Main Slider -->
<section class="main-slider style1">
    <div class="shape2 paroller"></div>
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h4 class="banner-title"><?=$arItem['PREVIEW_TEXT']?></h4>
                            </div>
                            <div class="border-box"></div>

                            <div class="btns-box">
                                <a class="btn-one2 btn-one-style2" href="#publications">
                                    <span class="txt"><i class="arrow1"></i>Популярные публикации</span>
                                </a>
                                <a class="btn-one marlft15" href="about.html">
                                    <span class="txt"><i class="arrow1 "></i>Задать вопрос</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
            <? endforeach; ?>

        </div>
    </div>
</section>
<!--End Blog Page One-->

