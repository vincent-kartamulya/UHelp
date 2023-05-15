<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Home</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="font-font-poppins">
    <header>
        <div id="navbar">
            <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg fixed top-0 z-50">
                <div class="logo-container absolute left-6">
                    <a href="/home">
                        <img class="logo-pict w-44" src="/assets/logo.jpg" alt="UHelp Logo">
                    </a>
                </div>
                <div class="features-container w-1/5 m-auto">
                    <ul class="flex flex-row justify-around text-green-new text-2xl text-center">
                        <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                            <a href="/clickandsit/empty">Click and Sit</a>
                        </li>
                        <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                            <a href="/addEvent">Sharetificate</a>
                        </li>
                    </ul>
                </div>
                <div class="profile-container absolute right-8">
                    <a href="/profile">
                        <img class="logo-pict w-16 rounded-full" src="/assets/profil.jpg" alt="Profile Picture">
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div id="content">
            <div id="section 1" class="flex flex-row bg-slate-100 h-[40vw] w-full absolute z-20 top-[0vw]">
                <div id="left">
                    <h1 class="font-semibold text-[3.75vw] mt-[10vw] ml-[12vw] w-[31vw]">Make Your Daily Activity Easier</h1>
                    <p class="text-[1.25vw] w-[35vw] ml-[12vw] mt-[1.5vw]">Streamline your form filling and certificate generation with our website's innovative features</p>
                    <p class="text-[1.25vw] ml-[12vw] w-[30vw]">- Save time, stay secure!</p>
                   <a href="">
                       <div class="bg-yellow-new shadow-md rounded-[1vw] mt-[1vw] ml-[12vw] w-[8vw] h-[2.5vw] flex text-center justify-center items-center">
                           <h5 class="text-[1.1vw] font-semibold">Start</h5>
                       </div>
                   </a>
                </div>
                <div id="right">
                    <img class="z-10 ml-[17vw] mt-[5vw]" src="/assets/home/section1/rightOrnament.png" alt="Right Ornament">
                    <img class="z-10 ml-[17vw] top-[20vw] absolute" src="/assets/home/section1/binus.png" alt="Binus">
                </div>
            </div>
            <img class="w-full absolute top-[30vw] z-10" src="/assets/home/section1/bottomOrnament.png" alt="">
            <div id="section 2">
                <div>
                    <img class="absolute z-10 top-[58vw] w-screen" src="/assets/home/section2/background.png" alt="">
                </div>
            </div>
            <div id="section 3" class="mt-[95vw] ml-[18vw] flex flex-row">
                <div id="left">
                    <img src="/assets/home/section3/clickandsitImage.png" alt="">
                </div>
                <div id="right" class="ml-[10vw] w-[30vw]">
                    <h5 class="mt-[3vw] text-green-new font-bold text-[2.5vw]">Click and Sit</h5>
                    <p class="mt-[1vw] text-[1.2vw]">Easily fill out shuttle forms in seconds with our automated feature </p>
                    <p class="text-[1.2vw]">- Say goodbye to manual data entry and save time! Try it now!</p>
                    <a href="">
                        <div class="bg-yellow-new shadow-md rounded-[1vw] mt-[1vw] w-[6.75vw] h-[2.2vw] flex text-center justify-center items-center">
                            <h5 class="text-[1.1vw] font-semibold">Start</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div id="section 4" class="mt-[10vw] ml-[27.5vw] mb-[15vw] flex flex-row">
                <div id="left" class="mr-[8vw] w-[25vw] text-right">
                    <h5 class=" text-green-new font-bold text-[2.5vw] ">Sharetificate</h5>
                    <p class="mt-[1vw] text-[1.2vw]">Create and manage secure certificates with ease using our QR validation feature - Save time and stay organized!</p>
                    <a href="">
                        <div class="bg-yellow-new shadow-md rounded-[1vw] mt-[2vw] w-[6.75vw] h-[2.2vw] flex text-center justify-center items-center ml-[18vw]">
                            <h5 class="text-[1.1vw] font-semibold">Start</h5>
                        </div>
                    </a>
                </div>
                <div id="right">
                    <img class="h-[15vw]" src="/assets/home/section4/sharetificateImage.png" alt="">
                </div>
            </div>
            <div id="section 5" class="absolute z-10 top-[140.9vw] w-full">
                <img class="w-full" src="/assets/home/section5/frameFooter.png" alt="">
            </div>
        </div>
    </main>

    <footer class="bg-[#92AA68]">
        <div id="footer" class="mx-auto w-full p-4 py-6 pt-[3vw] max-w-screen-2xl">
            <h5 class="self-center text-[1.5vw] font-semibold whitespace-nowrap text-yellow-new font-shadow mb-3 ">U-Help</h5>
            <div id="upper white line" class="md:flex md:justify-between">
                <div id="left" class="mb-6 md:mb-0">
                    <h5 class="w-[18vw] text-white text-[1vw]">Thoughful marketing for growing dental practices.</h5>
                </div>

                <div id="center" class="grid gap-8 sm:gap-6 sm:grid-cols-2 ml-[4vw]">
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

                <div id="right" class="grid gap-8 sm:gap-6 sm:grid-cols-2">
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
                <span class="text-[1vw] text-white sm:text-center">© 2023 <a href="/home" class="hover:underline">U-Help</a>. Education Lecture Helper, Bogor. All Rights Reserved.</span>
                <div id="right bottom text" class="flex space-x-6 sm:justify-center sm:mt-0 text-[1vw] text-white">
                    <a href="" class="hover:underline uppercase">PRIVACY POLICY</a>
                    <a href="" class="hover:underline uppercase">TERMS & CONDITIONS</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

