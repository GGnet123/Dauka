<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="grid-fullwidth.html#" />
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

        <div class="breadcrumb-section bg-h" style="background-image: url('images/breadcrumb/breadcrumb_1.jpg')">
            <div class="overlay op-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="breadcrumb-menu">
                            <h2>Список обьявлении</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb section ends-->
        <!--Listing filter starts-->
        <div class="filter-wrapper style1 section-padding">
            <div class="container">
                <div class="row">
                    <!--Listing filter starts-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="hero__form v1 filter listing-filter property-filter">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                            <div class="input-search">
                                                <input type="text" name="place-event" id="place-event" placeholder="Поиск ...">
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                            <input type="text" name="place-event" id="place-region" placeholder="Область">
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                            <input type="text" name="place-event" id="place-city" placeholder="Город">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                            <div class="submit_btn">
                                                <button class="btn v3" type="button" id="find">Найти</button>
                                            </div>
                                            <div class="dropdown-filter"><span>Еще больше фильтров</span></div>
                                        </div>
                                        <div class="explore__form-checkbox-list full-filter">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 py-1 pr-30">
                                                    <input type="text" name="place-event" id="place-type" placeholder="Купить/Снять">
                                                </div>
                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                    <input type="text" name="place-event" id="place-item" placeholder="Дом, квартиру ...">
                                                </div>
                                                <div class="col-lg-4 col-md-6 py-1 pl-0">
                                                    <input type="number" name="place-event" id="place-room" placeholder="1" min="1">
                                                </div>

                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                    <div class="filter-sub-area style1">
                                                        <div class="filter-title mb-10">
                                                            <p>Цена : <span><input type="text" id="amount_two"></span></p>
                                                        </div>
                                                        <div id="slider-range_two" class="price-range mb-30">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 py-1  pl-0">
                                                    <div class="filter-sub-area style1">
                                                        <div class="filter-title  mb-10">
                                                            <p>Площадь : <span><input type="text" id="amount_one"></span></p>
                                                        </div>
                                                        <div id="slider-range_one" class="price-range mb-30">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 py-1 pr-30">
                                                    <div class="filter-checkbox">
                                                        <p>Сортировать по</p>
                                                        <ul>
                                                            <li>
                                                                <input id="check-a" type="checkbox" name="check">
                                                                <label for="check-a">Кондиционер</label>
                                                            </li>
                                                            <li>
                                                                <input id="check-b" type="checkbox" name="check">
                                                                <label for="check-b">Бассейн</label>
                                                            </li>
                                                            <li>
                                                                <input id="check-c" type="checkbox" name="check">
                                                                <label for="check-c">Прачечная</label>
                                                            </li>
                                                            <li>
                                                                <input id="check-d" type="checkbox" name="check">
                                                                <label for="check-d">Наличие интернета</label>
                                                            </li>
                                                            <li>
                                                                <input id="check-f" type="checkbox" name="check">
                                                                <label for="check-f">Центральное отопление </label>
                                                            </li>
                                                            <li>
                                                                <input id="check-g" type="checkbox" name="check">
                                                                <label for="check-g">Охрана</label>
                                                            </li>
                                                            <li>
                                                                <input id="check-h" type="checkbox" name="check">
                                                                <label for="check-h">Тренировочный зал</label>
                                                            </li>
                                                            <li>
                                                                <input id="check-i" type="checkbox" name="check">
                                                                <label for="check-i">Сад, беседка</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 py-1 pr-30 pl-0 ">
                                                    <div class="filter-checkbox">
                                                        <p>Сортировать по рейтингу</p>
                                                        <div>
                                                            <input id="check-w" type="checkbox" name="check">
                                                            <label for="check-w">
                                                            </label>
                                                            <div class="list-ratings">
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input id="check-x" type="checkbox" name="check">
                                                            <label for="check-x">
                                                            </label>
                                                            <div class="list-ratings">
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star-half-alt"></span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input id="check-y" type="checkbox" name="check">
                                                            <label for="check-y">
                                                            </label>
                                                            <div class="list-ratings">
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star-half-alt"></span>
                                                                <span class="fas fa-star-half-alt"></span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input id="check-z" type="checkbox" name="check">
                                                            <label for="check-z">
                                                            </label>
                                                            <div class="list-ratings">
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star"></span>
                                                                <span class="fas fa-star-half-alt"></span>
                                                                <span class="fas fa-star-half-alt"></span>
                                                                <span class="fas fa-star-half-alt"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Listing filter ends-->
                    <div class="col-md-12">
                        <div class="row pt-60   align-items-center">
                            <div class="col-lg-3 col-sm-5 col-5">
                                <div class="item-view-mode res-box">
                                    <!-- item-filter-list Menu starts -->
                                    <ul class="nav item-filter-list" role="tablist">
                                        <li><a class="active" data-toggle="tab" href="grid-fullwidth.html#grid-view"><i class="fas fa-th"></i></a></li>
                                    </ul>
                                    <!-- item-filter-list Menu ends -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-7 col-7">
                                <select class="listing-input hero__form-input  form-control custom-select">
                                    <option>Сперва новые</option>
                                    <option>Сперва старые</option>
                                    <option>Сперва дешевые</option>
                                    <option>Сперва дорогие</option>
                                </select>
                            </div>

                        </div>
                        <div class="item-wrapper pt-40   ">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane  show active  fade property-grid" id="grid-view">
                                    <div class="row">
                                        <?php foreach ($ads as $item): ?>
                                            <div class="col-xl-4 col-md-6 col-sm-12">
                                                <div class="single-property-box">
                                                    <div class="property-item">
                                                        <a class="property-img"><img src="images/property/property_8.jpg" alt="#"> </a>
                                                        <ul class="feature_text">
                                                            <li class="feature_cb"><span>Новый</span></li>
                                                            <li class="feature_or"><span>Продажа</span></li>
                                                        </ul>
                                                        <div class="property-author-wrap">
                                                            <a class="property-author">
                                                                <img src="images/agents/agent_min_1.jpg" alt="...">
                                                                <span><?= \common\models\User::findOne(['id' => $item->user_id])->name ?></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="property-title-box">
                                                        <h4><a><?= $item->name ?></a></h4>
                                                        <div class="property-location">
                                                            <i class="fa fa-map-marker-alt"></i>
                                                            <p><?= $item->address ?></p>
                                                        </div>
                                                        <ul class="property-feature">
                                                            <li> <i class="fas fa-bed"></i>
                                                                <span><?= $item->region ?></span>
                                                            </li>
                                                            <li> <i class="fas fa-bath"></i>
                                                                <span><?= $item->city ?></span>
                                                            </li>
                                                            <li> <i class="fas fa-arrows-alt"></i>
                                                                <span><?= $item->area ?></span>
                                                            </li>
                                                            <li>
                                                                <a href="http://chat-for-krisha.herokuapp.com/" class="trend-left float-left">
                                                                    <i class="fas fa-phone"></i>
                                                                    <span>Обратная связь</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="trending-bottom">
                                                            <div class="trend-left float-left">
                                                                <ul class="product-rating">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                </ul>
                                                            </div>
                                                            <a class="trend-right float-right">
                                                                <div class="trend-open">
                                                                    <p><?= $item->price ?></p>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
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

    <script src="js/plugin.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&libraries=places&callback=initAutocomplete">
    </script>
    <script src="js/main.js"></script>

</body>

</html>

<script>
    $('#find').click(function () {
        let region = $('#place-region').val();
        let city = $('#place-event').val();
        let price = $('#amount_two').val();
        let area = $('#amount_one').val();

        window.location.href = '/index.php?r=site%2Fgrid&region='+region+'&city='+city+'&price='+price+'&area='+area;

    })
</script>
