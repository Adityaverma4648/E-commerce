<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand px-2 col-sm-1 text-center" href="#">LOGO</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <div class="col-sm-6 navbar-search-inp">
            <form class="d-flex my-2 my-lg-0">
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
            <div class="accountAndLists mx-1 py-2 container-fluid d-flex justify-content-center align-items-center">
                Accounts/List
                <i class="fa fa-caret-down px-1"></i>
            </div>
            <div class="notification mx-1 py-2 container-fluid d-flex justify-content-center align-items-center">
                <i class="fa fa-bell px-1"></i>
                Notification
                <i class="fa fa-caret-down px-1"></i>
            </div>
            <div class="returnAndOrder mx-1 py-2 container-fluid d-flex justify-content-center align-items-center">
                Return/Order
                <i class="fa fa-caret-down px-1"></i>
            </div>
            <div class="cart mx-1 py-2 container-fluid d-flex justify-content-center align-items-center">
                <span class="cartCounter px-2 text-warning">
                    <?php
                    $counter = 0;
                    echo "$counter";
                    ?>
                </span>
                Cart
                <i class="fa fa-caret-down px-1"></i>
            </div>
        </div>
    </div>
</nav>