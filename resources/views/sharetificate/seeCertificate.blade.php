@extends('master')
@section('title', 'U-Help | See Certificate')
@section('content')
<div id="before-blue-line" class="flex flex-col pt-[7.813vw]">
    <div class="flex flex-row">
        <div class="flex flex-row items-center justify-center ml-[40vw] mb-[1.25vw]">
            <h5 class="text-center text-[1.875vw] font-bold text-dark-blue-new">Certificate Verified</h5>
            <img class="ml-[1.042vw] items-center justify-center" src="/assets/sharetificate/verified.svg" alt="Certificate Verified">
        </div>
    </div>
    <div>
        <img class="w-4/5 m-auto" src="/assets/sharetificate/divider-blue.svg" alt="Divider Blue">
    </div>
</div>
<div id="after-blue-line" class="flex flex-row mb-[5vw] mt-[3vw] gap-[6vw]">
    <div id="left-content" class="justify-center items-center flex flex-col">
        <img class="shadow-xl ml-[14.5vw] w-[35vw]" src="{{ asset($certificate->path) }}" alt="certificate">
    </div>
    <div id="right-content" class="w-[30vw] h-[28vw] bg-white border border-yellow-new shadow-shadow-custom rounded-[0.5vw] px-[2.5vw] py-[2.5vw] text-[1.3vw] text-dark-blue-new">
        <h3 class="font-medium">This certificate was issued for the event</h3>
        <h5 class="font-normal opacity-50">{{$certificate->event->title}}</h5>
        <h3 class="font-medium mt-[2vw]">Name of Recipient</h3>
        <h5 class="font-normal opacity-50">{{$certificate->recipient->name}}</h5>
        <h3 class="font-medium mt-[2vw]">Issue Date</h3>
        <h5 class="font-normal opacity-50">{{date('d-m-Y', strtotime($certificate->issuing_date))}}</h5>
        <h3 class="font-medium mt-[2vw]">Expired Date</h3>
        <h5 class="font-normal opacity-50">{{date('d-m-Y', strtotime($certificate->expired_date))}}</h5>
    </div>
</div>
@endsection
