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



{{-- care page design --}}


{{-- hero section start  --}}

<div class="bg-slate-900 max-h-[750px] h-full">
    <div class="mx-auto max-w-7xl px-6 lg:px-8  z-[1] relative pb-16 lg:pt-48 md:pt-40 pt-36 overflow-hidden h-full">
        <div class="flex flex-row flex-wrap items-center h-full">
            <div class=" lg:w-1/2 md:w-3/5 w-full md:order-1 order-2">
                <div class="md:pt-3 relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10 md:text-start text-center">
                    <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-white">
                        <span class="font-normal">Together at</span> 
                        <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent">IMG Global Infotech</span>
                    </p>
                    <div class="md:text-base text-sm text-white/70 mt-3 mb-lg-1">
                        We offer a truly inspiring and flexible work environment where you will be empowered to follow your passion, see possibilities, and learn and grow continuously.
                    </div>
                    <div class=">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 bg-white text-slate-900 ring-2 ring-white/80 hover:bg-slate-300 hover:ring-slate-900/15">
                            <span class="flex items-center gap-1">
                            Apply Now
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.79,5.67a1.5,1.5,0,0,0-1.16-1.46l-.38-1.38a1.081,1.081,0,0,0-1.05-.76H7.79a1.06,1.06,0,0,0-1.04.76L6.37,4.21A1.537,1.537,0,0,0,5.21,5.76,1.476,1.476,0,0,0,6.27,7.18l.1,2.77a.75.75,0,0,0-.42.22.768.768,0,0,0-.21.56l.24,5.76a.759.759,0,0,0,.65.72l.08,2.22a2.579,2.579,0,0,0,2.59,2.5h5.39a2.581,2.581,0,0,0,2.6-2.5l.08-2.22a.76.76,0,0,0,.64-.72l.24-5.76a.768.768,0,0,0-.21-.56.72.72,0,0,0-.41-.22l.1-2.77A1.534,1.534,0,0,0,18.79,5.67Zm-11-2.6,8.49.03.3,1.07H7.44Zm8.5,16.33a1.578,1.578,0,0,1-1.6,1.53H9.3A1.575,1.575,0,0,1,7.71,19.4l-.08-2.18h8.74ZM9.9,13.58a2.1,2.1,0,1,1,2.1,2.1A2.1,2.1,0,0,1,9.9,13.58Zm6.73-3.65H7.37l-.1-2.67h9.45Zm.66-3.67H6.71a.522.522,0,0,1-.5-.59.5.5,0,0,1,.5-.5H17.29a.528.528,0,0,1,.5.59A.5.5,0,0,1,17.29,6.26Z"></path></g></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 md:w-2/5 w-full md:order-2 order-1">
                <div class="w-1/2 h-1/2 md:ml-auto mx-auto">
                    <img src="{{asset('public'.mix('/tailwind/img/carers/together-IMG-Global-Infotech.webp'))}}" alt="thanku" class="h-full w-full ">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- hero section end  --}}


