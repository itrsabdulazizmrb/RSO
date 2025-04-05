<div class="container-fluid mt-4">
    <div class="row justify-content-center">
    <div class="row mb-4">
                    <div class="col-lg-6">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Tindakan  <?= date ('M Y'); ?></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($total_tindakan) ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rata-rata Tindakan per Hari  <?= date ('M Y'); ?></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($rata_rata, 2) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Tabel Pengirim-->
        <?php
            $bulan = array(
                1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            );
            $bulan_ini = isset($_GET['bulan']) ? $_GET['bulan'] : date('n');
            $tahun_ini = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
            ?>
            
        <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card mb-4">
                    <div class="card-header pb-2">
                        <h6>
                            <?php 
                            $bulan_nama = $bulan[$bulan_ini];
                            echo "Data RL 3.8 Laboratorium $bulan_nama $tahun_ini";
                            ?>
                        </h6>
                        <tr>
                            <th colspan="5">
                                <form id="filterForm" class="form-inline">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <select name="bulan" id="bulan" class="form-control">
                                                <?php foreach ($bulan as $key => $value) : ?>
                                                    <option value="<?= $key; ?>" <?= ($bulan_ini == $key) ? 'selected' : ''; ?>><?= $value; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-1">
                                            <select name="tahun" id="tahun" class="form-control">
                                                <?php 
                                                $tahun_sekarang = date('Y');
                                                for ($i = $tahun_sekarang; $i >= $tahun_sekarang - 5; $i--) {
                                                    echo "<option value='$i'" . (($tahun_ini == $i) ? ' selected' : '') . ">$i</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </th>
                        </tr>
                    </div>
                    <div class="card-body px-4 pt-2 pb-3">
                        <div class="table-responsive">
                        <table id="taskidTable" class="table table-hover align-items-center mb-0">
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
    </div>
</div>

