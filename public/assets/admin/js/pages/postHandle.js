let addedTemplates = [];
let currentTemplate = {};
let currentTempElement = "h1";
let dragItem = null;
let isOverDropbox = false;
let typeOfDraggedElement = "";
let youtubeSelected = true;
let defaultYoutubeUrl = "FiRIVHS5Nts";

let defaultImgSize = "medium";
let defaultImgAnchor = "https://portnature.com.tr";
let deafultImgUrl = "http://portnature.dgtl.com/assets/gallery/blogs/";

const draggables = document.querySelectorAll(".selectableElement");
const dropbox = document.querySelector(".dropbox");
let height = $(".tempLeft").height();
$(".dropbox").css("height", height);

addDefaultTemps();
function addDefaultTemps() {
    let defaultEls = dropbox.getAttribute("defaultEls");
    // next section is for blog-edit page if defaultEls has dgtlNewBlogSystem thats mean this is
    // blog-edit page and its uses new blog system
    if (defaultEls.includes("dgtlNewBlogSystem")) {
        // defaultels is html string convert to html
        const tempElement = document.createElement("div");
        tempElement.innerHTML = defaultEls;
        const dgtlNewBlogSystem =
            tempElement.querySelector("#dgtlNewBlogSystem");
        const inside = dgtlNewBlogSystem.innerHTML;
        let div = document.createElement("div");
        div.innerHTML = inside;
        let insideArray = Array.from(div.children);
        // insideArray has all the parent elements of templates so we can loop and find out wich template is
        dropbox.innerHTML = "";
        insideArray.forEach((element) => {
            // get class name of element
            // classname are determinate which template added
            let className = element.className;
            switch (className) {
                case "section1wrapper":
                    // section1wrapper is for 1 heading and 1 paragraph template
                    let hpContainer = element.children[0];
                    // heading can be h1 to h6 so we need to find out which heading is
                    const headingsSignle = hpContainer.querySelectorAll(
                        "h1, h2, h3, h4, h5, h6"
                    );

                    let firstHeadingSingle = "";
                    let headingType = "";

                    if (headingsSignle.length > 0) {
                        firstHeadingSingle = headingsSignle[0];
                        headingType = firstHeadingSingle.tagName.toLowerCase();
                    } else {
                        console.log(
                            "No heading found inside the target element"
                        );
                        // is there is no heading just return, this template is not valid
                        break;
                    }

                    let pS = null;
                    // if there no p tag just return, this template is not valid
                    if (!hpContainer.querySelector(".tempPContainer")) {
                        // get all p tags inside hpContainer
                        pS = hpContainer.querySelectorAll("p");
                        if (pS.length !== 0) {
                            // put every p tag inside tempPContainer
                            let tempCo = document.createElement("div");
                            tempCo.className = "tempPContainer";
                            pS.forEach((p) => {
                                tempCo.appendChild(p);
                            });
                            hpContainer.appendChild(tempCo);
                        } else {
                            break;
                        }
                    }
                    pS = hpContainer.querySelector(".tempPContainer");

                    // find first p tag inside hpContainer
                    let hS = firstHeadingSingle.innerHTML.trim();

                    // converting ps to string to store at object
                    pS = pS.innerHTML.trim();

                    // creating object for this template that filled with values we get from html
                    // purpose of this object is you can edit this template that already added
                    let hpObj = {
                        tempType: "hp",
                        tempElement: {
                            id: "",
                            class: "",
                            heading: hS,
                            paragraph: pS,
                            type: [headingType, "p"],
                        },
                    };

                    // calling function to add this template to html
                    addNewTemplateToHtml("hp", hpObj);
                    break;
                case "section2wrapper":
                    // section2wrapper is for img template
                    let imgContainer = element.children[0];
                    if (imgContainer.tagName.toLowerCase() !== "a") {
                        break;
                    }
                    let img = imgContainer.children[0];
                    let imgSrc = img.getAttribute("src");
                    let imgAlt = img.getAttribute("alt");
                    let imgAnchor = imgContainer.getAttribute("href");
                    let imgSize = img.className;
                    imgSize = imgSize.split("blogImage")[1];

                    // creating object for this template that filled with values we get from html
                    // purpose of this object is you can edit this template that already added
                    let imgObj = {
                        tempType: "img",
                        tempElement: {
                            id: "",
                            class: "",
                            url: imgSrc,
                            alt: imgAlt,
                            type: "img",
                            anchor: imgAnchor,
                            size: imgSize,
                        },
                    };
                    // calling function to add this template to html
                    addNewTemplateToHtml("img", imgObj);

                    break;
                case "section3wrapper":
                    // section3wrapper is for 2 heading and 2 paragraph side by side template
                    let hpx2Container = element.children[0];
                    let leftSideHpx2 = hpx2Container.children[0];
                    let rightSideHpx2 = hpx2Container.children[1];

                    // for left site heading

                    const headingsDoubleLeft = leftSideHpx2.querySelectorAll(
                        "h1, h2, h3, h4, h5, h6"
                    );
                    const headingsDoubleRight = rightSideHpx2.querySelectorAll(
                        "h1, h2, h3, h4, h5, h6"
                    );

                    let firstHeadingDoubleLeft = "";
                    let firstHeadingDoubleRight = "";

                    let headingTypeLeft = "";

                    if (headingsDoubleLeft.length > 0) {
                        firstHeadingDoubleLeft = headingsDoubleLeft[0];
                        headingTypeLeft =
                            firstHeadingDoubleLeft.tagName.toLowerCase();
                    } else {
                        console.log(
                            "No heading found inside the target element"
                        );
                        // is there is no heading just return, this template is not valid
                        break;
                    }

                    if (headingsDoubleRight.length > 0) {
                        firstHeadingDoubleRight = headingsDoubleRight[0];
                    } else {
                        console.log(
                            "No heading found inside the target element"
                        );
                        // is there is no heading just return, this template is not valid
                        break;
                    }

                    let h1L = firstHeadingDoubleLeft.innerHTML.trim();
                    let h1R = firstHeadingDoubleRight.innerHTML.trim();

                    let pL = null;
                    let pR = null;

                    if (!leftSideHpx2.querySelector(".tempPContainer")) {
                        // get all p tags inside hpContainer
                        pL = leftSideHpx2.querySelectorAll("p");
                        if (pL.length !== 0) {
                            // put every p tag inside tempPContainer
                            let tempCo = document.createElement("div");
                            tempCo.className = "tempPContainer";
                            pL.forEach((p) => {
                                tempCo.appendChild(p);
                            });
                            leftSideHpx2.appendChild(tempCo);
                        } else {
                            break;
                        }
                    }

                    if (!rightSideHpx2.querySelector(".tempPContainer")) {
                        // get all p tags inside hpContainer
                        pR = rightSideHpx2.querySelectorAll("p");
                        if (pR.length !== 0) {
                            // put every p tag inside tempPContainer
                            let tempCo = document.createElement("div");
                            tempCo.className = "tempPContainer";
                            pR.forEach((p) => {
                                tempCo.appendChild(p);
                            });
                            rightSideHpx2.appendChild(tempCo);
                        } else {
                            break;
                        }
                    }

                    pL = leftSideHpx2.querySelector(".tempPContainer");
                    pL = pL.innerHTML.trim();
                    // pL = `<p>${pL}</p>`;

                    // pR = rightSideHpx2.querySelector("p");
                    pR = rightSideHpx2.querySelector(".tempPContainer");
                    pR = pR.innerHTML.trim();
                    // pR = `<p>${pR}</p>`;

                    // creating object for this template that filled with values we get from html
                    // purpose of this object is you can edit this template that already added
                    let hpx2Obj = {
                        tempType: "hpx2",
                        tempElement: {
                            id: "",
                            class: "",
                            headings: [h1L, h1R],
                            paragraphs: [pL, pR],
                            type: [headingTypeLeft, "p"],
                        },
                    };
                    // calling function to add this template to html
                    addNewTemplateToHtml("hpx2", hpx2Obj);
                    break;
                case "iframeContainer":
                    // iframeContainer is for youtube/video template
                    let mainEl = element.children[0];

                    let src = mainEl.getAttribute("src");
                    if (!src) {
                        break;
                    }
                    if (src.includes("youtube")) {
                        src = src.split("https://www.youtube.com/embed/")[1];
                    } else {
                        // console.log("custom");
                    }
                    // creating object for this template that filled with values we get from html
                    // purpose of this object is you can edit this template that already added
                    let obj = {
                        tempType: "youtube",
                        tempElement: {
                            id: "",
                            class: "",
                            value: src,
                            videoType: "youtube",
                            type: "iframe",
                        },
                    };
                    // calling function to add this template to html
                    addNewTemplateToHtml("youtube", obj);
                    break;
                case "bookingElement":
                    // bookingElement is for placing booking widget inside blog
                    addNewTemplateToHtml("booking");
                    break;
                case "contactElement":
                    // contactElement is for placing contact widget inside blog
                    addNewTemplateToHtml("contact");
                    break;
            }
        });

        // we need to update all event listeners after adding default templates
        updateAllEventListerners();

        // we need to create full div for post request after adding default templates
        // !! adding new template that has input will be not effect to post request
        // but booking and contact template will effect to post request
        // because booking and contact template has no input
        createFullDivForPostReq();
    } else {
        // this is for creating new blog page
        // default elements comes from php file for creating default templaye layouts
        let defaultElsList = JSON.parse(defaultEls);
        dropbox.innerHTML = "";
        defaultElsList.forEach((defaultEl) => {
            // every defaultEl is template name so we can call function to add new template
            addNewTemplateToHtml(defaultEl);
        });
        // we need to update all event listeners after adding default templates
        updateAllEventListerners();
    }
}

