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

    </head>

    <body class="bg-black">
        <!--  NAVBAR -->
        <?php include './navbar.php' ?>
        <!-- ----- -->
        <section id="AccountsList">
            <div class="py-3 px-2 bg-lessLight d-flex flex-column AccountListCont">
                <div class="col-sm-12">
                    <center>
                        <h4 style="font-weight: 900;">
                            Seems Like You Aren't Registered !
                        </h4>
                    </center>
                    <center>
                        <span class="my-2">
                            Please Login And Register for getting benefits of all services.
                        </span>
                    </center>
                </div>
                <!--   formContainer -->
                <div class="d-flex col-sm-12 bg-primary">
                    <div class="col-sm-6 text-white text-center getterButtons" style="cursor: pointer border border-end" id="LoginFormGetter" onclick="loginFormFetcher()">
                        Login
                    </div>
                    <div class="col-sm-6 text-white text-center getterButtons" style="cursor: pointer" id="RegisterFormGetter" onclick="registrationFormFetcher()">
                        Register
                    </div>
                </div>
                <div class="formCont" id="formCont">
                </div>
                <!-- ------------------ -->
            </div>

        </section>
        <script src="./index.js"></script>
    </body>

    </html>