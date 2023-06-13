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
        <div id="header setting">
            <h1 class="mb-[2vw] font-semibold text-[2.5vw] text-dark-blue-new text-center">Setting</h1>
        </div>

        <div id="departure-return-destination" class="px-[0.83vw]">
            <form id="departure_return" action="/clickandsit/fill" method="POST">
                @csrf
                <label class="block text-green-new text-2xl font-semibold mb-[1vw]">Departure</label>
                <div class="flex flex-row">
                    <div class="place_departure mr-[2vw]">
                        <select name="place_departure" id="place_departure" data-te-select-init data-te-class-form-outline="relative w-[15vw]">
                            <option value="" selected></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <label data-te-select-label-ref>Choose destination place</label>
                    </div>
                    <div class="time_departure">
                        <select name="time_departure" id="time_departure" data-te-select-init data-te-class-form-outline="relative w-[15vw]">
                            <option value="" selected></option>
                            <option value="Teknik">07.00</option>
                            <option value="Sistem">08.00</option>
                            <option value="Sistem">09.00</option>
                        </select>
                        <label data-te-select-label-ref>Choose departure time</label>
                    </div>
                </div>

                <label class="block text-green-new text-2xl font-semibold mt-[2vw] mb-[1vw]">Return</label>
                <div class="flex flex-row">
                    <div class="place_return mr-[2vw]">
                        <select name="place_return" id="place_return" data-te-select-init data-te-class-form-outline="relative w-[15vw]">
                            <option value="" selected></option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>
                        <label data-te-select-label-ref>Choose return place</label>
                    </div>
                    <div class="time_return">
                        <select name="time_return" id="time_return" data-te-select-init data-te-class-form-outline="relative w-[15vw]">
                            <option value="" selected></option>
                            <option value="Teknik">17.00</option>
                            <option value="Sistem">18.00</option>
                            <option value="Sistem">19.00</option>
                        </select>
                        <label data-te-select-label-ref>Choose return time</label>
                    </div>
                </div>

                <label class="block text-green-new text-2xl font-semibold mt-[2vw] mb-[1vw]">Necessity</label>
                <div>
                    <input name='kebutuhan'  type="text" class="border w-[40vw] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-new focus:border-yellow-new block p-2.5" placeholder="Fill necessity for your shuttle" required>
                </div>
                <div id="save button" class="flex justify-center">
                    <button type='submit' class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-[12.5vw] py-[0.83vw] rounded-full m-auto mt-[3vw] shadow-md">
                        Save
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
