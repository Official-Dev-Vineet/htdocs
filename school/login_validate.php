<?php
session_start();
require_once("private/db.inc.php");
if (isset($_SESSION['username']) != "") {
    echo "all things are good you are redirecting to dashboard";
    header("Location: private/dashboard.php");
}
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    if (strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }
    $result = mysqli_query($con, "SELECT * FROM student_details WHERE email = '$email' and password = 'md5($password)'");
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_image'] = $row['profileImage'];
            header("Location: private/dashboard.php");
        }
    } else {
        $error_message = "Incorrect Email or Password!!!";
        header("location:login.php");
    }
    $con->close();
}
?>