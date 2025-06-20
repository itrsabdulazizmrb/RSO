<div class="container-fluid mt-4">
    <div class="row justify-content-center">
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
                            if (isset($_GET['start_date']) && isset($_GET['end_date']) && $_GET['start_date'] && $_GET['end_date']) {
                                $start_date = date('j F Y', strtotime($_GET['start_date']));
                                $end_date = date('j F Y', strtotime($_GET['end_date']));
                                echo "Data Rawat Jalan $start_date s.d. $end_date";
                            } else {
                                echo "Data Rawat Jalan " . date('F Y');
                            }
                            ?>
                        </h6>
                        <form id="filterForm" class="form-inline">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="date" name="start_date" id="start_date" class="form-control" value="<?= isset($_GET['start_date']) ? $_GET['start_date'] : ''; ?>">
                                </div>
                                <div class="col-md-2">
                                    <input type="date" name="end_date" id="end_date" class="form-control" value="<?= isset($_GET['end_date']) ? $_GET['end_date'] : ''; ?>">
                                </div>
                                <div class="col-md-2">
                                    <select name="filter_type" id="filter_type" class="form-control">
                                        <option value="masuk" <?= (isset($_GET['filter_type']) && $_GET['filter_type'] == 'masuk') ? 'selected' : '' ?>>Tanggal Masuk</option>
                                        <option value="pulang" <?= (isset($_GET['filter_type']) && $_GET['filter_type'] == 'pulang') ? 'selected' : '' ?>>Tanggal Pulang</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body px-4 pt-2 pb-3">
                        <div class="table-responsive">
                        <table id="taskidTable" class="table table-hover align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. RM</th>
                                    <th>Kunjungan</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Cara Masuk</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Umur (hari)</th>
                                    <th>Alamat</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                    <th>Cara Keluar</th>
                                    <th>DPJP</th>
                                    <th>Pembayaran</th>
                                    <th>Ruang</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($Ranap as $u) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $u['NRM']; ?></td>
                                        <td><?= $u['Kunjungan']; ?></td>
                                        <td><?= $u['Tanggal_Pendaftaran']; ?></td>
                                        <td><?= $u['Tanggal_masuk']; ?></td>
                                        <td><?= $u['Tanggal_keluar']; ?></td>
                                        <td><?= $u['Poli']; ?></td>
                                        <td><?= $u['nama']; ?></td>
                                        <td><?= $u['jenis_kelamin']; ?></td>
                                        <td><?= $u['tanggal_lahir']; ?></td>
                                        <td><?= $u['umur_hari']; ?></td>
                                        <td><?= $u['Alamat']; ?></td>
                                        <td class="diagnosa"><?= $u['diagnosa']; ?>, <?= $u['diagnosa_akhir']; ?></td>
                                        <td><?= $u['tindakan']; ?></td>
                                        <td><?= $u['stts_pulang']; ?></td>
                                        <td><?= $u['DPJP']; ?></td>
                                        <td><?= $u['Pembayaran']; ?></td>
                                        <td><?= $u['ruang']; ?></td>
                                        <td><?= $u['kelas']; ?></td>
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
</div>

