<style>
    .number-cell {
        display: flex;
        align-items: center;
    }

    .number-icon {
        margin-right: 5px;
        font-size: 18px;
    }
</style>
        <!-- Begin Page Content -->
        
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
                <div class="col-lg-12">

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
        		    <div class="card-header">
                         <a href="<?= base_url('user/addfaktur'); ?>" class="btn btn-facebook mb-3" data-toggle="" data-target=""><i class="fas fa-fw fa-plus"></i></a>
                    </div>

                    <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
                        <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">No. Faktur</th>
                            <th class="text-center">No. SP</th>
                            <th class="text-center">Jenis Faktur</th>
                            <th class="text-center">Nama Supplier</th>
                            <th class="text-center">Penerima</th>
                            <th class="text-center">Total Pembayaran</th>
                            <th class="text-center">Total Hutang</th>
                            <th class="text-center">Total Terbayar</th>
                            <th class="text-center">Tanggal Faktur</th>
                            <th class="text-center">Tanggal Jatuh Tempo</th>
                            <!-- <th class="text-center">Tanggal Pembayaran</th> -->
                            <!-- <th class="text-center">Catatan</th> -->
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($Faktur as $jb) : ?>
                            <tr>
                            <tr>
                                <td class="number-cell text-center align-middle">
                                    <a href="<?php echo base_url('user/detailfaktur/' . $jb['no_faktur']) ?>" class="btn btn-link">
                                        <i class="fas fa-arrow-circle-right number-icon"></i><?= $i; ?>
                                    </a>
                                </td>
                                <td><?php echo $jb['no_faktur'] ?></td>
                                <td><?php echo $jb['surat_pesanan'] ?></td>
                                <td><?php echo $jb['nama_jenis'] ?></td>
                                <td><?php echo $jb['nama_supplier'] ?></td>
                                <td><?php echo $jb['petugas_penerima'] ?></td>
                                <td><?= 'Rp. ' . number_format($jb['total_pembayaran'], 0, ',', '.') ?></td>
                                <td><?= 'Rp. ' . number_format($jb['total_hutang'], 0, ',', '.') ?></td>
                                <td><?= 'Rp. ' . number_format($jb['total_terbayar'], 0, ',', '.') ?></td>
                                <td><?php echo date('d-m-Y', strtotime($jb['tanggal_faktur'])); ?></td>
                                <td><?php echo date('d-m-Y', strtotime($jb['tanggal_jatuh_tempo'])); ?></td>
                                <!--<td>
                                    <?php
                                        $tanggal_pembayaran = new DateTime($jb['tanggal_pembayaran']);
                                        echo $tanggal_pembayaran->format('d-m-Y H:i:s');
                                    ?>
                                </td> -->
                               <!--  <td><?php echo $jb['catatan'] ?></td> -->
                                    <td class="text-center align-middle">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                <h6 class="dropdown-header">Pilih Aksi:</h6>
                                                <a class="dropdown-item" href="<?= base_url('upload/berkas/' . $jb['bukti_faktur']) ?>" target="_blank">
                                                    <i class="fas fa-eye"></i> Lihat Bukti Faktur
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="<?php echo base_url('user/editfaktur/' . $jb['no_faktur']) ?>">
                                                    <i class="fas fa-edit"></i> Edit Faktur
                                                </a>
                                                <a class="dropdown-item" onclick="deleteConfirm('<?php echo site_url('user/deletefaktur/' . $jb['no_faktur']) ?>')" href="#!">
                                                    <i class="fas fa-trash"></i> Hapus Faktur
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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

<!-- Button untuk memulai proses update -->

<!-- Modal untuk validasi total hutang -->
<div class="modal fade" id="validationModal" tabindex="-1" role="dialog" aria-labelledby="validationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="validationModalLabel">Masukkan Captcha Untuk Melanjutkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Operasi Penjumlahan (captcha) -->
                        <div id="captchaOperation"></div>
                    </div>
                    <div class="col-md-6">
                        <!-- Form Penginputan -->
                        <input type="number" id="inputTotalHutang" class="form-control" required>
                    </div>
                </div>
                <br>
               <!-- Catatan belum fix
                <div class="form-group">
                    <label for="inputCatatan">Catatan</label>
                    <textarea class="form-control" id="inputCatatan" rows="3"></textarea>
                </div> -->

                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="button" class="btn btn-primary" id="btnSubmitTotalHutang">Submit</button>
                </div>            </div>
            <!-- ... (lanjutan bagian modal) ... -->
        </div>
    </div>
</div>


        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    // ...

    // Tambahkan event listener untuk tombol "Lunasi Hutang"
    $('#tabeldata').on('click', '.btnUpdateFaktur', function() {
        // Dapatkan nomor faktur dari data atribut
        var noFaktur = $(this).data('no-faktur');
        
        // Tampilkan modal validasi
        $('#validationModal').modal('show');

        // Hasilkan operasi penjumlahan dan tampilkan di modal
        var num1 = Math.floor(Math.random() * 10) + 1;
        var num2 = Math.floor(Math.random() * 10) + 1;
        var captchaOperation = num1 + ' + ' + num2;
        $('#captchaOperation').text(captchaOperation);

        // Simpan nomor faktur ke dalam hidden input di modal
        $('#inputTotalHutang').data('no-faktur', noFaktur);
    });

    // Tambahkan event listener untuk tombol "Simpan" di modal validasi
    $('#btnSubmitTotalHutang').on('click', function() {
        // Dapatkan nomor faktur dari hidden input di modal
        var noFaktur = $('#inputTotalHutang').data('no-faktur');

        // Dapatkan hasil penjumlahan yang seharusnya
        var expectedSum = eval($('#captchaOperation').text());

        // Dapatkan jawaban pengguna
        var userAnswer = parseInt($('#inputTotalHutang').val());

        var catatan = $('#inputCatatan').val();


        // Validasi jawaban pengguna
        if (userAnswer === expectedSum) {
            // Jawaban benar, lanjutkan dengan proses berikutnya
            // Dapatkan data faktur dari server
            $.ajax({
                url: 'get_faktur', // Ganti URL_API_ANDA dengan URL yang benar
                method: 'POST',
                data: { no_faktur: noFaktur },
                success: function(response) {
                    var faktur = JSON.parse(response);

                    // Hitung nilai baru untuk total_terbayar
                    var newTotalTerbayar = faktur.total_terbayar + userAnswer;

                    // Kirim perubahan ke server
                    $.ajax({
                        url: 'update_total_terbayar', // Ganti URL_API_ANDA dengan URL yang benar
                        method: 'POST',
                        data: {
                            no_faktur: noFaktur,
                            new_total_terbayar: newTotalTerbayar,
                            catatan: catatan // Include the note data in the request

                        },
                        success: function(response) {
                            console.log(response);
                            $('#validationModal').modal('hide');
                            alert("Data Tersimpan");
                            location.reload(); // Reload the page after data is saved
                        },
                        error: function (error) {
                            console.log(error);
                        }                    
                    });
                },
                error: function(xhr, status, error) {
                    // Handle error request
                    console.error(xhr.responseText);
                }
            });
        } else {
            // Jawaban salah, tampilkan pesan error atau lakukan penanganan yang sesuai
            alert('Jawaban tidak benar. Silakan coba lagi.');
        }
    });
});

</script>