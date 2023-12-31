@extends('main')
@push('meta')
   <!--  Title -->
   <title>Fantasy Movie App Development, Fantasy Movie App Development</title>

   <!-- Required meta tags -->
   <meta name="title" content="Fantasy Movie App Development, Fantasy Movie App Development" />
   <meta name="description" content="IMG Global Infotech is a trusted Fantasy Movie App Development Company providing creative and user-friendly Fantasy Movie Mobile App Development." />
   <meta name="keywords" content="Fantasy Movie App, Fantasy Movie App Development, Fanatsy Movie Mobile App Development, Fantasy Movie Software Development, Fantasy Movie App Development Services, Fantasy Movie Web App Development" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Fantasy Movie App Development, Fantasy Movie App Development">
   <meta name="twitter:description" content="IMG Global Infotech is a trusted Fantasy Movie App Development Company providing creative and user-friendly Fantasy Movie Mobile App Development.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/Fantasy-Movie-League.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}fantasy-movie-app-development.php">
   <meta property="og:title" content="Fantasy Movie App Development, Fantasy Movie App Development">
   <meta property="og:description" content="IMG Global Infotech is a trusted Fantasy Movie App Development Company providing creative and user-friendly Fantasy Movie Mobile App Development.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/Fantasy-Movie-League.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/Fantasy-Movie-League.webp">



   <meta name="classification" content="Fantasy Movie App, Fantasy Movie App Development, Fanatsy Movie Mobile App Development, Fantasy Movie Software Development, Fantasy Movie App Development Services, Fantasy Movie Web App Development" />
   <link rel="canonical" href="{{asset('/')}}fantasy-movie-app-development.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/owl/owl.carousel.min.css">
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/fantasy-movie-app-development.min.css">
@endpush
@section('content')
   {{-- Hero Section --}}
   @section('hero_hiddenHeading')
   Fantasy Movie League
   @endsection('hero_hiddenHeading')
   @section('hero_heading')
   <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Fantasy <b>Movie League</b></span>
   @endsection('hero_heading')
   @section('hero_tagline')
   Are you more of a movie buff than a sports fan? Then the creators of Fantasy Movie League hope this is the game for you. Fantasy Movie League is made to bring the fun and excitement of fantasy sports to the world of motion pictures. Film fans predict which movies will be the biggest hits at the box office each weekend, and compete with their friends for fun, pride and prizes. There's also exclusive articles published daily, plus an active community of film fans from around the world.
   @endsection('hero_tagline')
   @section('hero_btn')
   <div class="col-12 pt-3 text-lg-start text-center">
	   <a href="tel:+91-9694097245" class="btn btn-theme3 text-white fs-14 fw-m my-3 py-2 px-4">
		  <span class="d-block"><span>+91 -9694097245</span> <i class="imgr ms-2 img-phone-volume position-relative bottom-n2px"></i></span>
	   </a>
	   <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-theme1 text-white fs-14 fw-m my-3 py-2 px-4 ms-md-2">
		  <span class="d-block"><span>Start A Project</span><i class="imgr ms-2 img-laptop position-relative bottom-n2px"></i></span>
	   </a>
	</div>
   @endsection('hero_btn')
   @section('hero_img')
   <img src="{{asset('/public')}}/assets/img/fantasy-movie-app-development/shape-1.webp" class="lazy-image w-100" data-src="{{asset('/public')}}/assets/img/fantasy-movie-app-development/Fantasy-Movie-League.webp"alt="Fantasy-Movie-League" width="100" height="auto">  
 
   @endsection('hero_img')
   @include('inner-page-section.hero.index')

   
   

   <!-- Get Movie Portal section -->
   <div class="container-fluid overflow-hidden bg-white Get_movie_portal_section position-relative">
      <div class="container position-relative zi-2 py-5">
         <div class="row">
            <div class="col-12">
               <div class="row align-items-center">
                  <div class="col-lg-5 pe-lg-5 top_banner-left-part">
                     <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-5 col-7 position-relative" style="transform-style: preserve-3d;" data-tilt="" data-tilt-max="2" data-tilt-speed="400" data-tilt-perspective="2500" data-tilt-reverse="true">
                           <img src="{{asset('/public')}}/assets/img/fantasy-movie-app-development/shape-2.webp" class="lazy-image w-100" data-src="{{asset('/public')}}/assets/img/fantasy-movie-app-development/Get-A-Fantasy-Movie-Portal-Today.webp"alt="Get-A-Fantasy-Movie-Portal-Today" width="100" height="auto">  
                      </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-12">
                     <div class="row">
                        <div class="col-12">
                           <div class="row mx-0 pb-4">
                              <h2 class="d-none invisible">Get A Fantasy Movie Portal Today!</h2>
                              <div class="col-12 heading fs-md-14 fs-12 left pt-5"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Get A Fantasy <b> Movie Portal Today!</b></span></div>
                           </div>
                        </div>
                        <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-md-3 mt-0">IMG Global Infotech Pvt. Ltd. is the most experienced in the field of providing the best of customised solutions to its clients. Come and discuss your business idea today with us and see your business grow. Let’s discuss your Fantasy Movie Plans with us today and get the best in class services. Our experts are always ready to assist you in every possible manner.</div>
                        <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-md-3 mt-0">The craze for movies is at the peak every new weekend. With people rushing to theatres catch early shows and tickets, the madness for movies has caught the generation in its grip. Now join the crazies and get your business a Fantasy Movie Platform, the latest in the trend of fantasy sports and have huge round of competitions of Movie Leagues. Make everyone come together in the greatest round up of Fantasy Movie League. The only place on the internet where your movie insights can win you lots of rewards and goodies. Compete against friends or a league of movie lovers to win movie tickets, swag, and more, as the box office collection climbs, so do you. It's easy to play, hard to master, and all for free!</div>
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
            <h2 class="d-none invisible">Why Fantasy Movie League?</h2>
            <div class="col-12 heading fs-md-14 fs-12 center"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Why Fantasy <b> Movie League?</b></span></div>
            <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-md-3 mt-4 justify text-center">The craze for movies is at the peak every new weekend. With people rushing to theatres catch early shows and tickets, the madness for movies has caught the generation in its grip. Now join the crazies and get your business a Fantasy Movie Platform, the latest in the trend of fantasy sports and have huge round of competitions of Movie Leagues. Make everyone come together in the greatest round up of Fantasy Movie League. The only place on the internet where your movie insights can win you lots of rewards and goodies. Compete against friends or a league of movie lovers to win movie tickets, swag, and more, as the box office collection climbs, so do you. It's easy to play, hard to master, and all for free!
            </div>
            <div class="col-12 fw-l fs-md-16 fs-sm-15 fs-14 text-muted mt-md-3 mt-4 justify text-center">The Fantasy Movie League Portal Developed by us would become the hub for following among the fan circles of Movie Stars and Movie Themes.
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-9">
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Trailers and Sneak Peeks</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Trailers-and-Sneak-Peeks.webp" width="auto" height="42" alt="Trailers and Sneak Peeks"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">Trailers and Sneak Peeks</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Get Cashback and Other Rewards</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Get-Cashback-and-Other-Rewards.webp" width="auto" height="42" alt="Get Cashback and Other Rewards"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">Get Cashback and Other Rewards</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Earn Best Deals</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Earn-Best-Deals.webp" width="auto" height="42" alt="Earn Best Deals"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">Earn Best Deals</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Shop for Movies Merchandise</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Shop-for-Movies-Merchandise.webp" width="auto" height="42" alt="Shop for Movies Merchandise"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">Shop for Movies Merchandise</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Blogs</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Blogs.webp" width="auto" height="42" alt="Blogs"> <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Blogs</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">User Profile Management</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/User-Profile-Management.webp" width="auto" height="42" alt="User Profile Management"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">User Profile Management</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Gifts and Reward Distribution</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Gifts-and-Reward-Distribution.webp" width="auto" height="42" alt="Gifts and Reward Distribution"> <span class="fs-md-16 fs-sm-15 fs-14 fw-l">Gifts and Reward Distribution</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">User Reports</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/User-Reports.webp" width="auto" height="42" alt="User Reports"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">User Reports</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Scoring Management</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Scoring-Management.webp" width="auto" height="42"alt="Scoring Management"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">Scoring Management</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Ranking Management</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Ranking-Management.webp" width="auto" height="42" alt="Ranking Management"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">Ranking Management</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Collecting Fees in Secured Manner</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Collecting-Fees-in-Secured-Manner.webp" width="auto" height="42" alt="Collecting Fees in Secured Manner"> <span class="fs-md-15 fs-sm-15 fs-14 fw-l">Collecting Fees in Secured Manner</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-2">
                     <div class="row mx-0">
                        <h3 class="d-none invisible">Detailed Timely Reports</h3>
                        <div class="col-12 p-2 fw-l border border-2 border-muted bg-white fs-14 justify-content-center d-grid">
                           <img class=" pb-2 h-50px mx-auto" src="{{GETFOLDERPATH()}}/Detailed-Timely-Reports.webp" width="auto" height="42" alt="Detailed Timely Reports"> <span class="fs-md-15 fs-sm-15 fs-14 fw-500">Detailed Timely Reports</span>
                        </div>
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
                    <h2 class="col-12 heading fs-md-14 fs-12"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Our <b>Portfolio</b> </span></h2>
                </div>
            </div>

             <div class="row align-items-center justify-content-center owl-portfolio-slider owl-carousel mx-0">
                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                       <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1" 
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/beliver11.webp" alt="beliver11"  >
                         <div class="portfolioBoxContent">
                              <h4>Beliver11</h4>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                      <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/myfab11.webp"  alt="MyFab11">
                         <div class="portfolioBoxContent">
                            <h4>MyFab11 App </h4>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>

              
                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox ">
                    <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/royal11-project.webp"  alt="royal11-project">
                        <div class="portfolioBoxContent">
                            <h4>Royal 11 </h4>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="portfolioBox">
                      <img src="{{asset('/public')}}/assets/img/portfolio-section/blank-image.webp" class="lazy-image img-fluid w-100 rounded-2 border border-1 p-1"
                       data-src="{{asset('/public')}}/assets/img/portfolio-section/My-Pitch.webp" alt="My-Pitch">
                             <div class="portfolioBoxContent">
                            <h4>My Pitch </h4>
                            <p>Fantasy Sports App</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

     <!-- get porposal section -->
     <div class="container-fluid overflow-hidden get-porposal-section position-relative">
      <div class="container zi-2 position-relative py-5">
         <div class="row">
            <div class="col-12">
               <div class="row mx-0 pb-4">
                  <h2 class="d-none invisible">Get in touch with our experts and discuss how we can implement customized solution to improve your business growth.</h2>
                  <div class="col-12 heading fs-md-14 fs-12 center text-white"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Get in touch with our experts and discuss how <br> <b> we can implement customized solution to improve your business growth. </b></span></div>
               </div>
            </div>
            <div class="col-12 pt-3 text-center">
               <a href="{{asset('/contact-us.php')}}" class="btn btn-theme1 fs-14 fw-m py-2 px-4" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                  <span class="d-block"><span>Get A Proposal</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
               </a>
            </div>
         </div>
      </div>
   </div>

   
    
    <!-- latest blog section -->
    <div class="container-fluid insights position-relative overflow-hidden">
        <div class="container position-relative zi-1 py-md-5 py-4">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <h3 class="d-none invisible">Latest Blogs</h3>
                        <div class="col heading fs-md-14 fs-12 left mb-sm-0 mb-3"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Latest <b> Blogs</b></span></div>
                        <div class="col-auto d-sm-block d-none">
                            <a href="{{asset('/blog')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-m py-2 px-4">
                                <span class="d-block"><span>View All Blogs</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                            </a>
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
                                                <div class="row blog_slider owl-carousel">
                                                   <a href="https://www.imgglobalinfotech.com/blog/custom-software-development-companies" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/custom-software-development-companies.webp" class="img-fluid" alt="Top Custom Software Development Companies" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">Jun 20, 2023</span> 
                                                                   <span> By Dipti Singhal </span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">Top Custom Software Development Companies</div>
                                                           </div>
                                                        </a>

                                                       <a href="https://www.imgglobalinfotech.com/blog/how-to-develop-hotel-booking-app-cost-features" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/How-To-Develop-Hotel-Booking-App-Cost-Features-2023.webp" class="img-fluid" alt="How To Develop Hotel Booking App: Cost, Features (2023)" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">Jun 07, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">How To Develop Hotel Booking App: Cost, Features (2023)</div>
                                                           </div>
                                                        </a>

                                                     <a href="https://www.imgglobalinfotech.com/blog/10-innovative-healthcare-business-ideas-for-startups-and-aspiring-entrepreneurs" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Innovative-Healthcare-Business-Ideas-for-Startups-and-Aspiring-Entrepreneurs.webp" class="img-fluid" alt="10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">Jun 05, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">10 Innovative Healthcare Business Ideas For Startups And Aspiring Entrepreneurs</div>
                                                           </div>
                                                        </a> 
                                                     
                                                      <a href="https://www.imgglobalinfotech.com/blog/web-development-services-outsourcing-all-you-need-to-know" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Web-Development-Services-Outsourcing-All-you-Need-to-Know.avif" class="img-fluid" alt="Web Development Services Outsourcing: All You Need To Know" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 30, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">Web Development Services Outsourcing: All You Need To Know</div>
                                                           </div>
                                                        </a> 

                                                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-a-flutter-app" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/How-Much-Does-It-Cost-To-Develop-A-Flutter-App.avif" class="img-fluid" alt="How Much Does It Cost To Develop A Flutter App" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 25, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">How Much Does It Cost To Develop A Flutter App?</div>
                                                           </div>
                                                        </a> 


                                                     <a href="https://www.imgglobalinfotech.com/blog/doctor-on-demand-mobile-application-development-cost-and-features" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Doctor-On-Demand-Mobile-Application-Development-Overall-Cost-and-Features.webp" class="img-fluid" alt="Doctor On-Demand Mobile Application Development- Overall Cost And Features" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 23, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">Doctor On-Demand Mobile Application Development- Overall Cost And Features</div>
                                                           </div>
                                                     </a> 

                                                     <a href="https://www.imgglobalinfotech.com/blog/10-best-real-estate-application-for-buyers-sellers" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/10-Best-Real-Estate-Application-For-Buyers-Sellers-in-2023.webp" class="img-fluid" alt="10 Best Real Estate Application For Buyers & Sellers In 2023" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 19, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">10 Best Real Estate Application For Buyers & Sellers In 2023</div>
                                                           </div>
                                                     </a> 

                                                    <a href="https://www.imgglobalinfotech.com/blog/fuel-delivery-mobile-app-development" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/On-Demand-Fuel-Delivery-Mobile-App-Development-in-2023.webp" class="img-fluid" alt="On-Demand Fuel Delivery Mobile App Development In 2023" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 16, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">On-Demand Fuel Delivery Mobile App Development In 2023</div>
                                                           </div>
                                                     </a> 

                                                <a href="https://www.imgglobalinfotech.com/blog/top-15-celebrity-look-alike-apps" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/Top-15-Celebrity-Look-Alike-Apps-2023.webp" class="img-fluid" alt="Top 15 Celebrity Look-Alike Apps 2023: Features, App Ideas, & Development" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 10, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">Top 15 Celebrity Look-Alike Apps 2023: Features, App Ideas, & Development</div>
                                                           </div>
                                                     </a> 



                                                    <a href="https://www.imgglobalinfotech.com/blog/the-ultimate-guide-to-food-delivery-app-development" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/The-Ultimate-Guide-to-Food-Delivery-App-Development-Right-Tech-Stack-and-Features.webp" class="img-fluid" alt="The Ultimate Guide To Food Delivery App Development" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 09, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">The Ultimate Guide To Food Delivery App Development: [Right Tech Stack And Features]</div>
                                                           </div>
                                                     </a> 

                                                  <a href="https://www.imgglobalinfotech.com/blog/how-to-build-a-mobile-app-from-scratch" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                           <div class="row mx-1 py-3 bg-white">
                                                               <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto" 
                                                                data-src="{{asset('/public')}}/assets/img/blog-section/step-By-Step-Process-on-How-to-Build-a-Mobile-App-from-Scratch.png" class="img-fluid" alt="Step By Step Process on How to Build a Mobile App from Scratch" width="302" height="170" >
                                                                </div>
                                                               <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                   <span class="text-theme3 me-2">May 03, 2023</span> 
                                                                   <span> By Dipti Singhal</span>
                                                               </div>
                                                               <div class="col-12 fs-14 fw-l lanth-text lanth-text">Step By Step Process On How To Build A Mobile App From Scratch </div>
                                                           </div>
                                                     </a> 
                                                    <a href="https://www.imgglobalinfotech.com/blog/time-and-cost-to-develop-fantasy-cricket-app-like-myteam11-and-howzat" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                            <div class="row mx-1 py-3 bg-white">
                                                                <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                                 <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                                 data-src="{{asset('/public')}}/assets/img/blog-section/time-and-Cost-to-Develop-Fantasy-Mobile-App-like-Myteam11-and-Howzatt.webp" class="img-fluid" alt="Time and Cost to Develop Fantasy Mobile App like Myteam11 and Howzatt" width="298" height="170" >
                                                                 </div>
                                                                <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                    <span class="text-theme3 me-2">Apr 21, 2023</span> 
                                                                    <span> By Dipti Singhal</span>
                                                                </div>
                                                                <div class="col-12 fs-14 fw-l lanth-text lanth-text">Time and Cost to Develop Fantasy Cricket App like Myteam11 and Howzat </div>
                                                            </div>
                                                      </a> 
                                                    <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-app-development-like-my11circle-and-myfab11" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                       <div class="row mx-1 py-3 bg-white">
                                                          <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                          <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                          data-src="{{asset('/public')}}/assets/img/blog-section/fantasy-Cricket-App-Development-like-Mycircle11-and-Myfab11.webp" class="img-fluid" alt="Fantasy Cricket App Development like Mycircle11 and Myfab11" width="298" height="170" >
                                                          </div>
                                                          <div class="col-12 fs-14 text-muted fw-m py-2">
                                                             <span class="text-theme3 me-2">Apr 12, 2023</span> 
                                                             <span> By Dipti Singhal</span>
                                                          </div>
                                                          <div class="col-12 fs-14 fw-l lanth-text lanth-text">Fantasy Cricket App Development like My11Circle and Myfab11
                                                          </div>
                                                       </div>
                                                    </a>  

                                                     <a href="https://www.imgglobalinfotech.com/blog/readymade-fantasy-cricket-app-development-cost" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white rounded">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                             <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                             data-src="{{asset('/public')}}/assets/img/blog-section/readymade-Fantasy-Cricket-App-Development-Cost-A-Complete-Guide.webp" class="img-fluid" alt="Readymade Fantasy Cricket App Development Cost A Complete Guide" width="298" height="170" >
                                                             </div>
                                                            <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                <span class="text-theme3 me-2">Apr 03, 2023</span> 
                                                                <span> By Dipti Singhal</span>
                                                            </div>
                                                            <div class="col-12 fs-14 fw-l lanth-text lanth-text">Readymade Fantasy Cricket App Development Cost- [A Complete Guide]
                                                            </div>
                                                        </div>
                                                    </a>

                                                  <a href="https://www.imgglobalinfotech.com/blog/fantasy-cricket-app-development-for-ipl-2023" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                                        <div class="row mx-1 py-3 bg-white rounded">
                                                            <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                                             <img src="{{asset('/public')}}/assets/img/blog-section/blog-shape.webp" class="lazy-image h-auto"  
                                                             data-src="{{asset('/public')}}/assets/img/blog-section/Fantasy-Cricket-App-Development-for-IPL-2023.webp" class="img-fluid" alt="Fantasy Cricket App Development For IPL 2023" width="298" height="170" >
                                                             </div>
                                                            <div class="col-12 fs-14 text-muted fw-m py-2">
                                                                <span class="text-theme3 me-2">Feb 21, 2023</span> 
                                                                <span> By Dipti Singhal</span>
                                                            </div>
                                                            <div class="col-12 fs-14 fw-l lanth-text lanth-text">Fantasy Cricket App Development For IPL 2023
                                                            </div>
                                                        </div>
                                                    </a>
                                               </div>
                                            </div> 
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="col-12 d-sm-none d-block pt-4">
                    <a href="{{asset('/blog')}}" class="btn btn-theme3 fs-xxl-13 fs-11 fw-m py-2 px-4 w-100">
                        <span class="d-block"><span>View All Blogs</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                    </a>
                </div>
				
				 <div id="contactWithUss"></div>
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
               <h5 class="modal-title fw-m" id="exampleModalLabel">
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
                                                <input type="tel" name="tel" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 border border-left"  id="phoneNumber" placeholder="Enter Phone Number" required>
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
                                                <option value="Mobile App Development"  selected="selected">Mobile App Development</option>
                                                <option value="E-commerce Development">E-commerce Development</option>
                                                <option value="MLM Software Development">MLM Software Development</option>
                                                <option value="Website Design">Website Design</option>
                                                <option value="Web Portal Development">Web Portal Development</option>
                                                <option value="Custom ERP Development">Custom ERP Development</option>
                                                <option value="Hire Dedicated Developer">Hire Dedicated Developer</option>
                                                <option value="SEO/Social Media Marketing">SEO/Social Media Marketing</option>
                                                <option value="Other Servicest">Other Services</option>
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
<script src="{{asset('/public')}}/assets/js/fantasy-movie-app-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-sports-app-development.min.js"></script>
<script src="{{asset('/public')}}/assets/js/fantasy-cricket-app-development.min.js"></script>



@endpush