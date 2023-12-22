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


{{-- key features section start  --}}

<div class="keyfeature relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative lg:py-20 md:py-16 py-10 mt-40  ">
        <div class="lg:w-4/5 w-full mx-auto">
            <div class="font-bold text-[#111457] lg:text-4xl md:text-3xl text-2xl text-center ">Key Features of On-Demand Food Delivery App</div>
            <div class="text-black font-light text-center sm:text-base text-sm pt-5 leading-6">Escalate your  food delivery & Ordering business to new heights with our fully-featured white-label <span class="font-semibold text-black text-base">on demand restaurant app development solutions.</span>  Our best-in-class certified food app developers develop highly interfeatures for your online food delivery application.</div>
        </div>
    </div>


    <div class="bg-gray-100 w-full py-3 relative">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="w-full">
                <ul class="flex items-center sm:justify-center justify-start gap-9 flex-nowrap w-full whitespace-nowrap overflow-x-auto">
                    <li>
                        <a href="#customerApp" class="text-decoration-none py-1 sm:text-base text-sm flex items-center font-semibold text-nowrap text-[#111457] relative after:absolute  after:left-0 after:bottom-[-12px] after:w-full after:h-1 after:bg-[#111457] ">Customer App</a>
                    </li>
                    <li>
                        <a href="#driverApp" class="text-decoration-none py-1 sm:text-base text-sm flex items-center font-semibold text-nowrap text-[#111457] relative duration-300 after:absolute  after:left-0 after:bottom-[-12px] after:w-0 after:h-1 after:duration-300 after:bg-[#111457] hover:after:w-full">Driver App</a>
                    </li>
                    <li>
                        <a href="#restaurantApp" class="text-decoration-none py-1 sm:text-base text-sm flex items-center font-semibold text-nowrap text-[#111457] relative duration-300 after:absolute  after:left-0 after:bottom-[-12px] after:w-0 after:h-1 after:duration-300 after:bg-[#111457] hover:after:w-full">Restaurant App</a>
                    </li>
                    <li>
                        <a href="#adminPanel" class="text-decoration-none py-1 sm:text-base text-sm flex items-center font-semibold text-nowrap text-[#111457] relative duration-300 after:absolute  after:left-0 after:bottom-[-12px] after:w-0 after:h-1 after:duration-300 after:bg-[#111457] hover:after:w-full">Admin Panel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative md:py-16 sm:py-14 py-8 overflow-hidden " id="customerApp">
        <div class="lg:w-4/5 w-full mx-auto">
            <div class="font-semibold text-[#111457] text-2xl text-center " >Customer App</div>
            <div class="text-black font-light text-center text-base pt-5 leading-6">A Customer Application is designed with ease to help the customers place their food delivery order by browsing multiple restaurants and its menu.</div>
        </div>
        <div class="flex flex-wrap mt-10">
            <div class="lg:w-2/5 w-full">
                <div class="swiper keyfeatureswiper lg:mb-0 mb-14 h-full">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination d-flex align-items-center justify-center "></div>
                </div>
            </div>
            <div class="lg:w-3/5 w-full">
                <div class="flex flex-wrap ">
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">1</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Nearby Restaurants</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Customers can search for and view all the nearby restaurants in their locality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">2</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Restaurant Menu</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Users can view the menus of various restaurants, compare, and choose the best.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">3</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Push Notifications</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Customers get notifications of order confirmations, cancellations, new offers, and discounts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">4</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Coupon Management</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Customers can view and use discount coupons and codes using the app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">5</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">inApp Payments</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Users can make online payments using the food delivery app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">6</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Rating & Reviews</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Customers can give feedback, reviews, and ratings based on service, pricing, and quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">7</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Social Media Login</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Users can connect the food delivery app with their social media accounts for sharing their experiences, food images, and reviews.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">8</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Order Tracking </div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Users can track their food orders using a real-time tracking feature. Users can track the exact location of their orders and check how much time a driver will take to reach them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-y-0 overflow-hidden hidden w-full min-w-[1360px] bg-[url('../img/beams1.webp?id=31a5defd3b15daed788cf2bd1997fc88')] bg-[length:2000px_100%] bg-[position:calc(50%_+_220px)_-50px] bg-no-repeat lg:block pointer-events-none"></div>

    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative md:pb-16 sm:pb-14 pb-8 overflow-hidden" id="driverApp">
        <div class="lg:w-4/5 w-full mx-auto">
            <div class="font-semibold text-[#111457] text-2xl text-center " >Driver App</div>
            <div class="text-black font-light text-center text-base pt-5 leading-6">A Driver Application is designed with great features and user-friendliness to accept or reject the restaurant delivery request as per the availability.</div>
        </div>
        <div class="flex flex-wrap mt-10">
            <div class="lg:w-3/5 w-full">
                <div class="flex flex-wrap ">
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">1</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Profile</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers, after login, can make their profile on the app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">2</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Manage Orders</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers receive orders on this app and can manage multiple deliveries using the app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">3</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Order History</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers can save and manage all the information of food orders and deliveries on the app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">4</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Realtime Tracking</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers can track real-time customer locations, get route directions on maps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">5</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Realtime Requests</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers get notifications of the orders placed by customers on the app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">6</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Availability Settings</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers can choose to go offline or set their availability during different times in a day.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">7</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Delivery Information</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers receive information on the locations of various food deliveries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">8</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Payment History </div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers can track and manage the payments for the day on the app.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-2/5 w-full">
                <div class="swiper keyfeatureswiper lg:mb-0 mb-20 h-full">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination d-flex align-items-center justify-center "></div>
                </div>
            </div>
        </div>
        <div class="absolute overflow-hidden top-0 inset-x-0 bg-top  bg-[url('../img/beams1.webp?id=31a5defd3b15daed788cf2bd1997fc88')] h-full w-full bg-no-repeat GridLockup_beams-0___8Vns xl:top-8 bg-"></div>
    
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative md:pb-16 sm:pb-14 pb-8 overflow-hidden" id="restaurantApp">
        <div class="lg:w-4/5 w-full mx-auto">
            <div class="font-semibold text-[#111457] text-2xl text-center " >Restaurant App</div>
            <div class="text-black font-light text-center text-base pt-5 leading-6">A restaurant partner app helps to accept or reject the food delivery orders placed by the customers. It also helps in customizing the menu items as per availability.</div>
        </div>
        <div class="flex flex-wrap mt-10">
            <div class="lg:w-2/5 w-full">
                <div class="swiper keyfeatureswiper lg:mb-0 mb-14 h-full">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination d-flex align-items-center justify-center "></div>
                </div>
            </div>

            <div class="lg:w-3/5 w-full">
                <div class="flex flex-wrap ">
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">1</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Profile</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Allow restaurant owners to register and create a profile including restaurant address and contact details, a complete menu with prices, and delivery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">2</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Menu Management</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurants can create a new menu or customize menus based on customer food preferences and availability.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">3</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Manage Orders</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurants can manage all the orders in one place, can get a complete view of the orders, including ongoing, dispatched, pickups, and scheduled ones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">4</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Real-time Tracking of Driver</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurants can track the real-time location of drivers with their real-time location. They can also check the total delivery time and routes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">5</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Manage Offers & Discounts</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurants can create new discount deals and offers or customize the current ones to benefit from ordering food.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">6</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Payment History</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurants can manage all the orders in one place, can get a complete view of the orders, including ongoing, dispatched, pickups, and scheduled ones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">7</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Push Notifications</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurants get notifications about the new order, status of received or shipped orders, the payment received online, and other important updates.</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">8</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Payment History </div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Drivers can track and manage the payments for the day on the app.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        
        </div>
        <div class="absolute overflow-hidden top-0 inset-x-0 bg-top  bg-[url('../img/beams1.webp?id=31a5defd3b15daed788cf2bd1997fc88')] h-full w-full bg-no-repeat GridLockup_beams-0___8Vns xl:top-8 bg-"></div>

    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative md:pb-16 sm:pb-14 pb-8 overflow-hidden" id="adminPanel">
        <div class="lg:w-4/5 w-full mx-auto">
            <div class="font-semibold text-[#111457] text-2xl text-center " >Admin Panel</div>
            <div class="text-black font-light text-center text-base pt-5 leading-6">The Admin Dashboard helps restaurant owners to manage the complete delivery process.</div>
        </div>
        <div class="flex flex-wrap mt-10">
            <div class="lg:w-3/5 w-full">
                <div class="flex flex-wrap ">
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">1</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Customer Management</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">The dashboard includes the details of customers, cuisines, restaurants they prefer, and the orders they place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">2</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Restaurants Management</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Manages details of all the restaurants by adding, updating, and removing restaurants from the list.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">3</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Driver Management</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">It includes the details of all the drivers, their profile information, license, and other details.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">4</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Payment & Commission Management</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurant owners can set payments and manage commission rates directly from the panel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">5</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Menu & Timing</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Restaurants can create different menus for different times and manage them on the admin panel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">6</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Delivery zone Management</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">The restaurant owners can also track and manage all the food deliveries on the panel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">7</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Analyzing & Reporting</div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">Get real-time insights into reports and other information to identify the growth and expansion opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div class="flex sm:p-3 p-2">
                            <div class="p-0.5">
                                <div class="flex items-center justify-center bg-yellow-400 rounded-full h-7 w-7 text-black text-sm">8</div>
                            </div>
                            <div class="ml-6">
                                <div class="sm:text-xl text-lg font-semibold leading-6 text-[#111457]">Promo codes </div>
                                <p class="mt-2 sm:text-base text-sm leading-6 text-black line-clamp-4 text-ellipsis">The promo codes to add in cash deliveries, offers, and discounts can all be managed through this panel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-2/5 w-full">
                <div class="swiper keyfeatureswiper lg:mb-0 mb-14 h-full">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mobileImg sm:w-64 w-52 sm:h-auto h-96 mx-auto">
                                <img src="{{asset('public'.mix('/tailwind/img/fooddelivery/food-cus-app-one.png'))}}" alt="thanku" class="img-fluid h-full w-full ">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination d-flex align-items-center justify-center "></div>
                </div>
            </div>
        </div>
        <div class="absolute overflow-hidden top-0 inset-x-0 bg-top  bg-[url('../img/beams1.webp?id=31a5defd3b15daed788cf2bd1997fc88')] h-full w-full bg-no-repeat GridLockup_beams-0___8Vns xl:top-8 bg-"></div>

    </div>

