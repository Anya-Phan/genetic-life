<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О Враче</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.html'; ?>
    <!-- Side bar Moble -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.html'; ?>

    <!-- Main -->
    <main>
        <!-- Breadcrumbs -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__row pagerow">
                    <a href="/main" class="breadcrumbs__page">Главная</a>
                    <img src="/assets/images/breadcrumbs__icon.svg" alt="" class="breadcrumbs__arrow">
                    <a href="/about_doctor" class="breadcrumbs__page">О Враче</a>
                </div>
            </div>
        </section>

        <!-- Hero -->

        <section class="pagecosmetology-hero">
            <div class="container">
                <h1 class="pagecosmetology-hero__title">О Враче</h1>
                <p class="pagecosmetology-hero__subtitle"><span>Ольга Шаго</span> – Врач-косметолог, дерматолог,
                    терапевт, диетолог, трихолог, генетический консультант, антиэйдж терапевт. Управляет
                    возрастом и разрабатывает стратегии здоровья</p>
            </div>
            <section class="pagecosmetology-hero__main pageaboutdoctor-hero__main">
                <div class="container">
                    <div class="pagecosmetology-hero__main-info">
                        <h1 class="pagecosmetology-hero__main-info-title">О Враче</h1>
                        <p class="pagecosmetology-hero__main-info-subtitle">Врач-косметолог, дерматолог, терапевт,
                            диетолог, трихолог, генетический консультант, антиэйдж терапевт. Управляет
                            возрастом и разрабатывает стратегии здоровья</p>
                        <a class="pagecosmetology-hero__btn btn btn-white" data-modal-onclick="about-doctor-modal-1">
                            Записаться на Консультацию
                            <div class="wrap__chervon">
                                <img src="/assets/images/chervon--no-bg.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </section>

        <!-- Specialist -->
        <section class="main-specialist">
            <div class="container">
                <h2 class="pageaboutdoctor-specialist__title">Мой путь врача</h2>
                <section class="main-specialist__wrap">
                    <div class="pageaboutdoctor-specialist__img pageaboutdoctor-specialist__flex-item">
                        <img src="/assets/images/pile-of-book__image.webp" alt="" />
                    </div>
                    <ul class="main-specialist__list pageaboutdoctor-specialist__flex-item">
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Начало пути
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    В 2000 году я поступила в Читинскую
                                    Государственную Медицинскую Академию с
                                    мечтой принимать роды. Уже с 2003
                                    работала в гинекологии медсестрой, где я
                                    научилась многому, но вскоре поняла, что
                                    этот путь не мой. В 2006 году я успешно
                                    выпустилась из ЧГМА и начала свою
                                    карьеру.
                                </p>
                            </div>
                        </li>

                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Ординатура
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    С 2007 по 2008 год я проходила
                                    ординатуру по специальности «Врач
                                    лучевой диагностики» и стала заведующей
                                    рентгенологического отделения в
                                    Областном Противотуберкулезном
                                    Диспансере.
                                </p>
                            </div>
                        </li>
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Поворот к косметологии
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    Каждый день я стремилась к новому,
                                    поэтому параллельно работала в клинике
                                    Косметологии и оканчивала Интернатуру по
                                    Дерматовенерологии и Специализацию по
                                    Косметологии в Медицинском Университете
                                    имени И. И. Мечникова г.
                                    Санкт-Петербург, а затем и Ординатуру
                                    по Терапии. в 2014 году прошла обучение
                                    на Кафедре Медицинской Трихологии на
                                    базе РУДН в Москве.
                                </p>
                            </div>
                        </li>
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Второе образование
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    Параллельно я получила второе высшее
                                    образование в Забайкальском
                                    Государственном Университете, ведь
                                    получив приглашение из Министрества
                                    Здравоохранения задумывалась о карьере
                                    чиновника.
                                </p>
                            </div>
                        </li>
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Увлечение нутрициологией
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    Мой интерес к нутрициологии стал
                                    настоящей страстью, и я продолжила
                                    обучаться на различных курсах и
                                    семинарах.
                                </p>
                            </div>
                        </li>
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Любовь к лазерам
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    В 2018 году я заняла второе место во
                                    Всероссийском конкурсе по использованию
                                    лазерных систем. Лазеры стали
                                    неотъемлемой частью моей практики.
                                </p>
                            </div>
                        </li>
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Генетика и экология микробиоты
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    В 2020−2021 годах я повысила
                                    квалификацию в области генетического
                                    консультирования и экологии микробиоты.
                                </p>
                            </div>
                        </li>
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Учеба в Париже
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    С 2021 года я обучаюсь в европейской
                                    школе антивозрастной медицины в Париже,
                                    совершенствуя свои знания и навыки.
                                </p>
                            </div>
                        </li>
                        <li class="main-specialist__item">
                            <div class="main-specialist__item-header pagerow">
                                <p class="main-specialist__item-title">
                                    Почему столько специальностей?
                                </p>
                                <div class="main-icon-plus">
                                    <img src="/assets/images/icon__plus.svg" alt="" />
                                </div>
                                <div class="main-icon-minus">
                                    <img src="/assets/images/icon__minus.svg" alt="" />
                                </div>
                            </div>
                            <div>
                                <p class="main-specialist__item-desc">
                                    Я верю, что любые проявления на коже –
                                    это отражение внутреннего состояния
                                    организма. Поэтому комплексный подход к
                                    решению кожных проблем и омоложению
                                    является ключевым в моей практике. Моя
                                    миссия – помочь клиентам быть не только
                                    красивыми, но и здоровыми.
                                </p>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </section>

        <!-- Преимущества работы со мной -->
        <section class="pageaboutdoctor-advantage">
            <div class="container">
                <h2 class="pageaboutdoctor-advantage__title">Преимущества работы со мной</h2>

                <div class="pageaboutdoctor__swiper-mobile">
                    <ul class="swiper-wrapper pageaboutdoctor-advantage__list">
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-1.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Комплексный подход</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Лечу не симптомы, а причины</p>
                            </div>
                        </li>
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-2.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Индивидуальные решения</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Программы под ваши особенности и цели
                                </p>
                            </div>
                        </li>
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-3.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Безопасность</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Только проверенные методы лечения</p>
                            </div>
                        </li>
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-4.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Внутренняя и внешняя красота</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Улучшаю и самочувствие</p>
                            </div>
                        </li>
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-5.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Опыт и актуальные знания</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Применение новейших методов</p>
                            </div>
                        </li>
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-6.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Поддержка</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Полное сопровождение и мотивация</p>
                            </div>
                        </li>
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-7.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Восстановление после COVID-19</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Программы восстановления</p>
                            </div>
                        </li>
                        <li class="pageaboutdoctor-advantage__item swiper-slide">
                            <img class="pageaboutdoctor-advantage__img" src="/assets/images/advantage-icon-8.svg"
                                alt="">
                            <div class="pageaboutdoctor-advantage__text">
                                <p class="pageaboutdoctor-advantage__text-top">Долгосрочный результат</p>
                                <p class="pageaboutdoctor-advantage__text-bottom">Работаю на устойчивый эффект</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- До и После -->
        <section class="main-result">
            <div class="container">
                <h2 class="main-result__title">До и После</h2>
                <section class="main-result__wrap">
                    <div class="tab-swiper-lev1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                Косметология
                            </div>
                            <div class=" swiper-slide">
                                Генетика
                            </div>
                            <div class=" swiper-slide">
                                Трихология
                            </div>
                            <div class=" swiper-slide">
                                Иммунодиетология
                            </div>
                            <div class=" swiper-slide">
                                Anti-age
                            </div>
                            <div class=" swiper-slide">
                                Чекап организма
                            </div>
                            <div class=" swiper-slide">
                                Микробиом кишечника
                            </div>
                            <div class=" swiper-slide">
                                Снижение веса
                            </div>
                        </div>
                        <div class="main-result__icon-wrap">
                            <div class="main-result__left left">
                                <img src="/assets/images/chervon__with-border.svg" alt="" class="" />
                            </div>
                            <div class="main-result__right right">
                                <img src="/assets/images/chervon__with-border.svg" alt="" class="" />
                            </div>
                        </div>
                    </div>
                </section>

                <section class="main-result__wrap">
                    <div class="list-swiper-tab-lv2 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            Лазерная косметология
                                        </div>
                                        <div class="swiper-slide">
                                            Инъекционные процедуры
                                        </div>
                                        <div class="swiper-slide">
                                            Лечение Акне
                                        </div>
                                        <div class="swiper-slide">
                                            Уходовые процедуры
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            Генетические панели
                                        </div>
                                        <div class="swiper-slide">
                                            Генетический таргет
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            Лазерное лечение «Hair Restart»
                                        </div>
                                        <div class="swiper-slide">
                                            Комплексная диагностика выпадения волос
                                        </div>
                                        <div class="swiper-slide">
                                            Мезотерапия / Плазмотерапия (PRP)волос
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            «ImmunoHealth™» анализ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            Комплексная диагностика
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            Сдача анализов крови
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            Комплексная диагностика
                                        </div>
                                        <div class="swiper-slide">
                                            Комплексная диагностика
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tab-swiper-lev2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            Body Slim
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="list-swiper-img-lev3">
                    <div class="img-swiper-lev3 swiper-no-swiping active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-swiper-lev3 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-swiper-lev3 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-swiper-lev3 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-swiper-lev3 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-swiper-lev3 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-swiper-lev3 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-swiper-lev3 swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="main-result__wrap-slide">
                                    <section class="main-result-slide">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-2.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                            <li class="swiper-slide">
                                                <img src="/assets/images/result__img-1.webp" alt=""
                                                    class="main-result-slide__img" />
                                            </li>
                                        </ul>
                                        <div class="main-result-slide__controls swiper-pagination">
                                        </div>
                                        <div class="icon__wrap">
                                            <div class="icon__left">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                            <div class="icon__right">
                                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <a class="main-result__btn btn btn-blue" data-modal-onclick="form-modal">
                    Записаться
                    <div class="wrap__chervon">
                        <img src="/assets/images/chervon--no-bg.svg" alt="" />
                    </div>
                </a>

                <section class="modal form-modal" id="form-modal">
                    <div class="modal-content">
                        <div class="modal-close modal-close-js">
                            <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                        </div>
                        <section class="main-form">
                            <form action="" class="appoint__form">
                                <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name"
                                    minlength="1" required />
                                <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                                    pattern="[+7]+[0-9]{11}" required />
                                <div class="custom-select">
                                    <select name="" id="" required autocomplete="off">
                                        <option value="0">Выберите услугу</option>
                                        <option value="1">Косметология</option>
                                        <option value="2">Генетика</option>
                                        <option value="3">Трихология</option>
                                        <option value="4">Иммунодиетология</option>
                                        <option value="5">Anti-Age</option>
                                        <option value="6">
                                            Чекап организма
                                        </option>
                                        <option value="7">Микробиом кишечника</option>
                                        <option value="8">Снижение веса</option>
                                    </select>
                                </div>
                                <button type="submit" class="appoint__btn btn btn-white">
                                    Записаться
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                    </div>
                                </button>
                                <label class="appoint__policy">
                                    <input type="checkbox" class="appoint__policy-checkbox-real" required />
                                    <div class="appoint__policy-checkbox-fake"></div>
                                    <div class="appoint__policy-text">
                                        Я согласен на обработку
                                        <a href="#!" class="appoint__policy-data">
                                            персональных данных
                                        </a>
                                    </div>
                                </label>

                            </form>
                        </section>
                    </div>
                </section>
            </div>
        </section>

        <!-- Certificates -->
        <section class="main-certf">
            <div class="container">
                <div class="main-certf__header pagerow">
                    <h2 class="main-certf__title">Сертификаты врача</h2>
                    <a href="/about_doctor/certificates" class="main-certf__btn btn btn-blue">Смотреть все</a>
                </div>
                <div class="outer-swiper">
                    <section class="main-certf-slide pageaboutdoctor-certf__swiper">
                        <ul class="main-certf-slide__list swiper-wrapper">
                            <li class="main-certf-slide__item swiper-slide">
                                <img src="/assets/images/certf__img.webp" alt="" class="main-certf-slide__img" />
                            </li>
                            <li class="main-certf-slide__item swiper-slide">
                                <img src="/assets/images/certf__img.webp" alt="" class="main-certf-slide__img" />
                            </li>
                            <li class="main-certf-slide__item swiper-slide">
                                <img src="/assets/images/certf__img.webp" alt="" class="main-certf-slide__img" />
                            </li>
                            <li class="main-certf-slide__item swiper-slide">
                                <img src="/assets/images/certf__img.webp" alt="" class="main-certf-slide__img" />
                            </li>
                            <li class="main-certf-slide__item swiper-slide">
                                <img src="/assets/images/certf__img.webp" alt="" class="main-certf-slide__img" />
                            </li>
                            <li class="main-certf-slide__item swiper-slide">
                                <img src="/assets/images/certf__img.webp" alt="" class="main-certf-slide__img" />
                            </li>
                        </ul>
                        <div class="certf-pagination swiper-pagination">
                        </div>
                    </section>
                    <div class="icon__wrap">
                        <div class="icon__left" id="certf-icon__left">
                            <img src="/assets/images/chervon--blue_no-bg.svg" />
                        </div>
                        <div class="icon__right" id="certf-icon__right">
                            <img src="/assets/images/chervon--blue_no-bg.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Запись -->
        <section class="appoint">
            <div class="container" style="position: relative">
                <h2 class="appoint__title">Готовы к переменам?</h2>
                <p class="appoint__subtitle">
                    Оставьте заявку, мы Вам перезвоним
                </p>
                <form action="" class="appoint__form">
                    <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name" minlength="1"
                        required />
                    <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                        pattern="[+7]+[0-9]{11}" required />
                    <div class="custom-select">
                        <select name="" id="" required autocomplete="off">
                            <option value="0">Выберите услугу</option>
                            <option value="1">Косметология</option>
                            <option value="2">Генетика</option>
                            <option value="3">Трихология</option>
                            <option value="4">Иммунодиетология</option>
                            <option value="5">Anti-Age</option>
                            <option value="6">
                                Чекап организма
                            </option>
                            <option value="7">Микробиом кишечника</option>
                            <option value="8">Снижение веса</option>
                        </select>
                    </div>

                    <button type="submit" class="appoint__btn btn btn-white">
                        Записаться
                        <div class="wrap__chervon">
                            <img src="/assets/images/chervon--no-bg.svg" alt="" />
                        </div>
                    </button>
                    <label class="appoint__policy">
                        <input type="checkbox" class="appoint__policy-checkbox-real" required />
                        <div class="appoint__policy-checkbox-fake"></div>
                        <div class="appoint__policy-text">
                            Я согласен на обработку
                            <a href="#!" class="appoint__policy-data">
                                персональных данных
                            </a>
                        </div>
                    </label>
                </form>
                <img src="/assets/images/form__decor--mobile.webp?1" alt="" class="appoint__decor--mobile"
                    style="opacity: 0.9;" />
            </div>
            <img src="/assets/images/form__decor--desktop.webp" alt="" class="appoint__decor--desktop" />
        </section>

        <!--Popular Services -->
        <section class="pageaboutdoctor-services">
            <div class="container">

                <h2 class="pageaboutdoctor-services__title">Популярные услуги</h2>
                <p class="pageaboutdoctor-services__subtitle">
                    Актуальную информацию по ценам уточняйте у администраторов. Благодарим за понимание!
                </p>
                <div class="pageaboutdoctor__swiper-mobile">
                    <ul class="swiper-wrapper pagecosmetology-main__price-list pageaboutdoctor-services__list">
                        <li class="swiper-slide pagecosmetology-main__price-item pageaboutdoctor-services__item">
                            <div class="title">Инъекционные процедуры</div>
                            <div class="hover--hidden">
                                <div class="hover__price">от 2 350 ₽</div>
                                <div class="hover__more">
                                    <img src="/assets/images/chervon--blue_no-bg.svg" alt="">
                                </div>
                            </div>
                            <div class="expand">
                                <div>
                                    <ul class="list">
                                        <li class="item">
                                            <p class="item__cate">PRP-терапия RegenLab</p>
                                            <p class="item__price">2&nbsp;350&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Биоревитализация / Мезотерапия</p>
                                            <p class="item__price">3&nbsp;350&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Ботулинотерапия</p>
                                            <p class="item__price">5&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Контурная пластика</p>
                                            <p class="item__price">7&nbsp;250&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Плазмотерапия</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                    </ul>
                                    <a class="pagecosmetology-main__btn btn btn-white"
                                        data-modal-onclick="about-doctor-modal-2">
                                        Записаться
                                        <div class="wrap__chervon">
                                            <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide pagecosmetology-main__price-item pageaboutdoctor-services__item">
                            <div class="title">Лазерная косметология</div>
                            <div class="hover--hidden">
                                <div class="hover__price">от 2 000 ₽</div>
                                <div class="hover__more">
                                    <img src="/assets/images/chervon--blue_no-bg.svg" alt="">
                                </div>
                            </div>
                            <div class="expand">
                                <div>
                                    <ul class="list">
                                        <li class="item">
                                            <p class="item__cate">Smooth-омоложение</p>
                                            <p class="item__price">2&nbsp;350&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Живая плазма</p>
                                            <p class="item__price">3&nbsp;350&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерная терапия при лечении акне</p>
                                            <p class="item__price">5&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерная шлифовка</p>
                                            <p class="item__price">7&nbsp;250&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерная эпиляция</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">PRP-терапия RegenLab</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерное 3D-омоложение</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерное 5D-омоложение</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерное лечение новообразований</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерное омоложение Fotona 4D</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерное омоложение губ</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерное удаление сосудов</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Лазерный пилинг</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Родиться заново</p>
                                            <p class="item__price">10&nbsp;000&nbsp;₽</p>
                                        </li>
                                    </ul>
                                    <a class="pagecosmetology-main__btn btn btn-white"
                                        data-modal-onclick="about-doctor-modal-3">
                                        Записаться
                                        <div class="wrap__chervon">
                                            <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide pagecosmetology-main__price-item pageaboutdoctor-services__item">
                            <div class="title">Лечение акне</div>
                            <div class="hover--hidden">
                                <div class="hover__price">от 1 700 ₽</div>
                                <div class="hover__more">
                                    <img src="/assets/images/chervon--blue_no-bg.svg" alt="">
                                </div>
                            </div>
                            <div class="expand">
                                <div>
                                    <ul class="list">
                                        <li class="item">
                                            <p class="item__cate">Индивидуальное составление программы лечения</p>
                                            <p class="item__price">2&nbsp;350&nbsp;₽</p>
                                        </li>
                                    </ul>
                                    <a class="pagecosmetology-main__btn btn btn-white"
                                        data-modal-onclick="about-doctor-modal-4">
                                        Записаться
                                        <div class="wrap__chervon">
                                            <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide pagecosmetology-main__price-item pageaboutdoctor-services__item">
                            <div class="title">Уходовые процедуры</div>
                            <div class="hover--hidden">
                                <div class="hover__price">от 1 700 ₽</div>
                                <div class="hover__more">
                                    <img src="/assets/images/chervon--blue_no-bg.svg" alt="">
                                </div>
                            </div>
                            <div class="expand">
                                <div>
                                    <ul class="list">
                                        <li class="item">
                                            <p class="item__cate">Пилинги</p>
                                            <p class="item__price">2&nbsp;350&nbsp;₽</p>
                                        </li>
                                        <li class="item">
                                            <p class="item__cate">Чистка лица</p>
                                            <p class="item__price">3&nbsp;350&nbsp;₽</p>
                                        </li>
                                    </ul>
                                    <a class="pagecosmetology-main__btn btn btn-white"
                                        data-modal-onclick="about-doctor-modal-5">
                                        Записаться
                                        <div class="wrap__chervon">
                                            <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Get Review Section from Main Page -->
        <section class="main-review">
            <div class="container">
                <div class="main-review__header pagerow">
                    <h2 class="main-review__title">Отзывы</h2>
                    <a href="#!" class="main-review__btn btn btn-blue">Смотреть все</a>
                </div>
                <section class="main-review-slide pageaboutdoctor-review__swiper">
                    <ul class="main-review-slide__list swiper-wrapper">
                        <li class="main-review-slide__col swiper-slide">
                            <div class="main-review-slide__item">
                                <div class="main-review-slide__item-header">
                                    <img src="/assets/images/review__img-1.svg" alt=""
                                        class="main-review-slide__item-ava" />
                                    <div class="main-review-slide__item-info">
                                        <p class="main-review-slide__item-name">
                                            Мария
                                        </p>
                                        <p class="main-review-slide__item-day">
                                            19.05.2024
                                        </p>
                                        <div class="main-review-slide__item-rate">
                                            <img src="/assets/images/review__icon.svg" alt=""
                                                class="main-review-slide__item-rate-star" />
                                            <p class="main-review-slide__item-rate-point">
                                                5.0
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-review-slide__item-body">
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                    Спасибо огромное, Ольга. Я очень
                                    довольна, буду рекомендовать Вас
                                    всем своим подругам.
                                </div>
                                <img src="/assets/images/chervon__with-border.svg" alt=""
                                    class="main-review-slide__item-icon-down" />
                            </div>
                        </li>
                        <li class="main-review-slide__col swiper-slide">
                            <div class="main-review-slide__item">
                                <div class="main-review-slide__item-header">
                                    <img src="/assets/images/review__img-1.svg" alt=""
                                        class="main-review-slide__item-ava" />
                                    <div class="main-review-slide__item-info">
                                        <p class="main-review-slide__item-name">
                                            Мария
                                        </p>
                                        <p class="main-review-slide__item-day">
                                            19.05.2024
                                        </p>
                                        <div class="main-review-slide__item-rate">
                                            <img src="/assets/images/review__icon.svg" alt=""
                                                class="main-review-slide__item-rate-star" />
                                            <p class="main-review-slide__item-rate-point">
                                                5.0
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-review-slide__item-body">
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                    Спасибо огромное, Ольга. Я очень
                                    довольна, буду рекомендовать Вас
                                    всем своим подругам.<br />
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                    Спасибо огромное, Ольга. Я очень
                                    довольна, буду рекомендовать Вас
                                    всем своим подругам. <br />
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                    Спасибо огромное, Ольга. Я очень
                                    довольна, буду рекомендовать Вас
                                    всем своим подругам.
                                </div>
                                <img src="/assets/images/chervon__with-border.svg" alt=""
                                    class="main-review-slide__item-icon-down" />
                            </div>
                        </li>
                        <li class="main-review-slide__col swiper-slide">
                            <div class="main-review-slide__item">
                                <div class="main-review-slide__item-header">
                                    <img src="/assets/images/review__img-1.svg" alt=""
                                        class="main-review-slide__item-ava" />
                                    <div class="main-review-slide__item-info">
                                        <p class="main-review-slide__item-name">
                                            Мария
                                        </p>
                                        <p class="main-review-slide__item-day">
                                            19.05.2024
                                        </p>
                                        <div class="main-review-slide__item-rate">
                                            <img src="/assets/images/review__icon.svg" alt=""
                                                class="main-review-slide__item-rate-star" />
                                            <p class="main-review-slide__item-rate-point">
                                                5.0
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-review-slide__item-body">
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                    Спасибо огромное, Ольга. Я очень
                                    довольна, буду рекомендовать Вас
                                    всем своим подругам. <br />
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                    Спасибо огромное, Ольга. Я очень
                                    довольна, буду рекомендовать Вас.
                                </div>
                                <img src="/assets/images/chervon__with-border.svg" alt=""
                                    class="main-review-slide__item-icon-down" />
                            </div>
                        </li>
                        <li class="main-review-slide__col swiper-slide">
                            <div class="main-review-slide__item">
                                <div class="main-review-slide__item-header">
                                    <img src="/assets/images/review__img-1.svg" alt=""
                                        class="main-review-slide__item-ava" />
                                    <div class="main-review-slide__item-info">
                                        <p class="main-review-slide__item-name">
                                            Мария
                                        </p>
                                        <p class="main-review-slide__item-day">
                                            19.05.2024
                                        </p>
                                        <div class="main-review-slide__item-rate">
                                            <img src="/assets/images/review__icon.svg" alt=""
                                                class="main-review-slide__item-rate-star" />
                                            <p class="main-review-slide__item-rate-point">
                                                5.0
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-review-slide__item-body">
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                </div>
                                <img src="/assets/images/chervon__with-border.svg" alt=""
                                    class="main-review-slide__item-icon-down" />
                            </div>
                        </li>
                        <li class="main-review-slide__col swiper-slide">
                            <div class="main-review-slide__item">
                                <div class="main-review-slide__item-header">
                                    <img src="/assets/images/review__img-1.svg" alt=""
                                        class="main-review-slide__item-ava" />
                                    <div class="main-review-slide__item-info">
                                        <p class="main-review-slide__item-name">
                                            Мария
                                        </p>
                                        <p class="main-review-slide__item-day">
                                            19.05.2024
                                        </p>
                                        <div class="main-review-slide__item-rate">
                                            <img src="/assets/images/review__icon.svg" alt=""
                                                class="main-review-slide__item-rate-star" />
                                            <p class="main-review-slide__item-rate-point">
                                                5.0
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-review-slide__item-body">
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                </div>
                                <img src="/assets/images/chervon__with-border.svg" alt=""
                                    class="main-review-slide__item-icon-down" />
                            </div>
                        </li>
                        <li class="main-review-slide__col swiper-slide">
                            <div class="main-review-slide__item">
                                <div class="main-review-slide__item-header">
                                    <img src="/assets/images/review__img-1.svg" alt=""
                                        class="main-review-slide__item-ava" />
                                    <div class="main-review-slide__item-info">
                                        <p class="main-review-slide__item-name">
                                            Мария
                                        </p>
                                        <p class="main-review-slide__item-day">
                                            19.05.2024
                                        </p>
                                        <div class="main-review-slide__item-rate">
                                            <img src="/assets/images/review__icon.svg" alt=""
                                                class="main-review-slide__item-rate-star" />
                                            <p class="main-review-slide__item-rate-point">
                                                5.0
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-review-slide__item-body">
                                    Даже не ожидала, что получу нужный
                                    эффект всего за две процедуры.
                                </div>
                                <img src="/assets/images/chervon__with-border.svg" alt=""
                                    class="main-review-slide__item-icon-down" />
                            </div>
                        </li>
                    </ul>
                    <div class="review-pagination swiper-pagination">
                    </div>
                </section>
                <div class="icon__wrap">
                    <div class="icon__left" id="review-icon__left">
                        <img src="/assets/images/chervon--blue_no-bg.svg" />
                    </div>
                    <div class="icon__right" id="review-icon__right">
                        <img src="/assets/images/chervon--blue_no-bg.svg" />
                    </div>
                </div>

                <picture class="main-review__bg">
                    <source media="(min-width: 1200px)" srcset="/assets/images/review__img-bg-2.webp" />
                    <img src="/assets/images/review__img-bg-1.webp" alt="" />
                </picture>
            </div>
        </section>

        <!-- Modal List -->
        <section class="modal-list">
            <section class="modal form-modal" id="about-doctor-modal-1">
                <div class="modal-content">
                    <div class="modal-close modal-close-js">
                        <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                    </div>
                    <section class="main-form">
                        <form action="" class="appoint__form">
                            <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name" minlength="1"
                                required />
                            <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                                pattern="[+7]+[0-9]{11}" required />
                            <div class="custom-select">
                                <select name="" id="" required autocomplete="off">
                                    <option value="0">Выберите услугу</option>
                                    <option value="1">Косметология</option>
                                    <option value="2">Генетика</option>
                                    <option value="3">Трихология</option>
                                    <option value="4">Иммунодиетология</option>
                                    <option value="5">Anti-Age</option>
                                    <option value="6">
                                        Чекап организма
                                    </option>
                                    <option value="7">Микробиом кишечника</option>
                                    <option value="8">Снижение веса</option>
                                </select>
                            </div>
                            <button type="submit" class="appoint__btn btn btn-white">
                                Записаться
                                <div class="wrap__chervon">
                                    <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                </div>
                            </button>
                            <label class="appoint__policy">
                                <input type="checkbox" class="appoint__policy-checkbox-real" required />
                                <div class="appoint__policy-checkbox-fake"></div>
                                <div class="appoint__policy-text">
                                    Я согласен на обработку
                                    <a href="#!" class="appoint__policy-data">
                                        персональных данных
                                    </a>
                                </div>
                            </label>

                        </form>
                    </section>
                </div>
            </section>
            <section class="modal form-modal" id="about-doctor-modal-2">
                <div class="modal-content">
                    <div class="modal-close modal-close-js">
                        <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                    </div>
                    <section class="main-form">
                        <form action="" class="appoint__form">
                            <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name" minlength="1"
                                required />
                            <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                                pattern="[+7]+[0-9]{11}" required />
                            <div class="custom-select">
                                <select name="" id="" required autocomplete="off">
                                    <option value="0">Выберите услугу</option>
                                    <option value="1">PRP-терапия RegenLab</option>
                                    <option value="2">Биоревитализация / Мезотерапия
                                    </option>
                                    <option value="3">Ботулинотерапия</option>
                                    <option value="4">Контурная пластика</option>
                                    <option value="5">Плазмотерапия</option>
                                </select>
                            </div>
                            <button type="submit" class="appoint__btn btn btn-white">
                                Записаться
                                <div class="wrap__chervon">
                                    <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                </div>
                            </button>
                            <label class="appoint__policy">
                                <input type="checkbox" class="appoint__policy-checkbox-real" required />
                                <div class="appoint__policy-checkbox-fake"></div>
                                <div class="appoint__policy-text">
                                    Я согласен на обработку
                                    <a href="#!" class="appoint__policy-data">
                                        персональных данных
                                    </a>
                                </div>
                            </label>

                        </form>
                    </section>
                </div>
            </section>

            <section class="modal form-modal" id="about-doctor-modal-3">
                <div class="modal-content">
                    <div class="modal-close modal-close-js">
                        <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                    </div>
                    <section class="main-form">
                        <form action="" class="appoint__form">
                            <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name" minlength="1"
                                required />
                            <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                                pattern="[+7]+[0-9]{11}" required />
                            <div class="custom-select">
                                <select name="" id="" required autocomplete="off">
                                    <option value="0">Выберите услугу</option>
                                    <option value="1">Smooth-омоложение</option>
                                    <option value="2">Живая плазма</option>
                                    <option value="3">Лазерная терапия при лечении акне
                                    </option>
                                    <option value="4">Лазерная эпиляция</option>
                                    <option value="5">PRP-терапия RegenLab</option>
                                    <option value="6">Лазерное 3D-омоложение</option>
                                    <option value="7">Лазерное лечение новообразований
                                    </option>
                                    <option value="8">Лазерное омоложение Fotona 4D
                                    </option>
                                    <option value="9">Лазерное омоложение губ</option>
                                    <option value="10">Родиться заново</option>

                                </select>
                            </div>
                            <button type="submit" class="appoint__btn btn btn-white">
                                Записаться
                                <div class="wrap__chervon">
                                    <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                </div>
                            </button>
                            <label class="appoint__policy">
                                <input type="checkbox" class="appoint__policy-checkbox-real" required />
                                <div class="appoint__policy-checkbox-fake"></div>
                                <div class="appoint__policy-text">
                                    Я согласен на обработку
                                    <a href="#!" class="appoint__policy-data">
                                        персональных данных
                                    </a>
                                </div>
                            </label>

                        </form>
                    </section>
                </div>
            </section>
            <section class="modal form-modal" id="about-doctor-modal-4">
                <div class="modal-content">
                    <div class="modal-close modal-close-js">
                        <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                    </div>
                    <section class="main-form">
                        <form action="" class="appoint__form">
                            <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name" minlength="1"
                                required />
                            <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                                pattern="[+7]+[0-9]{11}" required />
                            <div class="custom-select">
                                <select name="" id="" required autocomplete="off">
                                    <option value="0">Выберите услугу</option>
                                    <option value="1">Индивидуальное составление программы&nbsp;лечения</option>
                                </select>
                            </div>
                            <button type="submit" class="appoint__btn btn btn-white">
                                Записаться
                                <div class="wrap__chervon">
                                    <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                </div>
                            </button>
                            <label class="appoint__policy">
                                <input type="checkbox" class="appoint__policy-checkbox-real" required />
                                <div class="appoint__policy-checkbox-fake"></div>
                                <div class="appoint__policy-text">
                                    Я согласен на обработку
                                    <a href="#!" class="appoint__policy-data">
                                        персональных данных
                                    </a>
                                </div>
                            </label>

                        </form>
                    </section>
                </div>
            </section>
            <section class="modal form-modal" id="about-doctor-modal-5">
                <div class="modal-content">
                    <div class="modal-close modal-close-js">
                        <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                    </div>
                    <section class="main-form">
                        <form action="" class="appoint__form">
                            <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name" minlength="1"
                                required />
                            <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                                pattern="[+7]+[0-9]{11}" required />
                            <div class="custom-select">
                                <select name="" id="" required autocomplete="off">
                                    <option value="0">Выберите услугу</option>
                                    <option value="1">Пилинги</option>
                                    <option value="2">Чистка лица</option>

                                </select>
                            </div>
                            <button type="submit" class="appoint__btn btn btn-white">
                                Записаться
                                <div class="wrap__chervon">
                                    <img src="/assets/images/chervon--no-bg.svg" alt="" />
                                </div>
                            </button>
                            <label class="appoint__policy">
                                <input type="checkbox" class="appoint__policy-checkbox-real" required />
                                <div class="appoint__policy-checkbox-fake"></div>
                                <div class="appoint__policy-text">
                                    Я согласен на обработку
                                    <a href="#!" class="appoint__policy-data">
                                        персональных данных
                                    </a>
                                </div>
                            </label>

                        </form>
                    </section>
                </div>
            </section>
        </section>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.html'; ?>
    <script type="module" src="/assets/js/index.js"></script>
</body>

</html>