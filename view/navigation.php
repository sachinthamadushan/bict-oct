<?php include_once 'config.php'; ?>


<nav class="navbar fixed-top" style="background-color:rgb(30, 186, 21);" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
            </button>
             QuickStay Hub
        </a>
        <button class="btn btn-danger"><i class="fa fa-right-from-bracket text-white"></i> Logout</button>
        <div class="offcanvas offcanvas-start text-bg-warning" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">QuickStay Hub</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo BASE_URL; ?>">
                            <i class="fa fa-home" aria-hidden="true"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>pages/categoery.php">
                            <i class="fa fa-th-list" aria-hidden="true"></i> Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>pages/rent_item.php">
                            <i class="fa fa-television"></i> Rent Items
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>