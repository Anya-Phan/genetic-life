import { checkList } from "./checkValidVar.js";

export function collapseChecked() {
    /* List Special */
    const headerSpecial = document.querySelectorAll(".main-specialist__item-header");
    let prevIndexList = 0;

    if (checkList(headerSpecial)) {
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
    }
}


