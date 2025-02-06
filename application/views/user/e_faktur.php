        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit Nomor Faktur</h1>

            <div class="row">
                <div class="col-lg-8">

                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('user/faktur') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('user/editfaktur'); ?>" method="post" enctype="multipart/form-data">
                                <!--form_open_multipart untuk upload foto bawaan CI, harus diarahkan ke controler-->
                                <div class="form-group row">
                                    <label for="no_faktur" class="col-sm-4 col-form-label">Nomor Faktur</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('no_faktur') ? 'is-invalid' : '' ?>" type="text" name="no_faktur" value="<?php echo $Faktur->no_faktur ?>"  readonly />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_supplier') ?>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="id_role" class="col-sm-4 col-form-label">Surat Pesananan</label>
                                    <div class="col-sm-8">
                                        <select name="id_pesanan" id="id_pesanan" class="form-control">
                                        <option value="<?php echo $Faktur->id_pesanan ?>">Tidak ada perubahan</option>
                                            <?php foreach ($TPesan as $br) : ?>
                                                <option value="<?= $br['id_pesanan']; ?>"> <?= $br['surat_pesanan']; ?> <?= $br['uraian']; ?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('id_pesanan', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </select>
                                    </div>
                            </div>

                                <input type="text" class="form-control" name="id_supplier" id="id_supplier" readonly hidden>

                                <div class="form-group row">
                                    <label for="id_suppliers" class="col-sm-4 col-form-label">Nama Supplier</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control"  id="id_suppliers" readonly>
                                    </div>
                                </div>

                                <input type="text" class="form-control" name="id_jenis_faktur" id="id_supplierjfn" readonly hidden>

                                <div class="form-group row">
                                    <label for="id_supplierjf" class="col-sm-4 col-form-label">Jenis Pesanan</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control"  id="id_supplierjf" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="petugas_penerima" class="col-sm-4 col-form-label">Penerima Barang</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('petugas_penerima') ? 'is-invalid' : '' ?>" type="text" name="petugas_penerima" value="<?php echo $Faktur->petugas_penerima ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('petugas_penerima') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_faktur" class="col-sm-4 col-form-label">Tanggal Faktur</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('tanggal_faktur') ? 'is-invalid' : '' ?>" type="date" name="tanggal_faktur" value="<?php echo $Faktur->tanggal_faktur ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal_faktur') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_faktur" class="col-sm-4 col-form-label">Tanggal Jatuh Tempo</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('tanggal_jatuh_tempo') ? 'is-invalid' : '' ?>" type="date" name="tanggal_jatuh_tempo" value="<?php echo $Faktur->tanggal_faktur ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal_faktur') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="total_pembayaran" class="col-sm-4 col-form-label">Total Pembayaran</label>
                                    <div class="col-sm-8">
                                        <input type="hidden" name="total_pembayaran" id="nomorFakturHidden">
                                        <input class="form-control <?php echo form_error('total_pembayaran') ? 'is-invalid' : '' ?>" type="text" value="<?php echo $Faktur->total_pembayaran ?>" id="nomorFaktur" placeholder="Rp." oninput="formatRupiah(this)" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('total_pembayaran') ?>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="nip" value="<?php echo $Faktur->nip ?>" />
                                <input type="hidden" name="unit" value="<?php echo $Faktur->unit ?>" />

                                <div class="form-group row">
                                <label for="bukti_faktur" class="col-sm-4 col-form-label">Bukti Faktur</label>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?php echo form_error('bukti_faktur') ? 'is-invalid' : '' ?>" name="bukti_faktur" id="bukti_faktur">
                                        <label class="custom-file-label" for="bukti_faktur">Pilih file</label>
                                        <input type="hidden" name="old_file" value="<?php echo $Faktur->bukti_faktur ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('bukti_faktur') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                                    <input class="btn btn-facebook" type="submit" name="btn" value="Simpan" />
                                </div>
                            </div>                            
                        </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
        </div>

        <script>
            function formatNomorFaktur(input) {
                var inputValue = input.value;
                
                // Hapus karakter selain angka
                inputValue = inputValue.replace(/\D/g, '');
                
                // Pastikan panjang nilai hanya 16 karakter
                inputValue = inputValue.slice(0, 16);

                // Format sesuai dengan "000.-000-00.00000001"
                var formattedValue = inputValue.substring(0, 3) + '.' + inputValue.substring(3, 6) + '-' + inputValue.substring(6, 8) + '.' + inputValue.substring(8);
                var displayValue = formattedValue;
                document.getElementById('nomorFakturHidden').value = inputValue;

                // Menambahkan "Rp." di depan hasil format
                input.value = displayValue;
            }
        </script>

        <script>
            function formatRupiah(input) {
                // Menghapus karakter selain angka
                var inputValue = input.value.replace(/\D/g, '');

                // Menggunakan ekspresi reguler untuk memasukkan tanda titik setiap tiga digit
                var formattedValue = inputValue.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

                // Menambahkan "Rp." di depan hasil format
                var displayValue = 'Rp. ' + formattedValue;

                // Menyimpan nilai tanpa format di elemen input tersembunyi
                document.getElementById('nomorFakturHidden').value = inputValue;

                // Menampilkan hasil format pada elemen input yang ditampilkan
                input.value = displayValue;
            }
        </script>
        <!-- End of Main Content -->

        <script>
            // Call the formatting functions on page load
            document.addEventListener('DOMContentLoaded', function () {
                var totalPembayaranInput = document.getElementById('nomorFaktur');
                formatRupiah(totalPembayaranInput);
            });
        </script>

        <script>
    $(document).ready(function() {
        function setValuesBasedOnPesanan(id_pesanan) {
            $.ajax({
                url: '<?= site_url("user/getSupplierF/") ?>' + id_pesanan,
                type: 'GET',
                success: function(response) {
                    $('#id_supplier').val(response);
                }
            });

            $.ajax({
                url: '<?= site_url("user/getSupplierNameF/") ?>' + id_pesanan,
                type: 'GET',
                success: function(response) {
                    $('#id_suppliers').val(response);
                }
            });

            $.ajax({
                url: '<?= site_url("user/getJenisFakturF/") ?>' + id_pesanan,
                type: 'GET',
                success: function(response) {
                    $('#id_supplierjf').val(response);
                }
            });

            $.ajax({
                url: '<?= site_url("user/getJenisFakturNameF/") ?>' + id_pesanan,
                type: 'GET',
                success: function(response) {
                    $('#id_supplierjfn').val(response);
                }
            });
        }

        var initialPesanan = $('#id_pesanan').val();
        setValuesBasedOnPesanan(initialPesanan);

        $('#id_pesanan').change(function() {
            var id_pesanan = $(this).val();

            if (id_pesanan == "") {
                $('#id_supplier').val('');
                $('#id_suppliers').val('');
                $('#id_supplierjf').val('');
            } else {
                setValuesBasedOnPesanan(id_pesanan);
            }
        });
    });
</script>



        <!-- End of Main Content -->