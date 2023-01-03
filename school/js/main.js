
$(document).ready(function () {
    $("#studentForm").submit(function () { /* WHEN THE FORM IS SUBMITTED */
        var formData = new FormData($(this)[0]); /* ALL THE DATA IS IN HERE INCLUDING THE FILE ATTACHED */
        $.ajax({ /* CALL AJAX */
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