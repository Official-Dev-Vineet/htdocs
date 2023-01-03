<?php
require_once("private/db.inc.php");
$userid = $_POST["username"];
$email = $_POST['email'];
$profile = $_FILES['profileImage']['name'];
$password = md5($_POST['password']);
$username_check = $con->query("SELECT * FROM student_details WHERE username = '$userid'");
$email_check = $con->query("SELECT * FROM student_details WHERE email = '$email'");
$profile_check = $con->query("SELECT * FROM student_details WHERE profileImage = '$profile'");
if ($username_check->num_rows > 0) {
    echo 'username already exist. please try another username.';
} elseif ($email_check->num_rows > 0) {
    echo 'email already exist. please add e-mailId.';
} elseif ($profile_check->num_rows > 0) {
    echo 'image already uploaded. Please add new Image';
} else {
    if ($stmt = $con->prepare("INSERT INTO student_details ( username, email, mobileno, password,fullName,fatherName, motherName, homeTown, city, state,gender,birthDate,nationality,tnc,mailAlert,profileImage) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
        $stmt->bind_param("ssssssssssssssss", $_POST['username'], $_POST["email"], $_POST['mobileno'], $password, $_POST['fullName'], $_POST['fatherName'], $_POST['motherName'], $_POST["homeTown"], $_POST["city"], $_POST["state"], $_POST["gender"], $_POST['birthDate'], $_POST['nationality'], $_POST['tnc'], $_POST['mailAlert'], $_FILES["profileImage"]["name"]);
        $stmt->execute();
        $stmt->close();
        echo 'Record added';
    }
    move_uploaded_file($_FILES["profileImage"]["tmp_name"], "students_image/" . $_FILES["profileImage"]["name"]);
}
$con->close();

?>