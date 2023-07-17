@extends('master')

@section('title', 'U-Help | Certificates')
@section('content')

@if(session('success'))
    <script>
        console.log('Hai');
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success('{{ session('success') }}');
    </script>
@endif

{{-- Gambar dan informasi sertifikat --}}
<div class="certificate-container pt-[9.167vw] pb-[4vw] flex flex-row justify-center">
    <div class="left-content mr-[1.042vw] w-1/3">
        <img class="certificate-image shadow-2xl w-4/5 m-auto" src="{{ asset($event->template) }}" alt="Certificate Image">
    </div>
    <div class="flex flex-col right-content w-1/2">
        <div id="certificate-info" class="space-y-1">
            <h1 id="seminar-title" class="text-[1.875vw] font-bold text-dark-blue-new my-[0.625vw] break-normal">{{$event->title}}</h1>
            <p id="seminar-date" class="text-[1.25vw] font-semibold text-green-new">{{date('l, F d Y', strtotime($event->date))}}</p>
            <p id="seminar-location" class="text-[1.042vw] font-semibold text-yellow-new">{{$event->location}}</p>
        </div>
        <div class="flex gap-[0.833vw] mt-[2.5vw] text-center text-[0.833vw]">
            {{-- Edit --}}
            {{-- <a href="/downloadAll?eventUUID={{ $event->uuid }}" class="group relative flex justify-around bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-[1.042vw] font-semibold w-[3vw] h-[2.5vw] rounded-[0.625vw] shadow-lg items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.563vw" height="1.563vw" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                    <path fill="currentColor" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z"/>
                </svg>
                <span class="hidden group-hover:block absolute mt-[5vw]">Edit</span>
            </a> --}}
            <button data-modal-target="popup-modal-edit" data-modal-toggle="popup-modal-edit" type="button" class="group relative flex justify-around bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-[1.042vw] font-semibold w-[3vw] h-[2.5vw] rounded-[0.625vw] shadow-lg items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.563vw" height="1.563vw" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                    <path fill="currentColor" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6l4.25 4.25Zm-3.525-.725l-.7-.7l1.4 1.4l-.7-.7Z"/>
                </svg>
                <span class="hidden group-hover:block absolute mt-[5vw]">Edit</span>
            </button>
            {{-- Download All --}}
            <a href="/downloadAll?eventUUID={{ $event->uuid }}" class="group relative flex justify-around bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-[1.042vw] font-semibold w-[3vw] h-[2.5vw] rounded-[0.625vw] shadow-lg items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.563vw" height="1.563vw" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                    <path fill="currentColor" d="M12 15.575q-.2 0-.375-.062T11.3 15.3l-3.6-3.6q-.275-.275-.275-.7t.275-.7q.275-.275.713-.287t.712.262L11 12.15V5q0-.425.288-.713T12 4q.425 0 .713.288T13 5v7.15l1.875-1.875q.275-.275.713-.263t.712.288q.275.275.275.7t-.275.7l-3.6 3.6q-.15.15-.325.213t-.375.062ZM6 20q-.825 0-1.413-.588T4 18v-2q0-.425.288-.713T5 15q.425 0 .713.288T6 16v2h12v-2q0-.425.288-.713T19 15q.425 0 .713.288T20 16v2q0 .825-.588 1.413T18 20H6Z"/>
                </svg>
                <span class="hidden group-hover:block w-[10vw] absolute mt-[5vw]">Download All</span>
            </a>
            {{-- Email --}}
            <form action="/sendEmail/{{$event->uuid}}">
                <button type="submit" class="group relative flex justify-around bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-[1.042vw] font-semibold w-[3vw] h-[2.5vw] rounded-[0.625vw] shadow-lg items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.563vw" height="1.563vw" viewBox="0 0 24 24">
                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                        <path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5l-8-5h16zm0 12H4V8l8 5l8-5v10z"/>
                    </svg>
                    <span class="hidden group-hover:block absolute mt-[5vw]">Email</span>
                </button>
            </form>
        </div>
    </div>
</div>

{{-- Divider kuning --}}
<div class="flex flex-col mx-auto mt-[0.833vw]">
    <p class="text-center text-[1.875vw] font-semibold text-green-new mb-[0.417vw]">Generated Certificates</p>
    <div class="divider-container">
        <img class="w-4/5 m-auto" src="/assets/sharetificate/divider-yellow.svg" alt="Divider Yellow">
    </div>
</div>

{{-- Kontainer list sertifikat --}}
<div id="list-certificates-container" class="relative mx-auto my-[4.167vw] w-[90%] py-[2.5vw] bg-white border border-white shadow-2xl rounded-[0.833vw]">
    {{-- Search bar --}}

    <form action="/events/{{$event->uuid}}">
    <div id="eventId" class="relative flex float-right items-center mr-[5vw] w-[20%] h-[2.5vw]">
            <input
            id="input"
            type="search"
            name="search"
            class="relative block h-full flex-auto rounded-l-full border border-r-0 border-dark-blue-new border-opacity-80 bg-[#FFD272] bg-opacity-[0.15] outline-none pl-[1.25vw] text-[0.938vw] text-dark-blue-new transition duration-100 ease-in-out focus:z-[3] focus:bg-opacity-30 focus:ring-0 focus:border-dark-blue-new focus:text-dark-blue-new placeholder:text-dark-blue-new placeholder:text-opacity-[0.6]"
            placeholder="Search certificate..."
            aria-label="Search"
            aria-describedby="button-search"/>

            <button type="submit" class="h-full w-2/12 flex justify-center items-center rounded-r-full border border-l-0 border-dark-blue-new border-opacity-80 bg-yellow-new hover:bg-yellow-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                    <path fill="#3F487F" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z"/>
                </svg>
            </button>
        </div>
    </form>

    {{-- Delete Button ketika select data --}}
    <div id="delete-option" class="absolute flex items-center left-[2.917vw] top-[4.583vw] gap-[0.417vw]">
        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24">
                <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                <path fill="#3F487F" d="M7 21q-.825 0-1.413-.588T5 19V6q-.425 0-.713-.288T4 5q0-.425.288-.713T5 4h4q0-.425.288-.713T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.588 1.413T17 21H7ZM7 6v13h10V6H7Zm2 10q0 .425.288.713T10 17q.425 0 .713-.288T11 16V9q0-.425-.288-.713T10 8q-.425 0-.713.288T9 9v7Zm4 0q0 .425.288.713T14 17q.425 0 .713-.288T15 16V9q0-.425-.288-.713T14 8q-.425 0-.713.288T13 9v7ZM7 6v13V6Z"/>
            </svg>
        </button>
        <p class="text-[0.938vw] text-dark-blue-new text-opacity-60">Delete Selected</p>
    </div>

    {{-- List partisipan --}}
    <div id="participant-list" class="w-[95%] m-auto mt-[5vw]">
        {{-- Title di header --}}
        <div id="row-title" class="w-full">
            <div class="border-[0.156vw] border-yellow-new"></div>
            <div id="the-title" class="flex flex-row text-dark-blue-new font-semibold text-[1.25vw] mx-[3.125vw] my-[0.521vw] items-center">
                <p class="w-[5.208vw]">ID</p>
                <p class="w-[33.854vw]">Name</p>
                <p class="w-[10.417vw]">Position</p>
                <p class="w-[29.167vw]">Email</p>
            </div>
            <div class="border-[0.156vw] border-yellow-new"></div>
        </div>

        {{-- Data --}}
        <?php $i=1; ?>
        <div id="allData">
            @if ($certificates->isEmpty())
                <div id="empty-search" class="flex justify-center my-[5vw]">
                    <p class="text-[1.458vw] font-semibold text-dark-blue-new text-opacity-60">Your search for "{{$searchQuery}}" is not found.</p>
                </div>
            @else
            @foreach ($certificates as $certificate)
                <div id="row-data{{$certificate->id}}" class="w-full">
                    <div id="the-data" class="flex flex-row text-dark-blue-new text-opacity-70 font-normal text-[1.042vw] my-[0.521vw] items-center">
                        <div class="flex justify-center items-center w-[3.125vw]">
                            <input id="default-checkbox" type="checkbox" value="{{$certificate->id}}" class="w-[1.042vw] h-[1.042vw] text-green-new border-green-new rounded focus:ring-green-new focus:ring-1 hover:bg-green-new transition duration-200 ease-in-out">
                        </div>
                        <p id="participant-number" class="w-[5.208vw] participant-number"> {{ str_pad($i++, 3, '0', STR_PAD_LEFT) }} </p>
                        <p id="participant-name" class="w-[33.854vw] participant-name">{{$certificate->recipient->name}}</p>
                        <p id="participant-position" class="w-[10.417vw] participant-position">{{$certificate->recipient->position}}</p>
                        <p id="participant-email" class="w-[29.167vw] participant-email">{{$certificate->recipient->email}}</p>
                        <div class="flex justify-center items-center w-[3.125vw]">
                            <button id="update-certificate" value="{{$certificate}}" data-modal-target="popup-modal-update1" data-modal-toggle="popup-modal-update1" type="button" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
                                <svg class="p-[0.104vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24">
                                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                                    <path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="border-[0.052vw] border-yellow-new"></div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

{{-- Pop Up untuk Edit --}}
<div id="popup-modal-edit" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="w-full max-w-[46vw] max-h-full">
        <form action="/events/{{$event->uuid}}" method="POST">
            @method('PUT')
            @csrf
            <div class="relative bg-white rounded-[0.833vw] shadow-2xl border-[0.208vw] border-yellow-new">
                <button type="button" class="absolute top-[0.625vw] right-[0.625vw] text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-[0.417vw] text-[0.729vw] p-[0.313vw] ml-auto inline-flex items-center" data-modal-hide="popup-modal-edit">
                    <svg aria-hidden="true" class="w-[1.563vw] h-[1.563vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-[2.083vw]">
                    <h1 class="text-[1.354vw] text-dark-blue-new font-bold text-center mb-[2.083vw]">Event Information</h1>
                    <div id="form-input" class="text-[1.25vw]">
                        <div class="event-title flex flex-col">
                            <label for="event_name" class="text-green-new text-[1.25vw] font-semibold mb-[0.625vw]">Title</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.417vw] text-[0.938vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="{{$event->title}}" data-parsley-group="block0">
                        </div>
                        <div id="loc-and-date" class="flex justify-between">
                            <div class="event-loc flex flex-col w-1/2">
                                <label for="event_location" class="text-green-new text-[1.25vw] font-semibold mt-[2.5vw] mb-[0.625vw]">Location</label>
                                <input type="text" name="event_location" id="event_location" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.417vw] text-[0.938vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="{{$event->location}}" data-parsley-group="block0">
                            </div>
                            <div class="event-date flex flex-col w-2/5">
                                <label for="event_date" class="text-green-new text-[1.25vw] font-semibold mt-[2.5vw] mb-[0.625vw]">Date</label>
                                <div class="relative flex flex-col">
                                    <input datepicker type="text" name="event_date" id="event_date" class="form-control relative w-full border border-yellow-new rounded-[0.417vw] text-[0.938vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="{{$event->date->format('m/d/Y')}}" data-parsley-group="block0">
                                    <div class="absolute right-[0.6vw] top-[0.5vw] flex items-center">
                                        <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                                            <rect x="0" y="0" width="1.25vw" height="1.25vw" fill="none" stroke="none" />
                                            <path fill="currentColor" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="update" data-modal-hide="popup-modal-edit" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[3vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Update</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Pop Up untuk button Delete --}}
