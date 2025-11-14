const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

try {
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



    // Slide 2: Направлении


} catch (e) {

}
