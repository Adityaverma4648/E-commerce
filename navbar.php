<nav class="navbar navbar-expand-sm navbar-dark bg-primary position-sticky" style="width: 100vw;">
    <a href="../E-commerce/index.php" class="navbar-brand px-2 col-sm-1 text-center">LOGO</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <div class="col-sm-6 navbar-search-inp">
            <form class="d-flex my-2 my-lg-0" style="width: 90%;">
                <input class="form-control" type="text" placeholder="Search">
                <button class=" btn btn-outline-light rounded-1 my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-sm-5 ms-5 d-flex justify-content-evenly align-items-center py-2 px-1 navbarEssentials text-white">
            <div class="addressAndPincode mx-1 py-2 container-fluid d-flex justify-content-center align-items-center">
                <i class="fa fa-map-marker px-1"></i>
                Address/PinCode
                <i class="fa fa-caret-down px-1"></i>
            </div>
            <div class="text-white text-decoration-none  py-2 container-fluid d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#accountDropdown">
                Accounts/List
                <i class="fa fa-caret-down px-1"></i>
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
        <li class="mx-2 py-2">
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
        </li>
    </ul>
</div>