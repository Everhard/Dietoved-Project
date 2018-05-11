<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="author" content="admin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta property="og:url" content="http://dietoved.hbmdev.com/html/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Диетовед" />
    <meta property="og:description" content="Первый профессиональный онлайн-сервис в сфере здорового образа жизни" />
    <meta property="og:image" content="img/logo.png" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@dietoved">
    <meta name="twitter:title" content="Диетовед">
    <meta name="twitter:description" content="Первый профессиональный онлайн-сервис в сфере здорового образа жизни">

    <style media="screen">.main-preloader{position:fixed;top:0;left:0;width:100%;height:100%;z-index:5;background-color:#2ce5bc;overflow:hidden;-webkit-transition:height 1s ease;transition:height 1s ease}.main-preloader.hide{height:0}.load-data-wrap{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);margin:0;text-align:center}.load-data{color:#fff;font-size:32px}.load-progress-wrap{position:relative;width:300px;margin:10px auto 0;height:2px}.load-progress{position:absolute;left:0;width:0;height:100%;background-color:#fff}</style>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700&amp;subset=cyrillic" rel="stylesheet">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="main-preloader">
    <figure class="load-data-wrap">
        <p class="load-data"><span>0</span>%</p>
        <div class="load-progress-wrap">
            <div class="load-progress"></div>
        </div>
    </figure>
</div>

<div id="wrapper">
    <div class="bg top"></div>
    <div class="bg middle"></div>
    <div class="bg bottom"></div>
    <div class="bg-close-modal"></div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-6">
                    <a href="/" class="logo">
                        <img src="img/logo.png" alt="Диетовед" />
                    </a>
                </div>
                <div class="col-md-8 col-sm-6 col-6">
                    <div class="sign-panel">
                        <button type="button" class="btn btn-bg white btn-register" data-fancybox data-src="#register">Создать аккаунт</button>
                        <button type="button" class="btn btn-border white btn-login" data-fancybox data-src="#login">
                            <i class="btn-icon">
                                <img src="img/icons/man-user.svg" alt="Login" />
                            </i>
                            <span class="btn-text">Войти</span>
                        </button>
                    </div>
                </div>
            </div>
            <button class="btn-toggle-menu">
                <span class="toggle-menu-wrap">
                    <i></i><i></i><i></i>
                </span>
            </button>
            <nav class="nav-main custom-nav light top">
                <a href="/" class="logo">
                    <img src="img/logo-2.png" alt="Диетовед" />
                </a>
                <ul>
                    <li>
                        <a href="profile.html">Профиль</a>
                    </li>
                    <li>
                        <a href="profi-use-with-registration.html">Сервис</a>
                    </li>
                    <li>
                        <a href="training.html">Обучение</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="folder">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="folder-content-wrap">
                        <h1>Первый профессиональный онлайн-сервис в сфере здорового образа жизни</h1>
                        <h4 class="slogan">Для профессионалов и людей заботящихся о своем здоровье</h4>
                        <button type="button" class="btn btn-bg white btn-lg">Попробовать без регистрации</button>
                        <button type="button" class="btn btn-underline watch-video" data-fancybox data-src="https://www.youtube.com/watch?v=FeipsZ_4nSI">
                            <i class="btn-icon">
                                <svg height="100" width="100">
                                    <circle cx="16" cy="16" r="14" fill="transparent" />
                                </svg>
                            </i>
                            <span class="btn-text">Смотреть видео</span>
                        </button>
                        <ul class="soc-list">
                            <li>
                                <a href="#" class="btn-soc facebook">
                                    <img src="img/social/facebook-logo.svg" alt="Facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn-soc google-plus">
                                    <img src="img/social/google-plus.svg" alt="Google plus" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn-soc twitter">
                                    <img src="img/social/twitter-logo-silhouette.svg" alt="Twitter" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn-soc instagram">
                                    <img src="img/social/instagram-social-network-logo-of-photo-camera.svg" alt="Instagram" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn-soc vk">
                                    <img src="img/social/vk-social-network-logo.svg" alt="Vkontakte" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn-soc mail">
                                    <img src="img/social/close-envelope.svg" alt="Email" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-theme">
            <img src="img/mac-preview/home-mac.png" alt="Первый профессиональный онлайн-сервис в сфере здорового образа жизни" class="tab-preview tab-content" data-tab="1" />
            <img src="img/mac-preview/home-mac-2.png" alt="Первый профессиональный онлайн-сервис в сфере здорового образа жизни" class="tab-preview tab-content" data-tab="2" />
            <img src="img/mac-preview/home-mac-3.png" alt="Первый профессиональный онлайн-сервис в сфере здорового образа жизни" class="tab-preview tab-content" data-tab="3" />
            <img src="img/mac-preview/home-mac-4.png" alt="Первый профессиональный онлайн-сервис в сфере здорового образа жизни" class="tab-preview tab-content" data-tab="4" />
            <img src="img/mac-preview/home-mac-5.png" alt="Первый профессиональный онлайн-сервис в сфере здорового образа жизни" class="tab-preview tab-content" data-tab="5" />
            <img src="img/mac-preview/home-mac-6.png" alt="Первый профессиональный онлайн-сервис в сфере здорового образа жизни" class="tab-preview tab-content" data-tab="6" />

            <ul class="parallax-tabs-list">
                <li>
                    <button class="parallax-tab-btn btn-tab" data-tab="1">
                        <img src="img/mac-buttons/1.png" alt="some text" />
                    </button>
                </li>
                <li>
                    <button class="parallax-tab-btn btn-tab" data-tab="2">
                        <img src="img/mac-buttons/2.png" alt="some text" />
                    </button>
                </li>
                <li>
                    <button class="parallax-tab-btn btn-tab" data-tab="3">
                        <img src="img/mac-buttons/3.png" alt="some text" />
                    </button>
                </li>
                <li>
                    <button class="parallax-tab-btn btn-tab" data-tab="4">
                        <img src="img/mac-buttons/4.png" alt="some text" />
                    </button>
                </li>
                <li>
                    <button class="parallax-tab-btn btn-tab" data-tab="5">
                        <img src="img/mac-buttons/5.png" alt="some text" />
                    </button>
                </li>
                <li>
                    <button class="parallax-tab-btn btn-tab" data-tab="6">
                        <img src="img/mac-buttons/6.png" alt="some text" />
                    </button>
                </li>
            </ul>
        </div>
    </section>
    <section class="online-services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 offset-1">
                    <div class="online-services-title">
                        <h2>Онлайн сервис для</h2>
                        <div class="customers-list dotted-style">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <p>Врачей-диетологов, эндокриноголов</p>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <p>Спортсменов и тренеров</p>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <p>Консультантов по питанию</p>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <p>Людей, заботящихся о своем здоровье</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="online-services-list">
                        <div class="online-services-item parallax-element">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="photo">
                                        <img data-src="img/online-services/1.png" alt="Анализируйте состояние организма" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="online-services-text">
                                        <h3 class="title">Анализируйте состояние организма</h3>
                                        <p class="description">Благодаря удобной системе сервиса, Вы лишь единожды вводите данные клиента, после чего все показатели и индексы здоровья рассчитываются автоматически.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="online-services-item parallax-element">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="photo">
                                        <img data-src="img/online-services/2.png" alt="Составляйте пищевой рацион" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="online-services-text">
                                        <h3 class="title">Составляйте пищевой рацион</h3>
                                        <p class="description">В базу продуктов нашего сервиса внесено более 1000 наименований. Кроме того, Вы сможете самостоятельно добавлять продукты, которых не нашли в списке, или составлять готовые блюда.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="online-services-item parallax-element">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="photo">
                                        <img data-src="img/online-services/3.png" alt="Отслеживайте динамику" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="online-services-text">
                                        <h3 class="title">Отслеживайте динамику</h3>
                                        <p class="description">Отслеживайте свои результаты или успехи клиентов благодаря возможности создавать контрольные точки и сравнивать показатели здоровья в динамике.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="online-services-item parallax-element">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="photo">
                                        <img data-src="img/online-services/4.png" alt="Определяйте риски развития заболеваний" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="online-services-text">
                                        <h3 class="title">Определяйте риски развития заболеваний</h3>
                                        <p class="description">Встроенная система определения рисков развития заболеваний поможет вовремя обратить внимание на возможные отклонения в работе основных систем организма.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="online-services-item parallax-element">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="photo">
                                        <img data-src="img/online-services/5.png" alt="Воспользуйтесь базой данных" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="online-services-text">
                                        <h3 class="title">Воспользуйтесь базой данных</h3>
                                        <p class="description">Энергетическая ценность продуктов, гликемические индексы аминокислоты, витамины, минералы и многое другое.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="online-services-item parallax-element">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="photo">
                                        <img data-src="img/online-services/6.png" alt="Обучайтесь" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="online-services-text">
                                        <h3 class="title">Обучайтесь</h3>
                                        <p class="description">Кроме базы данных сайта, Вы получите возможность пройти онлайн-обучение по диетологии и получить сертификат после его завершения. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe-section">
        <div class="container">
            <div class="subscribe-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="subscribe-title">Попробовать бессплатно</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-wrap subscribe-form">
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="email">
                                        <span class="input-group-btn">
                                            <button class="btn btn-gradient btn-lg submit" type="button"><span>Попробовать</span></button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages-section">
        <div class="container">
            <div class="advantages-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="advantage-title">Преимущества сервиса</h2>
                        <ul class="advantages-list">
                            <li class="advantage-item">
                                <div class="round-icon">
                                    <img data-src="img/advantages/4.png" alt="Для врачей" />
                                </div>
                                <h3 class="title">Для врачей</h3>
                                <div class="advantage-description">
                                    <p><strong>Оптимизируйте работу с пациентом:</strong> введите данные клиента и получите автоматические расчеты всех основных индексов здоровья, отслеживайте прогресс и следите за изменениями в показателях здоровья, удобно составляйте пищевой рацион и отправляйте его клиенту.</p>
                                    <p>Участие в рейтинге специалистов позволит рассказать о себе потенциальным клиентам.</p>
                                </div>
                                <button
                                    class="btn btn-gradient"
                                    type="button"
                                >Подробнее</button>
                            </li>
                            <li class="advantage-item">
                                <div class="round-icon">
                                    <img data-src="img/advantages/1.png" alt="Тренерам и консультантам" />
                                </div>
                                <h3 class="title">Тренерам и консультантам</h3>
                                <div class="advantage-description">
                                    <p><strong>Оптимизируйте работу с пациентом:</strong> введите данные клиента и получите автоматические расчеты всех основных индексов здоровья, отслеживайте прогресс и следите за изменениями в показателях здоровья, удобно составляйте пищевой рацион и отправляйте его клиенту.</p>
                                    <p>Участие в рейтинге специалистов позволит рассказать о себе потенциальным клиентам.</p>
                                </div>
                                <button
                                    class="btn btn-gradient"
                                    type="button"
                                >Подробнее</button>
                            </li>
                            <li class="advantage-item">
                                <div class="round-icon">
                                    <img data-src="img/advantages/2.png" alt="Медицинским центрам" />
                                </div>
                                <h3 class="title">Медицинским центрам</h3>
                                <div class="advantage-description">
                                    <p><strong>Оптимизируйте работу с пациентом:</strong> введите данные клиента и получите автоматические расчеты всех основных индексов здоровья, отслеживайте прогресс и следите за изменениями в показателях здоровья, удобно составляйте пищевой рацион и отправляйте его клиенту.</p>
                                    <p>Участие в рейтинге специалистов позволит рассказать о себе потенциальным клиентам.</p>
                                </div>
                                <button
                                    class="btn btn-gradient"
                                    type="button"
                                >Подробнее</button>
                            </li>
                            <li class="advantage-item">
                                <div class="round-icon">
                                    <img data-src="img/advantages/3.png" alt="Для тех, кто заботится о своем здоровье" />
                                </div>
                                <h3 class="title">Для тех, кто заботится о своем здоровье</h3>
                                <div class="advantage-description">
                                    <p><strong>Оптимизируйте работу с пациентом:</strong> введите данные клиента и получите автоматические расчеты всех основных индексов здоровья, отслеживайте прогресс и следите за изменениями в показателях здоровья, удобно составляйте пищевой рацион и отправляйте его клиенту.</p>
                                    <p>Участие в рейтинге специалистов позволит рассказать о себе потенциальным клиентам.</p>
                                </div>
                                <button
                                    class="btn btn-gradient"
                                    type="button"
                                >Подробнее</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-works-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Как работает сервис</h2>
                </div>
            </div>
            <div class="how-works-wrap parallax-element">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group how-works-list">
                            <li><strong>Регистрация.</strong> Вы можете выбрать аккаунт для профессионального или личного использования.</li>
                            <li><strong>Благодаря удобному и понятному интерфейсу</strong> Вы сможете рассчитать основные индексы здоровья, составить рацион питания, распечатать или отправить результаты по электронной почте.</li>
                            <li><strong>Создавайте контрольные точки и отслеживайте</strong> состояние здоровья в динамике.</li>
                            <li><strong>Возможность онлайн-консультирования</strong> обеспечит удобство связи между клиентом и специалистом не зависимо от географии.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="preview photo">
                            <img data-src="img/how-works/1.png" alt="Как работает сервис" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="opportunities-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Возможности сервиса</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="inf-for-swipe">
                        <img src="img/icons/swipe.svg" alt="Листа" />
                    </div>
                    <div class="h-scroll">
                        <div class="table-div-wrap">
                            <div class="table-div-col description">
                                <div class="table-div-title"></div>
                                <div class="table-div-item">
                                    <p>Расчет индексов здоровья</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Составление пищевого рациона</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Расчет рисков заболеваний</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Рекомендации</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Создание контрольных точек</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Графики прогресса</p>
                                </div>
                                <div class="table-div-item">
                                    <p>База данных по диетологии</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Онлайн-обучение</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Печать/пересылка результатов</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Онлайн-консультирование</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Рейтинг специалистов</p>
                                </div>
                                <div class="table-div-item">
                                    <p>База данных клиентов</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Запись данных биоимпедансметрии</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Запись лабораторных исследований</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Персонализация формы обследования</p>
                                </div>
                                <div class="table-div-item">
                                    <p>Добавление статей на сайт</p>
                                </div>
                            </div>
                            <div class="table-div-col">
                                <div class="table-div-title">
                                    <p>Профессиональный</p>
                                    <p class="detail">от 2 USD/мес</p>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <button
                                    class="btn btn-gradient"
                                    type="button"
                                    data-fancybox
                                    data-src="#register"
                                >Регистрация</button>
                            </div>
                            <div class="table-div-col">
                                <div class="table-div-title">
                                    <p>Персональный</p>
                                    <p class="detail">Бесплатно</p>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <button
                                    class="btn btn-gradient"
                                    type="button"
                                    data-fancybox
                                    data-src="#register"
                                >Регистрация</button>
                            </div>
                            <div class="table-div-col">
                                <div class="table-div-title">
                                    <p>Без регистрации</p>
                                    <p class="detail">Бесплатно</p>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check true"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <div class="table-div-item">
                                    <div class="check false"></div>
                                </div>
                                <button
                                    class="btn btn-gradient"
                                    type="button"
                                    data-fancybox
                                    data-src="#register"
                                >Регистрация</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="btn-group dropright social-wrap">
                        <button type="button" class="btn btn-soc-share">
                            <i class="btn-icon">
                                <img src="img/icons/like.svg" alt="Like" />
                            </i>
                            <span class="btn-text">Like</span>
                            <span class="btn-text detail">112K</span>
                        </button>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split btn-soc-share-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu drop-sharing-menu">
                            <div class="share"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="nav footer-nav">
                        <a class="nav-link" href="#">Статьи</a>
                        <a class="nav-link" href="#">Контакты</a>
                        <a class="nav-link" href="#">Обучение</a>
                        <a class="nav-link" href="#">Соглашение</a>
                        <a class="nav-link" href="#">Рейтинг специалистов</a>
                        <a class="nav-link" href="#">Информация для специалистов</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <button class="to-top" onclick="backToTop()">
        <img src="img/to-top.png" alt="back to top" />
    </button>
</div>

<div id="register" class="popup">
    <div class="popup-wrap">
        <?php $form = ActiveForm::begin([
            'id' => 'sign-up-form',
            'options' => ['class' => 'form'],
            'fieldConfig' => [
                'template' => '{input}',
                'options' => ['tag' => false],
            ],
            'enableAjaxValidation' => true,
        ]); ?>
            <h2 class="popup-title">Регистрация</h2>

            <div class="field-signupform-email"><div class="help-block"></div></div>
            <div class="field-signupform-password"><div class="help-block"></div></div>

            <div class="input-group mt-4 bg-group">
                <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="img/icons/mail-outline.svg" class="input-group-icon" alt="Введите ваш E-mail" />
                        </span>
                </div>

                <?= $form->field($sign_up_model, 'email', [
                        'inputOptions' => [
                            'type' => 'email',
                            'class' => 'form-control',
                            'placeholder' => 'Введите ваш E-mail',
                            'aria-label' => 'Введите ваш E-mail',
                        ],
                ]) ?>

            </div>
            <div class="input-group mt-4 bg-group">
                <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="img/icons/padlock.svg" class="input-group-icon" alt="Введите ваш пароль" />
                        </span>
                </div>

                <?= $form->field($sign_up_model, 'password', [
                    'inputOptions' => [
                        'type' => 'password',
                        'class' => 'form-control',
                        'placeholder' => 'Введите ваш пароль',
                        'aria-label' => 'Введите ваш пароль',
                    ],
                ]) ?>

            </div>
            <label class="form-check">
                <input type="checkbox" class="form-check-input" data-button="sign-up">
                <span class="form-check-icon"></span>
                <span class="form-check-label">Согласен с <a href="#">условиями использования сервиса</a></span>
            </label>
            <a href="#check-email"
               class="btn btn-gradient btn-lg disabled"
               data-button="sign-up"
               data-fancybox
            >Регистрация</a>
            <p>или</p>
            <a href="#" class="btn btn-social-login facebook mt-3">
                <i class="btn-icon">
                    <img src="img/social/facebook-bg.svg" alt="Sign up with Facebook" />
                </i>
                <span class="btn-text">Sign in <span>with</span> Facebook</span>
            </a>
            <a href="#" class="btn btn-social-login google mt-3">
                <i class="btn-icon">
                    <img src="img/social/google-color.svg" alt="Sign up with Google" />
                </i>
                <span class="btn-text">Sign in <span>with</span> Google</span>
            </a>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="more-inf">
        <p>Уже есть аккаунт? <a href="#login" data-fancybox>Войти</a></p>
    </div>
</div>
<div id="login" class="popup">
    <div class="popup-wrap">
        <form class="form">
            <h2 class="popup-title">Вход</h2>
            <div class="input-group mt-4 bg-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/icons/mail-outline.svg" class="input-group-icon" alt="Введите ваш E-mail" />
                    </span>
                </div>
                <input type="email" class="form-control" placeholder="Введите ваш E-mail" aria-label="Введите ваш E-mail">
            </div>
            <div class="input-group mt-4 bg-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/icons/padlock.svg" class="input-group-icon" alt="Введите ваш пароль" />
                    </span>
                </div>
                <input type="password" class="form-control" placeholder="Введите ваш пароль" aria-label="Введите ваш пароль">
            </div>
            <label class="form-check">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-icon"></span>
                <span class="form-check-label">Запомнить меня</span>
            </label>
            <button
                class="btn btn-gradient btn-lg"
                type="button"
            >Вход</button>
            <p>или</p>
            <a href="#" class="btn btn-social-login facebook mt-3">
                <i class="btn-icon">
                    <img src="img/social/facebook-bg.svg" alt="Login with Facebook" />
                </i>
                <span class="btn-text">Login <span>with</span> Facebook</span>
            </a>
            <a href="#" class="btn btn-social-login google mt-3">
                <i class="btn-icon">
                    <img src="img/social/google-color.svg" alt="Login with Google" />
                </i>
                <span class="btn-text">Login <span>with</span> Google</span>
            </a>
        </form>
    </div>
    <div class="more-inf">
        <p>Нет аккаунта? <a href="#register" data-fancybox>Зарегистрироваться</a></p>
        <p><a href="#reset-password" data-fancybox>Забыли пароль?</a></p>
    </div>
</div>
<div id="reset-password" class="popup reset">
    <div class="popup-wrap">
        <form class="form">
            <h2 class="popup-title">Восстановление
                пароля</h2>
            <p class="description">Введите ваш e-mail и мы вышлем письмо с инструкциями по восстановлению пароля</p>
            <div class="input-group mt-4 bg-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="img/icons/mail-outline.svg" class="input-group-icon" alt="Введите ваш E-mail" />
                    </span>
                </div>
                <input type="email" class="form-control" placeholder="Введите ваш E-mail" aria-label="Введите ваш E-mail">
            </div>
            <button
                class="btn btn-gradient btn-lg mt-3"
                type="button"
            >Скинуть</button>
        </form>
    </div>
</div>
<div id="check-email" class="popup reset">
    <div class="popup-wrap">
        <h2 class="popup-title">Проверьте ваш e-mail</h2>
        <div class="popup-img">
            <img src="img/icons/email.png" alt="Проверьте ваш e-mail" />
        </div>
        <p class="description">Для завершения регистрации подтвердите
            Ваш e-mail. Для этого перейдите в Ваш
            почтовый ящик и следуйте инструкциям.</p>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>