</div>

{{-- key feature section end  --}}

{{-- faq section start  --}}

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
        <p class="mt-4 text-center max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
            <span class="font-normal">Frequently Asked </span> 
            <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent">Questions</span>
        </p>

        <div class="lg:w-4/5 w-full mx-auto mt-16">
        
            <div class="relative  flex flex-col ">
                <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmCompany1">
                <label for="mmCompany1" class="flex items-center gap-x-[2px] bg-gradient-to-r from-black/90 via-yellow-900 to-yellow-900 sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-b-4xl py-4 px-6 after:absolute sm:after:h-5 sm:after:w-5 after:w-4 after:h-4 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:bg-[url('../img/fooddelivery/Down.svg')] after:bg-no-repeat after:bg-center after:bg-contain after:peer-checked/mm:rotate-180 peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-amber-950 peer-checked/mm:via-red-900 peer-checked/mm:to-amber-900 peer-checked/mm:w-full ">
                    What is the Difference Between Cross-Platform and Native App Development ?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-amber-100/50 to-amber-100/50 p-6 peer-checked/mm:block hidden">
                    <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                        <div class="w-full text-xs xl:text-sm pt-8">
                            <div class="flex items-center gap-x-3 py-2 relative">
                                <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                                    Cross-platform app development refers to development that runs on various platforms,
                                    like iOS and Android. It's built using a single codebase that can be used across various
                                    platforms, despite having to write codes separately for every platform. Native app
                                    development refers to app development that is specifically built to run on a single
                                    platform, like Android or iOS. Such apps are written in specific programming languages
                                    and frameworks for that particular platform, like Java or Kotlin for Android.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative  flex flex-col mt-4">
                <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmCompany2">
                <label for="mmCompany2" class="flex items-center gap-x-[2px] bg-gradient-to-r from-black/90 via-yellow-900 to-yellow-900 sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-full py-4 px-6   after:absolute sm:after:h-5 sm:after:w-5 after:w-4 after:h-4 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:bg-[url('../img/fooddelivery/Down.svg')] after:bg-no-repeat after:bg-center after:bg-contain after:peer-checked/mm:rotate-180 peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-amber-950 peer-checked/mm:via-red-900 peer-checked/mm:to-amber-900 peer-checked/mm:w-full">
                    What are the prerequisites for a mobile app development project ?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-amber-100/50 to-amber-100/50 p-6 peer-checked/mm:block hidden">
                    <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                        <div class="w-full text-xs xl:text-sm pt-8">
                            <div class="flex items-center gap-x-3 py-2 relative">
                                <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                                    Well, it relies on project needs, but some common prerequisites are:
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
                </div>
            </div>

            <div class="relative  flex flex-col mt-4">
                <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmCompany3">
                <label for="mmCompany3" class="flex items-center gap-x-[2px] bg-gradient-to-r from-black/90 via-yellow-900 to-yellow-900 sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-full py-4 px-6   after:absolute sm:after:h-5 sm:after:w-5 after:w-4 after:h-4 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:bg-[url('../img/fooddelivery/Down.svg')] after:bg-no-repeat after:bg-center after:bg-contain after:peer-checked/mm:rotate-180 peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-amber-950 peer-checked/mm:via-red-900 peer-checked/mm:to-amber-900 peer-checked/mm:w-full">
                    How much does it cost to develop a mobile app?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-amber-100/50 to-amber-100/50 p-6 peer-checked/mm:block hidden">
                    <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                        <div class="w-full text-xs xl:text-sm pt-8">
                            <div class="flex items-center gap-x-3 py-2 relative">
                                <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                                    The cost of mobile app development, on average, may start from $10,000 and go up
                                    depending on the app complexity, type of app, number of features you want to include,
                                    and more factors.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative  flex flex-col mt-4">
                <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmCompany4">
                <label for="mmCompany4" class="flex items-center gap-x-[2px] bg-gradient-to-r from-black/90 via-yellow-900 to-yellow-900 sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-full py-4 px-6   after:absolute sm:after:h-5 sm:after:w-5 after:w-4 after:h-4 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:bg-[url('../img/fooddelivery/Down.svg')] after:bg-no-repeat after:bg-center after:bg-contain after:peer-checked/mm:rotate-180 peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-amber-950 peer-checked/mm:via-red-900 peer-checked/mm:to-amber-900 peer-checked/mm:w-full">
                    How long will it take to build and launch my app ?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-amber-100/50 to-amber-100/50 p-6 peer-checked/mm:block hidden">
                    <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                        <div class="w-full text-xs xl:text-sm pt-8">
                            <div class="flex items-center gap-x-3 py-2 relative">
                                <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                                    The time to develop and launch a mobile app may vary depending on the app's
                                    complexity, development team size, and resources available to the team.

                                    A basic mobile app holding minimal functionality and features may take a few
                                    months, while a complex app may take a year or even more.
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative  flex flex-col mt-4">
                <input class="peer/mm hidden" type="checkbox" name="mmMenu" id="mmCompany5">
                <label for="mmCompany5" class="flex items-center gap-x-[2px] bg-gradient-to-r from-black/90 via-yellow-900 to-yellow-900 sm:text-base text-sm capitalize font-medium relative z-10 text-white bg-opacity80 rounded-t-4xl peer-checked/mm:rounded-full py-4 px-6  after:absolute sm:after:h-5 sm:after:w-5 after:w-4 after:h-4 sm:after:right-7 after:right-5 sm:after:top-4 after:top-5 after:bg-[url('../img/fooddelivery/Down.svg')] after:bg-no-repeat after:bg-center after:bg-contain after:peer-checked/mm:rotate-180 peer-checked/mm:bg-gradient-to-r peer-checked/mm:from-amber-950 peer-checked/mm:via-red-900 peer-checked/mm:to-amber-900 peer-checked/mm:w-full ">
                    Do you provide ongoing support, maintenance, and updates ?
                </label>
                <div class="w-fullshadow-md mt-[-43px] rounded-3xl border border-solid border-amber-200 bg-gradient-to-r from-gray-200 via-amber-100/50 to-amber-100/50 p-6 peer-checked/mm:block hidden">
                    <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                        <div class="w-full text-xs xl:text-sm pt-8">
                            <div class="flex items-center gap-x-3 py-2 relative">
                                <div class="flex-auto text-gray-900 sm:text-sm text-xs">
                                    Yes, we offer ongoing support, maintenance, and updates post-deployment of your
                                        app. Such a service will help to keep your app up-to-date with the latest
                                        security updates and technology and resolve the issues, if any, on time.
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- faq section end  --}}

