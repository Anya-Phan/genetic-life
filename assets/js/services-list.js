import { hasElem } from "./checkValidVar.js";

//Hanlde Service Menu
export function serviceList() {
    changePaddingService();
    window.addEventListener("resize", changePaddingService);
    function changePaddingService() {
        let list = document.querySelector(".pagecosmetology-service__list"),
            container = document.querySelector(".container");
        if (hasElem(list)) {
            let
                padding = window
                    .getComputedStyle(container)
                    .getPropertyValue("margin-left");

            list.style.paddingLeft = padding;
            list.style.paddingRight = padding;
        }

    }
}
