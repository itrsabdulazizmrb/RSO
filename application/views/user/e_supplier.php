        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit Data User</h1>

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
                            <a href="<?php echo site_url('user/supplier') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('user/editsupplier'); ?>" method="post" enctype="multipart/form-data">
                                <!--form_open_multipart untuk upload foto bawaan CI, harus diarahkan ke controler-->
                                <input type="hidden" name="id_supplier" value="<?php echo $Supplier->id_supplier ?>" readonly />

                                <div class="form-group row">
                                    <label for="nama_supplier" class="col-sm-4 col-form-label">Nama Supplier</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('nama_supplier') ? 'is-invalid' : '' ?>" type="text" name="nama_supplier" value="<?php echo $Supplier->nama_supplier ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_supplier') ?>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-4 col-form-label">Alamat Supplier</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" rows="4"><?php echo $Supplier->alamat ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="no_telpon" class="col-sm-4 col-form-label">No. Telepon</label>
                                    <div class="col-sm-8">
                                        <input class="form-control <?php echo form_error('no_telpon') ? 'is-invalid' : '' ?>" type="text" name="no_telpon" value="<?php echo $Supplier->no_telpon ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('no_telpon') ?>
                                    </div>
                                    </div> 
                                </div>
                                </div>

                                <input class="btn btn-facebook" type="submit" name="btn" value="Save" />
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
        <!-- End of Main Content -->