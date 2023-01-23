<!DOCTYPE html>
<html lang="en">

<head>
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
        #myProductCont {
            height: 30vh;
            background-color: #41BFB3;
        }

        #myProductCont a {
            width: 13vw;
            margin: 0px 2px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .imgCont {
            height: 60%;
            width: 100%;
            overflow: hidden;
        }

        #myProductCont a div img {
            width: 98%;
        }

        /*  products pagination */
        .val {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container-fluid text-white d-flex flex-wrap justify-content-center align-items-center" id="myProductCont">
    </div>
    <div class="myProductPagination container d-flex justify-content-center align-items-center bg-transparent p-1 text-white rounded-3" id="myProductPagination">
        <button class="btn btn-outline-warning rounded-0 text-white">
            Prev
        </button>
        <!--  pagination indices-->
        <span class="val1 val p-2 px-4 border border-1">1</span>
        <span class="val2 val p-2 px-4 border border-1">2</span>
        <span class="val3 val p-2 px-4 border border-1">3</span>
        <span class="val4 val p-2 px-4 border border-1">4</span>
        <span class="val5 val p-2 px-4 border border-1">5</span>
        <span class="val6 val p-2 px-4 border border-1">6</span>
        <span class="val7 val p-2 px-4 border border-1">7</span>
        <span class="val8 val p-2 px-4 border border-1">8</span>
        <span class="val9 val p-2 px-4 border border-1">9</span>
        <span class="val10 val p-2 px-4 border border-1">10</span>
        <!--  pagination indices ends here -->
        <button class="btn btn-outline-warning rounded-0 text-white">
            Next
        </button>
    </div>
    <script src="index.js"></script>
</body>

</html>