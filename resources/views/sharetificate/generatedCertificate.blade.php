<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Generated Certificate</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100 font-font-poppins">
    <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg top-0 fixed z-50">
        <div class="logo-container absolute left-6">
            <a href="#">
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

    <div class="certificate-container pt-44 pb-24 flex flex-row justify-center">
        <div class="left-content mr-5 w-1/3">
            <img class="certificate-image shadow-2xl w-4/5 m-auto" src="/assets/sharetificate/certificate.png" alt="Certificate Image">
        </div>
        <div class="flex flex-col right-content w-1/2">
            <div class="certificate-info space-y-1">
                <h1 class="seminar-title text-4xl font-bold text-dark-blue-new my-3 break-normal">Online Webinar for Business Workshop by Wardiere Inc.</h1>
                <p class="seminar-date text-xl font-semibold text-green-new">Wednesday, April 05th 2023</p>
                <p class="seminar-location text-lg font-semibold text-yellow-new">BINUS University</p>
            </div>
            <div class="absolute mt-60">
                <button class="flex justify-around bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-xl font-bold w-60 px-6 py-4 rounded-full shadow-lg">
                    Download All
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="currentColor" d="M12 15.575q-.2 0-.375-.062T11.3 15.3l-3.6-3.6q-.275-.275-.275-.7t.275-.7q.275-.275.713-.287t.712.262L11 12.15V5q0-.425.288-.713T12 4q.425 0 .713.288T13 5v7.15l1.875-1.875q.275-.275.713-.263t.712.288q.275.275.275.7t-.275.7l-3.6 3.6q-.15.15-.325.213t-.375.062ZM6 20q-.825 0-1.413-.588T4 18v-2q0-.425.288-.713T5 15q.425 0 .713.288T6 16v2h12v-2q0-.425.288-.713T19 15q.425 0 .713.288T20 16v2q0 .825-.588 1.413T18 20H6Z"/></svg>
                </button>
            </div>
        </div>
    </div>

    <div class="flex flex-col mx-auto mt-4">
        <p class="text-center text-5xl font-semibold text-green-new mb-2">Generated Certificates</p>
        <div class="divider-container">
            <img class="w-4/5 m-auto" src="/assets/sharetificate/divider-yellow.svg" alt="Divider Yellow">
        </div>
    </div>

    <div class="list-certificates-container mx-auto my-20 w-[90%]">
        <form>
            <div class="flex w-3/12 float-right mr-24">
                <input type="search" id="default-search" class="block w-10/12 pl-6 py-3 text-lg text-dark-blue-new border border-dark-blue-new border-opacity-60 rounded-l-full bg-[#FFD272] bg-opacity-[0.15] focus:ring-dark-blue-new focus:border-dark-blue-new placeholder:text-dark-blue-new placeholder:text-opacity-[0.6]" placeholder="Search certificate..." required>
                <button type="submit" class="absolute right-52 bg-[#FFD272] bg-opacity-80 hover:bg-[#FFD272] border border-dark-blue-new border-opacity-60 rounded-r-full p-[14px] pl-[18px]">
                    <div class="inset-y-0 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z"/></svg>
                    </div>
                </button>
            </div>
        </form>

    </div>
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
