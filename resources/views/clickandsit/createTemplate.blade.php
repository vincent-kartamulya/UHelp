<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>U-Help | Create Template</title>
  <link rel="icon" type="image/gif" href="/assets/logo.png">
</head>
<body>

    <div id="navbar">
        <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new shadow-lg">
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
    </div>


    <div id="content" class="flex">
        <div id="ornament">
            <div class="absolute z-10">
                <img class="ml-[72vw]" src="/assets/clickandsit/createTemplate/circleOrnament.png">
            </div>

            <div>
                <img class="ml-[93.2vw] absolute" src="/assets/clickandsit/createTemplate/rightOrnament.png">
            </div>

            <div>
                <img class="" src="/assets/clickandsit/createTemplate/leftOrnament.png">
            </div>

            <div class="absolute z-10">
                <img class="mt-[16vw] ml-[7vw]" src="/assets/clickandsit/createTemplate/circleOrnament.png">
            </div>
        </div>

        <div id="form" class="absolute w-full max-w-[68vw] p-4 bg-white border border-[#F7C04B] rounded-lg shadow sm:p-6 md:p-[3vw] ml-[14vw] mt-[5vw]">
            <div id="header setting">
                <h1 class="mb-[3vw] font-font-poppins font-semibold text-[2.5vw] text-[#3F487F] text-center">Setting</h1>
            </div>

            <div id="destination, departure time, schedule">
                <form class="space-y-[2vw]" action="#">
                    <div id="destination">
                        <label for="destination" class="block mb-2 font-font-poppins text-[1.5vw] text-[#539064]">Destination</label>
                        <div class="flex">
                            <div id="dropdown destination">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-[#3F487F] text-[0.8vw] bg-white border border-[#F7C04B] hover:bg-[#F7C04B] font-font-poppins rounded-lg text-sm px-4 py-[0.7vw] text-center inline-flex items-center" type="button">From <svg class="w-4 h-4 ml-[10vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
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

                            <img class="h-[1vw] mx-[1vw] my-[0.8vw]" src="/assets/clickandsit/createTemplate/arrow.png">

                            <div id="dropdown destination">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-[#3F487F] text-[0.8vw] bg-white border border-[#F7C04B] hover:bg-[#F7C04B] font-font-poppins rounded-lg text-sm px-4 py-[0.7vw] text-center inline-flex items-center" type="button">To <svg class="w-4 h-4 ml-[10vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
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
                        <label for="departure time" class="block mb-2 font-font-poppins text-[1.5vw] text-[#539064]">Departure Time</label>

                        <div id="dropdown destination">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-[#3F487F] text-[0.8vw] bg-white border border-[#F7C04B] hover:bg-[#F7C04B] font-font-poppins rounded-lg text-sm px-4 py-[0.7vw] text-center inline-flex items-center" type="button">Time <svg class="w-4 h-4 ml-[10vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
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

                    <div id="schedule">
                        <label for="departure time" class="block mb-2 font-font-poppins text-[1.5vw] text-[#539064]">Schedule</label>

                        <div id="schedule button" class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="rounded-l-lg px-[4.5vw] py-[1vw] text-sm font-medium text-[#3F487F] bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Monday
                            </button>
                            <button type="button" class="px-[4.5vw] py-[1vw] text-sm font-medium text-[#3F487F] bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Tuesday
                            </button>
                            <button type="button" class="px-[4.5vw] py-[1vw] text-sm font-medium text-[#3F487F] bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Wednesday
                            </button>
                            <button type="button" class="px-[4.5vw] py-[1vw] text-sm font-medium text-[#3F487F] bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Thrusday
                            </button>
                            <button type="button" class="rounded-r-md px-[4.5vw] py-[1vw] text-sm font-medium text-[#3F487F] bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Friday
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="save button">
                <button type="submit" class="mt-[4vw] mb-[5vw] ml-[25vw] w-[12vw] h-[3vw] text-[#3F487F] text-[1.2vw] border bg-[#F7C04B] hover:bg-white hover:border-[#F7C04B] font-font-poppins font-bold rounded-[5vw] text-sm px-[2vw] py-[1vw] text-center">Save</button>
            </div>
        </div>
    </div>


    <div id="footer">
        {{-- BELUM ADA ISI NYA --}}
    </div>

</body>
</html>




