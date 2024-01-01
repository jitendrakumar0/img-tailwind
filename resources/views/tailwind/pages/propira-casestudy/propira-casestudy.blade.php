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
<div class="hidden">
    <h1>Disclaimer</h1> 
</div>


{{-- Home section  Start --}}
    <div class="relative pt-16 md:pt-20 lg:pt-32 select-none overflow-hidden">
        <svg class="absolute inset-0 h-full w-full text-white/20" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="ryhhgfbyi" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                    <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#ryhhgfbyi)"></rect>
        </svg>
        <div class="text-black/10">
            <div class="hhyy">
                <div class="flex flex-wrap items-center bg-[#d90202]">
                    <div class="textDiv w-full md:w-1/2 pt-6 pb-4 sm:py-8 md:py-12 px-4 md:px-12">
                        <div class="logo h-[50px] sm:h-[74px] w-[85px] sm:w-[120px]">
                            <img src="{{asset('public'.mix('/tailwind/img/PropiraLogo.webp'))}}" alt="thanku" class="img-fluid h-full w-full ">
                        </div>
                        <div class="relative after:content-[''] after:absolute after:w-[18%] after:h-[3px] after:bg-white after:top-0 after:left-0 mt-4"></div>
                        <div class="head text-2xl sm:text-3xl lg:text-4xl font-[700] text-white pt-5 sm:pt-10 md:pt-12 lg:pt-16">Propira</div>
                        <div class="description text-sm sm:text-base font-normal text-white pt-5 lg:pr-8">
                            Propira is a real estate website that helps people buy, sell, or rent properties in Rajasthan. Propira real estate website have a large database of properties and buyers and sellers. They also have a team of expert agents who can help you find the right property. Propira provides free assistance with legal and documentation. If you are a real estate business owner, developing a website like Propira could be the best bet!
                        </div>
                    </div>
                    <div class="imgDiv w-full md:w-1/2 h-[40vh] sm:h-[80vh]">
                        <img src="{{asset('public'.mix('/tailwind/img/Propira01.webp'))}}" alt="thanku" class="img-fluid h-full w-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Home Section End --}}

{{-- propira Solution Section start --}}
    <div class="flex items-center flex-wrap">
        <div class="w-full sm:w-[65%] bg-white">
            <div class="textSetion w-full sm:w-[75%] px-4 sm:px-16 xl:px-20 py-4 sm:py-8 md:py-12 lg:py-16 xl:py-20">
                <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] ">
                    <span class="font-normal text-black">Propira:</span> 
                    <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> Your One-stop Real Estate Solution</span>
                </p>
                <div class="text-sm text-black sm:text-base md:text-base lg:text-xl !leading-[120%]  pt-5 md:pt-8">
                    Have a glimpse at Propira, where your real estate journey finds its perfect home. As your premier one-stop solution, we redefine the essence of property transactions. Explore a seamless experience with Propira buying, selling, and investing.
                </div>
            </div>
        </div>
        <div class="w-full sm:w-[35%] sm:bg-[#d90202] py-5 sm:py-20">
            <div class="sm:ml-[-50%] sm:aspect-[2/1.8] px-4 sm:px-0 me-40 sm:mx-20 object-cover">
                <img src="{{asset('public'.mix('/tailwind/img/Propira02.webp'))}}" alt="thanku" class="img-fluid h-full w-full ">
            </div>
        </div>
    </div>
    <div class="w-full sm:w-[90%] xl:w-[80%] flex flex-wrap items-center shadow-2xl mx-auto md:mt-[-50px]">
        <div class="w-full sm:w-1/3 text-base lg:text-xl !leading-[140%] py-4 xl:py-7 px-10 md:px-16 xl:px-24 bg-white text-center">
            Comprehensive <span class="font-semibold">Property</span> Listing
        </div>
        <div class="w-full sm:w-1/3 text-base lg:text-xl !leading-[140%] py-4 xl:py-7 px-10 md:px-16 xl:px-24 bg-[#d90202] text-center text-white">
            Advanced Search <span class="font-semibold">&</span> Filtering
        </div>
        <div class="w-full sm:w-1/3 text-base lg:text-xl !leading-[140%] py-4 xl:py-7 px-10 md:px-16 xl:px-24 bg-white text-center">
            Expert Guidance <span class="font-semibold">&</span> Services
        </div>
    </div>
{{-- propira Solution Section Ends --}}

