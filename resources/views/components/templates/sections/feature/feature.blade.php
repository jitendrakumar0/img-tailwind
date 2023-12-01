@extends('index')
@push('meta')
@endpush

@push('styles')
@endpush

@section('content')
<div class="container bg-theme1 mx-auto p-10">
    <div class="flex flex-row w-[100%] gap-3">
        <div class=" p-5 w-[50%] bg-white/5 backdrop-blur-sm rounded-[20px] border-[1px] border-solid border-[white]/10">
            <div class="flex items-center">
                <div>
                    <div class="w-14 h-14  bg-[white]/10 border-[1px]  border-[white]/10 p-2 rounded-[23px]   flex items-center justify-center">   <img src="{{asset("img/Browser.svg")}}" alt="thanku" class="img-fluid w-100 h-100 z-10 "></div>
                </div>
                <div class="ms-3">
                    <div class="text-white font-semibold text-[20px]">Digital Marketing Services</div>
                    <div class="text-white text-[16px] font-normal mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, illo nem nihil vitae omnis alias illo exercitationem deserunt natus.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush