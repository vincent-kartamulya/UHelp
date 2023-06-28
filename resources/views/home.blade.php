@extends('master')
@section('title', 'U-Help | Home')
@section('content')
<div id="section-1" class="flex flex-row justify-between bg-slate-100 h-[40vw] w-full absolute z-20 top-[0vw]">
    <div id="left1" class="text-dark-blue-new ml-[8vw]">
        <h1 class="font-bold text-[3vw] mt-[10vw] w-[30vw]">Make Your Daily Activity Easier</h1>
        <div class="text-green-new text-[1.25vw] my-[1.5vw] font-medium">
            <p class="w-[35vw]">Streamline your form filling and certificate generation with our website's innovative features</p>
            <p class="italic">- Save time, stay secure! -</p>
        </div>
        {{-- Muncul saat user belum login --}}
        <div class="flex">
            <a href="#" class="flex bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-[1.25vw] font-bold w-fit h-fit rounded-[1.458vw] shadow-lg items-center">
                <p class="px-[1.667vw] py-[0.625vw]">Start</p>
            </a>
        </div>
    </div>
    <div id="right1" class="absolute right-[2vw] z-10 flex flex-col m-auto">
        <img class="mt-[5vw]" src="/assets/home/section1/rightOrnament.png" alt="Right Ornament">
        <img class="absolute top-[22vw]" src="/assets/home/section1/binus.png" alt="Binus">
    </div>
</div>
<img class="w-full absolute top-[30vw] z-10" src="/assets/home/section1/bottomOrnament.png" alt="">
<div id="section-2">
    <div>
        <img class="absolute z-10 top-[58vw] w-screen" src="/assets/home/section2/background.png" alt="">
    </div>
</div>
<div id="section-3" class="w-full mt-[95vw] flex flex-row justify-center gap-[6vw]">
    <div id="left3">
        <img src="/assets/home/section3/clickandsitImage.png" alt="">
    </div>
    <div id="right3" class="flex flex-col my-auto text-green-new w-2/5">
        <h1 class="font-bold text-[3vw]">Click and Sit</h1>
        <div class="text-dark-blue-new text-[1.25vw] my-[1.5vw] font-medium">
            <p>Easily fill out shuttle booking forms in seconds with our automated feature</p>
            <p class="italic">- Say goodbye to manual data entry and save time! Try it now! -</p>
        </div>
        <div class="flex">
            <a href="#" class="flex bg-yellow-new hover:bg-yellow-hover text-green-new text-[1.25vw] font-bold w-fit h-fit rounded-[1.458vw] shadow-lg items-center">
                <p class="px-[1.667vw] py-[0.625vw]">Start</p>
            </a>
        </div>
    </div>
</div>
<div id="section-4" class="w-full mt-[10vw] flex flex-row justify-center gap-[6vw]">
    <div id="left4" class="flex flex-col my-auto text-green-new w-2/5 text-right">
        <h1 class="font-bold text-[3vw]">Sharetificate</h5>
        <div class="text-dark-blue-new text-[1.25vw] my-[1.5vw] font-medium">
            <p>Create and manage secure certificates with ease using our QR validation feature</p>
            <p class="italic">- Save time and stay organized! -</p>
        </div>
        <div class="flex justify-end">
            <a href="#" class="flex bg-yellow-new hover:bg-yellow-hover text-green-new text-[1.25vw] font-bold w-fit h-fit rounded-[1.458vw] shadow-lg items-center">
                <p class="px-[1.667vw] py-[0.625vw]">Start</p>
            </a>
        </div>
    </div>
    <div id="right4">
        <img class="h-[18vw]" src="/assets/home/section4/sharetificateImage.png" alt="">
    </div>
</div>
<div id="section-5" class="z-10 w-full">
    <img class="w-full" src="/assets/home/section5/frameFooter.png" alt="">
</div>
@endsection
