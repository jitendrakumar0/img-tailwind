@extends('index')
@push('meta')
@endpush

@push('styles')
@endpush

@section('content')
<div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
        <div class="max-w-xl lg:max-w-lg">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Subscribe to our newsletter.</h2>
            <p class="mt-4 text-lg leading-8 text-gray-300">Nostrud amet eu ullamco nisi aute in ad minim nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
            <div class="mt-6 flex max-w-md gap-x-4">
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Enter your email">
                <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
            </div>
        </div>
        <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
            <div class="flex flex-col items-start">
                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
                </div>
                <dt class="mt-4 font-semibold text-white">Weekly articles</dt>
                <dd class="mt-2 leading-7 text-gray-400">Non laboris consequat cupidatat laborum magna. Eiusmod non irure cupidatat duis commodo amet.</dd>
            </div>
            <div class="flex flex-col items-start">
                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                </svg>
                </div>
                <dt class="mt-4 font-semibold text-white">No spam</dt>
                <dd class="mt-2 leading-7 text-gray-400">Officia excepteur ullamco ut sint duis proident non adipisicing. Voluptate incididunt anim.</dd>
            </div>
        </dl>
    </div>
    </div>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
        <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>




<section class="newsletter py-5">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative mx-4 overflow-hidden bg-indigo-50 px-4 py-12 sm:py-16 md:py-20 sm:-mx-6 sm:px-6 md:mx-0 rounded-4xl md:px-12 xl:px-24 xl:py-36">
            <div class="backImg bg-[url('../img/newsBack.jpg')] h-full w-full bg-center absolute lg:left-1/2 top-0  translate-x-[-5%]  md:translate-x-[-7%] lg:translate-x-[-50%]">
            </div>
            <div class="relative mx-auto grid max-w-2xl grid-cols-1 gap-x-32 gap-y-8 sm:gap-y-10 md:gap-y-14 xl:max-w-none xl:grid-cols-2">
                <div>
                    <div class="font-display text-4xl font-medium tracking-tighter text-blue-900 sm:text-5xl">
                        Stay up to date
                    </div>
                    <div class="mt-4 text-lg tracking-tight text-blue-900">
                        Get updates on all of our events and be the first to get notified when tickets go on sale.
                    </div>
                </div>
                <form>
                    <div class="text-lg font-semibold tracking-tight text-blue-900">
                        Sign up to our newsletter <span>↓</span>
                    </div>
                    <div class="mt-5 flex rounded-3xl bg-white py-2.5 pr-2.5 shadow-xl shadow-blue-900/5 focus-within:ring-2 focus-within:ring-blue-900">
                        <input type="email" placeholder="Email address" class="-my-2.5 flex-auto bg-transparent pl-3 sm:pl-6 pr-2.5 border-none outline-none shadow-none text-base text-slate-900 placeholder:text-slate-400  focus:!border-none focus:!outline-none focus:ring-transparent">
                        <button class="inline-flex justify-center rounded-2xl bg-blue-600 p-2 sm:p-3 md:p-4 text-base font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70">
                            <span class="sr-only sm:not-sr-only">Sign up today</span>
                            <span class="sm:hidden">
                                <svg aria-hidden="true" viewBox="0 0 24 24" class="h-6 w-6"><path d="m14 7 5 5-5 5M19 12H5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </span>
                        </button>
                    </div></form>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')

@endpush