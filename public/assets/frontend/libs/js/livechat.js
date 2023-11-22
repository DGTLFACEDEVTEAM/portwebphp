"use strict";
var _createClass = (function () {
    function defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
        }
    }
    return function (Constructor, protoProps, staticProps) {
        if (protoProps) defineProperties(Constructor.prototype, protoProps);
        if (staticProps) defineProperties(Constructor, staticProps);
        return Constructor;
    };
})();
function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}
(function () {
    "use strict";
    var process = void 0;
    var LiveChat = (function () {
        function LiveChat() {
            _classCallCheck(this, LiveChat);
            this._defaultSettings = { uuid: null, baseColor: null };
            this._booted = false;
            this._elementInitialized = false;
            this._chatCollapsed = false;
            this.UTM_HEADERS = [
                "utm_source",
                "utm_medium",
                "utm_campaign",
                "utm_term",
                "utm_content",
            ];
            this._utmValues = {
                utm_source: null,
                utm_medium: null,
                utm_campaign: null,
                utm_term: null,
                utm_content: null,
            };
        }
        _createClass(LiveChat, [
            {
                key: "_getParameterByName",
                value: function _getParameterByName(name) {
                    var url = window.location.href;
                    name = name.replace(/[\[\]]/g, "\\$&");
                    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
                    var results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return "";
                    return decodeURIComponent(results[2].replace(/\+/g, " "));
                },
            },
            {
                key: "_getUtmValues",
                value: function _getUtmValues(callback) {
                    var _this = this;
                    this.UTM_HEADERS.map(function (utmHeader) {
                        _this._utmValues[utmHeader] =
                            _this._getParameterByName(utmHeader);
                    });
                    return callback(this._utmValues);
                },
            },
            {
                key: "_httpGetAsync",
                value: function _httpGetAsync(url, callback) {
                    var xmlHttp = new XMLHttpRequest();
                    xmlHttp.onreadystatechange = function () {
                        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                            callback(JSON.parse(xmlHttp.responseText));
                        }
                    };
                    xmlHttp.open("GET", url, true);
                    xmlHttp.send(null);
                },
            },
            {
                key: "boot",
                value: function boot(settings) {
                    var _this2 = this;
                    if (this._booted) return false;
                    this._booted = true;
                    this._defaultSettings = settings;
                    this._httpGetAsync(
                        ((process && process.env && process.env.DOMAIN) ||
                            "https://livechat.connexease.com") +
                            "/api/is-company-online/" +
                            settings.uuid,
                        function (res) {
                            _this2._getUtmValues(function (utmValues) {
                                _this2.generateLivechat(
                                    res.working,
                                    res.bubble,
                                    utmValues
                                );
                            });
                        }
                    );
                },
            },
            {
                key: "generateLivechat",
                value: function generateLivechat(
                    isCompanyOnline,
                    bubble,
                    utmValues
                ) {
                    var bubbleTimer = void 0,
                        bubbleInner = void 0,
                        bubbleContainer = void 0;
                    bubbleInner = document.createElement("div");
                    bubbleContainer = document.createElement("div");
                    var metaTags = document.querySelectorAll(
                        "meta[name=viewport]"
                    );
                    if (metaTags.length <= 0) {
                        var meta = document.createElement("meta");
                        meta.name = "viewport";
                        meta.content =
                            "initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width";
                        document
                            .getElementsByTagName("head")[0]
                            .appendChild(meta);
                    } else {
                        metaTags.forEach(function (tag) {
                            if (tag.name === "viewport") {
                                tag.content =
                                    "initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width";
                            }
                        });
                    }
                    var livechatContainer = document.createElement("div");
                    livechatContainer.className = "tusla-livechat";
                    var bubbleCloseIcon = document.createElement("div");
                    bubbleCloseIcon.className =
                        "tusla-livechat__bubble__close-icon";
                    bubbleCloseIcon.style.color = this._defaultSettings
                        .baseColor
                        ? "#fff"
                        : "#4c3836";
                    bubbleCloseIcon.style.backgroundColor = this
                        ._defaultSettings.baseColor
                        ? this._defaultSettings.baseColor
                        : "#fff";
                    if (bubble && bubble.enabled === true) {
                        bubbleInner.innerHTML = bubble.message;
                        bubbleContainer.className = "tusla-livechat__bubble";
                        bubbleContainer.style.color = this._defaultSettings
                            .baseColor
                            ? "#fff"
                            : "#4c3836";
                        bubbleContainer.style.backgroundColor = this
                            ._defaultSettings.baseColor
                            ? this._defaultSettings.baseColor
                            : "#fff";
                        bubbleContainer.appendChild(bubbleInner);
                        bubbleTimer = setTimeout(function () {
                            bubbleContainer.className =
                                "tusla-livechat__bubble tusla-livechat__bubble--active";
                            bubbleCloseIcon.className =
                                "tusla-livechat__bubble__close-icon active";
                        }, bubble.delay * 1000);
                        livechatContainer.appendChild(bubbleContainer);
                        livechatContainer.appendChild(bubbleCloseIcon);
                    }
                    bubbleCloseIcon.addEventListener(
                        "click",
                        function () {
                            bubbleContainer.className =
                                "tusla-livechat__bubble";
                            bubbleCloseIcon.className =
                                "tusla-livechat__bubble__close-icon";
                        },
                        false
                    );
                    var livechatElementContainer =
                        document.createElement("div");
                    livechatElementContainer.className =
                        "tusla-livechat__element";
                    var livechatElement = document.createElement(
                        this._defaultSettings.containerElement || "iframe"
                    );
                    livechatElement.referrerPolicy = "unsafe-url";
                    livechatElement.frameBorder = 0;
                    livechatElement.title = "Livechat";
                    livechatElementContainer.appendChild(livechatElement);
                    var callback = this._defaultSettings.callbackUrl
                        ? "?callbackUrl=" + this._defaultSettings.callbackUrl
                        : "";
                    var elementUrl = new URL(
                        ((process && process.env && process.env.DOMAIN) ||
                            "https://livechat.connexease.com") +
                            "/" +
                            (isCompanyOnline ? "embed" : "form") +
                            "/" +
                            this._defaultSettings.uuid +
                            callback
                    );
                    for (var utmHeader in this._utmValues) {
                        if (this._utmValues[utmHeader]) {
                            elementUrl.searchParams.set(
                                utmHeader,
                                this._utmValues[utmHeader]
                            );
                        }
                    }
                    var livechatLauncher = document.createElement("div");
                    livechatLauncher.className = "tusla-livechat__launcher";
                    livechatLauncher.style.backgroundColor = this
                        ._defaultSettings.baseColor
                        ? this._defaultSettings.baseColor
                        : "#169282";
                    function clickLauncherEvent() {
                        clearTimeout(bubbleTimer);
                        if (this._chatCollapsed) {
                            this._chatCollapsed = false;
                            livechatElementContainer.className =
                                "tusla-livechat__element";
                            livechatLauncher.className =
                                "tusla-livechat__launcher";
                            if (
                                window.innerHeight <= 650 &&
                                window.innerWidth <= 700
                            ) {
                                document.body.style.overflow = null;
                                livechatElementContainer.style.height = "0px";
                            }
                        } else {
                            this._chatCollapsed = true;
                            if (!this._elementInitialized) {
                                livechatElement.src = elementUrl.href;
                                this._elementInitialized = true;
                            }
                            bubbleContainer.className =
                                "tusla-livechat__bubble";
                            bubbleCloseIcon.className =
                                "tusla-livechat__bubble__close-icon";
                            livechatElementContainer.className =
                                "tusla-livechat__element tusla-livechat__element--active";
                            livechatLauncher.className =
                                "tusla-livechat__launcher tusla-livechat__launcher--active";
                            if (
                                window.innerHeight <= 650 &&
                                window.innerWidth <= 700
                            ) {
                                document.body.style.overflow = "hidden";
                                livechatElementContainer.style.height =
                                    window.innerHeight + "px";
                            }
                        }
                    }
                    livechatLauncher.addEventListener(
                        "click",
                        clickLauncherEvent.bind(this),
                        false
                    );
                    bubbleInner.addEventListener(
                        "click",
                        clickLauncherEvent.bind(this),
                        false
                    );
                    var me = this;
                    window.addEventListener("message", function (e) {
                        if (e.data.type === "archive") {
                            clickLauncherEvent.bind(me)();
                        }
                    });
                    var livechatLauncherOpenIcon =
                        document.createElement("div");
                    livechatLauncherOpenIcon.className =
                        "tusla-livechat__launcher__open-icon";
                    livechatLauncher.appendChild(livechatLauncherOpenIcon);
                    var livechatLauncherCloseIcon =
                        document.createElement("div");
                    livechatLauncherCloseIcon.className =
                        "tusla-livechat__launcher__close-icon";
                    livechatLauncher.appendChild(livechatLauncherCloseIcon);
                    livechatContainer.appendChild(livechatElementContainer);
                    livechatContainer.appendChild(livechatLauncher);
                    document.body.insertBefore(
                        livechatContainer,
                        document.body.firstChild
                    );
                    window.onresize = function () {
                        if (
                            window.innerHeight <= 650 &&
                            window.innerWidth <= 700 &&
                            document.getElementsByClassName(
                                "tusla-livechat__element"
                            ).length &&
                            document
                                .getElementsByClassName(
                                    "tusla-livechat__element"
                                )[0]
                                .classList.contains(
                                    "tusla-livechat__element--active"
                                )
                        ) {
                            document.getElementsByClassName(
                                "tusla-livechat__element"
                            )[0].style.height = window.innerHeight + "px";
                        }
                    };
                },
            },
        ]);
        return LiveChat;
    })();
    var livechat = (window.LiveChat = new LiveChat());
    if ("initLivechat" in window) {
        window.initLivechat();
    }
})();
