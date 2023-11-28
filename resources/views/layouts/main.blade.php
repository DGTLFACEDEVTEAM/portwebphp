<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">

    <meta name="author" content="DGTLFACE IT TEAM">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'PORT Nature Luxury Resort Hotel & Spa')</title>
    <meta name="description" content="@yield('description')">

    {!! \App\Http\Helpers\CanonicalHelper::canonicalUrl(url()->current()) !!}

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aside.css') }}" />
    <link rel="preload" href="{{ asset('assets/frontend/images/logo-port-small.svg') }}" as="image"
        type="image/svg+xml" />

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Lora:wght@400;500&family=Montserrat:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Lora:ital,wght@1,400;1,500&family=Space+Grotesk:wght@300;700&display=swap"
        rel="stylesheet">

    <link rel="preload" as="style" href="{{ asset('assets/frontend/libs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/bootstrap.min.css') }}" media="print"
        onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/swiper-bundle-11.min.css') }}" />

    @if (Request::is('blog-page/*') ||
            Request::is('blog-seite/*') ||
            Request::is('blog-stranica/*') ||
            Request::is('blog-sayfasi/*'))
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/blogDetail.css') }}" />
    @endif

    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/flatpickr.min.css') }}" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}" media="print"
        onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/floating-menu.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/footer.css') }}" media="print"
        onload="this.media='all'" />

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/contact.css') }}" media="print"
        onload="this.media='all'" />

    @yield('css-imports')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Tag Manager --}}
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

    {{-- Meta Pixel Code --}}
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

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe title="googletagmanager" src="https://www.googletagmanager.com/ns.html?id=GTM-TZ53DS5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('frontend.' . $lang . '.layouts.header')

    @yield('content')

    @include('frontend.' . $lang . '.layouts.footer')

    {{-- JAVASCRIPTS --}}
    <script src="{{ asset('assets/frontend/libs/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/libs/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/frontend/libs/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/swiper-bundle-11.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/lazysizes.min.js') }}" defer></script>

    @yield('javascript-imports')

    <noscript>
        <div><img src="https://mc.yandex.ru/watch/92210931" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>

    {{-- @php
        $isClientAcceptCookie = isset($_COOKIE['cookieConsent']) ? $_COOKIE['cookieConsent'] : 'false';
    @endphp
    @if ($isClientAcceptCookie == 'true')
    @else
        @include('components.cookie', ['lang' => $lang])
    @endif --}}

    <!-- End-->
</body>

</html>
