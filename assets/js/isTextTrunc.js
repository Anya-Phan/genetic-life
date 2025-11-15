import { checkList } from "./checkValidVar.js";

/* Expand of Reivew's Item*/
export function isTextReviewTrunc() {
    const revItems = document.querySelectorAll(".main-review-slide__item");

    if (checkList(revItems)) {
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
    }
}



