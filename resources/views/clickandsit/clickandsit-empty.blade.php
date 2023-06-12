@extends('master')
@section('U-Help | Click and Sit')
@section('content')
    <div id="ornament" class="flex flex-row">
        <div id="center ornament" class="pt-[5vw] m-auto">
            <img src="/assets/clickandsit/clickandsit/empty/centerOrnament.png" alt="Center Ornament">
        </div>

        <div id="left ornament" class="absolute mt-[8vw] -z-10">
            <img src="/assets/clickandsit/clickandsit/empty/leftOrnament.png" alt="Left Ornament">
        </div>

        <div id="right ornament" class="absolute right-[0vw] mt-[5vw] -z-10">
            <img src="/assets/clickandsit/clickandsit/empty/rightOrnament.png" alt="Right Ornament">
        </div>
    </div>

    <div id="text and button" class="flex flex-col pt-[3vw] mb-[5vw]">
        <div id="text" class="text-green-new text-3xl font-semibold m-auto my-3">
            You don't have any schedule yet!
        </div>

        <div id="button" class="m-auto my-10">
            <a href="/createTemplate">
                <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-60 py-4 rounded-full shadow-md">
                    + Add Schedule
                </button>
            </a>
        </div>
    </div>
@endsection