// all the eventlisterners are functions because we need to remove all event listeners before add new event listener
// and the elements counts are dynamic so we need to remove all event listeners before add new event listener
function updateAllEventListerners() {
    // operational eventlisterners
    addEventListenerToExpendTemp(); // to expend template options on click
    addEventListenerToAddedTemplatesDrag(); // to drag and drop to reorder templates
    addEventListenerToDeleteIcon(); // to delete template on click
    initializeQuillEditor(); // to initialize quill editor for paragraph template

    // input eventlisterners
    addEventListernerToTempYoutubeInputs();
    addEventListenerToTempImgInputs();
    addEventListenerToTempHpInputs();
    addEventListenerToPreview();
}

// if you dont remove all event listeners before add new event listener it will add new event listener to all elements
// and it will cause to multiple event listener on one element

function addEventListenerToPreview() {
    // this function is checkbox listener for showing preview of our blog
    $(document).off("change", "input[name='previewTemp']");
    $(document).on("change", "input[name='previewTemp']", function (e) {
        e.preventDefault();
        // if this checbox is checked
        let status = $(this).prop("checked");

        if (status) {
            $(".previewTemp").toggleClass("d-none");
        } else {
            $(".previewTemp").toggleClass("d-none");
        }
    });
}

function initializeQuillEditor() {
    // this function is for initialize quill editor for paragraph template
    let qeditor = document.querySelectorAll(".qeditor");

    qeditor.forEach((editor) => {
        // if editor has quill class initialize quill editor
        if (!editor.classList.contains("ql-container")) {
            let quill = new Quill(editor, {
                theme: "snow",
                modules: {
                    toolbar: [
                        [
                            {
                                header: [1, 2, 3, 4, 5, 6, false],
                            },
                        ],
                        ["bold", "italic", "underline", "strike"],
                        [
                            {
                                color: [],
                            },
                            {
                                background: [],
                            },
                        ],
                        [
                            {
                                align: [],
                            },
                        ],
                        [
                            {
                                list: "ordered",
                            },
                            {
                                list: "bullet",
                            },
                        ],
                        ["link", "image", "video"],
                        ["clean"],
                    ],
                },
                placeholder: "Paragraf yazınız...",
            });
            // kill the event listener before add new event listener
            quill.off("text-change");

            quill.on("text-change", function () {
                // gettin quill's value
                let value = quill.root.innerHTML;

                value = `<div class="tempPContainer">${value}</div>`;
                // getting quill's element to find out which template is
                let quillEl = quill.container;
                let quillElement = quill.container.closest(".draggableItem");
                let closestIndex = quillElement.getAttribute("index");
                let pType = quillElement.getAttribute("pType");

                // update addedTemplates array whenever quill editor change
                if (pType == "single") {
                    addedTemplates[closestIndex].tempElement.paragraph = value;
                } else if (pType == "double") {
                    let editorIndex = quillEl.getAttribute("editorIndex");
                    addedTemplates[closestIndex].tempElement.paragraphs[
                        editorIndex
                    ] = value;
                }
                // to create full div for post request and see the changes on preview
                createFullDivForPostReq();
            });
        }
    });
}
function addEventListenerToExpendTemp() {
    // this function is for expend template options on click
    $(document).off("click", ".expendIcon");
    $(document).on("click", ".expendIcon", function (e) {
        e.preventDefault();
        $(this).parent().parent().next().toggleClass("th");
        $(this).parent().parent().next().toggleClass("h-100");
    });
}

