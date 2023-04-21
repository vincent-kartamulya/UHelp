<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Create Template</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100 font-font-poppins">
    <div id="navbar">
        <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg fixed z-50">
            <div class="logo-container absolute left-6">
                <a href="#">
                    <img class="logo-pict w-44" src="/assets/logo.jpg" alt="UHelp Logo">
                </a>
            </div>
            <div class="features-container w-1/5 m-auto">
                <ul class="flex flex-row justify-around text-green-new text-2xl text-center font-font-poppins">
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

    <div id="content" class="flex pt-24">
        <div id="ornament">
            <div class="absolute z-10 right-[19vw]">
                <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
            </div>

            <div class="absolute z-10 right-0">
                <img src="/assets/clickandsit/createTemplate/rightOrnament.png">
            </div>

            <div class="absolute z-10">
                <img src="/assets/clickandsit/createTemplate/leftOrnament.png">
            </div>

            <div class="absolute z-10 mt-[36vw] ml-[17vw]">
                <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
            </div>
        </div>

        <div id="form" class="w-1/2 m-auto border-2 bg-white border-yellow-new rounded-2xl shadow sm:p-6 md:p-[3vw] mt-[4vw]">
            <div id="header setting">
                <h1 class="mb-[2vw] font-semibold text-[2.5vw] text-dark-blue-new text-center">Setting</h1>
            </div>

            <div id="destination, departure time, schedule" class="px-4">
                <form class="space-y-[2vw]" action="#">
                    <div id="destination">
                        <label for="destination" class="block mb-2 text-green-new text-2xl font-semibold">Destination</label>
                        <div class="flex">
                            <div id="dropdown destination">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-dark-blue-new text-lg font-medium bg-white border border-yellow-new hover:bg-yellow-new rounded-lg px-4 py-[0.5vw] text-center inline-flex items-center" type="button">From <svg class="w-4 h-4 ml-[10vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
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
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-dark-blue-new text-lg font-medium bg-white border border-yellow-new hover:bg-yellow-new rounded-lg px-4 py-[0.5vw] text-center inline-flex items-center" type="button">To <svg class="w-4 h-4 ml-[11vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
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
                        <label for="departure time" class="block mb-2 text-green-new text-2xl font-semibold">Departure Time</label>

                        <div id="dropdown departure time">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-dark-blue-new text-lg font-medium bg-white border border-yellow-new hover:bg-yellow-new rounded-lg px-4 py-[0.5vw] text-center inline-flex items-center" type="button">Time <svg class="w-4 h-4 ml-[10vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
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
                        <label for="schedule" class="block mb-2 text-green-new text-2xl font-semibold">Schedule</label>
                        <div id="schedule button" class="flex justify-center rounded-lg bg-white" role="group">
                            <button type="button" class="rounded-l-lg px-[2vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Monday
                            </button>
                            <button type="button" class="px-[2vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Tuesday
                            </button>
                            <button type="button" class="px-[2vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Wednesday
                            </button>
                            <button type="button" class="px-[2vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Thrusday
                            </button>
                            <button type="button" class="rounded-r-md px-[2vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                            Friday
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="save button" class="flex justify-center">
                <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-60 py-4 rounded-full m-auto mt-16 shadow-md">
                    Save
                </button>
            </div>
        </div>
    </div>


    <div id="footer">
        {{-- BELUM ADA ISI NYA --}}
    </div>
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>




