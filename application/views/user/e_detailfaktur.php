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
                        <a href="javascript:void(0);" onclick="goBack()"><i class="fas fa-arrow-left"></i>Back</a>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('user/editdetailfaktur'); ?>" method="post" enctype="multipart/form-data">
                                <!--form_open_multipart untuk upload foto bawaan CI, harus diarahkan ke controler-->
                                <input class="form-control <?php echo form_error('no_faktur') ? 'is-invalid' : '' ?>" type="hidden" name="id_barang" value="<?php echo $detail->id_barang ?>"  readonly />
                                <div class="form-group row">
                                    <label for="no_faktur" class="col-sm-2 col-form-label">Nomor Faktur</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('no_faktur') ? 'is-invalid' : '' ?>" type="text" name="no_faktur" value="<?php echo $detail->no_faktur ?>"  readonly />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_supplier') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_batch" class="col-sm-2 col-form-label">Nomor Batch</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('no_batch') ? 'is-invalid' : '' ?>" type="text" name="no_batch" value="<?php echo $detail->no_batch ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('no_batch') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid' : '' ?>" type="text" name="nama_barang" value="<?php echo $detail->nama_barang ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_barang') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="satuan" class="col-sm-2 col-form-label">Satuan Barang</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" value="<?php echo $detail->satuan ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('satuan') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="expired" class="col-sm-2 col-form-label">Tanggal Expired</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('expired') ? 'is-invalid' : '' ?>" type="date" name="expired" value="<?php echo $detail->expired ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('expired') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('jumlah') ? 'is-invalid' : '' ?>" type="number" name="jumlah" id="jumlah" value="<?php echo $detail->jumlah ?>" step="1" oninput="updateTotal()">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jumlah') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="number" name="harga" id="harga" value="<?php echo $detail->harga ?>" step="any" oninput="updateTotal()">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('harga') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="diskon" class="col-sm-2 col-form-label">Diskon Barang</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('diskon') ? 'is-invalid' : '' ?>" type="number" name="diskon" id="diskon" value="<?php echo $detail->diskon ?>" step="any" oninput="updateTotal()">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('harga') ?>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="total" class="col-sm-2 col-form-label">Total Harga</label>
                                    <div class="col-sm-8">
                                        <input type="hidden" name="total" id="total_hidden">
                                        <input class="form-control <?php echo form_error('total') ? 'is-invalid' : '' ?>" type="text" value="<?php echo $detail->total ?>" id="total" placeholder="Rp." readonly>
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-2">
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
                
                // Menambahkan "Rp." di depan hasil format
                input.value = formattedValue;
            }
            </script>

        <script>
            // Function to format and update the total
            function updateTotal() {
                var jumlah = parseFloat(document.getElementById('jumlah').value) || 0;
                var harga = parseFloat(document.getElementById('harga').value) || 0;
                var diskonPersen = parseFloat(document.getElementById('diskon').value) || 0;

                var diskonFaktor = diskonPersen / 100;
                var total = (jumlah * harga) * (1 - diskonFaktor);

                // Format total menjadi mata uang Rupiah dan tampilkan dengan tanda format
                var formattedTotal = formatRupiah(total);
                
                // Update nilai total ke field "total" dengan tanda format
                document.getElementById('total').value = formattedTotal;
                
                // Simpan total dalam bentuk angka tanpa tanda format
                document.getElementById('total_hidden').value = total;
            }

            // Function to format angka sebagai mata uang Rupiah
            function formatRupiah(angka) {
                var number_string = angka.toString();
                var split = number_string.split('.');
                var sisa = split[0].length % 3;
                var rupiah = split[0].substr(0, sisa);
                var ribuan = split[0].substr(sisa).match(/\d{3}/g);

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return 'Rp. ' + rupiah;
            }
        </script>
        <script>
            function goBack() {
                // Mengambil nomor faktur dari URL saat ini
                var currentNoFaktur = "<?= $this->uri->segment(3) ?>";

                // Menggunakan nomor faktur untuk membuat URL yang sesuai
                var returnUrl = "<?= site_url('user/detailfaktur/') ?>" + currentNoFaktur;

                // Mengarahkan kembali ke URI yang sesuai
                window.location.href = returnUrl;
            }
        </script>
        <!-- End of Main Content -->