{{-- privers work section start  --}}

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
    <div class="swiper portfolioSwiper w-full swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-watch-progress">
        <div class="swiper-wrapper flex items-center py-5" id="swiper-wrapper-322bf19bcd9678f9" aria-live="off" style="transition-duration: 2000ms; transform: translate3d(-675.5px, 0px, 0px);">
            
            
            
            
            
            
        <div class="swiper-slide rounded-2xl overflow-hidden group/pf" role="group" aria-label="4 / 6" style="width: 356px; transition-duration: 2000ms; transform: translate3d(0px, 0px, -325.281px) rotateX(0deg) rotateY(162.64deg) scale(1); z-index: -2; margin-right: 30px;" data-swiper-slide-index="3">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]" loading="lazy" width="349" height="436" srcset="
                                https://staging.imgglobalinfotech.com/public/tailwind/img/mobile/ipay.webp?id=d1642dde08b4258b5571e36b5bc552fa 480w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/tablet/ipay.webp?id=3f3274922bee595e6b26a8448ddae87e 800w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/ipay.webp?id=13970705c97b26fc7812bd440aa6e314 1200w
                            " sizes="(max-width: 600px) 480px, (max-width: 1024px) 800px, 1200px" src="https://staging.imgglobalinfotech.com/public/tailwind/img/ipay.webp?id=13970705c97b26fc7812bd440aa6e314" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/ipay.webp?id=13970705c97b26fc7812bd440aa6e314" alt="iPay project">
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-indigo-900/70 before:to-indigo-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">iPay</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Recharge App</div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 3.25281; transition-duration: 2000ms;"></div><div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 2000ms;"></div></div><div class="swiper-slide rounded-2xl overflow-hidden group/pf swiper-slide-visible" role="group" aria-label="5 / 6" style="width: 356px; transition-duration: 2000ms; transform: translate3d(0px, 0px, -216.854px) rotateX(0deg) rotateY(108.427deg) scale(1); z-index: -1; margin-right: 30px;" data-swiper-slide-index="4">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]" loading="lazy" width="349" height="436" srcset="
                                https://staging.imgglobalinfotech.com/public/tailwind/img/mobile/destist-online.webp?id=64b7e503694355645d16a4853cbdcebd 480w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/tablet/destist-online.webp?id=a1fb4ac8fb74a8033a83bce15c51e851 800w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/destist-online.webp?id=51e58fa7feb899b10d30fcfed4fc0578 1200w
                            " sizes="(max-width: 600px) 480px, (max-width: 1024px) 800px, 1200px" src="https://staging.imgglobalinfotech.com/public/tailwind/img/destist-online.webp?id=51e58fa7feb899b10d30fcfed4fc0578" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/destist-online.webp?id=51e58fa7feb899b10d30fcfed4fc0578" alt="Dentist Online">
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-cyan-900/70 before:to-cyan-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">Dentist Online</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Health App</div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 2.16854; transition-duration: 2000ms;"></div><div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 2000ms;"></div></div><div class="swiper-slide rounded-2xl overflow-hidden group/pf swiper-slide-visible swiper-slide-fully-visible swiper-slide-prev" role="group" aria-label="6 / 6" style="width: 356px; transition-duration: 2000ms; transform: translate3d(0px, 0px, -108.427px) rotateX(0deg) rotateY(54.2135deg) scale(1); z-index: 0; margin-right: 30px;" data-swiper-slide-index="5">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]" loading="lazy" width="349" height="436" srcset="
                                https://staging.imgglobalinfotech.com/public/tailwind/img/mobile/EcoCosmo-Project.webp?id=610dd925ac23f5ad02f26d896a0e5c6d 480w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/tablet/EcoCosmo-Project.webp?id=52457353e7fd6aa4ddaa1ccfc0e41be5 800w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/EcoCosmo-Project.webp?id=7431cec330f7bf516a0d6c290904a6a1 1200w
                            " sizes="(max-width: 600px) 480px, (max-width: 1024px) 800px, 1200px" src="https://staging.imgglobalinfotech.com/public/tailwind/img/EcoCosmo-Project.webp?id=7431cec330f7bf516a0d6c290904a6a1" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/EcoCosmo-Project.webp?id=7431cec330f7bf516a0d6c290904a6a1" alt="EcoCosmo Project">
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-emerald-900/70 before:to-emerald-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">EcoCosmo</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Tracking App</div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 1.08427; transition-duration: 2000ms;"></div><div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 2000ms;"></div></div><div class="swiper-slide rounded-2xl overflow-hidden group/pf swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" role="group" aria-label="1 / 6" style="width: 356px; transition-duration: 2000ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 1; margin-right: 30px;" data-swiper-slide-index="0">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]" loading="lazy" width="349" height="436" srcset="
                                https://staging.imgglobalinfotech.com/public/tailwind/img/mobile/myfab11.webp?id=65492af8c5dd7fe68f20b28602c5df7f 480w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/tablet/myfab11.webp?id=2e6c970d62124f3ba64f641fda61fe99 800w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/myfab11.webp?id=75c611690cd1d8339fc07a75fde6e023 1200w
                            " sizes="(max-width: 600px) 480px, (max-width: 1024px) 800px, 1200px" src="https://staging.imgglobalinfotech.com/public/tailwind/img/myfab11.webp?id=75c611690cd1d8339fc07a75fde6e023" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/myfab11.webp?id=75c611690cd1d8339fc07a75fde6e023" alt="MyFab11 App">
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-green-900/70 before:to-green-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">MyFab11 App</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Fantasy Sports App</div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 2000ms;"></div><div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 2000ms;"></div></div><div class="swiper-slide rounded-2xl overflow-hidden group/pf swiper-slide-visible swiper-slide-fully-visible swiper-slide-next" role="group" aria-label="2 / 6" style="width: 356px; transition-duration: 2000ms; transform: translate3d(0px, 0px, -108.427px) rotateX(0deg) rotateY(-54.2135deg) scale(1); z-index: 0; margin-right: 30px;" data-swiper-slide-index="1">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]" loading="lazy" width="349" height="436" srcset="
                                https://staging.imgglobalinfotech.com/public/tailwind/img/mobile/Health-app.webp?id=70824f101015709d73b9b9beb4e97a21 480w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/tablet/Health-app.webp?id=c5a3f706d3f324d58f95e0db65e4aa14 800w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/Health-app.webp?id=c922679f73474c30f1df7ec0921ec1ab 1200w
                            " sizes="(max-width: 600px) 480px, (max-width: 1024px) 800px, 1200px" src="https://staging.imgglobalinfotech.com/public/tailwind/img/Health-app.webp?id=c922679f73474c30f1df7ec0921ec1ab" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/Health-app.webp?id=c922679f73474c30f1df7ec0921ec1ab" alt="I KNOW">
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-fuchsia-900/70 before:to-fuchsia-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">I-KNOW</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Health App</div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 2000ms;"></div><div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 1.08427; transition-duration: 2000ms;"></div></div><div class="swiper-slide rounded-2xl overflow-hidden group/pf swiper-slide-visible" role="group" aria-label="3 / 6" style="width: 356px; transition-duration: 2000ms; transform: translate3d(0px, 0px, -216.854px) rotateX(0deg) rotateY(-108.427deg) scale(1); z-index: -1; margin-right: 30px;" data-swiper-slide-index="2">
                <div class="p-1 bg-gray-700 relative w-full rounded-2xl overflow-hidden">
                    <div class="overflow-hidden rounded-xl">
                        <img class="w-full aspect-[4/5] z-0 group-hover/pf:scale-[1.1] duration-[3000ms]" loading="lazy" width="349" height="436" srcset="
                                https://staging.imgglobalinfotech.com/public/tailwind/img/mobile/now-vue.webp?id=dca8647245aad92f1c001e86de7f2d58 480w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/tablet/now-vue.webp?id=1635a56b01833a44ad5860a5001fa698 800w,
                                https://staging.imgglobalinfotech.com/public/tailwind/img/now-vue.webp?id=433006973c113a4ed5743c3928febaa1 1200w
                            " sizes="(max-width: 600px) 480px, (max-width: 1024px) 800px, 1200px" src="https://staging.imgglobalinfotech.com/public/tailwind/img/now-vue.webp?id=433006973c113a4ed5743c3928febaa1" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/now-vue.webp?id=433006973c113a4ed5743c3928febaa1" alt="Now Vue">
                    </div>
                    <div class="mt-10 flex rounded-xl rounded-t-none items-center sm:justify-center absolute inset-1 top-auto z-[1] before:absolute before:inset-3 before:z-[1] before:bg-gradient-to-t before:from-amber-900/70 before:to-amber-900/70 before:backdrop-blur-xl before:rounded-xl py-8">
                        <div class="w-full relative z-[3] text-center">
                            <div class="text-base font-medium leading-6 tracking-tight">Now Vue</div>
                            <div class="mt-1 text-sm md:text-sm opacity-80">Guest Check In App</div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide-shadow-left swiper-slide-shadow-coverflow" style="opacity: 0; transition-duration: 2000ms;"></div><div class="swiper-slide-shadow-right swiper-slide-shadow-coverflow" style="opacity: 2.16854; transition-duration: 2000ms;"></div></div></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>