function addEventListenerToDeleteIcon() {
    // this function is for delete template on click
    $(document).off("click", ".tempDelete");
    $(document).on("click", ".tempDelete", function (e) {
        e.preventDefault();
        // delete parent parent parent
        $(this).parent().parent().parent().remove();

        // booking && contact elements are one time use so we need to show them again at templates section
        if ($(this).hasClass("bookingDeleteIcon")) {
            $("#tempBOOKING").show();
        }
        if ($(this).hasClass("contactDeleteIcon")) {
            $("#tempCONTACT").show();
        }

        // get index of deleted element
        let index = parseInt($(this).parent().parent().parent().attr("index"));
        // remove element from addedTemplates
        addedTemplates.splice(index, 1);
        // update all the index attribute of elements in dropbox
        updateAllDropboxElementsIndex();
    });
}

// input eventlisterners
function addEventListernerToTempYoutubeInputs() {
    // this function is for geting youtube template inputs
    $(document).off("input", 'input[name="tempYoutube"]');
    $(document).on("input", 'input[name="tempYoutube"]', function (e) {
        e.preventDefault();
        if (youtubeSelected) {
            $(this).tooltip({
                title: "Yukarıda gösterildiği gibi sadece belirtilen kısımdaki kodu yazınız",
                placement: "top",
                trigger: "hover",
            });
        }

        // get closest .draggableItem's index attr
        let closestIndex = $(this).closest(".draggableItem").attr("index");
        // this inputs is url of  video get after www. and befero .com
        let url = e.target.value;
        // if its custom url we are just taking websites name to display
        let afterWWW = url.split("www.")[1];
        if (afterWWW !== undefined) {
            let beforeCom = afterWWW.split(".")[0];
            $(this)
                .closest(".draggableItem")
                .find(".showYoutubeAlt")
                .html(`(${beforeCom})`);
        }
        addedTemplates[closestIndex].tempElement.value = $(this).val();

        createFullDivForPostReq();
    });

    $(document).on("click", 'input[name="tempYoutube"]', function (e) {
        e.preventDefault();

        if (youtubeSelected) {
            // youtube embed link little bit different from normal youtube link
            // so we need to show tooltip to user to show how to get embed link
            $(this).tooltip({
                title: "Yukarıda gösterildiği gibi video url'in sadece belirtilen kısımdaki kodu yazınız",
                placement: "bottom",
                trigger: "hover",
            });

            $(this).tooltip("show");
        } else {
            // delete tooltip
            $(this).tooltip("dispose");
        }
    });

    $(document).off("change", 'select[name="tempVType"]');
    $(document).on("change", 'select[name="tempVType"]', function (e) {
        // if user change video type we need to change input placeholder and tooltip
        e.preventDefault();

        let closestIndex = $(this).closest(".draggableItem").attr("index");
        let val = $(this).val();
        addedTemplates[closestIndex].tempElement.videoType = val;
        // get this next sibling
        let nextSibling = $(this).next();
        let tempVideoDesc = $(this)
            .closest(".draggableItem")
            .find(".tempVideoDesc");
        if (val == "custom") {
            youtubeSelected = false;
            nextSibling.attr("placeholder", "Video url");
            tempVideoDesc.html("");
        } else {
            youtubeSelected = true;
            nextSibling.attr("placeholder", defaultYoutubeUrl);
            tempVideoDesc.html(
                `https://www.youtube.com/watch?v=<span class="fw-bolder text-decoration-underline">${defaultYoutubeUrl}</span>`
            );
        }

        createFullDivForPostReq();
    });
}

function addEventListenerToTempImgInputs() {
    // this function is for geting img template inputs
    $(document).off("input", 'input[name="tempImg"]');
    $(document).on("input", 'input[name="tempImg"]', function (e) {
        e.preventDefault();
        // get clicked elements id
        let closestIndex = $(this).closest(".draggableItem").attr("index");

        addedTemplates[closestIndex].tempElement.url = $(this).val();
        createFullDivForPostReq();
    });
    $(document).off("input", 'input[name="tempImgAlt"]');
    $(document).on("input", 'input[name="tempImgAlt"]', function (e) {
        e.preventDefault();
        // get clicked elements id
        let closestIndex = $(this).closest(".draggableItem").attr("index");
        $(this)
            .closest(".draggableItem")
            .find(".showImgAlt")
            .html(`(${$(this).val()})`);

        addedTemplates[closestIndex].tempElement.alt = $(this).val();
        createFullDivForPostReq();
    });

    // tempImgAnchor

    $(document).off("input", 'input[name="tempImgAnchor"]');
    $(document).on("input", 'input[name="tempImgAnchor"]', function (e) {
        e.preventDefault();
        // get clicked elements id
        let closestIndex = $(this).closest(".draggableItem").attr("index");
        $(this)
            .closest(".draggableItem")
            .find(".showImgAlt")
            .html(`(${$(this).val()})`);

        addedTemplates[closestIndex].tempElement.anchor = $(this).val();
        createFullDivForPostReq();
    });

    $(document).off("change", 'select[name="tempImgSize"]');
    $(document).on("change", 'select[name="tempImgSize"]', function (e) {
        e.preventDefault();
        $(this)
            .closest(".draggableItem")
            .find(".showHType1")
            .html($(this).val());
        let closestIndex = $(this).closest(".draggableItem").attr("index");
        addedTemplates[closestIndex].tempElement.size = $(this).val();
        createFullDivForPostReq();
    });
}

