@extends('main')
@push('meta')
   <!--  Title -->
   <title>CMS Development Company | CMS Development Services</title>

   <!-- Required meta tags -->
   <meta name="title" content="CMS Development Company | CMS Development Services" />
   <meta name="description" content="Need CMS development services? Trust IMG Global best CMS development company. With 10+ years of experience, we can build the CMS system your business needs." />
   <meta name="keywords" content="cms web design, cms development services, cms web development services, cms development company, cms website development company" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="CMS Development Company | CMS Development Services">
   <meta name="twitter:description" content="Need CMS development services? Trust IMG Global best CMS development company. With 10+ years of experience, we can build the CMS system your business needs.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/CMS-Website-Development-Company.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}cms-development.php">
   <meta property="og:title" content="CMS Development Company | CMS Development Services">
   <meta property="og:description" content="Need CMS development services? Trust IMG Global best CMS development company. With 10+ years of experience, we can build the CMS system your business needs.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/CMS-Website-Development-Company.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/CMS-Website-Development-Company.webp">


   
   <meta name="classification" content="cms web design, cms development services, cms web development services, cms development company, cms website development company" />
   <link rel="canonical" href="{{asset('/')}}cms-development.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/cms-development.min.css">

@endpush
@section('content')

   {{-- Hero Section --}}
   @section('hero_hiddenHeading')
   CMS Website Development Company
   @endsection('hero_hiddenHeading')
   @section('hero_heading')
   <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">CMS Website <b> Development Company</b></span>
   @endsection('hero_heading')
   @section('hero_tagline')
   India's most promising CMS Web Design & Development Company!
   <br><br>
   Get the best CMS web application development services today! Get state-of-art infrastructure, skilled professionals, and development on the latest trends and technologies. We have CMS web developers who follow best practices to offer scalable and secure content management system apps for different business verticals.
   @endsection('hero_tagline')
   @section('hero_btn')
      <div class="col-12 pt-3 text-lg-start text-center">
         <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-14 fw-m my-3 py-2 px-4">
         <span class="d-block"><span>+91-9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
         </a>
         <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">
         <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
         </a>
      </div>
   @endsection('hero_btn')
   @section('hero_img')
   <img src="{{GETFOLDERPATH()}}/cms-development-1.webp" class="lazy-image w-100" data-src="{{GETFOLDERPATH()}}/CMS-Website-Development-Company.webp"alt="CMS-Website-Development-Company" width="100" height="auto">
   @endsection('hero_img')
   @include('inner-page-section.hero.index')


   

   <!-- Custom CMS section -->
   <div class="container-fluid overflow-hidden Custom_CMS-section bg-white position-relative">
      <div class="container py-5 position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-5 pe-lg-5 top_banner-left-part">
                     <div class="row justify-content-center">
                         <div class="col-lg-10 col-md-5 col-7 position-relative" style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="2" data-tilt-speed="400" data-tilt-perspective="2500" data-tilt-reverse="true">
                           <img src="{{GETFOLDERPATH()}}/cms-development-2.webp" class="lazy-image w-100" data-src="{{GETFOLDERPATH()}}/Custom-CMS-Development-Solutions.webp"alt="Custom-CMS-Development-Solutions" width="100" height="auto">   
                         </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4 pt-lg-0 pt-4">
                              <h2 class="d-none invisible">Custom CMS Development Solutions</h2>
                              <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Custom CMS <b>Development Solutions </b></span></div>
                           </div>
                        </div>
                        <div class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-3">We are the best CMS development company that offers CMS development services that cater to its business requirements. Acquire state-of-the-art, scalable, and secure enabled sites with the best web standards by partnering with us. Our web development services include best practices, seasoned developers, and the latest technology stacks to fulfill different requirements.</div>
                        <div class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-3">Get the best CMS web application development services today! Get state-of-art infrastructure, skilled professionals, and development on the latest trends and technologies. We have CMS web developers who follow best practices to offer scalable and secure content management system apps for different business verticals.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- cms solutions section -->
   <div class="container-fluid cms_solutions overflow-hidden position-relative">
      <div class="container py-5 position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row mx-0">
                  <div class="col-12 heading fs-md-14 fs-12 left text-white">BEST WEB &amp; MOBILE APP DEVELOPMENT COMPANY<span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Our CMS Design & <b>Development Solutions</b> Company</span></div>
               </div>
               <div class="row">
                  <div class="col-12 fw-l text-lg-start text-center text-white mt-lg-5 mt-md-4 mt-4 mb-lg-4 mb-md-3 mb-3 fs-md-17 fs-sm-15 fs-14">As the most trusted CMS web application development services company in India, we offer cost-effective design and development services for different businesses and individuals worldwide. With our CMS development services, the developers help in choosing the best CMS for your site.</div>
                  <div class="col-12 fw-l text-lg-start text-center text-white fs-md-17 fs-sm-15 fs-14">We offer the best features like banners ad management, site statistics, ability to delete, edit, add, or modify pages, news/blogs/articles, other content management types, and more to deliver a user-friendly content management system. We are equipped with professional CMS developers, designers, and dedicated programmers for open-source CMS platform, namely WordPress.</div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- cms devolopment solutions section -->
   <div class="container-fluid overflow-hidden cms-devolopment-solutions position-relative">
      <div class="container position-relative zi-2 py-5">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">CMS Development Solutions</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> CMS Development <b> Solutions </b></span></div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
               <div class="cms_box bg-white text-center">
                  <span class="cms_img"><img class="h-70px" src="{{GETFOLDERPATH()}}/CMS-Update-And-Migration.webp" alt="CMS Update And Migration"></span>
                  <h3 class="d-none invisible">CMS Update And Migration</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-20 fs-sm-18 fs-16 lh-normal mt-3 tz" style="--tz:30px;">CMS Update And Migration</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">Our CMS update and migration services help augment operational efficiency, brand visibility, and user experience. We have experts who stay updated with the latest technologies to deliver the best solutions.</div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
               <div class="cms_box bg-theme1 text-center">
                  <span class="cms_img white_ico"><img class="h-70px" src="{{GETFOLDERPATH()}}/Enterprise-CMS-Development.webp" alt="Enterprise CMS Development "></span>
                  <h3 class="d-none invisible">Enterprise CMS Development </h3>
                  <div class="col-12 fw-m text-white fs-md-20 fs-sm-18 fs-16 lh-normal mt-3 tz" style="--tz:30px;">Enterprise CMS Development </div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-white mt-2 tz" style="--tz:30px;">We have a crew of CMS development professionals who help develop the best CMS solutions as per the industry's leading practices. It improves the present workflow to provide you with focused results.</div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
               <div class="cms_box bg-white text-center">
                  <span class="cms_img"><img class="h-70px" src="{{GETFOLDERPATH()}}/CMS-Maintenance-And-Support.webp" alt="CMS Maintenance And Support"></span>
                  <h3 class="d-none invisible">CMS Maintenance And Support</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-20 fs-sm-18 fs-16 lh-normal mt-3 tz" style="--tz:30px;">CMS Maintenance And Support</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">We make use of the CMS maintenance and support solutions to empower the clients. We provide post-deployment of the solution to ensure that you have delightful and glitch-free experiences at all times.</div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
               <div class="cms_box bg-theme1 text-center">
                  <span class="cms_img white_ico"><img class="h-70px" src="{{GETFOLDERPATH()}}/CMS-Integration.webp" alt="CMS Integration"></span>
                  <h3 class="d-none invisible">CMS Integration</h3>
                  <div class="col-12 fw-m text-white fs-md-20 fs-sm-18 fs-16 lh-normal mt-3 tz" style="--tz:30px;">CMS Integration</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-white mt-2 tz" style="--tz:30px;">We have experts in providing the best CMS integration services that include API creation, which helps in the constant communication of CMS systems with various applications.</div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
               <div class="cms_box bg-white text-center">
                  <span class="cms_img"><img class="h-70px" src="{{GETFOLDERPATH()}}/Extension-Theme-Development.webp" alt="Extension/Theme Development"></span>
                  <h3 class="d-none invisible">Extension/Theme Development</h3>
                  <div class="col-12 fw-m text-theme1 fs-md-20 fs-sm-18 fs-16 lh-normal mt-3 tz" style="--tz:30px;">Extension/Theme Development</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-2 tz" style="--tz:30px;">We deliver custom extension and themes development services that tailor to match the global client requirements spanning different verticals in the industry.</div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
               <div class="cms_box bg-theme1 text-center">
                  <span class="cms_img white_ico"><img class="h-70px" src="{{GETFOLDERPATH()}}/Custom-CMS-Development.webp" alt="Custom CMS Development"></span>
                  <h3 class="d-none invisible">Custom CMS Development</h3>
                  <div class="col-12 fw-m text-white fs-md-20 fs-sm-18 fs-16 lh-normal mt-3 tz" style="--tz:30px;">Custom CMS Development</div>
                  <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-white mt-2 tz" style="--tz:30px;">We are known for the best delivery of custom CMS development solutions tailored to the clients' specific requirements. Choose us for the top-notch CMS solutions that are the best performing in the industry.</div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- CMS_Services_Need section -->
   <div class="container-fluid overflow-hidden CMS_Services_Need-section bg-white position-relative">
      <div class="container py-5 position-relative zi-2">
         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-7">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4 pt-lg-0 pt-4">
                              <h2 class="d-none invisible">Why Pick Us For Your CMS Web Design And Development Services Need?</h2>
                              <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Why Pick Us For Your CMS Web Design And <b> Development Services Need? </b></span></div>
                           </div>
                        </div>
                        <div class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-3">We have several years of experience in various CMS development services and create the best content management solutions tailored to your eCommerce business, help you raise the retention and conversion rates, and offer a user-friendly blog to provide the best brand exposure.</div>
                        <div class="col-12 fw-l fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-muted text-lg-start text-center mt-3">You receive CMS for the maintenance and management of both enterprise and individual-related content. For more information, contact us to know more about the CMS design and development services.</div>
                     </div>
                  </div>
                  <div class="col-lg-5 pe-lg-5 top_banner-left-part">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-7 position-relative" style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="2" data-tilt-speed="400" data-tilt-perspective="2500" data-tilt-reverse="true">
                           <img class="w-100 position-relative tz" style="--tz:90px;" src="{{GETFOLDERPATH()}}/Why-Pick-Us-For-Your-CMS-Web-Design-And-Development-Services-Need.webp" alt="Why Pick Us For Your CMS Web Design And Development Services Need?">

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- why choose cms section -->
   <div class="container-fluid overflow-hidden why-choose-cms position-relative">
      <div class="container py-5 position-relative zi-2">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Why Choose IMG Global Infotech For CMS Development Services?</h2>
            <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Why Choose IMG Global Infotech For <b> CMS Development Services? </b></span></div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/24-7-Customer-Support.webp" alt="24/7 customer support"></span>
                  <h3 class="d-none invisible">24/7 customer support</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     24/7 customer support
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/On-Time-Delivery.webp" alt="On-time delivery"></span>
                  <h3 class="d-none invisible">On-time delivery</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     On-time delivery
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/Zero-Billing-Guarantee.webp" alt="Zero billing guarantee"></span>
                  <h3 class="d-none invisible">Zero billing guarantee</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Zero billing guarantee
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/direct.webp" alt="Direct resource access"></span>
                  <h3 class="d-none invisible">Direct resource access</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Direct resource access
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/Dedicated-Project-Mananger.webp" alt="Dedicated project manager"></span>
                  <h3 class="d-none invisible">Dedicated project manager</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Dedicated project manager
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/100+-Project-Were-Delivered.webp" alt="100+ projects were delivered."></span>
                  <h3 class="d-none invisible">100+ projects were delivered.</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     100+ projects were delivered.
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/Explicit-Approach.webp" alt="Explicit approach"></span>
                  <h3 class="d-none invisible">Explicit approach</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Explicit approach
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/happy_client.webp" alt="Happy clients around the world"></span>
                  <h3 class="d-none invisible">Happy clients around the world</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Happy clients around the world
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/Handle-Tight-Deadlines-and-Deliver.webp" alt="Handle tight deadlines and deliver the project on time."></span>
                  <h3 class="d-none invisible">Handle tight deadlines and deliver the project on time.</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Handle tight deadlines and deliver the project on time.
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/All-the-Developers-are-technically.webp" alt="All the developers are technically proficient."></span>
                  <h3 class="d-none invisible">All the developers are technically proficient.</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     All the developers are technically proficient.
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1"><img src="{{GETFOLDERPATH()}}/Guaranteed-Quality-Services.webp" alt="Guaranteed quality services and assistance"></span>
                  <h3 class="d-none invisible">Guaranteed quality services and assistance</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Guaranteed quality services and assistance
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch mt-4 mb-4">
               <div class="why-choose-cms-box position-relative w-100 px-3 pt-5 pb-3">
                  <span class="why-choose-cms-img border border-3 border-theme1">
                      <img src="{{GETFOLDERPATH()}}/cms-development-3.webp" class="lazy-image w-100" data-src="{{GETFOLDERPATH()}}/serves.webp"alt="Serves various industry solutions like travel & hospitality, healthcare, lifestyle & management, aviation, media & entertainment, education, transportation & logistics, manufacturing, Hi-tech, fintech, real estate, and more." width="100" height="auto">   
                  </span>
                  <h3 class="d-none invisible">Serves various industry solutions like travel & hospitality, healthcare, lifestyle & management, aviation, media & entertainment, education, transportation & logistics, manufacturing, Hi-tech, fintech, real estate, and more.</h3>
                  <div class="col why-choose-box-head fw-m fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-14 ellipsis-1 text-center mt-2">
                     Serves various industry solutions like travel & hospitality, healthcare, lifestyle & management, aviation, media & entertainment, education, transportation & logistics, manufacturing, Hi-tech, fintech, real estate, and more.
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
                    <h2 class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Our <b>Portfolio</b> </span></h2>
                </div>
            </div>

             <div class="row align-items-center justify-content-center owl-portfolio-slider owl-carousel mx-0">
                 <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox">
                       <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/coaching-select.webp" alt="coaching-select">
                          <div class="portfolioBoxContent">
                            <h4>Coaching Select</h4>
                            <p>Education Website</p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                     <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/sariskafuncity.webp" alt="sariskafuncity">
                         <div class="portfolioBoxContent">
                            <h4>Sariska Fun City</h4>
                            <p>Water Park Website</p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12 ">
                    <div class="portfolioBox ">
                      <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/emerals.webp" alt="emerals">
                             <div class="portfolioBoxContent">
                            <h4>Emerals</h4>
                            <p>Clothes Shopping Website</p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12 ">
                    <div class="portfolioBox">
                      <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp"class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1" 
                            data-src="{{asset('/public')}}/assets/img/portfolio-section/propira.webp" alt="propira">
                                <div class="portfolioBoxContent">
                                    <h4>Propira</h4>
                                    <p>Real Estate Website</p>
                                </div>
                         </div>
                 </div>
			    </div>
        </div>
    </div>

   <!-- faq section -->
   <div class="container-fluid overflow-hidden bg-white faq_section position-relative">
      <div class="container position-relative zi-2 py-5">
         <div class="row mx-0 pb-5">
            <h2 class="d-none invisible">Frequently Asked Questions</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Frequently Asked <b> Questions </b></span></div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Why should I hire IMG Global Infotech for CMS development services?
                        </button>
                     </h2>
                     <div id="collapseOne" class="position-relative accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 fs-14">
                           We are well-experienced with top CMS platforms. Do check our portfolio to have a clear idea.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           What are the benefits of owning a content management system?
                        </button>
                     </h2>
                     <div id="collapseTwo" class="position-relative accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 fs-14">
                           Here, are some compelling reasons for owning a content management system:-
                           <ul class="list_count mt-2">
                              <li class="fs-lg-15 fs-md-14 fs-14 fw-l text-theme3">SEO-friendly.</li>
                              <li class="fs-lg-15 fs-md-14 fs-14 fw-l text-theme3">Ease of maintenance.</li>
                              <li class="fs-lg-15 fs-md-14 fs-14 fw-l text-theme3">Quick development.</li>
                              <li class="fs-lg-15 fs-md-14 fs-14 fw-l text-theme3">Cost-efficiency.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           What is your standard duration to develop a CMS project?
                        </button>
                     </h2>
                     <div id="collapseThree" class="position-relative accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 fs-14">
                           It typically takes three to seven weeks to develop a CMS project. We assure you whatever timeline we quote, we stick to it.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                           How do I track my project's development progress?
                        </button>
                     </h2>
                     <div id="collapsefour" class="position-relative accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 fs-14">
                           You can always connect with our development to know the progress at different stages and provide your valuable inputs.
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item mb-4 position-relative zi-2">
                     <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button fs-lg-14 fs-md-13 fs-13 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                           Is there any hidden cost?
                        </button>
                     </h2>
                     <div id="collapsefive" class="position-relative accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-l fs-lg-15 fs-md-14 text-theme1 fs-14">
                           No, there are no hidden costs involved.
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
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-Much-Does-It-Cost-to-Develop-an-App-like-MakeMyTrip.webp" class="img-fluid" alt="How Much Does It Cost To Develop An App Like MakeMyTrip?" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How Much Does It Cost To Develop An App Like MakeMyTrip?</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              Embarking on the path to develop a tours and travel app like MakeMyTrip is undoubtedly a challenging task, but only if you are not well-versed with the travel booking app development cost.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-makemytrip" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Oct 31, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-Much-Does-It-Cost-to-Develop-An-App-Like-Rapido.webp" class="img-fluid" alt="How Much Does It Cost To Develop An App Like Rapido?" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How Much Does It Cost To Develop An App Like Rapido?</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              Discover the potential costs of developing an on-demand bike taxi app like Rapido with IMG Global Infotech. Get insights into app development expenses, features, and more for your unique business vision.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-an-app-like-rapido" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Oct 25, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>
                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-to-develop-an-app-like-onlyfans-app-cost-features.webp" class="img-fluid" alt="How To Develop An App Like OnlyFans? | App Cost & Features" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How To Develop An App Like OnlyFans? | App Cost & Features</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              If you find yourself fascinated by the triumph of OnlyFans and planning for OnlyFans app development, this blog is for you.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-an-app-like-onlyfans" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Oct 16, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimage2023-android-app-development-trends-market-insights-and-future-projections.webp" class="img-fluid" alt="2023 Android App Development Trends: Market Insights And Future Projections" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">2023 Android App Development Trends: Market Insights And Future Projections</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              In this blog, we will explore the highlights of the Android app development market in 2023 and delve into the prospects as discussed by the Android app development company professionals.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/android-app-development-trends-and-market-insights" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Oct 13, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimagehow-to-develop-a-doctor-appointment-app-like-practo-651fe815a3fbd.webp" class="img-fluid" alt="How To Develop A Doctor Appointment App Like Practo?" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How To Develop A Doctor Appointment App Like Practo?</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              In this blog, we'll delve into the essential aspects of developing a doctor appointment booking app, from conceptualization to implementation.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-a-doctor-appointment-app-like-practo" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Oct 04, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp" class="img-fluid" alt="blogimagegrowing-your-online-business-with-fantasy-sports-app-development.webp" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">Growing Your Online Business With Fantasy Sports App Development</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              Fantasy sports app development is a mobile application through which Users can establish and manage virtual teams of real-life athletes with internet platforms.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/growing-your-online-business-with-fantasy-sports-app-development" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Sep 21, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>



                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageA-Comprehensive-Guide-to-Developing-Multi-Sport-Fantasy-Apps.webp" class="img-fluid" alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">A Comprehensive Guide To Developing Multi-Sport Fantasy Apps</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                 Developing a multi-sport fantasy app is a complex process, but it can be rewarding. In this guide, we will discuss the key steps in developing a successful multi-sport fantasy app, as the fantasy app development company suggested.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/multi-sports-fantasy-app-development-guide" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Sep 04, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>

                                                <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageThe-Ultimate-Guide-to-Fantasy-Cricket-App-Development.webp" class="img-fluid" alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">The Ultimate Guide To Fantasy Cricket App Development</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                  How to develop a fantasy cricket app? This guide can be your savior. So, let’s dive into the step-by-step process of fantasy cricket app development without further delay.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-fantasy-cricket-app-development" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 25, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>


                                                    <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website">
                                                                 <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-to-Create-a-Fantasy-Sports-Website-6-Easy-Steps.jpg" class="img-fluid" alt="Top Custom Software Development Companies" width="302" height="170">
                                                                </a>
                                                            </div>
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website" class="text-decoration-none">
                                                             <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark  fw-m pt-3 lineclamp2">How To Create A Fantasy Sports Website - 6 Easy Steps</div>
                                                            </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                 In this blog, the professionals of a fantasy cricket website development company in India will unveil the secrets to creating a fantasy sports website.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-create-a-fantasy-sports-website" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 18, 2023</span>
                                                            </div>
                                                        
                                                        </div>
                                                     </div>
                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageList-Of-Top-10-Best-Fantasy-Cricket-Apps-in-India-2023.jpg" class="img-fluid" alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs" width="302" height="170">
                                                            </a>  
                                                            </div>
                                                          <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india" class = "text-decoration-none">
                                                            <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">List Of Top 10 Best Fantasy Cricket Apps In India 2023</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                              The top fantasy cricket app list includes Dream11, MyTeam11, ESPN, MyCircle11, and MPL. Each fantasy app has unique features, user experience, and contest offerings.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-apps-in-india" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Aug 10, 2023</span>
                                                            </div>
                                                        </div> 
                                                     </div>
                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageTop-Fantasy-Sports-App-Development-Companies-in-India.jpg" class="img-fluid" alt="How To Develop Hotel Booking App: Cost, Features (2023)" width="302" height="170">
                                                            </a>
                                    
                                                            </div>
                                                            <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India" class="text-decoration-none">
                                                             <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">Top Fantasy Sports App Development Companies In India [2023]</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                This comprehensive guide highlights the list of the top fantasy sports app development companies in India, providing cutting-edge solutions for immersive sports gaming experiences.
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-sports-app-development-companies-in-India" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
                                                                    </a>
                                                                    <span class="text-theme1 fw-m">Jul 13, 2023</span>
                                                            </div>
                                                        </div>
                                                     </div>

                                                     <div class="col-lg-12 col-md-12 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blogimageHow-To-Develop-Fantasy-Cricket-App-for-Asia-Cup-2023-A-Complete-Guide.jpg" class="img-fluid" alt="How To Develop Hotel Booking App: Cost, Features (2023)" width="302" height="170">
                                                            </a>
                                    
                                                            </div>
                                                            <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup" class="text-decoration-none">
                                                             <div class="col-12 fs-lg-20 fs-md-18 fs-sm-16 fs-16 text-dark fw-m pt-3 lineclamp2">How To Develop Fantasy Cricket App For Asia Cup 2023 - [A Complete Guide]</div>
                                                           </a>
                                                              <div class="col-12 fs-16 text-muted py-1 lineclamp3">
                                                                 Fantasy app development for cricket requires a significant investment of time and resources. It is essential to have a comprehensive understanding of the entire development process to achieve the desired outcome. Check this blog to know how to develop a fantasy cricket app for Asia cup 2023
                                                              </div>
                                                            <div class="col-12 pb-2 d-flex align-items-center justify-content-between">
                                                                    <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-fantasy-cricket-app-for-asia-cup" class="fw-m text-decoration-none text-capitalize text-dark fs-lg-17 fs-16">
                                                                        <span class="d-block fw-m"><span class="d-flex">Learn more
                                                                        <img src="{{asset('/public')}}/assets/img/hero-section/arrow-btn.svg" class="w-20 pt-0 ms-2 arrow" alt=""></span></span>
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
                                <a href="{{asset('/blog')}}" class="btn  btn-button1 text-capitalize text-white fs-xl-18 fs-lg-18 fs-md-19 fs-15 py-lg-1 py-0 my-3 px-lg-5 py-2 px-3 ms-md-2">
                                <span class="d-flex align-items-center"><span>View all Blog  </span><i class="imgd img-long-arrow-right arrowright position-relative fs-xxl-25 fs-xl-25 fs-lg-22 fs-md-22 fs-sm-15 fs-20  ms-3 "></i></span>
                            </a>
                          </div>
                        </div>
                     </div>
               
 
                  
   

   
   <!-- Modal -->
   <div class="modal fade contactModal" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered mt-md-5 mt-1 mb-5">
         <form method="post" id="connectForm" name="connectForm" class="modal-content cricketApp" novalidate>
            @csrf
            <input type="hidden" class="ajxURL" value="{{asset('/digitalform_action')}}" />
            <input type="hidden" id="reUrl" value="{{asset('/thankyou.php')}}" />
            <input type="hidden" name="type" value="Fantasy Cricket App Development" />
            <div class="modal-header align-items-start">
               <h5 class="modal-title fw-bold" id="exampleModalLabel">
                  <div class="col-lg-12 col-md-12 col-12 mb-lg-0 mb-md-0 pb-md-1 px-4">
                     <div class="row align-items-center">
                        <h2 class="d-none invisible">Get Appointment With Our Experts</h2>
                        <div class="col heading fs-md-14 fs-12 left text-white"><span class="fs-xl-22 fs-lg-23 fs-md-19 fs-17">Get Appointment With <b> Our Experts</b></span></div>
                     </div>
                  </div>
               </h5>
               <!-- <button type="button" class="btn-close opacity-100 position-relative top-10px right-20px bg-white rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button> -->
               <button type="button" class="btn-close opacity-100 position-relative top-10px right-20px bg-white rounded-pill close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <div class="modal-body p-0">
               <div class="container-fluid contact-with-us-section position-relative overflow-hidden h-100">
                  <div class="container position-relative zi-1 h-100">
                     <div class="row align-items-center border border-5 rounded p-lg-3 p-md-4 pt-4 border-white align-items-center h-100">
                        <div class="col-lg-12 col-md-12 col-12">
                           <div class="row gx-md-3 gx-3 gy-md-3 gy-3">
                              <div class="col-md-12">
                                 <div class="form-floating">
                                    <input type="text" name="name" class="form-control rounded-0" id="name" placeholder="Enter Full Name" required>
                                    <label class="fw-m" for="name">Name <label class="text-danger">* </label></label>
                                    <div class="invalid-feedback fs-12">Please Enter Full Name. </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-4 pe-0">
                                            <select class="form-select rounded-0 fw-400" name="phonecode" id="phonecode" aria-label="Default select example" style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important;">
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
                                                        <option value="DO +1-809, 1-829, 1-849">DO +1-809, 1-829, 1-849</option>
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
                                                <input type="tel" name="tel" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 border border-left" id="phoneNumber" placeholder="Enter Phone Number" required>
                                                <label class="fw-m" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                            </div>
                                            </div>
                                        </div>
                                </div>
                              <div class="col-md-12">
                                 <div class="form-floating">
                                    <input type="email" name="email" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID">
                                    <label class="fw-m" for="emailID">Email ID (Optional)</label>
                                    {{-- <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div> --}}
                                 </div>
                              </div>
                             

                              <div class="col-md-12 ">
                                        <div class="form-floating">
                                            <select name="type"required="" id="type" class="form-control rounded-0 pt-2 fw-400">
                                                <option value="">Looking For *</option>
                                                <option value="Fantasy Cricket App Development">Fantasy Cricket App Development</option>
                                                <option value="Fantasy Sports App Development">Fantasy Sports App Development</option>
                                                <option value="Fantasy Football App Development">Fantasy Football App Development</option>
                                                <option value="Mobile App Development" >Mobile App Development</option>
                                                <option value="E-commerce Development" >E-commerce Development</option>
                                                <option value="MLM Software Development">MLM Software Development</option>
                                                <option value="Website Design" >Website Design</option>
                                                <option value="Web Portal Development">Web Portal Development</option>
                                                <option value="Custom ERP Development">Custom ERP Development</option>
                                                <option value="Hire Dedicated Developer">Hire Dedicated Developer</option>
                                                <option value="SEO/Social Media Marketing">SEO/Social Media Marketing</option>
                                                <option value="Other Servicest" selected="selected">Other Services</option>
                                     </select>
                                 </div> 
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" name="message" class="form-control rounded-0" id="type" placeholder="Wirte a Message" required >
                                        <label class="fw-m fs-md-16 fs-14" for="Requierment"> Wirte a Message</label> 
                                            <div class="invalid-feedback fs-12">Please Enter a Valid Type Message.</div> 
                                        </div>
                                </div> 
                             </div>
                        </div>
                     </div>
                  </div>
               </div> 
            </div>
            <div class="modal-footer px-5 pb-4">
               <button type="submit" id="digitalBTN" class="btn btn-theme3 fs-md-14 fs-13 fw-m py-2 px-md-4 px-3 w-100">
                  <span class="d-block"><span>Submit</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </button>
            </div>
         </form>
      </div>
   </div>


@endsection
@push('scripts')  
<script src="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.js"></script>
<script src="{{asset('/public')}}/assets/js/cms-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-sports-app-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>


@endpush