{{-- Work Life At Its Best section start  --}}
<div class="relative overflow-hidden">
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

    <div class="mx-auto max-w-7xl px-6 lg:px-8  z-[1] relative py-10 overflow-hidden">
    
        <div class="md:pt-3 relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10">
            <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
                <span class="font-normal">Work Life At</span> 
                <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent">Its Best</span>
            </p>
            {{-- <div class="md:text-base text-sm text-black/70 mt-3 mb-lg-1">
                Escalate your food delivery & Ordering business to new heights with our fully-featured white-label on demand restaurant app development solutions. Our best-in-class certified food app developers develop highly interactive features for your online food delivery application
            </div> --}}
        </div>
    
        <div class="flex flex-wrap mt-10 ">
            <div class="lg:w-4/12 sm:w-1/2 w-full sm:p-6 sm:px-6 py-6">
                <div class="relative block h-full bg-white shadow-md rounded-b-lg p-6 pt-10 group">
                    <div class="font-bold text-slate-900 md:text-xl text-lg relative before:absolute before:left-0 before:top-[-16px] before:h-[4px] before:w-[40px] before:bg-gradient-to-r before:from-blue-600 before:to-blue-300 ">Learning & Development</div>
                    <div class="text-black text-sm mt-2 text-ellipsis line-clamp-4 ">Describes work staff to develop academic practices. Still, many leaders struggle to keep their developers on a lifelong path of skill development</div>
                    <div class="sm:h-16 sm:w-16 h-14 w-14 bg-white rounded-md absolute right-[30px] top-[-30px] p-3 shadow-md duration-300 group-hover:bg-slate-900/90 ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-orange-500 duration-700 group-hover:scale-90" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 sm:w-1/2 w-full sm:p-6 sm:px-6 py-6">
                <div class="relative block h-full bg-white shadow-md rounded-b-lg p-6 pt-10 group">
                    <div class="font-bold text-slate-900 md:text-xl text-lg relative before:absolute before:left-0 before:top-[-16px] before:h-[4px] before:w-[40px] before:bg-gradient-to-r before:from-blue-600 before:to-blue-300 ">Mindful Personal Guidance</div>
                    <div class="text-black text-sm mt-2 text-ellipsis line-clamp-4 ">If you want your organization to function better and create a healthy working environment for your employees.</div>
                    <div class="sm:h-16 sm:w-16 h-14 w-14 bg-white rounded-md absolute right-[30px] top-[-30px] p-3 shadow-md duration-300 group-hover:bg-slate-900/90 ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-orange-500 duration-700 group-hover:scale-90" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 sm:w-1/2 w-full sm:p-6 sm:px-6 py-6">
                <div class="relative block h-full bg-white shadow-md rounded-b-lg p-6 pt-10 group">
                    <div class="font-bold text-slate-900 md:text-xl text-lg relative before:absolute before:left-0 before:top-[-16px] before:h-[4px] before:w-[40px] before:bg-gradient-to-r before:from-blue-600 before:to-blue-300 ">Constructive Feedback</div>
                    <div class="text-black text-sm mt-2 text-ellipsis line-clamp-4 ">Creating a good quality requires solving problems and exercising our minds to find the best methods or tools.</div>
                    <div class="sm:h-16 sm:w-16 h-14 w-14 bg-white rounded-md absolute right-[30px] top-[-30px] p-3 shadow-md duration-300 group-hover:bg-slate-900/90 ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-orange-500 duration-700 group-hover:scale-90" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 sm:w-1/2 w-full sm:p-6 sm:px-6 py-6">
                <div class="relative block h-full bg-white shadow-md rounded-b-lg p-6 pt-10 group">
                    <div class="font-bold text-slate-900 md:text-xl text-lg relative before:absolute before:left-0 before:top-[-16px] before:h-[4px] before:w-[40px] before:bg-gradient-to-r before:from-blue-600 before:to-blue-300 ">Inclusive & Open-Culture</div>
                    <div class="text-black text-sm mt-2 text-ellipsis line-clamp-4 ">Cultural inclusion starts at the top business leaders must display inclusive behavior.</div>
                    <div class="sm:h-16 sm:w-16 h-14 w-14 bg-white rounded-md absolute right-[30px] top-[-30px] p-3 shadow-md duration-300 group-hover:bg-slate-900/90 ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-orange-500 duration-700 group-hover:scale-90" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 sm:w-1/2 w-full sm:p-6 sm:px-6 py-6">
                <div class="relative block h-full bg-white shadow-md rounded-b-lg p-6 pt-10 group">
                    <div class="font-bold text-slate-900 md:text-xl text-lg relative before:absolute before:left-0 before:top-[-16px] before:h-[4px] before:w-[40px] before:bg-gradient-to-r before:from-blue-600 before:to-blue-300 ">Innovation & Quality First</div>
                    <div class="text-black text-sm mt-2 text-ellipsis line-clamp-4 ">We always let our staff take initiative and to innovate with new ideas and come up with better.</div>
                    <div class="sm:h-16 sm:w-16 h-14 w-14 bg-white rounded-md absolute right-[30px] top-[-30px] p-3 shadow-md duration-300 group-hover:bg-slate-900/90 ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-orange-500 duration-700 group-hover:scale-90" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 sm:w-1/2 w-full sm:p-6 sm:px-6 py-6">
                <div class="relative block h-full bg-white shadow-md rounded-b-lg p-6 pt-10 group">
                    <div class="font-bold text-slate-900 md:text-xl text-lg relative before:absolute before:left-0 before:top-[-16px] before:h-[4px] before:w-[40px] before:bg-gradient-to-r before:from-blue-600 before:to-blue-300 ">Proactive Implementation</div>
                    <div class="text-black text-sm mt-2 text-ellipsis line-clamp-4 ">Strong emotional reactions are common in reactive people, as they allow themselves to be defined by other people’s actions.</div>
                    <div class="sm:h-16 sm:w-16 h-14 w-14 bg-white rounded-md absolute right-[30px] top-[-30px] p-3 shadow-md duration-300 group-hover:bg-slate-900/90 ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-orange-500 duration-700 group-hover:scale-90" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Work Life At Its Best section end  --}}


{{-- Benefits & Perks start  --}}

