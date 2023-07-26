@extends('masterSign')
@section('title', 'U-Help | See Certificate')
@section('content')
<div id="before-blue-line" class="flex flex-col pt-[1.5vw]">
    <div class="flex flex-row items-center justify-center mb-[1.25vw]">
        <h5 class="text-center text-[1.875vw] font-bold text-dark-blue-new mobile:text-[3.6vw]">Certificate Verified</h5>
        <img class="ml-[1.042vw] w-[4vw] items-center justify-center mobile:w-[6vw] mobile:ml-[1.5vw]" src="/assets/sharetificate/verified.svg" alt="Certificate Verified">
    </div>
    <div>
        <img class="w-4/5 m-auto mobile:w-4/5" src="/assets/sharetificate/divider-blue.svg" alt="Divider Blue">
    </div>
</div>
<div id="after-blue-line" class="flex flex-col justify-center items-center gap-[5vw] mb-[5vw] mt-[3vw] md:flex-row md:gap-[5vw] sm:flex-col mobile:gap-[8vw]">
    <div id="left-content" class="items-center flex flex-col">
        <img class="shadow-xl w-[35vw] mobile:w-4/5" src="{{ asset($certificate->path) }}" alt="certificate">
    </div>
    <div id="right-content" class="flex flex-col justify-center w-[30vw] h-[28vw] bg-white border border-yellow-new shadow-shadow-custom rounded-[0.5vw] px-[2.5vw] py-[2.5vw] text-[1.3vw] text-dark-blue-new mobile:w-[65%] mobile:h-auto mobile:rounded-[1.4vw] mobile:text-[2.5vw]">        <div>
            <h3 class="font-medium">This certificate was issued for the event</h3>
            <h5 class="font-normal opacity-50">{{$certificate->event->title}}</h5>
        </div>
        <div>
            <h3 class="font-medium mt-[2vw]">Name of Recipient</h3>
            <h5 class="font-normal opacity-50">{{$certificate->recipient->name}}</h5>
        </div>
        <div>
            <h3 class="font-medium mt-[2vw]">Issue Date</h3>
            <h5 class="font-normal opacity-50">{{date('d-m-Y', strtotime($certificate->issuing_date))}}</h5>
        </div>
        <div>
            <h3 class="font-medium mt-[2vw]">Expired Date</h3>
            <h5 class="font-normal opacity-50">{{date('d-m-Y', strtotime($certificate->expired_date))}}</h5>
        </div>
    </div>
</div>
@endsection
