@extends('main')
@push('meta')
    <!--  Title -->
    <title>Mobile Application Development Company | IMG Global</title>
    <!-- Required meta tags -->
    <meta name="title" content="Mobile Application Development Company | IMG Global" />
    <meta name="description"
        content="IMG Global Infotech is a top-rated mobile application development company that provides mobile application development services across the globe." />
    <meta name="keywords"
        content="app development, mobile app development, mobile application development company, mobile app development services, custom mobile app development, app development agency, android application development company, android development services, android app development company in India, android application development services, android app development in India, best android app development company, android mobile app development company, top android app development company, hire android app developer, hire Android Developers, ios app development in India, iphone app development company, iphone application development company, iphone application development, iphone app development services, iphone app development, ios application development services, ios app development company, ios application development, ios mobile app development, ios app development, ios app development company in India, custom ios app development company" />

    <!-- Twitter Meta -->
    <meta name="twitter:title" content="Mobile Application Development Company | IMG Global">
    <meta name="twitter:description"
        content="IMG Global Infotech is a top-rated mobile application development company that provides mobile application development services across the globe.">
    <meta name="twitter:image" content="{{ GETFOLDERPATH() }}/Mobile-App-Development-Services.webp">

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{ asset('/') }}mobile-app-development.php">
    <meta property="og:title" content="Mobile Application Development Company | IMG Global">
    <meta property="og:description"
        content="IMG Global Infotech is a top-rated mobile application development company that provides mobile application development services across the globe.">
    <meta property="og:image" content="{{ GETFOLDERPATH() }}/Mobile-App-Development-Services.webp">
    <meta property="og:image:secure_url" content="{{ GETFOLDERPATH() }}/Mobile-App-Development-Services.webp">



    <meta name="classification"
        content="app development, mobile app development, mobile application development company, mobile app development services, custom mobile app development, app development agency, android application development company, android development services, android app development company in India, android application development services, android app development in India, best android app development company, android mobile app development company, top android app development company, hire android app developer, hire Android Developers, ios app development in India, iphone app development company, iphone application development company, iphone application development, iphone app development services, iphone app development, ios application development services, ios app development company, ios application development, ios mobile app development, ios app development, ios app development company in India, custom ios app development company" />
    <link rel="canonical" href="{{ asset('/') }}mobile-app-development.php" />
    <meta name="robots" content="index, follow" />
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('/public') }}/assets/plugins/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/public') }}/assets/plugins/do-not-edit/css/mobile-app-development.min.css">
@endpush
@section('content')

    {{-- Hero Section --}}
@section('hero_hiddenHeading')
    Mobile App Development Company
@endsection('hero_hiddenHeading')
@section('hero_heading')
    <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Mobile App <b> Development Company</b></span>
@endsection('hero_heading')
@section('hero_tagline')
    Offering custom-fit mobile app development services to build high-performing mobility solutions suiting your business
    requirements.
@endsection('hero_tagline')
@section('hero_btn')
    <div class="col-12 pt-3 text-lg-start text-center">
        <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-14 fw-m my-3 py-2 px-4">
            <span class="d-block"><span>+91 -9694097245</span> <i
                    class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
        </a>
        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal"
            class="btn btn-theme1 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">
            <span class="d-block"><span>Start A Project</span><i
                    class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
        </a>
    </div>
@endsection('hero_btn')
@section('hero_img')
    <div class="div leftside">
        <img class="w-100 position-relative" src="{{ GETFOLDERPATH() }}/mobile-app-development-company.webp" width="100"
            height="auto" alt="Mobile App Development Services">
    </div>
@endsection('hero_img')
{{-- @include('inner-page-section.hero.index') --}}



<!-- top banner section -->
<div class="container-fluid overflow-hidden  bnner_head position-relative">
    <div class="container py-5 position-relative zi-2">
        <div class="row ">
            <div class="col-12">
                <div class="row pt-4 align-items-center justify-content-center">
                    <div class="col-lg-8 col-12 py-lg-5 pt-md-5 pb-md-4 py-4 order-lg-0 order-md-1 order-1">
                        <div class="row pt-3 text-lg-center text-md-center text-center position-relative">
                            <div class="col-12">
                                <div class="row mx-0 pb-2">
                                    <h1 class="d-none invisible">Mobile App Development Company</h1>
                                    <div class="col-12  fs-md-14 fs-12  text-white">
                                        <h1 class="lh-1"><span class="fs-xl-50 fs-lg-35 fs-md-30 fs-sm-25 fs-20 fw-bolder">Mobile
                                                App Development Company </span></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 fw-l fs-lg-18 fs-md-16 fs-sm-15 fs-14 text-white mt-3 mb-lg-3">Offering
                                custom-fit mobile app development services to build high-performing mobility solutions
                                suiting your business requirements.</div>
                            <div class="col-12 pt-3">
                                <div class="col-12 pt-xl-2 pt-xl-2 pt-md-3 pt-3 text-lg-center text-center">
                                    <!-- <a href="tel:9694097245" class="btn btn-theme3 text-white fs-14 fw-m my-3 py-2 px-4">
                                <span class="d-block"><span>+91 -9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
                             </a> -->
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btn btn-theme3 text-white fs-md-16 fs-14 fw-m my-3 py-md-3 py-2 px-md-5 px-4 ms-md-2">
                                        <span class="d-block"><span>Start Your Fantasy App Now</span><i
                                                class="imgr ms-2 img-angle-right position-relative bottom-n1px"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 pe-lg-5 top_banner-left-part">
                      <div class="row justify-content-lg-end justify-content-md-center justify-content-center">
                          <div class="col-lg-8 col-md-5 col-7 position-relative">
                              @yield('hero_img')
                          </div>
                      </div>
                  </div> -->
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Customized Mobile App Development Company in India  -->
<div class="container-fluid overflow-hidden best-app-development bg-white position-relative">
    <div class="container pt-lg-5 pt-md-4 py-4 position-relative zi-2 py-5">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-lg-5 top_banner-left-part">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-5 col-7 position-relative leftside">
                                <img src="{{ asset('/public') }}/assets/img/hero-section/frame12.webp" class="w-100"
                                    alt="Leading Mobile Application Development Company" width="100" height="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mx-0 pb-2 pt-lg-0 pt-3">
                                    <h2 class="d-none invisible">Mobile App Development Company</h2>
                                    <div class="col-12 heading fs-md-14 fs-12 left text-lg-start text-md-center"><span
                                            class="fs-xl-25 fs-lg-20 fs-md-18 fs-16">Leading Mobile Application <br><b class="fs-xl-38 fs-lg-27 fs-md-24 fs-20">
                                                Development Company </b></span></div>
                                </div>
                            </div>
                            <div
                                class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-16 fs-16 text-muted text-lg-start text-center mt-3">
                                Whether you are looking for native mobile or cross-platform apps, our team of highly
                                skilled mobile app developers will help you transform your innovative app idea into a
                                feature-packed, top-performing mobile app. We aim for a seamless user experience and
                                have successfully delivered 250+ custom-mobile app development projects over time.</div>
                            <div
                                class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-16 fs-16 text-muted text-lg-start text-center mt-3">
                                Being a leading mobile app development company, we provide a complete range of mobile
                                app development solutions to increase your customer engagement, increase sales, and
                                boost your business growth. We adjust to our client’s needs and develop engaging apps
                                meeting their expectations.</div>

                        </div>
                        <div class="row pb-3 pt-3 ">
                         <div class="col-lg-4 col-md-4 col-12 mb-3 pd-0">     
                              <div class="position-relative border-1 border-end rounded p-1 why-choose">
                                 <div class="row align-items-center pt-2 pb-2">
                                    <div class="col-12 text-muted fs-xl-40 fs-lg-30 fs-md-20 fs-16 mb-0 fw-m">250+ <span class="d-block fw-bold fs-xl-15 fs-lg-14 fs-13">Apps Developed</span></div>
                                 </div>
                              </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 mb-3 pd-0">     
                              <div class="position-relative border-1 border-end rounded p-1 why-choose">
                                 <div class="row align-items-center pt-2 pb-2">
                                    <div class="col-12 text-muted fs-xl-40 fs-lg-30 fs-md-20 fs-16 mb-0 fw-m">100+ <span class="d-block fw-bold fs-xl-15 fs-lg-14 fs-13">Talented Squad</span></div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-4 col-12 mb-3 pd-0">     
                              <div class="position-relative border-1 rounded p-1 why-choose">
                                 <div class="row align-items-center pt-2 pb-2">
                                    <div class="col-12 text-muted fs-xl-40 fs-lg-30 fs-md-20 fs-16 mb-0 fw-m">8+ <span class="d-block fw-bold fs-xl-15 fs-lg-14 fs-13">Development Experience </span></div>
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





