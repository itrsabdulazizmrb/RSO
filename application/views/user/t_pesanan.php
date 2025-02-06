        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Tambah SP</h1>

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
                        <form action="<?= site_url('user/addpesanan'); ?>" method="post" enctype="multipart/form-data">
                        <!--<div class="form-group row">
                             <label for="id_role" class="col-sm-2 col-form-label">Klasfikasi Barang</label>
                                <div class="col-sm-6">                                                      
                                    <select name="id_jenis_barang" id="id_jenis_barang" class="form-control">
                                    <option value="">Klasfikasi Barang</option>
                                        <?php foreach ($JBarang as $jb) : ?>
                                            <option value="<?= $jb['id_jenis_barang']; ?>"><?= $jb['jenis_barang']; ?></option>
                                        <?php endforeach; ?>
                                        <?= form_error('id_jenis_barang', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                    </select>
                                    </div>
                        </div>-->
                        
                        <div class="form-group row">
                        <label for="id_permintaan" class="col-sm-4 col-form-label">Surat Pesanan</label>
                        <div class="col-sm-8">
                        <select name="id_permintaan" id="id_permintaan">
                        <option value="">Surat Permintaan</option>
                            <?php foreach ($Permintaan as $permintaan) : ?>
                                <option value="<?= $permintaan['id_permintaan']; ?>"><?= $permintaan['surat_permintaan']; ?></option>
                            <?php endforeach; ?>
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
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="surat_pesanan" placeholder="Masukkan Nomor Surat..."></input>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Name" class="col-sm-4 col-form-label">Uraian</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="uraian" placeholder="Masukkan Uraian..."></input>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Name" class="col-sm-4 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_surat" placeholder=""></input>
                            </div>
                        </div>        

                        <input type="text" class="form-control" name="nip" id="nip" readonly hidden>
                        <input type="text" class="form-control" name="unit" id="unit" readonly hidden>

                        <div class="form-group row">
                                    <label for="file_pesanan" class="col-sm-4 col-form-label">Surat Permintaan</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file_pesanan" name="file_pesanan">
                                            <label class="custom-file-label" for="image">Pilih file</label>
                                            <?= form_error('file_pesanan', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </div>
                                    </div>
                        </div>                      
                        </div>                  
                        
                        <input class="btn btn-facebook" type="submit" name="btn" value="Simpan" />
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
        </div>

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