export function customSelect() {
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
}
