@extends('index')
@push('meta')
@endpush

@push('styles')
@endpush

@section('content')


<div class="relative overflow-hidden  bg-gradient-to-bl from-theme1 to to-theme2 py-10">
    <div class="container mx-auto">
        <div class="ps-4">
            <div class="lg:text-6xl md:text-5xl sm:text-4xl text-3xl font-bold text-white">Lates From News</div>
        </div>
        <div class="flex flex-row g-3 flex-wrap w-full mt-2 relative z-40">
            <div class="md:w-1/2 w-full lg:p-4 md:p-3 p-2">
                <div class="lg:p-10 md:p-8 p-5  bg-white/5 backdrop-blur-sm rounded-3xl border-[1px] border-solid border-[white]/10">
                    <div class="flex items-center">
                        <div class="">
                            <div class="text-gray-300 text-sm font-light">Business</div>
                            <div class="text-white font-semibold xl:text-3xl sm:text-2xl  text-xl leading-tight">Unleashing the power of Social Media Marketing</div>
                            <div class="text-white md:text-[15px] text-sm font-light mt-3  text-ellipsis line-clamp-2 overflow-hidden ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus,orem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, illo nem nihil vitae omnis alias illo exercitationem deserunt natus.</div>
                            <div class="sm:mt-9 mt-5">
                                <a href="javascript:;" class="text-decoration-none inline-flex text-white text-sm font-normal items-center md:px-20 px-16 md:py-4 py-3 rounded-[100px] bg-white/5 backdrop-blur-sm border-[1px] border-solid border-[white]/10">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 w-full lg:p-4 md:p-3 p-2">
                <div class="lg:p-10 md:p-8 p-5  bg-white/5 backdrop-blur-sm rounded-3xl border-[1px] border-solid border-[white]/10">
                    <div class="flex items-center">
                    
                        <div class="">
                            <div class="text-gray-300 text-sm font-light">Business</div>
                            <div class="text-white font-semibold xl:text-3xl sm:text-2xl  text-xl leading-tight">Unleashing the power of Social Media Marketing</div>
                            <div class="text-white md:text-[15px] text-sm font-light mt-3  text-ellipsis line-clamp-2 overflow-hidden ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus,orem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, illo nem nihil vitae omnis alias illo exercitationem deserunt natus.</div>
                            <div class="mt-9">
                                <a href="javascript:;" class="text-decoration-none inline-flex text-white text-sm font-normal items-center md:px-20 px-16 md:py-4 py-3 rounded-[100px] bg-white/5 backdrop-blur-sm border-[1px] border-solid border-[white]/10">Read More</a>
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