<div class="relative  overflow-hidden bg-white md:py-16 py-10">
  
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
        <div class="absolute inset-y-0 hidden w-full min-w-[1360px] bg-[url('../img/beams1.webp?id=31a5defd3b15daed788cf2bd1997fc88')] bg-[length:2000px_100%] bg-[position:calc(50%_+_220px)_-50px] bg-no-repeat lg:block pointer-events-none"></div>
            <div class="flex flex-wrap row-flex relative">
                <div class="lg:w-1/2 w-full px-14 ">
                    <div class="img"><img src="{{asset('public'.mix('/tailwind/img/carers/beifit.webp'))}}" alt="beifit" class=" lg:h-full lg:w-full md:h-[500px]  h-full w-full"> </div>
                </div>
                
                <div class="relative z-20 lg:w-1/2 w-full">
                    <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black"><span class="font-normal">Benefits</span> <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent">& Perks</span></p>
                    <p class="mt-4 text-sm md:text-base leading-7 text-slate-600">We believe that either your work is the passion,or you are working so that you can follow your passion. Either way, we give the flexibility and support so that you can focus on what you really love.</p>
                    <div class="flex items-center flex-row flex-wrap">
                        <div class="sm:w-1/2 mt-4 sm:px-2 px-0 w-full">
                            <div class="shadow-md bg-white relative ps-5 pt-2 pr-2 group duration-300 pb-3 rounded-lg overflow-hidden after:absolute after:h-full after:w-2 after:bg-slate-900 after:left-0 after:top-0 after:duration-300 after:hover:bg-orange-500 hover:scale-105">
                                <p class="text-ellipsis line-clamp-2 text-sm md:text-base leading-7 text-slate-600">When good work is done, we are the first to appreciate it.</p>
                            </div>
                        </div>
                        <div class="sm:w-1/2 mt-4 sm:px-2 px-0 w-full">
                            <div class="shadow-md bg-white relative ps-5 pt-2 pr-2 group duration-300 pb-3 rounded-lg overflow-hidden after:absolute after:h-full after:w-2 after:bg-slate-900 after:left-0 after:top-0 after:duration-300 after:hover:bg-orange-500 hover:scale-105">
                                <p class="text-ellipsis line-clamp-2 text-sm md:text-base leading-7 text-slate-600">When good work is done, we are the first to appreciate it.</p>
                            </div>
                        </div>
                        <div class="sm:w-1/2 mt-4 sm:px-2 px-0 w-full">
                            <div class="shadow-md bg-white relative ps-5 pt-2 pr-2 group duration-300 pb-3 rounded-lg overflow-hidden after:absolute after:h-full after:w-2 after:bg-slate-900 after:left-0 after:top-0 after:duration-300 after:hover:bg-orange-500 hover:scale-105">
                                <p class="text-ellipsis line-clamp-2 text-sm md:text-base leading-7 text-slate-600">When good work is done, we are the first to appreciate it.</p>
                            </div>
                        </div>
                        <div class="sm:w-1/2 mt-4 sm:px-2 px-0 w-full">
                            <div class="shadow-md bg-white relative ps-5 pt-2 pr-2 group duration-300 pb-3 rounded-lg overflow-hidden after:absolute after:h-full after:w-2 after:bg-slate-900 after:left-0 after:top-0 after:duration-300 after:hover:bg-orange-500 hover:scale-105">
                                <p class="text-ellipsis line-clamp-2 text-sm md:text-base leading-7 text-slate-600">When good work is done, we are the first to appreciate it.</p>
                            </div>
                        </div>
                        <div class="sm:w-1/2 mt-4 sm:px-2 px-0 w-full">
                            <div class="shadow-md bg-white relative ps-5 pt-2 pr-2 group duration-300 pb-3 rounded-lg overflow-hidden after:absolute after:h-full after:w-2 after:bg-slate-900 after:left-0 after:top-0 after:duration-300 after:hover:bg-orange-500 hover:scale-105">
                                <p class="text-ellipsis line-clamp-2 text-sm md:text-base leading-7 text-slate-600">When good work is done, we are the first to appreciate it.</p>
                            </div>
                        </div>
                        <div class="sm:w-1/2 mt-4 sm:px-2 px-0 w-full">
                            <div class="shadow-md bg-white relative ps-5 pt-2 pr-2 group duration-300 pb-3 rounded-lg overflow-hidden after:absolute after:h-full after:w-2 after:bg-slate-900 after:left-0 after:top-0 after:duration-300 after:hover:bg-orange-500 hover:scale-105">
                                <p class="text-ellipsis line-clamp-2 text-sm md:text-base leading-7 text-slate-600">When good work is done, we are the first to appreciate it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="pointer-events-none absolute inset-0 shadow-[inset_0_-1px_1px_rgba(0,0,0,0.06)]"></div>
    </div>
