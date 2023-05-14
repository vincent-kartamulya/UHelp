<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Event List</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100 font-font-poppins">
    <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg fixed z-50">
        <div class="logo-container absolute left-6">
            <a href="#">
                <img class="logo-pict w-44" src="/assets/logo.jpg" alt="UHelp Logo">
            </a>
        </div>
        <div class="features-container w-1/5 m-auto">
            <ul class="flex flex-row justify-around text-green-new text-2xl text-center">
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="#">Click and Sit</a>
                </li>
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="#">Sharetificate</a>
                </li>
            </ul>
        </div>
        <div class="profile-container absolute right-8">
            <a href="#">
                <img class="logo-pict w-16 rounded-full" src="/assets/profil.jpg" alt="Profile Picture">
            </a>
        </div>
    </nav>

    <div class="m-auto w-8/12">
        <div id="banner" class="pt-[7.813vw] pb-[3.646vw] flex flex-col">
            <img class="h-[16vw] opacity-80 rounded-t-[1.250vw]" src="/assets/sharetificate/seminar_pict.png" alt="Seminar Banner">
            <h3 class="text-[2.5vw] text-center font-bold text-dark-blue-new shadow-2xl rounded-b-[1.250vw] py-[0.208vw]">Your Event</h3>
        </div>
    </div>

    <div id="search-filter-add" class="flex relative m-auto py-[0.625vw] w-10/12 gap-[1.042vw]">
        {{-- Search Bar --}}
        <form>
            <div class="relative flex w-[20vw] items-center z-10">
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
        {{-- Filter --}}
        <form class="w-[12%] z-10" action="">
            <button id="dropdownFilterButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="w-full h-full text-dark-blue-new text-opacity-60 rounded-full border border-dark-blue-new border-opacity-80 bg-[#FFD272] bg-opacity-[0.15] transition duration-100 ease-in-out hover:bg-[#FFD272] hover:bg-opacity-30 hover:ring-1 hover:ring-dark-blue-new hover:border-dark-blue-new focus:ring-1 focus:outline-none focus:ring-dark-blue-new font-normal text-lg px-4 inline-flex items-center" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M11 20q-.425 0-.713-.288T10 19v-6L4.2 5.6q-.375-.5-.113-1.05T5 4h14q.65 0 .913.55T19.8 5.6L14 13v6q0 .425-.288.713T13 20h-2Z"/></svg>
                <p class="w-4/5 flex pl-[0.417vw]">None</p>
                <svg class="w-[0.833vw] h-[0.833vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <!-- Dropdown Menu -->
            <div id="dropdownHover" class="z-10 hidden bg-[#FFD272] rounded-lg shadow w-[9.167vw]">
                <ul class="py-1 text-lg text-gray-700" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-new hover:text-white">None</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-new hover:text-white">Latest</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-new hover:text-white">Earliest</a>
                    </li>
                </ul>
            </div>
        </form>
        {{-- Add Event Button --}}
        <form action="">
            <div class="absolute flex inset-0 justify-end">
                <button class="flex justify-center bg-yellow-new hover:bg-yellow-hover w-[9.167vw] h-auto my-[0.417vw] rounded-full shadow-lg items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" stroke="#3F487F" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m-6-6h12"/></svg>
                    <p class="text-dark-blue-new text-lg font-bold pl-[0.208vw]">Add Event</p>
                </button>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-2 gap-[4.167vw] p-[0.833vw] m-auto mt-[2.083vw] w-10/12">
        <a href="#">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">Sinergi dalam Program Kartu Prakerja</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">10 April 2023</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
        <a href="#">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">Sinergi dalam Program Kartu Prakerja</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">10 April 2023</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
        <a href="#">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">Sinergi dalam Program Kartu Prakerja</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">10 April 2023</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
        <a href="#">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">Sinergi dalam Program Kartu Prakerja</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">10 April 2023</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
        <a href="#">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">Sinergi dalam Program Kartu Prakerja</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">10 April 2023</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
        <a href="#">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">Sinergi dalam Program Kartu Prakerja</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">10 April 2023</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
    </div>

    <div class="relative flex bg-red-300">
        <div id="pagination" class="absolute flex inset-0 mt-[3.542vw]">
            <ul class="inline-flex items-center m-auto shadow-xl rounded-lg">
                <li>
                    <a href="#" class="block px-3 py-2 text-lg font-medium text-gray-400 bg-white rounded-l-lg hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">
                        <span class="sr-only">Previous</span>
                        <svg aria-hidden="true" class="w-6 h-6 p-[0.104vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 font-medium text-gray-400 bg-white hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">1</a>
                </li>
                <li>
                    <a href="#"  class="px-3 py-2 font-medium text-gray-400 bg-white hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="z-10 px-3 py-2 font-medium bg-green-new bg-opacity-5 text-green-new hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">3</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 font-medium text-gray-400 bg-white hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">4</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-2 font-medium text-gray-400 bg-white hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">5</a>
                </li>
                <li>
                    <a href="#" class="block px-3 py-2 text-lg font-medium text-gray-400 bg-white rounded-r-lg hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">
                        <span class="sr-only">Next</span>
                        <svg aria-hidden="true" class="w-6 h-6 p-[0.104vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
        <div class="w-full max-w-4xl max-h-full">
            <form action="">
                <div class="relative bg-white rounded-2xl shadow-2xl border-2 border-yellow-new">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-[2.083vw]">
                        <h1 class="text-3xl text-dark-blue-new font-bold text-center mb-[2.083vw]">Update Event</h1>
                        <div id="form-input">
                            <div class="event-title flex flex-col">
                                <label for="event_name" class="text-green-new text-[1.25vw] font-semibold mb-3">Title *</label>
                                <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new mb-1" placeholder="Enter the event's name " data-parsley-group="block0" required>
                            </div>
                            <div id="loc-and-date" class="flex justify-between">
                                <div class="event-loc flex flex-col w-1/2">
                                    <label for="event_location" class="text-green-new text-[1.25vw] font-semibold mt-12 mb-3">Location *</label>
                                    <input type="text" name="event_location" id="event_location" class="form-control border px-3 border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new mb-1" placeholder="Enter the event's location " data-parsley-group="block0" required>
                                </div>
                                <div class="event-date flex flex-col w-2/5">
                                    <label for="event_date" class="text-green-new text-[1.25vw] font-semibold mt-12 mb-3">Date *</label>
                                    <div class="flex flex-col">
                                        <input datepicker type="text" name="event_date" id="event_date" class="form-control relative w-full border border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new mb-1" placeholder="Select a date " data-parsley-group="block0" required>
                                        <div class="absolute ml-72 mt-3 items-center">
                                            <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="currentColor" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button data-modal-hide="popup-modal" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                            <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Update</p>
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
    <script src="/node_modules/flowbite/dist/datepicker.js"></script>
</body>
</html>