<!-- Our Mobile App Development Services  -->
<div class="container-fluid overflow-hidden mobile-aap-section position-relative py-3">
    <span id="maindiv">
        <div class="container py-lg-5 py-md-4 position-relative zi-2">
            <div class="row">
                <div class="col-12">
                    <div class="row mx-0 pb-4 pt-lg-0 pt-4">
                        <h2 class="d-none invisible">Our Mobile App Development Services</h2>
                        <div class="col-12 heading left fs-md-14 fs-12"><span
                                class="fs-xl-32 fs-lg-28 fs-md-24 fs-20 text-white">Our Mobile App Development <b> Services
                                </b></span></div>
                        <div
                            class="col-md-12 col-12 mt-2 fw-l fs-lg-16 fs-md-16 fs-sm-17 fs-16 pt-3 ps-0 mx-auto text-white">
                            Our mobile app developers hold years of experience in developing solutions that attain
                            market requirements, strengthen clients' brand identities, and motivate business expansion.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                  <div class="row py-5 gy-4">
                     <div class="col-lg-4 align-self-center">
                        <div class="row gap-lg-4 gap-2">
                           <div class="col-12">
                              <div class="row">
                                 <div class="col-auto">
                                    <img src="{{GETFOLDERPATH()}}/native_app_development.png" alt="" class="w-100px h-100px">
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 fs-25 fw-bold text-white">Native App Development</div>
                           <div class="col-12 text-white fs-20">Transforming your ideas into Intuitive Native app development</div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="row gap-2 h-100 bg-white shadow mx-0 rounded py-4 px-3 serviceCard">
                           <div class="col-12">
                              <div class="row">
                                 <div class="col-auto">
                                    <img src="{{GETFOLDERPATH()}}/android_app_development-1.png" alt="" class="w-100px h-100px">
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 fs-20 fw-bold">Android App Development</div>
                           <div class="col-12 fs-14">Using in-demand and advanced technologies along with our industry expertise, our team of full-stack app developers builds successful Android apps that may help you engage more customers and drive increased ROI.</div>
                           <div class="col-12 btnDiv">
                              <a href="javascript:;" class="btn btn-theme3 rounded-0 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">Click Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="row gap-2 h-100 bg-white shadow mx-0 rounded py-4 px-3 serviceCard">
                           <div class="col-12">
                              <div class="row">
                                 <div class="col-auto">
                                    <img src="{{GETFOLDERPATH()}}/android_app_development.png" alt="" class="w-100px h-100px">
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 fs-20 fw-bold">iOS App Development</div>
                           <div class="col-12 fs-14">Our team of professionals has been offering iOS app development services to clients worldwide, building stable, fully-fledged, and scalable apps, and attained a wealth of proficiency across varied industries.</div>
                           <div class="col-12 btnDiv">
                              <a href="javascript:;" class="btn btn-theme3 rounded-0 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">Click Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row py-5 gy-4">
                     <div class="col-lg-4 align-self-center order-lg-last">
                        <div class="row gap-lg-4 gap-2">
                           <div class="col-12">
                              <div class="row">
                                 <div class="col-auto">
                                    <img src="{{GETFOLDERPATH()}}/cross-platform_app_development.png" alt="" class="w-100px h-100px">
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 fs-25 fw-bold text-white">Cross-platform App Development</div>
                           <div class="col-12 text-white fs-20">Elevating your brand with cross-platform app development</div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="row gap-2 h-100 bg-white shadow mx-0 rounded py-4 px-3 serviceCard">
                           <div class="col-12">
                              <div class="row">
                                 <div class="col-auto">
                                    <img src="{{GETFOLDERPATH()}}/react_native_app_development.png" alt="" class="w-100px h-100px">
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 fs-20 fw-bold">React Native App Development</div>
                           <div class="col-12 fs-14">IMG Global Infotech is skilled at developing secure, top-performing, intuitive, and secure native apps for iOS and Android platforms. We assist our clients in boosting their conversion rates and increasing customer loyalty.</div>
                           <div class="col-12">
                              <a href="javascript:;" class="btn btn-theme3 rounded-0 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">Click Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="row gap-2 h-100 bg-white shadow mx-0 rounded py-4 px-3 serviceCard">
                           <div class="col-12">
                              <div class="row">
                                 <div class="col-auto">
                                    <img src="{{GETFOLDERPATH()}}/flutter_app_development.png" alt="" class="w-100px h-100px">
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 fs-20 fw-bold">Flutter App Development</div>
                           <div class="col-12 fs-14">IMG Global Infotech is a leading mobile and web app development company that delivers customized app development services using Google's innovative framework, Flutter. We help you design, build, test, and roll out full-fledged Flutter apps.</div>
                           <div class="col-12">
                              <a href="javascript:;" class="btn btn-theme3 rounded-0 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">Click Now</a>
                           </div>
                        </div>
                     </div>
                  </div>

                </div>


            </div>
        </div>
    </span>
</div>




<div
    class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-2 py-py-5 overflow-hidden position-relative comments ">
    <div class="container position-relative zi-2">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div
                            class="row pt-3 text-lg-start text-md-center text-center position-relative align-items-start">
                            <div class="col-md">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row pb-2">
                                            <h2 class="d-none invisible">Build. Launch. Grow.</h2>
                                            <div
                                                class="col-12 headingv2 left text-black text-lg-start text-md-center text-center">
                                                <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 fw-m">Build. Launch.
                                                    Grow.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 text-muted mt-0 mb-lg-1">
                                        IMG Global crafts award-winning digital experiences driven by strategy, design
                                        and technology. </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="row">
                                    <div class="col-12 pb-xl-3 pb-lg-3 pb-md-2 pb-sm-2 pb-3">
                                        <a href="#casestudy-scroll"
                                            class="fw-m text-decoration-none d-grid text-capitalize text-dark fs-xl-32 fs-lg-32 fs-md-23 fs-22 ms-md-2">
                                            <span class="d-block fw-m "><span
                                                    class="d-flex justify-content-xl-start justify-content-center">See
                                                    Our Work
                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrowDown--black.svg"
                                                        width="19" height="48"
                                                        class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                                        alt=""></span></span>
                                        </a>
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


<div class="container-fluid py-xxl-3 py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2 case-study-section overflow-hidden position-relative owl-carousel caseStudy px-0"
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
                            <a href="{{ asset('/case-study/bobilive.php') }}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4">
                                <span class="d-block fw-m"><span
                                        class="view_case_btn d-flex text-nowrap fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 py-md-3 py-1 px-md-4 px-3">View
                                        case study
                                        <img src="{{ asset('/public') }}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27"
                                            class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  order-1">
                        <img src="{{ asset('/public') }}/assets/img/hero-section/frame12.webp" width="509"
                            height="509" class="w-xl-auto h-100 mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

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
                            <a href="{{ asset('/case-study/hozzo.php') }}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4">
                                <span class="d-block fw-m"><span class="view_case_btn d-flex text-nowrap">View case
                                        study
                                        <img src="{{ asset('/public') }}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27"
                                            class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center mob_img  order-1">
                        <img src="{{ asset('/public') }}/assets/img/hero-section/hozzo.webp" height="509"
                            width="509" class="w-xl-auto h-100 mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <a href="{{ asset('/case-study/myfab11.php') }}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4">
                                <span class="d-block fw-m"><span class="view_case_btn d-flex text-nowrap">View case
                                        study
                                        <img src="{{ asset('/public') }}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27"
                                            class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center  mob_img order-1">
                        <img src="{{ asset('/public') }}/assets/img/hero-section/fab11.webp" height="509"
                            width="509" class="w-xl-auto h-100 mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
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
                            <a href="{{ asset('/case-study/fabindia.php') }}"
                                class="fw-m text-decoration-none text-capitalize text-white fs-xxl-18 fs-xl-18 fs-lg-18 fs-md-18 fs-sm-15 fs-15 ms-md-2 d-inline-flex mt-md-5 mt-4">
                                <span class="d-block fw-m"><span class="view_case_btn d-flex text-nowrap">View case
                                        study
                                        <img src="{{ asset('/public') }}/assets/img/hero-section/arrowRight--white.svg"
                                            width="16" height="27"
                                            class=" pt-0 ms-2 arrow h-auto w-md-20px w-15px"
                                            alt=""></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                <div class="row h-100  order-1">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-2 text-center mob_img  order-1">
                        <img src="{{ asset('/public') }}/assets/img/hero-section/fabindia.webp" height="509"
                            width="509" class="w-xl-auto h-100 mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Mobile App Development Workflow  -->

