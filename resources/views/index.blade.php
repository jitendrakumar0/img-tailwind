<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--
        0 ,00000, .000000   .000000 0     .0000. 0000b,    0    0       0 db   0 d0000 .0000. 00000 d000b d000b  0    0
        0 0  0  0 0  ,,,,   0  ,,,, 0     0    0 0 ___)   0 0   0       0 0 0  0 0     0    0   0   0     0      0    0
        0 0  0  0 0     0   0     0 0     0    0 0    )  0   0  0       0 0  0 0 0"""" 0    0   0   0"""" 0      0""""0
        0 0  0  0 "000000   "000000 00000 '0000' 0000d' 0"""""0 d0000   0 0   db 0     '0000'   0   d000b d000b  0    0
        -->
    <head>
        <script type="application/ld+json">{
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
        </script>
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
        <!-- Twitter Meta -->
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
        <meta name="msapplication-config" content="{{asset('/public/assets/img/logos/browserconfig.xml')}}">
        <meta name="theme-color" content="#1a73e9">

        @stack('meta')
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @stack('styles')
    </head>
    <body>
        @yield('content')
        @stack('scripts')
    </body>
</html>