<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php
            $bulan = array(
                1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            );
            $bulan_ini = $bulan[date('n')];
            $tahun_ini = date('Y');
            ?>
            
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">RL 4.1 - Morbiditas Pasien Rawat Inap <?= $bulan_ini . ' ' . $tahun_ini; ?></h1>
                <a href="<?= base_url('report'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-generate-report">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-dark">Data Rawat Jalan</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-download fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?= base_url('report'); ?>">Export</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle" id="tabelantrol" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th rowspan="2">Kode Penyakit</th>
                                    <th rowspan="2">Nama Penyakit</th>
                                    <th colspan="2">< 1 Jam</th>
                                    <th colspan="2">1 - 23 Jam</th>
                                    <th colspan="2">1 - 7 Hari</th>
                                    <th colspan="2">8 - 28 Hari</th>
                                    <th colspan="2">29 Hari - < 3 Bulan</th>
                                    <th colspan="2">3 - < 6 Bulan</th>
                                    <th colspan="2">6 - 11 Bulan</th>
                                    <th colspan="2">1 - 4 Tahun</th>
                                    <th colspan="2">5 - 9 Tahun</th>
                                    <th colspan="2">10 - 14 Tahun</th>
                                    <th colspan="2">15 - 19 Tahun</th>
                                    <th colspan="2">20 - 24 Tahun</th>
                                    <th colspan="2">25 - 29 Tahun</th>
                                    <th colspan="2">30 - 34 Tahun</th>
                                    <th colspan="2">35 - 39 Tahun</th>
                                    <th colspan="2">40 - 44 Tahun</th>
                                    <th colspan="2">45 - 49 Tahun</th>
                                    <th colspan="2">50 - 54 Tahun</th>
                                    <th colspan="2">55 - 59 Tahun</th>
                                    <th colspan="2">60 - 64 Tahun</th>
                                    <th colspan="2">65 - 69 Tahun</th>
                                    <th colspan="2">70 - 74 Tahun</th>
                                    <th colspan="2">75 - 79 Tahun</th>
                                    <th colspan="2">80 - 84 Tahun</th>
                                    <th colspan="2">> 85 Tahun</th>
                                    <th rowspan="2">Meninggal</th>
                                </tr>
                                <tr>
                                    <?php for ($i = 0; $i < 25; $i++): ?>
                                        <th>Laki-Laki</th>
                                        <th>Perempuan</th>
                                    <?php endfor; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($RL41 as $row): ?>
                                    <tr>
                                        <td ><?= $row->kd_penyakit ?></td>
                                        <td><?= $row->nm_penyakit ?></td>
                                        <td><?= $row->jam_lt1_L ?></td>
                                        <td><?= $row->jam_lt1_P ?></td>
                                        <td><?= $row->jam_1_23_L ?></td>
                                        <td><?= $row->jam_1_23_P ?></td>
                                        <td><?= $row->hari_1_7_L ?></td>
                                        <td><?= $row->hari_1_7_P ?></td>
                                        <td><?= $row->hari_8_28_L ?></td>
                                        <td><?= $row->hari_8_28_P ?></td>
                                        <td><?= $row->bln_lt3_L ?></td>
                                        <td><?= $row->bln_lt3_P ?></td>
                                        <td><?= $row->bln_3_5_L ?></td>
                                        <td><?= $row->bln_3_5_P ?></td>
                                        <td><?= $row->bln_6_11_L ?></td>
                                        <td><?= $row->bln_6_11_P ?></td>
                                        <td><?= $row->th_1_4_L ?></td>
                                        <td><?= $row->th_1_4_P ?></td>
                                        <td><?= $row->th_5_9_L ?></td>
                                        <td><?= $row->th_5_9_P ?></td>
                                        <td><?= $row->th_10_14_L ?></td>
                                        <td><?= $row->th_10_14_P ?></td>
                                        <td><?= $row->th_15_19_L ?></td>
                                        <td><?= $row->th_15_19_P ?></td>
                                        <td><?= $row->th_20_24_L ?></td>
                                        <td><?= $row->th_20_24_P ?></td>
                                        <td><?= $row->th_25_29_L ?></td>
                                        <td><?= $row->th_25_29_P ?></td>
                                        <td><?= $row->th_30_34_L ?></td>
                                        <td><?= $row->th_30_34_P ?></td>
                                        <td><?= $row->th_35_39_L ?></td>
                                        <td><?= $row->th_35_39_P ?></td>
                                        <td><?= $row->th_40_44_L ?></td>
                                        <td><?= $row->th_40_44_P ?></td>
                                        <td><?= $row->th_45_49_L ?></td>
                                        <td><?= $row->th_45_49_P ?></td>
                                        <td><?= $row->th_50_54_L ?></td>
                                        <td><?= $row->th_50_54_P ?></td>
                                        <td><?= $row->th_55_59_L ?></td>
                                        <td><?= $row->th_55_59_P ?></td>
                                        <td><?= $row->th_60_64_L ?></td>
                                        <td><?= $row->th_60_64_P ?></td>
                                        <td><?= $row->th_65_69_L ?></td>
                                        <td><?= $row->th_65_69_P ?></td>
                                        <td><?= $row->th_70_74_L ?></td>
                                        <td><?= $row->th_70_74_P ?></td>
                                        <td><?= $row->th_75_79_L ?></td>
                                        <td><?= $row->th_75_79_P ?></td>
                                        <td><?= $row->th_80_84_L ?></td>
                                        <td><?= $row->th_80_84_P ?></td>
                                        <td><?= $row->th_85_L ?></td>
                                        <td><?= $row->th_85_P ?></td>
                                        <td><?= $row->mati ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>

            <a id="scrollToTopBtn" href="#" title="Scroll to Top">
                <img src="<?php echo base_url('assets/Watermark.png'); ?>" alt="Scroll to Top">
            </a>

        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#tabelantrol').DataTable({
                "pageLength": 50,
                "lengthMenu": [10, 25, 50, 100],
                "ordering": true,
                "responsive": true,
                "autoWidth": true,
                "language": {
                    "search": "",
                    "searchPlaceholder": "Cari..."
                },
                "dom": '<"d-flex justify-content-between align-items-center"lfr>t<"d-flex justify-content-between align-items-center"ip>'
            });
        });

        window.onscroll = function() {
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };

        document.getElementById("scrollToTopBtn").addEventListener("click", function(e) {
            e.preventDefault(); 
            window.scrollTo({
                top: 0,
                behavior: "smooth" 
            });
        });
    </script>

    <style>
        .page-heading {
            background: linear-gradient(135deg, #555, #777); 
            color: white;
            padding: 20px;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .alert-success {
            border-color: #ddd;
            background-color: #f8f9fa;
            color: #333;
            border-radius: 0.375rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn {
            border-radius: 0.375rem;
            padding: 0.7rem 1.5rem;
            font-size: 0.875rem;
        }
        .btn-primary {
            background-color: #333; 
            border: none;
        }
        .btn-primary:hover {
            background-color: #444; 
        }
        .btn-warning {
            background-color: #666;
            border: none;
        }
        .btn-warning:hover {
            background-color: #777;
        }
        .btn-danger {
            background-color: #444;
            border: none;
        }
        .btn-danger:hover {
            background-color: #555;
        }
        .table {
            border-radius: 0.375rem;
            overflow: hidden;
        }
        .table thead th {
            background-color: #333; 
            font-weight: bold;
            text-align: center;
            color: white;
        }
        .table tbody td {
            vertical-align: middle; 
        }
        .table tbody tr:hover {
            background-color: #444;
            color: white;
        }

        .card {
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #333; 
            border-bottom: 1px solid #444;
        }
        .card-body {
            padding: 1.5rem;
        }
        .form-control {
            border-radius: 0.375rem;
            box-shadow: none;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-close {
            box-shadow: none;
        }

        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none; 
            z-index: 1000;
        }
        #scrollToTopBtn img {
            width: 100px; 
            height: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }
        #scrollToTopBtn:hover img {
            opacity: 0.8; 
        }

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .dataTables_wrapper .dataTables_filter {
            justify-content: flex-end;
        }

        .dataTables_wrapper .dataTables_filter input {
            border-radius: 0.375rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
            width: 300px;
        }

        .dataTables_wrapper .dataTables_length label,
        .dataTables_wrapper .dataTables_filter label {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dataTables_wrapper .dataTables_length select {
            border-radius: 0.375rem;
            padding: 0.3rem 0.5rem;
        }

        .page-item.active .page-link {
            color: #fff !important;
            background-color: #000 !important;
        }
        .page-link {
            color: #000 !important;
            background-color: #fff !important;
            border: 1px solid #dee2e6 !important; 
        }
        .page-link:hover {
            color: #fff !important;
            background-color: #000 !important;
            border-color: #000 !important; 
        }

        .dataTables_scrollBody {
            overflow-x: auto !important; 
        }

        .dataTables_scrollHeadInner, .dataTables_scrollBody {
            display: block;
        }

        .dataTables_scrollHeadInner {
            overflow: visible !important;
        }

        .dataTables_scrollBody {
            overflow: auto;
        }

        .dataTables_scrollBody th, .dataTables_scrollBody td {
            white-space: nowrap;
        }

        th, td {
            min-width: 120px;
            text-align: center;
        }

        th:nth-child(1), td:nth-child(1) {
            min-width: 200px;
            position: sticky;
            left: 0;
            z-index: 3;
        }

        th:nth-child(2), td:nth-child(2) {
            min-width: 400px; 
            position: sticky;
            left: 200px;
            z-index: 3; 

        th:nth-child(n+3), td:nth-child(n+3) {
            min-width: 120px; 
        }
    </style>