<div class="container-fluid why-love-sec position-relative overflow-hidden">
    <div class="shapes-circle d-xl-block d-lg-block d-none"></div>
    <div class="container position-relative zi-1 py-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12">
                <div class="row d-flex align-items-center justify-content-center mx-0 pb-3">
                    <h2 class="d-none invisible">Mobile App Development Workflow</h2>
                    <div class="col-12 heading fs-md-14 fs-12 center text-dark"><span
                            class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Mobile App <b> Development Workflow </b></span>
                    </div>
                    <div class="col-lg-10 col-md-11 col-12">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-12 fs-md-17 fs-sm-15 fs-14 text-dark py-4 text-md-center text-center fw-l">
                                We believe that our employees are our biggest strength, we can not achieve our goals if
                                your team is not on board. That is why we put our team first in everything.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-center justify-content-center mt-md-4">
            <div class="col-xl-11 col-lg-11 col-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 position-relative">
                        <div class="love-working-boxs position-relative leftWalaPart">
                            {{-- <div class="arrow-left"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons">
                                    <span><img class="w-100 hover-img0"
                                            src="{{ GETFOLDERPATH() }}/requirementdocumentation.webp"
                                            alt="Requirement Documentation"></span>
                                    <span><img class="w-100 hover-img1"
                                            src="{{ GETFOLDERPATH() }}/requirementdocumentation-white.webp"
                                            alt="Requirement Documentation"></span>
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">01</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps3">
                                    <h4 class="d-none invisible">Requirement Documentation</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize flow-head">
                                        Requirement Documentation</div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Requirements gathering and analysis</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Outline project scope, user needs, features, and functionalities</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Recommend suitable and latest solutions.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12 overflow2 position-relative ">
                        <div class="love-working-boxs position-relative rightWalaPart">
                            {{-- <div class="arrow-right"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons">
                                    <span><img class="w-100 hover-img0" src="{{ GETFOLDERPATH() }}/wireframing.webp"
                                            alt="Wireframing"></span>
                                    <span><img class="w-100 hover-img2"
                                            src="{{ GETFOLDERPATH() }}/wireframing-white.webp"
                                            alt="Wireframing"></span>
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">02</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps-3">
                                    <h4 class="d-none invisible">Wireframing</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize"> Wireframing
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Create a visual representation of the app's layout and user interface.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Include app flow and navigation.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-12 mt-40">
                        <div class="love-working-boxs position-relative leftWalaPart">
                            {{-- <div class="arrow-left"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons">
                                    <span><img class="w-100 hover-img0"
                                            src="{{ GETFOLDERPATH() }}/resource-planning.webp"
                                            alt="Eesource Planning"></span>
                                    <span><img class="w-100 hover-img3"
                                            src="{{ GETFOLDERPATH() }}/resource-planning-white.webp"
                                            alt="Resource Planning "></span>
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">03</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps-3">
                                    <h4 class="d-none invisible">Resource Planning</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize"> Resource Planning
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Identify resources required for the project, such as hardware and software.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Create a plan for finding resources and managing them well.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-12 overflow3">
                        <div class="love-working-boxs position-relative rightWalaPart">
                            {{-- <div class="arrow-right"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons">
                                    <span><img class="w-100 hover-img0"
                                            src="{{ GETFOLDERPATH() }}/design-and-prototyping.webp"
                                            alt="Design and Prototyping"></span>
                                    <span><img class="w-100 hover-img4"
                                            src="{{ GETFOLDERPATH() }}/design-and-prototyping-white.webp"
                                            alt="Design and Prototyping"></span>
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">04</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps-3">
                                    <h4 class="d-none invisible">Design And Prototyping</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize"> Design And
                                        Prototyping </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Craft a design for the mobile app, including UI, color schemes, etc.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Create a functional prototype of the app using advanced tools.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Share prototype for approval before development.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12 mt-40">
                        <div class="love-working-boxs position-relative leftWalaPart">
                            {{-- <div class="arrow-left"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons ">
                                    <span><img class="w-100 hover-img0"
                                            src="{{ GETFOLDERPATH() }}/databace-architecture-blue.webp"
                                            alt="Database Architecture"></span>
                                    <span><img class="w-100 hover-img5"
                                            src="{{ GETFOLDERPATH() }}/databace-architecture-white.webp"
                                            alt="Database Architecture "></span>
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">05</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps-3 py-4 py-lg-4 py-md-3 py-3">
                                    <h4 class="d-none invisible">Database Architecture</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize">Database
                                        Architecture </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Design and set up a database for storing app data.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-12 overflow4">
                        <div class="love-working-boxs position-relative rightWalaPart">
                            {{-- <div class="arrow-right"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons ">
                                    <span><img class="w-100 hover-img0" src="{{ GETFOLDERPATH() }}/development.webp"
                                            alt="Development"></span>
                                    <span><img class="w-100 hover-img6"
                                            src="{{ GETFOLDERPATH() }}/development-white.webp"
                                            alt="Development "></span>
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">06</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps-3">
                                    <h4 class="d-none invisible">Development</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize"> Development
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Write code for the app.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Implement app features and functionalities.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Tools and technology implementation to boost functionality.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Share ahead to receive feedback.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12 mt-40">
                        <div class="love-working-boxs position-relative leftWalaPart">
                            {{-- <div class="arrow-left"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons ">
                                    <img class="w-lg-75 w-md-75 w-sm-30 w-30 hover-img0"
                                        src="{{ GETFOLDERPATH() }}/uat.webp" alt="Uat">
                                    <img class="w-lg-75 w-md-75 w-sm-30 w-30 hover-img6"
                                        src="{{ GETFOLDERPATH() }}/uat-white.webp" alt="Uat">
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">07</div>
                                <div class="col-md-9 col-12 position-relative py-lg-2 py-md-2 py-0 ps-md-0 ps-3">
                                    <h4 class="d-none invisible">UAT</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize"> UAT </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Conduct app testing to ensure it meets the needs and performs as expected.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Address and resolve issues (if any).</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Move ahead with final approval from clients</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-12 overflow4">
                        <div class="love-working-boxs position-relative rightWalaPart">
                            {{-- <div class="arrow-right"></div> --}}
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons">
                                    <img class="w-lg-75 w-md-75 w-sm-30 w-30 hover-img0"
                                        src="{{ GETFOLDERPATH() }}/deployment-and-live-blue.webp"
                                        alt="Deployment and Live">
                                    <img class="w-lg-75 w-md-75 w-sm-30 w-30 hover-img6"
                                        src="{{ GETFOLDERPATH() }}/deployment-live.webp" alt="Deployment and Live">
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">08</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps-3">
                                    <h4 class="d-none invisible">Deployment And Live</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize">Deployment And
                                        Live </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Deploy the app to an app store or distribution platform.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Make the app available to users.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12 mt-40">
                        <div class="love-working-boxs position-relative leftWalaPart ">
                            <div class="row love-working py-4">
                                <div class="col-md-3 col-12 love-icons">
                                    <span><img class="w-100 hover-img0"
                                            src="{{ GETFOLDERPATH() }}/maintenance-and-updates.webp"
                                            alt="Maintenance and Updates"></span>
                                    <span><img class="w-100 hover-img7"
                                            src="{{ GETFOLDERPATH() }}/maintenance-and-updateswhite.webp"
                                            alt="Maintenance and Updates"></span>
                                </div>
                                <div class="col-auto count position-absolute right-10px top-0">09</div>
                                <div class="col-md-9 col-12 position-relative ps-md-0 ps-3">
                                    <h4 class="d-none invisible"> Maintenance And Updates</h4>
                                    <div class="col-12 fw-m fs-lg-20 fs-md-20 fs-20 text-capitalize"> Maintenance And
                                        Updates </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Maintain and update the app.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Provide ongoing support with regular checks and inspections.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"> <i
                                                class="imgd img-long-arrow-right position-relative me-2 text-muted"></i>
                                        </div>
                                        <div
                                            class="col-11 fw-l fs-lg-15 fs-md-15 fs-15 text-muted justify ps-lg-0 ps-md-0 ps-2">
                                            Ensure app compatibility with operating systems and new devices.</div>
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


<!-- hire App Developers or Developer section -->
<div class="container-fluid overflow-hidden hire-developer-section position-relative py-5">
    <div class="container py-lg-4 py-md-0 py-0 position-relative zi-2">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12 ps-lg-5 pe-lg-5 mt-md-0 mt-0">
                        <div class="col-12 fs-md-14 fs-12 pb-3 text-center">
                            <h3 class="d-none invisible">Looking To Hire Mobile App Developers</h3>
                            <span class="fs-xl-32 fs-lg-32 fs-md-18 fs-20 fw-m text-white"> Looking To Hire Mobile App
                                Developers</span>
                        </div>
                        <div class="fw-500 fs-lg-17 fs-md-17 fs-15 mb-0 text-white text-center">Feel Free to Get In Touch With Us.
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="col-12 pt-1 text-center">
                            <a href="tel:+91-9694097245"
                                class="btn btn-theme3 fs-lg-14 fs-md-10 fs-13 fw-m hero_read_more_btn py-2 px-lg-4 px-md-3 px-3"
                                style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="3"
                                data-tilt-speed="400" data-tilt-perspective="2500">
                                <span class="d-block"><span>let's Get Connect</span> <i
                                        class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Section -->

<div class="container-fluid overflow-hidden bg-white new-portfolio position-relative">
    <div class="container py-md-5 py-4 position-relative ">
        <div class="row">
            <div class="row mx-0 mb-lg-4 mb-md-4 mb-3">
                <h2 class="d-none invisible">Our Recent Projects</h2>
                <div class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Our
                        Recent<b> Projects</b> </span></div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center owl-portfolio-slider owl-carousel mx-0">


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{ asset('/public') }}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{ asset('/public') }}/assets/img/portfolio-section/EcoCosmo-Project.webp"
                        alt="EcoCosmo">
                    <div class="portfolioBoxContent">
                        <h4 class="fs-md-20 fs-15 mb-1 fw-bold text-white">EcoCosmo</h4>
                        <p class="fs-md-16 fs-14 text-white">Tracking App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{ asset('/public') }}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{ asset('/public') }}/assets/img/portfolio-section/myfab11.webp" alt="MyFab11">
                    <div class="portfolioBoxContent">
                        <h4 class="fs-md-20 fs-15 mb-1 fw-bold text-white">MyFab11 App </h4>
                        <p class="fs-md-16 fs-14 text-white">Fantasy Sports App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{ asset('/public') }}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{ asset('/public') }}/assets/img/portfolio-section/Health-app.webp"
                        alt="Health App">
                    <div class="portfolioBoxContent">
                        <h4 class="fs-md-20 fs-15 mb-1 fw-bold text-white">I-KNOW</h4>
                        <p class="fs-md-16 fs-14 text-white">Health App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox ">
                    <img src="{{ asset('/public') }}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{ asset('/public') }}/assets/img/portfolio-section/now-vue.webp" alt="Now Vue">
                    <div class="portfolioBoxContent">
                        <h4 class="fs-md-20 fs-15 mb-1 fw-bold text-white">Now Vue </h4>
                        <p class="fs-md-16 fs-14 text-white">Guest Check In App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 ">
                <div class="portfolioBox">
                    <img src="{{ asset('/public') }}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{ asset('/public') }}/assets/img/portfolio-section/ipay.webp" alt="ipay">
                    <div class="portfolioBoxContent">
                        <h4 class="fs-md-20 fs-15 mb-1 fw-bold text-white">iPay</h4>
                        <p class="fs-md-16 fs-14 text-white">Recharge App</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="portfolioBox">
                    <img src="{{ asset('/public') }}/assets/img/portfolio-section/blank-image.webp"
                        class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                        data-src="{{ asset('/public') }}/assets/img/portfolio-section/destist-online.webp"
                        alt="Destist Online">
                    <div class="portfolioBoxContent">
                        <h4 class="fs-md-20 fs-15 mb-1 fw-bold text-white">Dentist Online</h4>
                        <p class="fs-md-16 fs-14 text-white">Health App</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<!-- why-hire-developers-img -->
<div class="container-fluid overflow-hidden why-hire-developers-img py-xl-5 py-lg-5 py-md-5 py-5 position-relative">
    <div class="container">
        <div class="row align-content-center align-items-center position-relative">
            <div class="col-lg-7 col-md-12">
                <div class="row mx-0 pb-3">
                    <h3 class="d-none invisible">Why Hire Python Developers from IMG Global Infotech?</h3>
                    <div class="col-12 heading fs-md-14 fs-12 left"><span
                            class="fs-xl-33 fs-lg-29 fs-md-24 fs-20 text-dark">Why Hire Python Developers from <br><b>IMG
                                Global Infotech?</b></span></div>
                </div>
                <div class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-mute mb-4">
                    Hiring a python developer from us would be the right choice because it will make your business
                    thrive in on-going market trends. It may benefit for fast project development making sure all
                    quality standards are matched. There are multiple reasons Python is preferable by developers. The
                    python is highly readable and popular language amongst developer community due to numerous libraries
                    easily accessible.
                </div>
                <div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 mb-1">
                            <div class="col-12 col-lg-12 position-relative">
                                <ul class="fw-bold fs-16 text-dark list-unstyled text-capitalize d-inline-flex gap-3 flex-wrap">
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                                src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="8+ Years in Business"></span> --}}
                                                 8+ Years in Business</li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                                src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="Experienced and Talented Coders"></span> --}}
                                                Experienced and Talented
                                        Coders</li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                                src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="Cost-Effective Solutions"></span> --}}
                                                 Cost-Effective Solutions</li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                                src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="Clear Communication"></span> --}}
                                                 Clear Communication</li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                                src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="Transparency Guaranteed"></span> --}}
                                                 Transparency Guaranteed</li>

                                {{-- </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mb-1">
                            <div class="col-12 col-lg-12 position-relative">
                                <ul class="fw-bold fs-16 text-dark list-unstyled text-capitalize "> --}}
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                        src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="100+ In-House Developers"></span> --}}
                                                 100+ In-House Developers</li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                        src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="Flexible Engagement Models"></span> --}}
                                                 Flexible Engagement Models
                                    </li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                        src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="Daily, Weekly, and Monthly Reporting"></span> --}}
                                                 Daily, Weekly, and
                                        Monthly Reporting</li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                        src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="On-Time Efficiency"></span> --}}
                                                 On-Time Efficiency</li>
                                    <li class="fw-bold align-items-start align-items-start d-flex d-inline bg-white px-3 py-2 border border-2 border-light shadow">
                                        {{-- <span
                                        class="pe-2"><img class="w-25px p-1 position-relative"
                                        src="{{ GETFOLDERPATH() }}/icons1.webp"
                                                alt="Data-Driven Algorithms"></span> --}}
                                                 Data-Driven Algorithms</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-12 p-0 leftside">
                <img class="w-100 position-relative" src="{{ GETFOLDERPATH() }}/android-team.webp"
                    alt="android-team">
            </div>
        </div>
    </div>