function addEventListenerToTempHpInputs() {
    // this function is for geting hp and hpx2 template inputs
    $(document).off("change", 'select[name="tempHType"]');
    $(document).on("change", 'select[name="tempHType"]', function (e) {
        e.preventDefault();
        $(this)
            .closest(".draggableItem")
            .find(".showHType1")
            .html($(this).val());
        let closestIndex = $(this).closest(".draggableItem").attr("index");
        addedTemplates[closestIndex].tempElement.type[0] = $(this).val();
        createFullDivForPostReq();
    });

    $(document).off("input", 'input[name="tempText"]');
    $(document).on("input", 'input[name="tempText"]', function (e) {
        e.preventDefault();
        let closestIndex = $(this).closest(".draggableItem").attr("index");

        let hCount = $(this).attr("hCount");
        if (hCount == "single") {
            addedTemplates[closestIndex].tempElement.heading = $(this).val();
        } else if (hCount == "double") {
            let headingIndex = $(this).attr("headingIndex");
            addedTemplates[closestIndex].tempElement.headings[headingIndex] =
                $(this).val();
        }

        // addedTemplates[closestIndex].tempElement.url = $(this).val();
        createFullDivForPostReq();
    });
}

function updateAllDropboxElementsIndex() {
    // to update all the index attribute of elements in dropbox
    let dropboxElements = document.querySelectorAll(".draggableItem");
    dropboxElements.forEach((element, i) => {
        element.setAttribute("index", i);
    });
}

function addEventListenerToAddedTemplatesDrag() {
    // to reorder templates
    const draggableTemplates = document.querySelectorAll(".draggableItem");

    draggableTemplates.forEach((draggableItem) => {
        // remove all event listeners
        draggableItem.removeEventListener("dragstart", () => {});
        draggableItem.addEventListener("dragstart", () => {
            // adding dragging class to element to show user that element is dragging
            draggableItem.classList.add("dragging");
        });

        draggableItem.removeEventListener("dragend", () => {});
        draggableItem.addEventListener("dragend", () => {
            // removing dragging class when drag end
            draggableItem.classList.remove("dragging");
        });
    });
}

draggables.forEach((draggable) => {
    draggable.addEventListener("dragstart", () => {
        draggable.classList.add("dragging");
    });

    draggable.addEventListener("dragend", () => {
        draggable.classList.remove("dragging");
        addNewTemplateToHtml(typeOfDraggedElement);
        isOverDropbox = false;
        typeOfDraggedElement = "";
    });
});

dropbox.addEventListener("dragover", (e) => {
    e.preventDefault();
    const draggable = document.querySelector(".dragging");
    // when user drag element over dropbox we need re order elements

    if (draggable) {
        if (draggable.classList.contains("draggableItem")) {
            const afterElement = getDragAfterElement(dropbox, e.clientY);
            if (afterElement == null) {
                dropbox.appendChild(draggable);
            } else {
                dropbox.insertBefore(draggable, afterElement);
            }
        } else {
            let elements = draggable.getAttribute("elements");
            typeOfDraggedElement = elements;
            isOverDropbox = true;
        }
    }
});

// dragend
dropbox.addEventListener("dragend", (e) => {
    // after drag end we need to update all the index attribute of elements in dropbox
    handleArrayUpdateAndReorder();
    createFullDivForPostReq();
});

function handleArrayUpdateAndReorder() {
    // update all the index attribute of elements in dropbox
    let dropboxElements = document.querySelectorAll(".draggableItem");
    let dropboxElementsIndex = [];
    dropboxElements.forEach((element, i) => {
        dropboxElementsIndex.push(parseInt(element.getAttribute("index")));
        // change index attribute of element in dropbox
        element.setAttribute("index", i);
    });

    addedTemplates = reorderArray(addedTemplates, dropboxElementsIndex);
}

function reorderArray(originalArray, orderArray) {
    // reorder array that matches with elemetns index after drag end
    if (originalArray.length !== orderArray.length) {
        return null; // Handle arrays of different lengths
    }

    const newArray = [];

    for (let i = 0; i < originalArray.length; i++) {
        const newIndex = orderArray[i];
        if (newIndex < 0 || newIndex >= originalArray.length) {
            return null; // Handle invalid indices
        }
        newArray[i] = originalArray[orderArray[i]];
    }

    return newArray;
}

