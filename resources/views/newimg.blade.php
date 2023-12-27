@extends('main')
@push('meta')
<!--  Title -->
<title>IT Consulting Company | IT Consulting Services</title>
<!-- Required meta tags -->
<meta name="title" content="IT Consulting Company | IT Consulting Services" />
<meta name="description"
    content=" IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses." />
<meta name="keywords"
    content="IT consulting company, IT consulting services, IT consultant, IT consulting firm, Hire IT consultant, IT company" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="IT Consulting Company | IT Consulting Services">
<meta name="twitter:description"
    content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

<!-- Facebook Meta -->
<meta property="og:url" content="{{asset('/')}}">
<meta property="og:title" content="IT Consulting Company | IT Consulting Services">
<meta property="og:description"
    content="IMG Global is the best IT consulting Company that provides the best IT consulting services to startups, mid-size, medium-size and large-size businesses.">

<meta name="classification"
    content="web and mobile app development company, software development, eCommerce development services, fantasy sports app development, online exam app" />
<link rel="canonical" href="{{asset('/')}}" />
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
<!--you can put this line anywhere in the site-->
@endpush

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
fbq('init', '640762284881184');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=640762284881184&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->

@section('content')
{{-- <main class="main-scrollbar"> --}}

<h1 class="d-none invisible">Web and Mobile App Development Company</h1>

{{-- silder section start --}}
<div
    class="container-fluid overflow-hidden px-0 silder-section vh-xl-100 vh-xxl-100 vh-lg-100 vh-md-100 vh-sm-100 vh-auto">
    <div class="home_page_slider owl-carousel">
        <div class="items">
            <img src="{{asset('/public')}}/assets/img/hero-section/unlock-access-to-bespoke-apps.webp"
                class="h-100 w-100 img-fluid" alt="unlock-access-to-bespoke-apps">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 slide_content position-absolute">

                <div
                    class="animated-text col-12 fs-xxl-47 fs-xl-42 fs-lg-36 fs-md-45 fs-sm-30 fs-23 text-white text-center fw-m lh-1 lh-sm">
                    Unlock Access to Bespoke <span class="d-block"> Apps And Product Innovation with Us! </span> </div>
                <div
                    class="animated-text col-12  text-light py-2 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-md-center text-center py-3 px-lg-0 px-4 mb-xl-2 mb-lg-2 mb-md-2 md-sm-2 col-12">
                    Step into a digital journey with IMG Global Infotech and unlock the gateway to bespoke applications
                    and groundbreaking product innovations. Experience the future of technology at your fingertips!

                </div>

                <div class="col-12  text-center align-items-center">
                    <a href="{{asset('/contact-us.php')}}"
                        class="btn   btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xxl-2 py-xl-2 py-lg-2 py-md-1 py-sm-1 py-1 px-lg-5 py-1 px-3 ms-md-2">
                        <span class="d-block"><span class="d-flex ">Consult Our Experts <i
                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="items">
            <img src="{{asset('/public')}}/assets/img/hero-section/elevate-your-vision-with-robust-and-scalable-mobile-app-development.webp"
                class="h-100 w-100 img-fluid" alt="elevate-your-vision-with-robust-and-scalable-mobile-app-development">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 slide_content position-absolute">
                <div
                    class="col-12 animated-text fs-xxl-47 fs-xl-42 fs-lg-36 fs-md-45 fs-sm-30 fs-23 text-white text-center fw-m lh-1 lh-sm">
                    Elevate Your Vision with Robust <span class="d-block"> And Scalable Mobile App Development! </span>
                </div>
                <div
                    class="col-12  animated-text text-light py-2 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-md-center text-center py-3 px-lg-0 px-4 mb-xl-2 mb-lg-2 mb-md-2 md-sm-2 col-12">
                    IMG Global Infotech’s robust and scalable app development solutions redefine possibilities, ensuring
                    your ideas soar to new heights. Uplifting innovations, one app at a time!

                </div>

                <div class="col-12 text-center align-items-center">
                    <a href="{{asset('/contact-us.php')}}"
                        class="btn   btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xxl-2 py-xl-2 py-lg-2 py-md-1 py-sm-1 py-1 px-lg-5 py-1 px-3 ms-md-2">
                        <span class="d-block"><span class="d-flex ">Consult Our Experts <i
                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="items">
            <img src="{{asset('/public')}}/assets/img/hero-section/level-up-your-business-game.webp"
                class="h-100 w-100 img-fluid" alt="level-up-your-business-game">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 slide_content position-absolute">
                <div
                    class="col-12 animated-text fs-xxl-47 fs-xl-42 fs-lg-36 fs-md-45 fs-sm-30 fs-23 text-white text-center fw-m lh-1 lh-sm">
                    Level Up Your Business Game <span class="d-block"> with Fantasy Sports App Development! </span>
                </div>
                <div
                    class="col-12  animated-text text-light py-2 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-md-center text-center py-3 px-lg-0 px-4 mb-xl-2 mb-lg-2 mb-md-2 md-sm-2 col-12">
                    From the thrill of cricket and football to the strategy of kabaddi and fantasy stock, IMG fantasy
                    sports app development assistance can turn your vision into a virtual arena where success is the
                    only goal.

                </div>

                <div class="col-12 text-center align-items-center">
                    <a href="{{asset('/contact-us.php')}}"
                        class="btn   btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xxl-2 py-xl-2 py-lg-2 py-md-1 py-sm-1 py-1 px-lg-5 py-1 px-3 ms-md-2">
                        <span class="d-block"><span class="d-flex ">Consult Our Experts <i
                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="items">
            <img src="{{asset('/public')}}/assets/img/hero-section/enhance-your-brand-presence-with-innovative-web-development-solutions.webp"
                class="h-100 w-100 img-fluid"
                alt="enhance-your-brand-presence-with-innovative-web-development-solutions">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 slide_content position-absolute">
                <div
                    class="col-12 animated-text fs-xxl-47 fs-xl-42 fs-lg-36 fs-md-45 fs-sm-30 fs-23 text-white text-center fw-m lh-1 lh-sm">
                    Enhance Your Brand Presence <span class="d-block"> with Innovative Web Development Solutions!
                    </span> </div>
                <div
                    class="col-12  animated-text text-light py-2 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-md-center text-center py-3 px-lg-0 px-4 mb-xl-2 mb-lg-2 mb-md-2 md-sm-2 col-12">
                    Step into the digital spotlight and elevate your brand with our cutting-edge web development
                    solutions. We craft more than websites; we build captivating online experiences that leave a lasting
                    impression.

                </div>

                <div class="col-12 text-center align-items-center">
                    <a href="{{asset('/contact-us.php')}}"
                        class="btn   btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xxl-2 py-xl-2 py-lg-2 py-md-1 py-sm-1 py-1 px-lg-5 py-1 px-3 ms-md-2">
                        <span class="d-block"><span class="d-flex ">Consult Our Experts <i
                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="items">
            <img src="{{asset('/public')}}/assets/img/hero-section/hire-dedicated-professionals-and-unleash.webp"
                class="h-100 w-100 img-fluid" alt="hire-dedicated-professionals-and-unleash">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 slide_content position-absolute">

                <div
                    class="col-12 animated-text fs-xxl-47 fs-xl-42 fs-lg-36 fs-md-45 fs-sm-30 fs-23 text-white text-center fw-m lh-1 lh-sm">
                    Hire Dedicated Professionals And <span class="d-block"> Unleash Business Potential Beyond Borders!
                    </span> </div>
                <div
                    class="col-12  animated-text text-light py-2 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-md-center text-center py-3 px-lg-0 px-4 mb-xl-2 mb-lg-2 mb-md-2 md-sm-2 col-12">
                    Welcome to a realm where dedicated professionals converge with boundless expertise. Harness the
                    power of our seasoned team and unlock the full potential of your enterprise.

                </div>

                <div class="col-12 text-center align-items-center">
                    <a href="{{asset('/contact-us.php')}}"
                        class="btn   btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xxl-2 py-xl-2 py-lg-2 py-md-1 py-sm-1 py-1 px-lg-5 py-1 px-3 ms-md-2"
                        target="_blank">
                        <span class="d-block"><span class="d-flex ">Consult Our Experts <i
                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="brand-stripe">
                    <ul class="brand-list ps-0">
                        <li><div class="samsung ms-sprite"></div></li>
                        <li><div class="kohl ms-sprite"></div></li>
                        <li><div class="jio ms-sprite"></div></li>
                        <li><div class="oxo ms-sprite"></div></li>
                        <li><div class="roland ms-sprite"></div></li>
                        <li><div class="aho ms-sprite"></div></li>
                        <li><div class="deloitte ms-sprite"></div></li>
                    </ul>
                </div> -->
</div>

{{-- Silder section End --}}

