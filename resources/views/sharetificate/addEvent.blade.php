@extends('master')
@section('title', 'U-Help | Add Event')
@section('content')
    <div class="element-container">
        <div class="absolute -z-10">
            <img src="/assets/sharetificate/left-element-addEvent.png" alt="Left Element">
        </div>

        <div class="absolute right-0 mt-[9.167vw] -z-10">
            <img src="/assets/sharetificate/right-element-addEvent.png" alt="Right Element">
        </div>
    </div>

    <div class="add-event-container flex flex-col pt-[10vw] mb-[5vw]">
        <div class="m-auto my-[0.417vw]">
            <img src="/assets/sharetificate/addEvent-icon.png" alt="Add Event Icon">
        </div>
        <div class="text-green-new text-[1.563vw] font-semibold mx-auto">
            You don't have any event yet!
        </div>
        <div id="button" class="m-auto my-10 mb-[5vw] text-[0.938vw]">
            <a href="/events/create" class="flex justify-center bg-yellow-new hover:bg-yellow-hover h-full px-[1.4vw] py-[0.8vw] rounded-full shadow-lg items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                    <path fill="#3F487F" stroke="#3F487F" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m-6-6h12"/>
                </svg>
                <p class="text-dark-blue-new text-[1.25vw] font-bold pl-[0.208vw]">Add Event</p>
            </a>
        </div>

    </div>
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
@endsection