</div>


<div class="container-fluid overflow-hidden major-industries-section py-4 position-relative industries-sec">
    <div class="container position-relative pt-md-3 pb-md-2">
        <div class="row">
            <div class="row mx-0 mb-lg-4 mb-md-4 mb-3">
                <h3 class="d-none invisible">All Important Industries are Covered</h3>
                <div class="col-12 heading fs-md-14 fs-16"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">All
                        Important Industries are <b>Covered</b> </span></div>
                <div
                    class="col-lg-10 col-md-12 col-12 fw-l fs-lg-18 fs-md-18 fs-sm-16 fs-16 text-mute mt-4 mb-4 mx-auto text-center">
                    When you hire Android application developers from us, you are hiring a team that has developed
                    hundreds of apps for various industry sectors. Our Android app developers have hands-on expertise
                    developing custom Android apps for the industries listed below.
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/fintech-software-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="285" height="220"
                                alt="Banking and Finance"
                                src="{{ asset('/public') }}/assets/img/hero-section/bank-and-finance.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Banking and Finance </figcaption>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/fantasy-sports-app-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="383" height="220" alt="Fantasy Sports"
                                src="{{ asset('/public') }}/assets/img/hero-section/fantasy-sports.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Fantasy Sports </figcaption>
                    </a>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="187" height="220" alt="Healthcare"
                                src="{{ asset('/public') }}/assets/img/hero-section/healthcare.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Healthcare </figcaption>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/edtech-software-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="285" height="220" alt="EdTech Solution"
                                src="{{ asset('/public') }}/assets/img/hero-section/edTech-solution.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> EdTech Solution </figcaption>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="285" height="220"
                                alt="Travel and Tourism"
                                src="{{ asset('/public') }}/assets/img/hero-section/travel-and-tourism.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Travel and Tourism </figcaption>
                    </a>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/media-and-entertainment-app-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="580" height="220"
                                alt="Media and Entertainment"
                                src="{{ asset('/public') }}/assets/img/hero-section/media-and-entertainment.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Media and Entertainment </figcaption>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="285" height="220"
                                src="{{ asset('/public') }}/assets/img/hero-section/retail-and-ecommerce-app.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Retail and Ecommerce App </figcaption>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/logistics-software-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="285" height="220"
                                alt="Logistics Services App"
                                src="{{ asset('/public') }}/assets/img/hero-section/logistics-services-app.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Logistics Services App </figcaption>
                    </a>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/social-media-app-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="187" height="220" alt="Social App"
                                src="{{ asset('/public') }}/assets/img/hero-section/social-app.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Social App </figcaption>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/real-estate-app-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="384" height="220" alt="Real Estate"
                                src="{{ asset('/public') }}/assets/img/hero-section/real-estate.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Real Estate </figcaption>
                    </a>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 col">
                    <a class="lazyloaded" href="{{asset('/event-app-development.php')}}" target="_blank">
                        <figure class="lazyloaded">
                            <img class="ls-is-cached lazyloaded" width="285" height="220"
                                alt="Event management"
                                src="{{ asset('/public') }}/assets/img/hero-section/on-demand.webp" />
                        </figure>
                        <figcaption class="lazyloaded"> Event management </figcaption>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- faq section -->
