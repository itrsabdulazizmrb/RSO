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
                         <a href="<?= base_url('user/addpermintaan'); ?>" class="btn btn-facebook mb-3" data-toggle="" data-target=""><i class="fas fa-fw fa-plus"></i></a>
                    </div>
                    <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
                        <thead>
                            <tr>
        						<th>No</th>
        						<th>No. Permintaan</th>
        						<th>Nama Supplier</th>
                                <th>Rincian Permintaan</th>
                                <th>Jenis Permintaan</th>
                                <th>Tanggal Permintaan</th>
                                <th>Unit</th>
                                <th>File Surat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
  
                            <?php foreach ($permintaan as $pm) : ?>
                                <tr>
                                    <th scope="row">
        								<?= $i; ?>
        							</th>
                                    <td>
                                        <?php echo $pm['surat_permintaan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pm['nama_supplier'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pm['rincian_permintaan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pm['nama_jenis'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pm['tanggal_permintaan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pm['unit'] ?>
                                    </td>
                                    <td>
                                    <a href="<?= base_url() ?>/upload/berkas/<?= $pm['file_permintaan'];?>" target="_blank" class="btn btn-small"><i class="fas fa-eye"></i> </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('user/editpermintaan/' . $pm['id_permintaan']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> </a>
                                        <a onclick="deleteConfirm('<?php echo site_url('user/deletepermintaan/' . $pm['id_permintaan']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>
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

        