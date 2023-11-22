<!DOCTYPE html>
<html lang="RU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DGTLFACE IT TEAM">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PORT Nature Luxury Resort Hotel & Spa')</title>
    <meta name="description" content="@yield('description')">
    <!-- Favicon  -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <!-- Analystic  -->
    {!! \App\Http\Helpers\CanonicalHelper::canonicalUrl(url()->current()) !!}
    <!-- Analystic End -->

    <!-- Page Title -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aside.css') }}" />
    <link rel="preload" href="{{ asset('assets/frontend/images/logo-port-small.svg') }}" as="image" type="image/svg+xml" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/swiper-bundle.min.css') }}" />
    <!-- Montserrat, Lora Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Lora:wght@400;500&family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Lora:ital,wght@1,400;1,500&family=Space+Grotesk:wght@300;700&display=swap" rel="stylesheet">

    @if (Request::is('blog-stranica/*'))
        {{-- <link rel="stylesheet" href="{{ asset('assets/frontend/css/post-test.css') }}"/> --}}
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/blogDetail.css') }}" />
    @endif

    @yield('css-imports')



    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TZ53DS5');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '721299109355968');
        fbq('track', 'PageView');
    </script>
    <!-- End Meta Pixel Code -->
    <style>
        .footerHeader {
            text-transform: none !important
        }

        @media screen and (max-width: 1200px) {
            .fixedBookNow {
                font-size: 11px !important
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ53DS5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('frontend.ru.layouts.header')

    @yield('content')

    @include('frontend.ru.layouts.footer')
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/flatpickr.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/floating-menu.css') }}" />
    {{-- Common CSS File --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/footer.css') }}" media="print" onload="this.media='all'" />

    <!-- Additional imports -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/contact.css') }}" media="print" onload="this.media='all'" />


    <!-- KVKK Cookies -->
    <script src="{{ asset('assets/frontend/js/glowCookies.min.js') }}"></script>
    <script>
        glowCookies.start('ru', {
            style: 1,
            analytics: 'G-FH87DE17XF',
            facebookPixel: '990955817632355',
            hideAfterClick: true,
            position: 'right',
            policyLink: 'https://portnature.com.tr/politika-dannih'
        });
    </script>
    <!--  JAVASCRIPTS  -->
    <script src="{{ asset('assets/frontend/libs/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/libs/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/libs/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/common.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/libs/js/lazysizes.min.js') }}" defer></script>

    @yield('javascript-imports')


    <script src="{{ asset('assets/frontend/js/floating-menu.js') }}" defer></script>


    <script type='text/javascript'>
        // Form submission handler
        if ($('#contactForm2').length) {
            document.getElementById("contactForm2").addEventListener("submit", function(event) {
                // Check if all required fields are filled out
                var name = document.forms["contactForm"]["name"].value;
                var email = document.forms["contactForm"]["email"].value;
                var message = document.forms["contactForm"]["message"].value;
                if (name == "" || email == "" || message == "") {
                    // Display alert message if any required fields are empty
                    event.preventDefault(); // Prevent form from submitting
                    document.getElementById("alert").classList.remove("d-none");
                }
            });
        }
    </script>

    <!-- ChatBox Script  -->
    <script>
        (function() {
            var APP_UUID = '6f018acb-a187-48be-a07e-a301d318af36';
            var BASE_COLOR = '#075695';
            var CONTAINER_ELEMENT = 'iframe';

            var process = void 0;
            var _typeofThat = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(o) {
                return typeof o
            } : function(o) {
                return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ?
                    "symbol" : typeof o
            };

            function insertLivechatJS() {
                var e = document.createElement("script");
                e.type = "text/javascript", e.async = "true", e.src = (process && process.env && process.env.DOMAIN ||
                    "https://livechat.connexease.com") + "/l/embed-js/livechat.js";
                var t = document.createElement("link");
                t.rel = "stylesheet", t.href = (process && process.env && process.env.DOMAIN ||
                    "https://portnature.com.tr") + "/assets/frontend/css/chatbox.css";
                var n = document.getElementsByTagName("script")[0];
                document.head.appendChild(t), n.parentNode.insertBefore(e, n)
            }
            window.attachEvent ? window.attachEvent("onload", insertLivechatJS) : window.addEventListener("load",
                insertLivechatJS, !1), window.initLivechat = function() {
                "object" === _typeofThat(window.LiveChat) && window.LiveChat.boot({
                    uuid: APP_UUID,
                    baseColor: BASE_COLOR,
                    containerElement: CONTAINER_ELEMENT
                })
            };
        })();
    </script>
    <!-- ChatBox Script END -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(92210931, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
        <script>
            if (pageHasContactForm) {
                let acceptTermsCheckbox = document.querySelectorAll('.acceptTermsCheckbox');
                let contactForms = document.querySelectorAll('form[name="contactForm"]')
    
                acceptTermsCheckbox.forEach(function(item) {
                    // remove event listener if already added
                    item.removeEventListener('change', function() {});
                    item.addEventListener('change', function() {
                        if (this.checked) {
                            // find the submit button on same form and enable it
                            this.closest('form').querySelector('input[type="submit"]').disabled = false;
                        } else {
                            // find the submit button on same form and disable it
                            this.closest('form').querySelector('input[type="submit"]').disabled = true;
                        }
                    });
                });
    
    
    
                contactForms.forEach(function(item) {
                    // remove event listener if already added
                    item.removeEventListener('submit', function() {});
                    item.addEventListener('submit', function(e) {
                        e.preventDefault();
                        let name = document.getElementById('name');
                        let email = document.getElementById('email');
                        let message = document.getElementById('message');
                        let alert = document.getElementById('alert');
    
                        if (name.value == '' || email.value == '' || message.value == '') {
                            alert.classList.remove('d-none');
                        } else {
                            this.submit();
                        }
                    });
                });
            }
        </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/92210931" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</body>

</html>
