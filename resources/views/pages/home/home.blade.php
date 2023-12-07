@extends('index')
@push('meta')
<!--  Title -->
<title>IT Consulting Company | IT Consulting Services</title>
  <!-- Required meta tags -->
<meta name="title" content="IT Consulting Company | IT Consulting Services" />
<meta name="description" content=" IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses." />
<meta name="keywords" content="IT consulting company, IT consulting services, IT consultant, IT consulting firm, Hire IT consultant, IT company" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="IT Consulting Company | IT Consulting Services">
<meta name="twitter:description" content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}">
<meta property="og:title" content="IT Consulting Company | IT Consulting Services">
<meta property="og:description" content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

<meta name="classification" content="web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app" />
<link rel="canonical" href="{{asset('/')}}" />
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<!-- Meta Pixel Code -->
{{-- <script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
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

<div class="flex w-full pt-32 overflow-hidden relative bg-slate-50">
    
    <div class="swiper heroSwiperThumbsSlider !absolute !inset-0 before:absolute before:inset-0 before:z-[3]">
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
    <div thumbsSlider="" class="swiper heroSwiper min-h-[500px] h-[calc(100vh-128px)] w-full">
        <div class="swiper-wrapper ">
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-yellow-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl bg-cover bg-right [background-image:url(../img/unlock-access-to-bespoke-apps-and-product-innovation-with-us.png)] before:bg-gradient-to-r before:from-yellow-950 before:via-yellow-900 before:to-yellow-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <a class="swiper-button-next opacity-0 position-absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress absolute delay-[600ms] duration-700 opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 bottom-4 z-10 w-8 h-8 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] [transform:rotate(-90deg)] fill-none stroke-[4px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] [--progress:0] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span class="text-xs"></span>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white select-none max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Unlock Access to Bespoke</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-yellow-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">Apps And Product Innovation with Us!</span>
                        </div>
                        <div class="subTitle select-none transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">Step into a digital journey with IMG Global Infotech and unlock the gateway to bespoke applications and groundbreaking product innovations. Experience the future of technology at your fingertips!</div>
                        <div class="mt-10 flex gap-4">
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g id="Coffee_Cup"><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-lime-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl bg-cover bg-right [background-image:url(../img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1.png)] before:bg-gradient-to-r before:from-lime-950 before:via-lime-900 before:to-lime-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <a class="swiper-button-next opacity-0 position-absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress absolute delay-[600ms] duration-700 opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 bottom-4 z-10 w-8 h-8 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] [transform:rotate(-90deg)] fill-none stroke-[4px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] [--progress:0] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span class="text-xs"></span>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white select-none max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Elevate Your Vision with Robust</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-lime-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">And Scalable Mobile App Development!</span>
                        </div>
                        <div class="subTitle select-none transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">IMG Global Infotech’s robust and scalable app development solutions redefine possibilities, ensuring your ideas soar to new heights. Uplifting innovations, one app at a time!</div>
                        <div class="mt-10 flex gap-4">
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g id="Coffee_Cup"><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-sky-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl bg-cover bg-right [background-image:url(../img/level_up_your_business_game_with_fantasy_sports_app_development!.png)] before:bg-gradient-to-r before:from-sky-950 before:via-sky-900 before:to-sky-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <a class="swiper-button-next opacity-0 position-absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress absolute delay-[600ms] duration-700 opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 bottom-4 z-10 w-8 h-8 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] [transform:rotate(-90deg)] fill-none stroke-[4px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] [--progress:0] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span class="text-xs"></span>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white select-none max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Level Up Your Business Game</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-sky-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">with Fantasy Sports App Development!</span>
                        </div>
                        <div class="subTitle select-none transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">From the thrill of cricket and football to the strategy of kabaddi and fantasy stock, IMG fantasy sports app development assistance can turn your vision into a virtual arena where success is the only goal.</div>
                        <div class="mt-10 flex gap-4">
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g id="Coffee_Cup"><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-purple-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl bg-cover bg-right [background-image:url(../img/enhance-your-brand-presence-with-innovative-web-development-solutions.png)] before:bg-gradient-to-r before:from-purple-950 before:via-purple-900 before:to-purple-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <a class="swiper-button-next opacity-0 position-absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress absolute delay-[600ms] duration-700 opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 bottom-4 z-10 w-8 h-8 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] [transform:rotate(-90deg)] fill-none stroke-[4px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] [--progress:0] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span class="text-xs"></span>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white select-none max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Enhance Your Brand Presence</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-purple-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">with Innovative Web Development Solutions!</span>
                        </div>
                        <div class="subTitle select-none transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">Step into the digital spotlight and elevate your brand with our cutting-edge web development solutions. We craft more than websites; we build captivating online experiences that leave a lasting impression.</div>
                        <div class="mt-10 flex gap-4">
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g id="Coffee_Cup"><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide group py-5">
                <div class="flex h-full items-center justify-center rounded-2xl w-full relative group-[.swiper-slide-active]:z-10 lg:group-[.swiper-slide-active]:w-[147.5%] lg:group-[.swiper-slide-next]:w-[55%] lg:group-[.swiper-slide-active]:translate-x-[6%] lg:group-[.swiper-slide-next]:translate-x-[101%] lg:translate-x-[10%] duration-500 shadow-lg shadow-rose-950 before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl bg-cover bg-right [background-image:url(../img/Hire_dedicated_professionals_and_unleash_business_potential_beyond_borders.png)] before:bg-gradient-to-r before:from-rose-950 before:via-rose-900 before:to-rose-800/90 before:mix-blend-multiply after:absolute after:inset-0 after:bg-repeat after:[background-image:url(../img/grid.svg)]">
                    <a class="swiper-button-next opacity-0 position-absolute !inset-0 !mt-0 group-[.swiper-slide-next]:!block !hidden !z-[11] !w-full !h-full"></a>
                    <div class="autoplay-progress absolute delay-[600ms] duration-700 opacity-0 group-[.swiper-slide-active]:opacity-100 flex left-4 bottom-4 z-10 w-8 h-8 items-center justify-center font-bold text-white/80 bg-black/20 rounded-full">
                        <svg viewBox="0 0 48 48" class="absolute [stroke-dasharray:125.6] [transform:rotate(-90deg)] fill-none stroke-[4px] [stroke-dashoffset:calc(125.6*(1-var(--progress)))] [--progress:0] left-0 top-0 z-10 w-full h-full stroke-white/80">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span class="text-xs"></span>
                    </div>
                    <div class="relative p-10 overflow-hidden duration-150 z-10 opacity-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-next]:opacity-100">
                        <div class="title duration-300 text-[0px] group-[.swiper-slide-next]:text-2xl/tight max-xl:group-[.swiper-slide-next]:text-lg/tight font-light text-white select-none max-md:opacity-0 max-md:group-[.swiper-slide-active]:opacity-100 max-md:-translate-x-full max-md:group-[.swiper-slide-active]:translate-x-0 max-md:duration-300 max-md:delay-300 max-md:group-[.swiper-slide-active]:text-2xl/tight max-xl:group-[.swiper-slide-active]:text-3xl/tight group-[.swiper-slide-active]:text-4xl/tight group-[.swiper-slide-prev]:opacity-0 group-[.swiper-slide-prev]:text-4xl/tight">
                            <span class="inline md:group-[.swiper-slide-active]:block">Hire Dedicated Professionals And</span>
                            <span class="font-bold bg-gradient-to-r from-indigo-200 via-rose-600 to-indigo-200 bg-clip-text text-transparent inline group-[.swiper-slide-active]:block">Unleash Business Potential Beyond Borders!</span>
                        </div>
                        <div class="subTitle select-none transition-[transform,opacity] max-md:text-sm/tight text-base/tight font-light text-white/80 pt-5 duration-0 delay-500 -translate-x-full opacity-0 group-[.swiper-slide-active]:translate-x-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:text-[0px] group-[.swiper-slide-next]:delay-0 block">Welcome to a realm where dedicated professionals converge with boundless expertise. Harness the power of our seasoned team and unlock the full potential of your enterprise.</div>
                        <div class="mt-10 flex gap-4">
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[700ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                                <span>
                                    <span class="inline-flex items-center gap-1">
                                        <span>
                                            Consult Our Experts
                                        </span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="duration-0 translate-y-[200%] transition-[transform,opacity] delay-[800ms] opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:duration-500 group-[.swiper-slide-next]:duration-100 group-[.swiper-slide-next]:!h-0 group-[.swiper-slide-next]:overflow-hidden group-[.swiper-slide-next]:delay-0 max-md:hidden inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                                <span class="flex items-center gap-1">
                                    Coffee With Us
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g id="Coffee_Cup"><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="swiper-pagination"></div> --}}
    
        <a class="swiper-button-prev max-lg:!hidden !top-[calc(100%-50%-20px)] !right-5 !left-auto !w-10 !h-10 rounded-full flex items-center justify-center p-0 after:hidden duration-200 opacity-80 hover:opacity-100">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm1.707 6.293a1 1 0 0 0 -1.414 0l-3 3l-.083 .094a1 1 0 0 0 .083 1.32l3 3l.094 .083a1 1 0 0 0 1.32 -.083l.083 -.094a1 1 0 0 0 -.083 -1.32l-2.292 -2.293l2.292 -2.293l.083 -.094a1 1 0 0 0 -.083 -1.32z" fill="currentColor" class="fill-white" stroke-width="0"></path></svg>
        </a>
        <a class="swiper-button-next max-lg:!hidden !top-[calc(100%-50%--20px)] !right-5 !left-auto !w-10 !h-10 rounded-full flex items-center justify-center p-0 after:hidden duration-200 opacity-80 hover:opacity-100">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 2c-.218 0 -.432 .002 -.642 .005l-.616 .017l-.299 .013l-.579 .034l-.553 .046c-4.785 .464 -6.732 2.411 -7.196 7.196l-.046 .553l-.034 .579c-.005 .098 -.01 .198 -.013 .299l-.017 .616l-.004 .318l-.001 .324c0 .218 .002 .432 .005 .642l.017 .616l.013 .299l.034 .579l.046 .553c.464 4.785 2.411 6.732 7.196 7.196l.553 .046l.579 .034c.098 .005 .198 .01 .299 .013l.616 .017l.642 .005l.642 -.005l.616 -.017l.299 -.013l.579 -.034l.553 -.046c4.785 -.464 6.732 -2.411 7.196 -7.196l.046 -.553l.034 -.579c.005 -.098 .01 -.198 .013 -.299l.017 -.616l.005 -.642l-.005 -.642l-.017 -.616l-.013 -.299l-.034 -.579l-.046 -.553c-.464 -4.785 -2.411 -6.732 -7.196 -7.196l-.553 -.046l-.579 -.034a28.058 28.058 0 0 0 -.299 -.013l-.616 -.017l-.318 -.004l-.324 -.001zm-1.707 6.293a1 1 0 0 1 1.32 -.083l.094 .083l3 3a1 1 0 0 1 .083 1.32l-.083 .094l-3 3a1 1 0 0 1 -1.497 -1.32l.083 -.094l2.292 -2.293l-2.292 -2.293a1 1 0 0 1 -.083 -1.32l.083 -.094z" fill="currentColor" class="fill-white" stroke-width="0"></path></svg>
        </a>
    
        {{-- <div class="swiper-scrollbar"></div> --}}
    </div>
</div>


<div class="bg-slate-50 pb-6 sm:pb-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
        <div class="swiper logo-clouds before:bg-gradient-to-r before:from-slate-50 before:to-transparent before:w-32 before:z-10 before:inset-0 before:absolute before:pointer-events-none after:bg-gradient-to-l after:from-slate-50 after:to-transparent after:w-32 after:z-10 after:inset-0 after:absolute after:pointer-events-none after:left-auto">
            <div class="swiper-wrapper !ease-linear mt-10 flex items-center">
                <a class="swiper-slide !h-7">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-titan.svg') }}" alt="logo-clouds-titan" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-adani.svg') }}" alt="logo-clouds-adani" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-fabindia.svg') }}" alt="logo-clouds-fabindia" alt="Tuple" width="158" height="48">
                </a>
                <a class="swiper-slide !h-10">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-hero.svg') }}" alt="logo-clouds-hero" width="158" height="48">
                </a>
                <a class="swiper-slide !h-10">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-myfab11.svg') }}" alt="logo-clouds-myfab11" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-parle.svg') }}" alt="logo-clouds-parle" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-tata.svg') }}" alt="logo-clouds-tata" width="158" height="48">
                </a>
                <a class="swiper-slide !h-7">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-titan.svg') }}" alt="logo-clouds-titan" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-adani.svg') }}" alt="logo-clouds-adani" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-fabindia.svg') }}" alt="logo-clouds-fabindia" alt="Tuple" width="158" height="48">
                </a>
                <a class="swiper-slide !h-10">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-hero.svg') }}" alt="logo-clouds-hero" width="158" height="48">
                </a>
                <a class="swiper-slide !h-10">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-myfab11.svg') }}" alt="logo-clouds-myfab11" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-parle.svg') }}" alt="logo-clouds-parle" width="158" height="48">
                </a>
                <a class="swiper-slide !h-9">
                    <img class="col-span-2 mx-auto hover:scale-90 h-full !w-auto duration-200 cursor-pointer max-h-12 object-contain lg:col-span-1" src="{{ asset('/img/logo-clouds-tata.svg') }}" alt="logo-clouds-tata" width="158" height="48">
                </a>
            </div>
        </div>
    </div>
