
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading  -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat datang kembali <?= $username['nama_user']; ?></h1>
                        <a href="admin/supplier" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Data Supplier</a>
                        </div>
                    
                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pembelian</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><p>Rp. <?php echo number_format($total_pembelian, 0); ?></p></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Hutang Belum Terbayar</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><p>Rp. <?php echo number_format($total_hutang, 0); ?></p></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Terbayar
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= number_format($persentase_sudah, 2) ?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: <?= $persentase_sudah ?>%" aria-valuenow="<?= $persentase_sudah ?>"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Surat Pesanan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><p><?php echo number_format($total_sp, 0); ?></p></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <a href="<?= base_url('/fakturtempo'); ?>" data-toggle="" data-target="">
                                        <h6 class="m-0 font-weight-bold text-primary">Faktur Hampir Jatuh Tempo</h6>
                                    </a>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dashboardtable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                    <th>No</th>
                                                    <th>No. Faktur</th>
                                                    <th>No. SP</th>
                                                    <th>Nama Supplier</th>
                                                    <th>Total Hutang</th>
                                                    <th>Tanggal Faktur</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($Tempo as $jb) : ?>
                                                    <tr>
                                                        <th scope="row">
                                                        <a href="<?php echo base_url('user/detailfaktur/' . $jb['no_faktur']) ?>" ><i class="fa fa-arrow-circle-right"></i></a>&nbsp<?= $i; ?>
                                                        </th>
                                                        <td>
                                                            <?php echo $jb['no_faktur'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $jb['surat_pesanan'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $jb['nama_supplier'] ?>
                                                        </td>
                                                        <td>
                                                            <?= 'Rp. ' . number_format($jb['total_hutang'], 0, ',', '.') ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $jb['tanggal_faktur'] ?>
                                                        </td></tr>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>                   
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Statistik Pembayaran</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <!-- <i class="fas fa-circle text-success"></i>-->
                                            </span>
                                            <span class="mr-2">
                                                <!-- <i class="fas fa-circle text-info"></i> -->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    <div class="row">
                    <div class="col-lg-12">

                        <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <a href="<?= base_url('user/fakturbelum'); ?>" data-toggle="" data-target=""><h6 class="m-0 font-weight-bold text-primary">Faktur Belum Dibayar</h6></a>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <!--<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dashboardtableBelum" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>No. Faktur</th>
                                                <th>No. SP</th>
                                                <th>Nama Supplier</th>
                                                <th>Total Hutang</th>
                                                <th>Tanggal Faktur</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($Faktur as $jb) : ?>
                                                <tr>
                                                    <th scope="row">
                                                    <a href="<?php echo base_url('user/detailfaktur/' . $jb['no_faktur']) ?>" ><i class="fa fa-arrow-circle-right"></i></a>&nbsp<?= $i; ?>
                                                    </th>
                                                    <td>
                                                        <?php echo $jb['no_faktur'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $jb['surat_pesanan'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $jb['nama_supplier'] ?>
                                                    </td>
                                                    <td>
                                                        <?= 'Rp. ' . number_format($jb['total_hutang'], 0, ',', '.') ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $jb['tanggal_faktur'] ?>
                                                    </td></tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    </div>
                    </div>
                    </div>
                    <script>
                    var data = {
                        labels: ["Total Hutang", "Total Terbayar", ],
                        datasets: [{
                            data: [<?= $total_hutang; ?>, <?= $total_terbayar; ?>],
                            backgroundColor: ["#F7878A", "#36B9CC"],
                        }]
                    };

                    // Konfigurasi pie chart
                    var options = {
                        responsive: true,
                        maintainAspectRatio: false,

                    };

                    // Menggambar pie chart
                    var ctx = document.getElementById('pieChart').getContext('2d');
                    var myPieChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: data,
                        options: options,
                    });
                </script>