{{-- About section Start --}}
<div class="aboutSectionss">

    <div class="container-fluid px-0">
        <div class="container py-xxl-5 py-xl-4 py-lg-4 py-md-2 py-sm-5 py-py-5 about-section">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-12">
                    <div class="row justify-content-center align-items-center">
                        <div
                            class="col-12 col-lg-9 col-xl-9 col-xxl-9 pt-xxl-5 pt-xl-5 pt-lg-5 pt-md-5 pt-sm-5 pt-4 pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-3 pb-3">
                            <div class="px-0 px-lg-0 px-xxl-3">
                                <div class="row flex-nowrap flex-lg-wrap pe-xxl-4 pe-lg-4 pe-md-4 swap-card gy-4">
                                    <div class="col-12 col-md-6 col-lg-6 col-xxl-6 abt-card">
                                        <div class="about-cards bg-img-1 h-100">
                                            <div
                                                class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-22 mb-3 text-white fw-m">
                                                Inception</div>
                                            <div
                                                class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-14 text-white mb-0">
                                                Commence on a digital journey with IMG Global Infotech, where ideas
                                                unfold into cutting-edge solutions, shaping a dynamic future.</div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6 col-xxl-6 abt-card">
                                        <div class="about-cards bg-img-2 h-100">
                                            <div
                                                class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-22 mb-3 text-white fw-m">
                                                Innovation</div>
                                            <div
                                                class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-14 text-white mb-0">
                                                IMG Global Infotech pioneers transformative solutions, pushing
                                                boundaries to redefine industries via inventive technology.</div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6 col-xxl-6 abt-card">
                                        <div class="about-cards bg-img-3 h-100">
                                            <div
                                                class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-22 mb-3 text-white fw-m">
                                                Experience</div>
                                            <div
                                                class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-14 text-white mb-0">
                                                Boosting online presence with a skilled team, crafting immersive
                                                experiences that resonate with precision and expertise.</div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6 col-xxl-6 abt-card">
                                        <div class="about-cards bg-img-4 h-100">
                                            <div
                                                class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-22 mb-3 text-white fw-m">
                                                Expertise</div>
                                            <div
                                                class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-14 text-white mb-0">
                                                Navigate the complex digital landscape with IMG Global Infotech's
                                                mastery, delivering tailored solutions fueled by unparalleled industry
                                                knowledge.</div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6 col-xxl-6 abt-card">
                                        <div class="about-cards bg-img-5 h-100">
                                            <div
                                                class="fs-xxl-24 fs-xl-24 fs-lg-24 fs-md-24 fs-sm-17 fs-22 mb-3 text-white fw-m">
                                                Assurance</div>
                                            <div
                                                class="desc fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-14 text-white mb-0">
                                                Trust our unwavering commitment to reliability, security, and
                                                excellence, ensuring your digital endeavors thrive with confidence.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 col-xl-3 col-xxl-3 py-4 px-sm-3 px-0">
                            <div class="sticky-top" style="top: 110px;">
                                <div class="row justify-content-center counter-box mx-0 gy-4">
                                    <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                        <div
                                            class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-1 fw-m d-block aboutNumberText">
                                            11+</div>
                                        <div class="fs-lg-16 fs-md-16 fs-sm-15 fs-14 desc">Years’ Experience</div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                        <div
                                            class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-1 fw-m d-block aboutNumberText">
                                            80+</div>
                                        <div class="fs-lg-16 fs-md-16 fs-sm-15 fs-14 desc">Countries Served</div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                        <div
                                            class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-1 fw-m d-block aboutNumberText">
                                            1200+ </div>
                                        <div class="fs-lg-16 fs-md-16 fs-sm-15 fs-14 desc">Successful Projects</div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                        <div
                                            class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-1 fw-m d-block aboutNumberText">
                                            95%</div>
                                        <div class="fs-lg-16 fs-md-16 fs-sm-15 fs-14 desc">Client Retention Rate</div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                        <div
                                            class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-1 fw-m d-block aboutNumberText">
                                            1000+</div>
                                        <div class="fs-lg-16 fs-md-16 fs-sm-15 fs-14 desc">Clients Worldwide</div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-xxl-6 mb-xl-4 mb-lg-4 mb-md-4 mb-sm-4 mb-2">
                                        <div
                                            class="fs-xxl-40 fs-xl-40 fs-lg-40 fs-md-40 fs-sm-30 fs-30 mb-1 fw-m d-block aboutNumberText">
                                            250+</div>
                                        <div class="fs-lg-16 fs-md-16 fs-sm-15 fs-14 desc">Five Star Reviews</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid pb-md-5 py-sm-2 py-py-5 overflow-hidden services-coman position-relative px-0">
        <div class="container position-relative zi-2">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div
                        class="row pt-xl-0 pt-lg-0 pt-md-0 pt-sm-0 pt-0 position-relative pe-xl-3 pe-lg-3 pe-md-3 pe-sm-3 pe-0">
                        <div class="col-12">
                            <div class="row pb-2">
                                <h2 class="d-none invisible">Awards & Recognitions</h2>
                                <div class="col-12 headingv2 left"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22">Awards
                                        & Recognitions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-black mt-0 mb-lg-1"> IMG Global
                            Infotech’s journey is adorned with moments of triumph and recognition. From industry awards
                            validating our innovation to recognitions honing our commitment to quality, here is a
                            testament to our unwavering pursuit of greatness. Discover the tapestry of honors that
                            embellish our legacy and inspire us to reach even greater heights. </div>
                    </div>
                </div>


                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 px-sm-3 px-0">
                    <div class="awards-silde owl-carousel">
                        <div
                            class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                            <div class=" border border-1 p-1 py-1 mx-1">
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/clutch.webp"
                                        srcset="{{asset('/public')}}/assets/img/hero-section/clutch-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/clutch-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/clutch.webp 1500w"
                                        class="w-lg-100px w-md-80px w-70px h-auto mx-auto" alt="" width="100"
                                        height="112">
                                </div>
                            </div>
                            <div
                                class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1">
                                Top Web Developers United States 2023</div>
                        </div>
                        <div
                            class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                            <div class=" border border-1 p-1 py-1 mx-1">
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/goodfirms.webp"
                                        srcset="{{asset('/public')}}/assets/img/hero-section/goodfirms-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/goodfirms.webp-1000 1000w, {{asset('/public')}}/assets/img/hero-section/goodfirms.webp 1500w"
                                        class="w-lg-100px w-md-80px w-70px h-auto mx-auto" alt="" width="100"
                                        height="112">
                                </div>
                            </div>
                            <div
                                class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1 ">
                                Top App Development Company in USA</div>
                        </div>

                        <div
                            class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                            <div class=" border border-1 p-1 py-1 mx-1 ">
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/topdevelopers.webp"
                                        srcset="{{asset('/public')}}/assets/img/hero-section/topdevelopers-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/topdevelopers-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/topdevelopers.webp 1500w"
                                        class="w-lg-100px w-md-80px w-70px h-auto mx-auto" alt="" width="100"
                                        height="112">
                                </div>
                            </div>
                            <div
                                class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1">
                                Top Software Developers – 2023</div>
                        </div>
                        <div
                            class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                            <div class=" border border-1 p-1 py-1 mx-1 ">
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/designrush.webp"
                                        srcset="{{asset('/public')}}/assets/img/hero-section/designrush-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/designrush-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/designrush.webp 1500w"
                                        class="w-lg-100px w-md-80px w-70px h-auto mx-auto" alt="" width="100"
                                        height="112">
                                </div>
                            </div>
                            <div
                                class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1">
                                Best Web Development DesignRush – 2023</div>
                        </div>
                        <div
                            class="col-md-12 col-12 my-md-0 my-3 text-lg-start text-md-center text-center pb-md-3 pb-1">
                            <div class=" border border-1 p-1 py-1 mx-1 ">
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-12 mt-lg-2 mt-md-0 mt-sm-2 mt-2 text-center">
                                    <img src="{{asset('/public')}}/assets/img/hero-section/mid-market.webp"
                                        srcset="{{asset('/public')}}/assets/img/hero-section/mid-market-500.webp 500w, {{asset('/public')}}/assets/img/hero-section/mid-market-1000.webp 1000w, {{asset('/public')}}/assets/img/hero-section/mid-market.webp 1500w"
                                        class="w-lg-100px w-md-80px w-70px h-auto mx-auto" alt="" width="100"
                                        height="112">
                                </div>
                            </div>
                            <div
                                class="col-12 text-dark fw-m fs-xxl-15 fs-xl-15 fs-lg-15 fs-md-14 fs-sm-14 fs-14 text-center pt-1 ">
                                Mid-Market High Performer United States – 2022-2023</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div
    class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-5 pb-5 position-relative our-services">
    <div class="container position-relative zi-2 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-5 pb-5">
        <div class="row align-items-center justify-content-center pb-xl-5 pb-lg-4 pb-md-3 pb-sm-5 pb-3">
            <div class="col-sm-12 col-12">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row pt-3 position-relative ">
                            <div class="col-12">
                                <div class="row pb-2">
                                    <div class="col-12 headingv2 left text-white">
                                        <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">What We Can Do For
                                            You?</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-white mt-0 mb-lg-1">Experience a
                                journey of innovation with us, where every pixel, code, and concept converges to
                                transform your dreams into reality. Unveil a spectrum of top-notch development services
                                that empower your business vision to thrive in the boundless realm of possibilities.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 our-services-inner">
    <div
        class="container position-relative bg-white pt-xl-5 pt-lg-5 pt-md-3 pt-sm-3 pt-2 pe-xl-5 pe-lg-5 pe-md-3 pe-sm-3 pe-2 ps-xl-5 ps-lg-5 ps-md-3 ps-sm-3 ps-2">
        <div class="row align-items-center justify-content-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row pt-3 position-relative ">
                            <div class="col-12">
                                <div class="row pb-2">
                                    <div class="col-12 headingv2 left text-dark">
                                        <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">Avail Exclusive Development
                                            Services In Just A Click!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark mt-0 mb-lg-1">Discover your
                                way to unparalleled growth and creativity while choosing IMG Global Inftech’s
                                growth-driven development services. Seamlessly transform your business ideas into
                                reality with just a click, because innovation starts here. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-lg-3 py-md-3 py-2 zi-2 position-relative hire-section  how-appintment">
            <div class="row py-lg-3 appintment-box">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 pt-0 pt-lg-0 pt-md-0 mb-lg-4 p-0">
                    <ul class="nav nav-tabs mx-0 mt-lg-0 mt-md-0 mt-3" role="tablist">
                        <li class="nav-item w-lg-100 w-md-50 w-100" role="presentation">
                            <a class="nav-link active btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-16 fw-m my-1 py-sm-2 py-2 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3"
                                data-bs-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="false"
                                aria-label="Software Development">Software Development</a>
                        </li>
                        <li class="nav-item w-lg-100 w-md-50 w-100" role="presentation">
                            <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-16 fw-m my-1 py-sm-2 py-1 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3"
                                data-bs-toggle="tab" href="#menu122" role="tab" aria-controls="Mobile App"
                                aria-selected="false" aria-label="Mobile App Development">Mobile App Development</a>
                        </li>
                        <li class="nav-item w-lg-100 w-md-50 w-100" role="presentation">
                            <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-16 fw-m my-1 py-sm-2 py-1 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3"
                                data-bs-toggle="tab" href="#menu23" role="tab" aria-controls="Web" aria-selected="false"
                                aria-label="Web Development"> Web Development</a>
                        </li>
                        <li class="nav-item w-lg-100 w-md-50 w-100" role="presentation">
                            <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-16 fw-m my-1 py-sm-2 py-1 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3"
                                data-bs-toggle="tab" href="#menu24" role="tab" aria-controls="Blockchain"
                                aria-selected="false" aria-label="Blockchain Development">Blockchain Development</a>
                        </li>
                        <li class="nav-item w-lg-100 w-md-50 w-100" role="presentation">
                            <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-16 fw-m my-1 py-sm-2 py-1 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3"
                                data-bs-toggle="tab" href="#menu25" role="tab" aria-controls="Ecommerce"
                                aria-selected="false" aria-label="Ecommerce Solutions">Ecommerce Solutions</a>
                        </li>
                        <li class="nav-item w-lg-100 w-md-50 w-100" role="presentation">
                            <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-16 fw-m my-1 py-sm-2 py-1 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3"
                                data-bs-toggle="tab" href="#menu26" role="tab" aria-controls="Hire"
                                aria-selected="false" aria-label="Hire Developers">Hire Developers</a>
                        </li>
                        <li class="nav-item w-lg-100 w-md-50 w-100" role="presentation">
                            <a class="nav-link btn text-dark fs-xl-24 fs-lg-20 fs-md-17 fs-16 fw-m my-1 py-sm-2 py-1 mx-1 pe-lg-2 pe-md-3 pe-2 ps-lg-3 ps-md-3 ps-3"
                                data-bs-toggle="tab" href="#menu27" role="tab" aria-controls="Trending"
                                aria-selected="false" aria-label="Trending Solutions">Trending Solutions</a>
                        </li>

                    </ul>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 pt-0">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home1" class="container tab-pane active p-0" aria-labelledby="home-tab"
                            role="tabpanel">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                    <div
                                        class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">
                                        Software Development</div>
                                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-lg-2 mt-md-2 tz"
                                        style="--tz:30px;">
                                        Avail software development services tailored to your unique business needs. Our
                                        software developers combine cutting-edge technology with their expertise to
                                        empower your business with innovative software that drives success. </div>
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Bespoke Software
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">SaaS
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">White Label Software
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/custom-erp-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">ERP Software
                                                        Development</span></a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core
                                            Tech:</div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class="position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/java.webp"
                                                    width="45" height="45" alt="Java" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Java</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/php.webp"
                                                    width="45" height="45" alt="PHP" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">PHP</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/c.webp" width="45"
                                                    height="45" alt="C#" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">C#</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/ruby.webp"
                                                    width="45" height="45" alt="Ruby" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Ruby</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/python.webp"
                                                    width="45" height="45" alt="Python " />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Python</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/java-script.webp"
                                                    width="45" height="45" alt="Java Script" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Java
                                                    Script</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="menu122" class="container tab-pane fade p-0" aria-labelledby="mobile-tab"
                            role="tabpanel">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                    <div
                                        class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">
                                        Mobile App Development</div>
                                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-lg-2 mt-md-2 tz"
                                        style="--tz:30px;">
                                        Step into the future of digital interaction with our top-notch mobile app
                                        development services. Your ideas are the fuel, and we are the creators,
                                        transforming concepts into powerful mobile solutions that captivate users and
                                        elevate your digital footprint. </div>
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/android-application-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Android App Development
                                                    </span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/cross-platform-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Cross-Platform App
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/ios-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">iOS App
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">PWA
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/flutter-app-development')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l"> Flutter App Development
                                                    </span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Wearable App
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/react-native-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">React Native App
                                                        Development</span></a></div>
                                            <!-- <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a href="web-app-development.php" class="text-decoration-none text-dark"><i class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i> <span class="fs-lg-16 fs-md-16 fs-sm-15 fs-14 fw-l">Web App Development</span></a></div>     -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core
                                            Tech:</div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/flutter.webp"
                                                    width="45" height="45" alt="Flutter" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Flutter</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/swift.webp"
                                                    width="45" height="45" alt="Swift" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Swift</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/reactnative.webp"
                                                    width="45" height="45" alt="React Native" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">React
                                                    Native</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/kotlin.webp"
                                                    width="45" height="45" alt="Kotlin" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Kotlin</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/android.webp"
                                                    width="45" height="45" alt="Android" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Android</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/ios.webp"
                                                    width="45" height="45" alt="ios" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">IOS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-xl-start justify-content-center">
                                        <a href="{{asset('/mobile-app-development.php')}}"
                                            class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-2 py-2 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                            <span class="d-flex align-items-center"><span>Explore Mobile App Development
                                                    Services</span><i
                                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu23" class="container tab-pane fade p-0" aria-labelledby="web-tab" role="tabpanel">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                    <div
                                        class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">
                                        Web Development</div>
                                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-lg-2 mt-md-2 tz"
                                        style="--tz:30px;">
                                        Beyond mere websites, we weave digital tales with interactive website design and
                                        development services. Let us sculpt your online presence into a masterpiece that
                                        resonates with your brand essence and captivates your audience in just a click.
                                    </div>
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/website-design.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Website Design</span></a>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/cms-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">CMS
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/responsive-web-designing.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Responsive Website
                                                        Design</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/api-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">API
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/website-redesigning.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Website
                                                        Redesign</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Web Portal
                                                        Development</span></a></div>



                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core
                                            Tech:</div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/html.webp"
                                                    width="45" height="45" alt="Html" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Html</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/css.webp"
                                                    width="45" height="45" alt="Css" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Css</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/angularjs.webp"
                                                    width="45" height="45" alt="Angular Js" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Angular
                                                    Js</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/nodejs.webp"
                                                    width="45" height="45" alt="Node Js" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Node
                                                    Js</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/laraval.webp"
                                                    width="45" height="45" alt="Laraval" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Laraval</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/python.webp"
                                                    width="45" height="45" alt="Python" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Python</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-xl-start justify-content-center">
                                        <a href="{{asset('/web-development.php')}}"
                                            class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-2 py-2 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                            <span class="d-flex align-items-center"><span>Explore Web Development
                                                    Services</span><i
                                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="menu24" class="container tab-pane fade p-0" aria-labelledby="blockchain-tab"
                            role="tabpanel">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                    <div
                                        class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">
                                        Blockchain Development</div>
                                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-lg-2 mt-md-2 tz"
                                        style="--tz:30px;">
                                        Unlock the door to decentralized innovation with our cutting-edge blockchain
                                        development services. Experience security, transparency, and groundbreaking
                                        blockchain development solutions redefining trust and scalability in the digital
                                        era.</div>
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Blockchain
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Smart Contract
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">NFT
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">NFT Marketplace
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Cryptocurrency Exchange
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Metaverse
                                                        Development</span></a></div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core
                                            Tech:</div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/solidity.webp"
                                                    width="45" height="45" alt="solidity" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Solidity</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/vyper.webp"
                                                    width="45" height="45" alt="vyper" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Vyper</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/golang.webp"
                                                    width="45" height="45" alt="golang" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Golang</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/simplicity.webp"
                                                    width="45" height="45" alt="simplicity" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Simplicity</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/rholang.webp"
                                                    width="45" height="45" alt="rholang" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Rholang</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/rust.webp"
                                                    width="45" height="45" alt="rust" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Rust</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="menu25" class="container tab-pane fade p-0" aria-labelledby="ecommerce-tab"
                            role="tabpanel">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                    <div
                                        class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">
                                        Ecommerce Solutions</div>
                                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-lg-2 mt-md-2 tz"
                                        style="--tz:30px;">
                                        Witness the transformation of your small store into a global powerhouse with our
                                        Ecommerce Solutions. From intuitive shopping experiences to seamless payment
                                        integration, we're here to turn your Ecommerce venture into a thriving business,
                                        reaching new heights.</div>
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/ecommerce-website-development')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Ecommerce
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Magento
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Shopify
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Wordpress
                                                        Development</span></a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core
                                            Tech:</div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/magento.webp"
                                                    width="45" height="45" alt="magento" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Magento</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/shopify.webp"
                                                    width="45" height="45" alt="Shopify" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Shopify</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/bigcommerce.webp"
                                                    width="45" height="45" alt="BigCommerce" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">BigCommerce</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/uber-cart.webp"
                                                    width="45" height="45" alt="Ubercart" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Ubercart</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/woo-commerce.webp"
                                                    width="45" height="45" alt="Woocommerce" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Woocommerce</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/wordpress.webp"
                                                    width="45" height="45" alt="Wordpress" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Wordpress</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-xl-start justify-content-center">
                                        <a href="{{asset('/ecommerce-solutions.php')}}" class="btn  btn-button1 text-capitalize text-white ffs-xl-18 fs-lg-18 fs-md-19 fs-15
                                                                 py-lg-2 py-2 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                            <span class="d-flex align-items-center"><span>Explore Ecommerce
                                                    Solutions</span><i
                                                    class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="menu26" class="container tab-pane fade p-0" aria-labelledby="hire-tab" role="tabpanel">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                    <div
                                        class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">
                                        Hire Developers</div>
                                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-lg-2 mt-md-2 tz"
                                        style="--tz:30px;">
                                        Your vision, our expertise. Hire Developers who breathe life into ideas. A
                                        dedicated team ready to propel your projects forward, delivering excellence with
                                        every line of code. Connect now!</div>
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-mobile-app-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Mobile App
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-android-app-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Android App
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-ios-app-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire iOS App
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-react-native-app-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire React Native App
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-flutter-app-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Flutter App
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-web-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Website
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-php-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire PHP
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-python-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Python
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-web-desginers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Website
                                                        Designers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-full-stack-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Full Stack
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-mean-stack-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire MEAN Stack
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-mern-stack-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire MERN Stack
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Laravel
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-ui-ux-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire UI / UX
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Software
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-reactjs-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire React JS
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-java-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Java
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-angular-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Angularjs
                                                        Developers</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/hire-nodejs-developers.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Hire Node.js
                                                        Developers</span></a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core
                                            Tech:</div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/fullstack.webp"
                                                    width="45" height="45" alt="fullstack" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Fullstack</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/android.webp"
                                                    width="45" height="45" alt="android" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Android</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/ios.webp"
                                                    width="45" height="45" alt="ios" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">IOS</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/meanstack.webp"
                                                    width="45" height="45" alt="Mean Stack" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Mean
                                                    Stack</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/mernstack.webp"
                                                    width="45" height="45" alt="Mern Stack" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Mern
                                                    Stack</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/php.webp"
                                                    width="45" height="45" alt="PHP" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">PHP</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="menu27" class="container tab-pane fade p-0" aria-labelledby="trending-tab"
                            role="tabpanel">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-lg-2 mt-md-2 mt-sm-2 mt-2 ">
                                    <div
                                        class="col-lg-12 col-md-12 col-12 text-balck fs-xl-32 fs-lg-32 fs-md-23 fs-22 lh-normal mt-lg-2 mt-md-2 mb-2 fw-m p-0">
                                        Trending Solutions</div>
                                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-lg-2 mt-md-2 tz"
                                        style="--tz:30px;">
                                        Explore our trending ready-to-use applications, meticulously crafted to elevate
                                        your business instantly. From cutting-edge food delivery apps to innovative
                                        elearning platforms, our trending solutions are designed to streamline
                                        operations.</div>
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 col-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                        <div class="row our-services-links mx-0 p-xl-2 p-lg-2 p-md-2 p-sm-2 p-2">
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/food-delivery-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Food Delivery App
                                                        Development</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/grocery-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Grocery
                                                        Delivery</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/fantasy-sports-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Fantasy sports
                                                        App</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Video Streaming
                                                        App</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Social Media
                                                        App</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Event Management
                                                        App</span></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/elearning-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Elearning App</span></a>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Travel App</span></a>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/pharmacy-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Pharmacy App</span></a>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/fashion-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Fashion App</span></a>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/doctor-on-demand-app-development.php')}}"
                                                    class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Doctor on Demand
                                                        App</span></a></div>
                                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 mb-2"><a
                                                    href="{{asset('/')}}" class="text-decoration-none text-dark"><i
                                                        class="imgd img-circle position-relative me-2 text-dark fs-lg-15 fs-md-14 fs-10"></i>
                                                    <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Healthacare App
                                                    </span></a></div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3">Core
                                            Tech:</div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/nodejs.webp"
                                                    width="45" height="45" alt="nodejs" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Node.Js</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/angularjs.webp"
                                                    width="45" height="45" alt="angularjs" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Angularjs</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/react.png"
                                                    width="45" height="45" alt="react" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">React
                                                    Js</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/java.webp"
                                                    width="45" height="45" alt="Java" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Java
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/php.webp"
                                                    width="45" height="45" alt="Php" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Php
                                                </span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-2 col-lg-2 col-md-2 col-sm-6 col-4 text-center mb-lg-3 mb-md-3 mb-3">
                                            <div class="text-dark d-block box-theme1 py-lg-4 py-md-4 py-1">
                                                <img class=" position-relative"
                                                    src="{{asset('/public')}}/assets/img/hero-section/flutter.webp"
                                                    width="45" height="45" alt="flutter" />
                                                <span
                                                    class="d-block text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 mt-2 text-darkk">Flutter
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 overflow-hidden position-relative comments ">
                    <div class="container position-relative zi-2">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-10 col-sm-12 col-12">
                                  <div class="row align-items-center">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row pt-3 text-lg-start text-md-center text-center position-relative ">
                                            <div class="col-12">
                                                <div class="row pb-2">
                                                    <h2 class="d-none invisible">Client Journeys to Success – Glimpse of Our Case Studies</h2>
                                                    <div class="col-12 headingv2 left text-black text-lg-start text-md-center text-center"><span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">Client Journeys to Success – Glimpse of Our Case Studies</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted mt-0 mb-lg-1">Explore our client success stories, witnessing transformative journeys to success. Each case study below reflects our impactful solutions, showcasing innovation, dedication, and tangible results. </div>
                                                <div class="col-12 pb-xl-3 pb-lg-3 pb-md-2 pb-sm-2 pb-3">
                                                        <a href="#casestudy-scroll" class="fw-m text-decoration-none text-capitalize text-dark fs-xl-32 fs-lg-32 fs-md-23 fs-22 ms-md-2">
                                                        <span class="d-block fw-m "><span class="d-flex justify-content-xl-start justify-content-center">See Our Work 
                                                             <img src="{{asset('/public')}}/assets/img/hero-section/arrowDown--black.svg"
