<? use Bitrix\Main\Page\Asset;
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die();
$asset = Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/aos.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/imp.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/custom-animate.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/flaticon.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/font-awesome.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/owl.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/magnific-popup.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/scrollbar.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/hiddenbar.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/icomoon.css");

$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/header-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/banner-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/about-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/blog-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/fact-counter-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/faq-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/contact-page.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/breadcrumb-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/team-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/partner-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/testimonial-section.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/module-css/footer-section.css");

$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/color.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/rtl.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/responsive.css");

$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/aos.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/appear.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/bootstrap.bundle.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/bootstrap-select.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/isotope.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.bxslider.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.countdown.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.countTo.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.easing.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.enllax.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.fancybox.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.magnific-popup.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.paroller.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.polyglot.language.switcher.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jQuery.style.switcher.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-ui.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/knob.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/map-script.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/owl.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/pagenav.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/parallax.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/scrollbar.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/slick.js");
//$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/timePicker.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/validation.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/wow.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/TweenMax.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-sidebar-content.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/custom.js");

global $APPLICATION
?>

<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID; ?>" lang="<?= LANGUAGE_ID; ?>">
<head>
    <meta charset="UTF-8">
    <title><? $APPLICATION->ShowTitle() ?></title>

    <? $APPLICATION->ShowHead(); ?>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">




<!--    <link href="--><?//=SITE_TEMPLATE_PATH?><!--/assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">-->
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">





    <? $APPLICATION->ShowPanel(); ?>

</head>
<body>

<div class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
        <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
    </div>
    <!-- page-direction end -->




    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/resources/logo-white.svg" alt="" /></a>
                            </div>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/form_side_text.php"
                                )
                            );?>
                            <div class="form-inner">
                                <form id="modal-contact-form" name="modal-contact_form" action="/sendmail.php" method="post">
                                    <div class="form-group">
                                        <input type="text" name="form_name" placeholder="Имя" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="form_email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="form_message" placeholder="Сообщение..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="btn-one2" type="submit"
                                                data-loading-text="Отправка...">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i> Отправить</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->


    <!-- Main header-->
    <header class="main-header header-style-one">


        <!--Start Header-->
        <div class="header">
            <div class="container">
                <div class="outer-box clearfix">
                    <div class="header-left clearfix pull-left">
                        <div class="logo">
                            <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/resources/logo.svg" alt="Awesome Logo"
                                                      title=""></a>
                        </div>
                    </div>

                    <div class="header-right pull-right">
                        <div class="nav-outer style1 clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <div class="inner">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <!-- Main Menu -->
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top",
                                Array(),
                                false
                            );?>

                            <!-- Main Menu End-->
                        </div>

                        <div class="header-right_buttom">
                            <div class="btns-box">
                                <a class="btn-one" href="#"><span class="txt"><i
                                            class="arrow1"></i>Задать вопрос</span></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End header-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index.html" class="img-responsive"><img
                                src="<?=SITE_TEMPLATE_PATH?>/assets/images/resources/logo.svg" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/resources/logo-white.svg"
                                                                alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>

            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>

    <? if  ($APPLICATION->GetCurPage() !== '/'): ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content text-center">
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight"
                                 data-wow-duration="2000ms">
                                <div class="shape1">
                                    <img class="float-bob" src="<?=SITE_TEMPLATE_PATH?>/assets/images/shape/breadcrumb-shape1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight"
                                 data-wow-duration="2000ms">
                                <div class="shape2">
                                    <img class="zoominout" src="<?=SITE_TEMPLATE_PATH?>/assets/images/shape/breadcrumb-shape2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"with.bg", 
	array(
		"COMPONENT_TEMPLATE" => "with.bg",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	),
	false
);?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->
    <?endif;?>