function addNewTemplateToHtml(type, obj) {
    // this function is for adding new template to html
    // and creating object for this template that filled with values we get from html
    let addedTemplatesLength = addedTemplates.length;

    // for edit page we need to get obj that filled with values we get from html
    // if obj is undefined that mean this is creating page so we create default empty object for every template

    switch (type) {
        case "youtube":
            let defaultEmptyYoutubeObj = obj
                ? obj
                : {
                      tempType: "youtube",
                      tempElement: {
                          id: "",
                          class: "",
                          value: "",
                          videoType: "youtube",
                          type: "iframe",
                      },
                  };
            addedTemplates.push(defaultEmptyYoutubeObj);
            addYoutubeTemplate(addedTemplatesLength, obj);
            break;
        case "img":
            let defaultEmptyImgObj = obj
                ? obj
                : {
                      tempType: "img",
                      tempElement: {
                          id: "",
                          class: "",
                          url: "",
                          alt: "",
                          anchor: defaultImgAnchor,
                          type: "img",
                          size: defaultImgSize,
                      },
                  };
            addedTemplates.push(defaultEmptyImgObj);
            addImgTemplate(addedTemplatesLength, obj);
            break;
        case "hp":
            let defaultEmptyHpObj = obj
                ? obj
                : {
                      tempType: "hp",
                      tempElement: {
                          id: "",
                          class: "",
                          heading: "",
                          paragraph: "",
                          type: ["h1", "p"],
                      },
                  };
            addedTemplates.push(defaultEmptyHpObj);
            addHpTemplate(addedTemplatesLength, obj);
            break;
        case "hpx2":
            let defaultEmptyHpx2Obj = obj
                ? obj
                : {
                      tempType: "hpx2",
                      tempElement: {
                          id: "",
                          class: "",
                          headings: ["", ""],
                          paragraphs: [],
                          type: ["h1", "p"],
                      },
                  };
            addedTemplates.push(defaultEmptyHpx2Obj);
            addHpx2Template(addedTemplatesLength, obj);
            break;
        case "booking":
            let defaultEmptyBookingObj = obj
                ? obj
                : {
                      tempType: "booking",
                      tempElement: {
                          id: "",
                          class: "",
                          value: "",
                          type: "div",
                      },
                  };
            addedTemplates.push(defaultEmptyBookingObj);
            addBookingTemplate(addedTemplatesLength);
            break;
        case "contact":
            let defaultEmptyContactObj = obj
                ? obj
                : {
                      tempType: "contact",
                      tempElement: {
                          id: "",
                          class: "",
                          value: "",
                          type: "div",
                      },
                  };
            addedTemplates.push(defaultEmptyContactObj);
            addContactTemplate(addedTemplatesLength);
            break;
    }
    updateAllEventListerners();
    createFullDivForPostReq();
}

// all below function is for adding new template to html

function addContactTemplate(index) {
    // we control if there is already contact template in dropbox
    let hasContact = false;
    let contactTemplate = document.querySelectorAll(".contactSection");
    if (contactTemplate.length > 0) {
        hasContact = true;
    }

    if (!hasContact) {
        var newDiv = document.createElement("div");
        newDiv.draggable = true;
        newDiv.className =
            "w-100 draggableItem checked contactSection px-3 py-2 my-2 border border-success border-2 rounded-2";
        newDiv.setAttribute("index", index);

        // Set the inner HTML of the new div element
        newDiv.innerHTML = `
        <div class="w-100 d-flex align-items-center justify-content-between">
          <i class="ri-drag-move-2-fill selectedTempIcon"></i>
          <span class="contactTooltip">Contact</span>
          <div class="d-flex align-items-center jutify-content-center">
              <i class="ri-delete-bin-5-line tempDelete contactDeleteIcon"></i>
          </div>
        </div>`;
        dropbox.appendChild(newDiv);
        // hide #tempBOOKING
        $("#tempCONTACT").hide();
    } else {
        // active tooltip on .bookingTooltip that will show fixed
        $(".contactTooltip").tooltip({
            title: "Sadece bir booking eklenebilir",
            placement: "top",
            trigger: "hover",
        });

        $(".contactTooltip").tooltip("show");

        setTimeout(() => {
            $(".contactTooltip").tooltip("hide");
        }, 2000);
    }
}

function addBookingTemplate(index) {
    let hasBooking = false;
    let bookingTemplate = document.querySelectorAll(".bookingSection");
    if (bookingTemplate.length > 0) {
        hasBooking = true;
    }

    if (!hasBooking) {
        var newDiv = document.createElement("div");
        newDiv.draggable = true;
        newDiv.className =
            "w-100 draggableItem bookingSection px-3 py-2 my-2 border border-success border-2 rounded-2";
        newDiv.setAttribute("index", index);

        // Set the inner HTML of the new div element
        newDiv.innerHTML = `
        <div class="w-100 d-flex align-items-center justify-content-between">
          <i class="ri-drag-move-2-fill selectedTempIcon"></i>
          <span class="bookingTooltip">Booking</span>
          <div class="d-flex align-items-center jutify-content-center">
              <i class="ri-delete-bin-5-line tempDelete bookingDeleteIcon"></i>
          </div>
        </div>`;
        dropbox.appendChild(newDiv);
        // hide #tempBOOKING
        $("#tempBOOKING").hide();
    } else {
        // active tooltip on .bookingTooltip that will show fixed
        $(".bookingTooltip").tooltip({
            title: "Sadece bir booking eklenebilir",
            placement: "top",
            trigger: "hover",
        });

        $(".bookingTooltip").tooltip("show");

        setTimeout(() => {
            $(".bookingTooltip").tooltip("hide");
        }, 2000);
    }
}