<div class="container-fluid overflow-hidden bg-white faq_section position-relative py-5">
    <div class="container position-relative zi-2 py-lg-4">
        <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Frequently Asked Questions</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">
                    Frequently Asked <b>Questions </b></span></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mb-4 position-relative zi-2">
                        <div class="accordion-header" id="headingOne">
                            <button
                                class="accordion-button fw-m fs-lg-15 fs-md-13 fs-13 fs-lg-14 fs-md-13 fs-13"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                What is the Difference Between Cross-Platform and Native App Development ?
                            </button>
                        </div>
                        <div id="collapseOne" class="position-relative accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-dark fs-14">
                                Cross-platform app development refers to development that runs on various platforms,
                                like iOS and Android. It's built using a single codebase that can be used across various
                                platforms, despite having to write codes separately for every platform. Native app
                                development refers to app development that is specifically built to run on a single
                                platform, like Android or iOS. Such apps are written in specific programming languages
                                and frameworks for that particular platform, like Java or Kotlin for Android.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-4 position-relative zi-2">
                        <div class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button fw-m fs-lg-15 fs-md-13 fs-13 fs-lg-14 fs-md-13 fs-13 collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                What are the prerequisites for a mobile app development project ?
                            </button>
                        </div>
                        <div id="collapseTwo" class="position-relative accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-dark fs-14">
                                Well, it relies on project needs, but some common prerequisites are:
                                <div class="col-12">

                                    <ul class="points">
                                        <li><b> 1.</b> App purpose and target audience</li>
                                        <li><b> 2.</b> Detailed project plan</li>
                                        <li><b> 3.</b> Dedicated development team</li>
                                        <li><b> 4.</b> Development environment</li>
                                        <li><b> 5.</b> Design assets</li>
                                        <li><b> 6.</b> Project budget</li>
                                        <li><b> 7.</b> Plan for testing and QA </li>
                                        <li><b> 8.</b> Plan for post-launch support and maintenance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4 position-relative zi-2">
                        <div class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button fw-m fs-lg-15 fs-md-13 fs-13 fs-lg-14 fs-md-13 fs-13 collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                How much does it cost to develop a mobile app?
                            </button>
                        </div>
                        <div id="collapseThree" class="position-relative accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-dark fs-14">
                                The cost of mobile app development, on average, may start from $10,000 and go up
                                depending on the app complexity, type of app, number of features you want to include,
                                and more factors.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-4 position-relative zi-2">
                        <div class="accordion-header" id="headingfour">
                            <button
                                class="accordion-button fw-m fs-lg-15 fs-md-13 fs-13 fs-lg-14 fs-md-13 fs-13 collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                aria-expanded="false" aria-controls="collapsefour">
                                How long will it take to build and launch my app ?
                            </button>
                        </div>
                        <div id="collapsefour" class="position-relative accordion-collapse collapse"
                            aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-dark fs-14">
                                <div class="col-12">
                                    <p>The time to develop and launch a mobile app may vary depending on the app's
                                        complexity, development team size, and resources available to the team.

                                        A basic mobile app holding minimal functionality and features may take a few
                                        months, while a complex app may take a year or even more.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-4 position-relative zi-2">
                        <div class="accordion-header" id="headingfive">
                            <button
                                class="accordion-button fw-m fs-lg-15 fs-md-13 fs-13 fs-lg-14 fs-md-13 fs-13 collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                aria-expanded="false" aria-controls="collapsefive">
                                Do you provide ongoing support, maintenance, and updates ?
                            </button>
                        </div>
                        <div id="collapsefive" class="position-relative accordion-collapse collapse"
                            aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                            <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-dark fs-14">
                                <div class="col-12">
                                    <p>Yes, we offer ongoing support, maintenance, and updates post-deployment of your
                                        app. Such a service will help to keep your app up-to-date with the latest
                                        security updates and technology and resolve the issues, if any, on time.
                                    </p>
                                </div>

                            </div>
                        </div>
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
                             <span class="fs-xl-32 fs-lg-32 fs-md-23 fs-22 text-theme3 d-block">Stay Informed Of Latest Innovations and Trends With Our Blogs!</span>
                             Explore our insightful blogs to stay abreast of the latest innovations and trends. Stay informed, stay ahead.  </span></div>
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
                                        <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageTop-FinTech-App-Development-Companies-in-India-2024.webp" class="img-fluid" alt="blogimageTop-FinTech-App-Development-Companies-in-India-2024" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">Top FinTech App Development Companies In India 2024</div>
                                                           </a>
                                                              <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                              This blog aims to shed light on the list of the top fintech mobile app development companies in India, showcasing the top 10 players redefining the financial technology landscape in 2024.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Dec 15, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>
                                        <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimagetop-10-trusted-real-estate-app-development-companies-in-india.webp" class="img-fluid" alt="blogimagetop-10-trusted-real-estate-app-development-companies-in-india" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">Top 10 Trusted Real Estate App Development Companies In India</div>
                                                           </a>
                                                              <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                              This blog will explore India's top 10 trusted real estate app development companies, with IMG Global Infotech securing the coveted No. 1 position.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Dec 11, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>
                                        <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide.webp" class="img-fluid" alt="blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How To Develop A Loan Lending Mobile App? – A Complete Guide</div>
                                                           </a>
                                                              <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                              Developing a loan lending app involves various steps and considerations to ensure functionality, security, and user-friendliness. Here’s a detailed guide on how you can go about building one.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Nov 27, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>
                                        <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimagetop-10-mobile-app-development-companies-in-2024.webp" class="img-fluid" alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">Top 10 Mobile App Development Companies In 2024</div>
                                                           </a>
                                                              <div class="col-12 fs-lg-16 fs-md-16 fs-sm-15 fs-14 mb-3 text-muted py-1 lineclamp3">
                                                              The list of the top 10 mobile app development companies in 2024 listed in this article has demonstrated their expertise, innovation, and commitment to delivering high-quality mobile apps.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex fs-lg-16 fs-md-16 fs-sm-15 fs-14">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m fs-lg-16 fs-md-16 fs-sm-15 fs-14">Nov 16, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                        <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-much-does-it-cost-to-develop-a-real-estate-website-app-like-magicbricks.webp" class="img-fluid" alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How Much Does It Cost To Develop A Real Estate Website & App Like Magicbricks?</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              Are you ready to embark on a digital journey through the captivating world of real estate? Imagine having the power to browse, compare, and purchase properties right from the comfort of your home.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Nov 06, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageHow-Much-Does-It-Cost-to-Develop-an-App-like-MakeMyTrip.webp"
                                                                class="img-fluid"
                                                                alt="How Much Does It Cost To Develop An App Like MakeMyTrip?"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How Much Does It Cost To Develop An App Like MakeMyTrip?
                                                        </div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        Embarking on the path to develop a tours and travel app like
                                                        MakeMyTrip is undoubtedly a challenging task, but only if you
                                                        are not well-versed with the travel booking app development
                                                        cost.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Oct 31, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageHow-Much-Does-It-Cost-to-Develop-An-App-Like-Rapido.webp"
                                                                class="img-fluid"
                                                                alt="How Much Does It Cost To Develop An App Like Rapido?"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How Much Does It Cost To Develop An App Like Rapido?</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        Discover the potential costs of developing an on-demand bike
                                                        taxi app like Rapido with IMG Global Infotech. Get insights into
                                                        app development expenses, features, and more for your unique
                                                        business vision.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Oct 25, 2023</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimagehow-to-develop-an-app-like-onlyfans-app-cost-features.webp"
                                                                class="img-fluid"
                                                                alt="How To Develop An App Like OnlyFans? | App Cost & Features"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How To Develop An App Like OnlyFans? | App Cost & Features
                                                        </div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        If you find yourself fascinated by the triumph of OnlyFans and
                                                        planning for OnlyFans app development, this blog is for you.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Oct 16, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimage2023-android-app-development-trends-market-insights-and-future-projections.webp"
                                                                class="img-fluid"
                                                                alt="2023 Android App Development Trends: Market Insights And Future Projections"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            2023 Android App Development Trends: Market Insights And
                                                            Future Projections</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        In this blog, we will explore the highlights of the Android app
                                                        development market in 2023 and delve into the prospects as
                                                        discussed by the Android app development company professionals.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Oct 13, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimagehow-to-develop-a-doctor-appointment-app-like-practo-651fe815a3fbd.webp"
                                                                class="img-fluid"
                                                                alt="How To Develop A Doctor Appointment App Like Practo?"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            How To Develop A Doctor Appointment App Like Practo?</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        In this blog, we'll delve into the essential aspects of
                                                        developing a doctor appointment booking app, from
                                                        conceptualization to implementation.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Oct 04, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                class="img-fluid"
                                                                alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            Growing Your Online Business With Fantasy Sports App
                                                            Development</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        Fantasy sports app development is a mobile application through
                                                        which Users can establish and manage virtual teams of real-life
                                                        athletes with internet platforms.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Sep 21, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                class="img-fluid"
                                                                alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            Growing Your Online Business With Fantasy Sports App
                                                            Development</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        Fantasy sports app development is a mobile application through
                                                        which Users can establish and manage virtual teams of real-life
                                                        athletes with internet platforms.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Sep 21, 2023</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageA-Comprehensive-Guide-to-Developing-Multi-Sport-Fantasy-Apps.webp"
                                                                class="img-fluid"
                                                                alt="A Comprehensive Guide To Developing Multi-Sport Fantasy Apps"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            A Comprehensive Guide To Developing Multi-Sport Fantasy Apps
                                                        </div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        Developing a multi-sport fantasy app is a complex process, but
                                                        it can be rewarding. In this guide, we will discuss the key
                                                        steps in developing a successful multi-sport fantasy app, as the
                                                        fantasy app development company suggested.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Sep 04, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageThe-Ultimate-Guide-to-Fantasy-Cricket-App-Development.webp"
                                                                class="img-fluid"
                                                                alt="The Ultimate Guide To Fantasy Cricket App Development"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            The Ultimate Guide To Fantasy Cricket App Development</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        How to develop a fantasy cricket app? This guide can be your
                                                        savior. So, let’s dive into the step-by-step process of fantasy
                                                        cricket app development without further delay.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Aug 25, 2023</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageHow-to-Create-a-Fantasy-Sports-Website-6-Easy-Steps.jpg"
                                                                class="img-fluid"
                                                                alt="How To Create A Fantasy Sports Website - 6 Easy Steps"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website"
                                                        class="text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark  fw-m pt-3 lineclamp2">
                                                            How To Create A Fantasy Sports Website - 6 Easy Steps</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        In this blog, the professionals of a fantasy cricket website
                                                        development company in India will unveil the secrets to creating
                                                        a fantasy sports website.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Aug 18, 2023</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageList-Of-Top-10-Best-Fantasy-Cricket-Apps-in-India-2023.jpg"
                                                                class="img-fluid"
                                                                alt="List Of Top 10 Best Fantasy Cricket Apps In India 2023"
                                                                width="302" height="170">
                                                        </a>
                                                    </div>
                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india"
                                                        class = "text-decoration-none">
                                                        <div
                                                            class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">
                                                            List Of Top 10 Best Fantasy Cricket Apps In India 2023</div>
                                                    </a>
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        The top fantasy cricket app list includes Dream11, MyTeam11,
                                                        ESPN, MyCircle11, and MPL. Each fantasy app has unique features,
                                                        user experience, and contest offerings.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Aug 10, 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageTop-Fantasy-Sports-App-Development-Companies-in-India.jpg"
                                                                class="img-fluid"
                                                                alt="Top Fantasy Sports App Development Companies In India [2023]"
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
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                        This comprehensive guide highlights the list of the top fantasy
                                                        sports app development companies in India, providing
                                                        cutting-edge solutions for immersive sports gaming experiences.
                                                    </div>
                                                    <div
                                                        class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                        <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India"
                                                            class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Jul 13, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                <div class="row mx-1 py-3 bg-white">
                                                    <div
                                                        class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                        <a
                                                            href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup">
                                                            <img src="{{ asset('/public') }}/assets/img/blog-section/blogimageHow-To-Develop-Fantasy-Cricket-App-for-Asia-Cup-2023-A-Complete-Guide.jpg"
                                                                class="img-fluid"
                                                                alt="How To Develop Fantasy Cricket App For Asia Cup 2023 - [A Complete Guide]"
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
                                                    <div class="col-12 fs-16 text-muted py-1 lineclamp3">
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
                                                            <span class="d-block fw-m"><span class="d-flex">Learn
                                                                    more
                                                                    <img src="{{ asset('/public') }}/assets/img/hero-section/arrow-btn.svg"
                                                                        class="w-20 pt-0 ms-2 arrow"
                                                                        alt=""></span></span>
                                                        </a>
                                                        <span class="text-theme1 fw-m">Jul 06, 2023</span>
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
            <a href="{{ asset('/blog') }}"
                class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-1 py-0 my-3 px-lg-5 py-2 px-3 ms-md-2">
                <span class="d-flex align-items-center"><span>View all Blog </span><i
                        class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
            </a>
        </div>
    </div>
