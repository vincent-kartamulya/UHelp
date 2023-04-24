<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #certificate {
            position: relative;
            width: 100%;
            height: 80%;
        }
        #certificate img{
            width: 100%;
            height: 100%;
        }
        #name-template {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);        }

        #name-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 48px;
            font-weight: bold;
            color: #000;
            width: 400px;
            height: 100px;
            text-align: center;
        }

    </style>
</head>
<body>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include jQuery UI library -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Display the certificate template image -->
    <div id="certificate">
        <img src="certificate.webp">

        <!-- Add the name template -->
        <div id="name-template">
            <span id="name-placeholder" draggable="true"></span>
        </div>
    </div>

    <!-- Add a form to submit the name and position -->
    <form id="certificate-form">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="hidden" name="x">
        <input type="hidden" name="y">
        <button type="submit">Generate certificate</button>
    </form>

    <script>
        // Make the name template draggable
        $("#name-placeholder").draggable({
            stop: function(event, ui) {
                // Get the position of the drop event
                var x = ui.position.left;
                var y = ui.position.top;

                // Set the position of the hidden inputs
                $("#certificate-form input[name='x']").val(x);
                $("#certificate-form input[name='y']").val(y);
            }
        });

        // Submit the form using AJAX
        $("#certificate-form").submit(function(event) {
            event.preventDefault();

            // Send the form data to the server
            $.ajax({
                url: "generate_certificate.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    // Display the generated certificate
                    $("#certificate").html("<img src='" + response + "'>");
                }
            });
        });

        // Update the name template when the user types in their name
        $("#certificate-form input[name='name']").on("input", function() {
            var name = $(this).val();

            // Update the name placeholder text
            $("#name-placeholder").text(name);
        });
    </script>

</body>
</html>