</div>


<div class="relative -mt-[5.75rem] overflow-hidden bg-slate-50 pt-12 md:pt-[5.75rem]">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
        <div class="absolute inset-y-0 hidden w-full min-w-[1360px] bg-[url('/img/beams1.png')] bg-[length:2000px_100%] bg-[position:calc(50%_+_220px)_-50px] bg-no-repeat lg:block"></div>
        <div class="mx-auto max-w-container gap-7 px-4 pt-4 sm:px-6 lg:flex lg:px-8">
            <div class="relative z-10 hidden lg:block select-none pointer-events-none">
                <div class="mt-6 flex [transform:rotateY(180deg)]">
                    <div class="relative flex-shrink-0 p-4">
                        <div class="relative z-10 overflow-hidden rounded-xl shadow-xl shadow-theme5/20 ring-1 ring-slate-900/5"><img class="object-cover h-[404px] w-[336px]" src="/img/unlock-access-to-bespoke-apps-and-product-innovation-with-us.png"></div>
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
                        <div class="overflow-hidden rounded-xl shadow-xl shadow-theme5/20 ring-1 ring-slate-900/5"><img class="object-cover h-[404px] w-[336px]" src="/img/elevate-your-vision-with-robust-and-scalable-mobile-app-development1.png"></div>
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
                    <div class="relative flex-shrink-0 p-4">
                        <div class="overflow-hidden rounded shadow-xl ring-1 ring-slate-900/5"><img class="h-[404px] w-[336px]" src="/img/headers/templates/primer.png"></div>
                        <div>
                        <div class="absolute -left-12 -right-8 top-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative z-20 mx-auto max-w-[40rem] pb-16 pt-16 lg:mx-0 lg:w-[40rem] lg:max-w-none lg:flex-none lg:pb-24 lg:pr-4 lg:pt-20">
                <p class="mt-4 select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black"><span class="font-normal">A Quick Insight Into</span> <span class="font-bold bg-gradient-to-r from-theme6 via-yellow-600 to-theme6 bg-clip-text text-transparent">IMG Global Infotech</span></p>
                <p class="mt-4 select-none text-base leading-7 text-slate-600">Discover innovation and excellence at IMG Global Infotech! Immerse yourself in cutting-edge services and high-quality development solutions that redefine the digital landscape. Our dynamic work environment fosters creativity and collaboration to fuel groundbreaking ideas.</p>
                <p class="mt-4 select-none text-base leading-7 text-slate-600">At IMG, we pride ourselves on timely delivery, transforming visions into reality. From mobile app development to custom software solutions and dedicated developer hiring, we cater to businesses of all scales. Experience top-notch development, reasonable prices, and a partnership that exceeds expectations – at IMG Global Infotech, we make digital dreams come true.</p>

                <div class="mt-8 flex gap-4">
                    <a href="javascript:;" class="inline-flex rounded-br-none justify-center rounded-lg text-sm font-semibold py-3 px-4 bg-slate-900 text-white hover:bg-slate-700"><span class="select-none">Read More <span aria-hidden="true" class="text-slate-400 sm:inline">→</span></span></a>
                    <a class="inline-flex rounded-br-none justify-center rounded-lg text-sm font-semibold py-3 px-4 bg-white/0 text-slate-900 ring-1 ring-slate-900/10 hover:bg-white/25 hover:ring-slate-900/15 " href="javascript:;">
                        <span class="select-none">
                        Coffee With Us <span aria-hidden="true" class="text-black/25 sm:inline">→</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="relative z-10 hidden lg:block select-none pointer-events-none">
                <div class="mt-6 flex">
                    <div class="relative flex-shrink-0 p-4">
                        <div class="relative z-10 overflow-hidden rounded-xl shadow-xl shadow-theme5/20 ring-1 ring-slate-900/5 invisible">
                            <div class="object-cover h-[404px] w-[336px]"></div>
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


