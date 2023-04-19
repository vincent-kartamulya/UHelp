<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>U-Help | Click and Sit</title>
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