</div>

{{-- Benefits & Perks end  --}}

{{-- Why We Love It Here Value start  --}}

<div class=" border bg-theme1 py-10 relative overflow-hidden  ">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full after:absolute after:w-20 after:rounded-full after:h-20 after:right-[50px] after:bottom-[50px] after:bg-gradient-to-br after:from-blue-300 after:to-green-500  before:absolute before:w-20 before:rounded-full before:h-20 before:lg:left-[500px] md:left-[300px] :left-[200px] before:top-[300px] before:bg-gradient-to-br before:from-pink-400 before:to-pink-600 ">
        <div class="md:pt-3 relative container mx-auto max-w-7xl md:px-6 lg:px-8 z-10">
            <p class="mt-4 max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-white">
                <span class="font-normal">Why We Love It</span> 
                <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent"> Here Value</span>
            </p>
            <div class="md:text-base text-sm text-white/70 mt-3 mb-lg-1">
                We believe that our employees are our biggest strength, we can not achieve our goals if your team is not on board. That is why we put our team first in everything.
            </div>
        </div>
        <div class="flex flex-row g-3 flex-wrap w-full mt-3 relative z-40">
            <div class="md:w-1/2 w-full lg:p-4 md:p-3 p-2">
                <div class="md:p-5 p-4  bg-white/5 backdrop-blur-sm rounded-[20px] border-[1px] border-solid border-[white]/10 group duration-300 sm:hover:scale-95 sm:hover:border-pink-100">
                    <div class="flex items-center">
                        <div>
                            <div class="sm:w-14 sm:h-14 p-3 w-12 h-12 bg-[white]/10 border-[1px]  border-[white]/10 rounded-[23px] flex items-center justify-center overflow-hidden">  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-white duration-300 group-hover:scale-110" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M1 11v10h5v-6h4v6h5V11L8 6z"></path><path d="M10 3v1.97l7 5V11h2v2h-2v2h2v2h-2v4h6V3H10zm9 6h-2V7h2v2z"></path></svg></div>
                        </div>
                        <div class="ms-3">
                            <div class="text-white font-normal md:text-[20px] text-[18px]">Work With Amazing Brands</div>
                            <div class="text-white/70 md:text-[15px] text-sm font-light mt-3  text-ellipsis line-clamp-3 overflow-hidden ">The product quality is our main bone of contention. Whatever comes from SemiDot work desk is QA tested and assures word class quality.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 w-full lg:p-4 md:p-3 p-2">
                <div class="md:p-5 p-4  bg-white/5 backdrop-blur-sm rounded-[20px] border-[1px] border-solid border-[white]/10 group duration-300 sm:hover:scale-95 sm:hover:border-pink-100">
                    <div class="flex items-center">
                        <div>
                            <div class="sm:w-14 sm:h-14 p-3 w-12 h-12 bg-[white]/10 border-[1px]  border-[white]/10 rounded-[23px] flex items-center justify-center overflow-hidden">  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-white duration-300 group-hover:scale-110" xmlns="http://www.w3.org/2000/svg"><path d="M407.47 20.85c10.26 16.748 17.462 36.09 19.856 56.65-32.396-44.636-58-40.276-96.36-25.697 65.992 9.776 101.33 67.377 96.36 140.75 48.848-61.72 34.92-160.814-19.857-171.703zm-276.167 2.896c-.987-.002-1.985.006-2.994.024h-.003c-34.522.598-107.756 26.213-104.54 101.037 21.08-55.636 65.886-58.685 104.54-32.123 46.407 31.894 22.075 98.348-16.936 100.45 11.637-17.33 17.04-40.65 2.974-55.29-24.895-25.91-54.777 4.487-55.533 29.594-1.403 46.62 45.44 68.116 75.336 60.738 30.192-7.45 50.092 12.416 36.795 51.976-15.056 44.795-121.114 75.948-133.155-8.173 1.7 88.73 43.248 129.87 104.54 98.114 41.467-21.487 78.87 18.96 74.17 54.896-32.792-37.747-82.098 17.986-38.544 40.883 78.98 41.522 199.4 40.194 265.73-23.945 64.735-62.6 60.833-175.215 12.263-259.89-5.614 26.608-28.43 52.367-74.17 67.163 59.262-77.482 2.572-206.85-129.652-174.036 84.2 4.683 73.567 108.248 5.257 105.123-62.264-2.848-.79-156.296-126.074-156.54zM277.508 230.22c-56.683 51.454 15.914 153.65 88.95 141.837-33.543-9.43-64.745-51.995-54.833-100.05 31.558 66.125 129.923 66.127 137.49-16.85 29.98 68.665 13.327 147.842-36.478 182.18-58.45 40.295-156.124 24.466-181.955-58.83 19.527 19.775 58.78 32.23 82.654 28.722-92.908-26.93-106.546-145.142-35.828-177.01zM24.68 355.77c-16.486 116.72 99.137 117.28 130.425 29.306-48.323 24.538-100.24 29.99-130.425-29.305z"></path></svg></div>
                        </div>
                        <div class="ms-3">
                            <div class="text-white font-normal md:text-[20px] text-[18px]">Learn & Grow</div>
                            <div class="text-white/70 md:text-[15px] text-sm font-light mt-3  text-ellipsis line-clamp-3 overflow-hidden ">Our team comprises of full stack developers and designers who are aware of all the latest IT trends and can implement them in your product.</div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="md:w-1/2 w-full lg:p-4 md:p-3 p-2">
                <div class="md:p-5 p-4  bg-white/5 backdrop-blur-sm rounded-[20px] border-[1px] border-solid border-[white]/10 group duration-300 sm:hover:scale-95 sm:hover:border-pink-100">
                    <div class="flex items-center">
                        <div>
                            <div class="sm:w-14 sm:h-14 p-3 w-12 h-12 bg-[white]/10 border-[1px]  border-[white]/10 rounded-[23px] flex items-center justify-center overflow-hidden">  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-white duration-300 group-hover:scale-110" xmlns="http://www.w3.org/2000/svg"><path d="M137.71 18.326L17.866 138.166l29.582 29.582c23.04-53.698 66.14-96.802 119.84-119.842l-29.58-29.58zm238.286.04L346.44 47.92c53.693 23.048 96.79 66.155 119.822 119.857l29.576-29.575-119.842-119.84zm-133.27 37.04C137.405 62.64 54.448 150.126 54.448 257.31c0 111.93 90.466 202.397 202.398 202.397 32.75 0 63.66-7.757 91.007-21.52l-22.26-15.78c-21.173 8.84-44.394 13.734-68.745 13.734-98.652 0-178.827-80.172-178.827-178.824 0-90.942 68.133-166.178 156.065-177.382l8.637-24.528zm29.432.076l8.555 24.604c87.397 11.69 154.96 86.67 154.96 177.23 0 48.234-19.17 92.043-50.29 124.23l8.633 24.686c40.12-36.963 65.23-89.96 65.23-148.923 0-106.782-82.332-194.023-187.088-201.828zm-14.75 14.49l-32.3 91.706h18.925v45.068c4.35-1.182 8.917-1.824 13.63-1.824 4.36 0 8.596.547 12.65 1.564v-44.808h18.98L257.408 69.97zm71.82 44.42l-17.197 29.79c-3.446-1.657-6.983-3.158-10.596-4.5l14.144 40.683h-26.576v35.057c12.702 9.562 20.95 24.756 20.95 41.793 0 8.697-2.16 16.91-5.956 24.142l40.705 54.186 19.466-14.662 4.924 14.08 20.603 11.897c3.477-5.153 6.657-10.522 9.526-16.08l-29.35-16.945c6.967-13.842 11.447-29.152 12.86-45.348h33.862c.253-3.69.392-7.412.392-11.168 0-2.52-.066-5.026-.18-7.52h-33.82c-.98-16.423-5.11-31.993-11.796-46.112l29.45-17.002c-2.76-5.616-5.835-11.046-9.208-16.266l-29.48 17.02c-8.97-13.35-20.434-24.88-33.73-33.922l17.153-29.71c-5.178-3.438-10.566-6.585-16.144-9.41zm-145.38.313c-5.567 2.85-10.94 6.023-16.104 9.483l17.62 30.523c-12.89 9.09-23.988 20.545-32.67 33.737l-30.645-17.695c-3.362 5.228-6.422 10.667-9.167 16.29l30.73 17.74c-6.385 13.828-10.33 29.016-11.285 45.015H96.895c-.115 2.493-.182 4.998-.182 7.52 0 3.755.14 7.477.392 11.167h35.477c1.377 15.775 5.664 30.708 12.324 44.264l-30.613 17.674c2.855 5.565 6.028 10.938 9.492 16.1l30.592-17.663c8.745 12.622 19.743 23.56 32.418 32.236l-17.527 30.353c5.202 3.4 10.616 6.505 16.216 9.292l17.473-30.265c13.535 6.554 28.428 10.746 44.147 12.052v34.62c3.224.193 6.472.303 9.746.303 3 0 5.98-.09 8.94-.252v-34.497c6.595-.42 13.048-1.358 19.325-2.756l10.682-8.047-47.52-63.257c-24.326-4.454-42.908-25.862-42.908-51.428 0-16.593 7.833-31.43 19.976-41.026v-35.825h-26.63l14.196-40.31c-3.934 1.5-7.777 3.184-11.51 5.056l-17.554-30.405zm73.814 108.906c-18.67 0-33.605 14.935-33.605 33.605 0 18.67 14.936 33.603 33.605 33.603 18.67 0 33.604-14.934 33.604-33.603 0-18.67-14.934-33.604-33.604-33.604zm34.363 72.927c-5.978 5.234-13.142 9.14-21.03 11.233l50.952 67.828-14.578 10.984 79.74 56.525-32.137-91.902-13.975 10.525-48.973-65.193zm174.223 50.33c-14.203 33.102-36.037 62.167-63.27 84.998l9.7 27.733 83.15-83.15-29.58-29.58zM47.46 346.9l-29.585 29.586 119.84 119.84 29.603-29.603C113.616 443.69 70.508 400.593 47.46 346.9zm323.343 107.553c-7.848 4.552-15.992 8.65-24.395 12.254l29.58 29.58 22.33-22.33-27.515-19.504z"></path></svg></div>
                        </div>
                        <div class="ms-3">
                            <div class="text-white font-normal md:text-[20px] text-[18px]">Work/Life Balance</div>
                            <div class="text-white/70 md:text-[15px] text-sm font-light mt-3  text-ellipsis line-clamp-3 overflow-hidden ">In this fast pace world, time is literally money for any professional, we strive at making our product available to you on or before our promised date.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 w-full lg:p-4 md:p-3 p-2">
                <div class="md:p-5 p-4  bg-white/5 backdrop-blur-sm rounded-[20px] border-[1px] border-solid border-[white]/10 group duration-300 sm:hover:scale-95 sm:hover:border-pink-100">
                    <div class="flex items-center">
                        <div>
                            <div class="sm:w-14 sm:h-14 p-3 w-12 h-12 bg-[white]/10 border-[1px]  border-[white]/10 rounded-[23px] flex items-center justify-center overflow-hidden"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" class="text-white duration-300 group-hover:scale-110" xmlns="http://www.w3.org/2000/svg"><title></title><path d="m10.278 15.443 1.705 1.705-3.426 3.426-3.427-3.426 8.592-8.591-1.705-1.705 3.426-3.426 3.427 3.426-8.592 8.591zM0 12.017l3.426 3.426 8.591-8.59-3.426-3.427L0 12.017zm11.983 5.13 3.426 3.427L24 11.983l-3.426-3.426-8.591 8.59z"></path></svg></div>
                        </div>
                        <div class="ms-3">
                            <div class="text-white font-normal md:text-[20px] text-[18px]">Cutting Edge</div>
                            <div class="text-white/70 md:text-[15px] text-sm font-light mt-3  text-ellipsis line-clamp-3 overflow-hidden ">We love the latest technologies, and we are more likely to work on the latest tech, rather than an outdated toolset, unless there is a specific requirement.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 h-96 z-0 text-white/20 pointer-events-none [mask-image:linear-gradient(to_bottom,transparent,white)]">
            <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="sd7" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%" patternTransform="translate(0 -1)">
                        <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#sd7)"></rect>
            </svg>
        </div>
    </div>
