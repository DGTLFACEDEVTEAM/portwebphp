@php
    $translation = [
        'en' => [
            'cookieConstentTitle' => 'We use Cookies',
            'cookieConstentDesc' => ' We use our own and third-party cookies to personalize content and to
                analyze web traffic. Read more about cookies',
            'cookieConstentAccept' => 'Accept All Cookies',
            'cookieConstentManage' => 'Manage Cookie Preferences',
            'cookieHeader' => 'Manage Cookie Preferences',
            'cookieDesktop' => [
                'cookieBtn' => ['Cookies', 'Strictly Necessary', 'Performance', 'Functional', 'Targeting'],
                'cookieRightT' => [
                    [
                        'title' => 'Cookie Settings',
                        'desc' => 'When you visit any of our websites, it may store or retrieve information on your browser, mostly in the form of cookies. This information might be about you, your preferences or your device and is mostly used to make the site work as you expect it to. The information does not usually directly identify you, but it can give you a more personalized web experience. Because we respect your right to privacy, you can choose not to allow some types of cookies. Click on the different category headings to find out more and manage your preferences. Please note, blocking some types of cookies may impact your experience of the site and the services we are able to offer.',
                        'switch' => 'None',
                        'css' => 'default',
                    ],
                    [
                        'title' => 'Strictly Necessary',
                        'desc' => 'These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in or filling in forms. These cookies do not store any personally identifiable information.',
                        'switch' => 'Disable',
                        'css' => 'necessary',
                    ],
                    [
                        'title' => 'Performance Cookies',
                        'desc' => 'These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site, which helps us optimize your experience. All information these cookies collect is aggregated and therefore anonymous. If you do not allow these cookies we will not be able to use your data in this way.',
                        'switch' => 'Active',
                        'css' => 'performance',
                    ],
                    [
                        'title' => 'Functional Cookies',
                        'desc' => 'These cookies enable the website to provide enhanced functionality and personalization. They may be set by us or by third party providers whose services we have added to our pages. If you do not allow these cookies then some or all of these services may not function properly.',
                        'switch' => 'Active',
                        'css' => 'functional',
                    ],
                    [
                        'title' => 'Targeting Cookies',
                        'desc' => 'These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites. They do not store directly personal information, but are based on uniquely identifying your browser and internet device. If you do not allow these cookies, you will experience less targeted advertising.',
                        'switch' => 'Active',
                        'css' => 'targeting',
                    ],
                ],
                'cookieRightB' => [
                    [
                        'btnText' => 'Confirm My Choices',
                        'btnCss' => 'ccam',
                    ],
                    [
                        'btnText' => 'Accept All Cookies',
                        'btnCss' => 'ccaa',
                    ],
                ],
            ],
            'cookieMobile' => [
                'cookieAccs' => [
                    [
                        'title' => 'Cookie Settings',
                        'desc' => 'When you visit any of our websites, it may store or retrieve information on your browser, mostly in the form of cookies. This information might be about you, your preferences or your device and is mostly used to make the site work as you expect it to. The information does not usually directly identify you, but it can give you a more personalized web experience. Because we respect your right to privacy, you can choose not to allow some types of cookies. Click on the different category headings to find out more and manage your preferences. Please note, blocking some types of cookies may impact your experience of the site and the services we are able to offer.',
                        'switch' => 'None',
                        'css' => 'default',
                    ],
                    [
                        'title' => 'Strictly Necessary',
                        'desc' => 'These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in or filling in forms. These cookies do not store any personally identifiable information.',
                        'switch' => 'Disable',
                        'css' => 'necessary',
                    ],
                    [
                        'title' => 'Performance Cookies',
                        'desc' => 'These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site, which helps us optimize your experience. All information these cookies collect is aggregated and therefore anonymous. If you do not allow these cookies we will not be able to use your data in this way.',
                        'switch' => 'Active',
                        'css' => 'performance',
                    ],
                    [
                        'title' => 'Functional Cookies',
                        'desc' => 'These cookies enable the website to provide enhanced functionality and personalization. They may be set by us or by third party providers whose services we have added to our pages. If you do not allow these cookies then some or all of these services may not function properly.',
                        'switch' => 'Active',
                        'css' => 'functional',
                    ],
                    [
                        'title' => 'Targeting Cookies',
                        'desc' => 'These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites. They do not store directly personal information, but are based on uniquely identifying your browser and internet device. If you do not allow these cookies, you will experience less targeted advertising.',
                        'switch' => 'Active',
                        'css' => 'targeting',
                    ],
                ],
                'cookieActionBtns' => [
                    [
                        'btnText' => 'Confirm My Choices',
                        'btnCss' => 'ccam',
                    ],
                    [
                        'btnText' => 'Accept All Cookies',
                        'btnCss' => 'ccaa',
                    ],
                ],
            ],
        ],
        'ru' => [
            'h1' => 'ДОБРО ПОЖАЛОВАТЬ В',
        ],
        'de' => [
            'h1' => 'Willkommen Im',
        ],
        'tr' => [
            'h1' => 'Hoş Geldiniz',
        ],
    ];
    // '' => '',
