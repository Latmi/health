<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>


        <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "slider",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "ID",
                1 => "CODE",
                2 => "XML_ID",
                3 => "NAME",
                4 => "TAGS",
                5 => "SORT",
                6 => "PREVIEW_TEXT",
                7 => "PREVIEW_PICTURE",
                8 => "DETAIL_TEXT",
                9 => "DETAIL_PICTURE",
                10 => "DATE_ACTIVE_FROM",
                11 => "ACTIVE_FROM",
                12 => "DATE_ACTIVE_TO",
                13 => "ACTIVE_TO",
                14 => "SHOW_COUNTER",
                15 => "SHOW_COUNTER_START",
                16 => "IBLOCK_TYPE_ID",
                17 => "IBLOCK_ID",
                18 => "IBLOCK_CODE",
                19 => "IBLOCK_NAME",
                20 => "IBLOCK_EXTERNAL_ID",
                21 => "DATE_CREATE",
                22 => "CREATED_BY",
                23 => "CREATED_USER_NAME",
                24 => "TIMESTAMP_X",
                25 => "MODIFIED_BY",
                26 => "USER_NAME",
                27 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "4",
            "IBLOCK_TYPE" => "info",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "30",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "slider",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "slider"
        ),
        false
    );



?>





                </div>
            </div>
        </section>
        <!-- End Main Slider -->




    <!--Start Features Style2 Arae-->
    <section class="features-style2-area">
        <div class="shape1"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/shape/thm-shape-24.png" alt=""></div>
        <div class="container">
            <div class="row">
                <!--Start Single Features Style2-->
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
    <!--End Features Style2 Arae-->





    <!--Start About Style2 Area-->
    <section class="about-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="about-style2_content-box">
                        <div class="sec-title">

                            <h3>Здравствуйте, дорогие родители, настоящие и будущие!</h3>
                        </div>
                        <div class="inner-content">
                            <p>Мы знаем, сколько радости приходит в дом с рождением ребёнка. А вместе с ним –переживаний, бессонных ночей. Знаем, сколько вопросов одолевают маму и папу: «Правильно ли я делаю? На что мне обратить внимание? Что делать, если…?»</p>
                            <ul>
                                <li>
                                    <div class="right">
                                        <div class="text">
                                            <p>На платформе благотворительного онлайн-проекта «На здоровье!» вас ждут ответы на самые важные вопросы: о беременности, родах, здоровье детей от 0 до 7 лет. А также информация о мерах господдержки семей с детьми.</p>

                                        </div>
                                    </div>
                                </li>
                                <li class="style2">
                                    <div class="right">
                                        <div class="text">
                                            <p>Наши спикеры – опытные врачи, которые помогли появиться на свет сотням детей. Помогли мамам и папам растить их здоровыми и счастливыми. А ещё юристы, психологи, депутаты, социальные работники, отвечающие за поддержку материнства и детства.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="style2">
                                    <div class="right">
                                        <div class="text">
                                            <p>Эксперты ответят на вопросы в формате видео, прямых эфиров, постов, инфографики.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="style2">
                                    <div class="right">
                                        <div class="text">
                                            <p>Онлайн-проект «На здоровье!» поможет вам стать знающими, уверенными в своих действиях, родителями.</p>
                                        </div>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="about-style2_image-box">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/resources/about-style2_image1.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style2 Area-->

    <!--Start Faq Style1 Area-->
    <?
        $APPLICATION->IncludeComponent(
            "serg:simple.section.elements",
            ".default",
            array(
                'SECTION_CODE' => $_REQUEST['SECTION_CODE'],
                'IBLOCK_ID' => 3,
                'ON_MAIN' => 'Y',
            ),
            false
        );



        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "card",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "ID",
                    1 => "CODE",
                    2 => "XML_ID",
                    3 => "NAME",
                    4 => "TAGS",
                    5 => "SORT",
                    6 => "PREVIEW_TEXT",
                    7 => "PREVIEW_PICTURE",
                    8 => "DETAIL_TEXT",
                    9 => "DETAIL_PICTURE",
                    10 => "DATE_ACTIVE_FROM",
                    11 => "ACTIVE_FROM",
                    12 => "DATE_ACTIVE_TO",
                    13 => "ACTIVE_TO",
                    14 => "SHOW_COUNTER",
                    15 => "SHOW_COUNTER_START",
                    16 => "IBLOCK_TYPE_ID",
                    17 => "IBLOCK_ID",
                    18 => "IBLOCK_CODE",
                    19 => "IBLOCK_NAME",
                    20 => "IBLOCK_EXTERNAL_ID",
                    21 => "DATE_CREATE",
                    22 => "CREATED_BY",
                    23 => "CREATED_USER_NAME",
                    24 => "TIMESTAMP_X",
                    25 => "MODIFIED_BY",
                    26 => "USER_NAME",
                    27 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "info",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "3",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "news",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "ATT_DOCTOR",
                    2 => "",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "Y",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "card"
            ),
            false
        );
    ?>






    <!--Start Contact Style1 Area-->
    <section class="contact-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-style1_form">
                        <div class="sec-title">
                            <div class="sub-title martop0">
                                <div class="inner">
                                    <h3>Support LoveIcon With Heart!</h3>
                                </div>
                            </div>
                            <h2>Get In Touch With Us</h2>
                            <p>Laboris nisi aliquip sed duis aute lorem ipsum dolor amet consectetur adipisicing
                                sed eiusmod tempor tm incididunts lorem ipsum sed labore dolore magnad aliqua.
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" name="contact_form" class="default-form2"
                                  action="/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_name" value="" placeholder="Имя"
                                                   required="">
                                            <div class="icon"><span class="flaticon-user"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="email" name="form_email" value="" placeholder="Email"
                                                   required="">
                                            <div class="icon"><span class="flaticon-opened"></span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_phone" value="" placeholder="Телефон">
                                            <div class="icon"><span class="fa fa-phone"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_subject" value="" placeholder="Тема">
                                            <div class="icon"><span class="fa fa-comment-o"></span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                                <textarea name="form_message" placeholder="Сообщение"
                                                          required=""></textarea>
                                            <div class="icon"><span class="fa fa-pencil"></span></div>
                                        </div>
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                   type="hidden" value="">
                                            <button class="btn-one2" type="submit"
                                                    data-loading-text="Отправка...">
                                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i> Отправить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--End Contact Style1 Area-->


        

<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>