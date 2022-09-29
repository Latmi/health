<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <!--Start Contact Style1 Area-->
    <section class="contact-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-style1_form">
                        <div class="sec-title">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/form_text.php"
                                )
                            );?>
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

                <div class="col-xl-4">
                    <div class="sidebar-content-box">
                        <div class="contact-info-sidebar">
                            <ul>




                                <li>
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-opened"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Email</h3>
                                        </div>
                                    </div>
                                    <p><a href="mailto:info@health.ru">info@health.ru</a></p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Contact Style1 Area-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>