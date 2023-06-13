@extends('master')
@section('title', 'U-Help | Home')
@section('content')
<div id="content">
    <div id="section 1" class="flex flex-row bg-slate-100 h-[40vw] w-full absolute z-20 top-[0vw]">
        <div id="left">
            <h1 class="font-semibold text-[3.75vw] mt-[10vw] ml-[12vw] w-[31vw]">Make Your Daily Activity Easier</h1>
            <p class="text-[1.25vw] w-[35vw] ml-[12vw] mt-[1.5vw]">Streamline your form filling and certificate generation with our website's innovative features</p>
            <p class="text-[1.25vw] ml-[12vw] w-[30vw]">- Save time, stay secure!</p>
            <a href="">
                <div class="bg-yellow-new shadow-md rounded-[1vw] mt-[1vw] ml-[12vw] w-[8vw] h-[2.5vw] flex text-center justify-center items-center">
                    <h5 class="text-[1.1vw] font-semibold">Start</h5>
                </div>
            </a>
        </div>
        <div id="right">
            <img class="z-10 ml-[17vw] mt-[5vw]" src="/assets/home/section1/rightOrnament.png" alt="Right Ornament">
            <img class="z-10 ml-[17vw] top-[20vw] absolute" src="/assets/home/section1/binus.png" alt="Binus">
        </div>
    </div>
    <img class="w-full absolute top-[30vw] z-10" src="/assets/home/section1/bottomOrnament.png" alt="">
    <div id="section 2">
        <div>
            <img class="absolute z-10 top-[58vw] w-screen" src="/assets/home/section2/background.png" alt="">
        </div>
    </div>
    <div id="section 3" class="mt-[95vw] ml-[18vw] flex flex-row">
        <div id="left">
            <img src="/assets/home/section3/clickandsitImage.png" alt="">
        </div>
        <div id="right" class="ml-[10vw] w-[30vw]">
            <h5 class="mt-[3vw] text-green-new font-bold text-[2.5vw]">Click and Sit</h5>
            <p class="mt-[1vw] text-[1.2vw]">Easily fill out shuttle forms in seconds with our automated feature </p>
            <p class="text-[1.2vw]">- Say goodbye to manual data entry and save time! Try it now!</p>
            <a href="">
                <div class="bg-yellow-new shadow-md rounded-[1vw] mt-[1vw] w-[6.75vw] h-[2.2vw] flex text-center justify-center items-center">
                    <h5 class="text-[1.1vw] font-semibold">Start</h5>
                </div>
            </a>
        </div>
    </div>
    <div id="section 4" class="mt-[10vw] ml-[27.5vw] mb-[15vw] flex flex-row">
        <div id="left" class="mr-[8vw] w-[25vw] text-right">
            <h5 class=" text-green-new font-bold text-[2.5vw] ">Sharetificate</h5>
            <p class="mt-[1vw] text-[1.2vw]">Create and manage secure certificates with ease using our QR validation feature - Save time and stay organized!</p>
            <a href="">
                <div class="bg-yellow-new shadow-md rounded-[1vw] mt-[2vw] w-[6.75vw] h-[2.2vw] flex text-center justify-center items-center ml-[18vw]">
                    <h5 class="text-[1.1vw] font-semibold">Start</h5>
                </div>
            </a>
        </div>
        <div id="right">
            <img class="h-[15vw]" src="/assets/home/section4/sharetificateImage.png" alt="">
        </div>
    </div>
    <div id="section 5" class="absolute z-10 top-[140.9vw] w-full">
        <img class="w-full" src="/assets/home/section5/frameFooter.png" alt="">
    </div>
</div>
@endsection