width="19" height="48" class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px" alt=""></span></span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> --}}


<div
    class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 overflow-hidden position-relative comments ">
    <div class="container position-relative zi-2">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row pt-3 position-relative align-items-start">
                            <div class="col-md">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row pb-2">
                                            <h2 class="d-none invisible">Client Journeys to Success – Glimpse of Our
                                                Case Studies</h2>
                                            <div class="col-12 headingv2 left text-black">
                                                <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">Client Journeys to
                                                    Success – Glimpse of Our Case Studies</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-0 mb-lg-1">
                                        Explore our client success stories, witnessing transformative journeys to
                                        success. Each case study below reflects our impactful solutions, showcasing
                                        innovation, dedication, and tangible results. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative"
    id="casestudy-scroll">
    <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy">
        <div class="row align-items-center">
            <div
                class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                <div
                    class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                        <div class="row">
                            <div
                                class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-16 fs-sm-14 fs-13 text-white text-lg-start text-md-start text-start">
                                BOBI Live</div>
                            <div class="col-12 headingv2 left text-black"><span
                                    class="fs-xl-32 fs-lg-30 fs-md-20 fs-18  text-white">Socializing, interacting,
                                    exploring, all fascinating things are here for you !</span>
                            </div>
                            <div class="divider ms-xl-3 mb-xl-5 mb-4 d-xl-inline-block d-none"></div>
                        </div>
                        <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1 text-start">
                            <a href="{{asset('/case-study/bobilive.php')}}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4"
                                target="_blank">
                                <span class="d-block fw-m"><span
                                        class="view_case_btn d-flex text-nowrap fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 py-md-3 py-1 px-md-4 px-3">View
                                        case study
                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27" class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                        <img src="{{asset('/public')}}/assets/img/hero-section/frame12.webp" width="509" height="509"
                            class="w-100 h-auto" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative"
    id="casestudy-scroll">
    <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy1">
        <div class="row align-items-center">
            <div
                class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                <div
                    class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                        <div class="row">
                            <div
                                class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-16 fs-sm-14 fs-13 text-white text-lg-start text-md-start text-start">
                                Hozzo - Car wash</div>
                            <div class="col-12 headingv2 left text-black"><span
                                    class="fs-xl-32 fs-lg-30 fs-md-20 fs-18  text-white">Waterless car washing services
                                    across india</span>
                            </div>
                            <div class="divider ms-xl-3 mb-xl-5 mb-4 d-xl-inline-block d-none"></div>
                        </div>
                        <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1 text-start">
                            <a href="{{asset('/case-study/hozzo.php')}}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4"
                                target="_blank">
                                <span class="d-block fw-m"><span
                                        class="view_case_btn d-flex text-nowrap fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 py-md-3 py-1 px-md-4 px-3">View
                                        case study
                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27" class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center mob_img  order-1">
                        <img src="{{asset('/public')}}/assets/img/hero-section/hozzo.webp" height="509" width="509"
                            class="w-100 h-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative"
    id="casestudy-scroll">
    <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy2">
        <div class="row align-items-center">
            <div
                class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                <div
                    class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                        <div class="row">
                            <div
                                class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-16 fs-sm-14 fs-13 text-white text-lg-start text-md-start text-start">
                                MyFab11</div>
                            <div class="col-12 headingv2 left text-black"><span
                                    class="fs-xl-32 fs-lg-30 fs-md-20 fs-18  text-white">Principle Partner of KKR.
                                    india's most trusted Fantasy Cricket App</span>
                            </div>
                            <div class="divider ms-xl-3 mb-xl-5 mb-4 d-xl-inline-block d-none"></div>
                        </div>
                        <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1 text-start">
                            <a href="{{asset('/case-study/myfab11.php')}}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4"
                                target="_blank">
                                <span class="d-block fw-m"><span
                                        class="view_case_btn d-flex text-nowrap fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 py-md-3 py-1 px-md-4 px-3">View
                                        case study
                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27" class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  mob_img order-1">
                        <img src="{{asset('/public')}}/assets/img/hero-section/fab11.webp" height="509" width="509"
                            class="w-100 h-auto" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative"
    id="casestudy-scroll">
    <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-0" id="casestudy4">
        <div class="row align-items-center">
            <div
                class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-5 ps-sm-5 ps-5">
                <div
                    class="row text-lg-start text-md-center text-center position-relative pe-xxl-3 pe-xl-3 pe-lg-3 pe-md-3 pe-sm-1 pe-1 pt-xxl-3 pt-xl-3 pt-lg-3 pt-md-3 pt-sm-1 pt-4">
                    <div class="col-12 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-0 ps-sm-0 ps-0">
                        <div class="row">
                            <div
                                class="fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-16 fs-sm-14 fs-13 text-white text-lg-start text-md-start text-start">
                                Fabindia</div>
                            <div class="col-12 headingv2 left text-black"><span
                                    class="fs-xl-32 fs-lg-30 fs-md-20 fs-18  text-white">Shop for Handwoven Garments &
                                    home fusnishings</span>
                            </div>
                            <div class="divider ms-xl-3 mb-xl-5 mb-4 d-xl-inline-block d-none"></div>
                        </div>
                        <div class="col-12 pb-xl-5 pb-lg-5 pb-md-5 pb-sm-2 pb-1 text-start">
                            <a href="{{asset('/case-study/fabindia.php')}}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4"
                                target="_blank">
                                <span class="d-block fw-m"><span
                                        class="view_case_btn d-flex text-nowrap fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 py-md-3 py-1 px-md-4 px-3">View
                                        case study
                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27" class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center mob_img  order-1">
                        <img src="{{asset('/public')}}/assets/img/hero-section/fabindia.webp" height="509" width="509"
                            class="w-100 h-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-5 py-2 overflow-hidden position-relative">
    <div class="container position-relative zi-2 py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-0 py-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 px-0">
                <div
                    class="col-12 align-items-center d-flex justify-content-center pb-xxl-1 pb-xl-1 pb-lg-1 pb-md-0 pb-sm-0 pb-0">
                    <a href="{{asset('/casestudy.php')}}"
                        class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-xl-2 py-lg-2 py-2 my-3 px-lg-5 py-2 px-2 ms-md-2"
                        target="_blank">
                        <span class="d-flex align-items-center"><span>View All Casestudy </span><i
                                class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid overflow-hidden bg-white new-portfolio position-relative">
    <div class="container py-md-5 py-4 position-relative ">
        <div class="row">
            <div class="row mx-0 mb-lg-4 mb-md-4 mb-3">
                <h2 class="d-none invisible">Take A Sneak Peak to Our Portfolio And Elevate Your Expectations!</h2>
                <div class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Take A Sneak
                        Peak to Our Portfolio And Elevate <b> Your Expectations!</b> </span></div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center owl-portfolio-slider owl-carousel mx-0">

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/BuzzCast.webp" alt="BuzzCast">
                    <div class="portfolioBoxContent">
                        <h4>BuzzCast</h4>
                        <p>Live Video Chat App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/BNI-Mobile-Banking.webp"
                        alt="BNI mobile banking app">
                    <div class="portfolioBoxContent">
                        <h4>BNI Mobile Banking App</h4>
                        <p>Mobile Banking App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Guidely.webp" alt="guidely">
                    <div class="portfolioBoxContent">
                        <h4>Guidely</h4>
                        <p>Exam Preparation App</p>
                    </div>
                </div>
            </div>




            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Pixelcut.webp" alt="Pixelcut">
                    <div class="portfolioBoxContent">
                        <h4>Pixelcut</h4>
                        <p>AI Photo Editor App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Moomoo.webp" alt="moomoo app">
                    <div class="portfolioBoxContent">
                        <h4>Moomoo</h4>
                        <p>Online Trading Platform</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Mint.webp" alt="mint app">
                    <div class="portfolioBoxContent">
                        <h4>Mint</h4>
                        <p>Stock Market App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Oto-Music.webp" alt="Oto Music">
                    <div class="portfolioBoxContent">
                        <h4>Oto Music</h4>
                        <p> Music App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/BNI-Mobile-Banking.webp"
                        alt="BNI mobile banking app">
                    <div class="portfolioBoxContent">
                        <h4>BNI Mobile Banking App</h4>
                        <p>Mobile Banking App</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-md-12 ">
                <div class="portfolioBox">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/ipay.webp" alt="ipay">
                    <div class="portfolioBoxContent">
                        <h4>iPay</h4>
                        <p>Recharge App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/SchoolMintra.webp"
                        alt="school mintra">
                    <div class="portfolioBoxContent">
                        <h4>SchoolMintra</h4>
                        <p>School Management System</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Daily-Sales-Record.webp"
                        alt="daily sales record">
                    <div class="portfolioBoxContent">
                        <h4>Daily Sales Record </h4>
                        <p>Inventory Tracking App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/destist-online.webp"
                        alt="destist online">
                    <div class="portfolioBoxContent">
                        <h4>Dentist Online</h4>
                        <p>Health App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Dr-Lal-PathLabs.webp"
                        alt="Dr lal pathLabs">
                    <div class="portfolioBoxContent">
                        <h4>Dr Lal PathLabs</h4>
                        <p>Blood Test App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Motion-Learning-App.webp"
                        alt="motion learning app">
                    <div class="portfolioBoxContent">
                        <h4>Motion</h4>
                        <p>Learning App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/propira.webp" alt="propira">
                    <div class="portfolioBoxContent">
                        <h4>Propira</h4>
                        <p>Property Management Portal</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Bamboo.webp" alt="bamboo app">
                    <div class="portfolioBoxContent">
                        <h4>Bamboo</h4>
                        <p>Invest App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Liboc-Devamart.webp"
                        alt="liboc devamart ">
                    <div class="portfolioBoxContent">
                        <h4>Liboc Devamart</h4>
                        <p>Online Pharmacy App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Health-app.webp" alt="Health app">
                    <div class="portfolioBoxContent">
                        <h4>I-KNOW</h4>
                        <p>Health App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Badoo.webp" alt="Badoo">
                    <div class="portfolioBoxContent">
                        <h4>Badoo</h4>
                        <p>Chat & Dating App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/now-vue.webp" alt="now vue">
                    <div class="portfolioBoxContent">
                        <h4>Now Vue </h4>
                        <p>Guest Check In App</p>
                    </div>
                </div>
            </div>




            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/TP-Fleet.webp" alt="TP-Fleet">
                    <div class="portfolioBoxContent">
                        <h4>TP Fleet </h4>
                        <p>Fleet Management App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Lambus.webp" alt="Lambus">
                    <div class="portfolioBoxContent">
                        <h4>Lambus </h4>
                        <p>Travel Planner</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/myfab11.webp" alt="MyFab11">
                    <div class="portfolioBoxContent">
                        <h4>MyFab11 App </h4>
                        <p>Fantasy Sports App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Logistiq-Shipping.webp"
                        alt="logistiq shipping">
                    <div class="portfolioBoxContent">
                        <h4>Logistiq Shipping </h4>
                        <p>Warehouse Management App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/EventoPackage.webp"
                        alt="EventoPackage ">
                    <div class="portfolioBoxContent">
                        <h4>EventoPackage</h4>
                        <p>Organiser App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/iProperty.webp"
                        alt="iProperty Malaysia">
                    <div class="portfolioBoxContent">
                        <h4>iProperty Malaysia </h4>
                        <p>Property App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/beliver11.webp" alt="Beliver11">
                    <div class="portfolioBoxContent">
                        <h4>Beliver11</h4>
                        <p>Fantasy Sports App</p>
                    </div>
                </div>
            </div>








            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Trulia-Rent-Apartments-&-Home.webp"
                        alt="trulia rent apartments & home">
                    <div class="portfolioBoxContent">
                        <h4>Trulia Rent Apartments & Home</h4>
                        <p>Rental Homes & Apartments App</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/M4Marry.webp" alt="M4Marry ">
                    <div class="portfolioBoxContent">
                        <h4>M4Marry</h4>
                        <p>Matro</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/My-Pitch.webp" alt="My Pitch">
                    <div class="portfolioBoxContent">
                        <h4>My Pitch </h4>
                        <p>Fantasy Sports App</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/FabHotels.webp" alt="FabHotels">
                    <div class="portfolioBoxContent">
                        <h4>FabHotels</h4>
                        <p>Hotel Booking App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Veeka.webp" alt="Veeka">
                    <div class="portfolioBoxContent">
                        <h4>Veeka</h4>
                        <p>Community App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/royal11-project.webp"
                        alt="Royal 11">
                    <div class="portfolioBoxContent">
                        <h4>Royal 11 </h4>
                        <p>Fantasy Sports App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{asset('/public')}}/assets/img/portfolio-section/Skiplagged.webp" alt="Skiplagged">
                    <div class="portfolioBoxContent">
                        <h4>Skiplagged </h4>
                        <p>Exclusive Flights</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- about us new section --}}
