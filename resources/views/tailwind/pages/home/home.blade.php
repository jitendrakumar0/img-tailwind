@extends('tailwind.index')
@push('meta')
<!--  Title -->
<title>IT Consulting Company | IT Consulting Services</title>
<!-- Required meta tags -->
<meta name="title" content="IT Consulting Company | IT Consulting Services">
<meta name="description" content=" IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">
<meta name="keywords" content="IT consulting company, IT consulting services, IT consultant, IT consulting firm, Hire IT consultant, IT company">

<!-- Twitter Meta -->
<meta name="twitter:title" content="IT Consulting Company | IT Consulting Services">
<meta name="twitter:description" content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

<!-- Facebook Meta -->
<meta property="og:url" content="https://www.imgglobalinfotech.com/">
<meta property="og:title" content="IT Consulting Company | IT Consulting Services">
<meta property="og:description" content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

<meta name="classification" content="web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app">
<link rel="canonical" href="https://www.imgglobalinfotech.com/">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<!-- Meta Pixel Code -->
{{-- <script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js?id=bcf48c0e6a9b13a1def329fd171dd333');
fbq('init', '640762284881184');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=640762284881184&ev=PageView&noscript=1"
/></noscript> --}}
<!-- End Meta Pixel Code -->
@endpush

@push('styles')
@endpush

@section('content')
<div class="hidden">
    <div>
        <h1>Web and Mobile App Development Company</h1>
    </div>
    <div>
        <h2>Awards & Recognitions</h2>
    </div>
    <div>
        <h2>Client Journeys to Success - Glimpse of Our Case Studies</h2>
    </div>
    <div>
        <h2>Take A Sneak Peak to Our Portfolio And Elevate Your Expectations!</h2>
        <div>
            <h4>EcoCosmo</h4>
            <h4>MyFab11 App </h4>
            <h4>I-KNOW</h4>
            <h4>Now Vue </h4>
            <h4>iPay</h4>
            <h4>Dentist Online</h4>
        </div>
    </div>
    <div>
        <h3>Let's turn your business idea into reality</h3>
        <h3>Wide Range of Industries Covered By Us!</h3>
        <h3>What Our Clients Have to Say?</h3>
    </div>
</div>

<div class="flex w-full pt-16 md:pt-20 lg:pt-32 overflow-hidden relative bg-slate-50 select-none max-h-[750px]">
    <div class="swiper heroSwiper md:min-h-[500px] h-[500px] md:h-[calc(100vh-80px)] lg:h-[calc(100vh-128px)] w-full relative !z-10" 
        data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 10,
            "autoplay": {"delay": 2500, "disableOnInteraction": false},
            "speed": 1500,
            "loop": true,
            "keyboard": {"enabled": true},
            "navigation": {"nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev"},
            "scrollbar": {"el": ".swiper-scrollbar", "hide": true},
            "thumbs": {"swiper": ".heroSwiperThumbs"},
            "breakpoints": {
                "320": {"centeredSlides": true, "slidesPerView": 1.2, "spaceBetween": 20},
                "480": {"centeredSlides": true, "slidesPerView": 1.2, "spaceBetween": 20},
                "640": {"centeredSlides": true, "slidesPerView": 1.2, "spaceBetween": 20},
                "1024": {"centeredSlides": false, "slidesPerView": 2.5, "spaceBetween": 40},
                "1350": {"slidesPerView": 2.5, "spaceBetween": 40}
            }
        }'
    >
        <div class="swiper-wrapper">
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative aspect-[860/460] overflow-hidden group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-yellow-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:bg-gradient-to-r before:from-yellow-950 before:via-yellow-900 before:to-yellow-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <img 
                        class="w-full h-full object-cover object-right absolute inset-0 -z-[1] rounded-2xl aspect-[860/460]"
                        loading="lazy"
                        width="860"
                        height="460"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 3000px) 3000px, (min-width: 1140px) 1140px, (min-width: 520px) 520px, (min-width: 300px) 300px, 100vw"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us-265w.webp'))}} 265w,
                            {{asset('public'.mix('/tailwind/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us-860w.webp'))}} 860w,
                            {{asset('public'.mix('/tailwind/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us-1170w.webp'))}} 1170w,
                            {{asset('public'.mix('/tailwind/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us-1520w.webp'))}} 1520w,
                            {{asset('public'.mix('/tailwind/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us-1800w.webp'))}} 1800w,
                            {{asset('public'.mix('/tailwind/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us-2048w.webp'))}} 2048w"
                        data-src="{{asset('public'.mix('/tailwind/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us-265w.webp'))}}"
                        alt="unlock-access-to-bespoke-apps-and-product-innovation-with-us"
                    >
                    <a class="swiper-button-next opacity-0 absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress group-[.swiper-slide-active]:animate-progress absolute opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 p-1 bottom-4 z-10 w-4 h-4 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full [--progress:0;]">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] bg-white/20 rounded-full [transform:rotate(-90deg)] fill-none stroke-[8px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] ease-linear group-[.swiper-slide-active]:duration-[1500ms] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Unlock Access to Bespoke</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-yellow-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">Apps And Product Innovation with Us!</span>
                        </div>
                        <div class="subTitle transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">Step into a digital journey with IMG Global Infotech and unlock the gateway to bespoke applications and groundbreaking product innovations. Experience the future of technology at your fingertips!</div>
                        <div class="mt-10 flex gap-4">
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative aspect-[860/460] overflow-hidden group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-lime-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:bg-gradient-to-r before:from-lime-950 before:via-lime-900 before:to-lime-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <img
                        class="w-full h-full object-cover object-right absolute inset-0 -z-[1] rounded-2xl aspect-[860/460]"
                        loading="lazy"
                        width="860"
                        height="460"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 3000px) 3000px, (min-width: 3000px) 3000px, (min-width: 300px) 520px, (min-width: 300px) 300px, 100vw"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1-265w.webp'))}} 265w,
                            {{asset('public'.mix('/tailwind/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1-860w.webp'))}} 860w,
                            {{asset('public'.mix('/tailwind/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1-1360w.webp'))}} 1360w,
                            {{asset('public'.mix('/tailwind/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1-1720w.webp'))}} 1720w,
                            {{asset('public'.mix('/tailwind/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1-1890w.webp'))}} 1890w,
                            {{asset('public'.mix('/tailwind/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1-2048w.webp'))}} 2048w"
                        data-src="{{asset('public'.mix('/tailwind/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1-265w.webp'))}}"
                        alt="elevate-your-vision-with-robust-and-scalable-mobile-app-development"
                    >

                    <a class="swiper-button-next opacity-0 absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress group-[.swiper-slide-active]:animate-progress absolute opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 p-1 bottom-4 z-10 w-4 h-4 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full [--progress:0;]">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] bg-white/20 rounded-full [transform:rotate(-90deg)] fill-none stroke-[8px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] ease-linear group-[.swiper-slide-active]:duration-[1500ms] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Elevate Your Vision with Robust</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-lime-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">And Scalable Mobile App Development!</span>
                        </div>
                        <div class="subTitle transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">IMG Global Infotech's robust and scalable app development solutions redefine possibilities, ensuring your ideas soar to new heights. Uplifting innovations, one app at a time!</div>
                        <div class="mt-10 flex gap-4">
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative aspect-[860/460] overflow-hidden group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-sky-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:bg-gradient-to-r before:from-sky-950 before:via-sky-900 before:to-sky-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <img
                        class="w-full h-full object-cover object-right absolute inset-0 -z-[1] rounded-2xl aspect-[860/460]"
                        loading="lazy"
                        width="860"
                        height="460"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 2160px) 2160px, (min-width: 1980px) 1980px, (min-width: 520px) 520px, (min-width: 320px) 320px, 100vw"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/level_up_your_business_game_with_fantasy_sports_app_development-256w.webp'))}} 256w,
                            {{asset('public'.mix('/tailwind/img/level_up_your_business_game_with_fantasy_sports_app_development-860w.webp'))}} 860w,
                            {{asset('public'.mix('/tailwind/img/level_up_your_business_game_with_fantasy_sports_app_development-1340w.webp'))}} 1340w,
                            {{asset('public'.mix('/tailwind/img/level_up_your_business_game_with_fantasy_sports_app_development-1690w.webp'))}} 1690w"
                        data-src="{{asset('public'.mix('/tailwind/img/level_up_your_business_game_with_fantasy_sports_app_development-256w.webp'))}}"
                        alt="level_up_your_business_game_with_fantasy_sports_app_development"
                    >

                    <a class="swiper-button-next opacity-0 absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress group-[.swiper-slide-active]:animate-progress absolute opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 p-1 bottom-4 z-10 w-4 h-4 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full [--progress:0;]">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] bg-white/20 rounded-full [transform:rotate(-90deg)] fill-none stroke-[8px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] ease-linear group-[.swiper-slide-active]:duration-[1500ms] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Level Up Your Business Game</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-sky-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">with Fantasy Sports App Development!</span>
                        </div>
                        <div class="subTitle transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">From the thrill of cricket and football to the strategy of kabaddi and fantasy stock, IMG fantasy sports app development assistance can turn your vision into a virtual arena where success is the only goal.</div>
                        <div class="mt-10 flex gap-4">
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative aspect-[860/460] overflow-hidden group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-purple-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:bg-gradient-to-r before:from-purple-950 before:via-purple-900 before:to-purple-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <img
                        class="w-full h-full object-cover object-right absolute inset-0 -z-[1] rounded-2xl aspect-[860/460]"
                        loading="lazy"
                        width="860"
                        height="460"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 3000px) 3000px, (min-width: 1140px) 1140px, (min-width: 520px) 520px, (min-width: 300px) 300px, 100vw"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/enhance-your-brand-presence-with-innovative-web-development-solutions-265w.webp'))}} 265w,
                            {{asset('public'.mix('/tailwind/img/enhance-your-brand-presence-with-innovative-web-development-solutions-860w.webp'))}} 860w,
                            {{asset('public'.mix('/tailwind/img/enhance-your-brand-presence-with-innovative-web-development-solutions-1170w.webp'))}} 1170w,
                            {{asset('public'.mix('/tailwind/img/enhance-your-brand-presence-with-innovative-web-development-solutions-1520w.webp'))}} 1520w,
                            {{asset('public'.mix('/tailwind/img/enhance-your-brand-presence-with-innovative-web-development-solutions-1800w.webp'))}} 1800w,
                            {{asset('public'.mix('/tailwind/img/enhance-your-brand-presence-with-innovative-web-development-solutions-2048w.webp'))}} 2048w"
                        data-src="{{asset('public'.mix('/tailwind/img/enhance-your-brand-presence-with-innovative-web-development-solutions-265w.webp'))}}"
                        alt="enhance-your-brand-presence-with-innovative-web-development-solutions"
                    >

                    <a class="swiper-button-next opacity-0 absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress group-[.swiper-slide-active]:animate-progress absolute opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 p-1 bottom-4 z-10 w-4 h-4 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full [--progress:0;]">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] bg-white/20 rounded-full [transform:rotate(-90deg)] fill-none stroke-[8px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] ease-linear group-[.swiper-slide-active]:duration-[1500ms] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Enhance Your Brand Presence</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-purple-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">with Innovative Web Development Solutions!</span>
                        </div>
                        <div class="subTitle transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">Step into the digital spotlight and elevate your brand with our cutting-edge web development solutions. We craft more than websites; we build captivating online experiences that leave a lasting impression.</div>
                        <div class="mt-10 flex gap-4">
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative aspect-[860/460] overflow-hidden group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-rose-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:bg-gradient-to-r before:from-rose-950 before:via-rose-900 before:to-rose-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <img
                        class="w-full h-full object-cover object-right absolute inset-0 -z-[1] rounded-2xl aspect-[860/460]"
                        loading="lazy"
                        width="860"
                        height="460"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 3000px) 3000px, (min-width: 1140px) 1140px, (min-width: 520px) 520px, (min-width: 300px) 300px, 100vw"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders-265w.webp'))}} 265w,
                            {{asset('public'.mix('/tailwind/img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders-860w.webp'))}} 860w,
                            {{asset('public'.mix('/tailwind/img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders-1170w.webp'))}} 1170w,
                            {{asset('public'.mix('/tailwind/img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders-1520w.webp'))}} 1520w,
                            {{asset('public'.mix('/tailwind/img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders-1800w.webp'))}} 1800w,
                            {{asset('public'.mix('/tailwind/img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders-2048w.webp'))}} 2048w"
                        data-src="{{asset('public'.mix('/tailwind/img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders-265w.webp'))}}"
                        alt="Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders"
                    >

                    <a class="swiper-button-next opacity-0 absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress group-[.swiper-slide-active]:animate-progress absolute opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 p-1 bottom-4 z-10 w-4 h-4 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full [--progress:0;]">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] bg-white/20 rounded-full [transform:rotate(-90deg)] fill-none stroke-[8px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] ease-linear group-[.swiper-slide-active]:duration-[1500ms] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Hire Dedicated Professionals And</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-rose-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">Unleash Business Potential Beyond Borders!</span>
                        </div>
                        <div class="subTitle transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">Welcome to a realm where dedicated professionals converge with boundless expertise. Harness the power of our seasoned team and unlock the full potential of your enterprise.</div>
                        <div class="mt-10 flex gap-4">
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="https://www.imgglobalinfotech.com/contact-us.php" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="swiper-pagination"></div> --}}
    
        <a class="swiper-button-prev max-lg:!hidden !top-[calc(100%-50%-20px)] !right-5 !left-auto !w-10 !h-10 rounded-full flex items-center justify-center p-0 after:hidden duration-200 opacity-80 hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-full h-full" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z"/><path fill="currentColor" stroke="none" d="m12 2 .324.001.318.004.616.017.299.013.579.034.553.046c4.785.464 6.732 2.411 7.196 7.196l.046.553.034.579c.005.098.01.198.013.299l.017.616L22 12l-.005.642-.017.616-.013.299-.034.579-.046.553c-.464 4.785-2.411 6.732-7.196 7.196l-.553.046-.579.034c-.098.005-.198.01-.299.013l-.616.017L12 22l-.642-.005-.616-.017-.299-.013-.579-.034-.553-.046c-4.785-.464-6.732-2.411-7.196-7.196l-.046-.553-.034-.579a28.058 28.058 0 0 1-.013-.299l-.017-.616C2.002 12.432 2 12.218 2 12l.001-.324.004-.318.017-.616.013-.299.034-.579.046-.553c.464-4.785 2.411-6.732 7.196-7.196l.553-.046.579-.034c.098-.005.198-.01.299-.013l.616-.017c.21-.003.424-.005.642-.005zm1.707 6.293a1 1 0 0 0-1.414 0l-3 3-.083.094a1 1 0 0 0 .083 1.32l3 3 .094.083a1 1 0 0 0 1.32-.083l.083-.094a1 1 0 0 0-.083-1.32L11.415 12l2.292-2.293.083-.094a1 1 0 0 0-.083-1.32z" class="fill-white"/></svg>
        </a>
        <a class="swiper-button-next max-lg:!hidden !top-[calc(100%-50%--20px)] !right-5 !left-auto !w-10 !h-10 rounded-full flex items-center justify-center p-0 after:hidden duration-200 opacity-80 hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-full h-full" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z"/><path fill="currentColor" stroke="none" d="M12 2c-.218 0-.432.002-.642.005l-.616.017-.299.013-.579.034-.553.046c-4.785.464-6.732 2.411-7.196 7.196l-.046.553-.034.579c-.005.098-.01.198-.013.299l-.017.616-.004.318L2 12c0 .218.002.432.005.642l.017.616.013.299.034.579.046.553c.464 4.785 2.411 6.732 7.196 7.196l.553.046.579.034c.098.005.198.01.299.013l.616.017L12 22l.642-.005.616-.017.299-.013.579-.034.553-.046c4.785-.464 6.732-2.411 7.196-7.196l.046-.553.034-.579c.005-.098.01-.198.013-.299l.017-.616L22 12l-.005-.642-.017-.616-.013-.299-.034-.579-.046-.553c-.464-4.785-2.411-6.732-7.196-7.196l-.553-.046-.579-.034a28.058 28.058 0 0 0-.299-.013l-.616-.017-.318-.004L12 2zm-1.707 6.293a1 1 0 0 1 1.32-.083l.094.083 3 3a1 1 0 0 1 .083 1.32l-.083.094-3 3a1 1 0 0 1-1.497-1.32l.083-.094L12.585 12l-2.292-2.293a1 1 0 0 1-.083-1.32l.083-.094z" class="fill-white"/></svg>
        </a>
    
        {{-- <div class="swiper-scrollbar"></div> --}}
    </div>
    
    <div class="swiper heroSwiperThumbs !absolute !inset-0 before:absolute before:inset-0 before:z-[3] !z-0" 
        data-swiper='{
            "slidesPerView": 1,
            "effect": "fade",
            "speed": 5500,
            "pagination":false,
            "navigation":false
        }'
    >
        <div class="swiper-wrapper relative z-0">
            <div class="swiper-slide !duration-1000 !transition-opacity group py-5">
                <div class="flex h-full w-full before:absolute before:inset-0 before:bg-gradient-to-b before:from-40% before:from-yellow-950 before:via-yellow-900 before:to-yellow-950/0 after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]"></div>
            </div>
            <div class="swiper-slide !duration-1000 !transition-opacity group py-5">
                <div class="flex h-full w-full before:absolute before:inset-0 before:bg-gradient-to-b before:from-40% before:from-lime-950 before:via-lime-900 before:to-lime-950/0 after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]"></div>
            </div>
            <div class="swiper-slide !duration-1000 !transition-opacity group py-5">
                <div class="flex h-full w-full before:absolute before:inset-0 before:bg-gradient-to-b before:from-40% before:from-sky-950 before:via-sky-900 before:to-sky-950/0 after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]"></div>
            </div>
            <div class="swiper-slide !duration-1000 !transition-opacity group py-5">
                <div class="flex h-full w-full before:absolute before:inset-0 before:bg-gradient-to-b before:from-40% before:from-purple-950 before:via-purple-900 before:to-purple-950/0 after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]"></div>
            </div>
            <div class="swiper-slide !duration-1000 !transition-opacity group py-5">
                <div class="flex h-full w-full before:absolute before:inset-0 before:bg-gradient-to-b before:from-40% before:from-rose-950 before:via-rose-900 before:to-rose-950/0 after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]"></div>
            </div>
        </div>
    </div>
