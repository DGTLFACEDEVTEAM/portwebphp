<div class="postCreateWrapper my-3 h-100">
    <div class="templatesContainer tempLeft w-100 max-width-300px">
        <p>Hazır Taslaklar</p>
        <div id="tempHP" draggable="true" editor="false" elements="hp" class="selectableElement py-1">
            <p class="tempTitle">heading</p>
            <div class="skdefault"></div>
            <div class="w-100">
                <span class="tempTitle">p</span>
                <span class="skeleton">
                    <div class="skdefault skfirst"></div>
                    <div class="skdefault"></div>
                    <div class="skdefault"></div>
                </span>
            </div>
        </div>
        <div id="tempDHP" draggable="true" editor="false" elements="hpx2" class="selectableElement d-flex py-1">
            <div class="w-100 me-1">
                <p class="tempTitle">heading</p>
                <div class="skdefault"></div>
                <div>
                    <span class="tempTitle">p</span>
                    <span class="skeleton">
                        <div class="skdefault skfirst"></div>
                        <div class="skdefault"></div>
                        <div class="skdefault"></div>
                    </span>
                </div>
            </div>
            <div class="w-100 ms-1">
                <p class="tempTitle">heading</p>
                <div class="skdefault"></div>
                <div>
                    <span class="tempTitle">p</span>
                    <span class="skeleton">
                        <div class="skdefault skfirst"></div>
                        <div class="skdefault"></div>
                        <div class="skdefault"></div>
                    </span>
                </div>
            </div>
        </div>
        <div id="tempHPIMG" draggable="true" editor="false" elements="hpimg" class="selectableElement d-flex py-1">
            <div class="w-100 me-1">
                <p class="tempTitle">heading</p>
                <div class="skdefault"></div>
                <div>
                    <span class="tempTitle">p</span>
                    <span class="skeleton">
                        <div class="skdefault skfirst"></div>
                        <div class="skdefault"></div>
                        <div class="skdefault"></div>
                    </span>
                </div>
            </div>
            <div class="w-100 ms-1">
                <i class="ri-image-add-line  tempIcon "></i>

            </div>
        </div>
        <div id="tempHPYOUTUBE" draggable="true" editor="false" elements="hpyoutube"
            class="selectableElement d-flex py-1">
            <div class="w-100 me-1">
                <p class="tempTitle">heading</p>
                <div class="skdefault"></div>
                <div>
                    <span class="tempTitle">p</span>
                    <span class="skeleton">
                        <div class="skdefault skfirst"></div>
                        <div class="skdefault"></div>
                        <div class="skdefault"></div>
                    </span>
                </div>
            </div>
            <div class="w-100 ms-1">

                <i class="ri-youtube-line tempIcon "></i>
            </div>
        </div>
        <div id="tempIMG" draggable="true" editor="false" elements="img" class="selectableElement withIcon">

            <i class="ri-image-add-line tempIcon"></i>
            <span class="fs-5 fw-bold">Image</span>
        </div>
        <div id="tempYOUTUBE" draggable="true" editor="false" elements="youtube" class="selectableElement withIcon">
            <i class="ri-youtube-line tempIcon"></i>
            <span class="fs-5 fw-bold">Youtube / Video</span>
        </div>
        <div id="tempBOOKING" draggable="true" editor="false" elements="booking" class="selectableElement withIcon">
            <i class="ri-price-tag-2-fill tempIcon"></i>
            <span class="fs-5 fw-bold">Booking</span>
        </div>
        <div id="tempCONTACT" draggable="true" editor="false" elements="contact" class="selectableElement withIcon">

            <i class="ri-customer-service-2-fill tempIcon"></i>
            <span class="fs-5 fw-bold">Contact</span>
        </div>

    </div>
    <div class="my-3">
        <div class="divider"></div>
    </div>
    <div id="templates" class="templatesContainer position-relative w-100 h-100">
        <div>
            Selected
        </div>
        <div class="w-100 dropbox" defaultEls="{{ $post->description }}">
            <i class="ri-loader-fill loader"></i>
        </div>
    </div>
</div>
