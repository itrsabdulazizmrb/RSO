<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Berhasil</p>
                    <h5 class="font-weight-bolder">
                    <?= number_format($total_sudah) ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
              <?php foreach ($capaian_belum as $user => $data): ?>
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Belum</p>
                    <h5 class="font-weight-bolder">
                    <?= number_format($data['total_belum_kirim']) ?>
                    </h5>
                    <!-- <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-fat-remove text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total SEP</p>
                    <h5 class="font-weight-bolder">
                    <?= number_format($total_sep) ?>
                    </h5>
                    <!-- <p class="mb-0">
                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                      since last quarter
                    </p> -->
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-collection text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Capaian</p>
                                <div class="d-flex align-items-center mt-2">
                                    <h5 class="font-weight-bolder mb-0">
                                        <?= round($capaian_sudah, 2); ?>% 
                                    </h5>
                                    <div class="progress progress-sm ml-3 flex-grow-1">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?= $capaian_sudah ?>%" aria-valuenow="<?= $capaian_sudah ?>"aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="ni ni-chart-bar-32 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chart  Capaian Antrol-->
        <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">Capaian Pengiriman Antrian Online</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="capaianChart" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart Pengiriman Per Bulan -->
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">Capaian Pengiriman Task ID </h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chartPengirimPerBulan" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
    <div class="col-lg-8">
    <div class="card mb-4 h-100">
        <div class="card-header pb-2">
            <h6>Capaian Pengiriman User <?= date ('M Y'); ?></h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pegawai</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sudah Kirim</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Belum Kirim</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Progress</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $task_id_users = ['Rajif', 'Aqli', 'Faiq'];
                    $antrol_users = ['Diana - Diana', 'Bobby - Bobby'];
                    ?>

                    <tr>
                        <td colspan="5" class="text-center text-uppercase fw-bold py-2">
                            Kirim Antrol
                        </td>
                    </tr>
                    <?php foreach ($capaian as $user => $data): ?>
                        <?php if (in_array($user, $antrol_users)): ?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <h6 class="mb-0 text-sm"><?= htmlspecialchars($user) ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0"><?= number_format($data['sudah']) ?></p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0"><?= number_format($data['belum']) ?></p>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold"><?= round($data['persen'], 2) ?>%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="<?= $data['persen'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $data['persen'] ?>%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-secondary mb-0">
                                        <i class="fa fa-ellipsis-v text-xs"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <tr>
                        <td colspan="5" class="text-center text-uppercase fw-bold py-2">
                            Kirim Task ID
                        </td>
                    </tr>
                    <?php foreach ($capaian as $user => $data): ?>
                        <?php if (in_array($user, $task_id_users)): ?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <h6 class="mb-0 text-sm"><?= htmlspecialchars($user) ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0"><?= number_format($data['sudah']) ?></p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0"><?= number_format($data['belum']) ?></p>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold"><?= round($data['persen'], 2) ?>%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="<?= $data['persen'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $data['persen'] ?>%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-secondary mb-0">
                                        <i class="fa fa-ellipsis-v text-xs"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Pie Chart -->
<div class="col-xl-4 col-lg-2">
<div class="card mb-4 h-100">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6>Statistik Pengiriman</h6>
        </div>
        <div class="card-body">
            <div class="chart-pie pt-2 pb-1">
                <canvas id="pieChartUser"></canvas>
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

<div style="width: 600px; height: 200px; margin: auto;">
    <canvas id="capaianChart"></canvas>
</div>
     