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
<script>
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
/></noscript>
<!-- End Meta Pixel Code -->
@endpush

@push('styles')
@endpush

@section('content')
<div class="bg-white">
    <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                <defs>
                    <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                        <stop stop-color="#7775D6" />
                        <stop offset="1" stop-color="#E935C1" />
                    </radialGradient>
                </defs>
            </svg>
            <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Boost your productivity.<br>Start using our app today.</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                    <a href="#" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="relative mt-16 h-80 lg:mt-8">
                <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="App screenshot" width="1824" height="1080">
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush