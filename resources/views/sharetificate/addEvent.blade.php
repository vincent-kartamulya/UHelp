@extends('master')
@section('title', 'U-Help | Add Event')
@section('content')
    <div class="element-container">
        <div class="absolute -z-10">
            <img src="/assets/sharetificate/left-element-addEvent.png" alt="Left Element">
        </div>

        <div class="absolute right-0 mt-44 -z-10">
            <img src="/assets/sharetificate/right-element-addEvent.png" alt="Right Element">
        </div>
    </div>

    <div class="add-event-container flex flex-col pt-48 mb-[5vw]">
        <div class="m-auto my-2">
            <img src="/assets/sharetificate/addEvent-icon.png" alt="Add Event Icon">
        </div>
        <div class="text-green-new text-3xl font-semibold m-auto my-3">
            You don't have any event yet!
        </div>
        <a href="/events/create" class="text-center bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-60 py-4 rounded-full m-auto my-10 shadow-md">
            + Add Event
        </a>

    </div>
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
@endsection
