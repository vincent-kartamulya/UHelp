@extends('master')
@section('title', 'U-Help | Click and Sit')
@section('content')
<div id="ornament" class="flex flex-row">
    <div id="center-ornament" class="pt-[5vw] m-auto">
        <img src="/assets/clickandsit/clickandsit/empty/centerOrnament.png" alt="Center Ornament">
    </div>

    <div id="left-ornament" class="absolute mt-[8vw] -z-10">
        <img src="/assets/clickandsit/clickandsit/empty/leftOrnament.png" alt="Left Ornament">
    </div>

    <div id="right-ornament" class="absolute right-[0vw] mt-[5vw] -z-10">
        <img src="/assets/clickandsit/clickandsit/empty/rightOrnament.png" alt="Right Ornament">
    </div>
</div>

<div id="text-and-button" class="flex flex-col pt-[3vw]">
    <div id="text" class="text-green-new text-3xl font-semibold m-auto my-3">
        You don't have any schedule yet!
    </div>

    <div id="button" class="m-auto my-10 mb-[5vw] text-[0.938vw]">
        <a href="/createTemplate" class="flex justify-center bg-yellow-new hover:bg-yellow-hover h-full px-[1.4vw] py-[0.8vw] rounded-full shadow-lg items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                <path fill="#3F487F" stroke="#3F487F" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m-6-6h12"/>
            </svg>
            <p class="text-dark-blue-new text-[1.25vw] font-bold pl-[0.208vw]">Add Schedule</p>
        </a>
    </div>
</div>
@endsection