{{-- section Third Start --}}
    <div class="py-4 sm:py-8 md:py-14 lg:py-20 max-w-7xl  px-4 md:px-6 lg:px-20 mx-auto">
        <div class="header">
            <p class="mt-4 text-center max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] pb-5">
                <span class="font-normal">Solution</span> 
                <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> delivered</span>
            </p>
        </div>
        <div class="flex items-center flex-wrap">
            <div class="imgSide sm:mx-auto w-[80%] lg:w-1/2 px-5 md:px-10 aspect-[1/1]">
                <img src="{{asset('public'.mix('/tailwind/img/Propira03.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
            <div class="txtSide w-full lg:w-1/2 px-3 sm:px-5 md:px-10 lg:px-0">
                <div class="heading text-xl sm:text-2xl lg:text-2xl font-semibold">
                    Discover Your Dream Space with Propira's Comprehensive Property Listings
                </div>
                <div class="text-sm pt-3 sm:pt-5 opacity-60">
                    Propira offers a curated collection of homes that cater to every lifestyle. Immerse yourself in a visual journey through our diverse range of residences, commercial spaces, and investment opportunities. Whether you seek a cozy nest, a bustling commercial hub, or a savvy investment, Propira's listings transcend the ordinary, offering a tapestry of possibilities.
                </div>
                <div class="list pt-4 md:pt-7 lg:pt-10">
                    <ul class="list-disc">
                        <li class="text-sm md:text-base font-semibold">
                            Diverse Lifestyle Options
                            <div class="text-sm font-normal py-2 opacity-60">
                                Explore Propira's curated collection of homes designed to cater to every lifestyle.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Immersive Visual Journey
                            <div class="text-sm font-normal py-2 opacity-60">
                                Immerse yourself in stunning imagery and vivid descriptions, bringing properties to life.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Beyond the Ordinary
                            <div class="text-sm font-normal py-2 opacity-60">
                                Propira's listings go beyond the ordinary, offering a tapestry of possibilities.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Seamless Property Exploration
                            <div class="text-sm font-normal py-2 opacity-60">
                                Navigate your property exploration seamlessly with Propira's user-friendly platform.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex items-center flex-wrap pt-6 sm:pt-12 lg:pt-20">
            <div class="txtSide w-full lg:w-1/2 px-3 sm:px-5 md:px-10 lg:px-0 order-2 lg:order-1">
                <div class="heading text-xl sm:text-2xl lg:text-2xl font-semibold">
                    Embark On A Journey Of Precision With Propira's Advanced Search & Filtering
                </div>
                <div class="text-sm pt-3 sm:pt-5 opacity-60">
                    Navigate through the vast property landscape effortlessly, customizing your search to match your unique aspirations. Whether you crave a serene abode or a dynamic commercial space, our intuitive interface allows you to fine-tune every detail. Propira transforms your property quest into a tailored adventure, ensuring that every search leads you closer.
                </div>
                <div class="list pt-4 md:pt-7 lg:pt-10">
                    <ul class="list-disc">
                        <li class="text-sm md:text-base font-semibold">
                            Tailored Exploration
                            <div class="text-sm font-normal py-2 opacity-60">
                                Navigate through Propira's Advanced Search and Filtering to tailor your property exploration.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Effortless Precision
                            <div class="text-sm font-normal py-2 opacity-60">
                                Experience effortless precision in your search with Propira's real estate solution.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Detailed Customization
                            <div class="text-sm font-normal py-2 opacity-60">
                                Propira's advanced features enable detailed customization and ensure refined searching.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Transformative Experience
                            <div class="text-sm font-normal py-2 opacity-60">
                                Transform the way you explore properties and get a precisely tailored real estate experience.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="imgSide sm:mx-auto w-[80%] lg:w-1/2 px-5 md:px-10 aspect-[1/1] order-1 lg:order-2">
                <img src="{{asset('public'.mix('/tailwind/img/Propira04.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
        </div>
        <div class="flex items-center flex-wrap pt-6 sm:pt-12 lg:pt-20">
            <div class="imgSide sm:mx-auto w-[80%] lg:w-1/2 px-5 md:px-10 aspect-[1/1]">
                <img src="{{asset('public'.mix('/tailwind/img/Propira05.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
            <div class="txtSide w-full lg:w-1/2 px-3 sm:px-5 md:px-10 lg:px-0">
                <div class="heading text-xl sm:text-2xl lg:text-2xl font-semibold">
                    Get Unparalleled Real Estate Excellence with Propira’s Expert Guidance & Services
                </div>
                <div class="text-sm pt-3 sm:pt-5 opacity-60">
                    From personalized consultations to meticulous market analysis, Propira curates a bespoke experience tailored to your unique needs. Whether you're buying your dream home, selling a property, or navigating real estate investment complexities, Propira leads the way. Elevate your real estate journey with wisdom, insight, and a team that goes beyond transactions.
                </div>
                <div class="list pt-4 md:pt-7 lg:pt-10">
                    <ul class="list-disc">
                        <li class="text-sm md:text-base font-semibold">
                            Elevate Your Experience
                            <div class="text-sm font-normal py-2 opacity-60">
                                Propira can transform your property journey into a seamless and enriching adventure.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Tailored Solutions
                            <div class="text-sm font-normal py-2 opacity-60">
                                Propira ensures that every aspect of the real estate experience is crafted to meet your unique needs.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Beyond Transactions
                            <div class="text-sm font-normal py-2 opacity-60">
                                Propira offers in-depth insights and wisdom to make your property aspirations thrive.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Leading the Way
                            <div class="text-sm font-normal py-2 opacity-60">
                                Whether buying, selling, or investing, trust Propira's real estate solutions.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex items-center flex-wrap pt-6 sm:pt-12 lg:pt-20">
            <div class="txtSide w-full lg:w-1/2 px-3 sm:px-5 md:px-10 lg:px-0 order-2 lg:order-1">
                <div class="heading text-xl sm:text-2xl lg:text-2xl font-semibold">
                    Embark on A Captivating Journey Via Immersive 3D Tours by Propira
                </div>
                <div class="text-sm pt-3 sm:pt-5 opacity-60">
                    Elevating the real estate experience, Propira invites you to step inside your dream spaces from the comfort of your screen. Its cutting-edge technology transforms static listings into interactive, lifelike environments, allowing you to explore every nook and cranny with unparalleled detail. Feel the ambiance, visualize the layout, and envision your life in each property.
                </div>
                <div class="list pt-4 md:pt-7 lg:pt-10">
                    <ul class="list-disc">
                        <li class="text-sm md:text-base font-semibold">
                            Unlock Vivid Experiences
                            <div class="text-sm font-normal py-2 opacity-60">
                                Get realistic virtual environments with Propira's 3D Tours, where every property comes to life.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Interactive Exploration
                            <div class="text-sm font-normal py-2 opacity-60">
                                Propira’s immersive 3D Tours empower you to navigate through homes, offices, and spaces.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Visualize Your Future Home
                            <div class="text-sm font-normal py-2 opacity-60">
                                Walk through rooms to make informed decisions about your next property investment.
                            </div>
                        </li>
                        <li class="text-sm md:text-base font-semibold">
                            Convenience Redefined
                            <div class="text-sm font-normal py-2 opacity-60">
                                With Propira's 3D Tours, embark on property journeys at your pace, anytime, anywhere.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="imgSide sm:mx-auto w-[80%] lg:w-1/2 px-5 md:px-10 aspect-[1/1] order-1 lg:order-2">
                <img src="{{asset('public'.mix('/tailwind/img/Propira04.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
        </div>
    </div>
{{-- section Third Ends --}}