</div>







<!-- Modal -->
<div class="modal fade contactModal" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <form method="post" id="connectForm" name="connectForm" class="modal-content cricketApp" novalidate>
            @csrf
            <input type="hidden" class="ajxURL" value="{{ asset('/digitalform_action') }}" />
            <input type="hidden" id="reUrl" value="{{ asset('/thankyou.php') }}" />
            <input type="hidden" name="type" value="Fantasy Cricket App Development" />
            <div class="modal-header align-items-start">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">
                    <div class="col-lg-12 col-md-12 col-12 mb-lg-0 mb-md-0 pb-md-1 px-4">
                        <div class="row align-items-center">
                            <h2 class="d-none invisible">Get Appointment With Our Experts</h2>
                            <div class="col heading fs-md-14 fs-12 left text-white"><span
                                    class="fs-xl-22 fs-lg-23 fs-md-19 fs-17">Get Appointment With <b> Our
                                        Experts</b></span></div>
                        </div>
                    </div>
                </h5>
                <!-- <button type="button" class="btn-close opacity-100 position-relative top-10px right-20px bg-white rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button> -->
                <button type="button"
                    class="btn-close opacity-100 position-relative top-10px right-20px bg-white rounded-pill close"
                    data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body p-0">
                <div class="container-fluid contact-with-us-section position-relative overflow-hidden h-100">
                    <div class="container position-relative zi-1 h-100">
                        <div
                            class="row align-items-center border border-5 rounded p-lg-3 p-md-4 pt-4 border-white align-items-center h-100">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="row gx-md-3 gx-3 gy-md-3 gy-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control rounded-0"
                                                id="name" placeholder="Enter Full Name" required>
                                            <label class="fw-m" for="name">Name <label class="text-danger">*
                                                </label></label>
                                            <div class="invalid-feedback fs-12">Please Enter Full Name. </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-4 pe-0">
                                                <select class="form-select rounded-0 fw-400" name="phonecode"
                                                    id="phonecode" aria-label="Default select example"
                                                    style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important;">
                                                    <option value="IN +91" value="IN +91"> IN +91</option>
                                                    <option value="AF +93">AF +93</option>
                                                    <option value="AL +355">AL +355</option>
                                                    <option value="DZ +213">DZ +213</option>
                                                    <option value="AS +1-684">AS +1-684</option>
                                                    <option value="AD +376">AD +376</option>
                                                    <option value="AO +244">AO +244</option>
                                                    <option value="AI +1-264">AI +1-264</option>
                                                    <option value="AQ +672">AQ +672</option>
                                                    <option value="AG +1-268">AG +1-268</option>
                                                    <option value="AR +54">AR +54</option>
                                                    <option value="AM +374">AM +374</option>
                                                    <option value="AW +297">AW +297</option>
                                                    <option value="AU +61">AU +61</option>
                                                    <option value="AT +43">AT +43</option>
                                                    <option value="AZ +994">AZ +994</option>
                                                    <option value="BS +1-242">BS +1-242</option>
                                                    <option value="BH +973">BH +973</option>
                                                    <option value="BD +880">BD +880</option>
                                                    <option value="BB +1-246">BB +1-246</option>
                                                    <option value="BY +375">BY +375</option>
                                                    <option value="BE +32">BE +32</option>
                                                    <option value="BZ +501">BZ +501</option>
                                                    <option value="BJ +229">BJ +229</option>
                                                    <option value="BM +1-441">BM +1-441</option>
                                                    <option value="BT +975">BT +975</option>
                                                    <option value="BO +591">BO +591</option>
                                                    <option value="BA +387">BA +387</option>
                                                    <option value="BW +267">BW +267</option>
                                                    <option value="BR +55">BR +55</option>
                                                    <option value="IO +246">IO +246</option>
                                                    <option value="VG +1-284">VG +1-284</option>
                                                    <option value="BN +673">BN +673</option>
                                                    <option value="BG +359">BG +359</option>
                                                    <option value="BF +226">BF +226</option>
                                                    <option value="BI +257">BI +257</option>
                                                    <option value="KH +855">KH +855</option>
                                                    <option value="CM +237">CM +237</option>
                                                    <option value="CA +1">CA +1</option>
                                                    <option value="CV +238">CV +238</option>
                                                    <option value="KY +1-345">KY +1-345</option>
                                                    <option value="CF +236">CF +236</option>
                                                    <option value="TD +235">TD +235</option>
                                                    <option value="CL +56">CL +56</option>
                                                    <option value="CN +86">CN +86</option>
                                                    <option value="CX +61">CX +61</option>
                                                    <option value="CC +61">CC +61</option>
                                                    <option value="CO +57">CO +57</option>
                                                    <option value="KM +269">KM +269</option>
                                                    <option value="CK +682">CK +682</option>
                                                    <option value="CR +506">CR +506</option>
                                                    <option value="HR +385">HR +385</option>
                                                    <option value="CU +53">CU +53</option>
                                                    <option value="CW +599">CW +599</option>
                                                    <option value="CY +357">CY +357</option>
                                                    <option value="CZ +420">CZ +420</option>
                                                    <option value="CD +243">CD +243</option>
                                                    <option value="DK +45">DK +45</option>
                                                    <option value="DJ +253">DJ +253</option>
                                                    <option value="DM +1-767">DM +1-767</option>
                                                    <option value="DO +1-809, 1-829, 1-849">DO +1-809, 1-829, 1-849
                                                    </option>
                                                    <option value="TL +670">TL +670</option>
                                                    <option value="EC +593">EC +593</option>
                                                    <option value="EG +20">EG +20</option>
                                                    <option value="SV +503">SV +503</option>
                                                    <option value="GQ +240">GQ +240</option>
                                                    <option value="ER +291">ER +291</option>
                                                    <option value="EE +372">EE +372</option>
                                                    <option value="ET +251">ET +251</option>
                                                    <option value="FK +500">FK +500</option>
                                                    <option value="FO +298">FO +298</option>
                                                    <option value="FJ +679">FJ +679</option>
                                                    <option value="FI +358">FI +358</option>
                                                    <option value="FR +33">FR +33</option>
                                                    <option value="PF +689">PF +689</option>
                                                    <option value="GA +241">GA +241</option>
                                                    <option value="GM +220">GM +220</option>
                                                    <option value="GE +995">GE +995</option>
                                                    <option value="DE +49">DE +49</option>
                                                    <option value="GH +233">GH +233</option>
                                                    <option value="GI +350">GI +350</option>
                                                    <option value="GR +30">GR +30</option>
                                                    <option value="GL +299">GL +299</option>
                                                    <option value="GD +1-473">GD +1-473</option>
                                                    <option value="GU +1-671">GU +1-671</option>
                                                    <option value="GT +502">GT +502</option>
                                                    <option value="GG +44-1481">GG +44-1481</option>
                                                    <option value="GN +224">GN +224</option>
                                                    <option value="GW +245">GW +245</option>
                                                    <option value="GY +592">GY +592</option>
                                                    <option value="HT +509">HT +509</option>
                                                    <option value="HN +504">HN +504</option>
                                                    <option value="HK +852">HK +852</option>
                                                    <option value="HU +36">HU +36</option>
                                                    <option value="IS +354">IS +354</option>
                                                    <option value="ID +62">ID +62</option>
                                                    <option value="IR +98">IR +98</option>
                                                    <option value="IQ +964">IQ +964</option>
                                                    <option value="IE +353">IE +353</option>
                                                    <option value="IM +44-1624">IM +44-1624</option>
                                                    <option value="IL +972">IL +972</option>
                                                    <option value="IT +39">IT +39</option>
                                                    <option value="CI +225">CI +225</option>
                                                    <option value="JM +1-876">JM +1-876</option>
                                                    <option value="JP +81">JP +81</option>
                                                    <option value="JE +44-1534">JE +44-1534</option>
                                                    <option value="JO +962">JO +962</option>
                                                    <option value="KZ +7">KZ +7</option>
                                                    <option value="KE +254">KE +254</option>
                                                    <option value="KI +686">KI +686</option>
                                                    <option value="XK +383">XK +383</option>
                                                    <option value="KW +965">KW +965</option>
                                                    <option value="KG +996">KG +996</option>
                                                    <option value="LA +856">LA +856</option>
                                                    <option value="LV +371">LV +371</option>
                                                    <option value="LB +961">LB +961</option>
                                                    <option value="LS +266">LS +266</option>
                                                    <option value="LR +231">LR +231</option>
                                                    <option value="LY +218">LY +218</option>
                                                    <option value="LI +423">LI +423</option>
                                                    <option value="LT +370">LT +370</option>
                                                    <option value="LU +352">LU +352</option>
                                                    <option value="MO +853">MO +853</option>
                                                    <option value="MK +389">MK +389</option>
                                                    <option value="MG +261">MG +261</option>
                                                    <option value="MW +265">MW +265</option>
                                                    <option value="MY +60">MY +60</option>
                                                    <option value="MV +960">MV +960</option>
                                                    <option value="ML +223">ML +223</option>
                                                    <option value="MT +356">MT +356</option>
                                                    <option value="MH +692">MH +692</option>
                                                    <option value="MR +222">MR +222</option>
                                                    <option value="MU +230">MU +230</option>
                                                    <option value="YT +262">YT +262</option>
                                                    <option value="MX +52">MX +52</option>
                                                    <option value="FM +691">FM +691</option>
                                                    <option value="MD +373">MD +373</option>
                                                    <option value="MC +377">MC +377</option>
                                                    <option value="MN +976">MN +976</option>
                                                    <option value="ME +382">ME +382</option>
                                                    <option value="MS +1-664">MS +1-664</option>
                                                    <option value="MA +212">MA +212</option>
                                                    <option value="MZ +258">MZ +258</option>
                                                    <option value="MM +95">MM +95</option>
                                                    <option value="NA +264">NA +264</option>
                                                    <option value="NR +674">NR +674</option>
                                                    <option value="NP +977">NP +977</option>
                                                    <option value="NL +31">NL +31</option>
                                                    <option value="AN +599">AN +599</option>
                                                    <option value="NC +687">NC +687</option>
                                                    <option value="NZ +64">NZ +64</option>
                                                    <option value="NI +505">NI +505</option>
                                                    <option value="NE +227">NE +227</option>
                                                    <option value="NG +234">NG +234</option>
                                                    <option value="NU +683">NU +683</option>
                                                    <option value="KP +850">KP +850</option>
                                                    <option value="MP +1-670">MP +1-670</option>
                                                    <option value="NO +47">NO +47</option>
                                                    <option value="OM +968">OM +968</option>
                                                    <option value="PK +92">PK +92</option>
                                                    <option value="PW +680">PW +680</option>
                                                    <option value="PS +970">PS +970</option>
                                                    <option value="PA +507">PA +507</option>
                                                    <option value="PG +675">PG +675</option>
                                                    <option value="PY +595">PY +595</option>
                                                    <option value="PE +51">PE +51</option>
                                                    <option value="PH +63">PH +63</option>
                                                    <option value="PN +64">PN +64</option>
                                                    <option value="PL +48">PL +48</option>
                                                    <option value="PT +351">PT +351</option>
                                                    <option value="PR +1-787, 1-939">PR +1-787, 1-939</option>
                                                    <option value="QA +974">QA +974</option>
                                                    <option value="CG +242">CG +242</option>
                                                    <option value="RE +262">RE +262</option>
                                                    <option value="RO +40">RO +40</option>
                                                    <option value="RU +7">RU +7</option>
                                                    <option value="RW +250">RW +250</option>
                                                    <option value="BL +590">BL +590</option>
                                                    <option value="SH +290">SH +290</option>
                                                    <option value="KN +1-869">KN +1-869</option>
                                                    <option value="LC +1-758">LC +1-758</option>
                                                    <option value="MF +590">MF +590</option>
                                                    <option value="PM +508">PM +508</option>
                                                    <option value="VC +1-784">VC +1-784</option>
                                                    <option value="WS +685">WS +685</option>
                                                    <option value="SM +378">SM +378</option>
                                                    <option value="ST +239">ST +239</option>
                                                    <option value="SA +966">SA +966</option>
                                                    <option value="SN +221">SN +221</option>
                                                    <option value="RS +381">RS +381</option>
                                                    <option value="SC +248">SC +248</option>
                                                    <option value="SL +232">SL +232</option>
                                                    <option value="SG +65">SG +65</option>
                                                    <option value="SX +1-721">SX +1-721</option>
                                                    <option value="SK +421">SK +421</option>
                                                    <option value="SI +386">SI +386</option>
                                                    <option value="SB +677">SB +677</option>
                                                    <option value="SO +252">SO +252</option>
                                                    <option value="ZA +27">ZA +27</option>
                                                    <option value="KR +82">KR +82</option>
                                                    <option value="SS +211">SS +211</option>
                                                    <option value="ES +34">ES +34</option>
                                                    <option value="LK +94">LK +94</option>
                                                    <option value="SD +249">SD +249</option>
                                                    <option value="SR +597">SR +597</option>
                                                    <option value="SJ +47">SJ +47</option>
                                                    <option value="SZ +268">SZ +268</option>
                                                    <option value="SE +46">SE +46</option>
                                                    <option value="CH +41">CH +41</option>
                                                    <option value="SY +963">SY +963</option>
                                                    <option value="TW +886">TW +886</option>
                                                    <option value="TJ +992">TJ +992</option>
                                                    <option value="TZ +255">TZ +255</option>
                                                    <option value="TH +66">TH +66</option>
                                                    <option value="TG +228">TG +228</option>
                                                    <option value="TK +690">TK +690</option>
                                                    <option value="TO +676">TO +676</option>
                                                    <option value="TT +1-868">TT +1-868</option>
                                                    <option value="TN +216">TN +216</option>
                                                    <option value="TR +90">TR +90</option>
                                                    <option value="TM +993">TM +993</option>
                                                    <option value="TC +1-649">TC +1-649</option>
                                                    <option value="TV +688">TV +688</option>
                                                    <option value="VI +1-340">VI +1-340</option>
                                                    <option value="UG +256">UG +256</option>
                                                    <option value="UA +380">UA +380</option>
                                                    <option value="AE +971">AE +971</option>
                                                    <option value="GB +44">GB +44</option>
                                                    <option value="UY +598">UY +598</option>
                                                    <option value="UZ +998">UZ +998</option>
                                                    <option value="VU +678">VU +678</option>
                                                    <option value="VA +379">VA +379</option>
                                                    <option value="VE +58">VE +58</option>
                                                    <option value="VN +84">VN +84</option>
                                                    <option value="WF +681">WF +681</option>
                                                    <option value="EH +212">EH +212</option>
                                                    <option value="YE +967">YE +967</option>
                                                    <option value="ZM +260">ZM +260</option>
                                                    <option value="ZW +263">ZW +263</option>
                                                </select>
                                            </div>
                                            <div class="col-8 ps-0">
                                                <div class="form-floating">
                                                    <input type="tel" name="tel" minlength="10"
                                                        maxlength="10"
                                                        oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                                                        class="form-control rounded-0 border border-left"
                                                        id="phoneNumber" placeholder="Enter Phone Number" required>
                                                    <label class="fw-m" for="phoneNumber">Mobile Number <label
                                                            class="text-danger">* </label></label>
                                                    <div class="invalid-feedback fs-12">Please Enter a Valid Phone
                                                        Number.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control rounded-0"
                                                id="emailID" placeholder="Enter Email ID">
                                            <label class="fw-m" for="emailID">Email ID (Optional)</label>
                                            {{-- <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div> --}}
                                        </div>
                                    </div>


                                    <div class="col-md-12 ">
                                        <div class="form-floating">
                                            <select name="type"required="" id="type"
                                                class="form-control rounded-0 pt-2 fw-400">
                                                <option value="">Looking For *</option>
                                                <option value="Fantasy Cricket App Development">Fantasy Cricket App
                                                    Development</option>
                                                <option value="Fantasy Sports App Development">Fantasy Sports App
                                                    Development</option>
                                                <option value="Fantasy Football App Development">Fantasy Football App
                                                    Development</option>
                                                <option value="Mobile App Development" selected="selected">Mobile
                                                    App Development</option>
                                                <option value="E-commerce Development">E-commerce Development</option>
                                                <option value="MLM Software Development">MLM Software Development
                                                </option>
                                                <option value="Website Design">Website Design</option>
                                                <option value="Web Portal Development">Web Portal Development</option>
                                                <option value="Custom ERP Development">Custom ERP Development</option>
                                                <option value="Hire Dedicated Developer">Hire Dedicated Developer
                                                </option>
                                                <option value="SEO/Social Media Marketing">SEO/Social Media Marketing
                                                </option>
                                                <option value="Other Servicest">Other Services</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="message" class="form-control rounded-0"
                                                id="type" placeholder="Wirte a Message" required>
                                            <label class="fw-m fs-md-16 fs-14" for="Requierment"> Wirte a
                                                Message</label>
                                            <div class="invalid-feedback fs-12">Please Enter a Valid Type Message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer px-5 pb-4">
                <button type="submit" id="digitalBTN"
                    class="btn btn-theme3 fs-md-14 fs-13 fw-m py-2 px-md-4 px-3 w-100">
                    <span class="d-block"><span>Submit</span> <i
                            class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
