<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--
        0 ,00000, .000000   .000000 0     .0000. 0000b,    0    0       0 db   0 d0000 .0000. 00000 d000b d000b  0    0
        0 0  0  0 0  ,,,,   0  ,,,, 0     0    0 0 ___)   0 0   0       0 0 0  0 0     0    0   0   0     0      0    0
        0 0  0  0 0     0   0     0 0     0    0 0    )  0   0  0       0 0  0 0 0"""" 0    0   0   0"""" 0      0""""0
        0 0  0  0 "000000   "000000 00000 '0000' 0000d' 0"""""0 d0000   0 0   db 0     '0000'   0   d000b d000b  0    0
        -->
    <head>
        {{-- <script type="application/ld+json">{
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "url": "https://www.imgglobalinfotech.com/",
            "name": "IMG GLOBAL INFOTECH"
            }   
        </script>
        <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "IMG GLOBAL INFOTECH",
            "logo": "https://www.imgglobalinfotech.com/public/assets/img/logos/logo.webp",
            "url": "https://www.imgglobalinfotech.com/",
            "sameAs": [
                "https://www.facebook.com/imgglobalinfotech",
                "https://twitter.com/imgglobal",
                "https://www.linkedin.com/company/imgglobalinfotechpltd",
                "https://www.instagram.com/imgglobalinfotech",
                "https://www.flickr.com/photos/imgglobalinfotech"
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-8058100200",
                "contactType": "Sales",
                "email": "info@imgglobalinfotech.com",
                "areaServed": "worldwide",
                "availableLanguage": "English"
            },
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "India",
                "addressLocality": "Jaipur",
                "addressRegion": "Rajasthan",
                "postalCode": "302021",
                "streetAddress": "1st Floor, Riddhi Siddhi Tower, Nursery Cir, Acharya Vinoba Bhave Nagar, B Block, Vaishali Nagar" 
                }
            }
        </script> --}}
        <!-- Required meta tags -->
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5 shrink-to-fit=no" />
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="msvalidate.01" content="65C543B0DF8A28C8FBBD327A71665359" />
        <meta name="web-author" content="IMG Global Infotech" />
        <meta name="googlebot" content="all">
        <meta name="revisit-after" content="3 days">
        <meta name="copyright" content="IMG Global Infotech">
        <meta name="language" content="English">
        <meta name="reply-to" content="info@imgglobalinfotech.com">
        <meta name="distribution" content="Global" />
        <meta name="rating" content="General" />
        {{-- <!-- Twitter Meta -->
        <meta name="twitter:site" content="@imgglobal">
        <meta name="twitter:creator" content="@imgglobal">
        <meta name="twitter:card" content="summary">
        <!-- Facebook Meta -->
        <meta property="fb:app_id" content="0" />
        <meta property="og:type" content="website">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">
        <meta name="google-site-verification" content="bGEWH2c3JpZuiXFhSZGexm_7YdIzsPNhH2w7k6Buk-Q" />
        <meta name="twitter:image" content="{{asset('/public/assets/img/logos/android-chrome-192x192.png')}}">
        <meta property="og:image" content="{{asset('/public/assets/img/logos/android-chrome-192x192.png')}}">
        <meta property="og:image:secure_url" content="{{asset('/public/assets/img/logos/android-chrome-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/public/assets/img/logos/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/public/assets/img/logos/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/public/assets/img/logos/android-chrome-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/public/assets/img/logos/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('/public/assets/img/logos/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('/public/assets/img/logos/safari-pinned-tab.svg')}}" color="#1a73e9">
        <link rel="shortcut icon" href="{{asset('/public/assets/img/logos/favicon.ico')}}">
        <meta name="msapplication-TileColor" content="#1a73e9">
        <meta name="msapplication-TileImage" content="{{asset('/public/assets/img/logos/mstile-144x144.png')}}">
        <meta name="msapplication-config" content="{{asset('/public/assets/img/logos/browserconfig.xml')}}"> --}}
        <meta name="theme-color" content="#1a73e9">

        @stack('meta')
        
        <link rel="stylesheet" href="{{ asset('./build/assets/app-a00625de.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('./css/app.css') }}"> --}}
        @stack('styles')
    </head>
    <body>
        @include('components.header.header')
        @yield('content')
        @include('components.footer.footer')
        <script src="{{ asset('./build/assets/app-749d591c.js') }}"></script>
        {{-- <script src="{{ asset('./js/app.js') }}"></script> --}}
        @stack('scripts')
        <div 
            class='
            cursor 
            fixed 
            rounded-full 
            -translate-x-1/2 
            -translate-y-1/2 
            pointer-events-none 
            -left-[100px] 
            top-1/2 
            border-[3px] 
            border-white 
            w-0 
            h-0 
            z-[1000] 
            group-[]/preload:border-0
            transition
            ' 
            id="cursor"
        ></div>
        <div 
            class='
            cursor2 
            fixed 
            rounded-full 
            -translate-x-1/2 
            -translate-y-1/2 
            pointer-events-none 
            -left-[100px] 
            top-1/2 
            border-[3px] 
            border-white 
            shadow-2xl 
            shadow-white/60 
            z-[1000] 
            w-9 
            h-9
            transition
            [box-shadow:_0_0_12px_rgba(255,255,255,0.3)]

            group-[.hover]:scale-[2]
            group-[.hover]:-translate-x-1/2
            group-[.hover]:-translate-y-1/2
            group-[.hover]:border-0
            group-[.hover]:bg-white/10
            group-[.hover]:[box-shadow:_0_0_12px_rgba(255,255,255,0.3)]

            group-[]/cyan:border-[3px]
            group-[]/cyan:border-solid
            group-[]/cyan:border-cyan-600
            group-[]/cyan:[box-shadow:0_0_14px_rgba(155,89,182,0.6)]


            group-[.hover]/cyan:bg-cyan-600/10
            group-[.hover]/cyan:border-0
            group-[.hover]/cyan:[box-shadow:0_0_14px_rgba(155,89,182,0.3)]

            group-[]/preload:border
            group-[]/preload:border-solid
            group-[]/preload:border-white
            group-[]/preload:[box-shadow:_0_0_12px_rgba(255,255,255,0.6)]
            group-[]/preload:scale-[2]
            group-[]/preload:-translate-x-1/2
            group-[]/preload:-translate-y-1/2
            group-[]/preload:backdrop-sepia

            group-[.hover]/preload:bg-transparent
            group-[.hover]/preload:bg-no-repeat
            group-[.hover]/preload:drop-shadow-lg
            group-[.hover]/preload:[background-image:url(https://ivang-design.com/svg-load/rings.svg)]
            group-[.hover]/preload:[background-size:55px_55px]
            group-[.hover]/preload:[background-position:center_center]
            group-[.hover]/preload:border-0
            group-[.hover]/preload:[box-shadow:0_0_14px_rgba(255,255,255,0)]
            group-[.hover]/preload:opacity-50
            ' 
            id="cursor2"
        ></div>
    </body>
</html>