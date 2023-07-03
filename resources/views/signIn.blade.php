@extends('masterSign')
@section('title', 'U-Help | Log In')
@section('content')
<div class="w-full flex bg-slate-100">
    <div class="w-1/2 h-screen">
        <img class="h-full w-full" src="/assets/signIn-element.png" alt="Log In">
    </div>
    <div class="w-1/2 m-auto">
        <img class="m-auto w-[10vw] animate-bounce" src="/assets/logo-full.svg" alt="U-Help Logo">
        <div class="flex justify-center my-[2vw]">
            <div class=" w-7/12 h-auto bg-white rounded-2xl shadow-2xl px-[2vw] py-[1.5vw]">
                <form action="/LogIn/verif" method="POST">
                    @csrf
                    <div class="flex items-center justify-between mb-[2vw]">
                        <h2 class="text-dark-blue-new font-semibold text-[1.458vw]">Login</h2>
                        <a href="/register" class="text-green-new text-[1.042vw] hover:underline">Register</a>
                    </div>
                    @if (session()->has('LogInError'))
                        <p class="text-red-500 text-[0.938vw] mt-[0.2vw]">{{session('LogInError')}}</p>
                    @endif
                    <div class="mb-[1vw]">
                        <label for="default-input" class="block font-medium text-[1.042vw] text-dark-blue-new mb-[0.5vw]">Email Address</label>
                        <input name="email" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-dark-blue-new text-[0.938vw] rounded-lg focus:ring-yellow-new focus:border-yellow-new block w-full p-[0.521vw] h-[2.5vw]">
                        @error('email')
                            <p class="text-red-500 text-[0.938vw] mt-[0.2vw]">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-[0.5vw]">
                        <label for="password" class="block font-medium text-[1.042vw] text-dark-blue-new mb-[0.5vw]">Password</label>
                        <input name="password"  type="password" id="password" class="bg-gray-50 border border-gray-300 text-dark-blue-new text-[0.938vw] rounded-lg focus:ring-yellow-new focus:border-yellow-new block w-full p-[0.521vw] h-[2.5vw]">
                        @error('password')
                        <p class="text-red-500 text-[0.938vw] mt-[0.2vw]">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="flex justify-end">
                        <a class="text-green-new text-[0.938vw] hover:underline" href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="flex justify-center w-full bg-yellow-new hover:bg-yellow-hover h-[2.083vw] mt-[2vw] mb-[1vw] rounded-[0.625vw] shadow-shadow-custom items-center text-dark-blue-new text-[0.938vw] font-semibold">
                        Login
                    </button>
                    <div class="w-full flex justify-between items-center text-center">
                        <div class="w-1/3 bg-dark-blue-new bg-opacity-60 h-[0.052vw]"></div>
                        <p class="text-dark-blue-new text-[0.833vw]">or login with</p>
                        <div class="w-1/3 bg-dark-blue-new bg-opacity-60 h-[0.052vw]"></div>
                    </div>
                    <a href="#" class="flex justify-center bg-white hover:bg-gray-100 h-[2.083vw] mt-[1vw] mb-[1vw] rounded-[0.625vw] shadow-shadow-custom items-center text-dark-blue-new text-[0.938vw] font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 128 128"><rect x="0" y="0" width="128" height="128" fill="none" stroke="none" /><path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.33 74.33 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.16 36.16 0 0 1-13.93 5.5a41.29 41.29 0 0 1-15.1 0A37.16 37.16 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.31 38.31 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.28 34.28 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.22 61.22 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38z"/><path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.22 61.22 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.28 34.28 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21z"/><path fill="#f8bd00" d="M3.26 51.5a62.93 62.93 0 0 1 5.5-15.9l20.73 16.09a38.31 38.31 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9z"/><path fill="#587dbd" d="M65.27 52.15h59.52a74.33 74.33 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68z"/><path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.16 37.16 0 0 0 14.08 6.08a41.29 41.29 0 0 0 15.1 0a36.16 36.16 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.73 63.73 0 0 1 8.75 92.4z"/></svg>
                        <p class="ml-[1vw]">Google</p>
                    </a>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
