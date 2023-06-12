@extends('master')
@section('title', 'U-Help | Event List')
@section('content')

<div class="m-auto w-8/12">
    <div id="banner" class="pt-[7.813vw] pb-[3.646vw] flex flex-col">
        <img class="h-[16vw] opacity-80 rounded-t-[1.250vw]" src="/assets/sharetificate/seminar_pict.png" alt="Seminar Banner">
        <h3 class="text-[2.5vw] text-center font-bold text-dark-blue-new shadow-2xl rounded-b-[1.250vw] py-[0.208vw]">Your Event</h3>
    </div>
</div>

<div id="search-filter-add" class="flex relative m-auto py-[0.625vw] w-10/12 gap-[1.042vw]">
        {{-- Search Bar --}}
            <div class="relative flex w-[20vw] items-center z-10">
                <div class="absolute inset-3 px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z"/></svg>
                </div>
                <input
                    type="search"
                    class="relative block flex-auto rounded-full border border-dark-blue-new border-opacity-80 bg-[#FFD272] bg-opacity-[0.15] outline-none pl-12 text-lg text-dark-blue-new font-normal transition duration-100 ease-in-out focus:z-[3] focus:bg-opacity-30 focus:ring-dark-blue-new focus:outline-none focus:border-dark-blue-new focus:text-dark-blue-new placeholder:text-dark-blue-new placeholder:text-opacity-[0.6]"
                    placeholder="Search event..."
                    aria-label="Search"
                    aria-describedby="button-search"
                    id="input"/>
            </div>
        {{-- Filter --}}
        <form class="w-[12%] z-10" action="/events" method="GET" id="filterForm">
            @csrf
            <div class="relative flex items-center h-full">
                <button id="dropdownFilterButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="w-full h-full text-dark-blue-new text-opacity-60 rounded-full border border-dark-blue-new border-opacity-80 bg-[#FFD272] bg-opacity-[0.15] transition duration-100 ease-in-out hover:bg-[#FFD272] hover:bg-opacity-30 hover:ring-1 hover:ring-dark-blue-new hover:border-dark-blue-new focus:ring-1 focus:outline-none focus:ring-dark-blue-new font-normal text-lg px-4 inline-flex items-center" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M11 20q-.425 0-.713-.288T10 19v-6L4.2 5.6q-.375-.5-.113-1.05T5 4h14q.65 0 .913.55T19.8 5.6L14 13v6q0 .425-.288.713T13 20h-2Z"/></svg>
                    <p class="w-4/5 flex pl-[0.417vw]">
                        @if($filterOption == 'latest')
                            Latest
                        @elseif($filterOption == 'earliest')
                            Earliest
                        @else
                            None
                        @endif
                    </p>
                    <svg class="w-[0.833vw] h-[0.833vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <!-- Dropdown Menu -->
                <div id="dropdownHover" class="z-10 hidden bg-[#FFD272] rounded-lg shadow w-[9.167vw] absolute mt-1">
                    <ul class="py-1 text-lg text-gray-700" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="/events" class="block px-4 py-2 hover:bg-yellow-new hover:text-white">None</a>
                        </li>
                        <li>
                            <a href="/events?filterOption=latest" class="block px-4 py-2 hover:bg-yellow-new hover:text-white">Latest</a>
                        </li>
                        <li>
                            <a href="/events?filterOption=earliest" class="block px-4 py-2 hover:bg-yellow-new hover:text-white">Earliest</a>
                        </li>
                    </ul>
                </div>
            </div>
        </form>

        {{-- Add Event Button --}}
        <a href="/events/create">
            <div class="absolute flex inset-0 justify-end">
                <button class="flex justify-center bg-yellow-new hover:bg-yellow-hover w-[9.167vw] h-auto my-[0.417vw] rounded-full shadow-lg items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" stroke="#3F487F" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m-6-6h12"/></svg>
                    <p class="text-dark-blue-new text-lg font-bold pl-[0.208vw]">Add Event</p>
                </button>
            </div>
        </a>
    </div>
</div>

<div id="allData">
    <div class="grid grid-cols-2 gap-[4.167vw] p-[0.833vw] m-auto mt-[2.083vw] w-10/12">
        @foreach ($events as $event)
        <a href="/events/{{$event->uuid}}">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">{{$event->title}}</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">{{$event->date->format('d F Y')}}</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
        @endforeach
    </div>
    {{$events->links("sharetificate.pagination")}}
</div>
<div id="read" class="grid grid-cols-2 gap-[4.167vw] p-[0.833vw] m-auto mt-[2.083vw] w-10/12 text-[1.458vw] font-semibold text-dark-blue-new text-opacity-60"></div>

<div id="empty-search" class="flex justify-center my-[8vw]">
    <p class="text-[1.458vw] font-semibold text-dark-blue-new text-opacity-60">Your search for "<span id="search-query"></span>" is not found.</p>
</div>

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-[0.833vw] overflow-x-hidden overflow-y-auto h-[calc(100%-0.8333vw)] max-h-full">
    <div class="w-full max-w-[46.667vw] max-h-full">
        <form action="">
            @csrf
            <div class="relative bg-white rounded-[0.833vw] shadow-2xl border-[0.208vw] border-yellow-new">
                <button type="button" class="absolute top-[0.625vw] right-[0.521vw] text-gray-500 bg-transparent hover:bg-gray-200 hover:text-dark-blue-new rounded-[0.417vw] text-[0.729vw] p-[0.313vw] ml-auto inline-flex items-center" data-modal-hide="popup-modal">
                    <svg aria-hidden="true" class="w-[1.042vw] h-[1.042vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-[2.083vw]">
                    <h1 class="text-[1.563vw] text-dark-blue-new font-bold text-center mb-[2.083vw]">Update Event</h1>
                    <div id="form-input">
                        <div class="event-title flex flex-col">
                            <label for="event_name" class="text-green-new text-[1.25vw] font-semibold mb-[0.625vw]">Title *</label>
                            <input type="text" name="event_name" id="event_name" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.417vw] text-[0.938vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="Enter the event's name " data-parsley-group="block0" required>
                        </div>
                        <div id="loc-and-date" class="flex justify-between">
                            <div class="event-loc flex flex-col w-1/2">
                                <label for="event_location" class="text-green-new text-[1.25vw] font-semibold mt-[2.5vw] mb-[0.625vw]">Location *</label>
                                <input type="text" name="event_location" id="event_location" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.417vw] text-[0.938vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="Enter the event's location " data-parsley-group="block0" required>
                            </div>
                            <div class="event-date flex flex-col w-2/5">
                                <label for="event_date" class="text-green-new text-[1.25vw] font-semibold mt-[2.5vw] mb-[0.625vw]">Date *</label>
                                <div class="flex flex-col">
                                    <input datepicker type="text" name="event_date" id="event_date" class="form-control relative w-full border border-yellow-new rounded-[0.417vw] text-[0.938vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="Select a date " data-parsley-group="block0" required>
                                    <div class="absolute ml-[15vw] mt-[0.625vw] items-center">
                                        <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                                            <rect x="0" y="0" width="1.25vw" height="1.25vw" fill="none" stroke="none" />
                                            <path fill="currentColor" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/>
                                        </svg>
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

<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/node_modules/flowbite/dist/datepicker.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownButton = document.getElementById('dropdownFilterButton');
            dropdownButton.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent form submission
                var dropdownMenu = document.getElementById('dropdownHover');
                dropdownMenu.classList.toggle('hidden');
            });

            // Hide dropdown menu when clicking outside
            document.addEventListener('click', function(event) {
                var dropdownMenu = document.getElementById('dropdownHover');
                if (!dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#empty-search").hide();
            $("#input").keyup(function(){
                var strcari = $(this).val();
                if(strcari != ""){
                    $('#allData').hide();
                    $('#read').show();
                    $.ajax({
                        url: "{{ url('ajax') }}",
                        type:"GET",
                        data: "name=" + strcari,
                        success: function(data){
                            console.log(data);
                            if (data.empty) {
                                $("#search-query").text(strcari);
                                $("#empty-search").show();
                                $("#read").html("");
                            } else {
                                $("#empty-search").hide();
                                $("#read").html(data);
                            }
                        }
                    });
                }else{
                    $('#allData').show();
                    $('#read').hide();
                    $("#empty-search").hide();
                }
            })
        })
</script>
@endsection
