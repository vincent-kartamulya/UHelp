@extends('master')
@section('title','U-Help | Profile')
@section('content')
<div id="content" class="flex flex-row bg-slate-100">
    <div id="left content" class="ml-[15vw] ">
        <div id="profile" class="w-full max-w-[12vw] h-[13vw] bg-white border border-gray-200 rounded-[0.5vw] shadow mt-[8vw]">
            <div id="profile" class="flex flex-col items-center pb-10">
                <img class="w-[6vw] h-[6vw] mb-3 rounded-full shadow-lg mt-[1vw] border-[0.2vw] border-slate-100" src="/assets/profile/profile.png" alt="Profile Picture"/>
                <h5 class="mb-1 text-[0.75vw] font-medium text-gray-900">@anderies_senpai</h5>
                <hr class="w-[11.5vw] h-[0.2vw] mx-auto my-4 bg-slate-100 border-0 rounded shadow-inner">
            </div>
        </div>
        <a href="/profile/delete">
            <div id="delete account" class="flex justify-center items-center w-[12vw] h-[2.5vw] bg-white border border-gray-200 rounded-[0.5vw] shadow mt-[1vw]">
                <h5 class="text-[1vw] font-semibold text-red-600">Delete Account</h5>
            </div>
        </a>
    </div>
    <div id="right content" class="bg-white rounded-[0.5vw] shadow mt-[8vw] w-[50vw] h-[64vw] ml-[5vw] px-[3.5vw] py-[3vw] mb-[5vw]">
        <div id="connect section">
            <h5 class="text-[1.5vw] font-semibold mb-[1vw]">Connect</h5>
            <div id="connect button" class="flex flex-row mb-[5vw]">
                <a href="">
                    <div id="facebook" class="bg-[#3F487F] w-[21vw] h-[3vw] rounded-[0.25vw] shadow uppercase text-white flex items-center justify-center">
                        CONNECT WITH FACEBOOK
                    </div>
                </a>
                <a href="">
                    <div id="facebook" class="bg-[#DAA55A] w-[21vw] h-[3vw] rounded-[0.25vw] shadow uppercase text-black flex items-center justify-center ml-[1vw]">
                        REGISTERED WITH GOOGLE
                    </div>
                </a>
            </div>
        </div>
        <div id="account data">
            <h5 class="text-[1.5vw] font-semibold mb-[1.5vw]">Account Data</h5>
            <div id="username" class="w-[28vw] mb-[2vw]">
                <h5 class="absolute ml-[0.75vw] top-[25.4vw] bg-white text-[#3F487F] w-[4.75vw] flex justify-center">Username</h5>
                <input type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[21vw] h-[3vw] border-[#B8BBBA] bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-[#3F487F] focus:border-[#3F487F] text-black" placeholder="anderies_notanto" required>
            </div>
            <div id="username" class="w-[28vw] mb-[2vw]">
                <h5 class="absolute ml-[0.75vw] top-[30.4vw] bg-white text-[#3F487F] w-[2.75vw] flex justify-center">Email</h5>
                <input type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[21vw] h-[3vw] border-[#B8BBBA] bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-[#3F487F] focus:border-[#3F487F] text-black" placeholder="anderies_senpai@gmail.com" required>
            </div>
            <div id="real name" class="w-[28vw] mb-[5vw]">
                <h5 class="absolute ml-[0.75vw] top-[35.4vw] bg-white text-[#3F487F] w-[5vw] flex justify-center">Real Name</h5>
                <input type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[21vw] h-[3vw] border-[#B8BBBA] bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-[#3F487F] focus:border-[#3F487F] text-black" placeholder="Anderies Notanto" required>
            </div>
        </div>
        <div id="notification">
            <h5 class="text-[1.5vw] font-semibold mb-[1vw]">Notification</h5>
            <div id="card" class="mb-[3vw]">
                <div id="notification" class="bg-white w-[43vw] h-[3vw] rounded-[0.25vw] shadow text-black flex items-center border border-[#B8BBBA]">
                    <p class="ml-[0.75vw]">Receive newsletters, promotions, and news from U-Help Comapny</p>
                    <div id="right (toggle)">
                        <label for="themeSwitcherTwo" class="themeSwitcherTwo relative inline-flex cursor-pointer select-none items-center left-[9.5vw] top-[0.1vw]">
                            <input type="checkbox" name="themeSwitcherTwo" id="themeSwitcherTwo" class="sr-only">
                            <span class="slider mx-[0.83vw] flex h-[1.46vw] w-[2.73vw] items-center rounded-full bg-[#AFB1B6] p-[0.2vw] duration-200">
                                <span class="dot h-[1.093vw] w-[1.093vw] rounded-full bg-white duration-200"></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div id="text" class="text-justify mb-[5vw]">
            <span class=" text-black sm:text-center">U-Help will process your data to send you information about our products and services, promotions, surveys, rafffles, based on our legitimate interest, and updates from the creators you follow, if you have consented to this. Your data will not be disclosed to third parties. They will be communicated outside the EU under the terms of the
                <a href="" class="text-[#3F487F] font-semibold hover:underline">Privacy policy.</a>
                You can opt out of our notifications with the first slider.
                <a href="" class="text-[#3F487F] font-semibold hover:underline">More information</a>
            </span>
        </div>
        <div id="cancel and save button" class="flex flex-row ml-[26vw]">
            <a href="">
                <div id="facebook" class="bg-white w-[7vw] h-[2.75vw] rounded-[0.25vw] shadow text-black flex items-center justify-center border-[0.2vw] border-[#CFD9E0]">
                    Cancel
                </div>
            </a>
            <a href="/profile/change">
                <div id="facebook" class="bg-[#3F487F] w-[9vw] h-[2.75vw] rounded-[0.25vw] shadow text-white flex items-center justify-center ml-[1vw] border border-[#CFD9E0]">
                    Save Changes
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
