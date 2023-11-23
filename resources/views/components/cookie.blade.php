<div class="cookieConstentContainer">
    <div class="cookieConstentWrapper">
        <div class="cookieConstentInformation">
            <div class="cookieConstentTitle">We use Cookies</div>
            <div class="cookieConstentDesc">
                We use our own and third-party cookies to personalize content and to
                analyze web traffic. Read more about cookies
            </div>
        </div>
        <div class="cookieConstentActions">
            <button class="cookieConstentAccept">Accept All Cookies</button>
            <button class="cookieConstentManage" data-bs-toggle="modal" data-bs-target="#customizeCookie">Manage Cookie
                Preferences</button>

        </div>
    </div>
</div>
<div class="modal fade" id="customizeCookie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="customizeCookie" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content cookieModal">

            <div class="modal-body">
                <div class="cookieHeader">
                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Manage
                        Cookie Preferences</h5>
                    <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class=cookieBody>
                    <div class="cookieLeft"><button type="button" class="cookieBtn active">Cookies</button>
                        <button type="button" class="cookieBtn">Strictly Necessary</button>
                        <button type="button" class="cookieBtn">Performance</button>
                        <button type="button" class="cookieBtn">Functional</button>
                        <button type="button" class="cookieBtn">Targeting</button>
                    </div>
                    <div class="cookieRight">
                        <div class="cookieRightT default">
                            <h2>Cookie Settings</h2>
                            <p>
                                When you visit any of our websites, it may store or retrieve information on your
                                browser, mostly in the form of cookies. This information might be about you, your
                                preferences or your device and is mostly used to make the site work as you expect it to.
                                The information does not usually directly identify you, but it can give you a more
                                personalized web experience. Because we respect your right to privacy, you can choose
                                not to allow some types of cookies. Click on the different category headings to find out
                                more and manage your preferences. Please note, blocking some types of cookies may impact
                                your experience of the site and the services we are able to offer.
                            </p>

                        </div>
                        <div class="cookieRightT necessary hide">
                            <div>
                                <h2>Strictly Necessary</h2>
                                <p>
                                    These cookies allow us to count visits and traffic sources so we can measure and
                                    improve
                                    the performance of our site. They help us to know which pages are the most and least
                                    popular and see how visitors move around the site, which helps us optimize your
                                    experience. All information these cookies collect is aggregated and therefore
                                    anonymous.
                                    If you do not allow these cookies we will not be able to use your data in this way.
                                </p>
                            </div>
                            <div class="form-check form-switch switchContainer disabledC">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                <input class="form-check-input cookieSwitch" role="switch" type="checkbox"
                                    id="flexSwitchCheckChecked" checked disabled>
                            </div>
                        </div>
                        <div class="cookieRightT performance hide">
                            <div>
                                <h2>Performance Cookies </h2>
                                <p>
                                    These cookies allow us to count visits and traffic sources so we can measure and
                                    improve
                                    the performance of our site. They help us to know which pages are the most and least
                                    popular and see how visitors move around the site, which helps us optimize your
                                    experience. All information these cookies collect is aggregated and therefore
                                    anonymous.
                                    If you do not allow these cookies we will not be able to use your data in this way.
                                </p>
                            </div>
                            <div class="form-check form-switch switchContainer disabledC">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                <input class="form-check-input cookieSwitch" role="switch" type="checkbox"
                                    id="flexSwitchCheckChecked" checked>
                            </div>
                        </div>
                        <div class="cookieRightT functional hide">
                            <div>
                                <h2>Functional Cookies </h2>
                                <p>
                                    These cookies enable the website to provide enhanced functionality and
                                    personalization.
                                    They may be set by us or by third party providers whose services we have added to
                                    our
                                    pages. If you do not allow these cookies then some or all of these services may not
                                    function properly.
                                </p>
                            </div>
                            <div class="form-check form-switch switchContainer disabledC">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                <input class="form-check-input cookieSwitch" role="switch" type="checkbox"
                                    id="flexSwitchCheckChecked" checked>
                            </div>
                        </div>
                        <div class="cookieRightT functional hide">
                            <div>
                                <h2>Targeting Cookies </h2>
                                <p>
                                    These cookies enable the website to provide enhanced functionality and
                                    personalization.
                                    They may be set by us or by third party providers whose services we have added to
                                    our
                                    pages. If you do not allow these cookies then some or all of these services may not
                                    function properly.
                                </p>
                            </div>
                            <div class="form-check form-switch switchContainer disabledC">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                <input class="form-check-input cookieSwitch" role="switch" type="checkbox"
                                    id="flexSwitchCheckChecked" checked>
                            </div>
                        </div>
                        <div class="cookieRightB">
                            <button type="button" class="actionBtns ccam">Confirm My Choices</button>
                            <button type="button" class="actionBtns ccaa">Accept All Cookies</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<style>
    .cookieBody {
        display: flex;
        justify-content: space-between;
        margin-top: 42px;
        padding-bottom: 24px;
    }

    .cookieLeft {
        /* flex: 1; */

        width: 300px;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }

    .cookieRight {
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .ccam {
        border-radius: 8px;
        background: #00E49C;
        color: #fff;
    }

    .ccaa {
        border-radius: 8px;
        background: #233038;
        color: #fff;
    }

    .hide {
        display: none !important;
    }




    .cookieRightT {
        flex: 1;
        /* Optional: Add background color for visualization */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-bottom: 15px;
    }

    .cookieRightT h2 {
        color: var(--Gray, #233038);
        font-family: Montserrat;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .cookieRightT p {
        color: var(--Gray, #233038);
        font-family: Montserrat;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
    }

    .cookieRightB {
        display: flex;
        align-items: center;
        /* Optional: Add background color for visualization */
    }

    .switchContainer {
        padding: 0 !important;
        display: flex !important;
        justify-content: end !important;
        color: #73CDB1;
        align-items: center;
    }

    .switchContainer label {
        font-size: 24px !important;
    }

    .cookieSwitch {
        float: none !important;
        margin: 0 !important;
        /* margin-top: 0.25em !important; */
        margin-left: 1rem !important;
        width: 3rem !important;
        height: 1.5rem !important;
    }

    .form-check-input:checked {
        background-color: #73CDB1 !important;
        border: none !important;
    }

    .form-check-input:checked:focus {
        box-shadow: none !important;
        /* border: none !important; */
        border-color: #73CDB1 !important;
        outline: 0 !important;
        /* box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, .25); */
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e") !important;
    }

    /* unchacked focus */
    .form-check-input:focus {
        box-shadow: none !important;
        /* border: none !important; */
        border-color: #73CDB1 !important;
        outline: 0 !important;
        /* box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, .25); */
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e") !important;
    }



    .cookieOptions {
        margin: 20px;

    }

    .cookieBtn {
        width: 250px;
        margin: 10px 5px;
        padding: 15px 0 !important;
        border: none;
        border-radius: 8px;
        background-color: #fff;
        color: #233038;
        font: 700 16px/20px Montserrat, sans-serif;
        outline: none;
    }

    .actionBtns {
        width: 100%;
        margin: 10px 5px;
        padding: 15px 0 !important;
        border: none;
        border-radius: 8px;
        font: 700 16px/20px Montserrat, sans-serif;
        outline: none;
    }

    .cookieBtn.active {
        background-color: #233038;
        color: #fff;
    }

    .cookieHeader {
        display: flex;
        padding-top: 24px !important;
        border-bottom: none !important;
    }

    .cookieHeader h5 {
        border: none;
        font: 700 16px/20px Montserrat, sans-serif;
        font-size: 25px
    }

    .cookieHeader button {
        font-size: 16px;
        font-weight: 600;
    }

    .cookieConstentContainer {
        /* mix-blend-mode: hard-light; */
        /* backdrop-filter: blur(10px); */
        /* background-color: rgba(255, 255, 255, 0.95); */
        background-color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: fixed;
        bottom: 0;
        z-index: 999;
        width: 100%;


    }

    .cookieConstentWrapper {
        display: flex;
        width: 100%;
        max-width: 1536px;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin: 18px 20px;
        padding: 0 20px;
    }

    @media (max-width: 991px) {
        .cookieConstentWrapper {
            max-width: 100%;
            flex-wrap: wrap;
        }
    }



    .cookieConstentInformation {
        display: flex;
        flex-grow: 1;
        flex-basis: 0%;
        flex-direction: column;
        margin: auto 0;
    }

    @media (max-width: 991px) {
        .cookieConstentInformation {
            max-width: 100%;
        }
    }

    .cookieConstentTitle {
        color: var(--Gray, #233038);
        text-align: center;
        white-space: nowrap;
        font: 700 16px/20px Montserrat, sans-serif;
    }

    @media (max-width: 991px) {
        .cookieConstentTitle {
            max-width: 100%;
            white-space: initial;
        }
    }

    .cookieConstentDesc {
        color: #233038;
        margin-top: 15px;
        white-space: nowrap;
        font: 500 12px/15px Montserrat, sans-serif;
    }

    @media (max-width: 991px) {
        .cookieConstentDesc {
            max-width: 100%;
            white-space: initial;
        }
    }

    .cookieConstentActions {
        align-self: stretch;
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }

    @media (max-width: 991px) {
        .cookieConstentActions {
            max-width: 100%;
            flex-wrap: wrap;
        }
    }

    .cookieConstentAccept {
        color: var(--neutral-white, #fff);
        text-align: center;

        white-space: nowrap;
        border-radius: 8px;
        background-color: #233038;
        flex-grow: 1;
        align-items: center;
        padding: 22px 20px;
        font: 700 16px/20px Montserrat, sans-serif;
    }

    @media (max-width: 991px) {
        .cookieConstentAccept {
            white-space: initial;
        }
    }

    .cookieConstentManage {
        color: var(--Gray, #233038);
        text-align: center;
        leading-trim: both;
        text-edge: cap;
        white-space: nowrap;
        border-radius: 8px;
        border: 2px solid #233038;
        flex-grow: 1;
        align-items: center;
        padding: 22px 20px;
        font: 700 16px/20px Montserrat, sans-serif;
    }

    .cookieConstentAccept,
    cookieConstentManage {
        min-width: 300px;
    }

    @media (max-width: 991px) {
        .cookieConstentManage {
            white-space: initial;
        }
    }

    @media (max-width: 1350px) {
        .cookieConstentWrapper {
            flex-direction: column
        }

        .cookieConstentAccept,
        .cookieConstentManage {
            width: 50%
        }

        .cookieConstentTitle,
        .cookieConstentDesc {
            font-size: 16px;
        }
    }
</style>

<script>
    let activeCookieTab = 0;

    $('.cookieBtn').click(function() {
        $('.cookieBtn').removeClass('active');
        $(this).addClass('active');
        activeCookieTab = $(this).index();
        $('.cookieRightT').addClass('hide');
        $('.cookieRightT').eq(activeCookieTab).removeClass('hide');
    });
</script>
