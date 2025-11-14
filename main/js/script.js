
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
/* Get the Thumb of Img Slide */
const tabSwiperLv2List = document.querySelectorAll('.tab-swiper-lev2');
const imgSwiperLv3List = document.querySelectorAll('.img-swiper-lev3');
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


const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// Header-contact
const subHeader = $(".header__sub-bar");
const writeIcon = $(".header__write-icon");

writeIcon.onclick = function () {
    let getStyle = getComputedStyle(subHeader);
    let maxHeight = getStyle.getPropertyValue("max-height");
    maxHeight = maxHeight === "0px" ? "500px" : "0px";
    subHeader.style.maxHeight = maxHeight;
};

// Menu Moble Level 1
const menuClose = $(".menu-content__close");
const menuModal = $("#sidebar__modal");
const menuBtn = $(".header__menu-icon");

// When the user clicks on the button, open the modal
menuBtn.onclick = function () {
    menuModal.style.visibility = "visible";
    menuModal.style.opacity = "1";
    menuModal.children[0].style.left = "0";
};

// When the user clicks on <span> (x), close the modal
menuClose.onclick = function () {
    menuModal.style.visibility = "hidden";
    menuModal.style.opacity = "0";
    menuModal.children[0].style.left = "-100%";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == menuModal) {
        menuModal.style.visibility = "hidden";
        menuModal.style.opacity = "0";
        menuModal.children[0].style.left = "-100%";
    }
};

// Menu Second Level Mobile

const secondMenu = $(".menu-content__nd-level");
function openMenu(event) {
    secondMenu.style.left = "0";
}

function closeMenu(event) {
    secondMenu.style.left = "-100%";
}

const ndMenuItem = $$(".header__nav-nd-menu li");
ndMenuItem.forEach((item) => {
    item.onclick = function (e) {
        item.classList.toggle("active");
        const thirdMenu = this.querySelector(".header__nav-rd-menu");
        thirdMenu.style.maxHeight =
            window.getComputedStyle(thirdMenu).getPropertyValue("max-height") ==
                "0px"
                ? "500px"
                : "0px";
    };
});

/* Search Desktop */
const searchBar = $(".header__search-bar");

function showSearchBar() {
    searchBar.style.visibility = "visible";
    searchBar.style.top = "50%";
}

function closeSearchBar() {
    searchBar.style.visibility = "hidden";
    searchBar.style.top = "-200%";
}

/* Search Mobile */
const searchInput = $(".header--mobile__input");
const closeInput = $(".header__close-icon");

function showSearchInput() {
    searchInput.style.height = "100%";
    closeInput.style.display = "block";
    writeIcon.style.display = "none";
}

function closeSearchInput() {
    searchInput.style.height = "0";
    searchInput.value = "";
    closeInput.style.display = "none";
    writeIcon.style.display = "block";
}

/* Fixed Heaer */
const headerFixed = $(".header--fixed");
function headerFixedHandle() {
    if (window.scrollY > 40) {
        headerFixed.classList.add("fixed");
    } else {
        headerFixed.classList.remove("fixed");
    }
}

// Slide 1
{
    let slideIndex = 0;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides((slideIndex += n));
    }

    function currentSlide(n) {
        showSlides((slideIndex = n));
    }

    /* setInterval(function () {
        showSlides((slideIndex += 1));
    }, 5000); */

    function showSlides(n) {
        let i;
        let slideList = $(".main-hero--mobile__list");
        let dots = $$(".main-hero--mobile__controls .dot");
        if (n > dots.length - 1) {
            slideIndex = 0;
        }
        if (n < 0) {
            slideIndex = dots.length - 1;
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex].className += " active";
        slideList.style.transform = `translateX(${-1 * slideIndex * 100}%)`;
    }

    // Kieu 2
    let slideList = $(".main-hero--mobile__list");
    let dots = $$(".main-hero--mobile__controls .dot");

    let prevTouch, currTouch, distanceSwipe;
    const dragListStart = (e) => {
        prevTouch = e.pageX || e.touches[0].pageX;
    };

    const dragListMove = (e) => {
        currTouch = e.pageX || e.touches[0].pageX;
    };

    const dragListEnd = (e) => {
        distanceSwipe = currTouch - prevTouch;
        if (distanceSwipe < -50) {
            slideIndex++;
        }

        if (distanceSwipe > 50) {
            slideIndex--;
        }
        // slideIndex =
        //     currTouch - prevTouch < 0 ? slideIndex + 1 : slideIndex - 1;
        if (slideIndex > dots.length - 1) {
            slideIndex = dots.length - 1;
        }
        if (slideIndex < 0) {
            slideIndex = 0;
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex].className += " active";
        slideList.style.transform = `translateX(${-1 * slideIndex * 100}%)`;
    };

    slideList.addEventListener("touchstart", dragListStart);
    slideList.addEventListener("touchmove", dragListMove);
    slideList.addEventListener("touchend", dragListEnd);
}

