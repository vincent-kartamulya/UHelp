@extends('master')
@section('title', 'U-Help | Certificates')
@section('content')
{{-- Gambar dan informasi sertifikat --}}
<div class="certificate-container pt-44 pb-24 flex flex-row justify-center">
    <div class="left-content mr-5 w-1/3">
        <img class="certificate-image shadow-2xl w-4/5 m-auto" src="{{ asset($event->template) }}" alt="Certificate Image">
    </div>
    <div class="flex flex-col right-content w-1/2">
        <div class="certificate-info space-y-1">
            <h1 class="seminar-title text-4xl font-bold text-dark-blue-new my-3 break-normal">{{$event->title}}</h1>
            <p class="seminar-date text-2xl font-semibold text-green-new">{{date('l, F d Y', strtotime($event->date))}}</p>
            <p class="seminar-location text-xl font-semibold text-yellow-new">{{$event->location}}</p>
        </div>
        <div class="absolute mt-60">
            <a href="/downloadAll?eventUUID={{ $event->uuid }}" class="flex justify-around bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-xl font-bold w-60 px-6 py-4 rounded-full shadow-lg">
                Download All
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="currentColor" d="M12 15.575q-.2 0-.375-.062T11.3 15.3l-3.6-3.6q-.275-.275-.275-.7t.275-.7q.275-.275.713-.287t.712.262L11 12.15V5q0-.425.288-.713T12 4q.425 0 .713.288T13 5v7.15l1.875-1.875q.275-.275.713-.263t.712.288q.275.275.275.7t-.275.7l-3.6 3.6q-.15.15-.325.213t-.375.062ZM6 20q-.825 0-1.413-.588T4 18v-2q0-.425.288-.713T5 15q.425 0 .713.288T6 16v2h12v-2q0-.425.288-.713T19 15q.425 0 .713.288T20 16v2q0 .825-.588 1.413T18 20H6Z"/></svg>
            </a>
        </div>
    </div>
</div>

{{-- Divider kuning --}}
<div class="flex flex-col mx-auto mt-4">
    <p class="text-center text-4xl font-semibold text-green-new mb-2">Generated Certificates</p>
    <div class="divider-container">
        <img class="w-4/5 m-auto" src="/assets/sharetificate/divider-yellow.svg" alt="Divider Yellow">
    </div>
</div>

{{-- Kontainer list sertifikat --}}
<div id="list-certificates-container" class="relative mx-auto my-20 w-[90%] py-[2.5vw] bg-white border border-white shadow-2xl rounded-2xl">
    {{-- Search bar --}}
    <form>
        <div class="relative flex float-right w-[22%] mr-[5vw]">
            <div class="absolute inset-3 px-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z"/></svg>
            </div>
            <input
                type="search"
                class="relative block flex-auto rounded-full border border-dark-blue-new border-opacity-80 bg-[#FFD272] bg-opacity-[0.15] outline-none pl-12 text-lg text-dark-blue-new font-normal transition duration-100 ease-in-out focus:z-[3] focus:bg-opacity-30 focus:ring-dark-blue-new focus:outline-none focus:border-dark-blue-new focus:text-dark-blue-new placeholder:text-dark-blue-new placeholder:text-opacity-[0.6]"
                placeholder="Search certificate..."
                aria-label="Search"
                aria-describedby="button-search" />
        </div>
    </form>

    {{-- Delete Button ketika select data --}}
    <div id="delete-option" class="absolute flex items-center left-[2.917vw] top-[4.583vw] gap-[0.417vw]">
        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M7 21q-.825 0-1.413-.588T5 19V6q-.425 0-.713-.288T4 5q0-.425.288-.713T5 4h4q0-.425.288-.713T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.588 1.413T17 21H7ZM7 6v13h10V6H7Zm2 10q0 .425.288.713T10 17q.425 0 .713-.288T11 16V9q0-.425-.288-.713T10 8q-.425 0-.713.288T9 9v7Zm4 0q0 .425.288.713T14 17q.425 0 .713-.288T15 16V9q0-.425-.288-.713T14 8q-.425 0-.713.288T13 9v7ZM7 6v13V6Z"/></svg>
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

            {{-- Data 1 --}}
            <?php $i=1; ?>
            @foreach ($participants as $participant)
            <div id="row-data" class="w-full">
                <div id="the-data" class="flex flex-row text-dark-blue-new text-opacity-70 font-normal text-[1.042vw] my-[0.521vw] items-center">
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <input id="default-checkbox" type="checkbox" value="" class="w-[1.042vw] h-[1.042vw] text-green-new border-green-new rounded focus:ring-green-new focus:ring-1 hover:bg-green-new transition duration-200 ease-in-out">
                    </div>
                    <p class="w-[5.208vw]"> {{ str_pad($i++, 3, '0', STR_PAD_LEFT) }} </p>
                    <p class="w-[33.854vw]">{{$participant->name}}</p>
                    <p class="w-[10.417vw]">{{$participant->position}}</p>
                    <p class="w-[29.167vw]">{{$participant->email}}</p>
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <button data-modal-target="popup-modal-update1" data-modal-toggle="popup-modal-update1" type="button" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
                            <svg class="p-[0.104vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="border-[0.052vw] border-yellow-new"></div>
            </div>
            @endforeach
        </div>
    </div>

{{-- Pop Up untuk button Delete --}}
<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="relative w-full max-w-[23.333vw] max-h-full">
        <div class="relative bg-white rounded-[1.042vw] shadow-2xl border-2 border-yellow-new">
            <button type="button" class="absolute top-3 right-2.5 text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-[1.25vw] py-[2.083vw] text-center">
                <h3 class="mb-[1.458vw] mx-[1.042vw] text-[1.25vw] font-medium text-green-new">Are you sure you want to delete these?</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-yellow-new hover:bg-yellow-hover shadow-lg focus:ring-2 focus:outline-none focus:ring-yellow-hover font-medium rounded-[1.042vw] text-[0.938vw] inline-flex items-center px-[1.042vw] py-[0.521vw] text-center mr-[0.417vw]">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-yellow-new bg-white shadow-lg hover:text-yellow-hover hover:bg-gray-50 focus:ring-2 focus:outline-none focus:ring-gray-50 rounded-[1.042vw] border border-gray-50 text-[0.938vw] font-medium px-[1.042vw] py-[0.521vw]">
                    No, cancel
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Pop Up data 1 --}}
<div id="popup-modal-update1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="w-full max-w-4xl max-h-full">
        <form action="">
            <div class="relative bg-white rounded-[1.042vw] shadow-2xl border-2 border-yellow-new">
                <button type="button" class="absolute top-3 right-2.5 text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal-update1">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-[2.083vw]">
                    <h1 class="text-3xl text-dark-blue-new font-bold text-center mb-[2.083vw]">Update Certificate</h1>
                    <div id="form-input">
                        <div id="participant-id" class="flex flex-col mb-[0.8333vw]">
                            <label for="participant_id" class="text-green-new text-[1.25vw] font-semibold">ID</label>
                            <p class="text-[1.25vw] text-gray-600">0001</p>
                        </div>
                        <div id="participant-name" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_name" class="text-green-new text-[1.25vw] font-semibold">Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Nandatama Bagus Adisaka" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-position" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_position" class="text-green-new text-[1.25vw] font-semibold">Position</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Participant" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-email" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_email" class="text-green-new text-[1.25vw] font-semibold">Email</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="bagusadisaka.lec@gmail.com" data-parsley-group="block0" required>
                        </div>
                    </div>
                    <button data-modal-hide="popup-modal-update1" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Save</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Pop Up data 2 --}}
<div id="popup-modal-update2" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="w-full max-w-4xl max-h-full">
        <form action="">
            <div class="relative bg-white rounded-[1.042vw] shadow-2xl border-2 border-yellow-new">
                <button type="button" class="absolute top-3 right-2.5 text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal-update2">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-[2.083vw]">
                    <h1 class="text-3xl text-dark-blue-new font-bold text-center mb-[2.083vw]">Update Certificate</h1>
                    <div id="form-input">
                        <div id="participant-id" class="flex flex-col mb-[0.8333vw]">
                            <label for="participant_id" class="text-green-new text-[1.25vw] font-semibold">ID</label>
                            <p class="text-[1.25vw] text-gray-600">0002</p>
                        </div>
                        <div id="participant-name" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_name" class="text-green-new text-[1.25vw] font-semibold">Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Ni Putu Intan Paramitha Marchila Audy Dewi" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-position" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_position" class="text-green-new text-[1.25vw] font-semibold">Position</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Participant" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-email" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_email" class="text-green-new text-[1.25vw] font-semibold">Email</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="intanparamitha33@gmail.com" data-parsley-group="block0" required>
                        </div>
                    </div>
                    <button data-modal-hide="popup-modal-update2" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Save</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Pop Up data 3 --}}
<div id="popup-modal-update3" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="w-full max-w-4xl max-h-full">
        <form action="">
            <div class="relative bg-white rounded-[1.042vw] shadow-2xl border-2 border-yellow-new">
                <button type="button" class="absolute top-3 right-2.5 text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal-update3">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-[2.083vw]">
                    <h1 class="text-3xl text-dark-blue-new font-bold text-center mb-[2.083vw]">Update Certificate</h1>
                    <div id="form-input">
                        <div id="participant-id" class="flex flex-col mb-[0.8333vw]">
                            <label for="participant_id" class="text-green-new text-[1.25vw] font-semibold">ID</label>
                            <p class="text-[1.25vw] text-gray-600">0003</p>
                        </div>
                        <div id="participant-name" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_name" class="text-green-new text-[1.25vw] font-semibold">Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Vincent Kartamulya Santoso" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-position" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_position" class="text-green-new text-[1.25vw] font-semibold">Position</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Participant" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-email" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_email" class="text-green-new text-[1.25vw] font-semibold">Email</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="vincent.santoso03@gmail.com" data-parsley-group="block0" required>
                        </div>
                    </div>
                    <button data-modal-hide="popup-modal-update3" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Save</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Pop Up data 4 --}}
<div id="popup-modal-update4" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="w-full max-w-4xl max-h-full">
        <form action="">
            <div class="relative bg-white rounded-[1.042vw] shadow-2xl border-2 border-yellow-new">
                <button type="button" class="absolute top-3 right-2.5 text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal-update4">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-[2.083vw]">
                    <h1 class="text-3xl text-dark-blue-new font-bold text-center mb-[2.083vw]">Update Certificate</h1>
                    <div id="form-input">
                        <div id="participant-id" class="flex flex-col mb-[0.8333vw]">
                            <label for="participant_id" class="text-green-new text-[1.25vw] font-semibold">ID</label>
                            <p class="text-[1.25vw] text-gray-600">0004</p>
                        </div>
                        <div id="participant-name" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_name" class="text-green-new text-[1.25vw] font-semibold">Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Zakaria Berlam Pragusma" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-position" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_position" class="text-green-new text-[1.25vw] font-semibold">Position</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="Participant" data-parsley-group="block0" required>
                        </div>
                        <div id="participant-email" class="flex flex-col mb-[1.042vw]">
                            <label for="participant_email" class="text-green-new text-[1.25vw] font-semibold">Email</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-[1.042vw] focus:ring-green-new focus:border-green-new" placeholder="zberlam@gmail.com" data-parsley-group="block0" required>
                        </div>
                    </div>
                    <button data-modal-hide="popup-modal-update4" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Save</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
@endsection
