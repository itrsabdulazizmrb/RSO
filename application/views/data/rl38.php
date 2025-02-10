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
            $bulan_ini = isset($_GET['bulan']) ? $bulan[$_GET['bulan']] : $bulan[date('n')];
            $tahun_ini = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
            ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">RL 3.8 - Morbiditas Pasien Rawat Inap <span id="bulan-tahun"><?= $bulan_ini . ' ' . $tahun_ini; ?></span></h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-generate-report">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a>
            </div>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Tindakan  <?= $bulan_ini . ' ' . $tahun_ini; ?></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($total_tindakan) ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rata-rata Tindakan per Hari  <?= $bulan_ini . ' ' . $tahun_ini; ?></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($rata_rata, 2) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="filterForm" class="mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <select name="bulan" id="bulan" class="form-control">
                            <?php foreach ($bulan as $key => $value) : ?>
                                <option value="<?= $key; ?>" <?= isset($_GET['bulan']) && $_GET['bulan'] == $key ? 'selected' : ''; ?>><?= $value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="tahun" id="tahun" class="form-control">
                            <?php 
                            $tahun_sekarang = date('Y');
                            for ($i = $tahun_sekarang; $i >= $tahun_sekarang - 5; $i--) {
                                echo "<option value='$i'" . (isset($_GET['tahun']) && $_GET['tahun'] == $i ? ' selected' : '') . ">$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>

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
                                <th style="width: 5%;" rowspan="2">No.</th>
                                <th rowspan="2">Nama Pemeriksaan</th>
                                <th colspan="2">Jumlah</th>
                                <th rowspan="2">Total</th>
                            </tr>
                            <tr>
                                <th>Laki-Laki</th>
                                <th>Perempuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($RL38 as $row): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td style="text-align:left"><?= $row->nama_tindakan; ?></td>
                                    <td><?= $row->jumlah_L; ?></td>
                                    <td><?= $row->jumlah_P; ?></td>
                                    <td><?= $row->jumlah_L + $row->jumlah_P; ?></td> 
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
        initializeDataTable();

        $('#filterForm').submit(function(event) {
            event.preventDefault();
            let bulan = $('#bulan').val();
            let tahun = $('#tahun').val();
            
            $.ajax({
                url: "<?= htmlspecialchars(base_url('data/RL38'), ENT_QUOTES, 'UTF-8'); ?>",
                type: "GET",
                data: { bulan: bulan, tahun: tahun },
                success: function(response) {
                    var newRows = $(response).find('#tabelantrol tbody').html();
                    $('#tabelantrol tbody').html(newRows);
                    var bulanText = $('#bulan option:selected').text();
                    $('#bulan-tahun').text(bulanText + ' ' + tahun);
                }
            });
        });
    });
    
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
        overflow-x: auto !important; /* Aktifkan scroll horizontal */
    }

    th, td {
        min-width: 120px; /* Lebarkan kolom */
        text-align: center; /* Rata tengah */
    }

    th:nth-child(1), td:nth-child(1), 
    th:nth-child(2), td:nth-child(2) {
        position: sticky;
        font-weight: bold; /* Tebalkan teks */
    }
</style>