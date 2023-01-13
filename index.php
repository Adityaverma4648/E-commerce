<?php
include './configDB/conn.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  the title -->
    <title>E-commerce</title>
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
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!--  NAVBAR -->
    <?php include 'navbar.php' ?>
    <!-- ----- -->
    <section class="Header" id="Header">
        <div class="d-flex justify-content-center align-items-center">
            <div class="categoriesCont px-2 text-white d-flex justify-content-center align-items-center" id="categoriesCont">
                <!--  fetched via index.js<fetchCategories -->
            </div>
            <div class="text-danger px-2 closeChoosenCategory bg-white d-flex justify-content-center align-items-center" id="closeChoosenCategoryBtn">
                CloseX
            </div>
        </div>
        <div class="choosenCategoryCont d-flex py-2" id="choosenCategoryCont">
        </div>
    </section>


    <!-- --------- -->
    <section class="warning" id="warning">
        <!-- <div id="accountListWarning" class="text-white">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div id="demo" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div id="demo" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div id="demo" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div> -->
    </section>
    <script src="./javaScript/index.js"></script>
</body>

</html>