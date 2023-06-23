@extends('master')
@section('title', 'U-Help | See Certificate')
@section('content')
<div id="before-blue-line" class="flex flex-col pt-[7.813vw]">
    <div class="flex flex-row">
        <div class="flex flex-row items-center justify-center ml-[40vw] mb-[1.25vw]">
            <h5 class="text-center text-[1.875vw] font-bold text-dark-blue-new">Certificate Verified</h5>
            <img class="ml-[1.042vw] items-center justify-center" src="/assets/sharetificate/verified.svg" alt="Certificate Verified">
        </div>
    </div>
    <div>
        <img class="w-4/5 m-auto" src="/assets/sharetificate/divider-blue.svg" alt="Divider Blue">
    </div>
</div>
<div id="after-blue-line" class="flex flex-row mb-[5vw]">
    <div id="left-content" class="justify-center items-center flex flex-col">
        <img class="shadow-xl ml-[14.5vw] mt-[3vw] w-[35vw]" src="/assets/sharetificate/certificate.png" alt="certificate">
        <a href="/seeCertificate/download">
            <div id="download-button" class="shadow-lg w-[12vw] h-[3vw] mt-[2.5vw] ml-[14.5vw] bg-yellow-new rounded-[2vw] justify-center items-center flex flex-row">
                <h5 class="font-semibold text-[1vw] text-dark-blue-new">Download</h5>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24"
                    stroke-width="2.5"
                    class="w-[1.1vw] h-[1.1vw] ml-[0.4vw] stroke-dark-blue-new">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </div>
        </a>
    </div>
    <div id="right-content" class="w-[30vw] h-[28vw] mt-[3vw] ml-[5vw] bg-white shadow-lg rounded-[0.5vw] px-[2.5vw] py-[2.5vw] text-[1.3vw]">
        <h3 class="font-medium">This certificate was issued by</h3>
        <h5 class="font-light opacity-50">Bina Nusantara University</h5>
        <h3 class="font-medium mt-[2vw]">Name of Recipient</h3>
        <h5 class="font-light opacity-50">Anderies</h5>
        <h3 class="font-medium mt-[2vw]">Issue Date</h3>
        <h5 class="font-light opacity-50">09-04-2023</h5>
        <h3 class="font-medium mt-[2vw]">Certificate ID</h3>
        <h5 class="font-light opacity-50">BN-2502040524</h5>
    </div>
</div>
@endsection