function addYoutubeTemplate(index, obj) {
    // Create a new div element
    var newDiv = document.createElement("div");
    newDiv.draggable = true;
    newDiv.className = `w-100 draggableItem px-3 py-2 my-2 border ${
        obj !== undefined && obj.tempElement.value.length !== 0
            ? "border-success"
            : "border-danger"
    } border-2 rounded-2`;
    newDiv.setAttribute("index", index);

    // Set the inner HTML of the new div element
    newDiv.innerHTML = `
      <div class="w-100 d-flex align-items-center justify-content-between position-relative">
        <i class="ri-drag-move-2-fill selectedTempIcon"></i>
        <span>Video&nbsp;<span class="showYoutubeAlt">(${
            obj !== undefined && obj.tempElement.value
                ? obj.tempElement.value
                : ""
        })</span></span>
        <div class="align-items-center jutify-content-center errorPlaceholder">
        <i class="ri-chat-delete-line"></i>
        <span>Doldurulmadı!</span>   
    </div>
        <div class="d-flex align-items-center jutify-content-center">
            <i class="ri-delete-bin-5-line tempDelete me-2"></i>
            <i class="ri-arrow-drop-down-line ms-2 expendIcon selectedTempIcon"></i>
        </div>
      </div>
      <div class="w-100 d-flex flex-column th">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <div class="w-100 d-flex justify-content-between align-item-center ">
                <label class="max-width-130px w-100">Url</label>
                <span class="w-100 tempVideoDesc">https://www.youtube.com/watch?v=<span class="fw-bolder text-decoration-underline">${defaultYoutubeUrl}</span></span>
          </div>
          <div class="d-flex flex-column align-items-center justify-content-center w-100 mb-3">
            <div class="form-group w-100 mb-3 d-flex align-items-center justify-content-center">
                <select class="form-select w-100 max-width-130px" name="tempVType" aria-label="Default select example">
                  <option selected value="youtube">Youtube</option>
                  <option value="custom">Custom Link</option>
                </select>
                <input id="text-container" value="${
                    obj !== undefined && obj.tempElement.value
                        ? obj.tempElement.value
                        : ""
                }" type="text" class="form-control headingtest position-relative w-100" name="tempYoutube" id="img" placeholder="${defaultYoutubeUrl}">
            </div>
          </div>
        </div>
      </div>
    `;

    // Get the target div where you want to add the new content

    // Append the new div to the target div
    dropbox.appendChild(newDiv);
}

function addImgTemplate(index, obj) {
    // Create a new div element
    var newDiv = document.createElement("div");
    newDiv.draggable = true;
    newDiv.className = `w-100 draggableItem px-3 py-2 my-2 border ${
        obj !== undefined &&
        obj.tempElement.url.length !== 0 &&
        obj.tempElement.alt.length !== 0
            ? "border-success"
            : "border-danger"
    }
        border-2 rounded-2`;
    newDiv.setAttribute("index", index);

    // Set the inner HTML of the new div element with the updated content
    newDiv.innerHTML = `
      <div class="w-100 d-flex align-items-center justify-content-between position-relative">
        <i class="ri-drag-move-2-fill selectedTempIcon"></i>
        <span>img&nbsp;<span class="showImgAlt">(${
            obj !== undefined && obj.tempElement.alt ? obj.tempElement.alt : ""
        })</span></span>
        <div class="align-items-center jutify-content-center errorPlaceholder">
        <i class="ri-chat-delete-line"></i>
        <span>Doldurulmadı!</span>   
    </div>
        <div class="d-flex align-items-center jutify-content-center">
            <i class="ri-delete-bin-5-line tempDelete me-2"></i>
            <i class="ri-arrow-drop-down-line ms-2 expendIcon selectedTempIcon"></i>
        </div>
      </div>
      <div class="w-100 d-flex flex-column th">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <label class="w-100">Img</label>
          <div class="d-flex flex-column align-items-center justify-content-center w-100 mb-3">
            <div class="form-group w-100 mb-3 d-flex">
                <select class="form-select w-100 max-width-130px" name="tempImgSize" aria-label="Default select example">
                    <option ${
                        obj !== undefined &&
                        obj.tempElement.size &&
                        obj.tempElement.size == "small"
                            ? "selected"
                            : ""
                    } ${
        obj == undefined && defaultImgSize == "small" ? "selected" : ""
    }  value="small">Küçük</option>
                    <option ${
                        obj !== undefined &&
                        obj.tempElement.size &&
                        obj.tempElement.size == "medium"
                            ? "selected"
                            : ""
                    } ${
        obj == undefined && defaultImgSize == "medium" ? "selected" : ""
    }  value="medium">Orta</option>
                    <option ${
                        obj !== undefined &&
                        obj.tempElement.size &&
                        obj.tempElement.size == "big"
                            ? "selected"
                            : ""
                    } ${
        obj == undefined && defaultImgSize == "big" ? "selected" : ""
    }  value="big">Büyük</option>
                </select>
               
                <input value="${
                    obj !== undefined && obj.tempElement.anchor
                        ? obj.tempElement.anchor
                        : defaultImgAnchor
                }" id="text-container" type="text" class="form-control headingtest position-relative w-100" name="tempImgAnchor"  placeholder="Fotoğraf link">
            </div>
            <div class="form-group w-100 mb-3">
              <input value="${
                  obj !== undefined && obj.tempElement.url
                      ? obj.tempElement.url
                      : deafultImgUrl
              }" id="text-container" type="text" class="form-control headingtest position-relative" name="tempImg" id="img" placeholder="Fotoğraf url">
            </div>
            <div class="form-group w-100">
              <input value="${
                  obj !== undefined && obj.tempElement.alt
                      ? obj.tempElement.alt
                      : ""
              }" id="text-container" type="text" class="form-control headingtest position-relative" name="tempImgAlt" id="alt" placeholder="Fotoğraf açıklaması">
            </div>
          </div>
        </div>
      </div>
    `;

    dropbox.appendChild(newDiv);
}

