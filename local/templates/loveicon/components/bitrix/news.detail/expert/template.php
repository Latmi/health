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

<!--Start About Style2 Area-->
<section class="about-style2-area" style="padding-top: 120px">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-style2_content-box">
                    <div class="sec-title">
                        <h2><?=$arResult['NAME']?></h2>
                    </div>
                    <div class="inner-content">
                        <?=$arResult['DETAIL_TEXT']?>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="about-style2_image-box">
                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
                </div>
            </div>

        </div>
    </div>
</section>
<!--End About Style2 Area-->
<?  if ($arResult['NEWS']): ?>
<!--Start Features Style1 Area-->
<section class="features-style1-area">
    <div class="features-style1-area_gray-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="features-style1_box">
                    <div class="row">
                        <!--Start Features Style1 Single-->
                        <?foreach ($arResult['NEWS'] as $item):?>
                        <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up" data-aos-easing="linear"
                             data-aos-duration="500">
                            <div class="features-style1_single">
                                <div class="icon-holder">
                                    <div class="inner">
                                        <img src="<?=$item['PREVIEW_PICTURE']?>" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><?=$item['NAME']?></h3>
                                    <p><?=$item['PREVIEW_TEXT']?></p>
                                    <div class="btns-box">
                                        <a class="btn-one2" href="<?=$item['DETAIL_PAGE_URL']?>"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>читать</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Features Style1 Single-->
                        <?endforeach;?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Features Style1 Area-->

    <!--Start Faq Style1 Area-->
    <section class="cause-style3-area">
        <div class="cause-style3-area_bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/pattern/cause-style3-area-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <?foreach ($arResult['ANSWERS'] as $item):?>
                    <div class="col-xl-6 text-right-rtl">
                        <div class="faq-style1-content">
                            <div class="accordion-box">
                                <!--Start single accordion box-->
                                <div class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4><?=$item['NAME']?></h4>
                                    </div>
                                    <div class="accord-content">
                                        <? if ($item['PROPERTY_ATT_VIDEO_ANSWER_VALUE']):?>
                                            <iframe
                                                width="100%"
                                                height="245"
                                                src="https://www.youtube.com/embed/<?=$item['PROPERTY_ATT_VIDEO_ANSWER_VALUE']?>"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen
                                            ></iframe>
                                        <?endif;?>
                                        <p><?=$item['PREVIEW_TEXT']?></p>
                                    </div>
                                </div>
                                <!--End single accordion box-->
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </section>
    <!--End Faq Style1 Area-->

<?endif;?>