<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="relative w-full max-w-[23.333vw] max-h-full">
        <div class="relative bg-white rounded-[1.042vw] shadow-2xl border-[0.104vw] border-yellow-new">
            <button type="button" class="absolute top-[0.625vw] right-[0.521vw] text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-[0.417vw] text-[0.729vw] p-[0.313vw] ml-auto inline-flex items-center" data-modal-hide="popup-modal">
                <svg aria-hidden="true" class="w-[1.042vw] h-[1.042vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-[1.25vw] py-[2.083vw] text-center">
                <h3 class="mb-[1.458vw] mx-[1.042vw] text-[1.25vw] font-medium text-green-new">Are you sure you want to delete these?</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-yellow-new bg-white border border-yellow-new shadow-lg hover:text-yellow-hover hover:bg-gray-100 rounded-[1.25vw] text-[0.938vw] font-medium px-[1.042vw] py-[0.521vw]">
                    No, cancel
                </button>
                <button id="deleteSelected" data-modal-hide="popup-modal" type="button" class="text-white bg-yellow-new hover:bg-yellow-hover shadow-lg font-medium rounded-[1.25vw] text-[0.938vw] inline-flex items-center px-[1.042vw] py-[0.521vw] text-center mr-[0.417vw]">
                    Yes, I'm sure
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Pop Up data --}}
<div id="popup-modal-update1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="w-full max-w-[40vw] max-h-full">
        <form action="#">
            <div class="relative bg-white rounded-[1.042vw] shadow-2xl border-[0.104vw] border-yellow-new">
                <button type="button" class="absolute top-[0.625vw] right-[0.625vw] text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-[0.417vw] text-[0.729vw] p-[0.313vw] ml-auto inline-flex items-center" data-modal-hide="popup-modal-update1">
                    <svg aria-hidden="true" class="w-[1.563vw] h-[1.563vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-[2.083vw]">
                    <h1 class="text-[1.354vw] text-dark-blue-new font-bold text-center mb-[2.083vw]">Update Certificate</h1>
                    <div id="form-input" class="text-green-new text-[1.25vw]">
                        <div id="participant-id" class="flex flex-col mb-[0.8333vw]">
                            <label for="participant_id" class="font-medium">ID</label>
                            <p id="participant_id" class="text-gray-600">0001</p>
                        </div>
                        <div id="participant-name" class="flex flex-col mb-[1.25vw]">
                            <label for="participant_name_input" class="font-medium mb-[0.208vw]">Name</label>
                            <input type="text" name="participant_name_input" id="participant_name_input" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.625vw] focus:ring-green-new focus:border-green-new" placeholder="Name" data-parsley-group="block0">
                        </div>
                        <div id="participant-position" class="flex flex-col mb-[1.25vw]">
                            <label for="participant_position_input" class="font-medium mb-[0.208vw]">Position</label>
                            <input type="text" name="participant_position_input" id="participant_position_input" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.625vw] focus:ring-green-new focus:border-green-new" placeholder="Participant" data-parsley-group="block0">
                        </div>
                        <div id="participant-email" class="flex flex-col mb-[1.25vw]">
                            <label for="participant_email_input" class="font-medium mb-[0.208vw]">Email</label>
                            <input type="text" name="participant_email_input" id="participant_email_input" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.625vw] focus:ring-green-new focus:border-green-new" placeholder="Email" data-parsley-group="block0">
                        </div>
                    </div>
                    <button id="save" data-modal-hide="popup-modal-update1" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Save</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/node_modules/flowbite/dist/datepicker.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const deleteOption = document.getElementById('delete-option');
      const checkboxes = document.querySelectorAll('#default-checkbox');

      // Hide the delete option initially
      deleteOption.style.display = 'none';

      // Add a click event listener to each checkbox
      checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('click', () => {
          const checkedCheckboxes = document.querySelectorAll('#default-checkbox:checked');
          deleteOption.style.display = checkedCheckboxes.length > 0 ? '' : 'none';
        });
      });
    });
</script>
<script>
    $(function() {
        $("#deleteSelected").click(function(e) {
            e.preventDefault();
            var allId = [];
            $('input:checkbox[id=default-checkbox]:checked').each(function() {
                allId.push($(this).val());
            });

            $.ajax({
                url: "/deleteCertificate",
                type: "DELETE",
                data: {
                    id: allId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    var currentURL = window.location.href; // Get the current URL
                    var baseURL = currentURL.split('?')[0];
                    window.location.href = baseURL;
                }
            });
        });
    });
</script>
<script>
    // const updateButton = document.getElementById("update-certificate");
    const updateButtons = document.querySelectorAll("#update-certificate");
    const saveButton = document.getElementById("save")
    let certificate, nameInput, positionInput, emailInput;

    updateButtons.forEach(button => {
        button.addEventListener('click', function() {
            certificate = JSON.parse(this.value);
            // Get the participant number from the row

            participantNumber = this.parentNode.parentNode.querySelector(".participant-number").textContent.trim();

            // Update the participant ID field in the modal
            const participantId = document.getElementById("participant_id");
            participantId.textContent = participantNumber;

            nameInput = document.getElementById('participant_name_input');
            nameInput.placeholder = certificate.recipient.name;

            positionInput = document.getElementById('participant_position_input');
            positionInput.placeholder = certificate.recipient.position;

            emailInput = document.getElementById('participant_email_input');
            emailInput.placeholder = certificate.recipient.email;
        });
    });

    saveButton.addEventListener('click', function(){
        event.preventDefault();
        let updatedEmail = emailInput.value;
        let updatedName = nameInput.value;
        let updatedPosition = positionInput.value;
        if(updatedEmail === ""){
            updatedEmail = certificate.recipient.email;
        }
        if(updatedName === ""){
            updatedName = certificate.recipient.name;
        }
        if(updatedPosition === ""){
            updatedPosition = certificate.recipient.position;
        }

        $.ajax({
            url: "/updateCertificate",
            type: "PUT",
            data: {
                _token: '{{ csrf_token() }}',
                certificateId: certificate.id,
                email: updatedEmail,
                name: updatedName,
                position: updatedPosition
            },
            success: function(response) {
                // Reload the page
                var baseURL = window.location.origin + window.location.pathname;

                window.location.href = baseURL;
            }
        })
    })
</script>

@endsection
