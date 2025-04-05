
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Argon Dashboard Assets -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- DataTables & Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/datatables.min.css" rel="stylesheet">
    
    <!-- Argon Dashboard CSS -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .breadcrumb-container {
            position: relative;
            z-index: 1050;
        }

        .dataTables_wrapper .dt-buttons {
            margin-bottom: 10px;
        }

        .dataTables_wrapper .dt-buttons .btn {
            margin-right: 5px;
        }

        .dataTables_filter input {
            margin-left: 0.5em;
            padding: 0.375rem 0.75rem;
            border: 1px solid #d2d6da;
            border-radius: 0.5rem;
        }

        .profile-img {
            width: 40px; 
            height: 40px; 
            object-fit: cover; 
        }

        /* Style submenu table */
        .transition {
        transition: transform 0.3s ease;
        }

        .rotate-180 {
            transform: rotate(180deg);
        }

        .active {
            background-color: #5e72e4 !important;
            color: #fff !important;
        }

        .bg-gradient-primary {
            background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%);
        }
        
        .text-white {
            color: #fff !important;
        }

        /* Style toggle hide sidebar */
        #sidenav-main {
        width: 250px;
        transition: width 0.3s ease;
        }

        /* Sidebar hidden di desktop */
        @media (min-width: 992px) {
        #sidenav-main.hidden {
            width: 0;
            overflow: hidden;
        }
        }
        /* Di mobile: sembunyikan pakai display */
        @media (max-width: 991px) {
        #sidenav-main {
            z-index: 1030;
            width: 250px;
            height: 100%;
            background: #222;
            transform: translateX(-120%);
            transition: transform 0.3s ease;
        }

        #sidenav-main.hidden {
            display: block;
            }
            }
        #sidenav-main.active {
            transform: translateX(0);
        }

        @media (min-width: 992px) {
        body.sidebar-hidden #main-content {
            margin-left: 0 !important;
        }

        body.sidebar-hidden #sidenav-main {
            width: 0;
            overflow: hidden;
        }
        }
        @media (max-width: 576px) {
        .pagination {
            justify-content: left;
        }
        }

        @media (max-width: 576px) {
        .table-responsive {
            overflow-x: auto;
            display: block;
            white-space: nowrap;
        }
        }
    </style>
</head>