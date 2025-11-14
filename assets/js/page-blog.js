import { checkList } from "./checkValidVar.js";

export function pageBlogJS() {
    const mobiContents = Array.from(document.querySelectorAll('.pageblog-blog--mobi__content'));

    if (checkList(mobiContents)) {
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

        const articleBtns = document.querySelectorAll(".article-btn--js");
        const newsBtns = document.querySelectorAll(".news-btn--js");
        const saleoffBtns = document.querySelectorAll(".saleoff-btn--js");

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
        const closeSearchBlog = document.querySelector('.pageblog-hero__close-icon');
        const searchBlog = document.querySelector('.pageblog-hero__search input');
        if (closeSearchBlog) {
            closeSearchBlog.onclick = () => {
                searchBlog.value = '';
            }
        }
    }
}