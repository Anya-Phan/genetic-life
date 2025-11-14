<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Как микробиом кишечика влияет на состояние кожи?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="/assets/css/main.css?2422102350" />

</head>

<body>
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
                    <a href="/blog" class="breadcrumbs__page">Блог</a>
                    <img src="/assets/images/breadcrumbs__icon.svg" alt="" class="breadcrumbs__arrow">
                    <a href="/blog/?tabindex=2" class="breadcrumbs__page">Новости</a>
                    <img src="/assets/images/breadcrumbs__icon.svg" alt="" class="breadcrumbs__arrow">
                    <a href="" class="breadcrumbs__page">Клиника расширяет спектр услуг</a>
                </div>
            </div>
        </section>
        <section class="pagearticle-hero">
            <div class="container">
                <div class="pagearticle-hero__img-profile">
                    <div class="pagearticle-hero__img">
                        <img src="/assets/images/img-article-05.webp" alt="">
                        <div class="overlay"></div>
                    </div>
                    <h1 class="pagearticle-hero__main-tite">Клиника расширяет спектр услу</h1>
                </div>
                <p class="pagearticle-hero__date">Опубликовано 10.10.2024</p>
            </div>
        </section>
        <section class="pagearticle-main">
            <div class="container">
                <div class="pagerow pagearticle-main-row">
                    <section class="pagearticle-main__text">
                        <h2 class="pagearticle-main__title">Новая процедура - Индивидуальная программа по восстановлению
                            микробиома кишечника</h2>
                        <div class="pagearticle-main__paragraph">
                            <p>Мы рады представить новую процедуру, направленную на улучшение общего здоровья
                                и состояния кожи. Программа включает
                                подробный анализ вашего микробиома, составление индивидуальных рекомендаций по питанию
                                и подбор пробиотиков.
                                Восстановление микрофлоры помогает не только улучшить работу пищеварительной системы,
                                но и снизить воспаления, устранить
                                акне и вернуть коже здоровый вид. Благодаря интеграции современных методик и экспертному
                                подходу, мы создаём
                                персонализированные решения, которые работают изнутри для достижения внешнего
                                результата.</p>
                        </div>

                        <a href="/blog/?tabindex=2" class="btn btn-blue pagearticle-main__btn">
                            К другим новостям
                        </a>
                    </section>
                    <section class="pagearticle-main__form">
                        <form action="" class="appoint__form">
                            <p class="appoint__form-title">Записаться на прием</p>
                            <p class="appoint__form-subtitle">Оставьте заявку, и мы Вам перезвоним</p>
                            <input type="text" placeholder="*Ваше имя" class="appoint__field" name="name" minlength="1"
                                required />
                            <input type="text" placeholder="*Телефон" class="appoint__field" name="phone"
                                pattern="[+7]+[0-9]{11}" required />
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
            </div>
        </section>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.html'; ?>
    <script type="module" src="/assets/js/index.js"></script>
</body>

</html>