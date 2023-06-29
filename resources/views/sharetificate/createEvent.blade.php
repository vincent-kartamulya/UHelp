@extends('master')
@section('title', 'U-Help | Create Event')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .form-input {
            display: none;
        }

        .form-input.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
        }
    </style>
@endsection

@section('content')
    <div class="element-container">
        <div class="absolute mt-[0.833vw] -z-10">
            <img src="/assets/sharetificate/leftCircleEl-createEvent.png" alt="Top Left Circle Element">
        </div>

        <div class="absolute right-0 mt-[5vw] -z-10">
            <img src="/assets/sharetificate/rightCircleEl-createEvent.png" alt="Top Right Circle Element">
        </div>

        <div class="absolute mt-[12.5vw] -z-10">
            <img src="/assets/sharetificate/leftEl-createEvent.png" alt="Left Element">
        </div>

        <div class="absolute right-0 -z-10">
            <img src="/assets/sharetificate/rightEl-createEvent.png" alt="Right Element">
        </div>
    </div>

    <div class="form-title flex flex-col m-auto w-1/2 pt-[7.5vw]">
        <p class="text-center text-[1.875vw] font-bold text-dark-blue-new mb-[1.417vw]">Create New Event</p>
        <img src="/assets/sharetificate/divider-blue.png" alt="Divider Blue">
    </div>
    {{-- Tampil status berhasil (sementara)  --}}
    @if (session()->has('success'))
        <div class="alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif

    <div class="form-container mt-[3.083vw] mb-[10vw]">
        <div class="event-form w-1/2 m-auto px-[3.33vw] py-[2.5vw] border-2 rounded-[0.833vw] shadow-2xl bg-white">
            <form method="POST" action="/events" enctype="multipart/form-data" class="user-form" data-parsley-validate="">
                @csrf
                <div class="form-input">
                    <div class="event-title flex flex-col">
                        <label for="event_name" class="text-green-new text-[1.146vw] font-semibold mb-[0.625vw]">Title *</label>
                        <input type="text" autocomplete="off" name="event_name" id="event_name" value="{{old("event_name")}}" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.417vw] text-[1.042vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="Enter the event's name " data-parsley-group="block0">
                        @error('event_name')
                            <p class="mt-[0.417vw] text-[0.938vw] text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                    <div class="loc-and-date flex justify-between">
                        <div class="event-loc flex flex-col w-1/2">
                            <label for="event_location" class="text-green-new text-[1.146vw] font-semibold mt-[2.5vw] mb-[0.625vw]">Location *</label>
                            <input type="text" autocomplete="off" name="event_location" id="event_location" value="{{old("event_location")}}" class="form-control border px-[0.625vw] border-yellow-new rounded-[0.417vw] text-[1.042vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="Enter the event's location " data-parsley-group="block0">
                            @error('event_location')
                                <p class="mt-[0.417vw] text-[0.938vw] text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div class="event-date flex flex-col w-2/5">
                            <label for="event_date" class="text-green-new text-[1.146vw] font-semibold mt-[2.5vw] mb-[0.625vw]">Date *</label>
                            <div class="relative flex flex-col">
                                <input datepicker datepicker-autohide autocomplete="off" type="text" datepicker-format="yyyy-mm-dd" name="event_date" id="event_date" value="{{old("event_date")}}" class="form-control relative w-full border border-yellow-new rounded-[0.417vw] text-[1.042vw] focus:ring-green-new focus:border-green-new mb-[0.208vw]" placeholder="Select a date " data-parsley-group="block0">
                                @error('event_date')
                                    <p class="mt-[0.417vw] text-[0.938vw] text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                @enderror
                                <div class="absolute right-[1vw] top-1/2 transform -translate-y-1/2">
                                    <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="1.25vw" height="1.25vw" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <path fill="currentColor" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="participants-data flex flex-col w-1/2">
                        <label for="event_participants" class="text-green-new text-[1.146vw] font-semibold mt-[2.5vw] mb-[0.625vw]">Upload Participant Data *</label>
                        <input type="file" name="event_participants" id="event_participants" value="{{old("event_participants")}}" class="form-control text-[1.042vw] bg-gray-50 rounded-[0.417vw] text-gray-500 border mb-[0.208vw]" data-parsley-group="block0" accept=".xlsx,.xls">
                        <p class="mt-[0.208vw] text-[0.938vw] text-gray-500 dark:text-gray-300" id="file_input_help">XLS. (with column names: "name", "email", "position").</p>
                        @error('event_participants')
                            <p class="mt-[0.417vw] text-[0.938vw] text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                </div>
                <div class="form-input">
                    <div class="certificate-template flex flex-col w-1/2">
                        <label for="event_certificate" class="text-green-new text-[1.146vw] font-semibold mb-[0.625vw]">Upload Certificate Template *</label>
                        <input type="file" name="event_certificate" id="event_certificate" value= "{{old("event_certficicate")}}" class="form-control text-[1.042vw] rounded-[0.417vw] text-gray-500 border mb-[0.208vw]" data-parsley-group="block1" accept="image/*">
                        <p class="mt-[0.208vw] text-[0.938vw] text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPG.</p>
                        @error('event_certificate')
                            <p class="mt-[0.417vw] text-[0.938vw] text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                    <div id="certificate-display" class="my-[0.833vw] hidden">
                        <img class="w-4/5 m-auto border-2" id="template" src = "" alt="Certificate Image" draggable="false">

                        <!-- Add the name template -->
                        <div id="name-template" class="flex items-center justify-center">
                            <span id="name-placeholder" class="border-dashed border-4 border-yellow-new p-[0.313vw] text-[1.042vw] text-green-600 font-bold" draggable="true">Drag_Me_This_Is_A_Example_Name</span>
                        </div>

                        <input type="hidden" name="nameX" id="nameX">
                        <input type="hidden" name="nameY" id="nameY">
                    </div>
                </div>
                <div class="form-navigation mt-[2.083vw] mb-[5vw]">
                    <button type="button" class="previous-btn float-left bg-yellow-new hover:bg-yellow-hover text-white text-[1.042vw] font-bold w-[9.167vw] py-[0.833vw] rounded-full shadow-lg">
                        &lt; Previous
                    </button>
                    <button type="button" class="next-btn float-right bg-yellow-new hover:bg-yellow-hover text-white text-[1.042vw] font-bold w-[9.167vw] py-[0.833vw] rounded-full shadow-lg">
                        Next &gt;
                    </button>
                    <button type="submit" class="float-right bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-[1.042vw] font-bold w-[9.167vw] py-[0.833vw] rounded-full shadow-lg">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Get the file input element
        const fileInput = document.getElementById('event_certificate');
        // Get the image element
        const imageElement = document.getElementById('template');

        // Listen for changes in the file input
        fileInput.addEventListener('change', (event) => {
            var displayCertif = document.getElementById('certificate-display');
            displayCertif.style.display = 'block';
            // Get the selected file
            const file = event.target.files[0];

            // Create a FileReader instance
            const reader = new FileReader();

            // When the file has been loaded
            reader.onload = (e) => {
                // Update the image source with the loaded file
                imageElement.src = e.target.result;
            };

            // Read the file as a data URL
            reader.readAsDataURL(file);
        });
    </script>
    <script>
        $(function() {
            var $sections = $('.form-input');

            $sections.each(function(idx, section){
                $(section).find(':input').attr('data-parsley-group', 'block-' + idx);
            });

            function navigateTo(idx) {
                $sections.removeClass('current').eq(idx).addClass('current');

                var finished = idx >= $sections.length - 1;
                $('.form-navigation .previous-btn').toggle(idx > 0);
                $('.form-navigation .next-btn').toggle(!finished);
                $('.form-navigation [Type=submit]').toggle(finished);
            }

            function currIdx() {
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous-btn').click(function() {
                navigateTo(currIdx() - 1);
            });

            $('.form-navigation .next-btn').click(function() {
                $('.user-form').parsley().whenValidate({
                    group:'block-' + currIdx()
                }).done(function() {
                    navigateTo(currIdx() + 1);
                });
            });

            navigateTo(0);
        });
    </script>

    <script>
        // Make the name template draggable
        $("#name-placeholder").draggable({
            stop: function(event, ui) {
                // Get the position of the drop event
                var x = ui.position.left;
                var y = -1 * ui.position.top;
                var img = document.getElementById("template");

                // Get the scale factor of the certificate image
                var scale = img.width / img.naturalWidth;

                // Calculate the position of the name template relative to the certificate template
                var positionX = Math.round(x / scale);
                var positionY = Math.round(y / scale);

                document.getElementById("nameX").value = positionX;
                document.getElementById("nameY").value = positionY;
            }
        });
    </script>

    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="/node_modules/flowbite/dist/datepicker.js"></script>
@endsection