@endphp

<div class="cookieConstentContainer">
    <div class="cookieConstentWrapper">
        <div class="cookieConstentInformation">
            <div class="cookieConstentTitle">{!! $translation[$lang]['cookieConstentTitle'] !!}</div>
            <div class="cookieConstentDesc">
                {!! $translation[$lang]['cookieConstentDesc'] !!}
            </div>
        </div>
        <div class="cookieConstentActions">
            <button class="cookieConstentAccept  cookieA">{!! $translation[$lang]['cookieConstentAccept'] !!}</button>
            <button class="cookieConstentManage" data-bs-toggle="modal"
                data-bs-target="#customizeCookie">{!! $translation[$lang]['cookieConstentManage'] !!}</button>

        </div>
    </div>
</div>
<div class="cookieBackdrop"></div>
<div class="modal fade" id="customizeCookie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="customizeCookie" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modalCookieInner">
        <div class="modal-content cookieModal">

            <div class="modal-body">
                <div class="cookieHeader">
                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">{!! $translation[$lang]['cookieHeader'] !!}</h5>
                    <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class=cookieBodyDesktop>
                    <div class="cookieLeft">
                        @foreach ($translation[$lang]['cookieDesktop']['cookieBtn'] as $key => $item)
                            <button type="button"
                                class="cookieBtn {{ $key == 0 ? 'active' : '' }}">{{ $item }}</button>
                        @endforeach
                    </div>
                    <div class="cookieRight">
                        @foreach ($translation[$lang]['cookieDesktop']['cookieRightT'] as $key => $item)
                            <div class="cookieRightT {{ $item['css'] }}  {{ $key !== 0 ? 'hide' : '' }}">
                                <div>
                                    <h2>{{ $item['title'] }}</h2>
                                    <p>{{ $item['desc'] }}</p>
                                </div>
                                @if ($item['switch'] !== 'None')
                                    <div class="form-check form-switch switchContainer disabledC">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                        <input class="form-check-input cookieSwitch" role="switch" type="checkbox"
                                            id="flexSwitchCheckChecked" checked
                                            {{ $item['switch'] == 'Disable' ? 'disabled' : '' }}>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                        <div class="cookieRightB">
                            {{-- loop $translation[lang] cookieDesktop .cookieRightB --}}
                            @foreach ($translation[$lang]['cookieDesktop']['cookieRightB'] as $key => $item)
                                <button type="button"
                                    class="actionBtns cookieA {{ $item['btnCss'] }}">{{ $item['btnText'] }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="cookieBodyMobile p-3">

                    <div>
                        @foreach ($translation[$lang]['cookieMobile']['cookieAccs'] as $key => $item)
                            <div class="cookieMobileOptions">
                                <div class="cookieDetailAccorHeader">
                                    <div class="privacy-title">{{ $item['title'] }}</div>
                                    <svg class='mr-1 ' width='20' height='20'>
                                        <use
                                            xlink:href='{{ asset('assets/admin/fonts/remixicon.symbol.svg') }}#ri-arrow-down-s-line'>
                                        </use>
                                    </svg>
                                </div>
                                <div class="cookieDetail cdhidden">
                                    <p>
                                        {{ $item['desc'] }}
                                    </p>
                                    @if ($item['switch'] !== 'None')
                                        <div class="form-check form-switch switchContainer disabledC">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                            <input class="form-check-input cookieSwitch" role="switch" type="checkbox"
                                                id="flexSwitchCheckChecked" checked
                                                {{ $item['switch'] == 'Disable' ? 'disabled' : '' }}>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="cookieMobileActions">
                        {{-- loop $translation[lang] cookieMobile .cookieActionBtns --}}
                        @foreach ($translation[$lang]['cookieMobile']['cookieActionBtns'] as $key => $item)
                            <button type="button"
                                class="actionBtns cookieA {{ $item['btnCss'] }}">{{ $item['btnText'] }}</button>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- ri-arrow-down-circle-fill --}}
    <style>
        .cookieDetail {
            overflow: hidden;
            transition: all .3s ease-out;
        }

        .rotate180 {
            transform: rotate(180deg);
        }

        .cdhidden {
            height: 0;
            opacity: 0;
        }

        /* cookieDetail has but not has cdhidden */
        .cookieDetail:not(.cdhidden) {
            margin: 20px 0;
        }


        .cookieDetailAccorHeader {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cookieMobileOptions {
            border-radius: 8px;
            background-color: #deeaec;
            width: 100%;
            gap: 20px;
            padding: 20px;
            flex-direction: column;
            margin: 20px 0;
        }

        @media (max-width: 991px) {
            .cookieMobileOptions {
                padding-right: 20px;
            }
        }

        .privacy-title {
            color: var(--Gray, #233038);
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 16px;
            line-height: 20px;
            font-family: Montserrat, sans-serif;
        }

        .privacy-image {
            aspect-ratio: 1.5;
            object-fit: contain;
            object-position: center;
            width: 15px;
            stroke-width: 4px;
            stroke: var(--Gray, #233038);
            overflow: hidden;
            align-self: start;
            margin-top: 4px;
            max-width: 100%;
        }
    </style>
    <style>
        /* to max  576px */

        .cookieBackdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 998;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }


        .cookieBodyDesktop {
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


        @media (max-width: 576px) {
            .modalCookieInner {
                margin: 0 !important;
                border-radius: 0 !important;
            }

            .form-check-input {
                background-color: #deeaec !important;
            }

            .cookieBodyDesktop {
                display: none;
            }

            .cookieModal {
                height: 100vh !important;
                border: none !important;
                border-radius: 0 !important;
            }

            .cookieHeader {
                background: #233038 !important;
                color: #fff !important;
                font-size: 1rem !important;
                padding-bottom: 24px !important;
                align-items: center !important;
            }

            .cookieHeader h5 {
                font-size: 1rem !important;
                order: 2;
            }

            .cookieHeader button {
                font-size: 1rem !important;
                order: 1;
                margin-right: 0 !important;
                margin-left: .5rem !important;
                color: #fff !important;
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            }

            .modal-body {
                padding: 0 !important;
                display: flex !important;
                flex-direction: column !important;
                overflow-y: scroll !important;
            }

            .cookieBodyMobile {
                display: flex !important;
                flex-direction: column !important;
                flex: 1 !important;
                padding: 0 20px !important;
                justify-content: space-between !important;
            }
        }

        @media (min-width: 576px) {
            .cookieBodyMobile {
                display: none;
            }

        }

        /* (min-width: 576px)  between max-width 992 */
        @media (min-width: 576px) and (max-width: 992px) {
            .modal-dialog {
                max-width: none !important;
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

        // cookieDetailAccorHeader on click change next sibling height 
        $(document).ready(function() {

            // stop scrolling on html
            document.body.style.overflow = 'hidden';




            $('.cookieDetailAccorHeader').on('click', function() {

                $(this).children('svg').toggleClass('rotate180');
                let cookieDetail = $(this).next();
                console.log(cookieDetail);
                const isHidden = cookieDetail.hasClass('cdhidden');

                if (isHidden) {
                    // Calculate the actual height of the content
                    let height = cookieDetail.prop('scrollHeight');
                    console.log(height);
                    // height += 50;


                    // Set the height to the actual height
                    cookieDetail.animate({
                        height: height,
                        opacity: 1,
                    }, 300);

                    // Remove the 'cdhidden' class
                    cookieDetail.removeClass('cdhidden');
                } else {
                    // Set the height back to 0
                    cookieDetail.animate({
                        height: 0,
                        opacity: 0
                    }, 300);

                    // Add the 'cdhidden' class
                    cookieDetail.addClass('cdhidden');
                }
            });

            // actionBtns on click close modal
            $('.cookieA').on('click', function() {
                $('#customizeCookie').modal('hide');
                $('.cookieConstentContainer').hide();
                document.body.style.overflow = 'auto';
                // cookieBackdrop
                $('.cookieBackdrop').hide();
            });
        });
    </script>

</div>