</div>

{{-- Why We Love It Here Value end  --}}

{{-- join us start --}}
<div class="relative py-8">
    <div class="text-blue-50">
        <div class="absolute top-0 left-0 h-full w-full overflow-hidden"><svg class="w-auto h-[550px] fill-blue-50 opacity-70" viewBox="0 0 95 52.8"><path d="M27.3 0H0l26.4 26.4L0 52.8h27.3l26.4-26.4z"></path><path d="M68.6 0H41.3l26.4 26.4-26.4 26.4h27.3L95 26.4z"></path></svg></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 z-[1] relative">

        <div class="py-xl-5 py-lg-5 py-md-5 py-5 sm:w-3/4 w-full mx-auto select-none relative">
            <div class="flex w-full h-auto items-center flex-wrap">
                <div class="lg:w-[60%] lg:pe-10 pe-0 w-[100%] lg:order-1 order-2">
                    <p class="mt-4  max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em]">
                        <span class="font-normal">Join The <br></span> 
                        <span class="font-bold bg-gradient-to-r from-gray-500 via-sky-600 to-gray-500 bg-clip-text text-transparent">IMG GLobal InfoTech Team!</span>
                    </p>
                    <div class="md:text-base text-sm opacity-70 mt-3 mb-lg-1">
                        Innovate with the latest and greatest technologies & get to work on some of the coolest projects you can imagine.
                    </div> 
                    <div class="flex items-center mt-6 flex-wrap gap-3 w-full  lg:w-[90%]">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="lg:w-[40%] flex items-center justify-center w-[100%] lg:order-2 order-1">
                    <div class="aspect-[3/2.8] object-cover mx-auto">
                    <img src="{{asset('public'.mix('/tailwind/img/carers/img-team.webp'))}}" alt="thanku" class="img-fluid h-full w-full ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

