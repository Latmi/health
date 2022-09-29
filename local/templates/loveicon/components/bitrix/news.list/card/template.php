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


<!--Start Blog Page One-->
<section id="publications" class="blog-page-one">
    <div class="container">
        <div class="row text-right-rtl">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                                <div class="overlay-icon">
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><span class="flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="date-box ">
                                <h2><?=$arItem['DISPLAY_DATE']?></h2>
                                <p>Сен</p>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html"><?=$arItem['NAME']?></a>
                            </h3>
                            <div class="text">
                                <p><?=$arItem['PREVIEW_TEXT']?></p>
                            </div>
                            <ul class="meta-info">
                                <li><i class="fa fa-user" aria-hidden="true"></i>
                                    <?=$arItem['DISPLAY_PROPERTIES']['ATT_DOCTOR']['DISPLAY_VALUE']?>
                                </li>
<!--                                <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="blog.html#">597 Comments</a>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Single blog Style1-->
            <? endforeach; ?>



        </div>
        <div class="row">
            <div class="col-xl-12">

                <?=$arResult["NAV_STRING"]?>

            </div>
        </div>



    </div>
</section>
<!--End Blog Page One-->

