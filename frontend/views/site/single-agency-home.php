<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="/" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugin.css" rel="stylesheet" />
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Document Title -->
    <title>Krisha.kz</title>
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
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Дом</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Квартиру</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Дачу</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Участок</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Прочее</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-children">
                                                        <a>Снять</a>
                                                        <ul class="dropdown sub-menu">
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Дом</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Квартиру</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Дачу</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Офис</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Комнату</a></li>
                                                            <li><a href="<?= \yii\helpers\Url::to(['site/grid']) ?>">Прочее</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a>Компании и специалисты</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="/">Компании </a></li>
                                                    <li><a href="/">Специалисты </a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="grid-fullwidth.html#">Новостройки</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-lg-4 col-md-5 col-8 order-1 order-lg-2 text-right pr-xs-0">
                                <div class="menu-btn">
                                    <?php if (Yii::$app->user->isGuest): ?>
                                    <ul class="user-btn v2">
                                        <li><a href="single-agency-home.html#" data-toggle="modal" data-target="#user-login-popup"><i class="lnr lnr-user"></i></a>
                                        </li>
                                    </ul>
                                    <?php else: ?>
                                        <ul class="user-btn v2">
                                            <li><a href="<?= \yii\helpers\Url::to(['site/logout']) ?>">
                                                    <i class="lnr" style="margin-right: 16px">Выйти</i></a>
                                            </li>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="add-list float-right ml-3">
                                        <a class="btn v6" href="<?= \yii\helpers\Url::to(['site/add-listing']) ?>"><i class="lnr lnr-home"></i>Создать обьявление </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Main Menu ends-->
        </header>
        <!--Header ends-->
        <!--Hero section starts-->
        <div class="hero-slider v2">
            <div class="single-property-header v2">
                <div class="single-agency-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="property-slider-img bg-l" style="background-image: url('images/single-agency/2.jpg');">
                                <div class="overlay op-3"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="property-slider-img bg-l" style="background-image: url('images/single-agency/14.jpg');">
                                <div class="overlay op-2"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="property-slider-img bg-l" style="background-image: url('images/single-agency/8.jpg');">
                                <div class="overlay op-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="list-details-title v4">
                            <div class="single-listing-title float-left">
                                <h2>«Крыша» — тысячи свежих объявлений жилой и коммерческой недвижимости в Казахстане.</h2>
                                <p>Самые горячие предложения в твоем городе</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-agency-btn">
                        <div class="single-agency_prev"><i class="lnr lnr-chevron-left"></i><span>Пред</span></div>
                        <div class="single-agency_next"><span>След</span><i class="lnr lnr-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="promo-section mt-135 v2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-12">
                        <div class="promo-desc">
                            <div class="section-title v2">
                                <h1>О нас</h1>
                            </div>
                            <div class="promo-text">
                                <p>Krisha.kz — это более 300 000 актуальных объявлений о недвижимости в Казахстане. Здесь вы найдете квартиры, дома, коттеджи, дачи, а также коммерческую недвижимость на любой вкус, от офиса до магазина. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="promo-content-wrap">
                                    <div class="promo-content">
                                        <img src="images/single-agency/village_1.png" alt="...">
                                        <h4>Квартиры</h4>
                                        <p>Вы студент и вам надо срочно найти скромную и дешевую квартиру рядом с вашем университетом? Не проблема!</p>
                                    </div>
                                    <div class="promo-content">
                                        <img src="images/single-agency/playground_2.png" alt="...">
                                        <h4>Дома</h4>
                                        <p>Найдите дом мечты, на нашем сайте с комнатами для дочки и сына, с большой гостиной и с прекрасным видом!  </p>
                                    </div>
                                    <div class="promo-content">
                                        <img src="images/single-agency/shopping-mall.png" alt="...">
                                        <h4>Коттеджи</h4>
                                        <p>Хотите купить коттедж чтобы было не тесно или чтобы соседям не слышно? Чтобы начать все с нуля или заехать и жить? Вы можете найти это на сайте недвижимости Krisha.kz</p>
                                    </div>
                                    <div class="promo-content">
                                        <img src="images/single-agency/smart-home.png" alt="...">
                                        <h4>Дачи</h4>
                                        <p>Ищите дачу? В каком месте ? Рядом с горами? Возле озера? Все это вы можете найти на сайте недвижимости Krisha.kz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-130">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="counter-text v2">
                            <img src="images/svg/001-rating.svg" alt="..." class="icon-main">
                            <h6 class="counter-value" data-from="500" data-to="300000" data-speed="800"></h6>
                            <p>Обьявлении</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="counter-text v2">
                            <img src="images/svg/002-home.svg" alt="..." class="icon-main">
                            <h6 class="counter-value" data-from="0" data-to="100000" data-speed="500">
                            </h6>
                            <p>Домов</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="counter-text v2">
                            <img src="images/svg/003-flats.svg" alt="..." class="icon-main">
                            <h6 class="counter-value" data-from="1" data-to="200000" data-speed="500">
                            </h6>
                            <p>Квартир</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="counter-text v2">
                            <img src="images/svg/004-apartment.svg" alt="..." class="icon-main">
                            <h6 class="counter-value" data-from="1" data-to="10000" data-speed="500">
                            </h6>
                            <p>Зданий</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="counter-text v2">
                            <img src="images/svg/005-search.svg" alt="..." class="icon-main">
                            <h6 class="counter-value" data-from="1" data-to="25000" data-speed="500">
                            </h6>
                            <p>Дач</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="counter-text v2">
                            <img src="images/svg/006-shop.svg" alt="..." class="icon-main">
                            <h6 class="counter-value" data-from="1" data-to="38000" data-speed="500">
                            </h6>
                            <p>Прочее</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title v1">
                        <p>Просмотрите самые популярные предложения по всей стране</p>
                        <h2>Найди свою квартиру мечту в своем городе!</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="property-place pb-60 hideme" style="background-image: url('images/bg/map-bg-1.png')">
            <div class="container">
                <div class="row">
                    <div class="swiper-container popular-place-wrap v1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide single-place-wrap">
                                <div class="single-place-image">
                                    <a><img src="images/places/place_5.jpg" alt="place-image"></a>
                                    <a class="single-place-title">Актау</a>
                                </div>
                                <div class="single-place-content">
                                    <h3><span>80</span>горячих предложений</h3>
                                </div>
                            </div>
                            <div class="swiper-slide single-place-wrap">
                                <div class="single-place-image">
                                    <a><img src="images/places/place_1.jpg" alt="place-image"></a>
                                    <a class="single-place-title">Кокшетау</a>
                                </div>
                                <div class="single-place-content">
                                    <h3><span>115</span>горячих предложений</h3>
                                </div>
                            </div>
                            <div class="swiper-slide single-place-wrap">
                                <div class="single-place-image">
                                    <a ><img src="images/places/place_4.jpg" alt="place-image"></a>
                                    <a class="single-place-title">Уральск</a>
                                </div>
                                <div class="single-place-content">
                                    <h3><span>50</span>горячих предложений</h3>
                                </div>
                            </div>
                            <div class="swiper-slide single-place-wrap">
                                <div class="single-place-image">
                                    <a><img src="images/places/place_16.jpg" alt="place-image"></a>
                                    <a class="single-place-title">Караганда</a>
                                </div>
                                <div class="single-place-content">
                                    <h3><span>50</span>лучших предложении</h3>
                                </div>
                            </div>
                            <div class="swiper-slide single-place-wrap">
                                <div class="single-place-image">
                                    <a ><img src="images/places/place_2.jpg" alt="place-image"></a>
                                    <a class="single-place-title">Атырау</a>
                                </div>
                                <div class="single-place-content">
                                    <h3><span>30</span>лучших предложении</h3>
                                </div>
                            </div>
                            <div class="swiper-slide single-place-wrap">
                                <div class="single-place-image">
                                    <a><img src="images/places/place_6.jpg" alt="place-image"></a>
                                    <a class="single-place-title">Актобе</a>
                                </div>
                                <div class="single-place-content">
                                    <h3><span>145</span>лучших предложении</h3>
                                </div>
                            </div>
                        </div>
                        <div class="slider-btn v2 popular-next"><i class="lnr lnr-arrow-right"></i></div>
                        <div class="slider-btn v2 popular-prev"><i class="lnr lnr-arrow-left"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="trending-places pb-130 mt-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title v2">
                            <h2>Популярные запросы</h2>
                        </div>
                    </div>
                    <div class="swiper-container trending-place-wrap">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
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
                                                <span>Айтуган</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-title-box">
                                        <h4><a>2-комнатная квартира, 8/9 этаж</a></h4>
                                        <div class="property-location">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <p>мкр Центральный, Студентер проспект 190, Almaty</p>
                                        </div>
                                        <ul class="property-feature">
                                            <li> <i class="fas fa-bed"></i>
                                                <span>2 Спальни</span>
                                            </li>
                                            <li> <i class="fas fa-bath"></i>
                                                <span>1 Ванная</span>
                                            </li>
                                            <li> <i class="fas fa-arrows-alt"></i>
                                                <span>82.3 м²</span>
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
                                                    <p>$7500</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/property/property_7.jpg" alt="#"> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Новый</span></li>
                                            <li class="feature_or"><span>Продажа</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <img src="images/agents/agency_1.jpg" alt="...">
                                                <span>Carmen Properties</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-title-box">
                                        <h4><a>5-комнатный дом,  30 сот.</a></h4>
                                        <div class="property-location">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <p>Нажимеденова 1, Кокшетау</p>
                                        </div>
                                        <ul class="property-feature">
                                            <li> <i class="fas fa-bed"></i>
                                                <span>5 комнат</span>
                                            </li>
                                            <li> <i class="fas fa-bath"></i>
                                                <span>2 бассейна</span>
                                            </li>
                                            <li> <i class="fas fa-arrows-alt"></i>
                                                <span>188.1 м²</span>
                                            </li>
                                            <li> <i class="fas fa-car"></i>
                                                <span>2 гаража</span>
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
                                                    <p>$9200 </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/property/property_9.jpg" alt="#"> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Новый</span></li>
                                            <li class="feature_or"><span>Продажа</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <img src="images/agents/agent_min_3.jpg" alt="...">
                                                <span>Сауле</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-title-box">
                                        <h4><a>10-комнатный дом, 98 сот.</a></h4>
                                        <div class="property-location">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <p>мкр Мирас, Мкр Мирас 200</p>
                                        </div>
                                        <ul class="property-feature">
                                            <li> <i class="fas fa-bed"></i>
                                                <span>10 комнат</span>
                                            </li>
                                            <li> <i class="fas fa-bath"></i>
                                                <span>3 этажа</span>
                                            </li>
                                            <li> <i class="fas fa-arrows-alt"></i>
                                                <span>1024 м²</span>
                                            </li>
                                            <li> <i class="fas fa-car"></i>
                                                <span>2 гаража</span>
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
                                                    <p>$750000</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/property/property_5.jpg" alt="#"> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Горячее</span></li>
                                            <li class="feature_or"><span>Аренда</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <img src="images/agents/agency_3.jpg" alt="...">
                                                <span>Seaside Properties</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-title-box">
                                        <h4><a>8-комнатный дом помесячно</a></h4>
                                        <div class="property-location">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <p>мкр Мирас 123, Уральск</p>
                                        </div>
                                        <ul class="property-feature">
                                            <li> <i class="fas fa-bed"></i>
                                                <span>8 комнат</span>
                                            </li>
                                            <li> <i class="fas fa-bath"></i>
                                                <span>2 этажа</span>
                                            </li>
                                            <li> <i class="fas fa-arrows-alt"></i>
                                                <span>865 м²</span>
                                            </li>
                                            <li> <i class="fas fa-car"></i>
                                                <span>2 гаража</span>
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
                                                    <p><span class="per_sale">в месяц</span>$21000</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trending-pagination"></div>
                </div>
            </div>
        </div>

        <div class="testimonial-video property video my-100" style="background-image: url('images/header/header_11.jpg')">
            <div class="overlay op-5"></div>
            <div class="testimonial-btn">
                <a href="https://www.youtube.com/embed/cttOOjcVogw" target="_blank" class="hvr-ripple-out"><i class="fas fa-play"></i></a>
            </div>
        </div>

        <div class="single_property_agent pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title v1">
                            <h2>Риелтор этого месяца</h2>
                        </div>
                        <div class="agent-details-wrapper py-0">
                            <div class="row mb-50">
                                <div class="col-lg-5 col-md-6 col-sm-12 sm-center">
                                    <img src="images/agent.jpg" alt="..." class="img-responsive">
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-12">
                                    <div class="agent-details">
                                        <h3>Айтуган</h3>
                                        <ul class="address-list">
                                            <li>
                                                <span>
                                                    Company:
                                                </span>
                                                BI-Group
                                            </li>
                                            <li>
                                                <span>
                                                    Опыт работы:
                                                </span>
                                                более 3х лет
                                            </li>
                                            <li>
                                                <span>
                                                    Телефон:
                                                </span>
                                                +7 777-634-7071
                                            </li>
                                            <li>
                                                <span>
                                                    Офис:
                                                </span>
                                                г. Алматы, Кунаева, 181А
                                            </li>
                                            <li>
                                                <span>
                                                    Почта:
                                                </span>
                                                aitugan@gmail.com
                                            </li>
                                            <li>
                                                <span>
                                                    Skype:
                                                </span>
                                                aitugan
                                            </li>
                                        </ul>
                                        <ul class="social-buttons style1">
                                            <li><a ><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a ><i class="fab fa-twitter"></i></a></li>
                                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a ><i class="fab fa-youtube"></i></a></li>
                                            <li><a ><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single property agent ends -->
        <!--Testimonial section starts-->
        <div class="hero-client-section v3 pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="section-title v1">
                            <h2>ТОП 10 риелторов</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 mb-70">
                        <div class="client-wrapper swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-testimonial-item v2">
                                        <div class="testimonial-img">
                                            <img src="images/others/client_1.jpg" alt="...">
                                        </div>
                                        <div class="testimonial-text">
                                            <h3>Тахмина</h3>
                                            <span>город Караганда</span>
                                            <p>Помогу выгодно продать вашу недвижимость в короткие сроки.Сопровождение на всех этапах.
                                                Консультация бесплатно
                                                Звоните или пишите на watsapp, telegram.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonial-item v2">
                                        <div class="testimonial-img">
                                            <img src="images/others/client_2.jpg" alt="...">
                                        </div>
                                        <div class="testimonial-text">
                                            <h3>Мурат</h3>
                                            <span>город Кокшетау</span>
                                            <p>Помогу в кратчайший срок продать, купить, арендовать любую недвижимость.. Дам бесплатную грамотную консультацию... Помогу собрать документы и сопровождать при ипотечном кредитовании</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonial-item v2">
                                        <div class="testimonial-img">
                                            <img src="images/others/client_4.jpg" alt="...">
                                        </div>
                                        <div class="testimonial-text">
                                            <h3>Шынгыс</h3>
                                            <span>город Уральск</span>
                                            <p>Помогу выгодно продать вашу недвижимость в короткие сроки.Сопровождение на всех этапах.
                                                Консультация бесплатно
                                                Звоните или пишите на watsapp, telegram.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonial-item v2">
                                        <div class="testimonial-img">
                                            <img src="images/others/client_3.jpg.png" alt="...">
                                        </div>
                                        <div class="testimonial-text">
                                            <h3>Сауле</h3>
                                            <span>город Нур-Султан</span>
                                            <p>Помогу в кратчайший срок продать, купить, арендовать любую недвижимость.. Дам бесплатную грамотную консультацию... Помогу собрать документы и сопровождать при ипотечном кредитовании</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-testimonial-item v2">
                                        <div class="testimonial-img">
                                            <img src="images/others/client_5.jpg" alt="...">
                                        </div>
                                        <div class="testimonial-text">
                                            <h3>Галым</h3>
                                            <span>город Семей</span>
                                            <p>Помогу выгодно продать вашу недвижимость в короткие сроки.Сопровождение на всех этапах.
                                                Консультация бесплатно
                                                Звоните или пишите на watsapp, <telegram class=""></telegram></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-btn v2">
                            <div class="slider-btn v4 testimonial-prev"><i class="lnr lnr-arrow-left"></i></div>
                            <div class="slider-btn v4 testimonial-next"><i class="lnr lnr-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured-property-section mt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title v1">
                            <p>Смотрите также</p>
                            <h2>Самые популярные запросы</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="featured-property-wrap v2 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/featured/featured_1.jpg" alt="..."> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Срочно</span></li>
                                            <li class="feature_or"><span>В аренду</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <h4>ЖК Ортау</h4>
                                            </a>
                                            <ul class="property-feature">
                                                <li> <i class="fas fa-bed"></i>
                                                    <span>+3 комн</span>
                                                </li>
                                                <li> <i class="fas fa-bath"></i>
                                                    <span>2 ванных</span>
                                                </li>
                                                <li> <i class="fas fa-arrows-alt"></i>
                                                    <span>1400 м2</span>
                                                </li>
                                            </ul>
                                            <div class="featured-price">
                                                <p><span class="per_sale">от</span>540 000 тенге</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/featured/featured_8.jpg" alt="..."> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Срочно</span></li>
                                            <li class="feature_or"><span>В аренду</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <h4>ЖК Айгуль</h4>
                                            </a>
                                            <ul class="property-feature">
                                                <li> <i class="fas fa-bed"></i>
                                                    <span>+2 комн</span>
                                                </li>
                                                <li> <i class="fas fa-bath"></i>
                                                    <span>+2 ванных</span>
                                                </li>
                                                <li> <i class="fas fa-arrows-alt"></i>
                                                    <span>+1400 м2</span>
                                                </li>
                                            </ul>
                                            <div class="featured-price">
                                                <p>$1200/<span class="per_month">в месяц</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/featured/featured_9.jpg" alt="..."> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Срочно</span></li>
                                            <li class="feature_or"><span>Продажа</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <h4>Вилла в Актау</h4>
                                            </a>
                                            <ul class="property-feature">
                                                <li> <i class="fas fa-bed"></i>
                                                    <span>7 комн</span>
                                                </li>
                                                <li> <i class="fas fa-bath"></i>
                                                    <span>3 ванных</span>
                                                </li>
                                                <li> <i class="fas fa-arrows-alt"></i>
                                                    <span>2400 м2</span>
                                                </li>
                                            </ul>
                                            <div class="featured-price">
                                                <p><span class="per_sale"></span>$102000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/featured/featured_10.jpg" alt="..."> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Рекомендуемые</span></li>
                                            <li class="feature_or"><span>Скидка</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <h4>ЖК Семейный</h4>
                                            </a>
                                            <ul class="property-feature">
                                                <li> <i class="fas fa-bed"></i>
                                                    <span>+4 комн</span>
                                                </li>
                                                <li> <i class="fas fa-bath"></i>
                                                    <span>+2 ванных</span>
                                                </li>
                                                <li> <i class="fas fa-arrows-alt"></i>
                                                    <span>2142 м2</span>
                                                </li>
                                            </ul>
                                            <div class="featured-price">
                                                <p><span class="per_sale">начинается от</span>$152000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide single-property-box">
                                    <div class="property-item">
                                        <a class="property-img"><img src="images/featured/featured_11.jpg" alt="..."> </a>
                                        <ul class="feature_text">
                                            <li class="feature_cb"><span>Скоро</span></li>
                                            <li class="feature_or"><span>На продажу</span></li>
                                        </ul>
                                        <div class="property-author-wrap">
                                            <a class="property-author">
                                                <h4>ЖК Арман</h4>
                                            </a>
                                            <ul class="property-feature">
                                                <li> <i class="fas fa-bed"></i>
                                                    <span>3 комн</span>
                                                </li>
                                                <li> <i class="fas fa-bath"></i>
                                                    <span>1 ванная</span>
                                                </li>
                                                <li> <i class="fas fa-arrows-alt"></i>
                                                    <span>1800 м2</span>
                                                </li>
                                            </ul>
                                            <div class="featured-price">
                                                <p><span class="per_sale">starts from</span>$12000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Slider Arrows-->
                            <div class="slider-btn v2 featured_prev"><i class="lnr lnr-arrow-left"></i></div>
                            <div class="slider-btn v2 featured_next"><i class="lnr lnr-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="promo-section mt-50 v2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-12">
                        <div class="promo-desc">
                            <div class="section-title v2">
                                <h2>Почему надо выбирать именно нас?</h2>
                            </div>
                            <div class="promo-text">
                                <p>Каждый человек хотя бы раз в своей жизни неминуемо сталкивается с операциями на рынке недвижимости. И неудивительно, ведь все мы живём на собственной либо арендованной жилплощади, работаем в помещениях, которые являются объектами недвижимости.
                                    <br>
                                    Практически каждый из нас мечтает о приобретении большой красивой квартиры или дома, и многим эту мечту удаётся реализовать. Кроме того, есть немало людей, для которых операции с недвижимым имуществом – это их бизнес или работа.
                                    <br>
                                    Именно потому, что недвижимость – это неотъемлемая часть нашей жизни, сайт krisha.kz, в деятельности которого на равных правах принимают участие все участники рынка, очень популярен в Казахстане уже много лет. Кем бы вы ни были: брокером, владельцем крупной риэлторской компании, покупателем, продавцом, арендатором или арендодателем – наш сайт будет очень полезным для вас.
                                    <br>
                                    Krisha.kz – это постоянный доступ к актуальной базе объявлений о продаже, покупке, аренде квартир, домов, дач, земельных участков в городах и сёлах Казахстана, а также к информации о любых видах коммерческой недвижимости. Во всех объявлениях указана цена объекта, что очень важно для анализа конкретной ситуации.</p>
                            </div>
                            <div class="row pt-5">
                                <div class="col-sm-4 col-12">
                                    <div class="counter-text v2">
                                        <i class="lnr lnr-apartment"></i>
                                        <h6 class="counter-value" data-from="0" data-to="10" data-speed="1500">
                                        </h6>
                                        <p>лет опыта</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="counter-text v2">
                                        <i class="lnr lnr-thumbs-up"></i>
                                        <h6 class="counter-value" data-from="0" data-to="5850" data-speed="1000">
                                        </h6>
                                        <p>счастливых клиентов</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="counter-text v2">
                                        <i class="lnr lnr-user"></i>
                                        <h6 class="counter-value" data-from="0" data-to="100" data-speed="1500">
                                        </h6>
                                        <p>профессиональных риелторов</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="promo-content-wrap">
                                    <div class="promo-content">
                                        <img src="images/category/pin.png" alt="...">
                                        <h4>Индивидуальный подход к каждому</h4>
                                    </div>
                                    <div class="promo-content">
                                        <img src="images/category/rent.png" alt="...">
                                        <h4>Самые дешевые цены</h4>
                                    </div>
                                    <div class="promo-content">
                                        <img src="images/category/customer_support.png" alt="...">
                                        <h4>24/7 служба поддержки</h4>
                                    </div>
                                    <div class="promo-content">
                                        <img src="images/category/deal.png" alt="...">
                                        <h4>Нам доверяют 10000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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

    <div class="modal fade" id="user-login-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="lnr lnr-cross"></i></span></button>
                </div>
                <div class="modal-body">

                    <div class="user-login-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="ui-list nav nav-tabs mb-30" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="single-agency-home.html#login" role="tab" aria-selected="true">Войти</a>
                                        </li>
                                    </ul>
                                    <div class="login-wrapper">
                                        <div class="ui-dash tab-content">
                                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form id="login-form" action="#" method="post">
                                                            <div class="form-group">
                                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Ваш email" value="" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Введите пароль">
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-md-6 col-12 text-left">
                                                                    <div class="res-box">
                                                                        <input id="check-l" type="checkbox" name="check">
                                                                        <label for="check-l">Запомнить</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12 text-right">
                                                                    <div class="res-box sm-left">
                                                                        <a href="single-agency-home.html#" tabindex="5" class="forgot-password">Забыли пароль?</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-box text-center mt-30">
                                                                <button type="button" id="submit-btn" class="btn v8"><span class="lnr lnr-exit"></span> Войти</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="signup-wrapper">
                                                            <img src="images/others/login-1.png" alt="...">
                                                            <p>С возращением! Пожалуйста, введите свой логин чтобы быть в курсе последних новостей!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
    <script src="js/plugin.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&libraries=places&callback=initAutocomplete"></script>
    <script src="js/main.js"></script>
    <script>
        $('#submit-btn').click(function () {
            let login =  $('#username').val();
            let password =  $('#password').val();
            $.post('/index.php?r=site%2Flogin', {username: login, password: password}, function (res) {
                if (res == 1) {
                    window.location.reload()
                } else {
                    alert('Не правильный логин или пароль')
                }
            })
        })
    </script>
</body>

</html>
