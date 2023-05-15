<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Generated Certificate</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100 font-font-poppins">
    <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg top-0 fixed z-50">
        <div class="logo-container absolute left-6">
            <a href="/home">
                <img class="logo-pict w-44" src="/assets/logo.jpg" alt="UHelp Logo">
            </a>
        </div>
        <div class="features-container w-1/5 m-auto">
            <ul class="flex flex-row justify-around text-green-new text-2xl text-center">
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="/clickandsit/empty">Click and Sit</a>
                </li>
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="/addEvent">Sharetificate</a>
                </li>
            </ul>
        </div>
        <div class="profile-container absolute right-8">
            <a href="/profile">
                <img class="logo-pict w-16 rounded-full" src="/assets/profil.jpg" alt="Profile Picture">
            </a>
        </div>
    </nav>

    {{-- Gambar dan informasi sertifikat --}}
    <div class="certificate-container pt-44 pb-24 flex flex-row justify-center">
        <div class="left-content mr-5 w-1/3">
            <img class="certificate-image shadow-2xl w-4/5 m-auto" src="/assets/sharetificate/certificate.png" alt="Certificate Image">
        </div>
        <div class="flex flex-col right-content w-1/2">
            <div class="certificate-info space-y-1">
                <h1 class="seminar-title text-4xl font-bold text-dark-blue-new my-3 break-normal">Online Webinar for Business Workshop by Wardiere Inc.</h1>
                <p class="seminar-date text-2xl font-semibold text-green-new">Wednesday, April 05th 2023</p>
                <p class="seminar-location text-xl font-semibold text-yellow-new">BINUS University</p>
            </div>
            <div class="absolute mt-60">
                <button class="flex justify-around bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-xl font-bold w-60 px-6 py-4 rounded-full shadow-lg">
                    Download All
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="currentColor" d="M12 15.575q-.2 0-.375-.062T11.3 15.3l-3.6-3.6q-.275-.275-.275-.7t.275-.7q.275-.275.713-.287t.712.262L11 12.15V5q0-.425.288-.713T12 4q.425 0 .713.288T13 5v7.15l1.875-1.875q.275-.275.713-.263t.712.288q.275.275.275.7t-.275.7l-3.6 3.6q-.15.15-.325.213t-.375.062ZM6 20q-.825 0-1.413-.588T4 18v-2q0-.425.288-.713T5 15q.425 0 .713.288T6 16v2h12v-2q0-.425.288-.713T19 15q.425 0 .713.288T20 16v2q0 .825-.588 1.413T18 20H6Z"/></svg>
                </button>
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
            <div id="row-data" class="w-full">
                <div id="the-data" class="flex flex-row text-dark-blue-new text-opacity-70 font-normal text-[1.042vw] my-[0.521vw] items-center">
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <input id="default-checkbox" type="checkbox" value="" class="w-[1.042vw] h-[1.042vw] text-green-new border-green-new rounded focus:ring-green-new focus:ring-1 hover:bg-green-new transition duration-200 ease-in-out">
                    </div>
                    <p class="w-[5.208vw]">0001</p>
                    <p class="w-[33.854vw]">Nandatama Bagus Adisaka</p>
                    <p class="w-[10.417vw]">Participant</p>
                    <p class="w-[29.167vw]">bagusadisaka.lec@gmail.com</p>
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <button data-modal-target="popup-modal-update1" data-modal-toggle="popup-modal-update1" type="button" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
                            <svg class="p-[0.104vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="border-[0.052vw] border-yellow-new"></div>
            </div>

            {{-- Data 2 --}}
            <div id="row-data" class="w-full">
                <div id="the-data" class="flex flex-row text-dark-blue-new text-opacity-70 font-normal text-[1.042vw] my-[0.521vw] items-center">
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <input id="default-checkbox" type="checkbox" value="" class="w-[1.042vw] h-[1.042vw] text-green-new border-green-new rounded focus:ring-green-new focus:ring-1 hover:bg-green-new transition duration-200 ease-in-out">
                    </div>
                    <p class="w-[5.208vw]">0002</p>
                    <p class="w-[33.854vw]">Ni Putu Intan Paramitha Marchila Audy Dewi</p>
                    <p class="w-[10.417vw]">Participant</p>
                    <p class="w-[29.167vw]">intanparamitha33@gmail.com</p>
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <button data-modal-target="popup-modal-update2" data-modal-toggle="popup-modal-update2" type="button" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
                            <svg class="p-[0.104vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="border-[0.052vw] border-yellow-new"></div>
            </div>

            {{-- Data 3 --}}
            <div id="row-data" class="w-full">
                <div id="the-data" class="flex flex-row text-dark-blue-new text-opacity-70 font-normal text-[1.042vw] my-[0.521vw] items-center">
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <input id="default-checkbox" type="checkbox" value="" class="w-[1.042vw] h-[1.042vw] text-green-new border-green-new rounded focus:ring-green-new focus:ring-1 hover:bg-green-new transition duration-200 ease-in-out">
                    </div>
                    <p class="w-[5.208vw]">0003</p>
                    <p class="w-[33.854vw]">Vincent Kartamulya Santoso</p>
                    <p class="w-[10.417vw]">Participant</p>
                    <p class="w-[29.167vw]">vincent.santoso03@gmail.com</p>
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <button data-modal-target="popup-modal-update3" data-modal-toggle="popup-modal-update3" type="button" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
                            <svg class="p-[0.104vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="border-[0.052vw] border-yellow-new"></div>
            </div>

            {{-- Data 4 --}}
            <div id="row-data" class="w-full">
                <div id="the-data" class="flex flex-row text-dark-blue-new text-opacity-70 font-normal text-[1.042vw] my-[0.521vw] items-center">
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <input id="default-checkbox" type="checkbox" value="" class="w-[1.042vw] h-[1.042vw] text-green-new border-green-new rounded focus:ring-green-new focus:ring-1 hover:bg-green-new transition duration-200 ease-in-out">
                    </div>
                    <p class="w-[5.208vw]">0004</p>
                    <p class="w-[33.854vw]">Zakaria Berlam Pragusma</p>
                    <p class="w-[10.417vw]">Participant</p>
                    <p class="w-[29.167vw]">zberlam@gmail.com</p>
                    <div class="flex justify-center items-center w-[3.125vw]">
                        <button data-modal-target="popup-modal-update4" data-modal-toggle="popup-modal-update4" type="button" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
                            <svg class="p-[0.104vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="border-[0.052vw] border-yellow-new"></div>
            </div>
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

    <footer class="bg-[#92AA68]">
        <div id="footer" class="mx-auto w-full p-4 py-6 pt-[3vw] max-w-screen-2xl mt-[10vw]">
            <h5 class="self-center text-[1.5vw] font-semibold whitespace-nowrap text-yellow-new font-shadow mb-3 ">U-Help</h5>
            <div id="upper white line" class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <h5 class="w-[18vw] text-white text-[1vw]">Thoughful marketing for growing dental practices.</h5>
                </div>

                <div class="grid gap-8 sm:gap-6 sm:grid-cols-2 ml-[4vw]">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="event-title flex flex-col">
                            <h5 class="w-[28vw] text-[1vw] text-white mb-[1vw]">DENTAL MARKETING INSIGHTS FOR CLEVER DENTISTS DIRECT TO YOUR INBOX</h5>
                            <div class="flex flex-row w-[28vw]">
                                <input type="text" class="placeholder-white placeholder-opacity-75 border px-3 w-[18vw] border-white bg-transparent rounded-lg text-[0.8vw] focus:ring-yellow-new focus:border-yellow-new text-white" placeholder="YOUR EMAIL " required>
                                <button class="px-5 ml-[1vw] bg-yellow-new rounded-lg text-white shadow-lg">SUBSCRIBE </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="grid gap-8 sm:gap-6 sm:grid-cols-2">
                    <div class="w-[16vw]">
                        <h2 class="mb-6 text-[1vw] font-semibold text-white uppercase">FOLLOW US</h2>
                        <ul class="text-white font-medium text-[0.8vw]">
                            <div id="you tube account" class="flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-[0.3vw]"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                </svg>
                                <li class="mb-4">
                                    <a href="https://www.youtube.com/@anderiesnotanto4368" class="hover:underline">U-Help Company</a>
                                </li>
                            </div>
                            <div id="instagram account" class="flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-[0.3vw]"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                                <li>
                                    <a href="https://www.instagram.com/uhelp.company/" class="hover:underline">uhelp.company</a>
                                </li>
                            </div>
                        </ul>
                    </div>

                    <div class="w-[16vw] ml-[1.5vw]">
                        <h2 class="mb-6 text-[1vw] font-semibold text-white uppercase">CONTACT US</h2>
                        <ul class="text-white font-medium flex flex-row">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-[0.3vw]"
                                fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            <li class="mb-4 text-[0.8vw]">
                                <a href="https://wa.me/+6281287966089?text=I'm%20interested%20in%20your%20U-Help%20company.%20" class="hover:underline">+6281287966089</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-white sm:mx-auto mt-[3vw]" />
            <div id="under white line" class="sm:flex sm:items-center sm:justify-between">
                <span class="text-[1vw] text-white sm:text-center">© 2023 <a href="" class="hover:underline">U-Help</a>. Education Lecture Helper, Bogor. All Rights Reserved.</span>
                <div id="right bottom text" class="flex space-x-6 sm:justify-center sm:mt-0 text-[1vw] text-white">
                    <a href="" class="hover:underline uppercase">PRIVACY POLICY</a>
                    <a href="" class="hover:underline uppercase">TERMS & CONDITIONS</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
