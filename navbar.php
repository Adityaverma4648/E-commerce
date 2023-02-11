<?php
include "./configDB/conn.php";
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary position-sticky" style="width: 100vw;">
    <a href="../E-commerce/index.php" class="navbar-brand px-2 col-sm-1 text-center">LOGO</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <div class="col-sm-5 navbar-search-inp">
            <form class="d-flex my-2 my-lg-0" style="width: 60%;">
                <input class="form-control" type="text" placeholder="Search" id="searchInp">
                <button class=" btn btn-outline-light rounded-1 my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-sm-5 ms-5 d-flex justify-content-evenly align-items-center py-2 px-1 navbarEssentials text-white">
            <div class="dropdown">
                <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown">
                    <?php
                    if (isset($_SESSION['loggedInStatus']) == false) {
                        $pinCode = "SELECT pinCodeReg from `userregisteration`";
                        echo $pinCode;
                    } else {
                        echo '<i class="fa fa-map-marker px-1"></i>Address/PinCode';
                    }
                    ?>
                </button>
            </div>
            <div class="dropdown">
                <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown">
                    <?php
                    if (isset($_SESSION['loggedInStatus'])) {
                        echo htmlspecialchars($_SESSION['userName']);
                    } else {
                        echo "Account/List";
                    }
                    ?>
                </button>
                <ul class="dropdown-menu">
                    <?php
                    if (isset($_SESSION['loggedInStatus']) == false) {
                        echo '<li><a class="dropdown-item" href="./login.php">Login</a></li>
                           <li class="border-top border-dark"><a class="dropdown-item" href="./register.php">Register</a></li>';
                    }
                    ?>
                    <li class="border-top border-dark"><a class="dropdown-item" href="#">Edit info</a></li>
                    <?php
                    if (isset($_SESSION['loggedInStatus'])) {
                        echo '<li class="border-top border-dark text-danger"><a class="dropdown-item" href="./logout.php">Logout</a></li>';
                    }
                    ?>

                </ul>
            </div>
            <div class="notification py-2 container-fluid d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#messageListCont">
                <span class=" messageCounter px-1 text-warning">
                    <?php $message = 0;
                    echo "$message"; ?>
                </span>
                <i class="fa fa-bell px-1"></i>
                msg
                <i class="fa fa-caret-down px-1"></i>
            </div>
            <a href="returnNorder.php" class="returnAndOrder text-decoration-none text-white py-2 container-fluid d-flex justify-content-center align-items-center">
                Return/Order
                <!-- <i class="fa fa-caret-down px-1"></i> -->
            </a>
            <a href="cart.php" class="cart text-decoration-none text-white py-2 container-fluid d-flex justify-content-center align-items-center">
                <span class="cartCounter px-2 text-warning">
                    <?php
                    $counter = 0;
                    echo "$counter";
                    ?>
                </span>
                <i class="fa fa-cart-plus px-1">
                </i>
                Cart
            </a>
        </div>
    </div>
</nav>
<div class="bg-dark text-white collapse" id="accountDropdown">
    <ul class="d-flex justify-content-end align-items-center" style="list-style: none;">

        <?php
        if (isset($_SESSION['loggedInStatus'])) {
            echo '<a href="../configDB/logout.php">Logout</a>';
        } else {
            echo ' <li class="mx-2 py-2">
            <a href="login.php" class="text-decoration-none text-dark">
                <button type="button" class=" btn btn-outline-primary px-2">
                    Login
                </button>
            </a>
        </li>
        <li class="mx-2 py-2">
            <a href="register.php" class="text-decoration-none text-dark">
                <button type="button" class=" btn btn-outline-primary px-2">
                    Register
                </button>
            </a>
        </li>';
        }

        ?>
    </ul>
</div>