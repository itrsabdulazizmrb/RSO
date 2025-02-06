<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data User</h1>

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

            <div class="card">
                <div class="card-header">
                    <a href="<?php echo site_url('user/supplier') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('user/addsupplier'); ?>" method="post" enctype="multipart/form-data">
                        <!-- form_open_multipart untuk upload foto bawaan CI, harus diarahkan ke controller -->
                        <div class="form-group row">
                            <label for="nama_supplier" class="col-sm-3 col-form-label">Nama Supplier</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_supplier" placeholder="Nama Supplier">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat Supplier</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="alamat" placeholder="Alamat supplier"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telpon" class="col-sm-3 col-form-label">No. Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="no_telpon" placeholder="No. Telepon">
                            </div>
                        </div>
                        </div>
                        <input class="btn btn-facebook" type="submit" name="btn" value="Simpan" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->
