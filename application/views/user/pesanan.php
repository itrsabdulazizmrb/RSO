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
                    <?php if($this->session->userdata("id_role") == "0" or $this->session->userdata("id_role") == "2") { ?>
        		    <div class="card-header">
                         <a href="<?= base_url('user/addpesanan'); ?>" class="btn btn-facebook mb-3" data-toggle="" data-target=""><i class="fas fa-fw fa-plus"></i></a>
                    </div>
                    <?php }?>

                    <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
                        <thead>
                            <tr>
        						<th>No</th>
        						<th>Surat Pesanan</th>
        						<th>Surat Permintaan</th>
        						<th>Nama Supplier</th>
        						<th>Jenis Pesanan</th>
                                <th>Uraian</th>
                                <th>Tanggal Surat</th>
                                <th>File Surat</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                            <?php foreach ($Pesanan as $jb) : ?>
                                <tr>
                                    <th scope="row">
        								<?= $i; ?>
        							</th>
                                    <td>
                                        <?php echo $jb['surat_pesanan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['surat_permintaan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['nama_supplier'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['nama_jenis'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['uraian'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['tanggal_surat'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>/upload/berkas/<?= $jb['file_pesanan'];?>" target="_blank" class="btn btn-small"><i class="fas fa-eye"></i> </a>
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