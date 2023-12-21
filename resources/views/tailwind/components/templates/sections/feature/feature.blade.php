@extends('index')
@push('meta')
@endpush

@push('styles')
@endpush

@section('content')

<div class="container mx-auto mt-36">
    <div class="text-center mb-9"><p class="mt-4 select-none max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black"><span class="font-normal">Frequently Asked </span> <span class="font-bold bg-gradient-to-r from-theme6 via-yellow-600 to-theme6 bg-clip-text text-transparent">Questions</span></p></div>
    <div class="accordion lg:w-3/4 w-full mx-auto">
        <div class="accordion-item sm:mb-6 mb-4 rounded-[35px] shadow-md bg-gradient-to-r from-gray-100/25 via-gray-100/50 to-orange-100/25 border border-orange-100">
            <button class="group/accordion accordion-btn relative w-full" type="button">
                <span class=" w-full bg-gradient-to-r from-yellow-950 to-yellow-700 lg:text-base text-sm text-start capitalize font-medium z-10 text-white rounded-t-none rounded-b-4xl px-5 py-5 flex group-[.active]/accordion:bg-gradient-to-r group-[.active]/accordion:from-rose-800 group-[.active]/accordion:via-rose-600 group-[.active]/accordion:to-rose-400 group-[.active]/accordion:text-white">
                    What is the Difference Between Cross-Platform and Native App Development? 
                </span>
                <span class="absolute top-3 sm:right-5 right-3 group-[.active]/accordion:rotate-180">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-10 w-7 text-white font-normal" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </span>
            </button>
            <div class="accordion-body py-4 px-5">
                <div class="text-dark md:text-sm text-xs"> 
                    Cross-platform app development refers to development that runs on various platforms,
                    like iOS and Android. It's built using a single codebase that can be used across various
                    platforms, despite having to write codes separately for every platform. Native app
                    development refers to app development that is specifically built to run on a single
                    platform, like Android or iOS. Such apps are written in specific programming languages
                    and frameworks for that particular platform, like Java or Kotlin for Android.
                </div>
            </div>
        </div>

        <div class="accordion-item sm:mb-6 mb-4 rounded-[35px] shadow-md bg-gradient-to-r from-gray-100/25 via-gray-100/50 to-orange-100/25 border border-orange-100">
            <button class="group/accordion accordion-btn relative w-full" type="button">
                <span class=" w-full bg-gradient-to-r from-yellow-950 to-yellow-700 lg:text-base text-sm text-start capitalize font-medium z-10 text-white rounded-t-none rounded-b-4xl px-5 py-5 flex group-[.active]/accordion:bg-gradient-to-r group-[.active]/accordion:from-rose-800 group-[.active]/accordion:via-rose-600 group-[.active]/accordion:to-rose-400 group-[.active]/accordion:text-white">
                    What is the Difference Between Cross-Platform and Native App Development? 
                </span>
                <span class="absolute top-3 sm:right-5 right-3 group-[.active]/accordion:rotate-180">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-10 w-7 text-white font-normal" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </span>
            </button>
            <div class="accordion-body py-4 px-5 hidden group-[.active]/accordion:block">
                <div class="text-dark md:text-sm text-xs"text-xs> 
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
        <div class="accordion-item sm:mb-6 mb-4 rounded-[35px] shadow-md bg-gradient-to-r from-gray-100/25 via-gray-100/50 to-orange-100/25 border border-orange-100">
            <button class="group/accordion accordion-btn relative w-full bg-gradient-to-r from-yellow-950 to-yellow-700 lg:text-base text-sm text-start capitalize font-medium z-10 text-white rounded-full px-5 py-5  group-[.active]/accordion:bg-gradient-to-r group-[.active]/accordion:from-red-900 group-[.active]/accordion:via-brown-900 group-[.active]/accordion:to-orange" type="button">
                How much does it cost to develop a mobile app?
                <span class="absolute top-3 sm:right-5 right-3 group-[.active]/accordion:rotate-180">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-10 w-7 text-white font-normal" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </span>
            </button>
            <div class="accordion-body py-4 px-5 hidden group-[.active]/accordion:block">
                <div class="text-dark md:text-sm text-xs"text-xs> 
                    The cost of mobile app development, on average, may start from $10,000 and go up depending on the app complexity, type of app, number of features you want to include, and more factors.
                </div>
            </div>
        </div>
        <div class="accordion-item sm:mb-6 mb-4 rounded-[35px] shadow-md bg-gradient-to-r from-gray-100/25 via-gray-100/50 to-orange-100/25 border border-orange-100">
            <button class="group/accordion accordion-btn relative w-full bg-gradient-to-r from-yellow-950 to-yellow-700 lg:text-base text-sm text-start capitalize font-medium z-10 text-white rounded-full px-5 py-5  group-[.active]/accordion:bg-gradient-to-r group-[.active]/accordion:from-red-900 group-[.active]/accordion:via-brown-900 group-[.active]/accordion:to-orange-900" type="button">
                How long will it take to build and launch my app ?
                <span class="absolute top-3 sm:right-5 right-3 group-[.active]/accordion:rotate-180">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-10 w-7 text-white font-normal" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </span>
            </button>
            <div class="accordion-body py-4 px-5 hidden group-[.active]/accordion:block">
                <div class="text-dark md:text-sm text-xs"text-xs> 
                    The time to develop and launch a mobile app may vary depending on the app's  complexity, development team size, and resources available to the team. A basic mobile app holding minimal functionality and features may take a fewmonths, while a complex app may take a year or even more.
                </div>
            </div>
        </div>
        <div class="accordion-item sm:mb-6 mb-4 rounded-[35px] shadow-md bg-gradient-to-r from-gray-100/25 via-gray-100/50 to-orange-100/25 border border-orange-100">  
            <button class="group/accordion accordion-btn relative w-full bg-gradient-to-r from-yellow-950 to-yellow-700 lg:text-base text-sm text-start capitalize font-medium z-10 text-white rounded-b-none rounded-e-none rounded-t-4xl px-5 py-5 group-[.active]/accordion:rounded-full group-[.active]/accordion:bg-gradient-to-r group-[.active]/accordion:from-red-900 group-[.active]/accordion:via-brown-900 group-[.active]/accordion:to-orange-900" type="button">
                Do you provide ongoing support, maintenance, and updates ?
                <span class="absolute top-3 sm:right-5 right-3 group-[.active]/accordion:rotate-180">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="h-10 w-7 text-white font-normal" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                </span>
            </button>
            <div class="accordion-body py-4 px-5 hidden group-[.active]/accordion:block">
                <div class="text-dark md:text-sm text-xs"text-xs> 
                    Yes, we offer ongoing support, maintenance, and updates post-deployment of your app. Such a service will help to keep your app up-to-date with the latest security updates and technology and resolve the issues, if any, on time
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('scripts')

@endpush