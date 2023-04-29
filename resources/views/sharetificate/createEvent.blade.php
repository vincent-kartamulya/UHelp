<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Create Event</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/node_modules/flowbite/dist/flowbite.min.css"> --}}
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
</head>
<body class="bg-slate-100 font-font-poppins">
    <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg top-0 fixed z-50">
        <div class="logo-container absolute left-6">
            <a href="/home">
                <img class="logo-pict w-44" src="/assets/logo.jpg" alt="UHelp Logo">
            </a>
        </div>
        <div class="features-container w-1/5 m-auto">
            <ul class="flex flex-row justify-around text-green-new text-2xl text-center">
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="/clickandsit/empty">Click and Sit</a>
                </li>
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="/addEvent">Sharetificate</a>
                </li>
            </ul>
        </div>
        <div class="profile-container absolute right-8">
            <a href="/profile">
                <img class="logo-pict w-16 rounded-full" src="/assets/profil.jpg" alt="Profile Picture">
            </a>
        </div>
    </nav>

    <div class="element-container">
        <div class="absolute mt-4 -z-10">
            <img src="/assets/sharetificate/leftCircleEl-createEvent.png" alt="Top Left Circle Element">
        </div>

        <div class="absolute right-0 mt-24 -z-10">
            <img src="/assets/sharetificate/rightCircleEl-createEvent.png" alt="Top Right Circle Element">
        </div>

        <div class="absolute mt-60 -z-10">
            <img src="/assets/sharetificate/leftEl-createEvent.png" alt="Left Element">
        </div>

        <div class="absolute right-0 -z-10">
            <img src="/assets/sharetificate/rightEl-createEvent.png" alt="Right Element">
        </div>
    </div>

    <div class="form-title flex flex-col m-auto w-1/2 pt-36">
        <p class="text-center text-4xl font-bold text-dark-blue-new mb-2">Create New Event</p>
        <img src="/assets/sharetificate/divider-blue.png" alt="Divider Blue">
    </div>

    <div class="form-container mt-10">
        <div class="event-form w-1/2 m-auto px-16 py-12 border-2 rounded-2xl shadow-2xl bg-white">
            <form method="POST" action="/events" enctype="multipart/form-data" class="user-form" data-parsley-validate="">
                @csrf
                <div class="form-input">
                    <div class="event-title flex flex-col">
                        <label for="event_name" class="text-green-new text-xl font-semibold mb-3">Title *</label>
                        <input type="text" name="event_name" id="event_name" class="form-control border px-3 border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new mb-1" placeholder="Enter the event's name " data-parsley-group="block0" required>
                    </div>
                    <div class="loc-and-date flex justify-between">
                        <div class="event-loc flex flex-col w-1/2">
                            <label for="event_location" class="text-green-new text-xl font-semibold mt-12 mb-3">Location *</label>
                            <input type="text" name="event_location" id="event_location" class="form-control border px-3 border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new mb-1" placeholder="Enter the event's location " data-parsley-group="block0" required>
                        </div>
                        <div class="event-date flex flex-col w-2/5">
                            <label for="event_date" class="text-green-new text-xl font-semibold mt-12 mb-3">Date *</label>
                            <div class="flex flex-col">
                                <input datepicker type="text" name="event_date" id="event_date" class="form-control relative w-full border border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new mb-1" placeholder="Select a date " data-parsley-group="block0" required>
                                <div class="absolute ml-72 mt-3 items-center">
                                    <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="currentColor" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="participants-data flex flex-col w-1/2">
                        <label for="event_participants" class="text-green-new text-xl font-semibold mt-12 mb-3">Upload Participant Data *</label>
                        <input type="file" name="event_participants" id="event_participants" class="form-control text-lg rounded-lg text-gray-500 border mb-1" data-parsley-group="block0" required>
                    </div>
                </div>
                <div class="form-input">
                    <div class="certificate-template flex flex-col w-1/2">
                        <label for="event_certificate" class="text-green-new text-xl font-semibold mb-3">Upload Certificate Template *</label>
                        <input type="file" name="event_certificate" id="event_certificate" class="form-control text-lg rounded-lg text-gray-500 border mb-1" data-parsley-group="block1" required>
                    </div>
                    <div id="certificate-display" class="my-4">
                        <img class="w-4/5 m-auto border-2" src="/assets/sharetificate/certificate-empty.png" alt="Certificate Image" draggable="false">

                        <!-- Add the name template -->
                        <div id="name-template">
                            <span id="name-placeholder" draggable="true">Hai</span>
                        </div>
                    </div>
                </div>
                <div class="form-navigation mt-10 mb-24">
                    <button type="button" class="previous-btn float-left bg-yellow-new hover:bg-yellow-hover text-white text-xl font-bold w-44 py-4 rounded-full shadow-lg">
                        &lt; Previous
                    </button>
                    <button type="button" class="next-btn float-right bg-yellow-new hover:bg-yellow-hover text-white text-xl font-bold w-44 py-4 rounded-full shadow-lg">
                        Next &gt;
                    </button>
                    <button type="submit" class="float-right bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-xl font-bold w-44 py-4 rounded-full shadow-lg">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-[#92AA68]">
        <div id="footer" class="mx-auto w-full p-4 py-6 pt-[3vw] max-w-screen-2xl mt-[10vw]">
            <h5 class="self-center text-[1.5vw] font-semibold whitespace-nowrap text-yellow-new font-shadow mb-3 ">U-Help</h5>
            <div id="upper white line" class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <h5 class="w-[18vw] text-white text-[1vw]">Thoughful marketing for growing dental practices.</h5>
                </div>

                <div class="grid gap-8 sm:gap-6 sm:grid-cols-2 ml-[4vw]">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="event-title flex flex-col">
                            <h5 class="w-[28vw] text-[1vw] text-white mb-[1vw]">DENTAL MARKETING INSIGHTS FOR CLEVER DENTISTS DIRECT TO YOUR INBOX</h5>
                            <div class="flex flex-row w-[28vw]">
                                <input type="text" class="placeholder-white placeholder-opacity-75 border px-3 w-[18vw] border-white bg-transparent rounded-lg text-[0.8vw] focus:ring-yellow-new focus:border-yellow-new text-white" placeholder="YOUR EMAIL " required>
                                <button class="px-5 ml-[1vw] bg-yellow-new rounded-lg text-white shadow-lg">SUBSCRIBE </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="grid gap-8 sm:gap-6 sm:grid-cols-2">
                    <div class="w-[16vw]">
                        <h2 class="mb-6 text-[1vw] font-semibold text-white uppercase">FOLLOW US</h2>
                        <ul class="text-white font-medium text-[0.8vw]">
                            <div id="you tube account" class="flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-[0.3vw]"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                </svg>
                                <li class="mb-4">
                                    <a href="https://www.youtube.com/@anderiesnotanto4368" class="hover:underline">U-Help Company</a>
                                </li>
                            </div>
                            <div id="instagram account" class="flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-[0.3vw]"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                                <li>
                                    <a href="https://www.instagram.com/uhelp.company/" class="hover:underline">uhelp.company</a>
                                </li>
                            </div>
                        </ul>
                    </div>

                    <div class="w-[16vw] ml-[1.5vw]">
                        <h2 class="mb-6 text-[1vw] font-semibold text-white uppercase">CONTACT US</h2>
                        <ul class="text-white font-medium flex flex-row">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-[0.3vw]"
                                fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            <li class="mb-4 text-[0.8vw]">
                                <a href="https://wa.me/+6281287966089?text=I'm%20interested%20in%20your%20U-Help%20company.%20" class="hover:underline">+6281287966089</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-white sm:mx-auto mt-[3vw]" />
            <div id="under white line" class="sm:flex sm:items-center sm:justify-between">
                <span class="text-[1vw] text-white sm:text-center">© 2023 <a href="/home" class="hover:underline">U-Help</a>. Education Lecture Helper, Bogor. All Rights Reserved.</span>
                <div id="right bottom text" class="flex space-x-6 sm:justify-center sm:mt-0 text-[1vw] text-white">
                    <a href="" class="hover:underline uppercase">PRIVACY POLICY</a>
                    <a href="" class="hover:underline uppercase">TERMS & CONDITIONS</a>
                </div>
            </div>
        </div>
    </footer>

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
                var x_axis = ui.position.left;
                var y_axis = ui.position.top;

                // Set the position of the hidden inputs
                $("#generate-name input[name='x']").val(x_axis);
                $("#generate-name input[name='y']").val(y_axis);
            }
        });

        // Submit the form using AJAX
        $("#generate-name").submit(function(event) {
            event.preventDefault();

            // Send the form data to the server
            $.ajax({
                url: "generate_certificate.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    // Display the generated certificate
                    $("#certificate-display").html("<img src='" + response + "'>");
                }
            });
        });

        // Update the name template when the user types in their name
        $("#generate-name .the-input input[name='name']").on("input", function() {
            var input_name = $(this).val();
            console.log("berhasil");
            // Update the name placeholder text
            $("#name-placeholder").text(input_name);
        });
    </script>

    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="/node_modules/flowbite/dist/datepicker.js"></script>
</body>
</html>
