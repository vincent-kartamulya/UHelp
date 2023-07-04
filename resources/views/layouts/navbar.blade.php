<nav class="w-full h-[5vw] flex items-center border-b-[0.26vw] border-yellow-new bg-white shadow-lg fixed top-0 z-50">
    <div id="logo-container" class="absolute left-[1.25vw]">
        <a href="/">
            <img class="w-[9.167vw]" src="/assets/logo.jpg" alt="U-Help Logo">
        </a>
    </div>
    <div id="features-container" class="w-[25vw] m-auto">
        <ul class="flex flex-row justify-around text-green-new text-[1.25vw] text-center items-center">
            <li class="hover:font-medium w-[10vw] drop-shadow transition duration-100 ease-in-out">
                <a href="/clickandsit">Click and Sit</a>
            </li>
            <li class="hover:font-medium w-[10vw] drop-shadow transition duration-100 ease-in-out">
                <a href="/events">Sharetificate</a>
            </li>
        </ul>
    </div>
    <div id="profile-container" class="flex absolute gap-[0.3vw] right-[1.667vw] items-center">

        @auth
        <img id="avatarButton" class="w-[3.33vw] h-[3.33vw] rounded-full cursor-pointer" src="{{asset('storage/'. auth()->user()->imageprofile)}}" alt="Profile Picture" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start">
        {{-- Menu Avatar Dropdown --}}
        <div id="userDropdown" class="z-10 hidden border border-gray-200 bg-white rounded-[0.417vw] shadow mt-[0.208vw] w-[9.896vw]">
            <ul class="py-[0.417vw] text-[0.938vw] text-dark-blue-new font-medium" aria-labelledby="dropdownDefaultButton">
                <div class="px-[0.833vw] py-[0.625vw] border-b border-b-yellow-new">
                    <div class="font-semibold truncate text-green-new">Username</div>
                </div>
                <li>
                    <a href="/profile" class="block px-[0.833vw] py-[0.417vw] hover:bg-[#FFD272] transition duration-100 ease-in-out">Profile</a>
                </li>
                <li>
                    <form action="/LogOut" method="POST">
                        @csrf
                        <button type="submit" class="block px-[0.833vw] py-[0.417vw] w-full hover:bg-[#FFD272] transition duration-100 ease-in-out text-start">
                                Log Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @else
        <a href="/login" class="flex justify-center bg-white hover:bg-gray-100 h-[2.5vw] rounded-[1.5vw] px-[1vw] border-[0.2vw] border-yellow-new items-center text-yellow-new text-[1.042vw] font-medium transition duration-100 ease-in-out">
            Login
        </a>
        <a href="/register" class="flex justify-center bg-yellow-new hover:bg-yellow-hover h-[2.5vw] rounded-[1.5vw] px-[1vw] items-center text-white text-[1.042vw] font-medium transition duration-100 ease-in-out">
            Register
        </a>
        @endauth

    </div>
</nav>
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
