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
    <header>
        <div id="navbar">
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
        </div>
    </header>

    <main>
        <div id="content" class="flex pt-[5vw]">
            <div id="ornament">
                <div id="circle top ornament " class="absolute z-10 right-[19vw]">
                    <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
                </div>

                <div id="right ornament" class="absolute z-10 right-[0vw]">
                    <img src="/assets/clickandsit/createTemplate/rightOrnament.png">
                </div>

                <div id="left ornament" class="absolute z-10">
                    <img src="/assets/clickandsit/createTemplate/leftOrnament.png">
                </div>

                <div id="circle bottom ornament" class="absolute z-10 top-[40vw] left-[17vw]">
                    <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
                </div>
            </div>

            <div id="form" class="w-1/2 m-auto border-[0.15vw] bg-white border-yellow-new rounded-[0.85vw] shadow sm:p-[1.25vw] md:p-[3vw] mt-[4vw]">
                <div id="header setting">
                    <h1 class="mb-[2vw] font-semibold text-[2.5vw] text-dark-blue-new text-center">Setting</h1>
                </div>

                <div id="destination, departure time, schedule" class="px-[0.83vw]">
                    <form class="space-y-[2vw]" action="#">
                        <div id="destination">
                            <label for="destination" class="block mb-2 text-green-new text-2xl font-semibold">Destination</label>
                            <div class="flex">
                                <div id="dropdown destination">
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-dark-blue-new text-lg font-medium bg-white border border-yellow-new hover:bg-yellow-new rounded-lg px-4 py-[0.5vw] text-center inline-flex items-center" type="button">From <svg class="w-4 h-4 ml-[10vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-[0.42vw] text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#" class="block px-[0.83vw] py-[0.42vw] hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kebayoran</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-[0.83vw] py-[0.42vw]2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sentul</a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>

                                <img class="h-[1vw] mx-[1vw] my-[0.8vw]" src="/assets/clickandsit/createTemplate/arrow.png">

                                <div id="dropdown destination">
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-[15vw] text-dark-blue-new text-lg font-medium bg-white border border-yellow-new hover:bg-yellow-new rounded-lg px-4 py-[0.5vw] text-center inline-flex items-center" type="button">To <svg class="w-4 h-4 ml-[11vw]" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-[0.42vw] text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#" class="block px-[0.83vw] py-[0.42vw] hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Alam Sutera</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-[0.83vw] py-[0.42vw] hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kemanggisan</a>
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
                                <button type="button" class="rounded-l-lg px-[1.3vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                                Monday
                                </button>
                                <button type="button" class="px-[1.3vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                                Tuesday
                                </button>
                                <button type="button" class="px-[1.3vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                                Wednesday
                                </button>
                                <button type="button" class="px-[1.3vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                                Thrusday
                                </button>
                                <button type="button" class="px-[1.3vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                                Friday
                                </button>
                                <button type="button" class="rounded-r-md px-[1.3vw] py-[0.8vw] text-lg font-semibold text-dark-blue-new bg-transparent border border-[#F7C04B] hover:bg-[#F7C04B] hover:text-white">
                                Saturday
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="save button" class="flex justify-center">
                    <a href="/clickandsit/fill">
                        <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-[12.5vw] py-[0.83vw] rounded-full m-auto mt-[3vw] shadow-md">
                            Save
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>

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

    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>








