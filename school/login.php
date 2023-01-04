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

    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login to your Dashboard </title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .page-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            text-transform: capitalize;
            color: #8ebf42 !important;
        }

        label {
            color: #8ebf42;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row px-3 py-3">
            <div class="col-md-5 mx-auto my-5">
                <div class="page-header">
                    <h5>login to your student account </h2>
                </div>
                <p>Please fill all fields in the form</p>
                <form method="post" autocomplete="off" enctype="multipart/form-data" id="loginForm" target="_self">
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="enter email id"
                            maxlength="30" required="">

                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="enter password"
                            maxlength="16" required="">
                        <span class="text-danger" id="Error">
                            <?php
                            if (isset($email_error)) {
                                echo $email_error;
                            } elseif (isset($password_error)) {
                                echo $password_error;
                            } elseif (isset($error_message)) {
                                echo $error_message;
                            }

                            ?>
                        </span>
                    </div>
                    <input type="submit" class="btn btn-primary" name="login" id="submit" value="submit">
                    <br>
                    You don't have account?<a href="index.php" class="mt-3">Click Here</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/login.js">

    </script>
</body>

</html>