<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-yellow-700 to-pink-700 opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 select-none">
            <input type="radio" name="mainly" checked id="Inception" class="hidden peer/Inception">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-4xl hidden peer-checked/Inception:block">Inception</h2>
            <p class="mt-6 text-base leading-8 text-gray-300 hidden peer-checked/Inception:block">Commence on a digital journey with IMG Global Infotech, where ideas unfold into cutting-edge solutions, shaping a dynamic future.</p>
            <input type="radio" name="mainly" id="Innovation" class="hidden peer/Innovation">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-4xl hidden peer-checked/Innovation:block">Innovation</h2>
            <p class="mt-6 text-base leading-8 text-gray-300 hidden peer-checked/Innovation:block">IMG Global Infotech pioneers transformative solutions, pushing boundaries to redefine industries via inventive technology.</p>
            <input type="radio" name="mainly" id="Experience" class="hidden peer/Experience">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-4xl hidden peer-checked/Experience:block">Experience</h2>
            <p class="mt-6 text-base leading-8 text-gray-300 hidden peer-checked/Experience:block">Boosting online presence with a skilled team, crafting immersive experiences that resonate with precision and expertise.</p>
            <input type="radio" name="mainly" id="Expertise" class="hidden peer/Expertise">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-4xl hidden peer-checked/Expertise:block">Expertise</h2>
            <p class="mt-6 text-base leading-8 text-gray-300 hidden peer-checked/Expertise:block">Navigate the complex digital landscape with IMG Global Infotech's mastery, delivering tailored solutions fueled by unparalleled industry knowledge.</p>
            <input type="radio" name="mainly" id="Assurance" class="hidden peer/Assurance">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-4xl hidden peer-checked/Assurance:block">Assurance</h2>
            <p class="mt-6 text-base leading-8 text-gray-300 hidden peer-checked/Assurance:block">Trust our unwavering commitment to reliability, security, and excellence, ensuring your digital endeavors thrive with confidence.</p>
        </div>
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                <label class="cursor-pointer" for="Inception"><a>Inception <span aria-hidden="true">&rarr;</span></a></label>
                <label class="cursor-pointer" for="Innovation"><a>Innovation <span aria-hidden="true">&rarr;</span></a></label>
                <label class="cursor-pointer" for="Experience"><a>Experience <span aria-hidden="true">&rarr;</span></a></label>
                <label class="cursor-pointer" for="Expertise"><a>Expertise <span aria-hidden="true">&rarr;</span></a></label>
                <label class="cursor-pointer" for="Assurance"><a>Assurance <span aria-hidden="true">&rarr;</span></a></label>
            </div>
            <dl class="mt-16 grid grid-cols-1 gap-x-8 gap-y-10 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 select-none">
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Years’ Experience</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">11</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Countries Served</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">80+</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Successful Projects</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">1000+</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Client Retention Rate</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">95%</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Clients Worldwide</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">1000+</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Five Star Reviews</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">250+</dd>
                </div>
            </dl>
        </div>
    </div>
