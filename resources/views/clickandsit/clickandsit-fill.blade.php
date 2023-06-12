@extends('master')
@section('title', 'U-Help | Click and Sit')
@section('content')
<div id="content" class="pt-[5vw] mb-[5vw]">
    <div id="ornament">
        <div id="right-ornament" class="absolute z-10 right-[0vw] top-[7vw]">
            <img src="/assets/clickandsit/clickandsit/fill/rightOrnament.png">
        </div>

        <div id="left-ornament" class="absolute z-10 top-[5vw]">
            <img src="/assets/clickandsit/clickandsit/fill/leftOrnament.png">
        </div>

        <div id="history-button" class="absolute z-10 right-[0vw] top-[20vw]">
            <a href="/history">
                <img src="/assets/clickandsit/clickandsit/fill/historyButton.png">
            </a>
        </div>
    </div>

    <div id="header-available-template" class="w-full m-auto sm:p-[1.25vw] md:p-[3vw]">
        <h1 class="font-semibold text-[2.5vw] text-dark-blue-new text-center">Available Template</h1>
    </div>

    <div id="card-template-1" class="flex flex-row w-1/2 m-auto bg-yellow-new rounded-[2vw] shadow sm:p-[1.25vw] md:p-[2.5vw] mb-[3vw]">
        <div id="left-destinationTimeDayIcon">
            <div id="text-and-icon" class="flex flex-row">
                <div>
                    <label for="destination-title" class="block mb-[0.75vw] font-bold text-[1.5vw] text-[#3F487F]">Anggrek - Grand Indonesia</label>
                    <h5 class="mb-[1.5vw] font-semibold text-[1vw] text-[#3F487F]">16:30 WIB - 18:15 WIB </h5>
                </div>

                <div id="edit-icon" class="mt-[0.35vw] ml-[0.75vw]">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-[1.5vw] h-[1.5vw] fill-[#3F487F] opacity-75">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                            <path
                                d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                    </svg>
                </div>
            </div>

            <div id="schedule" class="inline-flex rounded-md shadow-sm" role="group">
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Mon</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Tue</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Wed</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Thr</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Fri</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Sat</a>
            </div>
        </div>

        <div id="right-toggle">
            <label for="themeSwitcherTwo" class="themeSwitcherTwo relative inline-flex cursor-pointer select-none items-center left-[12vw] top-[2.5vw]">
                <input type="checkbox" name="themeSwitcherTwo" id="themeSwitcherTwo" class="sr-only">
                <span class="label flex items-center text-[1.3vw] font-semibold text-dark-blue-new">
                    Off
                </span>
                <span class="slider mx-[0.83vw] flex h-[2.92vw] w-[5.47vw] items-center rounded-full bg-[#AFB1B6] p-[0.2vw] duration-200">
                <span class="dot h-[2.1875vw] w-[2.1875vw] rounded-full bg-white duration-200"></span>
                </span>
            </label>
        </div>
    </div>

    <div id="card-template-2" class="flex flex-row w-1/2 m-auto bg-yellow-new rounded-[2vw] shadow sm:p-[1.25vw] md:p-[2.5vw] mb-[3vw]">
        <div id="left-destinationTimeDayIcon">
            <div id="text-and-icon" class="flex flex-row">
                <div>
                    <label for="destination-title" class="block mb-[0.75vw] font-bold text-[1.5vw] text-[#3F487F]">Madara - Uchiha</label>
                    <h5 class="mb-[1.5vw] font-semibold text-[1vw] text-[#3F487F]">15:30 WIB - 16:15 WIB </h5>
                </div>

                <div id="edit-icon" class="mt-[0.35vw] ml-[0.75vw]">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-[1.5vw] h-[1.5vw] fill-[#3F487F] opacity-75">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                            <path
                                d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                    </svg>
                </div>
            </div>

            <div id="schedule" class="inline-flex rounded-md shadow-sm" role="group">
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Mon</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Tue</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Wed</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Thr</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Fri</a>
                <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Sat</a>
            </div>
        </div>

        <div id="right-toggle">
            <label for="themeSwitcherTwo" class="themeSwitcherTwo relative inline-flex cursor-pointer select-none items-center left-[12vw] top-[2.5vw]">
                <input type="checkbox" name="themeSwitcherTwo" id="themeSwitcherTwo" class="sr-only">
                <span class="label flex items-center text-[1.3vw] font-semibold text-dark-blue-new">
                    Off
                </span>
                <span class="slider mx-[0.83vw] flex h-[2.92vw] w-[5.47vw] items-center rounded-full bg-[#AFB1B6] p-[0.2vw] duration-200">
                <span class="dot h-[2.1875vw] w-[2.1875vw] rounded-full bg-white duration-200"></span>
                </span>
            </label>
        </div>
    </div>

    <div id="add-schedule" class="flex justify-center">
        <a href="/createTemplate">
            <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-[15vw] py-[0.83vw] rounded-full m-auto shadow-md">
                + Add Schedule
            </button>
        </a>
    </div>
</div>
@endsection
