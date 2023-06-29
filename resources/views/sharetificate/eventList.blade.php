@extends('master')
@section('title', 'U-Help | Event List')
@section('content')

<div class="m-auto w-8/12">
    <div id="banner" class="pt-[7.813vw] pb-[3.646vw] flex flex-col">
        <img class="h-[16vw] opacity-80 rounded-t-[1.250vw]" src="/assets/sharetificate/seminar_pict.png" alt="Seminar Banner">
        <h3 class="text-[2.5vw] text-center font-bold text-dark-blue-new shadow-2xl rounded-b-[1.250vw] py-[0.208vw]">Your Event</h3>
    </div>
</div>

<div id="search-filter-add" class="flex relative m-auto w-10/12 gap-[1.042vw]">
        {{-- Search Bar --}}
        <div class="relative flex w-[20vw] items-center z-10">
            <div class="absolute ml-[1vw]">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                    <path fill="#3F487F" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z"/>
                </svg>
            </div>
            <input
                type="search"
                class="relative block h-[2.5vw] flex-auto rounded-full border-2 border-dark-blue-new border-opacity-80 bg-[#FFD272] bg-opacity-[0.15] outline-none pl-[2.5vw] text-[0.938vw] text-dark-blue-new font-normal transition duration-100 ease-in-out focus:z-[3] focus:bg-opacity-30 focus:ring-0 focus:outline-none focus:border-dark-blue-new focus:text-dark-blue-new placeholder:text-dark-blue-new placeholder:text-opacity-[0.6]"
                placeholder="Search event..."
                aria-label="Search"
                aria-describedby="button-search"
                id="input"/>
        </div>
        {{-- Filter --}}
        <form class="w-[13%] z-10" action="/events" method="GET" id="filterForm">
            @csrf
            <div class="relative flex items-center h-full">
                <button id="dropdownFilterButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="w-full h-full text-dark-blue-new text-opacity-60 rounded-full border-2 border-dark-blue-new border-opacity-80 bg-[#FFD272] bg-opacity-[0.15] transition duration-100 ease-in-out hover:bg-[#FFD272] hover:bg-opacity-30 hover:ring-0 hover:border-dark-blue-new focus:ring-1 focus:outline-none focus:ring-dark-blue-new text-[0.938vw] px-[0.833vw] inline-flex items-center" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                        <path fill="#3F487F" d="M11 20q-.425 0-.713-.288T10 19v-6L4.2 5.6q-.375-.5-.113-1.05T5 4h14q.65 0 .913.55T19.8 5.6L14 13v6q0 .425-.288.713T13 20h-2Z"/>
                    </svg>
                    <p class="w-4/5 flex pl-[0.417vw]">
                        @if($filterOption == 'latest')
                            Latest
                        @elseif($filterOption == 'earliest')
                            Earliest
                        @else
                            None
                        @endif
                    </p>
                    <svg class="w-[0.833vw] h-[0.833vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown Menu -->
                <div id="dropdownHover" class="z-10 hidden bg-[#FFD272] rounded-[0.417vw] shadow w-[9.167vw] absolute mt-[0.208vw]">
                    <ul class="py-[0.208vw] text-[0.938vw] text-gray-700" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="/events" class="block px-[0.833vw] py-[0.417vw] hover:bg-yellow-new hover:text-white">None</a>
                        </li>
                        <li>
                            <a href="/events?filterOption=latest" class="block px-[0.833vw] py-[0.417vw] hover:bg-yellow-new hover:text-white">Latest</a>
                        </li>
                        <li>
                            <a href="/events?filterOption=earliest" class="block px-[0.833vw] py-[0.417vw] hover:bg-yellow-new hover:text-white">Earliest</a>
                        </li>
                    </ul>
                </div>
            </div>
        </form>

        {{-- Add Event Button --}}
        <div class="absolute flex inset-0 justify-end text-center items-center text-[0.938vw]">
            <a href="/events/create" class="flex justify-center bg-yellow-new hover:bg-yellow-hover h-full p-[1.4vw] rounded-full shadow-lg items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none"/>
                    <path fill="#3F487F" stroke="#3F487F" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m-6-6h12"/>
                </svg>
                <p class="text-dark-blue-new text-[1.25vw] font-semibold pl-[0.208vw]">Add Event</p>
            </a>
        </div>
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
                var filterOption = getFilterOption(); // Get the selected filter option
                if(strcari != ""){
                    $('#allData').hide();
                    $('#read').show();
                    $.ajax({
                        url: "{{ url('ajax') }}",
                        type: "GET",
                        data: {
                            name: strcari,
                            filterOption: filterOption // Pass the filter option in the AJAX request
                        },
                        success: function(data){
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
                } else {
                    $('#allData').show();
                    $('#read').hide();
                    $("#empty-search").hide();
                }
            });

        // Function to get the selected filter option from the URL query parameters
        function getFilterOption() {
            var urlParams = new URLSearchParams(window.location.search);
            var filterOption = urlParams.get('filterOption');
            return filterOption;
        }
    });

</script>
@endsection