<div class="overflow-hidden bg-[url('../img/meeting.jpg')] bg-no-repeat bg-cover bg-center py-10 lg:h-screen relative after:absolute after:inset-0 after:bg-gradient-to-b after:from-blue-900/90 after:to-blue-950/90 after:mix-blend-multiply before:absolute before:inset-0 before:bg-gradint before:bg-gradient-to-b before:from-black/70 before:to-black/70 before:mix-blend-multiply">
    <div class="container mx-auto relative z-20 h-full before:absolute before:w-52 before:mix-blend-screen before:h-52  before:bottom-0 before:rounded-full before:left-[-100px] before:bg-gradient-to-br before:from-pink-400/5 before:to-pink-600/5  after:absolute after:w-52 after:mix-blend-screen after:h-52  after:top-0 after:rounded-full after:right-[-100px] after:bg-gradient-to-br after:from-pink-400/5 after:to-pink-600/5">
        <div class="flex   justify-center h-full flex-col">
            <div class="ps-4">
                <div class="text-white  font-bold xl:text-7xl lg:text-6xl md:text-5xl sm:text-4xl text-2xl"> Support Center</div>
                <div class="text-white text-xl font-light leading-tight lg:w-1/2 lg:mt-7 mt-5">Lorem ipsum dolor sit, inventore, repellat quas architecto inventore, repellat quas architecto ratione accusamus nihil ullam.</div>
            </div>
            <div class="lg:mt-16 md-mt-12 mt-10">
                <div class="flex flex-row g-3 flex-wrap w-full h-full">
                    <div class="lg:w-1/3 md:w-1/2 lg:p-4 p-3">
                        <div class=" bg-white/5 border-solid border-gray-500 border-[1px] rounded-xl lg:p-5 p-4 backdrop-blur-sm">
                            <div class="flex ">
                                <div>
                                    <div class="sm:w-10 sm:h-10  w-8 h-8  flex items-center justify-center p-2">   <img src="{{asset("img/Browser.svg")}}" alt="thanku" class="img-fluid w-full h-full "></div>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white font-normal md:text-[20px] text-[18px]">Digital Marketing Services</div>
                                    <div class="text-gray-300 md:text-base text-sm font-normal mt-2  text-ellipsis line-clamp-3 overflow-hidden ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, illo nem nihil vitae omnis alias illo exercitationem deserunt natus.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/2 lg:p-4 p-3">
                        <div class=" bg-white/5 border-solid border-gray-500 border-[1px] rounded-xl lg:p-5 p-4 backdrop-blur-sm">
                            <div class="flex ">
                                <div>
                                    <div class="sm:w-10 sm:h-10  w-8 h-8  flex items-center justify-center p-2">   <img src="{{asset("img/Browser.svg")}}" alt="thanku" class="img-fluid w-full h-full "></div>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white font-normal md:text-[20px] text-[18px]">Digital Marketing Services</div>
                                    <div class="text-gray-300 md:text-base text-sm font-normal mt-2  text-ellipsis line-clamp-3 overflow-hidden ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, illo nem nihil vitae omnis alias illo exercitationem deserunt natus.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/2 lg:p-4 p-3">
                        <div class=" bg-white/5 border-solid border-gray-500 border-[1px] rounded-xl lg:p-5 p-4 backdrop-blur-sm">
                            <div class="flex ">
                                <div>
                                    <div class="sm:w-10 sm:h-10  w-8 h-8  flex items-center justify-center p-2">   <img src="{{asset("img/Browser.svg")}}" alt="thanku" class="img-fluid w-full h-full "></div>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white font-normal md:text-[20px] text-[18px]">Digital Marketing Services</div>
                                    <div class="text-gray-300 md:text-base text-sm font-normal mt-2  text-ellipsis line-clamp-3 overflow-hidden ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, illo nem nihil vitae omnis alias illo exercitationem deserunt natus.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container mx-auto bg-gradient-to-r from-theme1 to-blue-600 rounded-2xl flex items-center">
    <div class="flex flex-row flex-wrap w-full">
        <div class="lg:w-4/12 w-full">
            <ul class="ms:p-8 p-5 mb-[-90px]">
                <li class="bg-white active:bg-gradient-to-r active:from-yellow-500 active:to-red-500 rounded-2xl p-4 md:mb-8 sm:mb-6 mb-4 flex items-center justify-between lg:h-28 sm:h-24 h-20 shadow-md cursor-pointer sticky top-16 duration-300 group">
                    <div class="w-full">
                        <div class="flex items-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" class="flex items-center w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M22.379 23.343a1.62 1.62 0 0 0 1.536-2.14v.002L17.35 1.76A1.62 1.62 0 0 0 15.816.657H8.184A1.62 1.62 0 0 0 6.65 1.76L.086 21.204a1.62 1.62 0 0 0 1.536 2.139h4.741a1.62 1.62 0 0 0 1.535-1.103l.977-2.892 4.947 3.675c.28.208.618.32.966.32m-3.084-12.531 3.624 10.739a.54.54 0 0 1-.51.713v-.001h-.03a.54.54 0 0 1-.322-.106l-9.287-6.9h4.853m6.313 7.006c.116-.326.13-.694.007-1.058L9.79 1.76a1.722 1.722 0 0 0-.007-.02h6.034a.54.54 0 0 1 .512.366l6.562 19.445a.54.54 0 0 1-.338.684"></path></svg>
                            <div class="text-black font-semibold text-lg ms-2 z-10">Software Development</div>
                        </div>
                        <div class="absolute right-3 top-0 font-bold text-gray-100 lg:text-8xl md:text-7xl text-6xl  duration-300 group-hover:bg-gradient-to-r group-hover:from-yellow-500 group-hover:to-red-500 group-hover:bg-clip-text group-hover:text-red-500 group-hover:text-transparent">01</div>
                    </div>
                </li>
                <li class="bg-gradient-to-r from-yellow-500 to-red-500 rounded-2xl p-4 md:mb-8 sm:mb-6 mb-4 flex items-center justify-between lg:h-28 sm:h-24 h-20 shadow-md cursor-pointer sticky top-16">
                    <div class="w-full">
                        <div class="flex items-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" class="flex items-center w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M22.379 23.343a1.62 1.62 0 0 0 1.536-2.14v.002L17.35 1.76A1.62 1.62 0 0 0 15.816.657H8.184A1.62 1.62 0 0 0 6.65 1.76L.086 21.204a1.62 1.62 0 0 0 1.536 2.139h4.741a1.62 1.62 0 0 0 1.535-1.103l.977-2.892 4.947 3.675c.28.208.618.32.966.32m-3.084-12.531 3.624 10.739a.54.54 0 0 1-.51.713v-.001h-.03a.54.54 0 0 1-.322-.106l-9.287-6.9h4.853m6.313 7.006c.116-.326.13-.694.007-1.058L9.79 1.76a1.722 1.722 0 0 0-.007-.02h6.034a.54.54 0 0 1 .512.366l6.562 19.445a.54.54 0 0 1-.338.684"></path></svg>
                            <div class="text-white font-semibold text-lg ms-2 z-10">Software Development</div>
                        </div>
                        <div class="absolute text-white/20 right-3 top-0 font-bold text-gray-100/lg:25  lg:text-8xl md:text-7xl text-6xl  duration-300 group-hover:bg-gradient-to-r group-hover:from-yellow-500 group-hover:to-red-500 group-hover:bg-clip-text group-hover:text-red-500 group-hover:text-transparent">02</div>
                    </div>
                </li>
                <li class="bg-white active:bg-gradient-to-r active:from-yellow-500 active:to-red-500 rounded-2xl p-4 md:mb-8 sm:mb-6 mb-4 flex items-center justify-between lg:h-28 sm:h-24 h-20 shadow-md cursor-pointer sticky top-16 duration-300 group">
                    <div class="w-full">
                        <div class="flex items-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" class="flex items-center w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M22.379 23.343a1.62 1.62 0 0 0 1.536-2.14v.002L17.35 1.76A1.62 1.62 0 0 0 15.816.657H8.184A1.62 1.62 0 0 0 6.65 1.76L.086 21.204a1.62 1.62 0 0 0 1.536 2.139h4.741a1.62 1.62 0 0 0 1.535-1.103l.977-2.892 4.947 3.675c.28.208.618.32.966.32m-3.084-12.531 3.624 10.739a.54.54 0 0 1-.51.713v-.001h-.03a.54.54 0 0 1-.322-.106l-9.287-6.9h4.853m6.313 7.006c.116-.326.13-.694.007-1.058L9.79 1.76a1.722 1.722 0 0 0-.007-.02h6.034a.54.54 0 0 1 .512.366l6.562 19.445a.54.54 0 0 1-.338.684"></path></svg>
                            <div class="text-black font-semibold text-lg ms-2 z-10">Software Development</div>
                        </div>
                        <div class="absolute right-3 top-0 font-bold text-gray-100 lg:text-8xl md:text-7xl text-6xl  duration-300 group-hover:bg-gradient-to-r group-hover:from-yellow-500 group-hover:to-red-500 group-hover:bg-clip-text group-hover:text-red-500 group-hover:text-transparent">03</div>
                    </div>
                </li>
                <li class="bg-white active:bg-gradient-to-r active:from-yellow-500 active:to-red-500 rounded-2xl p-4 md:mb-8 sm:mb-6 mb-4 flex items-center justify-between lg:h-28 sm:h-24 h-20 shadow-md cursor-pointer sticky top-16 duration-300 group">
                    <div class="w-full">
                        <div class="flex items-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" class="flex items-center w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M22.379 23.343a1.62 1.62 0 0 0 1.536-2.14v.002L17.35 1.76A1.62 1.62 0 0 0 15.816.657H8.184A1.62 1.62 0 0 0 6.65 1.76L.086 21.204a1.62 1.62 0 0 0 1.536 2.139h4.741a1.62 1.62 0 0 0 1.535-1.103l.977-2.892 4.947 3.675c.28.208.618.32.966.32m-3.084-12.531 3.624 10.739a.54.54 0 0 1-.51.713v-.001h-.03a.54.54 0 0 1-.322-.106l-9.287-6.9h4.853m6.313 7.006c.116-.326.13-.694.007-1.058L9.79 1.76a1.722 1.722 0 0 0-.007-.02h6.034a.54.54 0 0 1 .512.366l6.562 19.445a.54.54 0 0 1-.338.684"></path></svg>
                            <div class="text-black font-semibold text-lg ms-2 z-10">Software Development</div>
                        </div>
                        <div class="absolute right-3 top-0 font-bold text-gray-100 lg:text-8xl md:text-7xl text-6xl  duration-300 group-hover:bg-gradient-to-r group-hover:from-yellow-500 group-hover:to-red-500 group-hover:bg-clip-text group-hover:text-red-500 group-hover:text-transparent">04</div>
                    </div>
                </li>
                <li class="bg-white active:bg-gradient-to-r active:from-yellow-500 active:to-red-500 rounded-2xl p-4 md:mb-8 sm:mb-6 mb-4 flex items-center justify-between lg:h-28 sm:h-24 h-20 shadow-md cursor-pointer sticky top-16 duration-300 group">
                    <div class="w-full">
                        <div class="flex items-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" class="flex items-center w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M22.379 23.343a1.62 1.62 0 0 0 1.536-2.14v.002L17.35 1.76A1.62 1.62 0 0 0 15.816.657H8.184A1.62 1.62 0 0 0 6.65 1.76L.086 21.204a1.62 1.62 0 0 0 1.536 2.139h4.741a1.62 1.62 0 0 0 1.535-1.103l.977-2.892 4.947 3.675c.28.208.618.32.966.32m-3.084-12.531 3.624 10.739a.54.54 0 0 1-.51.713v-.001h-.03a.54.54 0 0 1-.322-.106l-9.287-6.9h4.853m6.313 7.006c.116-.326.13-.694.007-1.058L9.79 1.76a1.722 1.722 0 0 0-.007-.02h6.034a.54.54 0 0 1 .512.366l6.562 19.445a.54.54 0 0 1-.338.684"></path></svg>
                            <div class="text-black font-semibold text-lg ms-2 z-10">Software Development</div>
                        </div>
                        <div class="absolute right-3 top-0 font-bold text-gray-100 lg:text-8xl md:text-7xl text-6xl  duration-300 group-hover:bg-gradient-to-r group-hover:from-yellow-500 group-hover:to-red-500 group-hover:bg-clip-text group-hover:text-red-500 group-hover:text-transparent">05</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="lg:w-8/12 w-full mt-lg-0 lg:mt-3 md:mt-5 mt-10">
            <div class=" w-full md:p-8 p-5">
                <div class="text-white lg:text-4xl md:text-3xl text-2xl font-bold">Software Development</div>
                <div class="text-white sm:text-base text-sm mt-2 ">Avail software development services tailored to your unique business needs. Our software developers combine cutting-edge technology with their expertise to empower your business with innovative software that drives success.</div>
                <div class="bg-white/5 backdrop-blur-sm border border-white/5 p-5 rounded-lg mt-7">
                    <div class="flex flex-row g-3 flex-wrap w-full ">
                        <div class="w-1/2">
                        <ul class="relative list-disc text-white ps-4"><li><a href="javascript:;" class="text-white font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                        </div>
                        <div class="w-1/2">
                            <ul class="relative list-disc text-white ps-4"><li><a href="javascript:;" class="text-white font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                        </div>
                        <div class="w-1/2">
                            <ul class="relative list-disc text-white ps-4"><li><a href="javascript:;" class="text-white font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                        </div>
                        <div class="w-1/2">
                            <ul class="relative list-disc text-white ps-4"><li><a href="javascript:;" class="text-white font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                        </div>
                    </div>
                </div>
                <div class="text-white sm:text-xl text-lg font-semibold mt-10">Core Tech:</div>
                <ul class="flex items-center flex-nowrap overflow-x-auto mt-5 gap-3">
                    <li>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-white lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                        <div class="text-white sm:text-base text-sm text-center mt-1">Java</div>
                    </li>
                    <li>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="text-white lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 9h1.5v6H13v-2.5h-2V15H9.5V9H11v2h2V9zm-5 1.5v1c0 .8-.7 1.5-1.5 1.5h-2v2H3V9h3.5c.8 0 1.5.7 1.5 1.5zm-1.5 0h-2v1h2v-1zm15 0v1c0 .8-.7 1.5-1.5 1.5h-2v2h-1.5V9H20c.8 0 1.5.7 1.5 1.5zm-1.5 0h-2v1h2v-1z"></path></svg>
                        <div class="text-white sm:text-base text-sm text-center mt-1">Php</div>
                    </li>
                    <li>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="text-white lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM5.408 5.89c-.83 0-1.318.64-1.318 1.753v.742c0 1.108.479 1.727 1.318 1.727.69 0 1.138-.435 1.187-1.05h1.147v.114c-.058 1.147-1.029 1.938-2.343 1.938-1.612 0-2.518-1.028-2.518-2.729v-.747c0-1.7.914-2.75 2.518-2.75 1.319 0 2.29.812 2.343 1.999v.11H6.595c-.049-.638-.506-1.108-1.187-1.108Zm5.404 0c-.831 0-1.319.64-1.319 1.753v.742c0 1.108.48 1.727 1.319 1.727.69 0 1.138-.435 1.186-1.05h1.147v.114c-.057 1.147-1.028 1.938-2.342 1.938-1.613 0-2.518-1.028-2.518-2.729v-.747c0-1.7.914-2.75 2.518-2.75 1.318 0 2.29.812 2.342 1.999v.11h-1.147c-.048-.638-.505-1.108-1.186-1.108Z"></path></svg>
                        <div class="text-white sm:text-base text-sm text-center mt-1">C#</div>
                    </li>
                    <li>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-white lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                        <div class="text-white sm:text-base text-sm text-center mt-1">Java</div>
                    </li>
                    <li>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-white lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                        <div class="text-white sm:text-base text-sm text-center mt-1">Java</div>
                    </li>
                    <li>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-white lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                        <div class="text-white sm:text-base text-sm text-center mt-1">Java</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


    <div>
        <div class="overflow-hidden bg-gradient-to-r from-yellow-500 to-red-500 pt-5 pb-36 sm:ps-0 ps-5 sm:pr-0 pr-5">
            <div class="pt-3 relative container mx-auto">
                <div class="left text-white">
                    <span class="lg:text-4xl md:text-2xl sm:text-xl text-2xl font-bold">What We Can Do For You?</span>
                </div>
                <div class="md:text-base sm:text-sm text-xs text-white mt-3 mb-lg-1">
                    Experience a journey of innovation with us, where every pixel, code, and concept converges to transform your dreams into reality. Unveil a spectrum of top-notch development services that empower your business vision to thrive in the boundless realm of possibilities.
                </div>
            </div>
        </div>
        <div class="container mx-auto py-5 bg-white mt-[-126px] md:p-10 sm:p-8 p-5">
            {{-- <div class="bg-white rounded-full border border-solid border-gray-200 px-6 py-1 text-black text-sm  inline-flex mx-auto">hello</div> --}}
            
            <div class="text-black lg:text-4xl md:text-2xl sm:text-xl text-2xl font-semibold mt-3">Avail Exclusive Development Services In Just A Click!</div>
            <div class="md:text-base sm:text-sm text-xs text-black mt-3 mb-lg-1">
                Discover your way to unparalleled growth and creativity while choosing IMG Global Inftech’s growth-driven development services. Seamlessly transform your business ideas into reality with just a click, because innovation starts here. 
            </div>
            <div class="flex flex-row flex-wrap">
                <div class="lg:w-2/5 w-full lg:p-4 lg:px-4 px-0 lg:mt-0 mt-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper flex flex-col">
                            <div class="swiper-slide group/service card flex !w-full transition-colors">
                                <div class="flex group-[.swiper-slide-thumb-active]/service:bg-gray-700/5 group-[.swiper-slide-thumb-active]/service:border-gray-200 sm:group-[.swiper-slide-thumb-active]/service:p-6 group-[.swiper-slide-thumb-active]/service:p-4  group-[.swiper-slide-thumb-active]/service:rounded-3xl group-[.swiper-slide-thumb-active]/service:border group-[.swiper-slide-thumb-active]/service:border-solid sm:px-6 px-4 py-4 flex-row flex-wrap items-start cursor-pointer">
                                    <div class="flex">
                                        <div class="rounded-full bg-gray-700/5 p-2 flex items-center justify-center h-10 w-10 mr-3 ">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5 flex items-center justify-center" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-black sm:text-lg text-base font-semibold">Software Development</p>
                                            <div class=" group-[.swiper-slide-thumb-active]/service:block hidden">
                                                <p class="text-gray-900 text-ellipsis line-clamp-3 sm:text-base text-sm">Avail software development services tailored to your unique business needs. Our software developers combine cutting-edge technology with their expertise to empower your business with innovative software that drives success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group/service card flex !w-full transition-colors">
                                <div class="flex group-[.swiper-slide-thumb-active]/service:bg-fuchsia-400/10 group-[.swiper-slide-thumb-active]/service:border-fuchsia-100 sm:group-[.swiper-slide-thumb-active]/service:p-6 group-[.swiper-slide-thumb-active]/service:p-4 group-[.swiper-slide-thumb-active]/service:rounded-3xl group-[.swiper-slide-thumb-active]/service:border group-[.swiper-slide-thumb-active]/service:border-solid sm:px-6 px-4 py-4 flex-row flex-wrap items-start cursor-pointer bg-white">
                                    <div class="flex">
                                        <div class="rounded-full bg-fuchsia-400/10 p-2 flex items-center justify-center h-10 w-10 mr-3 ">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5 flex items-center justify-center" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-black sm:text-lg text-base font-semibold">Mobile App Development</p>
                                            <div class=" group-[.swiper-slide-thumb-active]/service:block hidden">
                                                <p class="text-gray-900 text-ellipsis line-clamp-3 sm:text-base text-sm">Avail software development services tailored to your unique business needs. Our software developers combine cutting-edge technology with their expertise to empower your business with innovative software that drives success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group/service card flex !w-full transition-colors">
                                <div class="flex group-[.swiper-slide-thumb-active]/service:bg-yellow-400/10 group-[.swiper-slide-thumb-active]/service:border-yellow-100 sm:group-[.swiper-slide-thumb-active]/service:p-6 group-[.swiper-slide-thumb-active]/service:p-4 group-[.swiper-slide-thumb-active]/service:rounded-3xl group-[.swiper-slide-thumb-active]/service:border group-[.swiper-slide-thumb-active]/service:border-solid sm:px-6 px-4 py-4 flex-row flex-wrap items-start cursor-pointer bg-white">
                                    <div class="flex">
                                        <div class="rounded-full bg-yellow-400/10 p-2 flex items-center justify-center h-10 w-10 mr-3 ">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5 flex items-center justify-center" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-black  sm:text-lg text-base font-semibold">Web Development</p>
                                            <div class=" group-[.swiper-slide-thumb-active]/service:block hidden">
                                                <p class="text-gray-900 text-ellipsis line-clamp-3 sm:text-base text-sm">Avail software development services tailored to your unique business needs. Our software developers combine cutting-edge technology with their expertise to empower your business with innovative software that drives success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group/service card flex !w-full transition-colors">
                                <div class="flex group-[.swiper-slide-thumb-active]/service:bg-red-400/20 group-[.swiper-slide-thumb-active]/service:border-red-100 sm:group-[.swiper-slide-thumb-active]/service:p-6 group-[.swiper-slide-thumb-active]/service:p-4 group-[.swiper-slide-thumb-active]/service:rounded-3xl group-[.swiper-slide-thumb-active]/service:border group-[.swiper-slide-thumb-active]/service:border-solid sm:px-6 px-4 py-4 flex-row flex-wrap items-start cursor-pointer bg-white">
                                    <div class="flex">
                                        <div class="rounded-full bg-red-400/20 p-2 flex items-center justify-center h-10 w-10 mr-3 ">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5 flex items-center justify-center" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-black  sm:text-lg text-base font-semibold">Blockchain Development</p>
                                            <div class=" group-[.swiper-slide-thumb-active]/service:block hidden">
                                                <p class="text-gray-900 text-ellipsis line-clamp-3 sm:text-base text-sm">Avail software development services tailored to your unique business needs. Our software developers combine cutting-edge technology with their expertise to empower your business with innovative software that drives success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide group/service card flex !w-full transition-colors">
                                <div class="flex group-[.swiper-slide-thumb-active]/service:bg-green-500/10 group-[.swiper-slide-thumb-active]/service:border-green-100 sm:group-[.swiper-slide-thumb-active]/service:p-6 group-[.swiper-slide-thumb-active]/service:p-4 group-[.swiper-slide-thumb-active]/service:rounded-3xl group-[.swiper-slide-thumb-active]/service:border group-[.swiper-slide-thumb-active]/service:border-solid sm:px-6 px-4 py-4 flex-row flex-wrap items-start cursor-pointer bg-white">
                                    <div class="flex">
                                        <div class="rounded-full bg-green-500/10 p-2 flex items-center justify-center h-10 w-10 mr-3 ">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-5 w-5 flex items-center justify-center" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"></path><path d="M22 9V7h-2V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-2h2v-2h-2v-2h2v-2h-2V9h2zm-4 10H4V5h14v14zM6 13h5v4H6v-4zm6-6h4v3h-4V7zM6 7h5v5H6V7zm6 4h4v6h-4v-6z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-black  sm:text-lg text-base font-semibold">Ecommerce Solutions</p>
                                            <div class=" group-[.swiper-slide-thumb-active]/service:block hidden">
                                                <p class="text-gray-900 text-ellipsis line-clamp-3 sm:text-base text-sm">Avail software development services tailored to your unique business needs. Our software developers combine cutting-edge technology with their expertise to empower your business with innovative software that drives success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:w-3/5 w-full lg:p-4 lg:mt-0 mt-4">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide group/service">
                                <div class="bg-gray-700/5 border-gray-200 sm:p-6 p-4 rounded-3xl border border-solid ">
                                    <div class="bg-white/75 backdrop-blur-sm border border-white/5 sm:p-5 p-3 rounded-lg">
                                        <div class="flex flex-row g-3 flex-wrap w-full ">
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> Bespoke Software Development</a></li></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-black sm:text-xl text-lg font-bold sm:mt-5 ">Core Tech:</div>
                                        <ul class="flex items-center md:justify-between flex-nowrap overflow-x-auto mt-5 gap-3">
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Php</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">C#</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                            <div class="swiper-slide group/service">
                                <div class="bg-fuchsia-400/10 border-fuchsia-100 p-6 rounded-3xl border border-solid ">
                                    <div class="bg-white/50 backdrop-blur-sm border border-white/5 sm:p-5 p-3 rounded-lg">
                                        <div class="flex flex-row g-3 flex-wrap w-full ">
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> Android App Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Cross-Platform App Developmentt</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  iOS App Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> PWA Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> React Native App Development</a></li></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-black sm:text-xl text-lg font-bold sm:mt-5 ">Core Tech:</div>
                                        <ul class="flex items-center md:justify-between flex-nowrap overflow-x-auto mt-5 gap-3">
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Php</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">C#</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                            <div class="swiper-slide group/service">
                                <div class="bg-yellow-400/10 border-yellow-100 p-6 rounded-3xl border border-solid ">
                                    <div class="bg-white/50 backdrop-blur-sm border border-white/5 sm:p-5 p-3 rounded-lg">
                                        <div class="flex flex-row g-3 flex-wrap w-full ">
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Blockchain Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Smart Contract Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">   NFT Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> NFT Marketplace Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Cryptocurrency Exchange Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">Metaverse Development</a></li></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-black sm:text-xl text-lg font-bold sm:mt-5 ">Core Tech:</div>
                                        <ul class="flex items-center md:justify-between flex-nowrap overflow-x-auto mt-5 gap-3">
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Php</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">C#</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                            <div class="swiper-slide group/service">
                                <div class="bg-red-400/20 border-red-100 p-6 rounded-3xl border border-solid ">
                                    <div class="bg-white/50 backdrop-blur-sm border border-white/5 sm:p-5 p-3 rounded-lg">
                                        <div class="flex flex-row g-3 flex-wrap w-full ">
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Blockchain Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Smart Contract Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">   NFT Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> NFT Marketplace Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Cryptocurrency Exchange Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">Metaverse Development</a></li></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-black sm:text-xl text-lg font-bold sm:mt-5 ">Core Tech:</div>
                                        <ul class="flex items-center md:justify-between flex-nowrap overflow-x-auto mt-5 gap-3">
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Php</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">C#</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                            <div class="swiper-slide group/service">
                                <div class="bg-green-500/10 border-green-100 p-6 rounded-3xl border border-solid ">
                                    <div class="bg-white/50 backdrop-blur-sm border border-white/5 sm:p-5 p-3 rounded-lg">
                                        <div class="flex flex-row g-3 flex-wrap w-full ">
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Blockchain Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Smart Contract Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">   NFT Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a"> NFT Marketplace Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">  Cryptocurrency Exchange Development</a></li></ul>
                                            </div>
                                            <div class="sm:w-1/2 w-full sm:mb-0 mb-1">
                                                <ul class="relative list-disc text-black ps-4"><li><a href="javascript:;" class="text-black font-semibold text-sm a">Metaverse Development</a></li></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-black sm:text-xl text-lg font-bold sm:mt-5 ">Core Tech:</div>
                                        <ul class="flex items-center md:justify-between flex-nowrap overflow-x-auto mt-5 gap-3">
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Php</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">C#</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-black lg:w-14 lg:h-14 sm:w-12 sm:h-12 w-10 h-10" xmlns="http://www.w3.org/2000/svg"><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"></path></svg>
                                                <div class="text-black sm:text-base text-sm text-center mt-1">Java</div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                      </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection

@push('scripts')

@endpush