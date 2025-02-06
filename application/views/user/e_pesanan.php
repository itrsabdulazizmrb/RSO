        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit Surat Pesanan</h1>

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
                            <a href="<?php echo site_url('user/pesanan') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('user/editpesanan'); ?>" method="post" enctype="multipart/form-data">
                                <!--form_open_multipart untuk upload foto bawaan CI, harus diarahkan ke controler-->
                                
                                <div class="form-group row">
                                    <label for="id_permintaan" class="col-sm-4 col-form-label">Surat Permintaan</label>
                                    <div class="col-sm-8">
                                        <select name="id_permintaan" id="id_permintaan" class="form-control">
                                            <option value="<?php echo $Permintaan->id_permintaan ?> ">Tidak ada perubahan</option>
                                            <?php foreach ($Permintaan as $sp) : ?>
                                                <option value="<?= $sp['id_permintaan']; ?>"><?= $sp['surat_permintaan']; ?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('id_permintaan', '<small class="text-danger pl-3">', '</small>'); ?></small>
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
                                    <label for="surat_pesanan" class="col-sm-4 col-form-label">No. Surat Pesanan</label>
                                    <div class="col-sm-4">
                                        <input class="form-control <?php echo form_error('surat_pesanan') ? 'is-invalid' : '' ?>" type="text" name="surat_pesanan" value="<?php echo $Pesanan->surat_pesanan ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('surat_pesanan') ?>
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="uraian" class="col-sm-4 col-form-label">Uraian Surat</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control <?php echo form_error('uraian') ? 'is-invalid' : '' ?>" name="uraian"><?php echo $Pesanan->uraian ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('satuan') ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="tanggal_surat" class="col-sm-4 col-form-label">Tanggal Surat</label>
                                    <div class="col-sm-4">
                                        <input class="form-control <?php echo form_error('tanggal_surat') ? 'is-invalid' : '' ?>" type="date" name="tanggal_surat" value="<?php echo $Pesanan->tanggal_surat ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('stok') ?>
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                <label for="file_pesanan" class="col-sm-4 col-form-label">Surat Permintaan</label>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input <?php echo form_error('file_pesanan') ? 'is-invalid' : '' ?>" name="file_pesanan" id="file_pesanan">                                        
                                    <label class="custom-file-label" for="image">Pilih file</label>
                                        <input type="hidden" name="old_file" value="<?php echo $Pesanan->file_pesanan ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('file_pesanan') ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="nip" value="<?php echo $Pesanan->nip ?>" />

                                <input type="hidden" name="unit" value="<?php echo $Pesanan->unit ?>" />

                                </div>
                                </div>
                                <input class="btn btn-facebook" type="submit" name="btn" value="Simpan" />
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
        <!-- End of Main Content -->

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
    $(document).ready(function() {
        $('#id_permintaan').change(function() {
            var id_permintaan = $(this).val();

            // Lakukan AJAX request untuk mendapatkan id_supplier berdasarkan id_permintaan
            $.ajax({
                url: '<?= site_url("user/getSupplier/") ?>' + id_permintaan,
                type: 'GET',
                success: function(response) {
                    $('#id_supplier').val(response);
                }
            });

            // Lakukan AJAX request untuk mendapatkan id_suppliers (nama_supplier) berdasarkan id_permintaan
            $.ajax({
                url: '<?= site_url("user/getSupplierName/") ?>' + id_permintaan,
                type: 'GET',
                success: function(response) {
                    $('#id_suppliers').val(response);
                }
            });

            $.ajax({
                url: '<?= site_url("user/getJenisFaktur/") ?>' + id_permintaan,
                type: 'GET',
                success: function(response) {
                    $('#id_supplierjf').val(response);
                }
            });

            $.ajax({
                url: '<?= site_url("user/getJenisFakturName/") ?>' + id_permintaan,
                type: 'GET',
                success: function(response) {
                    $('#id_supplierjfn').val(response);
                }
            });

            $.ajax({
                url: '<?= site_url("user/getNIPP/") ?>' + id_permintaan,
                type: 'GET',
                success: function(response) {
                    $('#nip').val(response);
                }
            });

            $.ajax({
                url: '<?= site_url("user/getUnitP/") ?>' + id_permintaan,
                type: 'GET',
                success: function(response) {
                    $('#unit').val(response);
                }
            });
        });
    });
</script>