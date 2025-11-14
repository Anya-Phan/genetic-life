import { checkList } from "./checkValidVar.js";

export function serviceMenus() {
    // Small Menu of services
    let dropdowns = document.querySelectorAll(".menu__cate-dropdown");
    if (checkList(dropdowns)) {
        dropdowns.forEach((dropdown) => {
            dropdown.onclick = function () {
                dropdown.parentElement.parentElement.classList.toggle("active");
            };
        });
    }
}



