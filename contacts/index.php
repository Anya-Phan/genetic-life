<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
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
                    <a href="../main" class="breadcrumbs__page">Главная</a>
                    <img src="/assets/images/breadcrumbs__icon.svg" alt="" class="breadcrumbs__arrow">
                    <a href="#!" class="breadcrumbs__page">Контакты</a>
                </div>
            </div>
        </section>
        <!-- Get image from pagemain (Главный)-->
        <section class="pagecontacts-regis">
            <div class="container">
                <div class="pagecontacts-regis__row">
                    <div class="pagecontacts-regis__contact">
                        <h2 class="pagecontacts-regis__contact-title">
                            Ждём Вас по адресу
                        </h2>
                        <p class="pagecontacts-regis__contact-address">
                            г.&nbsp;Санкт-Петербург,
                            ул.&nbsp;Малая&nbsp;Монетная&nbsp;д.5
                        </p>
                        <div class="pagecontacts-regis__contact-list">
                            <div class="pagecontacts-regis__contact-item">
                                <img src="/assets/images/regis__icon-1.webp" alt=""
                                    class="pagecontacts-regis__contact-item-icon" />
                                <div class="pagecontacts-regis__contact-item-text-wrapper">
                                    <div class="pagecontacts-regis__contact-item-text-1">
                                        Телефон
                                    </div>
                                    <div class="pagecontacts-regis__contact-item-text-2">
                                        +7 (812) 509-12-02
                                    </div>
                                </div>
                            </div>
                            <div class="pagecontacts-regis__contact-item">
                                <img src="/assets/images/regis__icon-2.webp" alt=""
                                    class="pagecontacts-regis__contact-item-icon" />
                                <div class="pagecontacts-regis__contact-item-text-wrapper">
                                    <div class="pagecontacts-regis__contact-item-text-1">
                                        Время работы
                                    </div>
                                    <div class="pagecontacts-regis__contact-item-text-2">
                                        10:00–20:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagecontacts-regis__wrap-img">
                        <img src="/assets/images/regis__img.webp" alt="" class="pagecontacts-regis__img" />
                    </div>
                    <a class="pagecontacts-regis__btn btn btn-blue" data-modal-onclick="contacts-modal">
                        Записаться
                        <div class="wrap__chervon">
                            <img src="/assets/images/chervon--no-bg.svg" alt="" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="pagecontacts-map">
            <div id="map" class="map""></div>
            <script src=" https://api-maps.yandex.ru/2.1/?apikey=ec77542d-9d91-4f91-941a-c0c17bbf62cb&lang=ru_RU">
            </script>
                <script src="./js/map.js?2411071450"></script>
        </section>
        <!-- Get Images from Косметология -->
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
        <section class="modal-list">
            <section class="modal" id="contacts-modal">
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
        </section>

    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.html'; ?>
    <script type="module" src="/assets/js/index.js"></script>
</body>
</body>

</html>