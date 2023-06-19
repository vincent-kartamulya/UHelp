@extends('master')
@section('title', 'U-Help | Click and Sit')
@section('content')
<div id="content" class="pt-[5vw]">
    <div id="ornament">
        <div id="right-ornament" class="absolute z-10 right-[0vw] top-[7vw]">
            <img src="/assets/clickandsit/clickandsit/fill/rightOrnament.png">
        </div>

        <div id="left-ornament" class="absolute z-10 top-[5vw]">
            <img src="/assets/clickandsit/clickandsit/fill/leftOrnament.png">
        </div>
    </div>

    <h1 class="font-semibold text-[2.5vw] text-dark-blue-new text-center w-full m-auto sm:p-[1.25vw] md:p-[3vw]">Available Template</h1>

    @foreach ($datas as $data)
        <div id="card-template-1" class="w-1/2 m-auto bg-yellow-new rounded-[2vw] shadow md:p-[2vw] mb-[3vw]">
            <button type="button" class="ml-[42vw] bg-slate-100 rounded-full p-2 items-center justify-center hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 hover:bg-red-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:stroke-slate-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>
            <div class="grid grid-cols-2 mb-[2vw]">
                <div class="px-[2vw]">
                    <label for="departure" class="block mb-[0.5vw] font-bold text-[1.5vw] text-[#3F487F]">Departure</label>
                    <h5 class="font-semibold text-[1vw] text-[#3F487F]">{{$data->naik}} - {{$data->jamAlsut}}</h5>
                </div>
                <div class="px-[2vw]">
                    <label for="return" class="block mb-[0.5vw] font-bold text-[1.5vw] text-[#3F487F]">Return</label>
                    <h5 class="font-semibold text-[1vw] text-[#3F487F]">{{$data->turun}} - {{$data->jamAnggrek}}</h5>
                </div>
            </div>
            <div class="px-[2vw]">
                <label for="necessity" class="block mb-[0.5vw] font-bold text-[1.5vw] text-[#3F487F]">Necessity</label>
                <h5 class="font-semibold text-[1vw] text-[#3F487F]">{{$data->keperluan}}</h5>
            </div>
            <div class="flex items-center justify-center pt-[2vw]">
                <button class="w-[7vw] h[3vw] mr-[1vw] bg-slate-100 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg">
                    Edit
                </button>
                <a href="/nyobapython/{{$data->id}}">
                    <button class="w-[7vw] h[3vw] ml-[1vw] bg-slate-100 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg">
                        Submit
                    </button>
                </a>
            </div>
        </div>
    @endforeach


    <div id="add-schedule" class="flex justify-center mb-[5vw]">
        <a href="/createTemplate">
            <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-[15vw] py-[0.83vw] rounded-full m-auto shadow-md">
                + Add Schedule
            </button>
        </a>
    </div>
</div>
@endsection
