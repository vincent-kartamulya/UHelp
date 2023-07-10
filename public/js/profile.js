var loadFile = function(event) {
    var file = event.target.files[0];
    var image = document.getElementById("output");

    var reader = new FileReader();
    reader.onload = function(e) {
        image.src = e.target.result;
    };
    reader.readAsDataURL(file);
};

function saveImage() {
    var fileInput = document.getElementById("file");
    var file = fileInput.files[0];

    var formData = new FormData();
    formData.append("image", file);

    $.ajax({
        url: "/save-image",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Handle the success response
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Handle the error
            console.error(xhr.responseText);
        }
    });
}

