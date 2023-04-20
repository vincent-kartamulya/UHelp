<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>U-Help | Click and Sit</title>
  <link rel="icon" type="image/gif" href="/assets/logo.png">
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


    <div id="content" class="flex bg-[#F5F6F9]">
        <div id="ornament">
            <div>
                <img class="ml-[94vw] mt-[0.5vw] absolute" src="/assets/clickandsit/createTemplate/rightOrnament.png">
            </div>

            <div>
                <img class="" src="/assets/clickandsit/clickandsit/leftOrnament-fill.png">
            </div>
        </div>

        <div id="header available template">
            <h1 class="mt-[3vw] ml-[23vw] font-font-poppins font-semibold text-[2.5vw]  text-[#3F487F] text-center">Available Template</h1>
        </div>

        <div id="card template" class="absolute w-full max-w-[50vw] border bg-[#FFD272] border-[#FFD272] rounded-[2vw] shadow  md:p-[2vw] ml-[23vw] mt-[10vw]">
            <div id="text">
                <label for="destination title" class="block mb-[0.75vw] font-font-poppins font-bold text-[1.5vw] text-[#3F487F]">Anggrek - Grand Indonesia</label>
                <h5 class="mb-[1.5vw] font-font-poppins font-semibold text-[1vw] text-[#3F487F]">16:30 WIB - 18:15 WIB </h5>
            </div>

            <div id="schedule" class="inline-flex rounded-md shadow-sm" role="group">
                <a class="text-[#539064] text-bold text-[1vw] w-[2vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">M</a>
                <a class="text-[#539064] text-bold text-[1vw] w-[2vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">T</a>
                <a class="text-[#539064] text-bold text-[1vw] w-[2vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">W</a>
                <a class="text-[#539064] text-bold text-[1vw] w-[2vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">T</a>
                <a class="text-[#539064] text-bold text-[1vw] w-[2vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">F</a>
            </div>
        </div>

        <div id="add schedule button" class="absolute">
            <button type="submit" class="mt-[30vw] ml-[43vw] w-[12vw] h-[3vw] text-[#3F487F] text-[1.2vw] border bg-[#F7C04B] hover:bg-white hover:border-[#F7C04B] font-font-poppins font-bold rounded-[5vw] text-sm px-[2vw] py-[1vw] text-center">+ Add Schedule</button>
        </div>
    </div>


    <div id="footer">
        {{-- BELUM ADA ISI NYA --}}
    </div>

</body>
</html>




