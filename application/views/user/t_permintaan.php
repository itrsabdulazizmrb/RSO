        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Tambah Surat Permintaan</h1>

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
                            <a href="<?php echo site_url('user/permintaan') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">
                        <form action="<?= site_url('user/addpermintaan'); ?>" method="post" enctype="multipart/form-data">
                        <!--form_open_multipart untuk upload foto bawaan CI, harus diarahkan ke controler-->
                        
                        <div class="form-group row">
                            <label for="Name" class="col-sm-2 col-form-label">No. Surat Permintaan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="surat_permintaan" placeholder="Masukkan Nomor Surat..."></input>
                            </div>
                        </div>
                        <div class="form-group row">
                             <label for="id_role" class="col-sm-2 col-form-label">Supplier Barang</label>
                                <div class="col-sm-8">                                                      
                                    <select name="id_supplier" id="id_supplier" class="form-control">
                                    <option value="">Supplier Barang</option>
                                        <?php foreach ($Supplier as $sp) : ?>
                                            <option value="<?= $sp['id_supplier']; ?>"><?= $sp['nama_supplier']; ?></option>
                                        <?php endforeach; ?>
                                        <?= form_error('id_supplier', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                    </select>
                                    </div>
                        </div>
                        <div class="form-group row">
                             <label for="id_role" class="col-sm-2 col-form-label">Jenis Permintaan</label>
                                <div class="col-sm-8">                                                      
                                    <select name="id_jenis_faktur" id="id_jenis_faktur" class="form-control">
                                    <option value="">Jenis Permintaan</option>
                                        <?php foreach ($Jenis as $sp) : ?>
                                            <option value="<?= $sp['id_jenis_faktur']; ?>"><?= $sp['nama_jenis']; ?></option>
                                        <?php endforeach; ?>
                                        <?= form_error('id_jenis_faktur', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                    </select>
                                    </div>
                        </div>
                        <input type="hidden" class="form-control" name="nip" value="<?= ($_SESSION['nip']) ?>" readonly>
                        <input type="hidden" class="form-control" name="unit" value="<?= ($_SESSION['unit']) ?>" readonly>
                        <div class="form-group row">
                            <label for="Name" class="col-sm-2 col-form-label">Rincian Permintaan</label>
                            <div class="col-sm-8">
                                <textarea type="text" class="form-control" name="rincian_permintaan" placeholder="Masukkan rincian..."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                                    <label for="file_permintaan" class="col-sm-2 col-form-label">Surat Permintaan</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file_permintaan" name="file_permintaan">
                                            <label class="custom-file-label" for="image">Pilih file</label>
                                            <?= form_error('file_permintaan', '<small class="text-danger pl-3">', '</small>'); ?></small>
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

        <!-- End of Main Content -->