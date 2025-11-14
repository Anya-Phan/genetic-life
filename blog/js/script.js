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
// 

const mobiContents = Array.from(document.querySelectorAll('.pageblog-blog--mobi__content'));
mobiContents.forEach((content) => {
    const mobiArticles = Array.from(content.querySelectorAll('.pageblog-blog--mobi-article'))
    if (mobiArticles.length > 4) {
        content.querySelector('.expand-btn--js').classList.add('btn-visible');
    }
})

const deskContents = Array.from(document.querySelectorAll('.pageblog-blog--desk__content'));
deskContents.forEach((content) => {
    const deskArticles = Array.from(content.querySelectorAll('.pageblog-blog--desk-article'))
    if (deskArticles.length > 4) {
        content.querySelector('.expand-btn--js').classList.add('btn-visible');
    }
})

const mobiArticleItems = mobiContents[0].querySelectorAll('.pageblog-blog--mobi-article');
const mobiNewsItems = mobiContents[1].querySelectorAll('.pageblog-blog--mobi-article');
const mobiSaleoffItems = mobiContents[2].querySelectorAll('.pageblog-blog--mobi-article');

const deskArticleItems = deskContents[0].querySelectorAll('.pageblog-blog--desk-article');
const deskNewsItems = deskContents[1].querySelectorAll('.pageblog-blog--desk-article');
const deskSaleoffItems = deskContents[2].querySelectorAll('.pageblog-blog--desk-article');

const articleBtns = document.querySelectorAll(".article-btn--js.btn-visible");
const newsBtns = document.querySelectorAll(".news-btn--js.btn-visible");
const saleoffBtns = document.querySelectorAll(".saleoff-btn--js.btn-visible");

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


let markNumArticle = 4, markNumNews = 4, markNumSaleoff = 4;

function expandBlog(mobi, desk, btns, mmarkNum) {
    showItems(mobi, 0);
    showItems(desk, 0);
    btns.forEach((btn) => {
        btn.onclick = () => {
            if (!btn.classList.contains('active')) {
                showItems(mobi, mmarkNum);
                showItems(desk, mmarkNum);
                mmarkNum = mmarkNum + 4;
                if (mmarkNum >= mobi.length) {
                    btns[0].classList.add('active');
                    btns[1].classList.add('active');
                }
            } else {
                mmarkNum = 4;
                hideItems(mobi, mmarkNum);
                hideItems(desk, mmarkNum);
                btns[0].classList.remove('active');
                btns[1].classList.remove('active');
            }
        }
    })
}

expandBlog(mobiArticleItems, deskArticleItems, articleBtns, markNumArticle);
expandBlog(mobiNewsItems, deskNewsItems, newsBtns, markNumNews);
expandBlog(mobiSaleoffItems, deskSaleoffItems, saleoffBtns, markNumSaleoff);


// Tab
const mobiTabs = document.querySelectorAll('.pageblog-blog--mobi__tab-item');
const deskTabs = document.querySelectorAll('.pageblog-blog--desk__tab-item');
const url = window.location.href;
const tabIndex = parseInt(new URL(url).searchParams.get("tabindex"));

function activeTab(tabIndex) {
    if (tabIndex >= 1 && tabIndex <= 3) { tabIndex-- } else tabIndex = 0;
    mobiTabs[tabIndex].closest('.pageblog-blog--mobi__tab-list')?.querySelector('.active').classList.remove('active');
    deskTabs[tabIndex].closest('.pageblog-blog--desk__tab-list')?.querySelector('.active').classList.remove('active');
    mobiContents[tabIndex].closest('.pageblog-blog--mobi__content-list')?.querySelector('.active').classList.remove('active');
    deskContents[tabIndex].closest('.pageblog-blog--desk__content-list')?.querySelector('.active').classList.remove('active');

    mobiTabs[tabIndex].classList.add('active');
    deskTabs[tabIndex].classList.add('active');
    mobiContents[tabIndex].classList.add('active');
    deskContents[tabIndex].classList.add('active');
}

activeTab(tabIndex);

// deskContent, mobiContent already have above
mobiTabs.forEach((tab, index) => {
    tab.onclick = () => {
        window.location.href = window.location.pathname + `?tabindex=${index + 1}`
    }
})

deskTabs.forEach((tab, index) => {
    tab.onclick = () => {
        window.location.href = window.location.pathname + `?tabindex=${index + 1}`
    }
})

// Blog-search
const closeSearchBlog = $('.pageblog-hero__close-icon');
const searchBlog = $('.pageblog-hero__search input');
if (closeSearchBlog) {
    closeSearchBlog.onclick = () => {
        searchBlog.value = '';
    }
}
