        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit Surat Permintaan</h1>

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
                            <form action="<?= site_url('user/editpermintaan'); ?>" method="post" enctype="multipart/form-data">
                                <!--form_open_multipart untuk upload foto bawaan CI, harus diarahkan ke controler-->
                                <input type="hidden" name="id_permintaan" value="<?php echo $Permintaan->id_permintaan ?>" readonly />
                                <input type="hidden" name="nip" value="<?php echo $Permintaan->nip ?>" readonly />
                                <input type="hidden" name="unit" value="<?php echo $Permintaan->unit ?>" readonly />
                                <div class="form-group row">
                                    <label for="surat_permintaan" class="col-sm-2 col-form-label">No. Surat</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('surat_permintaan') ? 'is-invalid' : '' ?>" type="text" name="surat_permintaan" value="<?php echo $Permintaan->surat_permintaan ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('surat_permintaan') ?>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
                                    <div class="col-sm-8">
                                        <select name="id_supplier" id="id_supplier" class="form-control">
                                            <option value="<?php echo $Permintaan->id_supplier ?> ">Tidak ada perubahan</option>
                                            <?php foreach ($Supplier as $sp) : ?>
                                                <option value="<?= $sp['id_supplier']; ?>"><?= $sp['nama_supplier']; ?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('id_supplier', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_supplier" class="col-sm-2 col-form-label">Jenis Permintaan</label>
                                    <div class="col-sm-8">
                                        <select name="id_jenis_faktur" id="id_jenis_faktur" class="form-control">
                                            <option value="<?php echo $Permintaan->id_supplier ?> ">Tidak ada perubahan</option>
                                            <?php foreach ($Jenis as $sp) : ?>
                                                <option value="<?= $sp['id_jenis_faktur']; ?>"><?= $sp['nama_jenis']; ?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('id_jenis_faktur', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="uraian" class="col-sm-2 col-form-label">Rincian Permintaan</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control <?php echo form_error('rincian_permintaan') ? 'is-invalid' : '' ?>" name="rincian_permintaan"><?php echo $Permintaan->rincian_permintaan ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('rincian_permintaan') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="file_permintaan" class="col-sm-2 col-form-label">File Surat</label>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input <?php echo form_error('file_permintaan') ? 'is-invalid' : '' ?>" name="file_permintaan" id="file_permintaan">                                        
                                    <label class="custom-file-label" for="image">Pilih file</label>
                                        <input type="hidden" name="old_file" value="<?php echo $Permintaan->file_permintaan ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('file_permintaan') ?>
                                        </div>
                                    </div>
                                </div>
                                
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