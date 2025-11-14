import { checkList } from "./checkValidVar.js";

// До и после слайдер
const resultSwiper = new Swiper('.main-result-slide', {
    direction: 'horizontal',
    loop: false,
    speed: 400,
    spaceBetween: 30,
    noSwiping: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '.icon__right',
        prevEl: '.icon__left',
    },

    slidesPerView: 1,
    breakpoints: {
        980: {
            slidesPerView: 2,
            freeMode: false,
        }
    }
});

// Сертификаты слайдер
const certfSwiper = new Swiper('.pageaboutdoctor-certf__swiper', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 10,
    freeMode: true,
    slidesPerView: 'auto',

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '#certf-icon__right',
        prevEl: '#certf-icon__left',
    },

    breakpoints: {
        980: {
            slidesPerView: 2,
            spaceBetween: 30,
            freeMode: false,
        }
    }
});

// Отзывы слайдер
const reviewSwiper = new Swiper('.pageaboutdoctor-review__swiper', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 20,
    freeMode: true,
    slidesPerView: 'auto',

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '#review-icon__right',
        prevEl: '#review-icon__left',
    },

    breakpoints: {
        980: {
            slidesPerView: 3,
            freeMode: false,
        }
    }
});

const halfSwiper = new Swiper('.pageaboutdoctor__swiper-mobile', {
    direction: 'horizontal',
    loop: false,
    speed: 400,
    spaceBetween: 10,
    slidesPerView: 'auto',
    breakpoints: {
        980: {
            enabled: false,
        }
    }
});


// Херо Слайдер
{
    const mainHeroSwiper = new Swiper('.main-hero-swiper', {
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,
        freeMode: false,
        slidesPerView: 1,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
}



const certificateThumbSwiper = new Swiper('.pagecertificates-slide__thumb', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 10,
    slidesPerView: 'auto',
    watchOverflow: true,
    observer: true,
    observeParents: true,
    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: false,
    },
});



export const certificateMainSwiper = new Swiper('.pagecertificates-slide__main', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 30,
    thumbs: {
        swiper: certificateThumbSwiper
    },
    navigation: {
        nextEl: '#certf-icon__right',
        prevEl: '#certf-icon__left',
    },

    slidesPerView: 1,
    breakpoints: {
        980: {
            freeMode: false,
        }
    },
    watchOverflow: true,
    observer: true,
    observeParents: true,
    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: false,
    },
});


// До и после табов
{
    try {
        const tabSwiperLv2List = document.querySelectorAll('.tab-swiper-lev2');
        const imgSwiperLv3List = document.querySelectorAll('.img-swiper-lev3');
        if (checkList(tabSwiperLv2List) && checkList(imgSwiperLv3List)) {
            tabSwiperLv2List.forEach((item, index) => {
                item.classList.add('mark-tab-' + index);
                imgSwiperLv3List[index].classList.add('mark-img-' + index);

                let tabSwiperLv2 = new Swiper('.mark-tab-' + index, {
                    direction: 'horizontal',
                    loop: false,
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    noSwiping: false,
                    freeMode: true,
                    speed: 0,
                    centerInsufficientSlides: true
                });

                let imgSwiperLv3 = new Swiper('.mark-img-' + index, {
                    direction: 'horizontal',
                    loop: false,
                    slidesPerView: 1,
                    thumbs: {
                        swiper: tabSwiperLv2,
                    },
                    speed: 0,
                });
            })
        }

        const tabSwiperLv1 = new Swiper('.tab-swiper-lev1', {
            direction: 'horizontal',
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 10,
            freeMode: true,
            navigation: {
                nextEl: '.main-result__right',
                prevEl: '.main-result__left',
            },
            centerInsufficientSlides: true,
            speed: 0,

            breakpoints: {
                980: {
                    spaceBetween: 20,
                }
            }
        });

        const listSwiperTab = new Swiper('.list-swiper-tab-lv2', {
            direction: 'horizontal',
            loop: false,
            spaceBetween: 0,
            speed: 0,

            thumbs: {
                swiper: tabSwiperLv1,
            },
            on: {
                activeIndexChange: function () {
                    imgSwiperLv3List.forEach((imgSwiper) => {
                        imgSwiper.classList.remove('active')
                    })
                    const index = listSwiperTab.activeIndex;
                    imgSwiperLv3List[index].classList.add('active');
                }
            }
        });

        const tabSwiperLv1Faq = new Swiper('.tab-swiper-lev1--faq', {
            direction: 'horizontal',
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 10,
            freeMode: true,
            navigation: {
                nextEl: '.main-faq__right',
                prevEl: '.main-faq__left',
            },
            centerInsufficientSlides: true,
            speed: 0,
            breakpoints: {
                980: {
                    spaceBetween: 20,
                }
            }
        });


        const listSwiperImgFaq = new Swiper('.list-swiper-img-lv2--faq', {
            direction: 'horizontal',
            loop: false,
            spaceBetween: 0,
            speed: 0,

            thumbs: {
                swiper: tabSwiperLv1Faq,
            },
        });
    } catch (error) {

    }


}
// Review Page modal Swiper
export const modalReviewSwiper = new Swiper('.pagereviews-modal__swiper', {
    direction: 'horizontal',

    navigation: {
        nextEl: '#pagereviews-modal__right',
        prevEl: '#pagereviews-modal__left',
    },

});

let filterSwiperThumbMobi = new Swiper('#filter-swiper-thumb--mobi', {
    direction: 'vertical',
    loop: false,
    spaceBetween: 10,
    slidesPerView: 9,
    freeMode: false,
});

let filterSwiperThumbDesk = new Swiper('#filter-swiper-thumb--desk', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    freeMode: false,
});



let listReviewSwiper = new Swiper('.pagereviews-reviews-swiper', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 10,
    slidesPerView: 1,
    freeMode: false,
    speed: 0,
    thumbs: {
        swiper: filterSwiperThumbMobi
    },
    on: {
        slideChange: function () {
            const slideList = document.querySelectorAll('.pagereviews-reviews-swiper .swiper-slide');
            if (checkList(slideList)) {
                modalReviewSwiper.removeAllSlides();
                const reviewsItems = Array.from(slideList[listReviewSwiper.activeIndex].querySelectorAll('.pagereviews-reviews__list .pagereviews-reviews__sc-shot'))
                if (checkList(reviewsItems)) {
                    reviewsItems.forEach((item) => {
                        modalReviewSwiper.appendSlide(`<div class="swiper-slide">
                            <div class="pagereviews-modal__card">
                                <img class="pagereviews-modal__sc-shot" src="${item.src}"
                                    alt="">
                            </div>
                        </div>`)
                    })
                }
            }

        },
    },
});

let reviewsFakeSwiper = new Swiper('#reviews-fake-swiper', {
    slidesPerView: 1,
    speed: 0,
    thumbs: {
        swiper: filterSwiperThumbDesk
    },
});
listReviewSwiper.controller.control = reviewsFakeSwiper;
reviewsFakeSwiper.controller.control = listReviewSwiper;


console.log(filterSwiperThumbDesk);


