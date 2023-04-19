<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>

    <div id="navbar">
        {{-- BELUM ADA ISI NYA --}}
    </div>


    <div id="content" class="flex">

        <div id="ornament">
            <div>
                <img class="ml-[94.05vw] absolute" src="/assets/clickandsit/createTemplate/rightOrnament.png">
            </div>

            <div>
                <img class="" src="/assets/clickandsit/createTemplate/leftOrnament.png">
            </div>
        </div>

        <div id="form" class="absolute w-full max-w-[68vw] p-4 bg-white border border-[#F7C04B] rounded-lg shadow sm:p-6 md:p-[3vw] ml-[14vw] mt-[5vw]">
            <form class="space-y-6" action="#">
                <h1 class="font-font-poppins font-semibold text-[2vw] text-[#3F487F] text-center">Setting</h1>

                <div id="destination">
                    <label for="destination" class="block mb-2 font-font-poppins text-[1vw] text-[#539064]">Destination</label>
                    <div class="flex">
                        <div id="dropdown destination">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[10vw] text-[#3F487F] bg-white border border-[#F7C04B] hover:bg-[#F7C04B] font-font-poppins rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">From <svg class="w-4 h-4 ml-[5.5vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kebayoran</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sentul</a>
                                </li>
                                </ul>
                            </div>
                        </div>

                        <img class="h-[1vw] mx-[1vw] my-[0.5vw]" src="/assets/clickandsit/createTemplate/arrow.png">

                        <div id="dropdown destination">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[10vw] text-[#3F487F] bg-white border border-[#F7C04B] hover:bg-[#F7C04B] font-font-poppins rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">To <svg class="w-4 h-4 ml-[5.5vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Alam Sutera</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kemanggisan</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="departure time">
                    <label for="departure time" class="block mb-2 font-font-poppins text-[1vw] text-[#539064]">Departure Time</label>

                    <div id="dropdown destination">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[10vw] text-[#3F487F] bg-white border border-[#F7C04B] hover:bg-[#F7C04B] font-font-poppins rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Time <svg class="w-4 h-4 ml-[5.5vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">09.00</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">10.00</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button type="submit" class="ml-[25vw] w-[12vw] h-[3vw] text-[#3F487F] text-[1.2vw] border bg-[#F7C04B] hover:bg-white hover:border-[#F7C04B] font-font-poppins font-bold rounded-[5vw] text-sm px-5 py-2 text-center">Save</button>
            </form>
        </div>

    </div>


    <div id="footer">
        {{-- BELUM ADA ISI NYA --}}
    </div>

</body>
</html>




