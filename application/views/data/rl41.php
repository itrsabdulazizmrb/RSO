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
                            $bulan_nama = $bulan[$bulan_ini];
                            echo "Data RL 4.1 Morbiditas Pasien Rawat Inap $bulan_nama $tahun_ini";
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
                        <div class="table-responsive" >
                        <table id="taskidTable" class="table table-hover align-items-center mb-0">
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
    </div>
</div>
