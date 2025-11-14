import { checkList, hasElem } from "./checkValidVar.js";
import { certificateMainSwiper } from "/assets/js/slider.js";
{
    const orderSlideList = document.querySelectorAll('.pagecertificates-prize__item')
    const prizeModal = document.querySelector('#prize-modal');

    if (checkList(orderSlideList) && hasElem(prizeModal)) {
        orderSlideList.forEach((order) => {
            order.onclick = function () {
                const modalClose = prizeModal.querySelector(".modal-close");
                prizeModal.style.display = "block";
                certificateMainSwiper.slideTo(parseInt(order.dataset.indexSlide))
                prizeModal.onclick = function (e) {
                    if (e.target == prizeModal) {
                        prizeModal.style.display = "none";
                    }
                };
                modalClose.onclick = function () {
                    prizeModal.style.display = "none";
                };
            }
        })
    }
}

// More Pize List
export function expandPrizeList() {
    const btn = document.querySelector('.pagecertificates-prize__more-btn');
    const listPrize = document.querySelector('.pagecertificates-prize__list');

    if (hasElem(btn) && hasElem(listPrize)) {
        btn.onclick = function () {
            if (listPrize.classList.contains('active')) {
                listPrize.classList.remove('active');
                btn.classList.remove('active');
                btn.innerHTML = `Посмотреть все
                    <div class="wrap__chervon">
                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                    </div>`
            } else {
                listPrize.classList.add('active');
                btn.classList.add('active');
                btn.innerHTML = `Свернуть
                    <div class="wrap__chervon">
                        <img src="/assets/images/chervon--blue_no-bg-bold.svg" alt="">
                    </div>`
            }
        }
    }
}
