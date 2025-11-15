import { checkList, hasElem } from "./checkValidVar.js";
import { modalReviewSwiper } from "./slider.js";

export function pageReviewJS() {
    const orderSlide = document.querySelectorAll('.pagereviews-reviews__item');
    if (checkList(orderSlide)) {
        const rvModal = document.querySelector('#review-list-modal');
        orderSlide.forEach((order) => {
            order.onclick = function () {
                rvModal.style.display = "block";
                modalReviewSwiper.slideTo(parseInt(order.dataset.indexSlide))
                rvModal.onclick = function (e) {
                    if (!e.target.closest('.pagereviews-modal__card') && !e.target.closest('.icon__wrap')) {
                        rvModal.style.display = "none";
                    }
                };
            }
        })
    }
}



const filterTrigger = document.querySelector('.pagereviews-reviews-filter__trigger')
const filterModal = document.querySelector('#filter-modal');
if (hasElem(filterTrigger) && hasElem(filterModal)) {
    filterTrigger.onclick = function () {
        filterModal.style.visibility = "visible";
        filterModal.onclick = function (e) {
            if (e.target.closest('.filter-modal__close') || e.target.closest('.filter-modal__submit-btn')) {
                filterModal.style.visibility = "hidden";
            }
        };
    }
}

// Expand Item Review
const slideReviewList = Array.from(document.querySelectorAll('.pagereviews-reviews-swiper .swiper-slide'));

if (checkList(slideReviewList)) {
    slideReviewList.forEach((slide) => {
        const reviewsItems = Array.from(slide.querySelectorAll('.pagereviews-reviews__list .col'))
        if (checkList(reviewsItems)) {
            let markNumReview;
            if (document.querySelector('.pagebotulinum')) {
                markNumReview = 2;
                console.log(document.querySelector('.pagebotulinum'))

            } else {
                markNumReview = 4;
            }

            if (reviewsItems.length > markNumReview) {
                slide.querySelector('.expand-btn--js').classList.add('btn-visible');
            }

            const reviewBtn = slide.querySelector(".expand-btn--js");

            function showItems(arrayElem, markNum) {
                arrayElem.forEach((elem, index) => {
                    if (index >= markNum && index <= markNum + markNumReview - 1) {
                        elem.style.display = "block"
                    }
                })
            }

            function hideItems(arrayElem, markNum) {
                arrayElem.forEach((elem, index) => {
                    if (index >= markNum) {
                        elem.style.display = "none"
                    }
                })
            }



            function expandBlog(items, btn, mmarkNum) {
                let diff = mmarkNum;
                showItems(items, 0);
                btn.onclick = () => {
                    if (!btn.classList.contains('active')) {
                        showItems(items, mmarkNum);
                        mmarkNum = mmarkNum + diff;
                        if (mmarkNum >= items.length) {
                            btn.classList.add('active');
                        }
                    } else {
                        mmarkNum = diff;
                        hideItems(items, mmarkNum);
                        btn.classList.remove('active');
                    }
                }
            }

            if (hasElem(reviewsItems) && hasElem(reviewBtn) && hasElem(markNumReview)) {
                expandBlog(reviewsItems, reviewBtn, markNumReview);
            }
        }
    })
}