{{-- project Section Start --}} 
    <div class="py-4 md:py-14 lg:py-20 bg-[#d90202] px-2 sm:px-6 md:px-8 lg:px-10 relative">
        <svg class="absolute inset-0 h-full w-full text-white/20" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="ryhhgfbyi" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                    <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#ryhhgfbyi)"></rect>
        </svg>
        <div class="header">
            <div class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-white">
                Explore our latest projects
            </div>
            <div class="py-2 flex justify-center text-white">
                <span class="relative after:content-[''] after:absolute after:h-[3px] after:w-[50px] after:bg-white after:top-1/2 after:right-0 after:mr-3"></span>
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg"><path d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path></svg>
                <span class="relative before:content-[''] before:absolute before:h-[3px] before:w-[50px] before:bg-white before:top-1/2 before:left-0 before:ml-3"></span>
            </div>
        </div>
        <div class="flex items-center justify-center flex-wrap max-w-7xl sm:px-6 lg:px-20 mx-auto  pt-4 sm:pt-6 md:pt-8 lg:pt-10 gap-3 md:gap-5 lg:gap-8">
            <div class="w-1/4">
                <img src="{{asset('public'.mix('/tailwind/img/Propira06.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
            <div class="w-1/3">
                <div class="swiper mySwiper !w-[90%]"          data-swiper='{
                    "spaceBetween": 10,
                    "loop": true,
                    "slidesPerView": 1,
                    "autoplay": {"delay": 2500, "disableOnInteraction": true},
                    "effect": "fade",
                    "speed": 1500,
                    "navigation": {"nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev"},
                    "thumbs": {"swiper": ".servicesSwiperThumb"}
                }'>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="">
                                <img src="{{asset('public'.mix('/tailwind/img/Propira06.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('public'.mix('/tailwind/img/Propira07.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <img src="{{asset('public'.mix('/tailwind/img/Propira06.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('public'.mix('/tailwind/img/Propira07.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next after:content-[''] after:hidden relative">
                        <div class="icon h-[30px] md:h-[40px] w-[30px] md:w-[40px] bg-white rounded-full p-1 border hidden border-[#d90202] absolute right-[-10px]">
                            <svg stroke="currentColor" fill="#d90202" stroke-width="0" viewBox="0 0 256 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev after:content-[''] after:hidden relative">
                        <div class="icon h-[30px] md:h-[40px] w-[30px] md:w-[40px] bg-white rounded-full p-1 border hidden border-[#d90202] absolute left-[-10px]">
                            <svg stroke="currentColor" fill="#d90202" stroke-width="0" viewBox="0 0 256 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/4">
                <img src="{{asset('public'.mix('/tailwind/img/Propira07.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
        </div>
    </div>
{{-- project Section Ends --}}

{{-- color section start --}}
    <div class="py-4 md:py-10 lg:py-20 px-2 sm:px-6 md:px-8 lg:px-10">
        <div class="relative">
            <svg aria-hidden="true" class="absolute inset-x-0 -top-14 -z-10 h-[1000px] w-full fill-neutral-50 stroke-neutral-950/5 [mask-image:linear-gradient(to_bottom_left,white_40%,transparent_50%)]"><rect width="100%" height="100%" fill="url(#:R1lda:)" stroke-width="0"></rect><svg x="50%" y="-96" stroke-width="0" class="overflow-visible"><path transform="translate(64 160)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(128 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(288 480)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(512 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(544 640)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(320 800)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path></svg><defs><pattern id=":R1lda:" width="96" height="480" x="50%" patternUnits="userSpaceOnUse" patternTransform="translate(0 -96)" fill="none"><path d="M128 0 98.572 147.138A16 16 0 0 1 82.883 160H13.117a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-45.117 320H-116M64-160 34.572-12.862A16 16 0 0 1 18.883 0h-69.766a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-109.117 160H-180M192 160l-29.428 147.138A15.999 15.999 0 0 1 146.883 320H77.117a16 16 0 0 0-15.69 12.862L34.573 467.138A16 16 0 0 1 18.883 480H-52M-136 480h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1-18.883 320h69.766a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 109.117 160H192M-72 640h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 45.117 480h69.766a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A15.999 15.999 0 0 1 173.117 320H256M-200 320h58.883a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A16 16 0 0 1-82.883 160h69.766a16 16 0 0 0 15.69-12.862L29.427 12.862A16 16 0 0 1 45.117 0H128"></path></pattern></defs></svg>
        </div>
        <div class="header">
            <p class="mt-4 text-center max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] pb-5">
                <span class="font-normal">Colors</span> 
                <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> & Typography</span>
            </p>
        </div>
        <div class="flex items-center justify-center flex-wrap max-w-7xl px-4 sm:px-6 lg:px-20 mx-auto sm:pt-6 md:pt-8 lg:pt-10 gap-y-4">
            <div class="w-full md:w-1/2 sm:px-5">
                <img src="{{asset('public'.mix('/tailwind/img/Propira08.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
            <div class="w-full md:w-1/2 sm:px-5">
                <div class="flex items-center">
                    <div class="w-1/5 px-1 sm:px-2">
                        <div class="bg-[#d90202] h-[100px] sm:h-[150px] px-5 sm:px-8 rounded-lg">
                        </div>
                        <div class="text-xs sm:text-sm lg:text-lg pt-2 font-semibold text-center">
                            #DAOCOC
                        </div>
                    </div>
                    <div class="w-1/5 px-1 sm:px-2">
                        <div class="bg-[#DAE0E4] h-[100px] sm:h-[150px] px-5 sm:px-8 rounded-lg">
                        </div>
                        <div class="text-xs sm:text-sm lg:text-lg pt-2 font-semibold text-center">
                            #DAE0E4
                        </div>
                    </div>
                    <div class="w-1/5 px-1 sm:px-2">
                        <div class="bg-[#212121] h-[100px] sm:h-[150px] px-5 sm:px-8 rounded-lg">
                        </div>
                        <div class="text-xs sm:text-sm lg:text-lg pt-2 font-semibold text-center">
                            #212121
                        </div>
                    </div>
                    <div class="w-1/5 px-1 sm:px-2">
                        <div class="bg-[#2D6CA2] h-[100px] sm:h-[150px] px-5 sm:px-8 rounded-lg">
                        </div>
                        <div class="text-xs sm:text-sm lg:text-lg pt-2 font-semibold text-center">
                            #2D6CA2
                        </div>
                    </div>
                    <div class="w-1/5 px-1 sm:px-2">
                        <div class="bg-[#E1E0E5] h-[100px] sm:h-[150px] px-5 sm:px-8 rounded-lg">
                        </div>
                        <div class="text-xs sm:text-sm lg:text-lg pt-2 font-semibold text-center">
                            #E1E0E5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- color section ends --}}

{{-- unique Section Start --}}
    <div class="px-4 sm:px-6 md:px-8 lg:px-10 py-5 md:py-14 lg:py-20">
        <div class="header px-5 sm:px-14 md:px-20 bg-[#d90202] py-4 md:py-14 lg:py-20 relative">
            <svg class="absolute inset-0 h-full w-full text-white/20" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="ryhhgfbyi" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                        <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#ryhhgfbyi)"></rect>
            </svg>
            <div class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-white">
                Propira: Redefining Uniqueness, Elevating Real Estate Excellence
            </div>
            <div class="pt-3 flex justify-center text-white">
                <span class="relative after:content-[''] after:absolute after:h-[3px] after:w-[50px] after:bg-white after:top-1/2 after:right-0 after:mr-3"></span>
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg"><path d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path></svg>
                <span class="relative before:content-[''] before:absolute before:h-[3px] before:w-[50px] before:bg-white before:top-1/2 before:left-0 before:ml-3"></span>
            </div>
            <div class="description text-sm lg:text-base pt-3 text-white text-center">
                Propira transcends the ordinary and redefines the essence of real estate. The innovative technology, personalized approach, and commitment to transparency elevate the real estate experience. Discover a new era of excellence with Propira, where uniqueness meets unparalleled service. Your dream property awaits – explore, engage, and elevate your journey with Propira.
            </div>
        </div>
        <div class="flex items-center flex-wrap md:mt-[-50px] justify-around gap-y-4">
            <div class="w-full md:w-1/4 shadow-2xl rounded-md px-6 pb-10 pt-14 sm:pt-20 md:pt-24 bg-white z-[10] relative group md:before:content-[''] md:before:absolute before:bottom-0 before:left-0 before:h-0 before:w-full before:bg-[#d90202] md:hover:before:top-0 hover:before:h-full before:transition-all before:duration-500 before:z-[-1] md:hover:before:origin-bottom md:hover:before:transition-all md:hover:before:duration-500 md:hover:before:text-white">
                <svg class="absolute inset-0 h-full w-full text-white/20" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="ryhhgfbyi" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                            <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#ryhhgfbyi)"></rect>
                </svg>
                <div class="heading text-xl sm:text-2xl font-semibold !leading-[120%] text-black z-10 transition-all duration-500 md:group-hover:text-white md:group-hover:transition-all md:group-hover:duration-500 md:group-hover:z-10">
                    Innovative Technology Integration
                </div>
                <div class="description text-sm sm:text-base !leading-[140%] text-ellipsis line-clamp-[7] pt-3 transition-all duration-500 sm:group-hover:text-white group-hover:transition-all group-hover:duration-500 group-hover:z-10">
                    Propira stands out through its cutting-edge technology integration, streamlining the real estate experience. From advanced property search algorithms to virtual tours and online transaction management, Propira harnesses technology to enhance every step of the real estate process.
                </div>
                <div class="number absolute text-[50px] sm:text-[60px] md:text-[80px] font-bold text-neutral-700 top-0 sm:top-[100px] left-[20px] opacity-20 transition-all duration-500 group-hover:top-0 sm:group-hover:text-white sm:group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                    01
                </div>
            </div>
            <div class="w-full md:w-1/4 shadow-2xl rounded-md px-6 pb-10 pt-14 sm:pt-20 md:pt-24 bg-white z-[10] relative group md:before:content-[''] md:before:absolute before:bottom-0 before:left-0 before:h-0 before:w-full before:bg-[#d90202] md:hover:before:top-0 hover:before:h-full before:transition-all before:duration-500 before:z-[-1] md:hover:before:origin-bottom md:hover:before:transition-all md:hover:before:duration-500 md:hover:before:text-white">
                <svg class="absolute inset-0 h-full w-full text-white/20" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="ryhhgfbyi" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                            <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#ryhhgfbyi)"></rect>
                </svg>
                <div class="heading text-xl sm:text-2xl font-semibold !leading-[120%] text-black z-10 transition-all duration-500 md:group-hover:text-white md:group-hover:transition-all md:group-hover:duration-500 md:group-hover:z-10">
                    Personalized Client Engagement
                </div>
                <div class="description text-sm sm:text-base !leading-[140%] text-ellipsis line-clamp-[7] pt-3 transition-all duration-500 sm:group-hover:text-white group-hover:transition-all group-hover:duration-500 group-hover:z-10">
                    Propira takes a client-centric approach, offering personalized services that cater to the unique needs of each individual. Whether it's tailored property recommendations, expert guidance, or proactive communication, Propira ensures a high level of customer satisfaction.
                </div>
                <div class="number absolute text-[50px] sm:text-[60px] md:text-[80px] font-bold text-neutral-700 top-0 sm:top-[100px] left-[20px] opacity-20 transition-all duration-500 group-hover:top-0 sm:group-hover:text-white sm:group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                    02
                </div>
            </div>
            <div class="w-full md:w-1/4 shadow-2xl rounded-md px-6 pb-10 pt-14 sm:pt-20 md:pt-24 bg-white z-[10] relative group md:before:content-[''] md:before:absolute before:bottom-0 before:left-0 before:h-0 before:w-full before:bg-[#d90202] md:hover:before:top-0 hover:before:h-full before:transition-all before:duration-500 before:z-[-1] md:hover:before:origin-bottom md:hover:before:transition-all md:hover:before:duration-500 md:hover:before:text-white">
                <svg class="absolute inset-0 h-full w-full text-white/20" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="ryhhgfbyi" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                            <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#ryhhgfbyi)"></rect>
                </svg>
                <div class="heading text-xl sm:text-2xl font-semibold !leading-[120%] text-black z-10 transition-all duration-500 md:group-hover:text-white md:group-hover:transition-all md:group-hover:duration-500 md:group-hover:z-10">
                    Transparent and Efficient Transactions
                </div>
                <div class="description text-sm sm:text-base !leading-[140%] text-ellipsis line-clamp-[7] pt-3 transition-all duration-500 sm:group-hover:text-white group-hover:transition-all group-hover:duration-500 group-hover:z-10">
                    Transparency is key in real estate, and Propira excels in providing clear information to clients. From property details and market trends to transaction processes and fees, Propira ensures that clients are well-informed, promoting trust and efficiency in real estate transactions.
                </div>
                <div class="number absolute text-[50px] sm:text-[60px] md:text-[80px] font-bold text-neutral-700 top-0 sm:top-[100px] left-[20px] opacity-20 transition-all duration-500 group-hover:top-0 sm:group-hover:text-white sm:group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                    03
                </div>
            </div>
        </div>
    </div>
{{-- unique Section ends --}}

{{-- two mobile Section Start --}}
    <div class="flex items-center flex-wrap sm:py-8 md:py-10">
        <div class="w-1/2 py-10 sm:py-12 md:py-16 lg:py-20 bg-gradient-to-r from-[#d90202] to-slate-800">
            <div class="w-1/2 lg:w-[40%] mx-auto">
                <img src="{{asset('public'.mix('/tailwind/img/Propira10.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
        </div>
        <div class="w-1/2 py-10 sm:py-12 md:py-16 lg:py-20 bg-gradient-to-r from-[#938fe2] to-slate-800">
            <div class="w-1/2 lg:w-[40%] mx-auto">
                <img src="{{asset('public'.mix('/tailwind/img/Propira11.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
            </div>
        </div>
    </div>
{{-- two mobile Section end --}}

{{-- testimonial Section Start --}}
    <div class="py-5 md:py-14 lg:py-20">
        <div class="relative">
            <svg aria-hidden="true" class="absolute inset-x-0 -top-14 -z-10 h-[1000px] w-full fill-neutral-50 stroke-neutral-950/5 [mask-image:linear-gradient(to_bottom_left,white_40%,transparent_50%)]"><rect width="100%" height="100%" fill="url(#:R1lda:)" stroke-width="0"></rect><svg x="50%" y="-96" stroke-width="0" class="overflow-visible"><path transform="translate(64 160)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(128 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(288 480)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(512 320)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(544 640)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path><path transform="translate(320 800)" d="M45.119 4.5a11.5 11.5 0 0 0-11.277 9.245l-25.6 128C6.82 148.861 12.262 155.5 19.52 155.5h63.366a11.5 11.5 0 0 0 11.277-9.245l25.6-128c1.423-7.116-4.02-13.755-11.277-13.755H45.119Z"></path></svg><defs><pattern id=":R1lda:" width="96" height="480" x="50%" patternUnits="userSpaceOnUse" patternTransform="translate(0 -96)" fill="none"><path d="M128 0 98.572 147.138A16 16 0 0 1 82.883 160H13.117a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-45.117 320H-116M64-160 34.572-12.862A16 16 0 0 1 18.883 0h-69.766a16 16 0 0 0-15.69 12.862l-26.855 134.276A16 16 0 0 1-109.117 160H-180M192 160l-29.428 147.138A15.999 15.999 0 0 1 146.883 320H77.117a16 16 0 0 0-15.69 12.862L34.573 467.138A16 16 0 0 1 18.883 480H-52M-136 480h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1-18.883 320h69.766a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 109.117 160H192M-72 640h58.883a16 16 0 0 0 15.69-12.862l26.855-134.276A16 16 0 0 1 45.117 480h69.766a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A15.999 15.999 0 0 1 173.117 320H256M-200 320h58.883a15.999 15.999 0 0 0 15.689-12.862l26.856-134.276A16 16 0 0 1-82.883 160h69.766a16 16 0 0 0 15.69-12.862L29.427 12.862A16 16 0 0 1 45.117 0H128"></path></pattern></defs></svg>
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
        
    </div>
{{-- testimonial Section Ends --}}

{{-- connect Section start --}}
    <div class="relative isolate overflow-hidden text-center justify-center bg-gray-900 px-6 shadow-2xl rounded-2xl sm:rounded-3xl sm:px-16 lg:flex lg:gap-x-20 lg:px-24 mx-4 sm:mx-12 lg:mx-20">
        <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0 pointer-events-none" aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#l2200)" fill-opacity="0.7"></circle>
            <defs>
                <radialGradient id="l2200">
                    <stop offset="0.5" stop-color="#9333ea"></stop>
                    <stop offset="1" stop-color="#db2777"></stop>
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
{{-- connect Section ends --}}

{{-- elevate section start --}}
    <div class="elevateSection py-4 lg:py-10">
        <div class="header px-4 sm:px-16 md:px-18 lg:px-24 xl:px-32">
            <p class="mt-4 text-center max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] pb-4 sm:pb-5">
                <span class="font-normal">Elevate Your Business in</span> 
                <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> Real Estate with the Power of Propira</span>
            </p>
        </div>
        <div class="text text-base text-center px-4 sm:px-16 md:px-18 lg:px-24 xl:px-32">
            Propira, the best real estate solution, helps businesses experience cutting-edge technology, personalized solutions, and unparalleled excellence. Transform the way you engage in property transactions – Propira, where business meets innovation. Seize the future of real estate, one strategic move at a time. Take your real estate business one step higher when you develop an app like Propira. Now, turn your business dreams into reality!
        </div>
        <div class="px-5 pt-4 md:pt-8 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-2 sm:gap-3 lg:gap-4">
            <div class="">
                <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full object-contain">
            </div>
            <div class="">
                <div class="">
                    <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                </div>
                <div class="">
                    <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                </div>
            </div>
            <div class="mt-32 lg:mt-40">
                <div class="">
                    <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                </div>
                <div class="">
                    <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full">
                </div>
            </div>
            <div class="mt-[-216px] sm:mt-[-360px] md:mt-20">
                <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full object-contain">
            </div>
            <div class="mt-[-130px] md:mt-60">
                <img src="{{asset('public'.mix('/tailwind/img/propSwiper01.webp'))}}" alt="thanku" class="img-fluid h-full w-full object-contain">
            </div>
        </div>
    </div>
{{-- elevate section end --}}

{{-- other Section Start --}}
    <div class="container mx-auto py-4 sm:py-16 relative select-none">
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
                            <div class="w-full font-bold text-xl mb-4 bg-gradient-to-bl from-red-300 via-white to-red-300 bg-clip-text text-transparent">Shop for Handwoven Garments &amp; home fusnishings</div>
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
{{-- other Section end --}}




@endsection

@push('scripts')
@endpush