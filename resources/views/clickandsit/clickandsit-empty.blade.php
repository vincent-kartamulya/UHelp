<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Click and Sit</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <div id="navbar">
        <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg">
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


    <div id="content">
        <div id="ornament" class="flex">
            <div>
                <img class="ml-[91.25vw] absolute" src="/assets/clickandsit/clickandsit/rightOrnament.png">
            </div>
            <div>
                <img class="mt-[2vw]" src="/assets/clickandsit/clickandsit/leftOrnament.png">
            </div>
            <div>
                <img class="ml-[16vw] h-[20vw]" src="/assets/clickandsit/clickandsit/centerOrnament.png">
            </div>
        </div>

        <div id="text">
            <p class="text-[#3F487F] text-[1.5vw] ml-[40vw] font-font-poppins">
                There's no schedule yet.
            </p>
        </div>

        <div id="create template button">
            <a href="createTemplate">
                <button class="bg-[#F7C04B] text-[#3F487F] text-[1.5vw] font-bold py-4 px-12 rounded-full ml-[41vw] mt-[2vw] font-font-poppins-semibold">
                    + Add Schedule
                </button>
            </a>
        </div>
    </div>


    <div id="footer">
        {{-- BELUM ADA ISI NYA --}}
    </div>

</body>
</html>
