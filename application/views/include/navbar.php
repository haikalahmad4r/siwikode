<nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
<div class="container-fluid">



<a href="<?= base_url()?>index.php/login/logout" class="btn btn-primary">Logout</a>
</div>
    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </li>

    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                        alt="">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                        problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                        alt="">
                    <div class="status-indicator"></div>
                </div>
                <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                        would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                        alt="">
                    <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                        alt="">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
            <img class="img-profile rounded-circle"
                src="data:image/png;base64,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">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/login/logout" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>