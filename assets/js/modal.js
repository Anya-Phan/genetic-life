import { checkList } from "./checkValidVar.js";
import { hasElem } from "./checkValidVar.js";

export function modal() {
    /* Modal Onclick  */
    function handleModal(modal) {
        modal.style.display = "block";
        const modalClose = modal.querySelector(".modal-close-js");
        modal.onclick = function (e) {
            if (e.target == modal) {
                modal.style.display = "none";
            }
        };

        if (hasElem(modalClose)) {
            modalClose.onclick = function () {
                modal.style.display = "none";
            };
        }
    }

    const modalOnclickList = document.querySelectorAll("[data-modal-onclick*='-modal']");
    if (checkList(modalOnclickList)) {
        modalOnclickList.forEach((btn) => {
            btn.onclick = (e) => {
                e.preventDefault();
                let modal = document.getElementById(btn.dataset.modalOnclick);
                handleModal(modal);
            }
        })
    }
}