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
                    <button type="button" class="btn btn-facebook mb-3" data-toggle="modal" data-target="#tambahBarangModal">
                        <i class="fas fa-plus"></i> Tambah Barang
                    </button>

                    </div>

                    <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
                        <thead>
                            <tr>
        						<th>No</th>
                                <th>No. Batch</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Expired</th>
                                <th>Jumlah Barang</th>
                                <th>Harga</th>
                                <th>Diskon</th>
                                <th>Total</th>
                                <?php if($this->session->userdata("id_role") == "0") { ?>
                                <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                            <?php foreach ($detail as $jb) : ?>
                                
                                <tr>
                                    <th scope="row">
        								<?= $i; ?>
        							</th>
                                    <td>
                                        <?php echo $jb['no_batch'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['nama_barang'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['satuan'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['expired'] ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['jumlah'] ?>
                                    </td>
                                    <td>
                                        <?= 'Rp. ' . number_format($jb['harga'], 2, ',', '.') ?>
                                    </td>
                                    <td>
                                        <?php echo $jb['diskon'] ?>
                                    </td>
                                    <td>
                                        <?= 'Rp. ' . number_format($jb['total'], 2, ',', '.') ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('user/editdetailfaktur/' . $jb['id_barang']) ?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> </a>
                                        <a onclick="deleteConfirm('<?php echo site_url('user/hapusBarang/' . $jb['id_barang']) ?>')" href="#!" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> </a>
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

        <!-- Tambah Barang Modal -->
        <div class="modal fade" id="tambahBarangModal" tabindex="1" role="dialog" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahBarangModalLabel">Tambah Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form id="addDetailForm" action="<?= site_url('user/adddetailfaktur'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">

                                <label for="no_faktur" class="col-sm-3 col-form-label">Nomor Faktur</label>
                                <div class="col-sm-9">
                                    <!-- Input otomatis terisi dari URL -->

                                    <input class="form-control" type="text" name="no_faktur" value="<?php echo $no_faktur; ?>" id="modalNoFaktur"    readonly />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_supplier') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_batch" class="col-sm-3  col-form-label">No. Batch</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_batch" placeholder="Masukkan nomor batch..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="satuan" placeholder="Masukkan satuan..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="expired" class="col-sm-3 col-form-label">Tanggal Expired</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="expired" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Barang</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan jumlah barang" step="1" oninput="updateTotal()" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga" class="col-sm-3 col-form-label">Harga Barang</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan harga barang" step="any" oninput="updateTotal()" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="diskon" class="col-sm-3 col-form-label">Diskon</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="diskon" id="diskon" placeholder="Masukkan diskon" step="any" oninput="updateTotal()" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="total" class="col-sm-3 col-form-label">Total Harga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="total" placeholder="Rp." readonly>
                                    <input type="hidden" name="total" id="total_hidden">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
        // Mengambil nomor faktur dari URL segment 3
        var noFakturSegment = "<?= $this->uri->segment(3) ?>";

        // Mengambil nomor faktur dari atribut data-no-faktur tombol "Tambah Barang"
        $('#tambahBarangModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            // Menggunakan nomor faktur dari URL segment 3
            var noFaktur = noFakturSegment;
            
            // Memasukkan nomor faktur ke dalam input
            $('#modalNoFaktur').val(noFaktur);
        });
        </script>

        <script>
            // Ketika modals ditampilkan, atur nilai input tersembunyi
            $('#tambahBarangModal').on('show.bs.modal', function (e) {
                var noFaktur = $(e.relatedTarget).data('no-faktur');
                $('#noFakturInput').val(noFaktur);
            });

            // Function untuk mengirimkan formulir tambah barang
            function submitForm() {
                $('#tambahBarangModal form').submit();
            }
        </script>

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

        <script>
            function saveDetailFaktur() {
                var formData = $('#addDetailForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: 'user/detailfaktur/' + $no_faktur,
                    data: formData,
                    success: function(response) {
                        // Handle the response here
                        var jsonResponse = JSON.parse(response);

                        if (jsonResponse.success) {
                            // Data saved successfully, you can update the page as needed
                            alert('Data berhasil disimpan');
                            // Example: You can append the new data to a table
                            var newRow = "<tr><td>" + insertedData.field1 + "</td><td>" + insertedData.field2 + "</td></tr>";
                            $('table tbody').append(newRow);
                        } else {
                            // Handle errors if needed
                            alert('Gagal menyimpan data: ' + jsonResponse.message);
                        }
                    },
                    error: function(error) {
                        // Handle errors here
                        console.log(error);
                    }
                });
            }
        </script>

<script>
$(document).ready(function () {
    $('#addDetailForm').on('submit', function (e) {
        e.preventDefault();

        var no_batch = $('#no_batch').val();
        var nama_barang = $('#nama_barang').val();
        var satuan = $('#satuan').val();
        var expired = $('#expired').val();
        var jumlah = $('#jumlah').val();
        var harga = $('#harga').val();
        var diskon = $('#diskon').val();
        var diskon = $('#total').val();

        if (no_batch !== '' && nama_barang !== '' && satuan !== '' && expired !== '' && jumlah !== '' && harga !== '' && diskon !== '') {
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('user/adddetailfaktur'); ?>",
        data: $('#addDetailForm').serialize(),
        success: function (response) {
            console.log(response);
            $('#tambahBarangModal').modal('hide');
            alert("Data Tersimpan");
            location.reload(); // Reload the page after data is saved
        },
        error: function (error) {
            console.log(error);
        }
    });
} else {
    alert("Harap isi semua bidang formulir.");
}
    });
});
</script>




        <script>
            $('#saveButton').on('click', function() {
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('user/adddetailfaktur'); ?>",
                    data: $('#addDetailForm').serialize(), // Mengambil data dari form
                    success: function(response) {
                        // Penanganan respons dari server
                        if (response.success) {
                            // Lakukan apa yang diperlukan jika penyimpanan berhasil
                            // Anda bisa memperbarui tabel atau elemen lainnya di halaman tanpa perlu mereset halaman
                        } else {
                            // Lakukan sesuatu jika penyimpanan gagal
                        }
                    }
                });
            });
        </script>