        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
</head>
<body style="padding: 0 px;">
<form method="get" action="">
<div class="row">
<div class="col-sm-3 col-md-2">
<div class="form-group">
<label>Filter Berdasarkan</label>
  <select name="filter" id="filter" class="form-control">
      <option value="">Pilih</option>
      <!--<option value="1">Per Tanggal</option>-->
      <option value="2">Per Bulan</option>
      <!--<option value="3">Per Tahun</option>-->
  </select>
</div>
</div>
</div>
<div class="row" id="form-tanggal">
    <div class="col-sm-3 col-md-2">
        <input type="date" class="form-control datepicker" name="tanggal1" required>
    </div>
        <label class="mt-2">s/d</label>
    <div class="col-sm-3 col-md-2">
        <input type="date" class="form-control datepicker" name="tanggal2" required>
    </div>
</div>

<div class="row">
<div class="col-sm-3 col-md-2" id="form-bulan">
<div class="form-group">
<label>Bulan</label>
<select name="bulan" class="form-control">
        <option value="">Pilih</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>
</div>
</div>
<div class="col-sm-3 col-md-2" id="form-tahun">
<div class="form-group">
<label>Tahun</label>
<select name="tahun" class="form-control">
        <option value="">Pilih</option>
        <?php
foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
  echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
}
        ?>
    </select>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Tampilkan</button>
<a href="cetaksurat" class="btn btn-default">Reset Filter</a>
</form>
<hr />
<a href="<?php echo $url_export; ?>" class="btn btn-success btn-xs">EXPORT EXCEL <?php echo $label; ?> </a><br /><br />


<div class="row">
        <div class="col-lg-12">
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive" id="tabeldata">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Periksa</th>
                                <th>No. RM</th>
                                <th>Kunjungan</th>
                                <th>Cara Masuk</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur (hari)</th>
                                <th>Alamat</th>
                                <th>Kecamatan</th>
                                <th>Kabupaten</th>
                                <th>Provinsi</th>
                                <th>Diagnosa</th>
                                <th>Tindakan</th>
                                <th>Cara Keluar</th>
                                <th>DPJP</th>
                                <th>Pembayaran</th>
                                <th>Poli</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($Rajal as $jb): ?>
                            <?php $data_array = json_decode(json_encode($jb), true); ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data_array['Tanggal_Pendaftaran']; ?></td> 
                                <td><?php echo $data_array['NRM']; ?></td> 
                                <td><?php echo $data_array['Kunjungan']; ?></td> 
                                <td><?php echo $data_array['cara_masuk']; ?></td>
                                <td><?php echo $data_array['nama']; ?></td> 
                                <td><?php echo $data_array['jenis_kelamin']; ?></td>
                                <td><?php echo $data_array['umur_hari']; ?></td> 
                                <td><?php echo $data_array['Alamat']; ?></td>
                                <td><?php echo $data_array['kecamatan']; ?></td>
                                <td><?php echo $data_array['kabupaten']; ?></td>
                                <td><?php echo $data_array['provinsi']; ?></td> 
                                <td><?php echo $data_array['diagnosa']; ?></td>
                                <td><?php echo $data_array['tindakan']; ?></td>
                                <td><?php echo $data_array['cara_keluar']; ?></td> 
                                <td><?php echo $data_array['DPJP']; ?></td> 
                                <td><?php echo $data_array['Pembayaran']; ?></td> 
                                <td><?php echo $data_array['Poli']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script>

$("#bulan option").sort(function(a, b) {
    return $(a).text().localeCompare($(b).text());
}).appendTo("#bulan");
$(document).ready(function() {
    setDatePicker();
    $('#form-tanggal, #form-bulan, #form-tahun').hide();

    $('#filter').change(function() {
        let value = $(this).val();
        $('#form-tanggal, #form-bulan, #form-tahun').hide();
        if (value == '1') {
            $('#form-tanggal').show();
        } else if (value == '2') {
            $('#form-bulan, #form-tahun').show();
        } else if (value == '3') {
            $('#form-tahun').show();
        }
        $('.datepicker').val('');
        $('#form-bulan select, #form-tahun select').val('');
    });

    function setDatePicker() {
        $(".datepicker").datepicker({
            format: "yyyy-mm-dd",
            todayHighlight: true,
            autoclose: true
        }).attr("readonly", "readonly").css({"cursor": "pointer", "background": "white"});
    }
});
</script>

<script>
$(document).ready(function() {
    $('#tabeldata').DataTable({
        "pageLength": 50,
        "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
        "ordering": true,
        "responsive": true,
        "autoWidth": false,
        "language": {
            "search": "",
            "searchPlaceholder": "Cari..."
        }
    });
});

window.onscroll = function() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
};

document.getElementById("scrollToTopBtn").addEventListener("click", function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>

<style>
    .page-heading {
        background: linear-gradient(135deg, #555, #777); 
        color: white;
        padding: 20px;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .alert-success {
        border-color: #ddd;
        background-color: #f8f9fa;
        color: #333;
        border-radius: 0.375rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn {
        border-radius: 0.375rem;
        padding: 0.7rem 1.5rem;
        font-size: 0.875rem;
    }
    .btn-primary {
        background-color: #333; 
        border: none;
    }
    .btn-primary:hover {
        background-color: #444; 
    }
    .btn-warning {
        background-color: #666;
        border: none;
    }
    .btn-warning:hover {
        background-color: #777;
    }
    .btn-danger {
        background-color: #444;
        border: none;
    }
    .btn-danger:hover {
        background-color: #555;
    }
    .table thead th {
        background-color: #333; 
        font-weight: bold;
        text-align: center;
        color: white;
    }
    .table tbody td {
        vertical-align: middle; 
    }
    .table tbody tr:hover {
        background-color: #444;
        color: white;
    }

    .card {
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: #f8f9fa;
    }
    .card-header {
        background-color: #333; 
        border-bottom: 1px solid #444;
    }
    .card-body {
        padding: 1.5rem;
    }
    .form-control {
        border-radius: 0.375rem;
        box-shadow: none;
    }
    .form-label {
        font-weight: bold;
    }
    .btn-close {
        box-shadow: none;
    }

    #scrollToTopBtn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none; 
        z-index: 1000;
    }
    #scrollToTopBtn img {
        width: 100px; 
        height: 50px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        cursor: pointer;
    }
    #scrollToTopBtn:hover img {
        opacity: 0.8; 
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .dataTables_wrapper .dataTables_filter {
        justify-content: flex-end;
    }

    .dataTables_wrapper .dataTables_filter input {
        border-radius: 0.375rem;
        padding: 0.5rem;
        border: 1px solid #ccc;
        width: 300px;
    }

    .dataTables_wrapper .dataTables_length label,
    .dataTables_wrapper .dataTables_filter label {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .dataTables_wrapper .dataTables_length select {
        border-radius: 0.375rem;
        padding: 0.3rem 0.5rem;
    }

    .page-item.active .page-link {
        color: #fff !important;
        background-color: #000 !important;
    }
    .page-link {
        color: #000 !important;
        background-color: #fff !important;
        border: 1px solid #dee2e6 !important; 
    }
    .page-link:hover {
        color: #fff !important;
        background-color: #000 !important;
        border-color: #000 !important; 
    }
</style>

