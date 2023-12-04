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

<div class="flex w-full pt-32 bg-gradient-to-br from-sky-950 to-teal-900 relative before:absolute before:inset-0 before:bg-contain before:bg-repeat before:[background-image:url(https://play.tailwindcss.com/img/grid.svg)]">
    <div class="swiper heroSwiper h-[calc(100vh-128px)]">
        <div class="swiper-wrapper">
          <div class="swiper-slide group py-5">
            <div class="flex h-full items-center justify-center rounded-2xl w-full group-[.swiper-slide-active]:w-[147.5%] group-[.swiper-slide-next]:w-[55%] group-[.swiper-slide-active]:translate-x-[6%] group-[.swiper-slide-next]:translate-x-[101%] translate-x-[10%] duration-500 bg-gradient-to-bl from-sky-900 to-teal-950 shadow-2xl before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:[background-image:url(https://play.tailwindcss.com/img/beams.jpg)]">Slide 1 </div>
          </div>
          <div class="swiper-slide group py-5">
            <div class="flex h-full items-center justify-center rounded-2xl w-full group-[.swiper-slide-active]:w-[147.5%] group-[.swiper-slide-next]:w-[55%] group-[.swiper-slide-active]:translate-x-[6%] group-[.swiper-slide-next]:translate-x-[101%] translate-x-[10%] duration-500 bg-gradient-to-bl from-sky-900 to-teal-950 shadow-2xl before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:[background-image:url(https://play.tailwindcss.com/img/beams.jpg)]">Slide 2</div>
          </div>
          <div class="swiper-slide group py-5">
            <div class="flex h-full items-center justify-center rounded-2xl w-full group-[.swiper-slide-active]:w-[147.5%] group-[.swiper-slide-next]:w-[55%] group-[.swiper-slide-active]:translate-x-[6%] group-[.swiper-slide-next]:translate-x-[101%] translate-x-[10%] duration-500 bg-gradient-to-bl from-sky-900 to-teal-950 shadow-2xl before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:[background-image:url(https://play.tailwindcss.com/img/beams.jpg)]">Slide 3</div>
          </div>
          <div class="swiper-slide group py-5">
            <div class="flex h-full items-center justify-center rounded-2xl w-full group-[.swiper-slide-active]:w-[147.5%] group-[.swiper-slide-next]:w-[55%] group-[.swiper-slide-active]:translate-x-[6%] group-[.swiper-slide-next]:translate-x-[101%] translate-x-[10%] duration-500 bg-gradient-to-bl from-sky-900 to-teal-950 shadow-2xl before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:[background-image:url(https://play.tailwindcss.com/img/beams.jpg)]">Slide 4</div>
          </div>
          <div class="swiper-slide group py-5">
            <div class="flex h-full items-center justify-center rounded-2xl w-full group-[.swiper-slide-active]:w-[147.5%] group-[.swiper-slide-next]:w-[55%] group-[.swiper-slide-active]:translate-x-[6%] group-[.swiper-slide-next]:translate-x-[101%] translate-x-[10%] duration-500 bg-gradient-to-bl from-sky-900 to-teal-950 shadow-2xl before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:[background-image:url(https://play.tailwindcss.com/img/beams.jpg)]">Slide 5</div>
          </div>
          <div class="swiper-slide group py-5">
            <div class="flex h-full items-center justify-center rounded-2xl w-full group-[.swiper-slide-active]:w-[147.5%] group-[.swiper-slide-next]:w-[55%] group-[.swiper-slide-active]:translate-x-[6%] group-[.swiper-slide-next]:translate-x-[101%] translate-x-[10%] duration-500 bg-gradient-to-bl from-sky-900 to-teal-950 shadow-2xl before:absolute before:inset-0 before:bg-cover before:bg-right before:rounded-2xl before:[background-image:url(https://play.tailwindcss.com/img/beams.jpg)]">Slide 6</div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
        {{-- <div class="swiper-scrollbar"></div> --}}
      </div>
</div>
@endsection

@push('scripts')
@endpush