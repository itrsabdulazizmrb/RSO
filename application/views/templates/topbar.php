    <style>
            .topbar {
                background-color: #2c2c2c; 
                padding: 0.75rem 1rem;
                border-bottom: 1px solid #3a3a3a; 
            }

            .page-title {
                font-size: 1.5rem;
                font-weight: 700;
                color: #ffffff; 
                margin: 0;
            }

            .navbar-nav .nav-link {
                color: #dcdcdc;
                font-size: 1rem;
                font-family: "Inter", sans-serif;
                transition: color 0.3s ease;
                padding: 0.5rem 0.75rem;
            }

            .navbar-nav .nav-link:hover {
                color: #f1f1f1;
                text-decoration: none;
            }

            .topbar-divider {
                height: 30px;
                width: 1px;
                background-color: rgba(220, 220, 220, 0.5); 
                margin: 0 15px;
            }

            .img-profile {
                width: 40px;
                height: 40px;
                transition: transform 0.3s ease, border 0.3s ease;
                border: 2px solid #5a5a5a;
                border-radius: 50%;
            }

            .img-profile:hover {
                transform: scale(1.1); 
                border-color: #ffffff; 
            }

            .navbar-toggler-icon {
                background-color: #dcdcdc; 
                border-radius: 4px;
                padding: 5px;
            }

            .navbar-nav .nav-link.active {
                color: #ffffff; 
                border-bottom: 2px solid #ffffff; 
            }

            .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            }

            .navbar-light .navbar-nav .nav-link {
                color: #ffffff !important;
                transition: color 0.3s ease-in-out;
            }

            .navbar-light .navbar-nav .nav-link:hover {
                color: #f8c471 !important;
            }

            .dropdown-menu {
            background-color: #343a40;
            border: none;
            position: absolute;
            right : 0;
            top: 100%;
            min-width: 250px; 
            max-width: 300px; 
            white-space: nowrap;
            overflow-wrap: break-word;
            }

            .dropdown-item {
                color: #ffffff;
                padding: 10px 15px;
            }

            .dropdown-item:hover {
                background-color: #495057;
            }
        </style>
        
    <div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark topbar shadow">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto align-items-center">

                        <li class="nav-item mx-2">
                            <a class="nav-link text-light font-weight-bold" href="<?= base_url('data/rajal') ?>">Rawat Jalan</a>
                        </li>

                        <li class="nav-item mx-2">
                            <a class="nav-link text-light font-weight-bold" href="<?= base_url('data/ranap') ?>">Rawat Inap</a>
                        </li>

                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-menu-right text-light font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown-" aria-haspopup="true" aria-expanded="false">
                                RL &nbsp<i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url('data/rl35') ?>">RL 3.5 Kunjungan</a>
                                <a class="dropdown-item" href="<?= base_url('data/rl38') ?>">RL 3.8 Laboratorium</a>
                                <a class="dropdown-item" href="<?= base_url('data/rl310') ?>">RL 3.10 Rujukan</a>
                                <a class="dropdown-item" href="<?= base_url('data/rl41') ?>">RL 4.1 Morbiditas Pasien Rawat Inap</a>
                                <a class="dropdown-item" href="<?= base_url('data/rl41ralan') ?>">RL 4.1 Morbiditas Pasien Rawat Jalan</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item mx-2">
                            <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/LogoIT.png') ?>" alt="Logout" style="cursor: pointer; width: 40px; height: 40px;">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        
