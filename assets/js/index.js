
import "./header.js";
import "./slider.js";

import { customSelect } from "./form.js?2503130001";
import { modal } from "./modal.js?2503130001";
// import { hasElem, checkList } from "./checkValidVar.js";
import { isTextReviewTrunc } from "./isTextTrunc.js";
import { collapseChecked } from "./collaps-item.js";
import { serviceList } from "./services-list.js";
import { serviceMenus } from "./services-menu.js";
import "./cos-service.js";
import { pageBlogJS } from "./page-blog.js";
import { pageReviewJS } from "./page-review.js";
import { expandPrizeList } from "./certificate-list.js";


customSelect();
modal();
isTextReviewTrunc();
collapseChecked();
serviceList();
serviceMenus();
pageBlogJS();
pageReviewJS();
expandPrizeList();