<div class="container-fluid overflow-hidden aboutNewSection">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xxl-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <div class="row">
                    <div class="col-12 headingv2 fs-md-14 fs-12 p-0"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">
                            <span class="fs-xl-32 fs-lg-27 fs-md-23 fs-20">A Quick Insight Into IMG Global Infotech
                            </span></div>
                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark my-3 px-0">Where innovation meets
                        excellence, IMG Global Infotech comes into the picture! Immerse yourself in a world of
                        cutting-edge services and high-quality development solutions that redefine the digital
                        landscape. Our work environment fosters creativity and collaboration, ensuring a dynamic
                        atmosphere that fuels groundbreaking ideas. </div>
                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark my-3 px-0">At IMG, we take pride in
                        our commitment to timely delivery, promptly turning your visions into reality. Our services are
                        not just about codes and designs; they are about crafting experiences that leave a lasting
                        impression. From mobile app development to custom software development and hiring dedicated
                        developers, we offer all types of services to all-scale businesses.
                    </div>
                    <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark my-3 px-0">Experience top-notch
                        development solutions, reasonable prices, and a partnership that goes beyond expectations.
                        Whether you want to develop a food delivery or fantasy sports application, we can ace it all.
                        Join us on a journey where possibilities are limitless – because at IMG Global Infotech, we make
                        digital dreams come true.
                    </div>
                    {{-- <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark my-3 px-0 text-center text-md-start">Powered by an expert team committed towards their work and possessing required skills and capabilities to shine the client's business through processing digital innovation and intuitive mobile solutions based on their requirements.</div> --}}
                    {{--   <div class="col-12 px-0">
                                                    <div class="row countBoxOuter mx-0 g-3 text-center me-lg-n4">
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 0s">
                                                                <div class="aboutNumberText">1200+</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Successful <br>Projects</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 1s">
                                                                <div class="aboutNumberText">98%</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Success <br>Ratio</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 2s">
                                                                <div class="aboutNumberText">100+</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Team <br>Members</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <div class="countBox" style="--d: 3s">
                                                                <div class="aboutNumberText">8+</div>
                                                                <div class="fs-xxl-16 fs-xl-15 fs-lg-14 fs-sm-13 fs-12 lh-normal text-dark fw-m">Years in <br>Industry</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}

                </div>
            </div>
            <div class="col-lg-6 col-xxl-6 order-1 order-lg-2 text-center">
                <img width="546" height="463"
                    src="{{asset('/public')}}/assets/img/about-us-new/get-more-insight-about-us.webp"
                    srcset="{{asset('/public')}}/assets/img/about-us-new/m-aboutNew2.webp 700w, {{asset('/public')}}/assets/img/about-us-new/t-aboutNew2.webp 1000w, {{asset('/public')}}/assets/img/about-us-new/xl-aboutNew2.webp 1lw"
                    class="img-fluid" alt="About-us">
                {{--  <div class="row countBoxOuter mx-0 g-3 text-center row-cols-2 d-none d-sm-flex">
                                              <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 0s">
                                                        <div class="aboutNumberText">1200+</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-m">Successful <br>Projects</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 1s">
                                                        <div class="aboutNumberText">98%</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15lh-norma text-dark fw-m">Success <br>Ratio</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 1s">
                                                        <div class="aboutNumberText">100+</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-m">Team <br>Members</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="countBox" style="--d: 0s">
                                                        <div class="aboutNumberText">8+</div>
                                                        <div class="fs-xxl-18 fs-xl-17 fs-lg-16 fs-15 lh-normal text-dark fw-m">Years in <br>Industry</div>
                                                    </div>
                                                </div>
                                            </div>  --}}
            </div>
        </div>
    </div>
</div>
{{-- about us section end --}}

{{-- cta section --}}
<div class="container-fluid py-xxl-4 py-xl-4 py-lg-4 py-md-2 py-4 ctaSection">
    <div class="container">
        <div class="row">
            <div class="col-12 ctaCardSection">
                <div class="row">
                    <div class="col-xl-9 col-12 mx-auto">
                        <div class="row">
                            <h3 class="col-12 d-none invisible">Let’s turn your business idea into reality</h3>
                            <div class="col-12 fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m text-white mb-4 text-center">
                                Let’s turn your business idea into reality
                            </div>
                            <div class="col-12 text-center fs-lg-16 fs-md-16 fs-sm-15 fs-14 fw-l text-white mb-5">
                                Do you want to experience the best-in-class quality mobile apps? Send us your inquiry
                                and one
                                of our executives will catch you up in no time by Call, Email or Skype.
                            </div>
                            <div class="col-12 text-center">
                                <a href="{{asset('/request-a-quote.php')}}" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"
                                    class="btn  btn-button1 fs-xl-18 fs-lg-18 fs-md-19 fs-15 text-white  py-xxl-2 py-1 px-4">
                                    <span class="d-flex align-items-center"><span>Book A Discovery Call</span> <i
                                            class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- cta section end --}}


{{-- Start major-industries-section --}}

<div class="container-fluid overflow-hidden major-industries-section py-4 position-relative industries-sec px-0">
    <div class="container position-relative pt-md-3 pb-md-2">
        <div class="row mb-lg-4 mb-md-4 mb-3">
            <h3 class="d-none invisible">Wide Range of Industries Covered By Us!</h3>
            <div class="col-12 left fs-md-14 fs-16"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">
                    <b>Wide Range of Industries Covered By Us!</b> </span></div>
            <div class="col-lg-12 col-md-12 col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-mute mt-4 mb-4">
                Discover the endless possibilities with our versatile mobile app and web development solutions. From
                tech to healthcare, we cater to a diverse array of industries, ensuring innovation and excellence across
                every sector. Explore the major sector we deal in!
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/fintech-software-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/bank-and-finance.webp"
                            alt="bank-and-finance" width="285" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Banking and Finance </figcaption>
                </a>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/fantasy-sports-app-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/fantasy-sports.webp"
                            alt="fantasy-sports" width="383" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Fantasy Sports </figcaption>
                </a>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/healthcare-software-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/healthcare.webp" alt="healthcare app"
                            width="187" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Healthcare </figcaption>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/edtech-software-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/edTech-solution.webp"
                            alt="edTech solution app" width="285" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> EdTech Solution </figcaption>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/travel-app-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/travel-and-tourism.webp"
                            alt="travel and tourism app" width="285" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Travel and Tourism </figcaption>
                </a>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/media-and-entertainment-app-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/media-and-entertainment.webp"
                            alt="media and entertainment app" width="580" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Media and Entertainment
                    </figcaption>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/retail-and-ecommerce-app.webp"
                            alt="retail and ecommerce industry app" width="285" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Retail and Ecommerce App
                    </figcaption>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/logistics-software-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/logistics-services-app.webp"
                            alt="logistic service industry app" width="285" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Logistics Services App
                    </figcaption>
                </a>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/social-media-app-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/social-app.webp" alt="social media app"
                            width="187" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Social App </figcaption>
                </a>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/real-estate-app-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/real-estate.webp" alt="real estate web"
                            width="384" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Real Estate </figcaption>
                </a>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 col">
                <a class="lazyloaded" href="{{asset('/event-app-development.php')}}" target="_blank">
                    <figure class="lazyloaded">
                        <img class="ls-is-cached lazyloaded"
                            src="{{ asset('/public') }}/assets/img/hero-section/on-demand.webp"
                            alt="event management app" width="285" height="220" />
                    </figure>
                    <figcaption class="lazyloaded fs-lg-16 fs-md-16 fs-sm-15 fs-14"> Event management </figcaption>
                </a>
            </div>
        </div>
    </div>
</div>


{{-- testimonial new section --}}
<div class="container-fluid overflow-hidden newTesimonialSection position-relative">
    <div class="container newTesimonialSectionInner h-xl-100 position-relative zi-1 py-4 py-lg-5 py-xl-0">
        <div class="row h-xl-100 justify-content-center">
            <div class="col-lg-10 col-xl-4">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <div class="row">
                            <h3 class="d-none invisible">What Our Clients Have to Say?</h3>
                            <div class="col-12 px-0 heading2 fs-md-14 fs-12 left text-dark"><span
                                    class="fs-xl-32 fs-lg-32 fs-md-23 fs-22"> <b>What Our Clients Have to
                                        Say?</b></span></div>
                            <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark px-0 py-3">Dive into the
                                testimonials that paint a vivid picture of our journey with our potential client so far.
                                Take a glimpse into our exceptional assistance and begin your success story with us
                                today. </div>
                            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-1  px-0 text-black text-lg-start text-md-start text-center">100+ Awards In Last 11 Years 
                                            </div>	   
                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-21 px-0  px-0 text-black text-lg-start text-md-start text-center"> 100% Client Satisfaction 
                                             </div>	   
                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-1 px-0  px-0 text-black text-lg-start text-md-start text-center"> 1000+ Apps Delivered 
                                              </div>	   
                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-1 px-0  px-0 text-black text-lg-start text-md-start text-center"> 150+ Startups We Worked With
                                                </div>	    -->


                            <div class="col-xl-auto text-center text-xl-start px-0 d-none d-xl-block">
                                <a href="{{asset('/request-a-quote.php')}}"
                                    class="btn  btn-button1 text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15  my-3 px-lg-4 py-2 px-3">
                                    <span class="d-block"><span>Start A Project</span><i
                                            class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 testimonialCol">
                <div class="row">
                    <div class="col-12 px-sm-2 px-0">
                        <div class="row mx-0 testiomnialCarousel owl-carousel">
                            <div class="col-12 testimonialCard">
                                <div class="row align-items-center">
                                    <div class="col-auto testimonialUserImgCol">
                                        <div class="testimonialUserImg  overflow-hidden">
                                            <img width="300" height="300"
                                                src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-2.webp"
                                                srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-2-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-2.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-2.webp 1500w"
                                                class="img-fluid" alt="Alisha Sharma">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row bg-white mx-0">
                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Miss.
                                                Alisha Sharma</div>
                                            <div class="col-12 userDes fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark">
                                                Co-Founder, YSR Infotech</div>
                                            <div
                                                class="col-12 userLocation fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark fw-l d-flex align-items-center">
                                                <img width="11" height="16"
                                                    src="{{asset('/public')}}/assets/img/new-testimonial/location.webp"
                                                    class="loc-icon me-1" alt="location-icon">
                                                <span>New Delhi, India</span>
                                            </div>
                                            <div
                                                class="col-12 userMessage fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark mt-3">
                                                The client was very satisfied with the final product. IMG Global
                                                Infotech Pvt. Ltd provided a quick turnaround and high-quality services.
                                                They were able to strategize their deliverables well. The team utilized
                                                Scrum for project management and various apps for communication.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 testimonialCard">
                                <div class="row align-items-center">
                                    <div class="col-auto testimonialUserImgCol">
                                        <div class="testimonialUserImg  overflow-hidden">
                                            <img width="300" height="300"
                                                src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-3.webp"
                                                srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-3-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-3.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-3.webp 1500w"
                                                class="img-fluid" alt="Arun Garg">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row bg-white mx-0">
                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr.
                                                Arun Garg</div>
                                            <div class="col-12 userDes fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark">
                                                Founder, CoachingSelect.com</div>
                                            <div
                                                class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                <img width="11" height="16"
                                                    src="{{asset('/public')}}/assets/img/new-testimonial/location.webp"
                                                    class="loc-icon me-1" alt="location-icon">
                                                <span>India</span>
                                            </div>
                                            <div
                                                class="col-12 userMessage fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark mt-3">
                                                IMG Global Infotech Pvt. Ltd helped the client improve their digital
                                                presence through the web portal. They finished the project within six
                                                months, which exceeded the client's expectations. In addition, they were
                                                customer-focused and accommodating to the client's queries.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 testimonialCard">
                                <div class="row align-items-center">
                                    <div class="col-auto testimonialUserImgCol">
                                        <div class="testimonialUserImg  overflow-hidden">
                                            <img width="300" height="300"
                                                src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-1.webp"
                                                srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-1-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-1.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-1.webp 1500w"
                                                class="img-fluid" alt="Sandeep Yadav">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row bg-white mx-0">
                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr.
                                                Sandeep Yadav</div>
                                            <div class="col-12 userDes fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark">
                                                Owner, Coherent Lab LLP</div>
                                            <div
                                                class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                <img width="11" height="16"
                                                    src="{{asset('/public')}}/assets/img/new-testimonial/location.webp"
                                                    class="loc-icon me-1" alt="location-icon">
                                                <span>India</span>
                                            </div>
                                            <div
                                                class="col-12 userMessage fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark mt-3">
                                                IMG Global Infotech Pvt. Ltd impressed the client with the final
                                                results. The client also lauded their quality work, proper communication
                                                via scrum meetings, efficient project management, and on-time delivery.
                                                Due to the success of the collaboration, the client hired them again for
                                                other projects..</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 testimonialCard">
                                <div class="row align-items-center">
                                    <div class="col-auto testimonialUserImgCol">
                                        <div class="testimonialUserImg  overflow-hidden">
                                            <img width="300" height="300"
                                                src="{{asset('/public')}}/assets/img/new-testimonial/testimonial-4.webp"
                                                srcset="{{asset('/public')}}/assets/img/new-testimonial/testimonial-4-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-4.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/testimonial-4.webp 1500w"
                                                class="img-fluid" alt="Anikendra Das Choudhury">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row bg-white mx-0">
                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr.
                                                Anikendra Das Choudhury</div>
                                            <div class="col-12 userDes fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark">CEO,
                                                MyFab11</div>
                                            <div
                                                class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                <img width="11" height="16"
                                                    src="{{asset('/public')}}/assets/img/new-testimonial/location.webp"
                                                    class="loc-icon me-1" alt="location-icon">
                                                <span>Kolkata, India</span>
                                            </div>
                                            <div
                                                class="col-12 userMessage fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark mt-3">
                                                Thanks to IMG Global Infotech's efforts, the project was completed
                                                successfully, satisfying the client's expectations. Although work was
                                                done remotely, their project management was seamless and efficient.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 testimonialCard">
                                <div class="row align-items-center">
                                    <div class="col-auto testimonialUserImgCol">
                                        <div class="testimonialUserImg  overflow-hidden">
                                            <img width="300" height="300"
                                                src="{{asset('/public')}}/assets/img/new-testimonial/t-avatar-1.webp"
                                                srcset="{{asset('/public')}}/assets/img/new-testimonial/t-avatar-1-500.webp 500w, {{asset('/public')}}/assets/img/new-testimonial/t-avatar-1.webp 1000w, {{asset('/public')}}/assets/img/new-testimonial/t-avatar-1.webp 1500w"
                                                class="img-fluid" alt="Bharat Sharma">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row bg-white mx-0">
                                            <div class="col-12 userName fs-xl-22 fs-lg-18 fs-16 text-theme3 fw-m">Mr.
                                                Bharat Sharma</div>
                                            <div class="col-12 userDes fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark">
                                                Administrative Head, Injection Service At Home</div>
                                            <div
                                                class="col-12 userLocation fs-xl-17 fs-lg-15 fs-13 text-dark fw-l d-flex align-items-center">
                                                <img width="11" height="16"
                                                    src="{{asset('/public')}}/assets/img/new-testimonial/location.webp"
                                                    class="loc-icon me-1" alt="location-icon">
                                                <span>India</span>
                                            </div>
                                            <div
                                                class="col-12 userMessage fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-dark mt-3">
                                                Impressing their partner, IMG Global Infotech Pvt. Ltd brought many
                                                customers for the client. Their professionalism and active response were
                                                all remarkable, as demonstrated in their project updates every 2-3 days.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto text-center text-xl-start px-0 d-xl-none mt-2">
                        <a href="{{asset('/request-a-quote.php')}}" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            class="btn  btn-button1 text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15  my-3 px-lg-4 py-2 px-3">
                            <span class="d-block"><span>Start A Project</span><i
                                    class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- latest blog section -->
<div class="container-fluid blog-section position-relative overflow-hidden">
    <div class="container position-relative zi-1 py-md-5 py-2">
        <div class="row">
            <div class="col-12 ">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9 headingv2 fs-md-14 fs-12 mb-sm-0 mb-3 text-center">
                        <span class="fs-xl-26 fs-lg-20 fs-md-16 fs-sm-15 fs-14">
                            <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 text-theme3 d-block">Stay Informed Of Latest
                                Innovations and Trends With Our Blogs!</span>
                            Explore our insightful blogs to stay abreast of the latest innovations and trends. Stay
                            informed, stay ahead. </span>
                    </div>
                </div>
            </div>

            <div class="col-12 h-100">
                <div class="row align-items-start">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 h-100 px-0 pt-2">
                                <div class="row align-items-start mt-md-3 mt-2">
                                    <div class="col-12">
                                        <div class="row blog_slider-main owl-carousel">
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageTop-FinTech-App-Development-Companies-in-India-2024.webp"
                                                                class="img-fluid"
                                                                alt="blogimageTop-FinTech-App-Development-Companies-in-India-2024"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            Top FinTech App Development Companies In India 2024</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        This blog aims to shed light on the list of the top fintech
                                                        mobile app development companies in India, showcasing the top 10
                                                        players redefining the financial technology landscape in 2024.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Dec
                                                            15, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimagetop-10-trusted-real-estate-app-development-companies-in-india.webp"
                                                                class="img-fluid"
                                                                alt="blogimagetop-10-trusted-real-estate-app-development-companies-in-india"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            Top 10 Trusted Real Estate App Development Companies In
                                                            India</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        This blog will explore India's top 10 trusted real estate app
                                                        development companies, with IMG Global Infotech securing the
                                                        coveted No. 1 position.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Dec
                                                            11, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide.webp"
                                                                class="img-fluid"
                                                                alt="blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How To Develop A Loan Lending Mobile App? – A Complete Guide
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        Developing a loan lending app involves various steps and
                                                        considerations to ensure functionality, security, and
                                                        user-friendliness. Here’s a detailed guide on how you can go
                                                        about building one.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Nov
                                                            27, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimagetop-10-mobile-app-development-companies-in-2024.webp"
                                                                class="img-fluid"
                                                                alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            Top 10 Mobile App Development Companies In 2024</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        The list of the top 10 mobile app development companies in 2024
                                                        listed in this article has demonstrated their expertise,
                                                        innovation, and commitment to delivering high-quality mobile
                                                        apps.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Nov
                                                            16, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-much-does-it-cost-to-develop-a-real-estate-website-app-like-magicbricks.webp"
                                                                class="img-fluid"
                                                                alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How Much Does It Cost To Develop A Real Estate Website & App
                                                            Like Magicbricks?</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        Are you ready to embark on a digital journey through the
                                                        captivating world of real estate? Imagine having the power to
                                                        browse, compare, and purchase properties right from the comfort
                                                        of your home.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Nov
                                                            06, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-Much-Does-It-Cost-to-Develop-an-App-like-MakeMyTrip.webp"
                                                                class="img-fluid"
                                                                alt="How Much Does It Cost To Develop An App Like MakeMyTrip?"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How Much Does It Cost To Develop An App Like MakeMyTrip?
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        Embarking on the path to develop a tours and travel app like
                                                        MakeMyTrip is undoubtedly a challenging task, but only if you
                                                        are not well-versed with the travel booking app development
                                                        cost.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Oct
                                                            31, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-Much-Does-It-Cost-to-Develop-An-App-Like-Rapido.webp"
                                                                class="img-fluid"
                                                                alt="How Much Does It Cost To Develop An App Like Rapido?"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How Much Does It Cost To Develop An App Like Rapido?</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        Discover the potential costs of developing an on-demand bike
                                                        taxi app like Rapido with IMG Global Infotech. Get insights into
                                                        app development expenses, features, and more for your unique
                                                        business vision.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Oct
                                                            25, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-to-develop-an-app-like-onlyfans-app-cost-features.webp"
                                                                class="img-fluid"
                                                                alt="How To Develop An App Like OnlyFans? | App Cost & Features"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How To Develop An App Like OnlyFans? | App Cost & Features
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        If you find yourself fascinated by the triumph of OnlyFans and
                                                        planning for OnlyFans app development, this blog is for you.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Oct
                                                            16, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimage2023-android-app-development-trends-market-insights-and-future-projections.webp"
                                                                class="img-fluid"
                                                                alt="2023 Android App Development Trends: Market Insights And Future Projections"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            2023 Android App Development Trends: Market Insights And
                                                            Future Projections</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        In this blog, we will explore the highlights of the Android app
                                                        development market in 2023 and delve into the prospects as
                                                        discussed by the Android app development company professionals.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Oct
                                                            13, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-to-develop-a-doctor-appointment-app-like-practo-651fe815a3fbd.webp"
                                                                class="img-fluid"
                                                                alt="How To Develop A Doctor Appointment App Like Practo?"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How To Develop A Doctor Appointment App Like Practo?</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        In this blog, we'll delve into the essential aspects of
                                                        developing a doctor appointment booking app, from
                                                        conceptualization to implementation.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Oct
                                                            04, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                class="img-fluid"
                                                                alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            Growing Your Online Business With Fantasy Sports App
                                                            Development</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        Fantasy sports app development is a mobile application through
                                                        which Users can establish and manage virtual teams of real-life
                                                        athletes with internet platforms.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Sep
                                                            21, 2023</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageA-Comprehensive-Guide-to-Developing-Multi-Sport-Fantasy-Apps.webp"
                                                                class="img-fluid"
                                                                alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            A Comprehensive Guide To Developing Multi-Sport Fantasy Apps
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        Developing a multi-sport fantasy app is a complex process, but
                                                        it can be rewarding. In this guide, we will discuss the key
                                                        steps in developing a successful multi-sport fantasy app, as the
                                                        fantasy app development company suggested.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Sep
                                                            04, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageThe-Ultimate-Guide-to-Fantasy-Cricket-App-Development.webp"
                                                                class="img-fluid"
                                                                alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            The Ultimate Guide To Fantasy Cricket App Development</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        How to develop a fantasy cricket app? This guide can be your
                                                        savior. So, let’s dive into the step-by-step process of fantasy
                                                        cricket app development without further delay.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Aug
                                                            25, 2023</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-to-Create-a-Fantasy-Sports-Website-6-Easy-Steps.jpg"
                                                                class="img-fluid"
                                                                alt="Top Custom Software Development Companies"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark  fw-m pt-3 lineclamp2">
                                                            How To Create A Fantasy Sports Website - 6 Easy Steps</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        In this blog, the professionals of a fantasy cricket website
                                                        development company in India will unveil the secrets to creating
                                                        a fantasy sports website.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Aug
                                                            18, 2023</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageList-Of-Top-10-Best-Fantasy-Cricket-Apps-in-India-2023.jpg"
                                                                class="img-fluid"
                                                                alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            List Of Top 10 Best Fantasy Cricket Apps In India 2023</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        The top fantasy cricket app list includes Dream11, MyTeam11,
                                                        ESPN, MyCircle11, and MPL. Each fantasy app has unique features,
                                                        user experience, and contest offerings.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Aug
                                                            10, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageTop-Fantasy-Sports-App-Development-Companies-in-India.jpg"
                                                                class="img-fluid"
                                                                alt="How To Develop Hotel Booking App: Cost, Features (2023)"
                                                                width="302" height="170">
                                                        </a>

                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            Top Fantasy Sports App Development Companies In India [2023]
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        This comprehensive guide highlights the list of the top fantasy
                                                        sports app development companies in India, providing
                                                        cutting-edge solutions for immersive sports gaming experiences.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Jul
                                                            13, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup">
                                                            <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-To-Develop-Fantasy-Cricket-App-for-Asia-Cup-2023-A-Complete-Guide.jpg"
                                                                class="img-fluid"
                                                                alt="How To Develop Hotel Booking App: Cost, Features (2023)"
                                                                width="302" height="170">
                                                        </a>

                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How To Develop Fantasy Cricket App For Asia Cup 2023 - [A
                                                            Complete Guide]</div>
                                                    </a>
                                                    <div
                                                        class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                        Fantasy app development for cricket requires a significant
                                                        investment of time and resources. It is essential to have a
                                                        comprehensive understanding of the entire development process to
                                                        achieve the desired outcome. Check this blog to know how to
                                                        develop a fantasy cricket app for Asia cup 2023
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span
                                                                    class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn
                                                                    more
                                                                    <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span
                                                            class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Jul
                                                            06, 2023</span>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 text-center align-items-center pb-xl-5 pb-lg-5 pb-md-0 pb-sm-0 pb-sm-0">
            <a href="{{asset('/blog')}}"
                class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-1 py-0 my-3 px-lg-5 py-2 px-3 ms-md-2">
                <span class="d-flex align-items-center"><span>View all Blog </span><i
                        class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
            </a>
        </div>
    </div>
</div>













@endsection
@push('scripts')
<ul style="display:none;" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
    <li itemprop="name"><a itemprop="url"
            href="https://www.imgglobalinfotech.com/fantasy-sports-app-development.php">Fantasy Sports App
            Development</a></li>
    <li itemprop="name"><a itemprop="url"
            href="https://www.imgglobalinfotech.com/fantasy-cricket-app-development.php">Fantasy Cricket App
            Development</a></li>
    <li itemprop="name"><a itemprop="url"
            href="https://www.imgglobalinfotech.com/fantasy-football-app-development.php">Fantasy Football App
            Development</a></li>
    <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/mobile-app-development.php">Mobile App
            Development</a></li>
    <li itemprop="name"><a itemprop="url"
            href="https://www.imgglobalinfotech.com/ecommerce-website-development.php">Ecommerce Development</a></li>
    <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/blog">IMG Blogs</a></li>
    <li itemprop="name"><a itemprop="url" href="https://www.imgglobalinfotech.com/about-us.php">About us</a></li>
</ul>

<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<!-- <script src="{{asset('/public')}}/assets/js/newindex.min.js"></script> -->
<script src="{{asset('/public')}}/assets/js/contact-us.min.js"></script>
<!-- <script src="{{asset('/public')}}/assets/js/index.min.js"></script> -->

<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>

<script>
$('.testiomnialCarousel').owlCarousel({
    loop: true,
    items: 2,
    margin: 15,
    nav: false,
    dots: false,
    autoplay: true,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 2500,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        576: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1.5,
            nav: false,
            dots: false,
        },
        992: {
            items: 2,
            nav: false,
            dots: false,
        },
        1200: {
            items: 1,
            nav: false,
            dots: false,
        },
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});





