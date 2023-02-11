<?php
include './configDB/conn.php';
include './configDB/session.php';
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
    <link rel="stylesheet" href="./index.css">
    <style>
        .closeChoosenCategory {
            height: 5vh;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .categoriesCont {
            height: 5vh;
            width: 100vw;
            background-color: #BF0F0F;
        }

        .categoriesCont li {
            height: 95%;
            list-style: none;
            margin: 0px 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            user-select: none;
        }

        .categoriesCont li button {
            background: none;
            text-decoration: none;
            cursor: pointer;
            border: none;
            color: #fff;
        }

        .categoriesCont li:hover {
            border: 1px solid white;
        }

        .choosenCatProductsCont {
            height: 40vh;
            width: 25vw;
            background-color: #41BFB3;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0px 3px;
        }

        .choosenCatProductsCont .path {
            height: 10%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0px 2px;
            font-weight: 700;
        }

        .choosenCatProductsCont .body .imgCont {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .choosenCatProductsCont .body .imgCont .smallShow {
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .choosenCatProductsCont .body .imgCont .smallShow img {
            height: 5vh;
            width: 5vh;
            margin: 2px 0px;
            border: 4px solid #fff;
            background-color: #012340;
            cursor: pointer;
        }

        .choosenCatProductsCont .body .imgCont .largeShow {
            width: 85%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .choosenCatProductsCont .body .imgCont .largeShow img {
            width: 78%;
        }

        .choosenCatProductsCont #button-group button {
            background: none;
            border: none;
        }

        .navbar-search-inp form input {
            border-radius: 5px 0px 0px 5px;
        }

        .navbar-search-inp form button {
            border-radius: 0px 5px 5px 0px;
        }

        .navbarEssentials div {
            cursor: pointer;
        }

        /*  products.php */
        #myProductCont {
            /* background-color: #BF0F0F; */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        #myProductCont a {
            background-color: #012340;
            height: 40vh;
            width: 24vw;
            margin: 2px 2px;
            text-align: center;
        }

        .imgCont {
            /* background-color: yellow; */
            width: 100%;
            height: 30vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .imgCont img {
            width: 90%;
        }

        .val {
            cursor: pointer;
        }
    </style>
</head>

<body class="Deep-Teal-Sea-1-hex bg-black d-flex flex-column">
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
    <!-- heroSection -->
    <?php include "./hero.php" ?>
    <!-- ends here -->

    <div class="px-1 container text-white h5">
        All Products
    </div>
    <!-- All products -->
    <?php include "./products.php" ?>
    <!--  ends here  -->

    <script src="./index.js"></script>
</body>

</html>