@push('scripts')
<script src="{{ asset('/public') }}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{ asset('/public') }}/assets/js/mobile-app-development.min.js"></script>
<script src="{{ asset('/public') }}/assets/js/fantasy-cricket-app-development.min.js"></script>


<script>
    $('.caseStudy').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: false,
        left: false,
        center: true,
        freeDrag: false,
        lazyLoad: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        margin: 40,
        stagePadding: 100,
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                dots: false,
                stagePadding: 40,
                margin: 10,
                nav: false,
            },
            500: {
                items: 1,
                dots: false,
                stagePadding: 60,
                margin: 20,
                nav: false,
            },
            600: {
                dots: false,
                stagePadding: 100,
                margin: 40,
                nav: false,
                items: 1,
            },
            992: {
                dots: false,
                stagePadding: 100,
                margin: 40,
                nav: false,
                items: 1,
            },
            1000: {
                dots: false,
                stagePadding: 100,
                margin: 40,
                nav: false,
                items: 1,
            },
            1299: {
                dots: false,
                stagePadding: 100,
                margin: 40,
                nav: false,
                items: 1,
            },
            1499: {
                items: 1,
                dots: false,
                stagePadding: 100,
                margin: 40,
                nav: false,
            }
        },
        navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
    });
</script>

<script>
    $(document).ready(function() {

        $('#main1').on('click', function() {

            if ($('#box1').css('display') == 'none') {

                $('#box1').css('display', 'block');
                $('#box2').css('display', 'none');
            } else {

                $('#box1').css('display', 'none');

            }
        })

        $('#main2').on('click', function() {

            if ($('#box2').css('display') == 'none') {

                $('#box2').css('display', 'block');
                $('#box1').css('display', 'none');

            } else {

                $('#box2').css('display', 'none');
            }
        })

    });
</script>
<script>
    const nextArrow =
        '<img src="public/assets/img/mobile-app-development/nextfeature.svg" alt="right arrow" width="30">';
    const nextIcon = '<img src="public/assets/img/mobile-app-development/next.svg" alt="right arrow" width="30">';
    $(function() {
        $('.wework-tab').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 10,
            dots: false,
            nav: true,
            navText: [

                nextIcon,
                nextArrow,
            ],

            responsive: {
                0: {
                    items: 2
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 7
                }

            }
        });
    });

    $(document).ready(function() {
        $('ul.tabs li').click(function() {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })
    });
</script>
@endpush