function addHpTemplate(index, obj) {
    // Create a new div element
    var newDiv = document.createElement("div");
    newDiv.draggable = true;
    newDiv.className = `w-100 draggableItem px-3 py-2 my-2 border ${
        obj !== undefined &&
        obj.tempElement.heading.length > 0 &&
        obj.tempElement.paragraph.length > 0
            ? "border-success"
            : "border-danger"
    }  border-2 rounded-2`;

    newDiv.setAttribute("index", index);
    newDiv.setAttribute("pType", "single");
    // Set the inner HTML of the new div element
    newDiv.innerHTML = `
      <div class="w-100 d-flex align-items-center justify-content-between position-relative">
        <i class="ri-drag-move-2-fill selectedTempIcon"></i>
        <div class="d-flex align-items-center justify-content-center">
        <span class="showHType1">${
            obj !== undefined && obj.tempElement.type[0]
                ? obj.tempElement.type[0]
                : "h1"
        }</span>&nbsp;& p 
        <i class="ri-file-list-2-line ms-2"></i>
        </div>
        <div class="align-items-center jutify-content-center errorPlaceholder">
        <i class="ri-chat-delete-line"></i>
        <span>Doldurulmadı!</span>   
    </div>
        <div class="d-flex align-items-center jutify-content-center">
            <i class="ri-delete-bin-5-line tempDelete me-2"></i>
            <i class="ri-arrow-drop-down-line ms-2 expendIcon selectedTempIcon"></i>
        </div>
      </div>
      <div class="w-100 d-flex flex-column th">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <label>Heading</label>
          <div class="d-flex align-items-center justify-content-center w-100">
            <select class="form-select w-100 max-width-75px" name="tempHType" aria-label="Default select example">
              <option ${
                  obj !== undefined && obj.tempElement.type[0] == "h1"
                      ? "selected"
                      : ""
              } ${obj == undefined ? "selected" : ""} value="h1">h1</option>
              <option ${
                  obj !== undefined && obj.tempElement.type[0] == "h2"
                      ? "selected"
                      : ""
              } value="h2">h2</option>
              <option ${
                  obj !== undefined && obj.tempElement.type[0] == "h3"
                      ? "selected"
                      : ""
              } value="h3">h3</option>
              <option ${
                  obj !== undefined && obj.tempElement.type[0] == "h4"
                      ? "selected"
                      : ""
              } value="h4">h4</option>
              <option ${
                  obj !== undefined && obj.tempElement.type[0] == "h5"
                      ? "selected"
                      : ""
              } value="h5">h5</option>
              <option ${
                  obj !== undefined && obj.tempElement.type[0] == "h6"
                      ? "selected"
                      : ""
              } value="h6">h6</option>
            </select>
            <div class="form-group w-100">
              <input value="${
                  obj !== undefined && obj.tempElement.heading
                      ? obj.tempElement.heading
                      : ""
              }" id="text-container" type="text" class="form-control headingtest position-relative" name="tempText" hCount="single" id="title" placeholder="Başlığı yazınız">
            </div>
          </div>
        </div>
        <div class="d-flex my-3 flex-column align-items-center justify-content-center">
          <label>Paragraph</label>
          <div class="w-100 qeditor">
            ${
                obj !== undefined && obj.tempElement.paragraph
                    ? obj.tempElement.paragraph
                    : ""
            }
          </div>
        </div>
      </div>
    `;
    dropbox.appendChild(newDiv);
}

function addHpx2Template(index, obj) {
    // Create a new div element
    var newDiv = document.createElement("div");
    newDiv.draggable = true;
    newDiv.className = `w-100 draggableItem px-3 py-2 my-2 border ${
        obj !== undefined &&
        obj.tempElement.headings.length !== 0 &&
        obj.tempElement.paragraphs.length !== 0
            ? "border-success"
            : "border-danger"
    } border-2 rounded-2`;
    newDiv.setAttribute("index", index);
    newDiv.setAttribute("pType", "double");

    // Set the inner HTML of the new div element
    newDiv.innerHTML = `
      <div class="w-100 d-flex align-items-center justify-content-between position-relative">
        <i class="ri-drag-move-2-fill selectedTempIcon"></i>
        <div class="d-flex align-items-center justift-content-center">
        <span class="showHType1">${
            obj !== undefined && obj.tempElement.type[0]
                ? obj.tempElement.type[0]
                : "h1"
        }</span>&nbsp;& p (x2) 
        <i class="ri-file-copy-2-line ms-2"></i>
        </div>
        <div class="align-items-center jutify-content-center errorPlaceholder">
        <i class="ri-chat-delete-line"></i>
        <span>Doldurulmadı!</span>   
    </div>
        <div class="d-flex align-items-center jutify-content-center">
            <i class="ri-delete-bin-5-line tempDelete me-2"></i>
            <i class="ri-arrow-drop-down-line ms-2 expendIcon selectedTempIcon"></i>
        </div>
      </div>
      <div class="w-100 d-flex flex-column th">
        <div class="w-100 d-flex flex-column align-items-center justify-content-center">
          <label>Heading</label>
          <div class="w-100 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100 mb-2">
              <select class="form-select w-100 max-width-75px" name="tempHType" index="${index}" aria-label="Default select example">
                <option ${
                    obj && obj.tempElement.type[0] == "h1" ? "selected" : ""
                } ${obj == undefined ? "selected" : ""} value="h1">h1</option>
                <option ${
                    obj && obj.tempElement.type[0] == "h2" ? "selected" : ""
                } value="h2">h2</option>
                <option ${
                    obj && obj.tempElement.type[0] == "h3" ? "selected" : ""
                } value="h3">h3</option>
                <option ${
                    obj && obj.tempElement.type[0] == "h4" ? "selected" : ""
                } value="h4">h4</option>
                <option ${
                    obj && obj.tempElement.type[0] == "h5" ? "selected" : ""
                } value="h5">h5</option>
                <option ${
                    obj && obj.tempElement.type[0] == "h6" ? "selected" : ""
                } value="h6">h6</option>
              </select>
              <div class="form-group w-100">
                <input value="${
                    obj !== undefined && obj.tempElement.headings[0]
                        ? obj.tempElement.headings[0]
                        : ""
                }" id="text-container" type="text" class="form-control headingtest position-relative" hCount="double" headingIndex="0" name="tempText" id="title" placeholder="Sol Başlığı yazınız">
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-center w-100 ">
              <div class="form-group w-100">
                <input value="${
                    obj !== undefined && obj.tempElement.headings[1]
                        ? obj.tempElement.headings[1]
                        : ""
                }" id="text-container" type="text" class="form-control headingtest position-relative" hCount="double" headingIndex="1" name="tempText" id="title" placeholder="Sağ Başlığı yazınız">
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex my-3 flex-column align-items-center justify-content-center">
          <label>Paragraph</label>
          <div id="editor3" editorIndex="0" class="w-100 qeditor mb-3">
            ${
                obj !== undefined && obj.tempElement.paragraphs[0]
                    ? obj.tempElement.paragraphs[0]
                    : ""
            }
          </div>
          <div id="editor4" editorIndex="1" class="w-100 qeditor">
            ${
                obj !== undefined && obj.tempElement.paragraphs[1]
                    ? obj.tempElement.paragraphs[1]
                    : ""
            }
          </div>
        </div>
      </div>
    `;

    dropbox.appendChild(newDiv);
}

