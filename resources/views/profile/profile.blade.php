@extends('master')
@section('title','U-Help | Profile')
@section('css')
<link rel="stylesheet" href="css/profile.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection
@section('content')
<div id="profileSection">
    <div id="content" class="flex flex-row bg-slate-100">
        <div id="left content" class="ml-[15vw] ">
            <div id="profile" class="w-full max-w-[12vw] h-[12vw] bg-white border border-gray-200 rounded-[0.5vw] shadow mt-[8vw]">
                <form action="/update/profile" method="POST" enctype="multipart/form-data">
                    @csrf
                <div id="profile" class="flex flex-col items-center pb-10">
                    <div class="profile-pic">
                        <label class="-label" for="file">
                            <i class="bx bx-camera"></i>
                        </label>
                        <input name="imageprofile" id="file" type="file" onchange="loadFile(event)"/>
                        <img src="{{asset('storage/'. auth()->user()->imageprofile)}}" id="output" width="200" />
                    </div>


                    <h5 class="mb-1 text-[0.8vw] font-medium text-gray-900">{{auth()->user()->name}}</h5>
                    <hr class="w-[11.5vw] h-[0.2vw] mx-auto mt-[0.6vw] bg-slate-100 border-0 rounded shadow-inner">
                    <a href="" id="changePasswordLink">
                        <div class="flex justify-center items-center w-[11.7vw] h-[2.65vw] bg-white rounded">
                            <h5 class="font-semibold text-green-new text-[0.95vw]">Change Password</h5>
                        </div>
                    </a>
                </div>
            </div>

            <a href="/delete-account">
                <div id="delete account" class="flex justify-center items-center w-[12vw] h-[2.5vw] bg-white border border-gray-200 rounded-[0.5vw] shadow mt-[1vw]">
                    <h5 class="text-[1vw] font-semibold text-red-600">Delete Account</h5>
                </div>
            </a>
        </div>
        <div id="right content" class="bg-white rounded-[0.5vw] shadow mt-[8vw] w-[50vw] h-auto ml-[5vw] px-[3.5vw] py-[3vw] mb-[5vw]">
            {{-- <form action="/update/profile" method="POST" enctype="multipart/form-data">
                @csrf --}}
                <div id="account data" class="mb-[2vw]">
                    <div id="accountData" class="flex justify-center items-center">
                        <h5 class="text-[2vw] font-bold mb-[3vw] text-dark-blue-new">Account Data</h5>
                    </div>
                    <div class=" flex justify-center items-center">
                        <div id="left" class="mx-[1vw]">
                            <div id="username" class="relative mb-[2vw] flex items-center">
                                <label for="username" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Username</label>
                                <input name="username" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[2.5vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="{{$punya->username}}" required>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                            <div id="email" class="relative mb-[2vw] flex items-center">
                                <label for="email" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Email</label>
                                <input name="email" type="email" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[3vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="{{$punya->email}}" required>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                            <div id="realName" class="relative mb-[2vw] flex items-center">
                                <input name="realName" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[3vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="{{$punya->name}}" required>
                                <label for="realName" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Real Name</label>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="right" class="mx-[1vw]">
                            <div id="binusianID" class="relative mb-[2vw] flex items-center">
                                <input name="binusianID" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[3vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="{{$punya->BINUSId}}" required>
                                <label for="binusianID" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Binusian ID</label>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                            <div id="division" class="relative mb-[2vw] flex items-center">
                                <input name="division" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[3vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="{{$punya->Position}}" required>
                                <label for="division" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Unit / Division</label>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                            <div id="phoneNumber" class="relative mb-[2vw] flex items-center">
                                <input name="phoneNumber" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[3vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="{{$punya->PhoneNumber}}" required>
                                <label for="phoneNumber" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Phone Number</label>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div id="cancel and save button" class="flex flex-row ml-[26vw]">
                <a href="">
                    <div id="facebook" class="bg-white w-[7vw] h-[2.75vw] rounded-[0.25vw] shadow text-black flex items-center justify-center border-[0.2vw] border-[#CFD9E0]">
                        Cancel
                    </div>
                </a>
                <button type="submit">
                    <div  class="bg-[#3F487F] w-[9vw] h-[2.75vw] rounded-[0.25vw] shadow text-white flex items-center justify-center ml-[1vw] border border-[#CFD9E0]">
                        Save Changes
                    </div>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- <script src="js/profile.js"></script> --}}
{{-- @endsection

@section('content') --}}
<div id="passwordSection" style="display: none;">
    <div id="content" class="flex flex-row bg-slate-100">
        <div id="left content" class="ml-[15vw] ">
            <div id="profile" class="w-full max-w-[12vw] h-[12vw] bg-white border border-gray-200 rounded-[0.5vw] shadow mt-[8vw]">
            <form action="/update/password" method="POST">
                @csrf
                <div id="profile" class="flex flex-col items-center pb-10">
                    <div class="profile-pic">
                        <label class="-label" for="file">
                            {{-- <span class="glyphicon glyphicon-camera"></span> --}}
                            <i class='bx bx-camera'></i>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)"/>
                        <img src="{{asset('storage/'. auth()->user()->imageprofile)}}" id="output" width="200" />
                    </div>
                    <h5 class="mb-1 text-[0.8vw] font-medium text-gray-900">{{auth()->user()->name}}</h5>
                    <hr class="w-[11.5vw] h-[0.2vw] mx-auto mt-[0.6vw] bg-slate-100 border-0 rounded shadow-inner">
                    <a href="">
                        <div class="flex justify-center items-center w-[11.7vw] h-[2.65vw] bg-white rounded">
                            <h5 class="font-semibold text-green-new text-[0.95vw]">Change Profile</h5>
                        </div>
                    </a>
                </div>
            </div>

            <a href="/delete-account">
                <div id="delete account" class="flex justify-center items-center w-[12vw] h-[2.5vw] bg-white border border-gray-200 rounded-[0.5vw] shadow mt-[1vw]">
                    <h5 class="text-[1vw] font-semibold text-red-600">Delete Account</h5>
                </div>
            </a>
        </div>
        <div id="right content" class="bg-white rounded-[0.5vw] shadow mt-[8vw] w-[50vw] h-auto ml-[5vw] px-[3.5vw] py-[3vw] mb-[5vw]">
            {{-- <form action="/update/profile" method="POST" enctype="multipart/form-data">
                @csrf --}}
                <div id="account data" class="mb-[2vw]">
                    <div id="accountData" class="flex justify-center items-center">
                        <h5 class="text-[2vw] font-bold mb-[3vw] text-dark-blue-new">Change Password</h5>
                    </div>
                    <div class=" flex justify-center items-center">
                        <div id="left" class="mx-[1vw]">
                            <div id="oldPassword" class="relative mb-[2vw] flex items-center">
                                <input name="oldPassword" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[2.5vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="" required>
                                <label for="oldPassword" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Old Password</label>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                            <div id="newPassword" class="relative mb-[2vw] flex items-center">
                                <input name="newPassword" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[2.5vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="" required>
                                <label for="newPassword" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">New Password</label>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                            <div id="confirmNewPass" class="relative mb-[2vw] flex items-center">
                                <input name="confirmNewPass" type="text" class="placeholder-[#B8BBBA] placeholder-opacity-75 border px-3 w-[20vw] h-[2.5vw] border-yellow-new bg-transparent rounded-[0.25vw] text-[0.8vw] focus:ring-green-new focus:border-green-new text-black block pb-1.5 pt-3 p-[0.521vw]" placeholder="" required>
                                <label for="confirmNewPass" class="absolute text-[0.85vw] text-dark-blue-new transform -translate-y-3 top-0 z-10 left-[0.8vw] bg-white px-[0.25vw] peer-focus:px-2 peer-focus:text-dark-blue-new peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-1 peer-focus:scale-80 peer-focus:-translate-y-3">Confirm New Password</label>
                                <div class="absolute right-[1vw]">
                                    <a href="">
                                        <i class='bx bxs-edit text-[1vw] text-dark-blue-new' ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div id="cancel and save button" class="flex flex-row ml-[26vw]">
                <a href="">
                    <div id="facebook" class="bg-white w-[7vw] h-[2.75vw] rounded-[0.25vw] shadow text-black flex items-center justify-center border-[0.2vw] border-[#CFD9E0]">
                        Cancel
                    </div>
                </a>
                <button type="submit">
                    <div  class="bg-[#3F487F] w-[9vw] h-[2.75vw] rounded-[0.25vw] shadow text-white flex items-center justify-center ml-[1vw] border border-[#CFD9E0]">
                        Save Changes
                    </div>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var profileSection = document.getElementById("profileSection");
        var passwordSection = document.getElementById("passwordSection");
        var changePasswordLink = document.getElementById("changePasswordLink");

        changePasswordLink.addEventListener("click", function(event) {
            event.preventDefault();

            if (profileSection.style.display === "block") {
                profileSection.style.display = "none";
                passwordSection.style.display = "block";
            } else {
                profileSection.style.display = "block";
                passwordSection.style.display = "none";
            }
        });
    });
</script>

<script src="js/profile.js"></script>
<script src="js/profile.js"></script>
@endsection