{{--join us end  --}}


{{-- apply now section start --}}
<div class="bg-gray-100 relative overflow-hidden">
    <div class="absolute inset-y-0 hidden w-full min-w-[1360px] bg-[url('../img/beams1.webp?id=31a5defd3b15daed788cf2bd1997fc88')] bg-[length:2000px_100%] bg-[position:calc(50%_+_220px)_-50px] bg-no-repeat lg:block pointer-events-none"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8  z-[1] relative py-10 overflow-hidden">
        <div class="flex flex-wrap flex-row">
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">Flutter Developer</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">React Js Developer</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">Node.js Developer</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                     Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">AngularJS Developer</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">React Native DeveloperR</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">PHP Developer</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">iOS Develoepr</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>

                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                    Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">IT Business Development Executive</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 md:p-4 p-3 w-full">
                <div class="card h-full lg:flex items-center bg-white shadow-sm rounded-xl px-6 py-5 w-full duration-300 border-transparent border hover:border hover:border-orange-500">
                    <div class="grow">
                        <div class="text-gray-500 font-semibold text-sm">FULL TIME</div>
                        <div class="text-slate-950 sm:text-lg text-base font-bold ">HR Intern</div>
                        <div class="flex items-center mt-1 gap-3">
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M124.813 31.5L21.593 134.688 150.44 263.53l4.687-27.28 18.438 3.156-19.875 115.78c.314-.073.62-.14.937-.217l36.03 26.53 10-129.406 18.626 1.437-10.874 141.032 38.188 28.125v-164.28l-31-84.563 40.344 15.406 40.343-15.438-31 84.563v164.313l38.22-28.157-10.906-141 18.625-1.436L321.25 381.5l36.094-26.594c.355.09.71.166 1.062.25l-20.094-115.72 18.407-3.186 4.75 27.25 128.81-128.813L387.095 31.5 255.938 74.78 124.813 31.5zm14.843 45.813l36.438 112.624L73.47 147.03l66.186-69.718zm229.72 0l66.187 69.718-102.625 42.907 36.437-112.625zm-.063 231.406l8.343 48.124c18.14-1.61 34.37-13.527 52.125-41.625-20.87 3.008-40.78.415-60.467-6.5zm-226.625.06c-19.613 6.86-39.458 9.437-60.25 6.44 17.718 28.036 33.906 39.973 52 41.624l8.25-48.063zm221.375 64.376l-37.032 27.28c14.147 15.196 34.73 19.897 70.845 11.752-14.33-10.72-25.298-23.82-33.813-39.032zm-215.813.344c-8.737 16.542-20.235 30.682-35.53 42.125 38.18 8.612 59.01 2.917 73.218-14.406L148.25 373.5zm54 39.75c.29 24.56-2.662 48.25-9.78 71.406 25.805-11.198 41.003-24.887 49.155-42.437l-39.375-28.97zm106.156.875l-39.562 29.156c8.114 17.697 23.35 31.485 49.312 42.75-7.17-23.32-10.098-47.167-9.75-71.905z"></path></svg></span>  2+ Years </div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg></span> On Site</div>
                            <div class="flex items-center text-black text-sm"> <span class="flex items-center jsutify-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="h-5 w-5 text-orange-500 mr-2" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg></span>  jaipur </div>
                        </div>
        
                    </div>
                    <div class="flex-none lg:mt-0 mt-5">
                        <a href="https://www.imgglobalinfotech.com/contact-us.php" class=" inline-flex justify-center rounded-lg rounded-br-none max-md:text-xs text-sm font-semibold max-md:py-2 py-3 px-4 ring-2 ring-gray-200 bg-slate-900 text-white hover:bg-slate-700">
                            <span>
                                <span class="inline-flex items-center gap-1">
                                    <span>
                                       Apply Now
                                    </span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21 12.22C21 6.73 16.74 3 12 3c-4.69 0-9 3.65-9 9.28-.6.34-1 .98-1 1.72v2c0 1.1.9 2 2 2h1v-6.1c0-3.87 3.13-7 7-7s7 3.13 7 7V19h-8v2h8c1.1 0 2-.9 2-2v-1.22c.59-.31 1-.92 1-1.64v-2.3c0-.7-.41-1.31-1-1.62z"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="M18 11.03A6.04 6.04 0 0012.05 6c-3.03 0-6.29 2.51-6.03 6.45a8.075 8.075 0 004.86-5.89c1.31 2.63 4 4.44 7.12 4.47z"></path></svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

      
        
       
       
       

     
       
      
    </div>