</div>

<div class="select-none">
    <div class="bg-slate-50 pb-6 sm:pb-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
            <div class="swiper logo-clouds before:bg-gradient-to-r before:from-slate-50 before:to-transparent before:w-32 before:z-10 before:inset-0 before:absolute before:pointer-events-none after:bg-gradient-to-l after:from-slate-50 after:to-transparent after:w-32 after:z-10 after:inset-0 after:absolute after:pointer-events-none after:left-auto" 
            data-swiper='{
                "slidesPerView": 1,
                "spaceBetween": 20,
                "loop": true,
                "centeredSlides": true,
                "speed": 5000,
                "allowTouchMove": false,
                "autoplay": {"enabled": true, "delay": 0},
                "breakpoints": {
                    "320": {"slidesPerView": 5, "spaceBetween": 20},
                    "480": {"slidesPerView": 5, "spaceBetween": 20},
                    "640": {"slidesPerView": 7, "spaceBetween": 30},
                    "1024": {"slidesPerView": 7, "spaceBetween": 30},
                    "1350": {"slidesPerView": 9, "spaceBetween": 30}
                }
            }'
        >
                <div class="swiper-wrapper !ease-linear mt-10 flex items-center">
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-titan.webp'))}}" alt="logo clouds titan">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-adani.webp'))}}" alt="logo clouds adani">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-fabindia.webp'))}}" alt="logo clouds fabindia">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-hero.webp'))}}" alt="logo clouds hero">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-myfab11.webp'))}}" alt="logo clouds myfab11">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-parle.webp'))}}" alt="logo clouds parle">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-tata.webp'))}}" alt="logo clouds tata">
                    </a>
                    <a class="swiper-slide !h-5 md:!h-7">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-titan.webp'))}}" alt="logo clouds titan">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-adani.webp'))}}" alt="logo clouds adani">
                    </a>
                    <a class="swiper-slide !h-8">
                        <img class="mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain" loading="lazy" width="108" height="32" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/logo-clouds-fabindia.webp'))}}" alt="logo clouds fabindia">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative -mt-[5.75rem] overflow-hidden bg-slate-50 pt-12 md:pt-[5.75rem]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
            <div class="absolute inset-y-0 hidden w-full min-w-[1360px] bg-[url('../img/beams1.webp')] bg-[length:2000px_100%] bg-[position:calc(50%_+_220px)_-50px] bg-no-repeat lg:block pointer-events-none"></div>
            <div class="mx-auto max-w-container gap-7 px-4 pt-4 sm:px-6 lg:flex lg:px-8">
                <div class="relative z-10 hidden lg:block pointer-events-none">
                    <div class="mt-6 flex [transform:rotateY(180deg)]">
                        <div class="relative flex-shrink-0 p-4">
                            <div class="relative z-10 overflow-hidden rounded-xl shadow-xl shadow-theme5/20 ring-1 ring-slate-900/5"><img class="object-cover h-[404px] w-[336px] aspect-[336/404]" loading="lazy" width="336" height="404" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/image3.webp'))}}" alt="image3"></div>
                            <div class="z-0">
                            <div class="absolute -right-12 left-0 top-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                            <div class="absolute -top-8 bottom-0 left-12 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                            <div class="absolute -right-12 bottom-14 left-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                            <div class="absolute -bottom-8 -top-2 right-0 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                            <div class="absolute bottom-full right-10 -mb-px flex h-8 items-end overflow-hidden">
                                <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                                    <div class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                    <div class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="relative mt-14 flex-shrink-0 p-4">
                            <div class="overflow-hidden rounded shadow-xl ring-1 ring-slate-900/5">
                                <div class="object-cover h-[404px] w-[336px] aspect-[336/404]"></div>
                            </div>
                            <div>
                            <div class="absolute -left-4 -right-8 top-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                            <div class="absolute -bottom-12 -top-20 right-0 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                            <div class="absolute -left-4 -right-8 bottom-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                            <div class="absolute right-10 top-[calc(100%-1px)] -mb-px flex h-8 items-start overflow-hidden">
                                <div class="flex -mt-px h-[2px] w-80 -scale-x-100">
                                    <div class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                    <div class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative z-20 mx-auto max-w-[40rem] pb-10 md:pb-16 pt-10 md:pt-16 lg:mx-0 lg:w-[40rem] lg:max-w-none lg:flex-none lg:pb-24 lg:pr-4 lg:pt-20">
                    <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black"><span class="font-normal">A Quick Insight Into</span> <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent">IMG Global Infotech</span></p>
                    <p class="mt-4 text-sm md:text-base leading-7 text-slate-600">Discover innovation and excellence at IMG Global Infotech! Immerse yourself in cutting-edge services and high-quality development solutions that redefine the digital landscape. Our dynamic work environment fosters creativity and collaboration to fuel groundbreaking ideas.</p>
                    <p class="mt-4 text-sm md:text-base leading-7 text-slate-600">At IMG, we pride ourselves on timely delivery, transforming visions into reality. From mobile app development to custom software solutions and dedicated developer hiring, we cater to businesses of all scales. Experience top-notch development, reasonable prices, and a partnership that exceeds expectations - at IMG Global Infotech, we make digital dreams come true.</p>
    
                    <div class="mt-8 flex gap-4">
                        <a href="https://www.imgglobalinfotech.com/about-us.php" class="inline-flex rounded-br-none justify-center rounded-lg text-sm font-semibold py-2 md:py-3 px-3 md:px-4 bg-slate-900 text-white hover:bg-slate-700"><span class="select-none">Read More <span aria-hidden="true" class="text-slate-400 sm:inline">→</span></span></a>
                        <a class="inline-flex rounded-br-none justify-center rounded-lg text-sm font-semibold py-2 md:py-3 px-3 md:px-4 bg-white/0 text-slate-900 ring-1 ring-slate-900/10 hover:bg-white/25 hover:ring-slate-900/15 " href="https://www.imgglobalinfotech.com/contact-us.php">
                            <span class="select-none">
                            Coffee With Us <span aria-hidden="true" class="text-black/25 sm:inline">→</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="relative z-10 hidden lg:block pointer-events-none">
                    <div class="mt-6 flex">
                        <div class="relative flex-shrink-0 p-4">
                            <div class="relative z-10 overflow-hidden rounded-xl shadow-xl shadow-theme5/20 ring-1 ring-slate-900/5 invisible">
                                <div class="object-cover h-[404px] w-[336px] aspect-[336/404]"></div>
                            </div>
                            <div class="z-0">
                                <div class="absolute -right-12 left-0 top-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                                <div class="absolute -top-8 bottom-0 left-12 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                                <div class="absolute -right-12 bottom-14 left-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                                <div class="absolute -bottom-8 -top-2 right-0 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                                <div class="absolute bottom-full right-10 -mb-px flex h-8 items-end overflow-hidden">
                                    <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                                        <div class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                        <div class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pointer-events-none absolute inset-0 shadow-[inset_0_-1px_1px_rgba(0,0,0,0.06)]"></div>
        </div>
    </div>
</div>


