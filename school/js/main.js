$(document).ready(function () {
    $("#studentForm").submit(function () {
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: "signup.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                window.open("login.php");
            }
        });
        return false;
    });
});