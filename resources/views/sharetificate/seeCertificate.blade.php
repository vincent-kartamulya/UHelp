@extends('masterSign')
@section('title', 'U-Help | See Certificate')
@section('content')
<div id="before-blue-line" class="flex flex-col pt-[1.5vw]">
    <div class="flex flex-row items-center justify-center mb-[1.25vw]">
        <h5 class="text-center text-[1.875vw] font-bold text-dark-blue-new mobile:text-[3.6vw]">Certificate Verified</h5>
        <img class="ml-[1.042vw] w-[4vw] items-center justify-center mobile:w-[6vw] mobile:ml-[1.5vw]" src="/assets/sharetificate/verified.svg" alt="Certificate Verified">
    </div>
    <div>
        <img class="w-4/5 m-auto mobile:w-4/5" src="/assets/sharetificate/divider-blue.svg" alt="Divider Blue">
    </div>
</div>
<div id="after-blue-line" class="flex flex-col justify-center items-center gap-[5vw] mb-[5vw] mt-[3vw] md:flex-row md:gap-[5vw] sm:flex-col mobile:gap-[8vw]">
    <div id="left-content" class="items-center flex flex-col">
        <img class="shadow-xl w-[35vw] mobile:w-4/5" src="/assets/sharetificate/certificate.png" alt="certificate">
        <a href="/seeCertificate/download">
            <div id="download-button" class="shadow-lg w-[12vw] h-[3vw] mt-[2.5vw] bg-yellow-new hover:bg-yellow-hover rounded-[2vw] justify-center items-center flex flex-row mobile:w-[28vw] mobile:h-[5.4vw] mobile:rounded-[3vw] mobile:mt-[6vw]">
                <h5 class="font-bold text-[1.042vw] text-dark-blue-new md:text-[1.042vw] mobile:text-[2.3vw]">Download</h5>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24"
                    stroke-width="2.5"
                    class="w-[1.1vw] h-[1.1vw] ml-[0.4vw] stroke-dark-blue-new sm:w-[1.1vw] sm:h-[1.1vw] mobile:w-[2.5vw] mobile:h-[2.5vw] mobile:ml-[1vw]">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </div>
        </a>
    </div>
    <div id="right-content" class="flex flex-col justify-center w-[30vw] h-[28vw] bg-white border border-yellow-new shadow-shadow-custom rounded-[0.5vw] px-[2.5vw] py-[2.5vw] text-[1.3vw] text-dark-blue-new mobile:w-[40%] mobile:h-auto mobile:rounded-[1vw] mobile:text-[2vw]">
        <div>
            <h3 class="font-medium">This certificate was issued by</h3>
            <h5 class="font-normal opacity-50">Bina Nusantara University</h5>
        </div>
        <div>
            <h3 class="font-medium mt-[2vw]">Name of Recipient</h3>
            <h5 class="font-normal opacity-50">Anderies</h5>
        </div>
        <div>
            <h3 class="font-medium mt-[2vw]">Issue Date</h3>
            <h5 class="font-normal opacity-50">09-04-2023</h5>
        </div>
        <div>
            <h3 class="font-medium mt-[2vw]">Certificate ID</h3>
            <h5 class="font-normal opacity-50">BN-2502040524</h5>
        </div>
    </div>
</div>
@endsection