<div class="relative isolate overflow-hidden bg-gray-900 py-8 sm:py-32 select-none">
    <img
        loading="lazy"
        width="1519"
        height="592"
        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
        sizes="100vw"
        srcset="
            https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=300&h=159&q=60&blend=111827&sat=-100&exp=15&blend-mode=multiply 300w,
            https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=930&h=493&q=60&blend=111827&sat=-100&exp=15&blend-mode=multiply 930w,
            https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=1280&h=678&q=60&blend=111827&sat=-100&exp=15&blend-mode=multiply 1280w,
            https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=1710&h=906&q=60&blend=111827&sat=-100&exp=15&blend-mode=multiply 1710w,
            https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2048&h=1085&q=60&blend=111827&sat=-100&exp=15&blend-mode=multiply 2048w"
        data-src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=300&h=159&q=60&blend=111827&sat=-100&exp=15&blend-mode=multiply"
        alt="unsplash background image"
        class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"
    >

    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl pointer-events-none" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu pointer-events-none" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-white">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <div>
                <input type="radio" name="mainly" checked id="inc" class="hidden peer/inc">
                <div class="text-2xl md:text-3xl font-bold tracking-tight sm:text-4xl peer-checked/inc:relative absolute peer-checked/inc:z-[1] -z-20 peer-checked/inc:translate-x-0 translate-x-1/4 peer-checked/inc:opacity-100 opacity-0 duration-300 transition-[transform,opacity]">Inception</div>
                <p class="mt-6 text-sm md:text-base md:leading-8 peer-checked/inc:relative absolute peer-checked/inc:z-[1] -z-20 peer-checked/inc:translate-x-0 translate-x-1/4 peer-checked/inc:opacity-70 opacity-0 duration-300 delay-150 transition-[transform,opacity]">Commence on a digital journey with IMG Global Infotech, where ideas unfold into cutting-edge solutions, shaping a dynamic future.</p>
            </div>
            <div>
                <input type="radio" name="mainly" id="inn" class="hidden peer/inn">
                <div class="text-2xl md:text-3xl font-bold tracking-tight sm:text-4xl peer-checked/inn:relative absolute peer-checked/inn:z-[1] -z-20 peer-checked/inn:translate-x-0 translate-x-1/4 peer-checked/inn:opacity-100 opacity-0 duration-300 transition-[transform,opacity]">Innovation</div>
                <p class="mt-6 text-sm md:text-base md:leading-8 peer-checked/inn:relative absolute peer-checked/inn:z-[1] -z-20 peer-checked/inn:translate-x-0 translate-x-1/4 peer-checked/inn:opacity-70 opacity-0 duration-300 delay-150 transition-[transform,opacity]">IMG Global Infotech pioneers transformative solutions, pushing boundaries to redefine industries via inventive technology.</p>
            </div>
            <div>
                <input type="radio" name="mainly" id="exp" class="hidden peer/exp">
                <div class="text-2xl md:text-3xl font-bold tracking-tight sm:text-4xl peer-checked/exp:relative absolute peer-checked/exp:z-[1] -z-20 peer-checked/exp:translate-x-0 translate-x-1/4 peer-checked/exp:opacity-100 opacity-0 duration-300 transition-[transform,opacity]">Experience</div>
                <p class="mt-6 text-sm md:text-base md:leading-8 peer-checked/exp:relative absolute peer-checked/exp:z-[1] -z-20 peer-checked/exp:translate-x-0 translate-x-1/4 peer-checked/exp:opacity-70 opacity-0 duration-300 delay-150 transition-[transform,opacity]">Boosting online presence with a skilled team, crafting immersive experiences that resonate with precision and expertise.</p>
            </div>
            <div>
                <input type="radio" name="mainly" id="ets" class="hidden peer/ets">
                <div class="text-2xl md:text-3xl font-bold tracking-tight sm:text-4xl peer-checked/ets:relative absolute peer-checked/ets:z-[1] -z-20 peer-checked/ets:translate-x-0 translate-x-1/4 peer-checked/ets:opacity-100 opacity-0 duration-300 transition-[transform,opacity]">Expertise</div>
                <p class="mt-6 text-sm md:text-base md:leading-8 peer-checked/ets:relative absolute peer-checked/ets:z-[1] -z-20 peer-checked/ets:translate-x-0 translate-x-1/4 peer-checked/ets:opacity-70 opacity-0 duration-300 delay-150 transition-[transform,opacity]">Navigate the complex digital landscape with IMG Global Infotech's mastery, delivering tailored solutions fueled by unparalleled industry knowledge.</p>
            </div>
            <div>
                <input type="radio" name="mainly" id="ass" class="hidden peer/ass">
                <div class="text-2xl md:text-3xl font-bold tracking-tight sm:text-4xl peer-checked/ass:relative absolute peer-checked/ass:z-[1] -z-20 peer-checked/ass:translate-x-0 translate-x-1/4 peer-checked/ass:opacity-100 opacity-0 duration-300 transition-[transform,opacity]">Assurance</div>
                <p class="mt-6 text-sm md:text-base md:leading-8 peer-checked/ass:relative absolute peer-checked/ass:z-[1] -z-20 peer-checked/ass:translate-x-0 translate-x-1/4 peer-checked/ass:opacity-70 opacity-0 duration-300 delay-150 transition-[transform,opacity]">Trust our unwavering commitment to reliability, security, and excellence, ensuring your digital endeavors thrive with confidence.</p>
            </div>
        </div>
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-3 gap-x-8 gap-y-6 text-base font-semibold leading-7 sm:grid-cols-3 md:flex lg:gap-x-10">
                <label class="cursor-pointer hoverLink" for="inc">Inception <span aria-hidden="true">&rarr;</span></label>
                <label class="cursor-pointer hoverLink" for="inn">Innovation <span aria-hidden="true">&rarr;</span></label>
                <label class="cursor-pointer hoverLink" for="exp">Experience <span aria-hidden="true">&rarr;</span></label>
                <label class="cursor-pointer hoverLink" for="ets">Expertise <span aria-hidden="true">&rarr;</span></label>
                <label class="cursor-pointer hoverLink" for="ass">Assurance <span aria-hidden="true">&rarr;</span></label>
            </div>
            <div class="mt-16 grid grid-cols-2 gap-x-8 gap-y-10 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6">
                <div class="flex flex-col-reverse">
                    <div class="text-base leading-7 opacity-70">Years' Experience</div>
                    <div class="text-2xl font-bold leading-9 tracking-tight">11</div>
                </div>
                <div class="flex flex-col-reverse">
                    <div class="text-base leading-7 opacity-70">Countries Served</div>
                    <div class="text-2xl font-bold leading-9 tracking-tight">80+</div>
                </div>
                <div class="flex flex-col-reverse">
                    <div class="text-base leading-7 opacity-70">Successful Projects</div>
                    <div class="text-2xl font-bold leading-9 tracking-tight">1000+</div>
                </div>
                <div class="flex flex-col-reverse">
                    <div class="text-base leading-7 opacity-70">Client Retention Rate</div>
                    <div class="text-2xl font-bold leading-9 tracking-tight">95%</div>
                </div>
                <div class="flex flex-col-reverse">
                    <div class="text-base leading-7 opacity-70">Clients Worldwide</div>
                    <div class="text-2xl font-bold leading-9 tracking-tight">1000+</div>
                </div>
                <div class="flex flex-col-reverse">
                    <div class="text-base leading-7 opacity-70">Five Star Reviews</div>
                    <div class="text-2xl font-bold leading-9 tracking-tight">250+</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="relative isolate overflow-hidden pb-8 sm:pb-16 select-none">
    <div class="overflow-hidden bg-gradient-to-b from-white to-slate-200 pt-6 md:pt-16 pb-36 sm:ps-0 ps-5 sm:pr-0 pr-5">
        <div class="absolute inset-x-0 top-0 h-96 z-0 text-slate-600/10 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
            <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="pp0" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                        <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#pp0)"></rect>
            </svg>
        </div>
        <div class="md:pt-3 relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10">
            <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
                <span class="font-normal">What We Can Do</span> 
                <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> For You?</span>
            </p>
            <div class="md:text-base text-sm text-black/70 mt-3 mb-lg-1">
                Experience a journey of innovation with us, where every pixel, code, and concept converges to transform your dreams into reality. Unveil a spectrum of top-notch development services that empower your business vision to thrive in the boundless realm of possibilities.
            </div>
        </div>
    </div>
    <div class="container py-5 bg-white mt-[-126px] md:p-5 sm:p-8 p-5 mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <div class="text-black font-bold lg:text-2xl md:text-xl sm:text-lg text-base mt-3">Avail Exclusive Development Services In Just A Click!</div>
        <div class="md:text-base text-sm text-black/70 mt-3 mb-lg-1">
            Discover your way to unparalleled growth and creativity while choosing IMG Global Inftech's growth-driven development services. Seamlessly transform your business ideas into reality with just a click, because innovation starts here. 
        </div>
        <div class="flex w-full flex-wrap pt-8 flex-col-reverse">
            <div class="w-full">
                <div class="swiper servicesSwiper text-white" 
                    data-swiper='{
                        "spaceBetween": 10,
                        "autoplay": false,
                        "loop": true,
                        "slidesPerView": 1,
                        "effect": "fade",
                        "speed": 1500,
                        "thumbs": {"swiper": ".servicesSwiperThumb"}
                    }'
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide group/svc">
                            <div class="sm:p-6 p-4 rounded-2xl md:rounded-3xl relative z-0 opacity-0 group-[.swiper-slide-active]/svc:h-auto h-0 overflow-hidden group-[.swiper-slide-active]/svc:opacity-100 bg-gradient-to-b from-sky-950 via-sky-900 to-sky-800 !pt-28">
                                <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu pointer-events-none" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
                                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="sd7" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                                            </pattern>
                                        </defs>
                                        <rect width="100%" height="100%" fill="url(#sd7)"></rect>
                                    </svg>
                                </div>
                                <p class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] opacity-0 translate-x-1/4 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <span class="font-normal">Software</span> 
                                    <span class="font-bold bg-gradient-to-r from-sky-300 via-sky-200 to-sky-400 bg-clip-text text-transparent"> Development</span>
                                </p>
                                <div class="md:text-base text-sm mt-3 mb-lg-1 md:font-semibold opacity-0 translate-x-1/4 delay-100 duration-300 group-[.swiper-slide-active]/svc:opacity-70 group-[.swiper-slide-active]/svc:translate-x-0">
                                    Avail software development services tailored to your unique business needs. Our software developers combine cutting-edge technology with their expertise to empower your business with innovative software that drives success.
                                </div>
                                <div class="py-10 opacity-0 translate-x-1/4 delay-150 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm">
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Bespoke Software Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">SaaS Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">White Label Software Development</a>
                                        <a href="https://www.imgglobalinfotech.com/custom-erp-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">ERP Software Development</a>
                                    </div>
                                </div>
                                <div class="sm:text-lg text-base font-bold opacity-0 translate-x-1/4 delay-200 duration-300 cursor-pointer group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">Core Tech:</div>
                                <div class="flex items-center flex-wrap overflow-hidden mt-5 gap-8 opacity-0 translate-x-1/4 delay-300 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Java</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">PHP</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM5.408 5.89c-.83 0-1.318.64-1.318 1.753v.742c0 1.108.479 1.727 1.318 1.727.69 0 1.138-.435 1.187-1.05h1.147v.114c-.058 1.147-1.029 1.938-2.343 1.938-1.612 0-2.518-1.028-2.518-2.729v-.747c0-1.7.914-2.75 2.518-2.75 1.319 0 2.29.812 2.343 1.999v.11H6.595c-.049-.638-.506-1.108-1.187-1.108Zm5.404 0c-.831 0-1.319.64-1.319 1.753v.742c0 1.108.48 1.727 1.319 1.727.69 0 1.138-.435 1.186-1.05h1.147v.114c-.057 1.147-1.028 1.938-2.342 1.938-1.613 0-2.518-1.028-2.518-2.729v-.747c0-1.7.914-2.75 2.518-2.75 1.318 0 2.29.812 2.342 1.999v.11h-1.147c-.048-.638-.505-1.108-1.186-1.108Z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">C#</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M7.81 7.9l-2.97 2.95 7.19 7.18 2.96-2.95 4.22-4.23-2.96-2.96v-.01H7.8zM12 0L1.53 6v12L12 24l10.47-6V6L12 0zm8.47 16.85L12 21.73l-8.47-4.88V7.12L12 2.24l8.47 4.88v9.73z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Ruby</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Python</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M32 32v448h448V32zm240 348c0 43.61-25.76 64.87-63.05 64.87-33.68 0-53.23-17.44-63.15-38.49l34.28-20.75c6.61 11.73 11.63 21.65 26.06 21.65 12 0 21.86-5.41 21.86-26.46V240h44zm99.35 63.87c-39.09 0-64.35-17.64-76.68-42L329 382c9 14.74 20.75 24.56 41.5 24.56 17.44 0 27.57-7.72 27.57-19.75 0-14.43-10.43-19.54-29.68-28l-10.52-4.52c-30.38-12.92-50.52-29.16-50.52-63.45 0-31.57 24.05-54.63 61.64-54.63 26.77 0 46 8.32 59.85 32.68L396 290c-7.22-12.93-15-18-27.06-18-12.33 0-20.15 7.82-20.15 18 0 12.63 7.82 17.74 25.86 25.56l10.52 4.51c35.79 15.34 55.94 31 55.94 66.16.01 37.9-29.76 57.64-69.76 57.64z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">JavaScript</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide group/svc">
                            <div class="sm:p-6 p-4 rounded-2xl md:rounded-3xl relative z-0 opacity-0 group-[.swiper-slide-active]/svc:h-auto h-0 overflow-hidden group-[.swiper-slide-active]/svc:opacity-100 bg-gradient-to-b from-fuchsia-950 via-fuchsia-900 to-fuchsia-800 !pt-28">
                                <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
                                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="l10" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                                            </pattern>
                                        </defs>
                                        <rect width="100%" height="100%" fill="url(#l10)"></rect>
                                    </svg>
                                </div>
                                <p class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] opacity-0 translate-x-1/4 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <span class="font-normal">Mobile App</span> 
                                    <span class="font-bold bg-gradient-to-r from-fuchsia-300 via-fuchsia-200 to-fuchsia-400 bg-clip-text text-transparent"> Development</span>
                                </p>
                                <div class="md:text-base text-sm mt-3 mb-lg-1 md:font-semibold opacity-0 translate-x-1/4 delay-100 duration-300 group-[.swiper-slide-active]/svc:opacity-70 group-[.swiper-slide-active]/svc:translate-x-0">
                                    Step into the future of digital interaction with our top-notch mobile app development services. Your ideas are the fuel, and we are the creators, transforming concepts into powerful mobile solutions that captivate users and elevate your digital footprint.
                                </div>
                                <div class="py-10 opacity-0 translate-x-1/4 delay-150 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm">
                                        <a href="https://www.imgglobalinfotech.com/android-application-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Android App Development</a>
                                        <a href="https://www.imgglobalinfotech.com/cross-platform-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Cross-Platform App Development</a>
                                        <a href="https://www.imgglobalinfotech.com/ios-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">iOS App Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">PWA Development</a>
                                        <a href="https://www.imgglobalinfotech.com/flutter-app-development" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Flutter App Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Wearable App Development</a>
                                        <a href="https://www.imgglobalinfotech.com/react-native-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">React Native App Development</a>
                                    </div>
                                </div>
                                <div class="sm:text-lg text-base font-bold opacity-0 translate-x-1/4 delay-200 duration-300 cursor-pointer group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">Core Tech:</div>
                                <div class="flex items-center flex-wrap overflow-hidden mt-5 gap-8 opacity-0 translate-x-1/4 delay-300 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13.5039 2.00098L3.50391 12.001L6.58724 15.0843L19.6673 2.00098H13.5039ZM13.4985 11.1989L8.12328 16.6199L13.4956 21.9998H19.6842L14.2975 16.5999L19.6856 11.1998L13.4985 11.1989Z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Flutter</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M448 156.09c0-4.51-.08-9-.2-13.52a196.31 196.31 0 0 0-2.58-29.42 99.62 99.62 0 0 0-9.22-28A94.08 94.08 0 0 0 394.84 44a99.17 99.17 0 0 0-28-9.22 195 195 0 0 0-29.43-2.59c-4.51-.12-9-.17-13.52-.2H124.14c-4.51 0-9 .08-13.52.2-2.45.07-4.91.15-7.37.27a171.68 171.68 0 0 0-22.06 2.32 103.06 103.06 0 0 0-21.21 6.1q-3.46 1.45-6.81 3.12a94.66 94.66 0 0 0-18.39 12.32c-1.88 1.61-3.69 3.28-5.43 5A93.86 93.86 0 0 0 12 85.17a99.45 99.45 0 0 0-9.22 28 196.31 196.31 0 0 0-2.54 29.4c-.13 4.51-.18 9-.21 13.52v199.83c0 4.51.08 9 .21 13.51a196.08 196.08 0 0 0 2.58 29.42 99.3 99.3 0 0 0 9.22 28A94.31 94.31 0 0 0 53.17 468a99.47 99.47 0 0 0 28 9.21 195 195 0 0 0 29.43 2.59c4.5.12 9 .17 13.52.2H323.91c4.51 0 9-.08 13.52-.2a196.59 196.59 0 0 0 29.44-2.59 99.57 99.57 0 0 0 28-9.21A94.22 94.22 0 0 0 436 426.84a99.3 99.3 0 0 0 9.22-28 194.79 194.79 0 0 0 2.59-29.42c.12-4.5.17-9 .2-13.51V172.14c-.01-5.35-.01-10.7-.01-16.05zm-69.88 241c-20-38.93-57.23-29.27-76.31-19.47-1.72 1-3.48 2-5.25 3l-.42.25c-39.5 21-92.53 22.54-145.85-.38A234.64 234.64 0 0 1 45 290.12a230.63 230.63 0 0 0 39.17 23.37c56.36 26.4 113 24.49 153 0-57-43.85-104.6-101-141.09-147.22a197.09 197.09 0 0 1-18.78-25.9c43.7 40 112.7 90.22 137.48 104.12-52.57-55.49-98.89-123.94-96.72-121.74 82.79 83.42 159.18 130.59 159.18 130.59 2.88 1.58 5 2.85 6.73 4a127.44 127.44 0 0 0 4.16-12.47c13.22-48.33-1.66-103.58-35.31-149.2C329.61 141.75 375 229.34 356.4 303.42c-.44 1.73-.95 3.4-1.44 5.09 38.52 47.4 28.04 98.17 23.13 88.59z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Swift</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">React Native</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M24 24H0V0h24L12 12Z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Kotlin</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M420.55,301.93a24,24,0,1,1,24-24,24,24,0,0,1-24,24m-265.1,0a24,24,0,1,1,24-24,24,24,0,0,1-24,24m273.7-144.48,47.94-83a10,10,0,1,0-17.27-10h0l-48.54,84.07a301.25,301.25,0,0,0-246.56,0L116.18,64.45a10,10,0,1,0-17.27,10h0l47.94,83C64.53,202.22,8.24,285.55,0,384H576c-8.24-98.45-64.54-181.78-146.85-226.55"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Android</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM127 384.5c-5.5 9.6-17.8 12.8-27.3 7.3-9.6-5.5-12.8-17.8-7.3-27.3l14.3-24.7c16.1-4.9 29.3-1.1 39.6 11.4L127 384.5zm138.9-53.9H84c-11 0-20-9-20-20s9-20 20-20h51l65.4-113.2-20.5-35.4c-5.5-9.6-2.2-21.8 7.3-27.3 9.6-5.5 21.8-2.2 27.3 7.3l8.9 15.4 8.9-15.4c5.5-9.6 17.8-12.8 27.3-7.3 9.6 5.5 12.8 17.8 7.3 27.3l-85.8 148.6h62.1c20.2 0 31.5 23.7 22.7 40zm98.1 0h-29l19.6 33.9c5.5 9.6 2.2 21.8-7.3 27.3-9.6 5.5-21.8 2.2-27.3-7.3-32.9-56.9-57.5-99.7-74-128.1-16.7-29-4.8-58 7.1-67.8 13.1 22.7 32.7 56.7 58.9 102h52c11 0 20 9 20 20 0 11.1-9 20-20 20z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">iOS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide group/svc">
                            <div class="sm:p-6 p-4 rounded-2xl md:rounded-3xl relative z-0 opacity-0 group-[.swiper-slide-active]/svc:h-auto h-0 overflow-hidden group-[.swiper-slide-active]/svc:opacity-100 bg-gradient-to-b from-teal-950 via-teal-900 to-teal-800 !pt-28">
                                <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
                                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="webDevelopment" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                                            </pattern>
                                        </defs>
                                        <rect width="100%" height="100%" fill="url(#webDevelopment)"></rect>
                                    </svg>
                                </div>
                                <p class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] opacity-0 translate-x-1/4 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <span class="font-normal">Web</span> 
                                    <span class="font-bold bg-gradient-to-r from-teal-300 via-teal-200 to-teal-400 bg-clip-text text-transparent"> Development</span>
                                </p>
                                <div class="md:text-base text-sm mt-3 mb-lg-1 md:font-semibold opacity-0 translate-x-1/4 delay-100 duration-300 group-[.swiper-slide-active]/svc:opacity-70 group-[.swiper-slide-active]/svc:translate-x-0">
                                    Beyond mere websites, we weave digital tales with interactive website design and development services. Let us sculpt your online presence into a masterpiece that resonates with your brand essence and captivates your audience in just a click.
                                </div>
                                <div class="py-10 opacity-0 translate-x-1/4 delay-150 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm">
                                        <a href="https://www.imgglobalinfotech.com/website-design.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Website Design</a>
                                        <a href="https://www.imgglobalinfotech.com/cms-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">CMS Development</a>
                                        <a href="https://www.imgglobalinfotech.com/responsive-web-designing.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Responsive Website Design</a>
                                        <a href="https://www.imgglobalinfotech.com/api-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">API Development</a>
                                        <a href="https://www.imgglobalinfotech.com/website-redesigning.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Website Redesign</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Web Portal Development</a>
                                    </div>
                                </div>
                                <div class="sm:text-lg text-base font-bold opacity-0 translate-x-1/4 delay-200 duration-300 cursor-pointer group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">Core Tech:</div>
                                <div class="flex items-center flex-wrap overflow-hidden mt-5 gap-8 opacity-0 translate-x-1/4 delay-300 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">HTML5</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">CSS3</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M185.7 268.1h76.2l-38.1-91.6-38.1 91.6zM223.8 32L16 106.4l31.8 275.7 176 97.9 176-97.9 31.8-275.7zM354 373.8h-48.6l-26.2-65.4H168.6l-26.2 65.4H93.7L223.8 81.5z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Angular JS</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M316.3 452c-2.1 0-4.2-.6-6.1-1.6L291 439c-2.9-1.6-1.5-2.2-.5-2.5 3.8-1.3 4.6-1.6 8.7-4 .4-.2 1-.1 1.4.1l14.8 8.8c.5.3 1.3.3 1.8 0L375 408c.5-.3.9-.9.9-1.6v-66.7c0-.7-.3-1.3-.9-1.6l-57.8-33.3c-.5-.3-1.2-.3-1.8 0l-57.8 33.3c-.6.3-.9 1-.9 1.6v66.7c0 .6.4 1.2.9 1.5l15.8 9.1c8.6 4.3 13.9-.8 13.9-5.8v-65.9c0-.9.7-1.7 1.7-1.7h7.3c.9 0 1.7.7 1.7 1.7v65.9c0 11.5-6.2 18-17.1 18-3.3 0-6 0-13.3-3.6l-15.2-8.7c-3.7-2.2-6.1-6.2-6.1-10.5v-66.7c0-4.3 2.3-8.4 6.1-10.5l57.8-33.4c3.7-2.1 8.5-2.1 12.1 0l57.8 33.4c3.7 2.2 6.1 6.2 6.1 10.5v66.7c0 4.3-2.3 8.4-6.1 10.5l-57.8 33.4c-1.7 1.1-3.8 1.7-6 1.7zm46.7-65.8c0-12.5-8.4-15.8-26.2-18.2-18-2.4-19.8-3.6-19.8-7.8 0-3.5 1.5-8.1 14.8-8.1 11.9 0 16.3 2.6 18.1 10.6.2.8.8 1.3 1.6 1.3h7.5c.5 0 .9-.2 1.2-.5.3-.4.5-.8.4-1.3-1.2-13.8-10.3-20.2-28.8-20.2-16.5 0-26.3 7-26.3 18.6 0 12.7 9.8 16.1 25.6 17.7 18.9 1.9 20.4 4.6 20.4 8.3 0 6.5-5.2 9.2-17.4 9.2-15.3 0-18.7-3.8-19.8-11.4-.1-.8-.8-1.4-1.7-1.4h-7.5c-.9 0-1.7.7-1.7 1.7 0 9.7 5.3 21.3 30.6 21.3 18.5 0 29-7.2 29-19.8zm54.5-50.1c0 6.1-5 11.1-11.1 11.1s-11.1-5-11.1-11.1c0-6.3 5.2-11.1 11.1-11.1 6-.1 11.1 4.8 11.1 11.1zm-1.8 0c0-5.2-4.2-9.3-9.4-9.3-5.1 0-9.3 4.1-9.3 9.3 0 5.2 4.2 9.4 9.3 9.4 5.2-.1 9.4-4.3 9.4-9.4zm-4.5 6.2h-2.6c-.1-.6-.5-3.8-.5-3.9-.2-.7-.4-1.1-1.3-1.1h-2.2v5h-2.4v-12.5h4.3c1.5 0 4.4 0 4.4 3.3 0 2.3-1.5 2.8-2.4 3.1 1.7.1 1.8 1.2 2.1 2.8.1 1 .3 2.7.6 3.3zm-2.8-8.8c0-1.7-1.2-1.7-1.8-1.7h-2v3.5h1.9c1.6 0 1.9-1.1 1.9-1.8zM137.3 191c0-2.7-1.4-5.1-3.7-6.4l-61.3-35.3c-1-.6-2.2-.9-3.4-1h-.6c-1.2 0-2.3.4-3.4 1L3.7 184.6C1.4 185.9 0 188.4 0 191l.1 95c0 1.3.7 2.5 1.8 3.2 1.1.7 2.5.7 3.7 0L42 268.3c2.3-1.4 3.7-3.8 3.7-6.4v-44.4c0-2.6 1.4-5.1 3.7-6.4l15.5-8.9c1.2-.7 2.4-1 3.7-1 1.3 0 2.6.3 3.7 1l15.5 8.9c2.3 1.3 3.7 3.8 3.7 6.4v44.4c0 2.6 1.4 5.1 3.7 6.4l36.4 20.9c1.1.7 2.6.7 3.7 0 1.1-.6 1.8-1.9 1.8-3.2l.2-95zM472.5 87.3v176.4c0 2.6-1.4 5.1-3.7 6.4l-61.3 35.4c-2.3 1.3-5.1 1.3-7.4 0l-61.3-35.4c-2.3-1.3-3.7-3.8-3.7-6.4v-70.8c0-2.6 1.4-5.1 3.7-6.4l61.3-35.4c2.3-1.3 5.1-1.3 7.4 0l15.3 8.8c1.7 1 3.9-.3 3.9-2.2v-94c0-2.8 3-4.6 5.5-3.2l36.5 20.4c2.3 1.2 3.8 3.7 3.8 6.4zm-46 128.9c0-.7-.4-1.3-.9-1.6l-21-12.2c-.6-.3-1.3-.3-1.9 0l-21 12.2c-.6.3-.9.9-.9 1.6v24.3c0 .7.4 1.3.9 1.6l21 12.1c.6.3 1.3.3 1.8 0l21-12.1c.6-.3.9-.9.9-1.6v-24.3zm209.8-.7c2.3-1.3 3.7-3.8 3.7-6.4V192c0-2.6-1.4-5.1-3.7-6.4l-60.9-35.4c-2.3-1.3-5.1-1.3-7.4 0l-61.3 35.4c-2.3 1.3-3.7 3.8-3.7 6.4v70.8c0 2.7 1.4 5.1 3.7 6.4l60.9 34.7c2.2 1.3 5 1.3 7.3 0l36.8-20.5c2.5-1.4 2.5-5 0-6.4L550 241.6c-1.2-.7-1.9-1.9-1.9-3.2v-22.2c0-1.3.7-2.5 1.9-3.2l19.2-11.1c1.1-.7 2.6-.7 3.7 0l19.2 11.1c1.1.7 1.9 1.9 1.9 3.2v17.4c0 2.8 3.1 4.6 5.6 3.2l36.7-21.3zM559 219c-.4.3-.7.7-.7 1.2v13.6c0 .5.3 1 .7 1.2l11.8 6.8c.4.3 1 .3 1.4 0L584 235c.4-.3.7-.7.7-1.2v-13.6c0-.5-.3-1-.7-1.2l-11.8-6.8c-.4-.3-1-.3-1.4 0L559 219zm-254.2 43.5v-70.4c0-2.6-1.6-5.1-3.9-6.4l-61.1-35.2c-2.1-1.2-5-1.4-7.4 0l-61.1 35.2c-2.3 1.3-3.9 3.7-3.9 6.4v70.4c0 2.8 1.9 5.2 4 6.4l61.2 35.2c2.4 1.4 5.2 1.3 7.4 0l61-35.2c1.8-1 3.1-2.7 3.6-4.7.1-.5.2-1.1.2-1.7zm-74.3-124.9l-.8.5h1.1l-.3-.5zm76.2 130.2l-.4-.7v.9l.4-.2z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Node.Js</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Laraval</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Python</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide group/svc">
                            <div class="sm:p-6 p-4 rounded-2xl md:rounded-3xl relative z-0 opacity-0 group-[.swiper-slide-active]/svc:h-auto h-0 overflow-hidden group-[.swiper-slide-active]/svc:opacity-100 bg-gradient-to-b from-amber-950 via-amber-900 to-amber-800 !pt-28">
                                <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
                                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="blockchainDevelopment" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                                            </pattern>
                                        </defs>
                                        <rect width="100%" height="100%" fill="url(#blockchainDevelopment)"></rect>
                                    </svg>
                                </div>
                                <p class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] opacity-0 translate-x-1/4 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <span class="font-normal">Blockchain</span> 
                                    <span class="font-bold bg-gradient-to-r from-amber-300 via-amber-200 to-amber-400 bg-clip-text text-transparent"> Development</span>
                                </p>
                                <div class="md:text-base text-sm mt-3 mb-lg-1 md:font-semibold opacity-0 translate-x-1/4 delay-100 duration-300 group-[.swiper-slide-active]/svc:opacity-70 group-[.swiper-slide-active]/svc:translate-x-0">
                                    Unlock the door to decentralized innovation with our cutting-edge blockchain development services. Experience security, transparency, and groundbreaking blockchain development solutions redefining trust and scalability in the digital era.
                                </div>
                                <div class="py-10 opacity-0 translate-x-1/4 delay-150 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm">
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Blockchain Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Smart Contract Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">NFT Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">NFT Marketplace Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Cryptocurrency Exchange Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Metaverse Development</a>
                                    </div>
                                </div>
                                <div class="sm:text-lg text-base font-bold opacity-0 translate-x-1/4 delay-200 duration-300 cursor-pointer group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">Core Tech:</div>
                                <div class="flex items-center flex-wrap overflow-hidden mt-5 gap-8 opacity-0 translate-x-1/4 delay-300 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M4.409 6.608L7.981.255l3.572 6.353H4.409zM8.411 0l3.569 6.348L15.552 0H8.411zm4.036 17.392l3.572 6.354 3.575-6.354h-7.147zm-.608-10.284h-7.43l3.715 6.605 3.715-6.605zm.428-.25h7.428L15.982.255l-3.715 6.603zM15.589 24l-3.569-6.349L8.448 24h7.141zm-3.856-6.858H4.306l3.712 6.603 3.715-6.603zm.428-.25h7.433l-3.718-6.605-3.715 6.605z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Solidity</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <img width="40" height="40" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/vyper.webp'))}}" alt="vyper icon" class="w-full h-full object-contain object-center" loading="lazy">
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Vyper</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M400.1 194.8C389.2 197.6 380.2 199.1 371 202.4C363.7 204.3 356.3 206.3 347.8 208.5L347.2 208.6C343 209.8 342.6 209.9 338.7 205.4C334 200.1 330.6 196.7 324.1 193.5C304.4 183.9 285.4 186.7 267.7 198.2C246.5 211.9 235.6 232.2 235.9 257.4C236.2 282.4 253.3 302.9 277.1 306.3C299.1 309.1 316.9 301.7 330.9 285.8C333 283.2 334.9 280.5 337 277.5V277.5L337 277.5C337.8 276.5 338.5 275.4 339.3 274.2H279.2C272.7 274.2 271.1 270.2 273.3 264.9C277.3 255.2 284.8 239 289.2 230.9C290.1 229.1 292.3 225.1 296.1 225.1H397.2C401.7 211.7 409 198.2 418.8 185.4C441.5 155.5 468.1 139.9 506 133.4C537.8 127.8 567.7 130.9 594.9 149.3C619.5 166.1 634.7 188.9 638.8 218.8C644.1 260.9 631.9 295.1 602.1 324.4C582.4 345.3 557.2 358.4 528.2 364.3C522.6 365.3 517.1 365.8 511.7 366.3C508.8 366.5 506 366.8 503.2 367.1C474.9 366.5 449 358.4 427.2 339.7C411.9 326.4 401.3 310.1 396.1 291.2C392.4 298.5 388.1 305.6 382.1 312.3C360.5 341.9 331.2 360.3 294.2 365.2C263.6 369.3 235.3 363.4 210.3 344.7C187.3 327.2 174.2 304.2 170.8 275.5C166.7 241.5 176.7 210.1 197.2 184.2C219.4 155.2 248.7 136.8 284.5 130.3C313.8 124.1 341.8 128.4 367.1 145.6C383.6 156.5 395.4 171.4 403.2 189.5C405.1 192.3 403.8 193.9 400.1 194.8zM48.3 200.4C47.05 200.4 46.74 199.8 47.36 198.8L53.91 190.4C54.53 189.5 56.09 188.9 57.34 188.9H168.6C169.8 188.9 170.1 189.8 169.5 190.7L164.2 198.8C163.6 199.8 162 200.7 161.1 200.7L48.3 200.4zM1.246 229.1C0 229.1-.3116 228.4 .3116 227.5L6.855 219.1C7.479 218.2 9.037 217.5 10.28 217.5H152.4C153.6 217.5 154.2 218.5 153.9 219.4L151.4 226.9C151.1 228.1 149.9 228.8 148.6 228.8L1.246 229.1zM75.72 255.9C75.1 256.8 75.41 257.7 76.65 257.7L144.6 258C145.5 258 146.8 257.1 146.8 255.9L147.4 248.4C147.4 247.1 146.8 246.2 145.5 246.2H83.2C81.95 246.2 80.71 247.1 80.08 248.1L75.72 255.9zM577.2 237.9C577 235.3 576.9 233.1 576.5 230.9C570.9 200.1 542.5 182.6 512.9 189.5C483.9 196 465.2 214.4 458.4 243.7C452.8 268 464.6 292.6 487 302.6C504.2 310.1 521.3 309.2 537.8 300.7C562.4 287.1 575.8 268 577.4 241.2C577.3 240 577.3 238.9 577.2 237.9z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Golang</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <img width="40" height="40" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/simplicity.webp'))}}" alt="Simplicity Icon" class="w-full h-full object-contain object-center" loading="lazy">
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Simplicity</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <img width="40" height="40" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/rholang.webp'))}}" alt="Rholang Icon" class="w-full h-full object-contain object-center" loading="lazy">
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Rholang</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <img width="40" height="40" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/rust.webp'))}}" alt="Rust Icon" class="w-full h-full object-contain object-center" loading="lazy">
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Rust</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide group/svc">
                            <div class="sm:p-6 p-4 rounded-2xl md:rounded-3xl relative z-0 opacity-0 group-[.swiper-slide-active]/svc:h-auto h-0 overflow-hidden group-[.swiper-slide-active]/svc:opacity-100 bg-gradient-to-b from-lime-950 via-lime-900 to-lime-800 !pt-28">
                                <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
                                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="ecommerceSolutions" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                                            </pattern>
                                        </defs>
                                        <rect width="100%" height="100%" fill="url(#ecommerceSolutions)"></rect>
                                    </svg>
                                </div>
                                <p class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] opacity-0 translate-x-1/4 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <span class="font-normal">Ecommerce</span> 
                                    <span class="font-bold bg-gradient-to-r from-lime-300 via-lime-200 to-lime-400 bg-clip-text text-transparent"> Solutions</span>
                                </p>
                                <div class="md:text-base text-sm mt-3 mb-lg-1 md:font-semibold opacity-0 translate-x-1/4 delay-100 duration-300 group-[.swiper-slide-active]/svc:opacity-70 group-[.swiper-slide-active]/svc:translate-x-0">
                                    Witness the transformation of your small store into a global powerhouse with our Ecommerce Solutions. From intuitive shopping experiences to seamless payment integration, we're here to turn your Ecommerce venture into a thriving business, reaching new heights.
                                </div>
                                <div class="py-10 opacity-0 translate-x-1/4 delay-150 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm">
                                        <a href="https://www.imgglobalinfotech.com/ecommerce-website-development" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Ecommerce Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Magento Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Shopify Development</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Wordpress Development</a>
                                    </div>
                                </div>
                                <div class="sm:text-lg text-base font-bold opacity-0 translate-x-1/4 delay-200 duration-300 cursor-pointer group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">Core Tech:</div>
                                <div class="flex items-center flex-wrap overflow-hidden mt-5 gap-8 opacity-0 translate-x-1/4 delay-300 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M445.7 127.9V384l-63.4 36.5V164.7L223.8 73.1 65.2 164.7l.4 255.9L2.3 384V128.1L224.2 0l221.5 127.9zM255.6 420.5L224 438.9l-31.8-18.2v-256l-63.3 36.6.1 255.9 94.9 54.9 95.1-54.9v-256l-63.4-36.6v255.9z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Magento</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M388.32,104.1a4.66,4.66,0,0,0-4.4-4c-2,0-37.23-.8-37.23-.8s-21.61-20.82-29.62-28.83V503.2L442.76,472S388.72,106.5,388.32,104.1ZM288.65,70.47a116.67,116.67,0,0,0-7.21-17.61C271,32.85,255.42,22,237,22a15,15,0,0,0-4,.4c-.4-.8-1.2-1.2-1.6-2C223.4,11.63,213,7.63,200.58,8c-24,.8-48,18-67.25,48.83-13.61,21.62-24,48.84-26.82,70.06-27.62,8.4-46.83,14.41-47.23,14.81-14,4.4-14.41,4.8-16,18-1.2,10-38,291.82-38,291.82L307.86,504V65.67a41.66,41.66,0,0,0-4.4.4S297.86,67.67,288.65,70.47ZM233.41,87.69c-16,4.8-33.63,10.4-50.84,15.61,4.8-18.82,14.41-37.63,25.62-50,4.4-4.4,10.41-9.61,17.21-12.81C232.21,54.86,233.81,74.48,233.41,87.69ZM200.58,24.44A27.49,27.49,0,0,1,215,28c-6.4,3.2-12.81,8.41-18.81,14.41-15.21,16.42-26.82,42-31.62,66.45-14.42,4.41-28.83,8.81-42,12.81C131.33,83.28,163.75,25.24,200.58,24.44ZM154.15,244.61c1.6,25.61,69.25,31.22,73.25,91.66,2.8,47.64-25.22,80.06-65.65,82.47-48.83,3.2-75.65-25.62-75.65-25.62l10.4-44s26.82,20.42,48.44,18.82c14-.8,19.22-12.41,18.81-20.42-2-33.62-57.24-31.62-60.84-86.86-3.2-46.44,27.22-93.27,94.47-97.68,26-1.6,39.23,4.81,39.23,4.81L221.4,225.39s-17.21-8-37.63-6.4C154.15,221,153.75,239.8,154.15,244.61ZM249.42,82.88c0-12-1.6-29.22-7.21-43.63,18.42,3.6,27.22,24,31.23,36.43Q262.63,78.68,249.42,82.88Z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Shopify</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M12.645 13.663h3.027c.861 0 1.406-.474 1.406-1.235 0-.717-.545-1.234-1.406-1.234h-3.027c-.1 0-.187.086-.187.172v2.125c.015.1.086.172.187.172zm0 4.896h3.128c.961 0 1.535-.488 1.535-1.35 0-.746-.545-1.35-1.535-1.35h-3.128c-.1 0-.187.087-.187.173v2.34c.015.115.086.187.187.187zM23.72.053l-8.953 8.93h1.464c2.281 0 3.63 1.435 3.63 3 0 1.235-.832 2.14-1.722 2.541-.143.058-.143.259.014.316 1.033.402 1.765 1.48 1.765 2.742 0 1.78-1.19 3.202-3.5 3.202h-6.342c-.1 0-.187-.086-.187-.172V13.85L.062 23.64c-.13.13-.043.359.143.359h23.631a.16.16 0 0 0 .158-.158V.182c.043-.158-.158-.244-.273-.13z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">BigCommerce</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <img class="w-full h-full" loading="lazy" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/uber-cart.webp'))}}" alt="Uber cart Icon">
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Ubercart</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <img class="w-full h-full" loading="lazy" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/woo-commerce.webp'))}}" alt="Woo commerce Icon">
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Woocommerce</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Wordpress</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide group/svc">
                            <div class="sm:p-6 p-4 rounded-2xl md:rounded-3xl relative z-0 opacity-0 group-[.swiper-slide-active]/svc:h-auto h-0 overflow-hidden group-[.swiper-slide-active]/svc:opacity-100 bg-gradient-to-b from-orange-950 via-orange-900 to-orange-800 !pt-28">
                                <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
                                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="hireDevelopers" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                                            </pattern>
                                        </defs>
                                        <rect width="100%" height="100%" fill="url(#hireDevelopers)"></rect>
                                    </svg>
                                </div>
                                <p class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] opacity-0 translate-x-1/4 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <span class="font-normal">Hire </span> 
                                    <span class="font-bold bg-gradient-to-r from-orange-300 via-orange-200 to-orange-400 bg-clip-text text-transparent"> Developers</span>
                                </p>
                                <div class="md:text-base text-sm mt-3 mb-lg-1 md:font-semibold opacity-0 translate-x-1/4 delay-100 duration-300 group-[.swiper-slide-active]/svc:opacity-70 group-[.swiper-slide-active]/svc:translate-x-0">
                                    Your vision, our expertise. Hire Developers who breathe life into ideas. A dedicated team ready to propel your projects forward, delivering excellence with every line of code. Connect now!
                                </div>
                                <div class="py-10 opacity-0 translate-x-1/4 delay-150 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm">
                                        <a href="https://www.imgglobalinfotech.com/hire-mobile-app-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Mobile App Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-ios-app-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire iOS App Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-flutter-app-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Flutter App Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-php-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire PHP Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-web-desginers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Website Designers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-mean-stack-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire MEAN Stack Developers</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Laravel Developers</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Software Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-java-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Java Developers</a>
                                    </div>
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm mt-3">
                                        <a href="https://www.imgglobalinfotech.com/hire-nodejs-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Node.js Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-android-app-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Android App Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-react-native-app-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire React Native App Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-web-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Website Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-python-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Python Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-full-stack-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Full Stack Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-mern-stack-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire MERN Stack Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-ui-ux-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire UI / UX Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-reactjs-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire React JS Developers</a>
                                        <a href="https://www.imgglobalinfotech.com/hire-angular-developers.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Hire Angularjs Developers</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide group/svc">
                            <div class="sm:p-6 p-4 rounded-2xl md:rounded-3xl relative z-0 opacity-0 group-[.swiper-slide-active]/svc:h-auto h-0 overflow-hidden group-[.swiper-slide-active]/svc:opacity-100 bg-gradient-to-b from-cyan-950 via-cyan-900 to-cyan-800 !pt-28">
                                <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
                                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                                </div>
                                <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
                                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <pattern id="trendingSolutions" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                                            </pattern>
                                        </defs>
                                        <rect width="100%" height="100%" fill="url(#trendingSolutions)"></rect>
                                    </svg>
                                </div>
                                <p class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] opacity-0 translate-x-1/4 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <span class="font-normal">Trending </span> 
                                    <span class="font-bold bg-gradient-to-r from-cyan-300 via-cyan-200 to-cyan-400 bg-clip-text text-transparent"> Solutions</span>
                                </p>
                                <div class="md:text-base text-sm mt-3 mb-lg-1 md:font-semibold opacity-0 translate-x-1/4 delay-100 duration-300 group-[.swiper-slide-active]/svc:opacity-70 group-[.swiper-slide-active]/svc:translate-x-0">
                                    Explore our trending ready-to-use applications, meticulously crafted to elevate your business instantly. From cutting-edge food delivery apps to innovative elearning platforms, our trending solutions are designed to streamline operations.
                                </div>
                                <div class="py-10 opacity-0 translate-x-1/4 delay-150 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="flex flex-wrap gap-3 md:font-semibold text-[12px] md:text-sm">
                                        <a href="https://www.imgglobalinfotech.com/food-delivery-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Food Delivery App Development</a>
                                        <a href="https://www.imgglobalinfotech.com/grocery-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Grocery Delivery</a>
                                        <a href="https://www.imgglobalinfotech.com/fantasy-sports-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Fantasy sports App</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Video Streaming App</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Social Media App</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Event Management App</a>
                                        <a href="https://www.imgglobalinfotech.com/elearning-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Elearning App</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Travel App</a>
                                        <a href="https://www.imgglobalinfotech.com/pharmacy-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Pharmacy App</a>
                                        <a href="https://www.imgglobalinfotech.com/fashion-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Fashion App</a>
                                        <a href="https://www.imgglobalinfotech.com/doctor-on-demand-app-development.php" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Doctor on Demand App</a>
                                        <a href="javascript:;" class="inline-block backdrop-blur-lg shadow-sm p-2 md:p-3 bg-white/20">Healthacare App</a>
                                    </div>
                                </div>
                                <div class="sm:text-lg text-base font-bold opacity-0 translate-x-1/4 delay-200 duration-300 cursor-pointer group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">Core Tech:</div>
                                <div class="flex items-center flex-wrap overflow-hidden mt-5 gap-8 opacity-0 translate-x-1/4 delay-300 duration-300 group-[.swiper-slide-active]/svc:opacity-100 group-[.swiper-slide-active]/svc:translate-x-0">
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M316.3 452c-2.1 0-4.2-.6-6.1-1.6L291 439c-2.9-1.6-1.5-2.2-.5-2.5 3.8-1.3 4.6-1.6 8.7-4 .4-.2 1-.1 1.4.1l14.8 8.8c.5.3 1.3.3 1.8 0L375 408c.5-.3.9-.9.9-1.6v-66.7c0-.7-.3-1.3-.9-1.6l-57.8-33.3c-.5-.3-1.2-.3-1.8 0l-57.8 33.3c-.6.3-.9 1-.9 1.6v66.7c0 .6.4 1.2.9 1.5l15.8 9.1c8.6 4.3 13.9-.8 13.9-5.8v-65.9c0-.9.7-1.7 1.7-1.7h7.3c.9 0 1.7.7 1.7 1.7v65.9c0 11.5-6.2 18-17.1 18-3.3 0-6 0-13.3-3.6l-15.2-8.7c-3.7-2.2-6.1-6.2-6.1-10.5v-66.7c0-4.3 2.3-8.4 6.1-10.5l57.8-33.4c3.7-2.1 8.5-2.1 12.1 0l57.8 33.4c3.7 2.2 6.1 6.2 6.1 10.5v66.7c0 4.3-2.3 8.4-6.1 10.5l-57.8 33.4c-1.7 1.1-3.8 1.7-6 1.7zm46.7-65.8c0-12.5-8.4-15.8-26.2-18.2-18-2.4-19.8-3.6-19.8-7.8 0-3.5 1.5-8.1 14.8-8.1 11.9 0 16.3 2.6 18.1 10.6.2.8.8 1.3 1.6 1.3h7.5c.5 0 .9-.2 1.2-.5.3-.4.5-.8.4-1.3-1.2-13.8-10.3-20.2-28.8-20.2-16.5 0-26.3 7-26.3 18.6 0 12.7 9.8 16.1 25.6 17.7 18.9 1.9 20.4 4.6 20.4 8.3 0 6.5-5.2 9.2-17.4 9.2-15.3 0-18.7-3.8-19.8-11.4-.1-.8-.8-1.4-1.7-1.4h-7.5c-.9 0-1.7.7-1.7 1.7 0 9.7 5.3 21.3 30.6 21.3 18.5 0 29-7.2 29-19.8zm54.5-50.1c0 6.1-5 11.1-11.1 11.1s-11.1-5-11.1-11.1c0-6.3 5.2-11.1 11.1-11.1 6-.1 11.1 4.8 11.1 11.1zm-1.8 0c0-5.2-4.2-9.3-9.4-9.3-5.1 0-9.3 4.1-9.3 9.3 0 5.2 4.2 9.4 9.3 9.4 5.2-.1 9.4-4.3 9.4-9.4zm-4.5 6.2h-2.6c-.1-.6-.5-3.8-.5-3.9-.2-.7-.4-1.1-1.3-1.1h-2.2v5h-2.4v-12.5h4.3c1.5 0 4.4 0 4.4 3.3 0 2.3-1.5 2.8-2.4 3.1 1.7.1 1.8 1.2 2.1 2.8.1 1 .3 2.7.6 3.3zm-2.8-8.8c0-1.7-1.2-1.7-1.8-1.7h-2v3.5h1.9c1.6 0 1.9-1.1 1.9-1.8zM137.3 191c0-2.7-1.4-5.1-3.7-6.4l-61.3-35.3c-1-.6-2.2-.9-3.4-1h-.6c-1.2 0-2.3.4-3.4 1L3.7 184.6C1.4 185.9 0 188.4 0 191l.1 95c0 1.3.7 2.5 1.8 3.2 1.1.7 2.5.7 3.7 0L42 268.3c2.3-1.4 3.7-3.8 3.7-6.4v-44.4c0-2.6 1.4-5.1 3.7-6.4l15.5-8.9c1.2-.7 2.4-1 3.7-1 1.3 0 2.6.3 3.7 1l15.5 8.9c2.3 1.3 3.7 3.8 3.7 6.4v44.4c0 2.6 1.4 5.1 3.7 6.4l36.4 20.9c1.1.7 2.6.7 3.7 0 1.1-.6 1.8-1.9 1.8-3.2l.2-95zM472.5 87.3v176.4c0 2.6-1.4 5.1-3.7 6.4l-61.3 35.4c-2.3 1.3-5.1 1.3-7.4 0l-61.3-35.4c-2.3-1.3-3.7-3.8-3.7-6.4v-70.8c0-2.6 1.4-5.1 3.7-6.4l61.3-35.4c2.3-1.3 5.1-1.3 7.4 0l15.3 8.8c1.7 1 3.9-.3 3.9-2.2v-94c0-2.8 3-4.6 5.5-3.2l36.5 20.4c2.3 1.2 3.8 3.7 3.8 6.4zm-46 128.9c0-.7-.4-1.3-.9-1.6l-21-12.2c-.6-.3-1.3-.3-1.9 0l-21 12.2c-.6.3-.9.9-.9 1.6v24.3c0 .7.4 1.3.9 1.6l21 12.1c.6.3 1.3.3 1.8 0l21-12.1c.6-.3.9-.9.9-1.6v-24.3zm209.8-.7c2.3-1.3 3.7-3.8 3.7-6.4V192c0-2.6-1.4-5.1-3.7-6.4l-60.9-35.4c-2.3-1.3-5.1-1.3-7.4 0l-61.3 35.4c-2.3 1.3-3.7 3.8-3.7 6.4v70.8c0 2.7 1.4 5.1 3.7 6.4l60.9 34.7c2.2 1.3 5 1.3 7.3 0l36.8-20.5c2.5-1.4 2.5-5 0-6.4L550 241.6c-1.2-.7-1.9-1.9-1.9-3.2v-22.2c0-1.3.7-2.5 1.9-3.2l19.2-11.1c1.1-.7 2.6-.7 3.7 0l19.2 11.1c1.1.7 1.9 1.9 1.9 3.2v17.4c0 2.8 3.1 4.6 5.6 3.2l36.7-21.3zM559 219c-.4.3-.7.7-.7 1.2v13.6c0 .5.3 1 .7 1.2l11.8 6.8c.4.3 1 .3 1.4 0L584 235c.4-.3.7-.7.7-1.2v-13.6c0-.5-.3-1-.7-1.2l-11.8-6.8c-.4-.3-1-.3-1.4 0L559 219zm-254.2 43.5v-70.4c0-2.6-1.6-5.1-3.9-6.4l-61.1-35.2c-2.1-1.2-5-1.4-7.4 0l-61.1 35.2c-2.3 1.3-3.9 3.7-3.9 6.4v70.4c0 2.8 1.9 5.2 4 6.4l61.2 35.2c2.4 1.4 5.2 1.3 7.4 0l61-35.2c1.8-1 3.1-2.7 3.6-4.7.1-.5.2-1.1.2-1.7zm-74.3-124.9l-.8.5h1.1l-.3-.5zm76.2 130.2l-.4-.7v.9l.4-.2z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Node.Js</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M185.7 268.1h76.2l-38.1-91.6-38.1 91.6zM223.8 32L16 106.4l31.8 275.7 176 97.9 176-97.9 31.8-275.7zM354 373.8h-48.6l-26.2-65.4H168.6l-26.2 65.4H93.7L223.8 81.5z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Angular JS</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">React JS</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Java</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg"><path d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">PHP</div>
                                    </div>
                                    <div class="w-auto text-center gap-2">
                                        <div class="md:w-10 w-8 md:h-10 h-8 text-center mx-auto">
                                            <svg class="w-full h-full" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13.5039 2.00098L3.50391 12.001L6.58724 15.0843L19.6673 2.00098H13.5039ZM13.4985 11.1989L8.12328 16.6199L13.4956 21.9998H19.6842L14.2975 16.5999L19.6856 11.1998L13.4985 11.1989Z"></path></svg>
                                        </div>
                                        <div class="sm:text-base text-sm text-center font-semibold mt-1">Flutter</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full -mb-[120px] z-[2] p-4 md:p-6">
                <div class="swiper servicesSwiperThumb bg-white border-[10px] border-white rounded-xl" 
                data-swiper='{
                    "spaceBetween": 20,
                    "autoplay": false,
                    "slidesPerView": "auto",
                    "freeMode": false,
                    "loop": true,
                    "watchSlidesProgress": false,
                    "centerInsufficientSlides": true,
                    "centeredSlidesBounds": true,
                    "speed": 500
                }'
            >
                    <div class="swiper-wrapper flex items-center !h-auto sm:text-base text-sm font-semibold">
                        <div class="swiper-slide !w-auto group/svc py-2 md:py-3 !h-auto">
                            <a href="javascript:;" class="cursor-pointer text-sky-800 bg-sky-950/10 px-4 md:px-5 py-2 md:py-3 shadow-md group-[.swiper-slide-thumb-active]/svc:shadow-sky-300 rounded-lg rounded-br-none group-[.swiper-slide-thumb-active]/svc:bg-gradient-to-bl group-[.swiper-slide-thumb-active]/svc:from-sky-900 group-[.swiper-slide-thumb-active]/svc:to-sky-700 group-[.swiper-slide-thumb-active]/svc:text-white">Software Development</a>
                        </div>
                        <div class="swiper-slide !w-auto group/svc py-2 md:py-3 !h-auto">
                            <a href="javascript:;" class="cursor-pointer text-fuchsia-800 bg-fuchsia-950/10 px-4 md:px-5 py-2 md:py-3 shadow-md group-[.swiper-slide-thumb-active]/svc:shadow-fuchsia-300 rounded-lg rounded-br-none group-[.swiper-slide-thumb-active]/svc:bg-gradient-to-bl group-[.swiper-slide-thumb-active]/svc:from-fuchsia-900 group-[.swiper-slide-thumb-active]/svc:to-fuchsia-700 group-[.swiper-slide-thumb-active]/svc:text-white">Mobile App Development</a>
                        </div>
                        <div class="swiper-slide !w-auto group/svc py-2 md:py-3 !h-auto">
                            <a href="javascript:;" class="cursor-pointer text-teal-800 bg-teal-950/10 px-4 md:px-5 py-2 md:py-3 shadow-md group-[.swiper-slide-thumb-active]/svc:shadow-teal-300 rounded-lg rounded-br-none group-[.swiper-slide-thumb-active]/svc:bg-gradient-to-bl group-[.swiper-slide-thumb-active]/svc:from-teal-900 group-[.swiper-slide-thumb-active]/svc:to-teal-700 group-[.swiper-slide-thumb-active]/svc:text-white">Web Development</a>
                        </div>
                        <div class="swiper-slide !w-auto group/svc py-2 md:py-3 !h-auto">
                            <a href="javascript:;" class="cursor-pointer text-amber-800 bg-amber-950/10 px-4 md:px-5 py-2 md:py-3 shadow-md group-[.swiper-slide-thumb-active]/svc:shadow-amber-300 rounded-lg rounded-br-none group-[.swiper-slide-thumb-active]/svc:bg-gradient-to-bl group-[.swiper-slide-thumb-active]/svc:from-amber-900 group-[.swiper-slide-thumb-active]/svc:to-amber-700 group-[.swiper-slide-thumb-active]/svc:text-white">Blockchain Development</a>
                        </div>
                        <div class="swiper-slide !w-auto group/svc py-2 md:py-3 !h-auto">
                            <a href="javascript:;" class="cursor-pointer text-lime-800 bg-lime-950/10 px-4 md:px-5 py-2 md:py-3 shadow-md group-[.swiper-slide-thumb-active]/svc:shadow-lime-300 rounded-lg rounded-br-none group-[.swiper-slide-thumb-active]/svc:bg-gradient-to-bl group-[.swiper-slide-thumb-active]/svc:from-lime-900 group-[.swiper-slide-thumb-active]/svc:to-lime-700 group-[.swiper-slide-thumb-active]/svc:text-white">Ecommerce Solutions</a>
                        </div>
                        <div class="swiper-slide !w-auto group/svc py-2 md:py-3 !h-auto">
                            <a href="javascript:;" class="cursor-pointer text-orange-800 bg-orange-950/10 px-4 md:px-5 py-2 md:py-3 shadow-md group-[.swiper-slide-thumb-active]/svc:shadow-orange-300 rounded-lg rounded-br-none group-[.swiper-slide-thumb-active]/svc:bg-gradient-to-bl group-[.swiper-slide-thumb-active]/svc:from-orange-900 group-[.swiper-slide-thumb-active]/svc:to-orange-700 group-[.swiper-slide-thumb-active]/svc:text-white">Hire Developers</a>
                        </div>
                        <div class="swiper-slide !w-auto group/svc py-2 md:py-3 !h-auto">
                            <a href="javascript:;" class="cursor-pointer text-cyan-800 bg-cyan-950/10 px-4 md:px-5 py-2 md:py-3 shadow-md group-[.swiper-slide-thumb-active]/svc:shadow-cyan-300 rounded-lg rounded-br-none group-[.swiper-slide-thumb-active]/svc:bg-gradient-to-bl group-[.swiper-slide-thumb-active]/svc:from-cyan-900 group-[.swiper-slide-thumb-active]/svc:to-cyan-700 group-[.swiper-slide-thumb-active]/svc:text-white">Trending Solutions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="relative isolate py-8 sm:py-16 md:py-24 lg:py-32 overflow-hidden bg-gradient-to-br from-sky-950 to-amber-950 text-white select-none">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <div class="mx-auto grid items-center max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg">
                <div class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight font-bold tracking-tight sm:text-4xl">Awards & Recognitions</div>
                <p class="mt-4 text-sm md:text-base opacity-80">IMG Global Infotech's journey is adorned with moments of triumph and recognition. From industry awards validating our innovation to recognitions honing our commitment to quality, here is a testament to our unwavering pursuit of greatness. Discover the tapestry of honors that embellish our legacy and inspire us to reach even greater heights.</p>
            </div>
            <div class="w-full">
                <div class="swiper AwardsRecognitions" 
                    data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 10,
                        "speed": 5000,
                        "autoplay": {"enabled": true, "delay": 0},
                        "loop": true,
                        "effect": "coverflow",
                        "centeredSlides": true,
                        "breakpoints": {
                            "320": {"slidesPerView": 2, "spaceBetween": 20},
                            "480": {"slidesPerView": 2, "spaceBetween": 20},
                            "640": {"slidesPerView": 2, "spaceBetween": 30},
                            "1024": {"slidesPerView": 2, "spaceBetween": 30},
                            "1350": {"slidesPerView": 2, "spaceBetween": 30}
                        }
                    }'
                >
                    <div class="swiper-wrapper !ease-linear flex items-center">
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-white/5 p-2 ring-1 ring-white/10">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <img
                                            loading="lazy"
                                            class="w-20"
                                            width="79"
                                            height="89" 
                                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                                            srcset="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}} 160w"
                                            sizes="80px"
                                            data-src="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}}"
                                            alt="mid-market-1500"
                                        >

                                    </div>
                                    <div class="mt-4 font-semibold text-sm md:text-base">Mid-Market High Performer United States - 2022-2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-white/5 p-2 ring-1 ring-white/10">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <img
                                            loading="lazy"
                                            class="w-20"
                                            width="79"
                                            height="89" 
                                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                                            srcset="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}} 160w"
                                            sizes="80px"
                                            data-src="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}}"
                                            alt="mid-market-1500"
                                        >
                                    </div>
                                    <div class="mt-4 font-semibold text-sm md:text-base">Mid-Market High Performer United States - 2022-2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-white/5 p-2 ring-1 ring-white/10">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <img
                                            loading="lazy"
                                            class="w-20"
                                            width="79"
                                            height="89" 
                                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                                            srcset="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}} 160w"
                                            sizes="80px"
                                            data-src="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}}"
                                            alt="mid-market-1500"
                                        >
                                    </div>
                                    <div class="mt-4 font-semibold text-sm md:text-base">Mid-Market High Performer United States - 2022-2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-white/5 p-2 ring-1 ring-white/10">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <img
                                            loading="lazy"
                                            class="w-20"
                                            width="79"
                                            height="89" 
                                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                                            srcset="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}} 160w"
                                            sizes="80px"
                                            data-src="{{asset('public'.mix('/tailwind/img/mid-market-1500-160w.webp'))}}"
                                            alt="mid-market-1500"
                                        >
                                    </div>
                                    <div class="mt-4 font-semibold text-sm md:text-base">Mid-Market High Performer United States - 2022-2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <svg aria-hidden="true" class="absolute inset-0 -z-10 h-full w-full pointer-events-none text-white/5">
        <defs>
            <pattern id="tuty" width="128" height="128" patternUnits="userSpaceOnUse" x="50%" patternTransform="translate(0 80)">
                <path d="M0 128V.5H128" fill="none" stroke="currentColor"></path>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#tuty)"></rect>
    </svg>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6 pointer-events-none" aria-hidden="true">
        <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-pink-600 to-purple-600 opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>