function getDragAfterElement(container, y) {
    const draggableElements = [
        ...container.querySelectorAll(".draggableItem:not(.dragging)"),
    ];

    return draggableElements.reduce(
        (closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = y - box.top - box.height / 2;
            if (offset < 0 && offset > closest.offset) {
                return { offset: offset, element: child };
            } else {
                return closest;
            }
        },
        { offset: Number.NEGATIVE_INFINITY }
    ).element;
}

function createFullDivForPostReq() {
    // we will get addedTemplates and create full div for post req
    let fullDiv = "";

    addedTemplates.forEach((template) => {
        switch (template.tempType) {
            case "hp":
                let paragraph = template.tempElement.paragraph;
                if (paragraph && paragraph.length > 0) {
                    paragraph = paragraph.replaceAll("<p>", "<p class='p'>");
                }
                fullDiv += `
                <div class="section1wrapper">
                    <div class="section1">
                        <${template.tempElement.type[0]} class="h">${
                    template.tempElement.heading
                }</${template.tempElement.type[0]}>
                        ${paragraph.length > 0 ? paragraph : ""}
                    </div>
                </div>
                `;
                break;
            case "hpx2":
                if (
                    template.tempElement.headings[0] !== "" &&
                    template.tempElement.headings[1] !== "" &&
                    template.tempElement.paragraphs.length == 2
                ) {
                    let paragraph1 = template.tempElement.paragraphs[0];
                    let paragraph2 = template.tempElement.paragraphs[1];

                    if (paragraph1.length > 0 && paragraph2.length > 0) {
                        paragraph1 = paragraph1.replaceAll(
                            "<p>",
                            "<p class='p'>"
                        );
                        paragraph2 = paragraph2.replaceAll(
                            "<p>",
                            "<p class='p'>"
                        );
                    }
                    fullDiv += `
                    <div class="section3wrapper">
                        <div class="section3">
                            <div class="sideItem">
                                <${template.tempElement.type[0]} class="h">
                                    ${template.tempElement.headings[0]}
                                </${template.tempElement.type[0]}>
                                ${paragraph1}

                            </div>
                            <div class="sideItem">
                                <${template.tempElement.type[0]} class="h">${template.tempElement.headings[1]}</${template.tempElement.type[0]}>
                                ${paragraph2}
                            </div>
                        </div>
                    </div>
                    `;
                }

                break;
            case "img":
                if (
                    template.tempElement.alt !== "" &&
                    template.tempElement.url !== ""
                ) {
                    fullDiv += `<div class="section2wrapper">
                    <a href="${template.tempElement.anchor}" target="_blank"> <img class="blogImage${template.tempElement.size}" src="${template.tempElement.url}" alt="${template.tempElement.alt}" class="sectionimg"></a>
                    </div>
                    `;
                }
                break;
            case "youtube":
                if (
                    template.tempElement.videoType == "youtube" &&
                    template.tempElement.value !== ""
                ) {
                    fullDiv += `
                    <div class="iframeContainer">
                    <iframe class:"iframeBlog" width="80%" height="600px" src="https://www.youtube.com/embed/${template.tempElement.value}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    </div>
                    `;
                } else if (
                    template.tempElement.videoType == "custom" &&
                    template.tempElement.value !== ""
                ) {
                    fullDiv += `<iframe class:"iframeBlog" width="80%" height="600px" src="${template.tempElement.value}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>`;
                }
                break;
            case "booking":
                fullDiv += `<div class='bookingElement'><span class="bookingSpan" >BOOKING SECTION</span></div>`;
                break;
            case "contact":
                fullDiv += `<div class='contactElement'><span class="contactSpan" >CONTACT SECTION</span></div>`;
                break;
        }
    });

    let finalDiv = `<div id="dgtlNewBlogSystem">${fullDiv}</div>`;
    validate();

    $(".previewTemp").html(finalDiv);
    // add fulldiv a a value of textarea named description
    $("#descriptionV").val(finalDiv);
}

function validate() {
    addedTemplates.forEach((template, index) => {
        switch (template.tempType) {
            case "hp":
                if (
                    template.tempElement.heading.length > 0 &&
                    template.tempElement.paragraph.length > 0
                ) {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-danger");
                    draggableItem.classList.add("border-success");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.add("d-none");
                } else {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-success");
                    draggableItem.classList.add("border-danger");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.remove("d-none");
                }
                break;
            case "hpx2":
                if (
                    template.tempElement.headings[0] !== "" &&
                    template.tempElement.headings[1] !== "" &&
                    template.tempElement.paragraphs.length == 2
                ) {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-danger");
                    draggableItem.classList.add("border-success");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.add("d-none");
                } else {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-success");
                    draggableItem.classList.add("border-danger");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.remove("d-none");
                }
                break;
            case "img":
                if (
                    template.tempElement.alt !== "" &&
                    template.tempElement.url !== ""
                ) {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-danger");
                    draggableItem.classList.add("border-success");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.add("d-none");
                } else {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-success");
                    draggableItem.classList.add("border-danger");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.remove("d-none");
                }
                break;
            case "youtube":
                if (template.tempElement.value !== "") {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-danger");
                    draggableItem.classList.add("border-success");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.add("d-none");
                } else {
                    // find draggableItem with index
                    let draggableItem =
                        document.querySelectorAll(".draggableItem")[index];
                    draggableItem.classList.remove("border-success");
                    draggableItem.classList.add("border-danger");
                    // access first child olf draggableItem's find errorPlaceholder class child
                    let errorPlaceholder =
                        draggableItem.querySelector(".errorPlaceholder");
                    errorPlaceholder.classList.remove("d-none");
                }
                break;
        }
    });
}
