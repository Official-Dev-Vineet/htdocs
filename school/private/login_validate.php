<?php
require_once("db.inc.php");
session_start();
if (isset($_SESSION['username']) != "") {
    header("Location: private/dashboard.php");
    echo "all things are good you are redirecting to dahsboard";
}
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
        echo "email not valid";
    }
    if (strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
        echo "password error";
    }
    $result = mysqli_query($con, "SELECT * FROM student_details WHERE email = '$email' and password = 'md5($password)'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_image'] = $row['profileImage'];
            // header("location:private/dashboard.php");
            echo "validate";
        }
    } else {
        $error_message = "Incorrect Email or Password!!!";
        echo "not validate";
    }
    $con->close();
}
?>