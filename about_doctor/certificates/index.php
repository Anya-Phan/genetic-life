<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сертификаты врача</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="/assets/css/main.css?2504041200" rel="stylesheet">
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
                    <img src="/assets/images/breadcrumbs__icon.svg" alt="" class="breadcrumbs__arrow">
                    <a href="/about_doctor/certificates" class="breadcrumbs__page">Сертификаты врача</a>
                </div>
            </div>
        </section>

        <!-- Hero -->
        <section class="pagecertificates-hero">
            <div class="container">
                <h1 class="pagecertificates-hero__title">Сертификаты врача</h1>
                <p class="pagecertificates-hero__main-subtitle">Непрерывное обучение — основа успешной практики,
                    позволяющая применять современные и безопасные методы для здоровья
                    и красоты кожи.</p>
                <div class="pagecertificates-hero__sub-subtitles">
                    <div class="pagecertificates-hero__sub-text">Профессиональный путь Ольги Шаго включает обучение
                        в ведущих учебных центрах, международные сертификаты и участие
                        в специализированных конференциях.</div>
                    <div class="pagecertificates-hero__sub-text">Такие программы помогают Ольге внедрять самые
                        актуальные подходы в эстетической медицине, что укрепляет доверие
                        пациентов и обеспечивает высокое качество услуг.</div>
                </div>
                <img class="pagecertificates-hero__abs-1" src="/assets/images/cert-hero__abs-1.webp" alt="">
                <img class="pagecertificates-hero__abs-2" src="/assets/images/cert-hero__abs-2.webp" alt="">
            </div>
        </section>

        <section class="pagecertificates-prize">
            <div class="container">
                <h2 class="pagecertificates-prize__title">Сертификаты врача</h2>
                <ul class="pagecertificates-prize__list row row-cols-1 row-cols-lg-3">
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="0">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-1.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">ANTI-AGE EXPERT</p>
                        </div>
                    </li>
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="1">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-2.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">Академия развития инновационных технологий</p>
                        </div>
                    </li>
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="2">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-3.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">Adverse Event Congress</p>
                        </div>
                    </li>
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="3">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-4.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">ACADEMY OF INTERNATIONAL INTERNSHIPS BY DR. LIYA
                                GAVASHELI</p>
                        </div>
                    </li>
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="4">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-5.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">ANTI-AGE EXPERT</p>
                        </div>
                    </li>
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="5">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-6.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">Академия развития инновационных технологий</p>
                        </div>
                    </li>
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="6">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-1.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">ANTI-AGE EXPERT</p>
                        </div>
                    </li>
                    <li class="col">
                        <div class="pagecertificates-prize__item" data-index-slide="7">
                            <div class="pagecertificates-prize__img">
                                <img src="/assets/images/prize__img-2.webp" alt="">
                            </div>
                            <p class="pagecertificates-prize__subtitle">Академия развития инновационных технологий</p>
                        </div>
                    </li>
                </ul>
                <a class="pagecertificates-prize__more-btn btn btn-blue">
                    Посмотреть все
                    <div class="wrap__chervon">
                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                    </div>
                </a>
            </div>
        </section>

        <!-- Запись -->
        <section class="appoint">
            <div class="container" style="position: relative">
                <h2 class="appoint__title">Оставить заявку</h2>
                <p class="appoint__subtitle">
                    Доверьте уход за собой профессионалу с многолетним опытом
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

        <!-- Услуги (from cosmetology) -->
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
                        <a href="/services/cosmetology"
                            class="pagecosmetology-service__item-btn btn btn-white">Перейти</a>
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

        <!-- Modal Section -->
        <section class="pagecertificates-modal">
            <section class="modal" id="prize-modal">
                <div class="modal-content">
                    <div class="modal-close">
                        <img class="modal-close-btn" src="/assets/images/close-icon--light.svg" alt="">
                    </div>
                    <section class="modal-slide-wrap">
                        <div class="pagecertificates-slide__main">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide pagecertificates-slide__main-swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-1.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">ANTI-AGE EXPERT</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-2.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">Академия развития инновационных
                                        технологий</p>
                                </div>
                                <div class="swiper-slide pagecertificates-slide__main-swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-3.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">Adverse Event Congress</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-4.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">ACADEMY OF INTERNATIONAL
                                        INTERNSHIPS BY DR. LIYA GAVASHELI</p>
                                </div>
                                <div class="swiper-slide pagecertificates-slide__main-swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-5.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">Hugel Expert's Leader's Forum</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-6.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">Professional Medical Group</p>
                                </div>
                                <div class="swiper-slide pagecertificates-slide__main-swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-1.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">ANTI-AGE EXPERT</p>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__main-img">
                                        <img src="/assets/images/prize__img-2.webp" alt="">
                                    </div>
                                    <p class="pagecertificates-slide__main-subtitle">ANTI-AGE EXPERT</p>
                                </div>
                            </div>
                        </div>
                        <div class="icon__wrap">
                            <div class="icon__left" id="certf-icon__left">
                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                            </div>
                            <div class="icon__right" id="certf-icon__right">
                                <img src="/assets/images/chervon--blue_no-bg.svg" />
                            </div>
                        </div>
                        <div class="pagecertificates-slide__thumb">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-1.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-2.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-3.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-4.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-5.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-6.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-1.webp" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="pagecertificates-slide__thumb-img">
                                        <img src="/assets/images/prize__img-2.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </section>
        </section>

    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.html'; ?>
    <script type="module" src="/assets/js/index.js"></script>
</body>

</html>