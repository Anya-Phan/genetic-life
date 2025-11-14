<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Отзывы</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="/assets/css/main.css" />

</head>

<body">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/header.html'; ?>
    <!-- Side bar Moble -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.html'; ?>

    <!-- Main -->
    <main>
        <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__row pagerow">
                    <a href="/" class="breadcrumbs__page">Главная</a>
                    <img src="/assets/images/breadcrumbs__icon.svg" alt="" class="breadcrumbs__arrow">
                    <a href="/about_doctor" class="breadcrumbs__page">О Враче</a>
                    <img src="/assets/images/breadcrumbs__icon.svg" alt="" class="breadcrumbs__arrow">
                    <a href="" class="breadcrumbs__page">Отзывы</a>
                </div>
            </div>
        </section>

        <section class="pagereviews-hero">
            <div class="container">
                <h1 class="pagereviews-hero__title">Отзывы</h1>
                <p class="pagereviews-hero__subtitle">Мнения пациентов и их впечатления от работы с Ольгой, для вашей
                    уверенности в ее профессионализме</p>
            </div>
        </section>

        <section class="pagereviews-reviews">
            <div class="container">
                <div class="pagereviews-reviews-pick">
                    <div class="pagereviews-reviews-filter">
                        <button class="pagereviews-reviews-filter__trigger">
                            <img src="/assets/images/filter-icon.svg" alt="">
                        </button>
                        <div class="pagereviews-reviews-filter__modal">
                            <div class="filter-modal modal" id="filter-modal">
                                <div class="modal-content">
                                    <div class="modal-close filter-modal__close">
                                        <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                                    </div>
                                    <div class="filter-modal__title">Показывать отзывы про</div>
                                    <div class="filter-swiper-thumb" id="filter-swiper-thumb--mobi">
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Все услуги</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Косметология</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Генетика</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Иммунодиетология</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Трихология</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Anti-age</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Чекап организма</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Микробиом кишечника</div>
                                            </li>
                                            <li class="swiper-slide">
                                                <div class="filter-modal__fake-box">Снижение веса</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-modal__submit-btn btn btn-blue">Применить</div>
                                </div>
                            </div>
                        </div>
                        <div class="pagereviews-reviews-filter__desktop">
                            <div class="filter-desk">
                                <div class="filter-swiper-thumb" id="filter-swiper-thumb--desk">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Все услуги</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Косметология</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Генетика</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Иммунодиетология</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Трихология</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Anti-age</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Чекап организма</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Микробиом кишечника</div>
                                        </li>
                                        <li class="swiper-slide">
                                            <div class="filter-desk__fake-box">Снижение веса</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="pagereviews-reviews-swiper swiper-no-swiping">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="1">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-02.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="2">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-02.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="3">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-03.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="4">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="5">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-02.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="6">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-02.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="7">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-03.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="8">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-03.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-02.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="1">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="2">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-02.webp" alt="">
                                    </div>
                                </li>
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="3">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-03.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-reviews-sort">
                                <img class="pagereviews-reviews-sort__icon" src="/assets/images/sort-icon.svg">
                                <div class="pagereviews-reviews-sort__custom">
                                    <div class="custom-select">
                                        <select name="" id="" required autocomplete="off">
                                            <option value="0">По умолчанию</option>
                                            <option value="1">По умолчанию</option>
                                            <option value="2">Сначала новые</option>
                                            <option value="3">Сначала старые</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagereviews-reviews__list row row-cols-1 row-cols-md-2 g-2 g-lg-3">
                                <li class="col">
                                    <div class="pagereviews-reviews__item" data-index-slide="0">
                                        <img class="pagereviews-reviews__sc-shot"
                                            src="/assets/images/review-screen-shot-01.webp" alt="">
                                    </div>
                                </li>
                            </ul>
                            <div class="expand-btn--js">
                                <a class="pagereviews-more-btn btn btn-blue">
                                    <div class="wrap__chervon">
                                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="reviews-fake-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Запись -->
        <section class="appoint">
            <div class="container" style="position: relative">
                <h2 class="appoint__title">
                    Начните и Вы свой путь к&nbsp;красоте и здоровью!
                </h2>
                <p class="appoint__subtitle">
                    Оставьте заявку, и мы всё расскажем
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

                    <button type="submit" class="appoint__btn btn btn-white" data-modal-onclick="congrat-modal">
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
                <img src="/assets/images/form__decor--mobile.webp?11" alt="" class="appoint__decor--mobile"
                    style="opacity: 0.9;" />
            </div>
            <img src="/assets/images/form__decor--desktop.webp" alt="" class="appoint__decor--desktop" />
        </section>

        <!-- Услуги From Косметология -->
        <section class="pagecosmetology-service">
            <div class="container">
                <section class="pagecosmetology-service__header pagerow">
                    <h2 class="pagecosmetology-service__title">Услуги</h2>
                    <a href="/services" class="pagecosmetology-service__btn btn btn-blue">Все услуги</a>
                </section>

            </div>
            <section class="pagecosmetology-service__body">
                <ul class="pagecosmetology-service__list">
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Косметология</p>
                        <img src="/assets/images/service-decor-1.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Генетика</p>
                        <img src="/assets/images/service-decor-2.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Трихология</p>
                        <img src="/assets/images/service-decor-3.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Иммунодиетология</p>
                        <img src="/assets/images/service-decor-4.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Anti-Age</p>
                        <img src="/assets/images/service-decor-5.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Чекап организма</p>
                        <img src="/assets/images/service-decor-6.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Микробиом кишечника</p>
                        <img src="/assets/images/service-decor-8.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                    <li class="pagecosmetology-service__item">
                        <p class="pagecosmetology-service__item-title">Снижение веса</p>
                        <img src="/assets/images/service-decor-7.webp" class="pagecosmetology-service__item-bg" />
                        <a href="" class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
                    </li>
                </ul>
            </section>
        </section>

        <section class="modal pagereviews-modal" id="review-list-modal">
            <div class="modal-content pagereviews-modal__modal-content">
                <div class="modal-close">
                    <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                </div>

                <div class="pagereviews-modal__swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="pagereviews-modal__card">
                                <img class="pagereviews-modal__sc-shot" src="/assets/images/review-screen-shot-01.webp"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-modal__card">
                                <img class="pagereviews-modal__sc-shot" src="/assets/images/review-screen-shot-02.webp"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-modal__card">
                                <img class="pagereviews-modal__sc-shot" src="/assets/images/review-screen-shot-02.webp"
                                    alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pagereviews-modal__card">
                                <img class="pagereviews-modal__sc-shot" src="/assets/images/review-screen-shot-03.webp"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="icon__wrap">
                <div class="icon__left" id="pagereviews-modal__left">
                    <img src="/assets/images/chervon--blue_no-bg.svg" />
                </div>
                <div class="icon__right" id="pagereviews-modal__right">
                    <img src="/assets/images/chervon--blue_no-bg.svg" />
                </div>
            </div>
        </section>
        <section class="pagecongrat" id="congrat-modal">
            <div class="congrat-modal-content">
                <div class="container">

                    <div class="pagecongrat-wrap">
                        <div class="modal-close modal-close-js">
                            <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                        </div>
                        <h2 class="pagecongrat__title">Вы на пути к преображению!</h2>
                        <p class="pagecongrat__subtitle">Ваша запись успешна. <br>
                            Мы свяжемся с вами в ближайшее время для уточнения деталей. <br>
                            Благодарим вас за выбор Genetic life</p>
                        <a href="/" class="pagecongrat__btn btn btn-blue">
                            На главную
                            <div class="wrap__chervon">
                                <img src="/assets/images/chervon--no-bg.svg" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.html'; ?>
    <script type="module" src="/assets/js/index.js"></script>
    </body>

</html>