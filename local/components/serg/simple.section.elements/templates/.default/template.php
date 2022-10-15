<?php
/**
 * @var array $arResult
 * @var array $arParams
 */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$APPLICATION->ShowNavChain();
?>


<!--Start Faq Style1 Area-->
<section class="cause-style3-area">
    <div class="cause-style3-area_bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/pattern/cause-style3-area-bg.jpg);"></div>
    <div class="container">
        <div class="row">
            <?foreach ($arResult['ITEMS'] as $item):?>
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



