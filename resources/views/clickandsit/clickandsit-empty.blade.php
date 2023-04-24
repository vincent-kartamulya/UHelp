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
        <div id="ornament" class="flex flex-row">
            <div id="center ornament" class="pt-[5vw] m-auto">
                <img src="/assets/clickandsit/clickandsit/empty/centerOrnament.png" alt="Center Ornament">
            </div>

            <div id="left ornament" class="absolute mt-[8vw] -z-10">
                <img src="/assets/clickandsit/clickandsit/empty/leftOrnament.png" alt="Left Ornament">
            </div>

            <div id="right ornament" class="absolute right-[0vw] mt-[5vw] -z-10">
                <img src="/assets/clickandsit/clickandsit/empty/rightOrnament.png" alt="Right Ornament">
            </div>
        </div>

        <div id="text and button" class="flex flex-col pt-[3vw]">
            <div id="text" class="text-green-new text-3xl font-semibold m-auto my-3">
                You don't have any schedule yet!
            </div>

            <div id="button" class="m-auto my-10">
                <a href="/createTemplate">
                    <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-60 py-4 rounded-full shadow-md">
                        + Add Schedule
                    </button>
                </a>
            </div>
        </div>
    </main>

    <footer>
        <div id="footer">
            {{-- BELUM ADA ISI NYA --}}
        </div>
    </footer>
</body>
</html>



