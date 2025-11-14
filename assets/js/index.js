import "/assets/js/header.js";
import "/assets/js/slider.js";
import { customSelect } from "/assets/js/form.js?2503130001";
import { modal } from "/assets/js/modal.js?2503130001";
// import { hasElem, checkList } from "/assets/js/checkValidVar.js";
import { isTextReviewTrunc } from "/assets/js/isTextTrunc.js"
import { collapseChecked } from "/assets/js/collaps-item.js"
import { serviceList } from "/assets/js/services-list.js"
import { serviceMenus } from "/assets/js/services-menu.js"
import "/assets/js/cos-service.js";
import { pageBlogJS } from "/assets/js/page-blog.js"
import { pageReviewJS } from "/assets/js/page-review.js"
import { expandPrizeList } from "/assets/js/certificate-list.js"


customSelect();
modal();
isTextReviewTrunc();
collapseChecked();
serviceList();
serviceMenus();
pageBlogJS();
pageReviewJS();
expandPrizeList();