{{-- privers work section end  --}}

{{-- blog section start  --}}

<div class="bg-white relative overflow-hidden py-8 sm:py-16 lg:pt-24 select-none" )="">
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
            <div class="swiper blogsSwiper w-full !overflow-visible swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper flex items-center pb-8" id="swiper-wrapper-819c1779d3347fef" aria-live="polite">
                    <div class="swiper-slide rounded-2xl group/blog swiper-slide-active" role="group" aria-label="1 / 5" style="width: 449.231px; margin-right: 30px;">
                        <a href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimageTop-FinTech-App-Development-Companies-in-India-2024.webp?id=9a7e9088dbb4b4eb359e477205ebf1a5" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimageTop-FinTech-App-Development-Companies-in-India-2024.webp?id=9a7e9088dbb4b4eb359e477205ebf1a5" alt="Top FinTech App Development Companies In India 2024">
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
                                    <img src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/lokesh-kumar.webp?id=334ee042bc9de20db105eadad0fa0548" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/lokesh-kumar.webp?id=334ee042bc9de20db105eadad0fa0548" alt="Lokesh Kumar" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Lokesh Kumar</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog swiper-slide-next" role="group" aria-label="2 / 5" style="width: 449.231px; margin-right: 30px;">
                        <a href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimagetop-10-trusted-real-estate-app-development-companies-in-india.webp?id=b5f3c1479017307a3a4667508ef03a56" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimagetop-10-trusted-real-estate-app-development-companies-in-india.webp?id=b5f3c1479017307a3a4667508ef03a56" alt="Top 10 Trusted Real Estate App Development Companies In India">
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
                                    <img src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/mohit-mittal.webp?id=08db619b3f85476036fb03cfa6c36ced" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/mohit-mittal.webp?id=08db619b3f85476036fb03cfa6c36ced" alt="Mohit Mittal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Mohit Mittal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog" role="group" aria-label="3 / 5" style="width: 449.231px; margin-right: 30px;">
                        <a href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide.webp?id=b6f77fe9bb282486446a628aa940e118" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide.webp?id=b6f77fe9bb282486446a628aa940e118" alt="How To Develop A Loan Lending Mobile App? - A Complete Guide">
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
                                    <img src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/dipti-singhal.webp?id=7393e2608a512ee4921dd7365789b984" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/dipti-singhal.webp?id=7393e2608a512ee4921dd7365789b984" alt="Dipti Singhal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Dipti Singhal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog" role="group" aria-label="4 / 5" style="width: 449.231px; margin-right: 30px;">
                        <a href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="https://staging.imgglobalinfotech.com/public/tailwind/img/hidden.webp?id=4df173c235873ed3ff8684e03934b9a3" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimagetop-10-mobile-app-development-companies-in-2024.webp?id=62eb443e5a93800216588819892f04f9" alt="Top 10 Mobile App Development Companies In 2024">
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
                                    <img src="https://staging.imgglobalinfotech.com/public/tailwind/img/hidden.webp?id=4df173c235873ed3ff8684e03934b9a3" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/mohit-mittal.webp?id=08db619b3f85476036fb03cfa6c36ced" alt="Mohit Mittal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Mohit Mittal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog" role="group" aria-label="5 / 5" style="width: 449.231px; margin-right: 30px;">
                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="https://staging.imgglobalinfotech.com/public/tailwind/img/hidden.webp?id=4df173c235873ed3ff8684e03934b9a3" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/thumb/blogimagehow-much-does-it-cost-to-develop-a-real-estate-website-app-like-magicbricks.webp?id=c5d847623500c2a6ea9c8cd48a8938b7" alt="How Much Does It Cost To Develop A Real Estate Website &amp; App Like Magicbricks?">
                            <div class="w-full p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">Nov 06, 2023</time>
                                    <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Mobile App</div>
                                </div>
                                <div class="group relative">
                                    <div class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 line-clamp-2">
                                        How Much Does It Cost To Develop A Real Estate Website &amp; App Like Magicbricks?
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Are you ready to embark on a digital journey through the captivating world of real estate? Imagine having the power to browse, compare, and purchase properties right from the comfort of your home.</p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="https://staging.imgglobalinfotech.com/public/tailwind/img/hidden.webp?id=4df173c235873ed3ff8684e03934b9a3" data-src="https://staging.imgglobalinfotech.com/public/tailwind/img/blog/author/dipti-singhal.webp?id=7393e2608a512ee4921dd7365789b984" alt="Dipti Singhal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Dipti Singhal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </div>
</div>

{{-- blog section end  --}}

@endsection

@push('scripts')
@endpush