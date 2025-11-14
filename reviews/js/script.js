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
// 
const modalSwiper = new Swiper('.pagereviews-modal__swiper', {
    direction: 'horizontal',

    navigation: {
        nextEl: '#pagereviews-modal__right',
        prevEl: '#pagereviews-modal__left',
    },

});

{
    const orderSlideList = document.querySelectorAll('.pagereviews-reviews__item')
    const rvModal = document.querySelector('#review-list-modal');
    orderSlideList.forEach((order) => {
        order.onclick = function () {
            rvModal.style.display = "block";
            modalSwiper.slideTo(parseInt(order.dataset.indexSlide))
            rvModal.onclick = function (e) {
                if (!e.target.closest('.pagereviews-modal__card')) {
                    rvModal.style.display = "none";
                }
            };
        }
    })

    const filterTrigger = document.querySelector('.pagereviews-reviews-filter__trigger')
    const filterModal = document.querySelector('#filter-modal');
    filterTrigger.onclick = function () {
        filterModal.style.display = "block";
        filterModal.onclick = function (e) {
            if (e.target.closest('.filter-modal__close')) {
                filterModal.style.display = "none";
            }
        };
    }
}



// Expand Item Review

const reviewsItems = Array.from(document.querySelectorAll('.pagereviews-reviews__list .col'))
if (reviewsItems.length > 4) {
    document.querySelector('.expand-btn--js').classList.add('btn-visible');
}

const reviewBtn = document.querySelector(".expand-btn--js.btn-visible");

function showItems(arrayElem, markNum) {
    arrayElem.forEach((elem, index) => {
        if (index >= markNum && index <= markNum + 3) {
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

let markNumReview = 4;

function expandBlog(items, btn, mmarkNum) {
    showItems(items, 0);
    btn.onclick = () => {
        if (!btn.classList.contains('active')) {
            showItems(items, mmarkNum);
            mmarkNum = mmarkNum + 4;
            if (mmarkNum >= items.length) {
                btn.classList.add('active');
            }
        } else {
            mmarkNum = 4;
            hideItems(items, mmarkNum);
            btn.classList.remove('active');
        }
    }
}

expandBlog(reviewsItems, reviewBtn, markNumReview);
