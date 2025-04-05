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
                                    echo "RL 3.5 - Kunjungan $bulan_nama $tahun_ini";
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
                                            <!-- Baris Form Filter -->
                                            
                                            <!-- Baris Header Tabel -->
                                            <tr>
                                                <th>Poliklinik</th>
                                                <th>Laki-laki Baru</th>
                                                <th>Perempuan Baru</th>
                                                <th>Laki-laki Lama</th>
                                                <th>Perempuan Lama</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($RL35 as $data) : ?>
                                                <tr>
                                                    <td><?= $data->nm_poli; ?></td>
                                                    <td><?= $data->jk_L_baru; ?></td>
                                                    <td><?= $data->jk_P_baru; ?></td>
                                                    <td><?= $data->jk_L_lama; ?></td>
                                                    <td><?= $data->jk_P_lama; ?></td>
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
        </div>
    </div>
</div>
