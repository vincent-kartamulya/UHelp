@extends('master')
@section('title', 'U-Help | Edit Template')
@section('content')
<div id="content" class="flex pt-[5vw]">
    <div id="ornament">
        <div id="circle-top-ornament " class="absolute z-10 right-[19vw]">
            <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
        </div>

        <div id="right-ornament" class="absolute z-10 right-[0vw]">
            <img src="/assets/clickandsit/createTemplate/rightOrnament.png">
        </div>

        <div id="left-ornament" class="absolute z-10">
            <img src="/assets/clickandsit/createTemplate/leftOrnament.png">
        </div>

        <div id="circle-bottom-ornament" class="absolute z-10 top-[40vw] left-[17vw]">
            <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
        </div>
    </div>

    <div id="formBox" class="w-1/2 m-auto border-[0.15vw] bg-white border-yellow-new rounded-[0.85vw] shadow sm:p-[1.25vw] md:p-[3vw] mt-[4vw] mb-[10vw]">
        <div id="header-setting" class="">
            <h1 class="mt-[1vw] mb-[2vw] font-semibold text-[2.5vw] text-dark-blue-new text-center">Setting</h1>
        </div>

        <div id="departure-return-destination" class="px-[0.83vw]">
            <form id="departure_return" action="/clickandsit/edit/{{$anjay->id}}" method="POST">
                @csrf
                <label class="block text-green-new text-[1.25vw] font-semibold mb-[1vw]">Departure</label>
                <div class="flex flex-row justify-between items-center">
                    <div class="relative">
                        <select name="place_departure" id="place_departure" class="block px-2.5 pb-1.5 pt-3 w-[20vw] text-sm bg-transparent rounded-lg border-1 border-yellow-new appearance-none focus:outline-none focus:ring-0 focus:border-green-new peer" placeholder="">
                            @if ($anjay->naik=="Binus Main Campus Alam Sutera")
                                <option value="{{$anjay->naik}}" selected>{{$anjay->naik}} </option>
                                <option value="Binus ASO Alam Sutera">Binus ASO Alam Sutera</option>
                            @else
                                <option value="{{$anjay->naik}}" selected>{{$anjay->naik}} </option>
                                <option value="Binus Main Campus Alam Sutera">Binus Main Campus Alam Sutera</option>
                            @endif
                        </select>
                        <label for="place_departure" class="absolute text-sm text-dark-blue-new duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 left-1">Choose destination place</label>
                    </div>

                    <div class="relative">
                        <select name="time_departure" id="time_departure" class="block px-2.5 pb-1.5 pt-3 w-[20vw] text-sm bg-transparent rounded-lg border-1 border-yellow-new appearance-none focus:outline-none focus:ring-0 focus:border-green-new peer" placeholder=" ">
                            <option value="{{$anjay->jamAlsut}}"selected>{{$anjay->jamAlsut}}</option>
                            <option value="Jam 06:05">Jam 06:05</option>
                            <option value="Jam 07:30">Jam 07:30</option>
                            <option value="Jam 10:10">Jam 10:10</option>
                            <option value="Jam 12:10 (Khusus hari Jum'at Jam 12:40)">Jam 12:10 (Khusus hari Jum'at Jam 12:40)</option>
                            <option value="Jam 14:10">Jam 14:10</option>
                            <option value="Jam 15:30">Jam 15:30</option>
                            <option value="Jam 17:30">Jam 17:30</option>
                        </select>
                        <label for="time_departure" class="absolute text-sm text-dark-blue-new duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 left-1">Choose departure time</label>
                    </div>
                </div>

                <label class="block text-green-new text-[1.25vw] font-semibold mt-[2vw] mb-[1vw]">Return</label>
                <div class="flex flex-row justify-between items-center">
                    <div class="relative">
                        <select name="place_return" id="place_return" class="block px-2.5 pb-1.5 pt-3 w-[20vw] text-sm bg-transparent rounded-lg border-1 border-yellow-new appearance-none focus:outline-none focus:ring-0 focus:border-green-new peer" placeholder=" "">
                            @if ($anjay->turun =="Binus Main Campus Alam Sutera")
                                <option value="{{$anjay->turun}}" selected>{{$anjay->turun}} </option>
                                <option value="Binus ASO Alam Sutera">Binus ASO Alam Sutera</option>
                            @else
                                <option value="{{$anjay->turun}}" selected>{{$anjay->turun}} </option>
                                <option value="Binus Main Campus Alam Sutera">Binus Main Campus Alam Sutera</option>
                            @endif
                        </select>
                        <label for="place_return" class="absolute text-sm text-dark-blue-new duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 left-1">Choose return place</label>
                    </div>

                    <div class="relative">
                        <select name="time_return" id="time_return" class="block px-2.5 pb-1.5 pt-3 w-[20vw] text-sm bg-transparent rounded-lg border-1 border-yellow-new appearance-none focus:outline-none focus:ring-0 focus:border-green-new peer" placeholder=" ">
                            <option value="{{$anjay->jamAnggrek}}" selected>{{$anjay->jamAnggrek}}</option>
                            <option value="Jam 07:30">Jam 07:30</option>
                            <option value="Jam 09:30">Jam 09:30</option>
                            <option value="Jam 11:30 (Khusus hari Jum'at Jam 11:10)">Jam 11:30 (Khusus hari Jum'at Jam 11:10)</option>
                            <option value="Jam 13:30">Jam 13:30</option>
                            <option value="Jam 15:30">Jam 15:30</option>
                            <option value="Jam 17:30">Jam 17:30</option>
                            <option value="Jam 19:10">Jam 19:10</option>
                        </select>
                        <label for="time_return" class="absolute text-sm text-dark-blue-new duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 left-1">Choose return time</label>
                    </div>
                </div>

                <label class="block text-green-new text-[1.25vw] font-semibold mt-[2vw] mb-[1vw]">Needs</label>
                <div class="relative">
                    <input name="needs"  type="text" class="block px-2.5 pb-1.5 pt-3 text-sm bg-transparent border w-full border-yellow-new text-[1.042vw] rounded-[0.417vw] focus:ring-green-new focus:border-green-new p-[0.521vw]" placeholder="{{$anjay->keperluan}}">
                    <label for="needs" class="absolute text-sm text-dark-blue-new duration-300 transform -translate-y-3 scale-80 top-1 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3 left-1">Fill the need for your shuttle</label>
                </div>
                <div class="flex justify-center">
                    <button id="save-button" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Save</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/node_modules/flowbite/dist/flowbite.js"></script>
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
@endsection
