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

/* Fixed Header */
const headerFixed = $(".header--fixed");
function headerFixedHandle() {
    if (window.scrollY >= 30) {
        headerFixed.classList.add("fixed");
    } else {
        headerFixed.classList.remove("fixed");
    }
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

// Small Menu of services
{
    let dropdowns = $$(".menu__cate-dropdown");
    dropdowns.forEach((dropdown) => {
        dropdown.onclick = function () {
            dropdown.parentElement.parentElement.classList.toggle("active");
        };
    });
}

// Slide 1: До и после
{
    const resultSwiper = new Swiper('.pageaboutdoctor-result__swiper', {
        direction: 'horizontal',
        loop: false,
        speed: 400,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '#result-icon__right',
            prevEl: '#result-icon__left',
        },

        slidesPerView: 1,
        breakpoints: {
            980: {
                slidesPerView: 2,
                freeMode: false,
            }
        }
    });
}

// Slide 2: Врач-косметолог Ольга Шаго
{
    let slideIndex = 0;

    let slideList = $(".pagecosmetology-main__direct-list");
    let dots = $$(".pagecosmetology-main-slide__controls .dot");

    let x = window.matchMedia("(max-width: 979.98px)");
    function changeMediaQueries(x) {
        if (x.matches) {
            slideList.style.transform = "translateX(0)";
        }
    }
    changeMediaQueries(x);
    x.addEventListener("change", function () {
        changeMediaQueries(x);
    });

    function plusSlides2(n) {
        showSlides2((slideIndex += n));
    }

    function currentSlide2(n) {
        showSlides2((slideIndex = n));
    }
    function showSlides2(n) {
        if (n > dots.length - 1) {
            slideIndex = 0;
        }
        if (n < 0) {
            slideIndex = dots.length - 1;
        }
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex].className += " active";
        slideList.style.transform = `translateX(${-1 * slideIndex * 100}%)`;
    }
}

// До и после:menu bar
{
    const resultLists = document.querySelectorAll(
        ".pagecosmetology-result__list"
    );
    resultLists.forEach((list, i) => {
        const allOption = list.querySelectorAll(
            ".pagecosmetology-result__item"
        ),
            arrowIconsLeft = list.querySelector(
                ".pagecosmetology-result__left"
            ),
            arrowIconsRight = list.querySelector(
                ".pagecosmetology-result__right"
            );

        let isDragging = false,
            prevTouch,
            prevScroll;

        const handleIcons = (scrollVal) => {
            let maxScrollableWidth = list.scrollWidth - list.clientWidth;
            arrowIconsLeft.style.display = scrollVal <= 0 ? "none" : "block";
            arrowIconsRight.style.display =
                maxScrollableWidth - scrollVal <= 2 ? "none" : "block";
        };
        if (arrowIconsLeft && arrowIconsLeft) {
            arrowIconsLeft.addEventListener("click", () => {
                let scrollWidth = (list.scrollLeft += -350);
                handleIcons(scrollWidth);
            });

            arrowIconsRight.addEventListener("click", () => {
                let scrollWidth = (list.scrollLeft += 350);
                handleIcons(scrollWidth);
            });
        }

        allOption.forEach((option) => {
            option.addEventListener("click", () => {
                list.querySelector(".active").classList.remove("active");
                option.classList.add("active");
            });
        });

        const dragStart = (e) => {
            isDragging = true;
            prevTouch = e.pageX || e.touches[0].pageX;
            prevScroll = list.scrollLeft;
        };

        const dragging = (e) => {
            if (!isDragging) return;
            list.classList.add("dragging");
            list.scrollLeft =
                prevScroll - ((e.pageX || e.touches[0].pageX) - prevTouch);
            if (arrowIconsLeft && arrowIconsLeft) {
                handleIcons(list.scrollLeft);
            }
        };

        const stopDragging = () => {
            isDragging = false;
            list.classList.remove("dragging");
        };

        list.addEventListener("mousedown", dragStart);
        list.addEventListener("touchstart", dragStart);
        list.addEventListener("mousemove", dragging);
        list.addEventListener("touchmove", dragging);
        document.addEventListener("mouseup", stopDragging);
        list.addEventListener("touchend", stopDragging);
    });
}

//Hanlde Service Menu
{
    changePaddingService();
    window.onresize = function () {
        changePaddingService();
    };
    function changePaddingService() {
        let list = $(".pagecosmetology-service__list"),
            container = $(".container"),
            padding = window
                .getComputedStyle(container)
                .getPropertyValue("margin-left");

        list.style.paddingLeft = padding;
        list.style.paddingRight = padding;
    }
}

//handle expand list of direction
{
    let expandList = $$(".pagecosmetology-main__direct-expand");
    let moreButtons = $$(".pagecosmetology-main__direct-more");
    moreButtons.forEach((btn, index) => {
        btn.onclick = () => {
            expandList[index].classList.toggle("active");
            expandList[index].parentElement.querySelector('.pagecosmetology-main__direct-subtitle').classList.toggle("line-clamp-3");
        };
    });
}

{
    let typeList = $(".pagecosmetology-main__type-list");
    let contentList = $(".pagecosmetology-main__content-list");
    let controls = $(".pagecosmetology-main-slide__controls");
    typeList.children[0].onclick = function () {
        this.classList.add("active");
        typeList.children[1].classList.remove("active");
        contentList.children[0].style.display = "block";
        contentList.children[1].style.display = "none";
        contentList.classList.add("active-left");
        contentList.classList.remove("active-right");
        controls.parentElement.style.display = "block";
    };
    typeList.children[1].onclick = function () {
        this.classList.add("active");
        typeList.children[0].classList.remove("active");
        contentList.children[1].style.display = "block";
        contentList.children[0].style.display = "none";
        contentList.classList.remove("active-left");
        contentList.classList.add("active-right");
        controls.parentElement.style.display = "none";
    };
}





const modalBtn = $$(".modal-active-btn");
const modalList = $$(".modal");
modalBtn.forEach((btn, index) => {
    btn.onclick = function () {
        const modalClose = modalList[index].querySelector(".modal-close");
        modalList[index].style.display = "block";
        modalList[index].onclick = function (e) {
            if (e.target == modalList[index]) {
                modalList[index].style.display = "none";
            }
        };

        modalClose.onclick = function () {
            modalList[index].style.display = "none";
        };

    }
})

//Handle Price Expand 

{
    let priceItems = $$(".pagecosmetology-main__price-item");
    priceItems.forEach((item) => {
        item.onclick = function () {
            this.classList.add("active");
        }
        let expandbtn = item.querySelector(".hover__more");
        expandbtn.onclick = function (e) {
            if (item.classList.contains("active")) {
                e.stopPropagation();
                item.classList.remove("active")
            }
        }
    })
}