<div class="container mx-auto py-8 sm:py-16 relative select-none">
    <div class="absolute inset-x-0 top-0 h-96 text-slate-600/10 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
        <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="clientJourneys" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                    <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#clientJourneys)"></rect>
        </svg>
    </div>
    <div class="flex flex-col w-full max-w-7xl mx-auto px-6 md:px-9 lg:px-11 pb-5">
        <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
            <span class="font-normal">Client Journeys to Success -</span> 
            <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> Glimpse of Our Case Studies</span>
        </p>
        <div class="mt-4 text-base md:text-lg leading-7 text-slate-600">Explore our client success stories, witnessing transformative journeys to success. Each case study below reflects our impactful solutions, showcasing innovation, dedication, and tangible results.</div>
    </div>
    <div class="flex flex-row flex-wrap mx-auto max-w-7xl px-3 md:px-6 lg:px-8 group/cS">
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/cStudy">
            <div class="relative [background-image:url(../img/frame12.webp)] bg-purple-600 before:bg-purple-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-purple-700/70">
                <div class="absolute inset-x-0 z-0 top-0 h-96 text-white/20 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="l24" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#l24)"></rect>
                    </svg>
                </div>
                <div class="relative h-full z-10 flex flex-col-reverse p-8 group-hover/cS:py-8 group-hover/cS:px-3 duration-300 group-hover/cStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-purple-950/50 mix-blend-multiply xl:group-hover/cStudy:bg-transparent before:bg-gradient-to-t before:from-purple-950 before:via-purple-900/80 before:to-purple-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/cStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/cStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/cS:translate-y-[calc(100%-20px)] xl:group-hover/cStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 text-base xl:text-xl xl:group-hover/cS:text-base xl:group-hover/cStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-purple-600 via-white to-purple-600 bg-clip-text text-transparent">BOBI Live</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 bg-gradient-to-bl from-purple-300 via-white to-purple-300 bg-clip-text text-transparent">Socializing, interacting, exploring, all fascinating things are here for you !</div>
                        <div class="w-full">
                            <a href="https://www.imgglobalinfotech.com/case-study/bobilive.php" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/cStudy">
            <div class="relative [background-image:url(../img/hozzo.webp)] bg-green-600 before:bg-green-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-green-700/70">
                <div class="absolute inset-x-0 z-0 top-0 h-96 text-white/20 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="u74" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#u74)"></rect>
                    </svg>
                </div>
                <div class="relative h-full z-10 flex flex-col-reverse p-8 group-hover/cS:py-8 group-hover/cS:px-3 duration-300 group-hover/cStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-green-950/50 mix-blend-multiply xl:group-hover/cStudy:bg-transparent before:bg-gradient-to-t before:from-green-950 before:via-green-900/80 before:to-green-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/cStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/cStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/cS:translate-y-[calc(100%-20px)] xl:group-hover/cStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 text-base xl:text-xl xl:group-hover/cS:text-base xl:group-hover/cStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-green-600 via-white to-green-600 bg-clip-text text-transparent">Hozzo - Car wash</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 bg-gradient-to-bl from-green-300 via-white to-green-300 bg-clip-text text-transparent">Waterless car washing services across india</div>
                        <div class="w-full">
                            <a href="https://www.imgglobalinfotech.com/case-study/hozzo.php" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/cStudy">
            <div class="relative [background-image:url(../img/fab11.webp)] bg-emerald-600 before:bg-emerald-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-emerald-700/70">
                <div class="absolute inset-x-0 z-0 top-0 h-96 text-white/20 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="l142" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#l142)"></rect>
                    </svg>
                </div>
                <div class="relative h-full z-10 flex flex-col-reverse p-8 group-hover/cS:py-8 group-hover/cS:px-3 duration-300 group-hover/cStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-emerald-950/50 mix-blend-multiply xl:group-hover/cStudy:bg-transparent before:bg-gradient-to-t before:from-emerald-950 before:via-emerald-900/80 before:to-emerald-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/cStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/cStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/cS:translate-y-[calc(100%-20px)] xl:group-hover/cStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 text-base xl:text-xl xl:group-hover/cS:text-base xl:group-hover/cStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-emerald-600 via-white to-emerald-600 bg-clip-text text-transparent">MyFab11</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 bg-gradient-to-bl from-emerald-300 via-white to-emerald-300 bg-clip-text text-transparent">Principle Partner of KKR. india's most trusted Fantasy Cricket App</div>
                        <div class="w-full">
                            <a href="https://www.imgglobalinfotech.com/case-study/myfab11.php" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/cStudy">
            <div class="relative [background-image:url(../img/fabindia.webp)] bg-red-600 before:bg-red-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-red-700/70">
                <div class="absolute inset-x-0 z-0 top-0 h-96 text-white/20 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="l96" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#l96)"></rect>
                    </svg>
                </div>
                <div class="relative h-full z-10 flex flex-col-reverse p-8 group-hover/cS:py-8 group-hover/cS:px-3 duration-300 group-hover/cStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-red-950/50 mix-blend-multiply xl:group-hover/cStudy:bg-transparent before:bg-gradient-to-t before:from-red-950 before:via-red-900/80 before:to-red-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/cStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/cStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/cS:translate-y-[calc(100%-20px)] xl:group-hover/cStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 text-base xl:text-xl xl:group-hover/cS:text-base xl:group-hover/cStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-red-600 via-white to-red-600 bg-clip-text text-transparent">Fabindia</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 bg-gradient-to-bl from-red-300 via-white to-red-300 bg-clip-text text-transparent">Shop for Handwoven Garments & home fusnishings</div>
                        <div class="w-full">
                            <a href="https://www.imgglobalinfotech.com/case-study/fabindia.php" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:w-24 w-full p-3 relative group/cStudy block text-center">
            <a href="https://www.imgglobalinfotech.com/casestudy.php" class="xl:absolute inset-3 max-xl:py-3 max-xl:px-5 bg-pink-950 cursor-pointer group-hover/cStudy:scale-95 duration-200 ease-in-out rounded-xl rounded-br-none text-sm md:text-base font-bold text-white xl:[writing-mode:vertical-lr] xl:flex inline-flex items-center justify-center">View All CaseStudy</a>
        </div>
    </div>