</div>



<div class="container mx-auto py-10 relative">
    <div class="absolute inset-x-0 top-0 h-96 text-slate-600/10 [mask-image:linear-gradient(to_top,transparent,white)]">
        <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="pricing-pattern" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                    <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#pricing-pattern)"></rect>
        </svg>
    </div>
    <div class="flex flex-col w-full max-w-7xl mx-auto px-9 lg:px-11 pb-5">
        <p class="mt-4 select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
            <span class="font-normal">Client Journeys to Success –</span> 
            <span class="font-bold bg-gradient-to-r from-theme6 via-yellow-600 to-theme6 bg-clip-text text-transparent"> Glimpse of Our Case Studies</span>
        </p>
        <div class="mt-4 select-none text-base md:text-lg leading-7 text-slate-600">Explore our client success stories, witnessing transformative journeys to success. Each case study below reflects our impactful solutions, showcasing innovation, dedication, and tangible results.</div>
    </div>
    <div class="flex flex-row flex-wrap mx-auto max-w-7xl px-6 lg:px-8 group/caseStudies">
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/caseStudy">
            <div class="relative [background-image:url(https://www.imgglobalinfotech.com/public/assets/img/hero-section/frame12.webp)] bg-purple-600 before:bg-purple-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-purple-700/70">
                <div class="relative h-full flex flex-col-reverse p-8 group-hover/caseStudies:py-8 group-hover/caseStudies:px-3 duration-300 group-hover/caseStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-purple-950/50 mix-blend-multiply xl:group-hover/caseStudy:bg-transparent before:bg-gradient-to-t before:from-purple-950 before:via-purple-900/80 before:to-purple-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/caseStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/caseStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/caseStudies:translate-y-[calc(100%-20px)] xl:group-hover/caseStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 select-none text-base xl:text-xl xl:group-hover/caseStudies:text-base xl:group-hover/caseStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-purple-600 via-white to-purple-600 bg-clip-text text-transparent">BOBI Live</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 select-none bg-gradient-to-bl from-purple-300 via-white to-purple-300 bg-clip-text text-transparent">Socializing, interacting, exploring, all fascinating things are here for you !</div>
                        <div class="w-full">
                            <a href="javascript:;" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/caseStudy">
            <div class="relative [background-image:url(https://www.imgglobalinfotech.com/public/assets/img/hero-section/hozzo.webp)] bg-green-600 before:bg-green-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-green-700/70">
                <div class="relative h-full flex flex-col-reverse p-8 group-hover/caseStudies:py-8 group-hover/caseStudies:px-3 duration-300 group-hover/caseStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-green-950/50 mix-blend-multiply xl:group-hover/caseStudy:bg-transparent before:bg-gradient-to-t before:from-green-950 before:via-green-900/80 before:to-green-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/caseStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/caseStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/caseStudies:translate-y-[calc(100%-20px)] xl:group-hover/caseStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 select-none text-base xl:text-xl xl:group-hover/caseStudies:text-base xl:group-hover/caseStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-green-600 via-white to-green-600 bg-clip-text text-transparent">Hozzo - Car wash</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 select-none bg-gradient-to-bl from-green-300 via-white to-green-300 bg-clip-text text-transparent">Waterless car washing services across india</div>
                        <div class="w-full">
                            <a href="javascript:;" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/caseStudy">
            <div class="relative [background-image:url(https://www.imgglobalinfotech.com/public/assets/img/hero-section/fab11.webp)] bg-emerald-600 before:bg-emerald-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-emerald-700/70">
                <div class="relative h-full flex flex-col-reverse p-8 group-hover/caseStudies:py-8 group-hover/caseStudies:px-3 duration-300 group-hover/caseStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-emerald-950/50 mix-blend-multiply xl:group-hover/caseStudy:bg-transparent before:bg-gradient-to-t before:from-emerald-950 before:via-emerald-900/80 before:to-emerald-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/caseStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/caseStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/caseStudies:translate-y-[calc(100%-20px)] xl:group-hover/caseStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 select-none text-base xl:text-xl xl:group-hover/caseStudies:text-base xl:group-hover/caseStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-emerald-600 via-white to-emerald-600 bg-clip-text text-transparent">MyFab11</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 select-none bg-gradient-to-bl from-emerald-300 via-white to-emerald-300 bg-clip-text text-transparent">Principle Partner of KKR. india's most trusted Fantasy Cricket App</div>
                        <div class="w-full">
                            <a href="javascript:;" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 xl:w-1/4 w-full p-3 xl:flex-1 xl:hover:flex-[3] duration-500 group/caseStudy">
            <div class="relative [background-image:url(https://www.imgglobalinfotech.com/public/assets/img/hero-section/fabindia.webp)] bg-red-600 before:bg-red-700/50 before:mix-blend-multiply before:absolute before:inset-0 before:z-0 bg-no-repeat bg-contain bg-center h-96 rounded-xl overflow-hidden shadow-md shadow-red-700/70">
                <div class="relative h-full flex flex-col-reverse p-8 group-hover/caseStudies:py-8 group-hover/caseStudies:px-3 duration-300 group-hover/caseStudy:!p-8">
                    <div class="absolute duration-500 inset-0 before:absolute before:inset-0 bg-red-950/50 mix-blend-multiply xl:group-hover/caseStudy:bg-transparent before:bg-gradient-to-t before:from-red-950 before:via-red-900/80 before:to-red-700/10 z-0 before:z-0 before:translate-y-1/4 max-xl:before:translate-y-0 xl:before:group-hover/caseStudy:translate-y-0 before:duration-300"></div>
                    <div class="w-full flex flex-col relative z-10 gap-4 xl:group-hover/caseStudy:delay-200 delay-0 translate-y-[calc(100%-20px)] xl:group-hover/caseStudies:translate-y-[calc(100%-20px)] xl:group-hover/caseStudy:!translate-y-0 max-xl:!translate-y-0 duration-300">
                        <div class="w-full">
                            <span class="rounded-md rounded-br-none duration-300 select-none text-base xl:text-xl xl:group-hover/caseStudies:text-base xl:group-hover/caseStudy:text-base py-1 px-3 backdrop-blur-lg shadow bg-black/10 font-semibold inline-block bg-gradient-to-bl from-red-600 via-white to-red-600 bg-clip-text text-transparent">Fabindia</span>
                        </div>
                        <div class="w-full font-bold text-xl mb-4 select-none bg-gradient-to-bl from-red-300 via-white to-red-300 bg-clip-text text-transparent">Shop for Handwoven Garments & home fusnishings</div>
                        <div class="w-full">
                            <a href="javascript:;" class="inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-white bg-white/20 xl:hover:ring-gray-400 text-white duration-300 backdrop-blur-md shadow-sm shadow-white/50">View Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:w-24 w-full p-3 relative group/caseStudy block text-center">
            <a class="xl:absolute inset-3 max-xl:py-3 max-xl:px-5 bg-pink-950 cursor-pointer group-hover/caseStudy:scale-95 duration-200 ease-in-out rounded-xl rounded-br-none text-base font-bold text-white xl:[writing-mode:vertical-lr] xl:flex inline-flex items-center justify-center">View All CaseStudy</a>
        </div>
    </div>
