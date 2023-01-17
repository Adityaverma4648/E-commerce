<link rel="stylesheet" href="./index.css">

<?php
include "./configDB/conn.php";
include "./configDB/session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username
    $userNameReg = mysqli_real_escape_string($conn, $_POST["userNameReg"]);
    $ageReg = mysqli_real_escape_string($conn, $_POST["ageReg"]);

    $emailReg = mysqli_real_escape_string($conn, $_POST["emailReg"]);
    $passwordReg = mysqli_real_escape_string($conn, $_POST["passwordReg"]);
    $reg_date = date("Y-m-d H:i:s");

    $query = "INSERT into `userregisteration`(userNameReg , ageReg,emailReg,passwordReg, reg_date) VALUES('$userNameReg','$ageReg','$emailReg','" . md5($passwordReg) . "','$reg_date')";
    //   checking result
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Please Login to end all misery";
    }
}
?>
<?php include "./navbar.php" ?>
<div id="formContLogin">
    login
</div>

<script src="index.js"></script>