</div>



<div class="relative bg-gray-900 py-8 sm:py-16 select-none text-white">
    <div class="text-white/10">
        <svg aria-hidden="true" class="absolute inset-0 h-full w-full">
            <defs>
                <pattern id="s11" width="128" height="128" patternUnits="userSpaceOnUse" x="50%" patternTransform="translate(0 80)">
                    <path d="M0 128V.5H128" fill="none" stroke="currentColor"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#s11)"></rect>
        </svg>
    </div>
    <div class="mx-auto px-4 sm:px-6 md:max-w-3xl md:px-4 lg:px-2 relative pb-5">
        <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-center">
            <span class="font-normal">Take A Sneak Peak to Our Portfolio </span> 
            <span class="font-bold bg-gradient-to-r from-gray-100 via-sky-600 to-gray-100 bg-clip-text text-transparent"> And Elevate Your Expectations!</span>
        </p>
    </div>
    <div class="swiper portfolioSwiper w-full" 
        data-swiper='{
            "slidesPerView": 2,
            "spaceBetween": 10,
            "speed": 2000,
            "autoplay": {"enabled": true, "delay": 2500},
            "loop": true,
            "effect": "coverflow",
            "centeredSlides": true,
            "breakpoints": {
                "320": {"slidesPerView": 1.5, "spaceBetween": 20},
                "480": {"slidesPerView": 1.8, "spaceBetween": 20},
                "640": {"slidesPerView": 2.5, "spaceBetween": 30},
                "1024": {"slidesPerView": 3.5, "spaceBetween": 30},
                "1350": {"slidesPerView": 4, "spaceBetween": 30}
            }
        }'
    >
        <div class="swiper-wrapper flex items-center py-5">
            <div class="swiper-slide rounded-2xl overflow-hidden group/pf">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img
                            loading="lazy"
                            class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]"
                            width="256"
                            height="320"
                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                            sizes="(min-width: 1360px) calc(25vw - 30px), (min-width: 1040px) calc(28.33vw - 27px), (min-width: 640px) calc(40vw - 26px), (min-width: 480px) calc(47.14vw + 24px), (min-width: 440px) 279px, (min-width: 340px) calc(50vw + 42px), calc(-750vw + 2599px)"
                            srcset="
                                {{asset('public'.mix('/tailwind/img/myfab11-256w.webp'))}} 256w,
                                {{asset('public'.mix('/tailwind/img/myfab11-750w.webp'))}} 750w,
                                {{asset('public'.mix('/tailwind/img/myfab11-1024w.webp'))}} 1024w,
                                {{asset('public'.mix('/tailwind/img/myfab11-1250w.webp'))}} 1250w,
                                {{asset('public'.mix('/tailwind/img/myfab11-1440w.webp'))}} 1440w
                            "
                            data-src="{{asset('public'.mix('/tailwind/img/myfab11-1024w.webp'))}}"
                            alt="MyFab11 App"
                        >

                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-green-900/70 before:to-green-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">MyFab11 App</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Fantasy Sports App</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden group/pf">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img
                            loading="lazy"
                            class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]"
                            width="256"
                            height="320"
                            src="{{asset('public'.mix('/tailwind/img/health-app-1200w.webp'))}}"
                            sizes="(min-width: 1360px) calc(25vw - 30px), (min-width: 1040px) calc(28.33vw - 27px), (min-width: 640px) calc(40vw - 26px), (min-width: 480px) calc(47.14vw + 24px), (min-width: 440px) 279px, (min-width: 340px) calc(50vw + 42px), calc(-750vw + 2599px)"
                            srcset="
                                {{asset('public'.mix('/tailwind/img/health-app-256w.webp'))}} 256w,
                                {{asset('public'.mix('/tailwind/img/health-app-720w.webp'))}} 720w,
                                {{asset('public'.mix('/tailwind/img/health-app-990w.webp'))}} 990w,
                                {{asset('public'.mix('/tailwind/img/health-app-1200w.webp'))}} 1200w,
                                {{asset('public'.mix('/tailwind/img/health-app-1330w.webp'))}} 1330w,
                                {{asset('public'.mix('/tailwind/img/health-app-1440w.webp'))}} 1440w
                            "
                            data-src="{{asset('public'.mix('/tailwind/img/health-app-256w.webp'))}}"
                            alt="I KNOW"
                        >
                    
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-fuchsia-900/70 before:to-fuchsia-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">I-KNOW</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Health App</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden group/pf">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img
                            loading="lazy"
                            class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]"
                            width="256"
                            height="320"
                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                            sizes="(min-width: 1360px) calc(25vw - 30px), (min-width: 1040px) calc(28.33vw - 27px), (min-width: 640px) calc(40vw - 26px), (min-width: 480px) calc(47.14vw + 24px), (min-width: 440px) 279px, (min-width: 340px) calc(50vw + 42px), calc(-750vw + 2599px)"
                            srcset="
                                {{asset('public'.mix('/tailwind/img/now-vue-256w.webp'))}} 256w,
                                {{asset('public'.mix('/tailwind/img/now-vue-750w.webp'))}} 750w,
                                {{asset('public'.mix('/tailwind/img/now-vue-1024w.webp'))}} 1024w,
                                {{asset('public'.mix('/tailwind/img/now-vue-1250w.webp'))}} 1250w,
                                {{asset('public'.mix('/tailwind/img/now-vue-1440w.webp'))}} 1440w
                            "
                            data-src="{{asset('public'.mix('/tailwind/img/now-vue-256w.webp'))}}"
                            alt="Now Vue"
                        >

                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-amber-900/70 before:to-amber-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">Now Vue</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Guest Check In App</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden group/pf">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img
                            loading="lazy"
                            class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]"
                            width="256"
                            height="320"
                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                            sizes="(min-width: 1360px) calc(25vw - 30px), (min-width: 1040px) calc(28.33vw - 27px), (min-width: 640px) calc(40vw - 26px), (min-width: 480px) calc(47.14vw + 24px), (min-width: 440px) 279px, (min-width: 340px) calc(50vw + 42px), calc(-750vw + 2599px)"
                            srcset="
                                {{asset('public'.mix('/tailwind/img/ipay-256w.webp'))}} 256w,
                                {{asset('public'.mix('/tailwind/img/ipay-720w.webp'))}} 720w,
                                {{asset('public'.mix('/tailwind/img/ipay-990w.webp'))}} 990w,
                                {{asset('public'.mix('/tailwind/img/ipay-1200w.webp'))}} 1200w,
                                {{asset('public'.mix('/tailwind/img/ipay-1330w.webp'))}} 1330w,
                                {{asset('public'.mix('/tailwind/img/ipay-1440w.webp'))}} 1440w
                            "
                            data-src="{{asset('public'.mix('/tailwind/img/ipay-256w.webp'))}}"
                            alt="iPay project"
                        >

                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-indigo-900/70 before:to-indigo-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">iPay</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Recharge App</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden group/pf">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img
                            loading="lazy"
                            class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]"
                            width="256"
                            height="320"
                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                            sizes="(min-width: 1360px) calc(25vw - 30px), (min-width: 1040px) calc(28.33vw - 27px), (min-width: 640px) calc(40vw - 26px), (min-width: 480px) calc(47.14vw + 24px), (min-width: 440px) 279px, (min-width: 340px) calc(50vw + 42px), calc(-750vw + 2599px)"
                            srcset="
                                {{asset('public'.mix('/tailwind/img/destist-online-256w.webp'))}} 256w,
                                {{asset('public'.mix('/tailwind/img/destist-online-720w.webp'))}} 720w,
                                {{asset('public'.mix('/tailwind/img/destist-online-990w.webp'))}} 990w,
                                {{asset('public'.mix('/tailwind/img/destist-online-1200w.webp'))}} 1200w,
                                {{asset('public'.mix('/tailwind/img/destist-online-1330w.webp'))}} 1330w,
                                {{asset('public'.mix('/tailwind/img/destist-online-1440w.webp'))}} 1440w"
                            data-src="{{asset('public'.mix('/tailwind/img/destist-online-256w.webp'))}}"
                            alt="Dentist Online"
                        >

                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-cyan-900/70 before:to-cyan-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">Dentist Online</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Health App</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden group/pf">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img
                            loading="lazy"
                            class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]"
                            width="256"
                            height="320"
                            src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                            sizes="(min-width: 1360px) calc(25vw - 30px), (min-width: 1040px) calc(28.33vw - 27px), (min-width: 640px) calc(40vw - 26px), (min-width: 480px) calc(47.14vw + 24px), (min-width: 440px) 279px, (min-width: 340px) calc(50vw + 42px), calc(-750vw + 2599px)"
                            srcset="
                                {{asset('public'.mix('/tailwind/img/EcoCosmo-Project-256w.webp'))}} 256w,
                                {{asset('public'.mix('/tailwind/img/EcoCosmo-Project-720w.webp'))}} 720w,
                                {{asset('public'.mix('/tailwind/img/EcoCosmo-Project-990w.webp'))}} 990w,
                                {{asset('public'.mix('/tailwind/img/EcoCosmo-Project-1200w.webp'))}} 1200w,
                                {{asset('public'.mix('/tailwind/img/EcoCosmo-Project-1330w.webp'))}} 1330w,
                                {{asset('public'.mix('/tailwind/img/EcoCosmo-Project-1440w.webp'))}} 1440w
                            "
                            data-src="{{asset('public'.mix('/tailwind/img/EcoCosmo-Project-1200w.webp'))}}"
                            alt="EcoCosmo Project"
                        >
                        
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-emerald-900/70 before:to-emerald-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">EcoCosmo</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Tracking App</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="select-none">
    <div class="bg-white py-8 sm:py-16 lg:pt-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="relative isolate overflow-hidden text-center justify-center bg-gray-900 px-6 shadow-2xl rounded-2xl sm:rounded-3xl sm:px-16 lg:flex lg:gap-x-20 lg:px-24">
                <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0 pointer-events-none" aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#l2200)" fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="l2200">
                            <stop offset="0.5" stop-color="#9333ea" />
                            <stop offset="1" stop-color="#db2777" />
                        </radialGradient>
                    </defs>
                </svg>
                <div class="absolute inset-x-0 top-0 h-96 z-0 text-white/20 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="ryhhgfbyi" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#ryhhgfbyi)"></rect>
                    </svg>
                </div>
                <div class="mx-auto max-w-3xl lg:mx-0 lg:flex-auto py-12 md:py-16 lg:py-32 lg:text-left relative z-[1]">
                    <div class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-white font-normal text-center">Let's turn your <span class="font-bold bg-gradient-to-r from-gray-100 via-sky-400 to-gray-100 bg-clip-text text-transparent">business idea into reality</span></div>
                    <p class="mt-6 text-base md:text-lg md:leading-8 text-gray-300 text-center">Do you want to experience the best-in-class quality mobile apps? Send us your inquiry and one of our executives will catch you up in no time by Call, Email or Skype.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="https://www.imgglobalinfotech.com/request-a-quote.php" class="rounded-md rounded-br-none bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Book A Discovery Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white relative py-8 sm:pb-16 lg:pb-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="absolute inset-x-0 top-0 h-96 z-0 text-slate-600/10 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="ryhhgfby" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                            <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#ryhhgfby)"></rect>
                </svg>
            </div>
            <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
                <span class="font-normal">Wide Range of </span> 
                <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> Industries Covered By Us!</span>
            </p>
            <div class="md:text-base text-sm text-black/70 mt-3 mb-lg-1">
                Discover the endless possibilities with our versatile mobile app and web development solutions. From tech to healthcare, we cater to a diverse array of industries, ensuring innovation and excellence across every sector. Explore the major sector we deal in!
            </div>
            
            <div class="flex flex-row flex-wrap w-full gap3 pt-8 font-bold md:text-base text-sm uppercase text-white">
                <div class="xl:w-1/4 md:w-1/3 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/fintech-software-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="296"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 296px, (min-width: 780px) calc(32.29vw - 16px), calc(50vw - 32px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/bank-and-finance-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/bank-and-finance-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/bank-and-finance-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/bank-and-finance-480w.webp'))}}"
                        alt="Banking and Finance Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Banking and Finance</div>
                    </a>
                </div>
                <div class="xl:w-1/3  md:w-1/3 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/fantasy-sports-app-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="297"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1360px) 397px, (min-width: 780px) calc(28.75vw + 12px), calc(50vw - 32px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/fantasy-sports-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/fantasy-sports-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/fantasy-sports-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/fantasy-sports-480w.webp'))}}"
                        alt="Fantasy Sports Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Fantasy Sports</div>
                    </a>
                </div>
                <div class="xl:w-1/6  md:w-1/3 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/healthcare-software-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="194"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 195px, (min-width: 780px) calc(32.29vw - 16px), calc(50vw - 32px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/healthcare-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/healthcare-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/healthcare-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/healthcare-480w.webp'))}}"
                        alt="Healthcare Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Healthcare</div>
                    </a>
                </div>
                <div class="xl:w-1/4 md:w-1/3 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/edtech-software-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="296"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 296px, (min-width: 780px) calc(32.29vw - 16px), calc(50vw - 32px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/edTech-solution-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/edTech-solution-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/edTech-solution-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/edTech-solution-480w.webp'))}}"
                        alt="EdTech Solution Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">EdTech Solution</div>
                    </a>

                
                </div>
                <div class="xl:w-1/4 md:w-1/3 sm:w-1/2 w-full p-1">
                    <a href="https://www.imgglobalinfotech.com/travel-app-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="296"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 296px, (min-width: 780px) calc(32.29vw - 16px), (min-width: 640px) calc(50vw - 32px), calc(100vw - 56px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/travel-and-tourism-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/travel-and-tourism-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/travel-and-tourism-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/travel-and-tourism-480w.webp'))}}"
                        alt="Travel and Tourism Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Travel and Tourism</div>
                    </a>

                
                </div>
                <div class="xl:w-1/2 md:w-1/3 sm:w-1/2 w-full p-1">
                    <a href="https://www.imgglobalinfotech.com/media-and-entertainment-app-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="600"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 600px, (min-width: 780px) calc(32.29vw - 16px), (min-width: 640px) calc(50vw - 32px), calc(100vw - 56px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/media-and-entertainment-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/media-and-entertainment-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/media-and-entertainment-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/media-and-entertainment-480w.webp'))}}"
                        alt="Media and Entertainment Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Media and Entertainment</div>
                    </a>
                </div>
                <div class="xl:w-1/4 md:w-1/3 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="296"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 296px, (min-width: 780px) calc(32.29vw - 16px), calc(50vw - 32px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/retail-and-ecommerce-app-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/retail-and-ecommerce-app-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/retail-and-ecommerce-app-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/retail-and-ecommerce-app-480w.webp'))}}"
                        alt="Retail and Ecommerce App Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Retail and Ecommerce App</div>
                    </a>
                </div>
                <div class="xl:w-1/4 md:w-1/3 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/logistics-software-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="296"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 296px, (min-width: 780px) calc(32.29vw - 16px), calc(50vw - 32px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/logistics-services-app-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/logistics-services-app-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/logistics-services-app-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/logistics-services-app-480w.webp'))}}"
                        alt="Logistics Services App Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Logistics Services App</div>
                    </a>

                
                </div>
                <div class="xl:w-1/6 md:w-1/3 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/social-media-app-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="194"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 195px, (min-width: 780px) calc(32.29vw - 16px), calc(50vw - 32px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/social-app-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/social-app-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/social-app-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/social-app-480w.webp'))}}"
                        alt="Social App Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Social App</div>
                    </a>
                </div>
                <div class="xl:w-1/3 md:w-1/2 w-1/2 p-1">
                    <a href="https://www.imgglobalinfotech.com/real-estate-app-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="397"
                        height="222"
                        sizes="(min-width: 1280px) 397px, calc(49.17vw - 30px)"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/real-estate-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/real-estate-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/real-estate-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/real-estate-480w.webp'))}}"
                        alt="Real Estate Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Real Estate</div>
                    </a>
                </div>
                <div class="xl:w-1/4 md:w-1/2 sm:w-1/2 w-full p-1">
                    <a href="https://www.imgglobalinfotech.com/event-app-development.php" class="relative text-decoration-none group flex items-center rounded-2xl overflow-hidden md:h-[222px] sm:h-[200px] h-[190px] after:absolute after:left-0 after:bottom-0 after:w-full after:h-28 hover:after:h-full after:bg-gradient-to-t after:from-black/70 after:via-black/60 after:to-transparent after:duration-700 duration-300">
                    <img
                        loading="lazy"
                        class="w-full h-full object-cover duration-1000 group-hover:scale-150"
                        width="296"
                        height="222"
                        src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}"
                        sizes="(min-width: 1280px) 296px, (min-width: 640px) calc(48.71vw - 24px), calc(100vw - 56px)"
                        srcset="
                            {{asset('public'.mix('/tailwind/img/on-demand-480w.webp'))}} 480w,
                            {{asset('public'.mix('/tailwind/img/on-demand-800w.webp'))}} 800w,
                            {{asset('public'.mix('/tailwind/img/on-demand-1200w.webp'))}} 1200w
                        "
                        data-src="{{asset('public'.mix('/tailwind/img/on-demand-480w.webp'))}}"
                        alt="Event management Icon"
                    >

                        <div class="group absolute left-0 bottom-0 w-full h-16 group-hover:h-full flex items-center justify-center text-center duration-1000 group-hover:opacity-75 z-20">Event management</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative bg-gray-900 py-8 sm:py-16 select-none text-white">
    <div class="text-white/10">
        <svg aria-hidden="true" class="absolute inset-0 h-full w-full">
            <defs>
                <pattern id="s3" width="128" height="128" patternUnits="userSpaceOnUse" x="50%" patternTransform="translate(0 80)">
                    <path d="M0 128V.5H128" fill="none" stroke="currentColor"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#s3)"></rect>
        </svg>
    </div>
    <div class="mx-auto px-4 sm:px-6 md:max-w-3xl md:px-4 lg:px-2 relative">
        <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-center">
            <span class="font-normal">What Our Clients </span> 
            <span class="font-bold bg-gradient-to-r from-gray-100 via-sky-400 to-gray-100 bg-clip-text text-transparent"> Have to Say?</span>
        </p>
        <div class="md:text-base text-sm opacity-70 mt-3 mb-lg-1 text-center">
            Dive into the testimonials that paint a vivid picture of our journey with our potential client so far. Take a glimpse into our exceptional assistance and begin your success story with us today.
        </div>
    </div>
    <div class="swiper testimonialsSwiper w-full" 
        data-swiper='{
            "slidesPerView": 2,
            "spaceBetween": 10,
            "speed": 2000,
            "autoplay": {"enabled": true, "delay": 2500},
            "loop": true,
            "effect": "coverflow",
            "centeredSlides": true,
            "breakpoints": {
                "320": {"slidesPerView": 1.3, "spaceBetween": 0},
                "480": {"slidesPerView": 1.4, "spaceBetween": 10},
                "640": {"slidesPerView": 1.5, "spaceBetween": 30},
                "1024": {"slidesPerView": 1.8, "spaceBetween": 30},
                "1350": {"slidesPerView": 2, "spaceBetween": 30}
            }
        }'
    >
        <div class="swiper-wrapper flex items-center">
            <div class="swiper-slide rounded-2xl overflow-hidden p-3 md:p-8 group/tst">
                <div class="md:py-8 w-full rounded-2xl overflow-hidden group-[.swiper-slide-active]/tst:delay-0 delay-700 group-[.swiper-slide-active]/tst:opacity-100 opacity-60 duration-300">
                    <div class="mt-10 text-sm md:text-xl lg:text-2xl font-medium tracking-tight sm:text-center">“The client was very satisfied with the final product. IMG Global Infotech Pvt. Ltd provided a quick turnaround and high-quality services. They were able to strategize their deliverables well. The team utilized Scrum for project management and various apps for communication.”</div>
                    
                    <div class="mt-10 flex items-center sm:justify-center">
                        <div class="overflow-hidden rounded-full opacity-80"><img alt="Miss. Alisha Sharma" width="48" height="48" class="h-12 w-12 object-cover text-transparent" loading="lazy" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/testimonial-2.webp'))}}"></div>
                        <div class="ml-4">
                            <div class="text-sm md:text-base font-medium md:leading-6 tracking-tight">Miss. Alisha Sharma</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">Co-Founder, YSR Infotech</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">New Delhi, India</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden p-3 md:p-8 group/tst">
                <div class="md:py-8 w-full rounded-2xl overflow-hidden group-[.swiper-slide-active]/tst:delay-0 delay-700 group-[.swiper-slide-active]/tst:opacity-100 opacity-60 duration-300">
                    <div class="mt-10 text-sm md:text-xl lg:text-2xl font-medium tracking-tight sm:text-center">“IMG Global Infotech Pvt. Ltd helped the client improve their digital presence through the web portal. They finished the project within six months, which exceeded the client's expectations. In addition, they were customer-focused and accommodating to the client's queries.”</div>
                    
                    <div class="mt-10 flex items-center sm:justify-center">
                        <div class="overflow-hidden rounded-full opacity-80"><img alt="Mr. Arun Garg" width="48" height="48" class="h-12 w-12 object-cover text-transparent" loading="lazy" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/testimonial-3.webp'))}}"></div>
                        <div class="ml-4">
                            <div class="text-sm md:text-base font-medium md:leading-6 tracking-tight">Mr. Arun Garg</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">Founder, CoachingSelect.com</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">India</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden p-3 md:p-8 group/tst">
                <div class="md:py-8 w-full rounded-2xl overflow-hidden group-[.swiper-slide-active]/tst:delay-0 delay-700 group-[.swiper-slide-active]/tst:opacity-100 opacity-60 duration-300">
                    <div class="mt-10 text-sm md:text-xl lg:text-2xl font-medium tracking-tight sm:text-center">“IMG Global Infotech Pvt. Ltd impressed the client with the final results. The client also lauded their quality work, proper communication via scrum meetings, efficient project management, and on-time delivery. Due to the success of the collaboration, the client hired them again for other projects..”</div>
                    
                    <div class="mt-10 flex items-center sm:justify-center">
                        <div class="overflow-hidden rounded-full opacity-80"><img alt="Mr. Sandeep Yadav" width="48" height="48" class="h-12 w-12 object-cover text-transparent" loading="lazy" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/testimonial-1.webp'))}}"></div>
                        <div class="ml-4">
                            <div class="text-sm md:text-base font-medium md:leading-6 tracking-tight">Mr. Sandeep Yadav</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">Owner, Coherent Lab LLP</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">India</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden p-3 md:p-8 group/tst">
                <div class="md:py-8 w-full rounded-2xl overflow-hidden group-[.swiper-slide-active]/tst:delay-0 delay-700 group-[.swiper-slide-active]/tst:opacity-100 opacity-60 duration-300">
                    <div class="mt-10 text-sm md:text-xl lg:text-2xl font-medium tracking-tight sm:text-center">“Thanks to IMG Global Infotech's efforts, the project was completed successfully, satisfying the client's expectations. Although work was done remotely, their project management was seamless and efficient.”</div>
                    
                    <div class="mt-10 flex items-center sm:justify-center">
                        <div class="overflow-hidden rounded-full opacity-80"><img alt="Mr. Anikendra Das Choudhury" width="48" height="48" class="h-12 w-12 object-cover text-transparent" loading="lazy" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/testimonial-4.webp'))}}"></div>
                        <div class="ml-4">
                            <div class="text-sm md:text-base font-medium md:leading-6 tracking-tight">Mr. Anikendra Das Choudhury</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">CEO, MyFab11</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">Kolkata, India</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide rounded-2xl overflow-hidden p-3 md:p-8 group/tst">
                <div class="md:py-8 w-full rounded-2xl overflow-hidden group-[.swiper-slide-active]/tst:delay-0 delay-700 group-[.swiper-slide-active]/tst:opacity-100 opacity-60 duration-300">
                    <div class="mt-10 text-sm md:text-xl lg:text-2xl font-medium tracking-tight sm:text-center">“Impressing their partner, IMG Global Infotech Pvt. Ltd brought many customers for the client. Their professionalism and active response were all remarkable, as demonstrated in their project updates every 2-3 days.”</div>
                    
                    <div class="mt-10 flex items-center sm:justify-center">
                        <div class="overflow-hidden rounded-full opacity-80"><img alt="Mr. Bharat Sharma" width="48" height="48" class="h-12 w-12 object-cover text-transparent" loading="lazy" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/t-avatar-1.webp'))}}"></div>
                        <div class="ml-4">
                            <div class="text-sm md:text-base font-medium md:leading-6 tracking-tight">Mr. Bharat Sharma</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">Administrative Head, Injection Service At Home</div>
                            <div class="mt-1 text-sm md:text-sm opacity-70">India</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-white relative overflow-hidden py-8 sm:py-16 lg:pt-24 select-none">
    <svg aria-hidden="true" class="absolute inset-0 z-0 h-full w-full pointer-events-none text-gray-200">
        <defs>
            <pattern id="nhgh" width="128" height="128" patternUnits="userSpaceOnUse" x="50%" patternTransform="translate(0 80)">
                <path d="M0 128V.5H128" fill="none" stroke="currentColor"></path>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#nhgh)"></rect>
    </svg>
    <div class="hidden z-0 sm:absolute sm:-top-10 sm:right-1/2 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl pointer-events-none" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-fuchsia-900 to-lime-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute z-0 -top-52 left-1/2 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu pointer-events-none" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-fuchsia-900 to-lime-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 z-[1] relative">
        <p class="mt-4 max-md:text-xl/tight max-xl:text-2xl/tight text-3xl/tight tracking-[-0.04em] text-black text-center">
            <span class="font-normal block pb-3">Stay Informed Of Latest Innovations and Trends With Our Blogs!</span>
            <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-700 to-gray-500 bg-clip-text text-transparent"> Explore our insightful blogs to stay abreast of the latest innovations and trends. Stay informed, stay ahead.</span>
        </p>
        <div class="mx-auto md:mt-10 flex gap-x-8 gap-y-16 pt-10 sm:pt-8 lg:mx-0">
            <div class="swiper blogsSwiper w-full !overflow-visible" 
                data-swiper='{
                    "slidesPerView": 2,
                    "spaceBetween": 10,
                    "speed": 1000,
                    "loop": false,
                    "effect": "slide",
                    "breakpoints": {
                        "320": {"slidesPerView": 1, "spaceBetween": 30},
                        "480": {"slidesPerView": 1.2, "spaceBetween": 20},
                        "640": {"slidesPerView": 2, "spaceBetween": 30},
                        "1024": {"slidesPerView": 2.6, "spaceBetween": 30},
                        "1350": {"slidesPerView": 3, "spaceBetween": 30}
                    }
                }'
            >
                <div class="swiper-wrapper flex items-center pb-8">
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="{{asset('blog/top-fintech-app-development-companies-in-india')}}" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-[385/221] rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimageTop-FinTech-App-Development-Companies-in-India-2024.webp'))}}" alt="Top FinTech App Development Companies In India 2024">
                            <div class="w-full p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2023-11-27" class="text-gray-500">Dec 15, 2023</time>
                                    <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Mobile App</div>
                                </div>
                                <div class="group relative">
                                    <div class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 line-clamp-2">
                                        Top FinTech App Development Companies In India 2024
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">This blog aims to shed light on the list of the top fintech mobile app development companies in India, showcasing the top 10 players redefining the financial technology landscape in 2024.</p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/lokesh-kumar.webp'))}}" alt="Lokesh Kumar" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Lokesh Kumar</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="{{asset('blog/top-10-trusted-real-estate-app-development-companies-in-india')}}" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-[385/221] rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagetop-10-trusted-real-estate-app-development-companies-in-india.webp'))}}" alt="Top 10 Trusted Real Estate App Development Companies In India">
                            <div class="w-full p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">Dec 11, 2023</time>
                                    <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Mobile App</div>
                                </div>
                                <div class="group relative">
                                    <div class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 line-clamp-2">
                                        Top 10 Trusted Real Estate App Development Companies In India
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">This blog will explore India's top 10 trusted real estate app development companies, with IMG Global Infotech securing the coveted No. 1 position.</p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/mohit-mittal.webp'))}}" alt="Mohit Mittal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Mohit Mittal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="{{asset('blog/loan-lending-mobile-app-development')}}" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-[385/221] rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide.webp'))}}" alt="How To Develop A Loan Lending Mobile App? - A Complete Guide">
                            <div class="w-full p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2023-11-27" class="text-gray-500">Nov 27, 2023</time>
                                    <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Mobile App</div>
                                </div>
                                <div class="group relative">
                                    <div class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 line-clamp-2">
                                        How To Develop A Loan Lending Mobile App? - A Complete Guide
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Developing a loan lending app involves various steps and considerations to ensure functionality, security, and user-friendliness. Here's a detailed guide on how you can go about building one.</p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/dipti-singhal.webp'))}}" alt="Dipti Singhal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Dipti Singhal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="{{asset('blog/top-10-mobile-app-development-companies')}}" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-[385/221] rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagetop-10-mobile-app-development-companies-in-2024.webp'))}}" alt="Top 10 Mobile App Development Companies In 2024">
                            <div class="w-full p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">Nov 16, 2023</time>
                                    <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Mobile App</div>
                                </div>
                                <div class="group relative">
                                    <div class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 line-clamp-2">
                                        Top 10 Mobile App Development Companies In 2024
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">The list of the top 10 mobile app development companies in 2024 listed in this article has demonstrated their expertise, innovation, and commitment to delivering high-quality mobile apps.</p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/mohit-mittal.webp'))}}" alt="Mohit Mittal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Mohit Mittal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="{{asset('blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks')}}" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-[385/221] rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagehow-much-does-it-cost-to-develop-a-real-estate-website-app-like-magicbricks.webp'))}}" alt="How Much Does It Cost To Develop A Real Estate Website & App Like Magicbricks?">
                            <div class="w-full p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">Nov 06, 2023</time>
                                    <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Mobile App</div>
                                </div>
                                <div class="group relative">
                                    <div class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 line-clamp-2">
                                        How Much Does It Cost To Develop A Real Estate Website & App Like Magicbricks?
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Are you ready to embark on a digital journey through the captivating world of real estate? Imagine having the power to browse, compare, and purchase properties right from the comfort of your home.</p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/dipti-singhal.webp'))}}" alt="Dipti Singhal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Dipti Singhal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('scripts')
@endpush