//  isChecked?
isChecked();

function isChecked() {
    const checkBoxs = $$(".main-hero--desktop__radio-btn");
    checkBoxs.forEach((box) => {
        if (box.checked == false) {
            box.parentElement.parentElement.style.width = "70px";
            console.log(box.parentElement.parentElement.style.width);
        } else {
            box.parentElement.parentElement.style.width = "65.726%";
            console.log(box.parentElement.parentElement.style.width);
        }
    });
}

// Custom Select
/*Look for ALL class "custom-select":*/
const selectList = document.getElementsByClassName("custom-select");
const selectLength = selectList.length;

for (var i = 0; i < selectLength; i++) {
    let selectOld = selectList[i].getElementsByTagName("select")[0]; //Old Select Tag
    let sumOptions = selectOld.length;

    /*Create a new DIV that will act as the selected item:*/
    const selectNew = document.createElement("DIV");
    selectNew.setAttribute("class", "select-main");
    selectNew.innerHTML = selectOld.options[selectOld.selectedIndex].innerHTML;
    selectList[i].appendChild(selectNew);

    /*Create a new DIV that will contain the option list:*/
    const newOptions = document.createElement("DIV");
    newOptions.setAttribute("class", "select-items select-hide");

    for (var j = 1; j < sumOptions; j++) {
        const option = document.createElement("DIV");
        option.innerHTML = selectOld.options[j].innerHTML;

        option.addEventListener("click", function (e) {
            /*when an item is clicked, update the old select box, and the selected item:*/
            var y, i, k, yl;
            for (i = 0; i < sumOptions; i++) {
                if (selectOld.options[i].innerHTML == this.innerHTML) {
                    selectOld.selectedIndex = i;
                    selectNew.innerHTML = this.innerHTML;
                    selectNew.style.color = "#fff";
                    y =
                        this.parentNode.getElementsByClassName(
                            "same-as-selected"
                        );
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            selectNew.click();
        });
        newOptions.appendChild(option);
    }
    selectList[i].appendChild(newOptions);

    selectNew.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elem) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-main");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elem == y[i]) {
            arrNo.push(i);
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}

/*if the user clicks anywhere outside the select box, then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

/* List Special */
const headerSpecial = $$(".main-specialist__item-header");
let prevIndexList = 0;

headerSpecial.forEach((header, index, array) => {
    header.onclick = function (e) {
        if (header.classList.contains("active")) {
            header.classList.remove("active");
        } else {
            array[prevIndexList].classList.remove("active");
            header.classList.add("active");
            prevIndexList = index;
        }
    };
});



/* Expand of Reivew's Item*/
const revItems = $$(".main-review-slide__item");

revItems.forEach((item) => {
    const btn = item.querySelector(".main-review-slide__item-icon-down"),
        revText = item.querySelector(".main-review-slide__item-body");

    btn.onclick = function () {
        btn.parentElement.classList.toggle("active");
    };

    if (revText.scrollHeight == revText.clientHeight) {
        btn.style.visibility = "hidden";
    } else {
        btn.style.visibility = "visible";
    }
});

/* Hide Btn when content does not lay out */
window.onresize = function () {
    revItems.forEach((item) => {
        const btn = item.querySelector(".main-review-slide__item-icon-down"),
            revText = item.querySelector(".main-review-slide__item-body");

        if (revText.scrollHeight == revText.clientHeight) {
            btn.style.visibility = "hidden";
        } else {
            btn.style.visibility = "visible";
        }
    });
};




/* Modal Onclick  */
function handleModal(modal) {
    modal.style.display = "block";
    const modalClose = modal.querySelector(".modal-close-js");
    modal.onclick = function (e) {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    };

    modalClose.onclick = function () {
        modal.style.display = "none";
    };

}

const modalOnclickList = document.querySelectorAll("[data-modal-onclick*='-modal']");
modalOnclickList.forEach((btn) => {
    btn.onclick = (e) => {
        e.preventDefault();
        let modal = document.getElementById(btn.dataset.modalOnclick);
        console.log(modal)
        handleModal(modal);
    }
})




