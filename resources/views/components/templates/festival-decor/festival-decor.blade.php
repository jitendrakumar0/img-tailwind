
@php
    $currentDate = now()->format('Y-m-d');
    $xmas = ($currentDate >= '2023-12-18' && $currentDate <= '2023-12-26');
    $newYear = ($currentDate >= '2023-12-28' && $currentDate <= '2024-01-02');
@endphp

@if($xmas)
    <div class="snow-container fixed top-0 left-0 overflow-hidden w-screen h-screen z-[99999] pointer-events-none select-none"></div>
    {{-- <div class="santa_chis_box max-md:hidden">
        <span class="after:animate-fall animate-diagonalfall hidden pointer-events-none select-none"></span>
        <img class="senta-cap-open santa-animation fixed -bottom-5 pointer-events-none select-none left-0 block z-[99] h-auto w-full max-w-[215px]"  src="public{{mix('/img/snowfall-xmas/santa.webp')}}" width="215" height="166" alt="santa">
        <img class="santa-cap !hidden fixed bottom-10 left-0 z-10 pointer-events-none select-none cursor-pointer h-auto" src="public{{mix('/img/snowfall-xmas/santaopen.webp')}}" width="40" height="103" alt="santaopen">
        <div onclick="setRemoveSanta()" class="santatop fixed bottom-40 left-2 z-10 text-white text-xl cursor-pointer">✕</div>
    </div> --}}
    <script src="{{asset('public'.mix('/js/festival-decor/snowfall-xmas/snowfall-xmas.js'))}}" defer></script>
@endif


@if($newYear)
    <canvas id="canvas" class="fixed top-0 left-0 overflow-hidden w-screen h-screen z-[99999] pointer-events-none select-none"></canvas>
    <script src="{{asset('public'.mix('/js/festival-decor/newYear/newYear.js'))}}" defer></script>
@endif


