<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="add-listing.html#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugin.css" rel="stylesheet" />
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Document Title -->
    <title>SarchHolm - Real Estate HTML Template</title>
</head>

<body>
    <!--Preloader starts-->
    <div class="preloader js-preloader">
        <img src="images/preloader.gif" alt="...">
    </div>
    <!--Preloader ends-->
    <!--Page Wrapper starts-->
    <div class="page-wrapper">
        <!--header starts-->
        <header class="header transparent scroll-hide">
            <!--Main Menu starts-->
            <div class="site-navbar-wrap v1">
                <div class="container">
                    <div class="site-navbar">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-6 col-12 xs-center">
                                <a class="navbar-brand" href="single-agency-home.html#">
                                    <img src="images/logo-main.png" alt="logo" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-6 col-md-1 col-4  order-2 order-lg-1 pl-xs-0">
                                <nav class="site-navigation text-right">
                                    <div class="container">
                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                            <li class="has-children">
                                                <a>Обьявления</a>
                                                <ul class="dropdown">
                                                    <li class="has-children">
                                                        <a>Купить</a>
                                                        <ul class="dropdown sub-menu">
                                                            <li><a href="grid-fullwidth.html">Дом</a></li>
                                                            <li><a href="grid-fullwidth.html">Квартиру</a></li>
                                                            <li><a href="grid-fullwidth.html">Дачу</a></li>
                                                            <li><a href="grid-fullwidth.html">Участок</a></li>
                                                            <li><a href="grid-fullwidth.html">Прочее</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-children">
                                                        <a>Снять</a>
                                                        <ul class="dropdown sub-menu">
                                                            <li><a href="grid-fullwidth.html">Дом</a></li>
                                                            <li><a href="grid-fullwidth.html">Квартиру</a></li>
                                                            <li><a href="grid-fullwidth.html">Дачу</a></li>
                                                            <li><a href="grid-fullwidth.html">Офис</a></li>
                                                            <li><a href="grid-fullwidth.html">Комнату</a></li>
                                                            <li><a href="grid-fullwidth.html">Прочее</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a>Компании и специалисты</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="single-listing-one.html">Компании </a></li>
                                                    <li><a href="agent-list.html">Специалисты </a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="grid-fullwidth.html#">Новостройки</a>
                                            </li>
                                            <li class="has-children">
                                                <a href="single-news-one.html#">Новости</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-lg-4 col-md-5 col-8 order-1 order-lg-2 text-right pr-xs-0">
                                <div class="menu-btn">
                                    <div class="add-list float-right ml-3">
                                        <a class="btn v6" href="<?= \yii\helpers\Url::to(['site/add-listing']) ?>"><i class="lnr lnr-home"></i>Создать обьявление </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!--Header ends-->
        <!--Breadcrumb section starts-->
        <div class="breadcrumb-section bg-h" style="background-image: url('images/breadcrumb/breadcrumb_1.jpg')">
            <div class="overlay op-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="breadcrumb-menu">
                            <h2>Напиши свое обьявление</h2>
                            <span><a href="home-v1.html">Обьявление</a></span>
                            <span>Добавить</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb section ends-->
        <!--Add Listing starts-->
        <div class="list-details-section section-padding add_list pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs list-details-tab">
                            <li class="nav-item active">
                                <a data-toggle="tab" href="add-listing.html#general_info">Ваше обьявление</a>
                            </li>
                        </ul>
                        <div class="tab-content my-30 add_list_content">
                            <div class="tab-pane fade show active" id="general_info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Название</label>
                                            <input id="name" type="text" class="form-control filter-input" placeholder="Продам 2х этажный дом ...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Адресс</label>
                                            <input id="address" type="text" class="form-control filter-input" placeholder="Льва Толстого 149 — Айтиева">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Площадь </label>
                                            <input id="area" type="text" class="form-control filter-input" placeholder="250 (90) м², кухня — 17 м²">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Область</label>
                                        <input id="region" type="text" class="form-control filter-input" placeholder="Алматинская">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Город</label>
                                        <input id="city" type="text" class="form-control filter-input" placeholder="Алматы">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Год построения</label>
                                            <input id="year" type="text" class="form-control filter-input" placeholder="2020">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Цена</label>
                                            <input id="price" type="text" class="form-control filter-input" placeholder="$1500">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form>
                                            <div class="form-group">
                                                <label for="list_info">Описание</label>
                                                <textarea class="form-control" id="list_info" rows="4" placeholder="Напишите сюда пару слов..."></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                       <button id="create-btn" class="btn btn-success">Создать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Add Listing ends-->
        <!-- Scroll to top starts-->
        <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
        <!-- Scroll to top ends-->
    </div>
    <!--Page Wrapper ends-->
    <!--Footer Starts-->
    <div class="footer-wrapper v1 mt-30">
        <div class="footer-top-area">
            <div class="container">
                <div class="row nav-folderized">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-logo">
                            <a href="single-agency-home.html#"> <img src="images/logo-main.png" alt="logo"></a>
                            <div class="company-desc">
                                <p>
                                    Krisha.kz - это постоянный доступ к актуальной базе объявлений о продаже, покупке, аренде квартир, домов, дач, земельных участков в городах и сёлах Казахстана, а также к информации о любых видах коммерческой недвижимости.
                                </p>
                                <ul class="list footer-list mt-20">
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fa fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">город Алматы, улица Гагарина 33</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text"><a>info@krisha.kz</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="text">+7 (777) 777 77 77
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 text-center sm-left">
                        <div class="footer-content nav">
                            <h2 class="title">Популярные запросы</h2>
                            <ul class="list res-list">
                                <li><a class="link-hov style2" href="single-agency-home.html#">Аренда недвижимости</a></li>
                                <li><a class="link-hov style2" href="single-agency-home.html#">Собственность на продажу</a></li>
                                <li><a class="link-hov style2" href="single-agency-home.html#">Кондоминиум на продажу</a></li>
                                <li><a class="link-hov style2" href="single-agency-home.html#">Вторичная недвижимость</a></li>
                                <li><a class="link-hov style2" href="single-agency-home.html#">Последние обновления</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 text-center sm-left">
                        <div class="footer-content nav">
                            <h2 class="title">Быстрые доступы</h2>
                            <ul class="list res-list">
                                <li><a class="link-hov style2"  href="single-agency-home.html#">О нас</a></li>
                                <li><a class="link-hov style2"  href="single-agency-home.html#">Связаться с нами</a></li>
                                <li><a class="link-hov style2"  href="single-agency-home.html#">Политика конфиденциальности</a></li>
                                <li><a class="link-hov style2"  href="single-agency-home.html#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="footer-content">
                            <h4 class="title">Подпишитесь</h4>
                            <div class="value-input-wrap newsletter">
                            </div>
                            <div class="footer-social-wrap">
                                <p>Вы можете найти нас в </p>
                                <ul class="social-buttons style2">
                                    <li><a href="single-agency-home.html#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="single-agency-home.html#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="single-agency-home.html#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="single-agency-home.html#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="single-agency-home.html#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 offset-md-2">
                        <p>
                            ©Krisha.kz 2020. Все права защищены. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer ends-->
    <!--Scripts starts-->
    <!--plugin js-->
    <script src="js/plugin.js"></script>
    <!--google maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&libraries=places&callback=initAutocomplete"></script>
    <!--Main js-->
    <script src="js/main.js"></script>
    <!--Scripts ends-->

    <script>
        $('#create-btn').click(function () {
            let name = $('#name').val();
            let address = $('#address').val();
            let area = $('#area').val();
            let region = $('#region').val();
            let city = $('#city').val();
            let price = $('#price').val();
            let year = $('#year').val();
            let descr = $('#list_info').val();

            $.post('/index.php?r=site%2Fcreate-ad', {
                name: name,
                address: address,
                area: area,
                region: region,
                city: city,
                price: price,
                year: year,
                descr: descr
            }, function (res) {
                if (res == 1) {
                    alert('Успешно создано!')
                } else {
                    alert('Что-то пошло не так :(')
                }
            })
        })
    </script>
</body>

</html>