</div>


<div class="relative isolate py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid items-center max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg">
                <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Awards & Recognitions</h2>
                <p class="mt-4 text-base text-gray-600">IMG Global Infotech’s journey is adorned with moments of triumph and recognition. From industry awards validating our innovation to recognitions honing our commitment to quality, here is a testament to our unwavering pursuit of greatness. Discover the tapestry of honors that embellish our legacy and inspire us to reach even greater heights.</p>
            </div>
            <dl class="w-full">
                <div class="swiper AwardsRecognitions">
                    <div class="swiper-wrapper !ease-linear flex items-center">
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-black/5 p-2 ring-1 ring-black/10">
                                    <div class="rounded-md bg-black/5 p-2 ring-1 ring-black/10">
                                        <img class="w-20" src="https://www.imgglobalinfotech.com/public/assets/img/hero-section/mid-market-1500.webp" alt="mid-market-1500">
                                    </div>
                                    <dt class="mt-4 font-semibold text-black">Mid-Market High Performer United States – 2022-2023</dt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-black/5 p-2 ring-1 ring-black/10">
                                    <div class="rounded-md bg-black/5 p-2 ring-1 ring-black/10">
                                        <img class="w-20" src="https://www.imgglobalinfotech.com/public/assets/img/hero-section/mid-market-1500.webp" alt="mid-market-1500">
                                    </div>
                                    <dt class="mt-4 font-semibold text-black">Mid-Market High Performer United States – 2022-2023</dt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-black/5 p-2 ring-1 ring-black/10">
                                    <div class="rounded-md bg-black/5 p-2 ring-1 ring-black/10">
                                        <img class="w-20" src="https://www.imgglobalinfotech.com/public/assets/img/hero-section/mid-market-1500.webp" alt="mid-market-1500">
                                    </div>
                                    <dt class="mt-4 font-semibold text-black">Mid-Market High Performer United States – 2022-2023</dt>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-2xl overflow-hidden">
                            <div class="flex flex-col items-center text-center">
                                <div class="flex flex-col items-center text-center py-4 rounded-2xl bg-black/5 p-2 ring-1 ring-black/10">
                                    <div class="rounded-md bg-black/5 p-2 ring-1 ring-black/10">
                                        <img class="w-20" src="https://www.imgglobalinfotech.com/public/assets/img/hero-section/mid-market-1500.webp" alt="mid-market-1500">
                                    </div>
                                    <dt class="mt-4 font-semibold text-black">Mid-Market High Performer United States – 2022-2023</dt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </dl>
        </div>
    </div>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
        <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-pink-600 to-purple-600 opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>



<div class="bg-white">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative isolate overflow-hidden text-center justify-center bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415)" fill-opacity="0.7" />
                <defs>
                    <radialGradient id="759c1415">
                        <stop stop-color="#9333ea" />
                        <stop offset="1" stop-color="#db2777" />
                    </radialGradient>
                </defs>
            </svg>
            <div class="mx-auto max-w-3xl lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                <h2 class="select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-white font-normal text-center">Let’s turn your <span class="font-bold bg-gradient-to-r from-fuchsia-800 via-purple-600 to-fuchsia-800 bg-clip-text text-transparent">business idea into reality</span></h2>
                <p class="mt-6 text-lg leading-8 text-gray-300 text-center">Do you want to experience the best-in-class quality mobile apps? Send us your inquiry and one of our executives will catch you up in no time by Call, Email or Skype.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Book A Discovery Call</a>
                    {{-- <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush