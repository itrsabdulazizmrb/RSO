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
                <h1 class="h3 mb-0 text-gray-800">Dashboard Data Rawat Jalan <?= $bulan_ini . ' ' . $tahun_ini; ?></h1>
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
                                <table class="table table-bordered" id="tabelantrol" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Periksa</th>
                                            <th>No. RM</th>
                                            <th>Kunjungan</th>
                                            <th>Cara Masuk</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur (hari)</th>
                                            <th>Alamat</th>
                                            <th>Kecamatan</th>
                                            <th>Kabupaten</th>
                                            <th>Provinsi</th>
                                            <th>Diagnosa</th>
                                            <th>Tindakan</th>
                                            <th>Cara Keluar</th>
                                            <th>DPJP</th>
                                            <th>Pembayaran</th>
                                            <th>Poli</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($Rajal as $u) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $u['Tanggal_Pendaftaran']; ?></td>
                                                <td><?= $u['NRM']; ?></td>
                                                <td><?= $u['Kunjungan']; ?></td>
                                                <td><?= $u['cara_masuk']; ?></td>
                                                <td><?= $u['nama']; ?></td>
                                                <td><?= $u['jenis_kelamin']; ?></td>
                                                <td><?= $u['umur_hari']; ?></td>
                                                <td><?= $u['Alamat']; ?></td>
                                                <td><?= $u['kecamatan']; ?></td>
                                                <td><?= $u['kabupaten']; ?></td>
                                                <td><?= $u['provinsi']; ?></td>
                                                <td><?= $u['diagnosa']; ?></td>
                                                <td><?= $u['tindakan']; ?></td>
                                                <td><?= $u['cara_keluar']; ?></td>
                                                <td><?= $u['DPJP']; ?></td>
                                                <td><?= $u['Pembayaran']; ?></td>
                                                <td><?= $u['Poli']; ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll to Top Button -->
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
</style>