</div>


{{-- apply now section end --}}



{{-- blog section  --}}


<div class="bg-white relative overflow-hidden py-8 sm:py-16 lg:pt-24 select-none">
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
            <div class="swiper blogsSwiper w-full !overflow-visible" 
                data-swiper='{
                    "slidesPerView": 2,
                    "spaceBetween": 10,
                    "speed": 1000,
                    "loop": false,
                    "effect": "slide",
                    "breakpoints": {
                        "320": {"slidesPerView": 1, "spaceBetween": 30},
                        "480": {"slidesPerView": 1.2, "spaceBetween": 20},
                        "640": {"slidesPerView": 2, "spaceBetween": 30},
                        "1024": {"slidesPerView": 2.6, "spaceBetween": 30},
                        "1350": {"slidesPerView": 3, "spaceBetween": 30}
                    }
                }'
            >
                <div class="swiper-wrapper flex items-center pb-8">
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="https://www.imgglobalinfotech.com/blog/top-fintech-app-development-companies-in-india" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimageTop-FinTech-App-Development-Companies-in-India-2024.webp'))}}" alt="Top FinTech App Development Companies In India 2024">
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
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/lokesh-kumar.webp'))}}" alt="Lokesh Kumar" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Lokesh Kumar</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="https://www.imgglobalinfotech.com/blog/top-10-trusted-real-estate-app-development-companies-in-india" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagetop-10-trusted-real-estate-app-development-companies-in-india.webp'))}}" alt="Top 10 Trusted Real Estate App Development Companies In India">
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
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/mohit-mittal.webp'))}}" alt="Mohit Mittal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Mohit Mittal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="https://www.imgglobalinfotech.com/blog/loan-lending-mobile-app-development" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagehow-to-develop-a-loan-lending-mobile-app-a-complete-guide.webp'))}}" alt="How To Develop A Loan Lending Mobile App? - A Complete Guide">
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
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/dipti-singhal.webp'))}}" alt="Dipti Singhal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Dipti Singhal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="https://www.imgglobalinfotech.com/blog/top-10-mobile-app-development-companies" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagetop-10-mobile-app-development-companies-in-2024.webp'))}}" alt="Top 10 Mobile App Development Companies In 2024">
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
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/mohit-mittal.webp'))}}" alt="Mohit Mittal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Mohit Mittal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide rounded-2xl group/blog">
                        <a href="https://www.imgglobalinfotech.com/blog/how-much-does-it-cost-to-develop-real-estate-website-app-like-magicbricks" class="flex max-w-xl flex-col items-start justify-between bg-white rounded-2xl rounded-br-none shadow-xl shadow-gray-300">
                            <img class="w-full aspect-video rounded-2xl rounded-br-none" loading="lazy" width="385" height="217" src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/thumb/blogimagehow-much-does-it-cost-to-develop-a-real-estate-website-app-like-magicbricks.webp'))}}" alt="How Much Does It Cost To Develop A Real Estate Website & App Like Magicbricks?">
                            <div class="w-full p-6">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">Nov 06, 2023</time>
                                    <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Mobile App</div>
                                </div>
                                <div class="group relative">
                                    <div class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 line-clamp-2">
                                        How Much Does It Cost To Develop A Real Estate Website & App Like Magicbricks?
                                    </div>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Are you ready to embark on a digital journey through the captivating world of real estate? Imagine having the power to browse, compare, and purchase properties right from the comfort of your home.</p>
                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <img src="{{asset('public'.mix('/tailwind/img/hidden.webp'))}}" data-src="{{asset('public'.mix('/tailwind/img/blog/author/dipti-singhal.webp'))}}" alt="Dipti Singhal" class="h-10 w-10 rounded-full bg-gray-50" loading="lazy">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">Written by</p>
                                        <p class="text-gray-600">Dipti Singhal</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- blog end  --}}



@endsection

@push('scripts')
@endpush