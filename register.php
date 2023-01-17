<?php
include "./configDB/conn.php";
include "./configDB/session.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  the title -->
    <title>register</title>

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
    <link rel="stylesheet" href="./index.css">

</head>
<?php
include "./navbar.php"
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username
    $userNameReg = mysqli_real_escape_string($conn, $_POST["userNameReg"]);
    $ageReg = mysqli_real_escape_string($conn, $_POST["ageReg"]);

    $emailReg = mysqli_real_escape_string($conn, $_POST["emailReg"]);
    $passwordReg = mysqli_real_escape_string($conn, $_POST["passwordReg"]);
    $reg_date = date("Y-m-d H:i:s");

    $query = "INSERT into `userregisteration`(userNameReg,ageReg,emailReg,passwordReg,reg_date) VALUES('$userNameReg','$ageReg','$emailReg','" . md5($passwordReg) . "','$reg_date')";
    //   checking result
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Please Login to end all misery";
    }
}
?>
<div id="formContRegistration"></div>
<script src="./index.js"></script>