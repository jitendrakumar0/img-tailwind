@extends('tailwind.index2')
@push('meta')
<!--  Title -->
<title>Disclaimer - IMG Global Infotech</title>

<!-- Required meta tags -->
<meta name="title" content="Disclaimer - IMG Global Infotech">
<meta name="description" content="The information contained in this website is for general information purposes only. The information is provided by IMG Global Infotech and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.">
<meta name="keywords" content="IMG Global Infotech, Disclaimer">

<!-- Twitter Meta -->
<meta name="twitter:title" content="Disclaimer - IMG Global Infotech">
<meta name="twitter:description" content="The information contained in this website is for general information purposes only. The information is provided by IMG Global Infotech and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.">


<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}disclaimer.php">
<meta property="og:title" content="Disclaimer - IMG Global Infotech">
<meta property="og:description" content="The information contained in this website is for general information purposes only. The information is provided by IMG Global Infotech and while we endeavour to keep the infordisclaimer/mation up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.">





<meta name="classification" content="IMG Global Infotech, Disclaimer">
<link rel="canonical" href="{{asset('/')}}disclaimer.php">
<meta name="robots" content="index, follow">
@endpush

@push('styles')
@endpush

@section('content')
<div class="food-cus-app-onepmng  <h1>Disclaimer</h1> 
</div>




<div class="mx-auto max-w-7xl px-6 lg:px-8 z-[1] relative py-20 mt-40">
    <div class="w-4/5 mx-auto">
        <div class="font-bold text-[#111457] text-4xl text-center ">Key Features of On-Demand Food Delivery App</div>
        <div class="text-black font-light text-center text-base pt-5 leading-6">Escalate your  food delivery & Ordering business to new heights with our fully-featured white-label <span class="font-semibold text-black text-base">on demand restaurant app development solutions.</span>  Our best-in-class certified food app developers develop highly interfeatures for your online food delivery application.</div>
    </div>
</div>

<div class="bg-gray-100 w-full py-3 relative">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
        <div>
            <ul class="flex items-center justify-center gap-9">
                <li>
                    <a href="javascript:;" class="text-decoration-none py-1 flex items-center font-semibold text-[#111457] relative after:absolute  after:left-0 after:bottom-[-12px] after:w-full after:h-1 after:bg-[#111457] ">Customer App</a>
                </li>
                <li>
                    <a href="javascript:;" class="text-decoration-none py-1 flex items-center font-semibold text-[#111457] relative duration-300 after:absolute  after:left-0 after:bottom-[-12px] after:w-0 after:h-1 after:duration-300 after:bg-[#111457] hover:after:w-full">Driver App</a>
                </li>
                <li>
                    <a href="javascript:;" class="text-decoration-none py-1 flex items-center font-semibold text-[#111457] relative duration-300 after:absolute  after:left-0 after:bottom-[-12px] after:w-0 after:h-1 after:duration-300 after:bg-[#111457] hover:after:w-full">Restaurant App</a>
                </li>
                <li>
                    <a href="javascript:;" class="text-decoration-none py-1 flex items-center font-semibold text-[#111457] relative duration-300 after:absolute  after:left-0 after:bottom-[-12px] after:w-0 after:h-1 after:duration-300 after:bg-[#111457] hover:after:w-full">Admin Panel</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="mx-auto max-w-7xl px-6 lg:px-8 relative py-16 ">
    <div class="w-4/5 mx-auto">
        <div class="font-semibold text-[#111457] text-2xl text-center ">Customer App</div>
        <div class="text-black font-light text-center text-base pt-5 leading-6">A Customer Application is designed with ease to help the customers place their food delivery order by browsing multiple restaurants and its menu.</div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-2/5">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="mobileImg">
                            <img src="{{asset('public'.mix('/tailwind/img/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                        </div>
                    </div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush