@extends('master')
@section('title', 'U-Help | Create Template')
@section('css')
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<script>
    tailwind.config = {
        darkMode: "class",
        corePlugins: {
        preflight: false,
        },
    };
</script>
@endsection
@section('content')
<div id="content" class="flex pt-[5vw]">
    <div id="ornament">
        <div id="circle-top-ornament " class="absolute z-10 right-[19vw]">
            <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
        </div>

        <div id="right-ornament" class="absolute z-10 right-[0vw]">
            <img src="/assets/clickandsit/createTemplate/rightOrnament.png">
        </div>

        <div id="left-ornament" class="absolute z-10">
            <img src="/assets/clickandsit/createTemplate/leftOrnament.png">
        </div>

        <div id="circle-bottom-ornament" class="absolute z-10 top-[40vw] left-[17vw]">
            <img src="/assets/clickandsit/createTemplate/circleOrnament.png">
        </div>
    </div>

    <div id="formBox" class="w-1/2 m-auto border-[0.15vw] bg-white border-yellow-new rounded-[0.85vw] shadow sm:p-[1.25vw] md:p-[3vw] mt-[4vw] mb-[10vw]">
        <div id="header-setting" class="">
            <h1 class="mt-[1vw] mb-[2vw] font-semibold text-[2.5vw] text-dark-blue-new text-center">Setting</h1>
        </div>

        <div id="departure-return-destination" class="px-[0.83vw]">
            <form id="departure_return" action="/clickandsit/fill" method="POST">
                @csrf
                <label class="block text-green-new text-[1.25vw] font-semibold mb-[1vw]">Departure</label>
                <div class="flex flex-row justify-between items-center">
                    <div class="place_departure">
                        <select name="place_departure" id="place_departure" data-te-select-init data-te-class-form-outline="relative w-[20vw]">
                            <option value="" selected></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <label data-te-select-label-ref>Choose destination place</label>
                    </div>
                    <div class="time_departure">
                        <select name="time_departure" id="time_departure" data-te-select-init data-te-class-form-outline="relative w-[20vw]">
                            <option value="" selected></option>
                            <option value="07.00">07.00</option>
                            <option value="08.00">08.00</option>
                            <option value="09.00">09.00</option>
                        </select>
                        <label data-te-select-label-ref>Choose departure time</label>
                    </div>
                </div>

                <label class="block text-green-new text-[1.25vw] font-semibold mt-[2vw] mb-[1vw]">Return</label>
                <div class="flex flex-row justify-between items-center">
                    <div class="place_return">
                        <select name="place_return" id="place_return" data-te-select-init data-te-class-form-outline="relative w-[20vw]">
                            <option value="" selected></option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>
                        <label data-te-select-label-ref>Choose return place</label>
                    </div>
                    <div class="time_return">
                        <select name="time_return" id="time_return" data-te-select-init data-te-class-form-outline="relative w-[20vw]">
                            <option value="" selected></option>
                            <option value="17.00">17.00</option>
                            <option value="18.00">18.00</option>
                            <option value="19.00">19.00</option>
                        </select>
                        <label data-te-select-label-ref>Choose return time</label>
                    </div>
                </div>

                <label class="block text-green-new text-[1.25vw] font-semibold mt-[2vw] mb-[1vw]">Needs</label>
                <div>
                    <input name="needs"  type="text" class="border w-full border-yellow-new text-[1.042vw] rounded-[0.417vw] focus:ring-green-new focus:border-green-new block p-[0.521vw]" placeholder="Fill the need for your shuttle" required>
                </div>
                <div class="flex justify-center">
                    <button id="save-button" type="submit" class="flex m-auto bg-yellow-new hover:bg-yellow-hover h-auto mt-[2.083vw] rounded-full shadow-lg items-center">
                        <p class="text-dark-blue-new text-[1.042vw] font-bold px-[1.667vw] py-[0.625vw]">Save</p>
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<script src="/node_modules/flowbite/dist/flowbite.js"></script>
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
@endsection