var el = document.getElementById('phone');
var input = document.querySelector("#phone");
if (el != null) {
    window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ['in', 'us'],
        // utilsScript: "assets/vendor/intl-tel-input/js/utils.js",
    });
}



$('.awards-silde').owlCarousel({
    loop: true,
    items: 3,
    margin: 0,
    stagePadding: 0,
    padding: 0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 9000,
    autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight: true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
            items: 2,
        },
        600: {
            nav: false,
            dots: false,
            items: 2,
        },
        1000: {
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.casestudy').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    stagePadding: 0,
    padding: 0,
    // animateOut: 'fadeOut',
    nav: false,
    dots: false,
    autoplay: true,
    center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 9000,
    autoplayHoverPause: true,
    smartSpeed: 250,
    autoHeight: true,
    responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
        },
        600: {
            nav: false,
            dots: false,
        },
        1000: {
            nav: false,
            dots: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


$('.blog_slider-main').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    autoplay: false,
    left: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    stagePadding: 0,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: false,
            nav: false,
        },
        500: {
            items: 1,
            dots: false,
            nav: false,
        },
        600: {
            dots: false,
            nav: false,
        },
        992: {
            dots: false,
            nav: false,
            items: 2,
        },
        1000: {
            dots: false,
            nav: false,
            items: 3,
        },
        1299: {
            dots: false,
            nav: false,
            items: 3,
        },
        1499: {
            items: 3,
            dots: false,
            nav: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});


// if (window.innerWidth > 991) {

// };

$('.home_page_slider').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    autoplay: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 5000,
    stagePadding: 0,
    smartSpeed: 1200,
    responsiveClass: true,
    animateOut: 'flipOutX',
    animateIn: 'fadeIn',
    responsive: {
        0: {
            items: 1,
            dots: false,
            nav: false,
        },
        500: {
            items: 1,
            dots: false,
            nav: false,
        },
        600: {
            items: 1,
            dots: false,
            nav: false,
        },
        992: {
            items: 1,
            dots: false,
            nav: false,
        },
        1000: {
            items: 1,
            dots: false,
            nav: false,
        },
        1299: {
            items: 1,
            dots: false,
            nav: false,
        },
        1499: {
            items: 1,
            dots: false,
            nav: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});
</script>



@endpush