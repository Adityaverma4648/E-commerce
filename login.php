<?php
include "./configDB/conn.php";
include "./configDB/session.php";
include "./navbar.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userName = mysqli_real_escape_string($conn, $_POST["userName"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    $query = "SELECT * FROM `userregisteration` WHERE usernameReg = '$userName' AND passwordReg = '" . md5($password) . "'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['loggedInStatus'] = true;
        $_SESSION['userName'] = $userName;
        $loginDate = date("Y-m-d H:i:s");
        $query = "INSERT into `login` (userName,email,loginDate) VALUES ($userName,$email,$loginDate)";
        header("Location:index.php");
    } else {
        echo "errors";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  the title -->
    <title>login</title>

    <!--  google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <!-- bootstrap5  -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- myIcons -->
    <script src="https://kit.fontawesome.com/8dc03a4776.js" crossorigin="anonymous"></script>
    <!-- mystyles -->
    <style>
        #formContLogin {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #formContLogin form {
            padding: 10px 5px;
            height: 60vh;
            width: 35vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #012340;
        }

        #formContLogin input {
            width: 98%;
            margin: 3px 0px;
            padding: 0.5rem 2px;
            border-radius: 2px;
        }
    </style>
</head>

<div id="formContLogin">
    <form method="POST" id="loginForm" class="d-flex flex-column py-2 my-1">
        <center>
            <h4 class="text-white">
                LOGIN
            </h4>
        </center>
        <input type="text" name="userName" id="userName" placeholder="Enter userName" required>
        <input type="text" name="email" id="email" placeholder="Enter your email" required>
        <input type="password" name="password" id="password" placeholder="Enter password" required>
        <input type="submit" name="submit" value="Login" id="submit" class="bg-success border-0 text-white">
    </form>
</div>
<script src="index.js"></script>