<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <?php
        $bulan = array(
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );
        $bulan_ini = isset($_GET['bulan']) ? $_GET['bulan'] : date('n');
        $tahun_ini = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
        ?>
        <div class="col-lg-12 col-md-12">
            <div class="card mb-4">
                <div class="card-header pb-2">
                    <h6>
                        <?php 
                        $bulan_nama = $bulan[$bulan_ini];
                        echo "Data RL 3.10 Rujukan $bulan_nama $tahun_ini";
                        ?>
                    </h6>
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
                </div>
                <div class="card-body px-4 pt-2 pb-3">
                    <div class="table-responsive">
                        <table id="taskidTable" class="table table-hover align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Poli Tujuan</th>
                                    <th>Asal Rujukan</th>
                                    <th>Total Rujukan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $rowspan = [];
                                $groupedData = [];

                                // Kelompokkan data berdasarkan Poli Tujuan
                                foreach ($RL310 as $row) {
                                    $poli = $row->Nama_Poli ?: 'Tidak Diketahui';
                                    if (!isset($groupedData[$poli])) {
                                        $groupedData[$poli] = [];
                                    }
                                    $groupedData[$poli][] = $row;
                                }

                                // Hitung jumlah baris per Poli
                                foreach ($groupedData as $poli => $items):
                                    $first = true;
                                    foreach ($items as $entry):
                                        echo "<tr>";
                                        if ($first):
                                            echo "<td rowspan='" . count($items) . "'>$no</td>";
                                            echo "<td rowspan='" . count($items) . "' style='text-align:left'>$poli</td>";
                                            $no++;
                                            $first = false;
                                        endif;
                                        echo "<td style='text-align:left'>{$entry->Asal_Rujukan}</td>";
                                        echo "<td>{$entry->Total_Rujukan}</td>";
                                        echo "</tr>";
                                    endforeach;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
