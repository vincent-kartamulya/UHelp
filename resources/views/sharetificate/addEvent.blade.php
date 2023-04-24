<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Add Event</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100 font-font-poppins">
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

    <div class="element-container">
        <div class="absolute -z-10">
            <img src="/assets/sharetificate/left-element-addEvent.png" alt="Left Element">
        </div>

        <div class="absolute right-0 mt-44 -z-10">
            <img src="/assets/sharetificate/right-element-addEvent.png" alt="Right Element">
        </div>
    </div>

    <div class="add-event-container flex flex-col pt-48">
        <div class="m-auto my-2">
            <img src="/assets/sharetificate/addEvent-icon.png" alt="Add Event Icon">
        </div>
        <div class="text-green-new text-3xl font-semibold m-auto my-3">
            You don't have any event yet!
        </div>
        <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-60 py-4 rounded-full m-auto my-10 shadow-md">
            + Add Event
        </button>
    </div>
</body>
</html>
