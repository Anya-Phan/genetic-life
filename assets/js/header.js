setTimeout(() => {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    // Header-contact
    const subHeader = $(".header__sub-bar");
    const writeIcon = $(".header__write-icon");

    if (writeIcon) {
        writeIcon.onclick = function () {
            let getStyle = getComputedStyle(subHeader);
            let maxHeight = getStyle.getPropertyValue("max-height");
            maxHeight = maxHeight === "0px" ? "500px" : "0px";
            subHeader.style.maxHeight = maxHeight;
        };
    }

    // Menu Moble Level 1
    const menuClose = $(".menu-content__close");
    const menuModal = $("#sidebar__modal");
    const menuBtn = $(".header__menu-icon");

    // When the user clicks on the button, open the modal
    if (menuBtn) {
        menuBtn.onclick = function () {
            menuModal.style.visibility = "visible";
            menuModal.style.opacity = "1";
            menuModal.children[0].style.left = "0";
        };
    }

    // When the user clicks on <span> (x), close the modal
    if (menuClose && menuModal) {
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
    }

    // Menu Second Level Mobile

    const secondMenu = $(".menu-content__nd-level");

    function openMenu(event) {
        secondMenu.style.left = "0";
    }

    function closeMenu(event) {
        secondMenu.style.left = "-100%";
    }

    const ndMenuItem = $$(".header__nav-nd-menu li");
    if (ndMenuItem.length) {
        ndMenuItem.forEach((item) => {
            item.onclick = function (e) {
                item.classList.toggle("active");
                const thirdMenu = this.querySelector(".header__nav-rd-menu");
                thirdMenu.style.maxHeight =
                    window
                        .getComputedStyle(thirdMenu)
                        .getPropertyValue("max-height") == "0px"
                        ? "500px"
                        : "0px";
            };
        });
    }

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

    $("#header__nav-search-icon")?.addEventListener("click", showSearchBar);
    $(".header__nav-close-icon")?.addEventListener("click", closeSearchBar);
    $(".header__search-icon")?.addEventListener("click", showSearchInput);
    closeInput?.addEventListener("click", closeSearchInput);

    /* Fixed Heaer */
    const headerFixed = $(".header--fixed");
    if (headerFixed) {
        function headerFixedHandle() {
            if (window.scrollY > 40) {
                headerFixed.classList.add("fixed");
            } else {
                headerFixed.classList.remove("fixed");
            }
        }

        $("body").onscroll = function () {
            headerFixedHandle();
        };
    }

    function activeServicesFooter(elem) {
        elem.classList.toggle("active");
    }

    const serviceFooter = document.getElementById("services-footer");
    if (serviceFooter) {
        serviceFooter.onclick = function () {
            this.classList.toggle("active");
        };
    }
}, 300);
