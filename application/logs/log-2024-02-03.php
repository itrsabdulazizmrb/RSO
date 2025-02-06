<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-02-03 00:00:18 --> 404 Page Not Found: 
ERROR - 2024-02-03 00:08:06 --> Severity: error --> Exception: Call to a member function rules() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 299
ERROR - 2024-02-03 00:13:01 --> 404 Page Not Found: 
ERROR - 2024-02-03 00:13:27 --> 404 Page Not Found: 
ERROR - 2024-02-03 00:14:54 --> 404 Page Not Found: 
ERROR - 2024-02-03 00:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: SELECT `tbl_pesanan`.*, `tbl_permintaan`.*, `tbl_supplier`.*, `tbl_jenis_faktur`.*
        FROM `tbl_pesanan` JOIN tbl_permintaan ON tbl_pesanan.id_permintaan = tbl_permintaan.id_permintaan 
        JOIN tbl_supplier ON tbl_pesanan.id_supplier = tbl_supplier.id_supplier
        JOIN tbl_jenis_faktur ON tbl_pesanan.id_jenis_faktur = tbl_jenis_faktur.id_jenis_faktur WHERE tbl_pesanan.nip=
ERROR - 2024-02-03 00:40:26 --> Query error: Duplicate entry '2147483647' for key 'PRIMARY' - Invalid query: INSERT INTO `tbl_user` (`nip`, `nama_pegawai`, `jabatan`, `unit`, `username`, `password`, `id_role`) VALUES ('198405132009042001', 'Rajif', 'Direktur', 'RSUD', 'rajif', '$2y$10$Dp2g7x/DD2Di047KskVOh.UvyZl2edydCtmHbs4IJoxnFNHUOubjy', '1')
ERROR - 2024-02-03 00:41:08 --> Query error: Duplicate entry '2147483647' for key 'PRIMARY' - Invalid query: INSERT INTO `tbl_user` (`nip`, `nama_pegawai`, `jabatan`, `unit`, `username`, `password`, `id_role`) VALUES ('1984051320090420031', 'Rajif', 'Direktur', 'RSUD', 'rajif', '$2y$10$8f7rVmuowgr1zePeiA3pU.gr91XvTOC4mcrLyCOuHubJaYKO68N2a', '0')
ERROR - 2024-02-03 00:41:30 --> Query error: Duplicate entry '2147483647' for key 'PRIMARY' - Invalid query: INSERT INTO `tbl_user` (`nip`, `nama_pegawai`, `jabatan`, `unit`, `username`, `password`, `id_role`) VALUES ('166302042222', 'Rajif', 'Direktur', 'RSUD', 'rajif', '$2y$10$8Jq7r0Ia3cpskycElT9gNOpZQPF1gkyuFdBPGMk7A9zi1Q3CukqJK', '0')
ERROR - 2024-02-03 01:06:51 --> Severity: error --> Exception: Too few arguments to function Faktur_model::getPembelianUser(), 0 passed in C:\xampp\htdocs\simba\application\controllers\User.php on line 29 and exactly 1 expected C:\xampp\htdocs\simba\application\models\Faktur_model.php 116
ERROR - 2024-02-03 01:21:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `status` = 'belum'' at line 6 - Invalid query: SELECT `tbl_faktur`.*, `tbl_pesanan`.*, `tbl_supplier`.*, `tbl_jenis_faktur`.*
        FROM `tbl_faktur` 
        JOIN `tbl_pesanan` ON `tbl_faktur`.`id_pesanan` = `tbl_pesanan`.`id_pesanan` 
        JOIN `tbl_supplier` ON `tbl_faktur`.`id_supplier` = `tbl_supplier`.`id_supplier`
        JOIN `tbl_jenis_faktur` ON `tbl_faktur`.`id_jenis_faktur` = `tbl_jenis_faktur`.`id_jenis_faktur` WHERE `tbl_faktur`.`nip`=13132
        WHERE `status` = 'belum'
ERROR - 2024-02-03 01:27:40 --> Query error: Column 'nip' in where clause is ambiguous - Invalid query: SELECT `tbl_faktur`.*, `tbl_pesanan`.*, `tbl_supplier`.*, `tbl_jenis_faktur`.*
        FROM `tbl_faktur` 
        JOIN `tbl_pesanan` ON `tbl_faktur`.`id_pesanan` = `tbl_pesanan`.`id_pesanan` 
        JOIN `tbl_supplier` ON `tbl_faktur`.`id_supplier` = `tbl_supplier`.`id_supplier`
        JOIN `tbl_jenis_faktur` ON `tbl_faktur`.`id_jenis_faktur` = `tbl_jenis_faktur`.`id_jenis_faktur` 
        WHERE `status` = 'belum' AND nip=13132 
ERROR - 2024-02-03 01:28:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE nip=13132' at line 6 - Invalid query: SELECT `tbl_faktur`.*, `tbl_pesanan`.*, `tbl_supplier`.*, `tbl_jenis_faktur`.*
        FROM `tbl_faktur` 
        JOIN `tbl_pesanan` ON `tbl_faktur`.`id_pesanan` = `tbl_pesanan`.`id_pesanan` 
        JOIN `tbl_supplier` ON `tbl_faktur`.`id_supplier` = `tbl_supplier`.`id_supplier`
        JOIN `tbl_jenis_faktur` ON `tbl_faktur`.`id_jenis_faktur` = `tbl_jenis_faktur`.`id_jenis_faktur` 
        WHERE `status` = 'belum' AND WHERE nip=13132 
ERROR - 2024-02-03 01:44:06 --> Query error: Duplicate entry '21435435' for key 'PRIMARY' - Invalid query: INSERT INTO `tbl_faktur` (`no_faktur`, `id_pesanan`, `id_supplier`, `id_jenis_faktur`, `tanggal_jatuh_tempo`, `tanggal_faktur`, `petugas_penerima`, `bukti_faktur`, `total_pembayaran`, `nip`, `unit`, `status`) VALUES ('21435435', '28', '2', '2', '2024-02-15', '2024-02-07', 'Hijra', NULL, '13000000', '5', ' Admin', 'Belum')
ERROR - 2024-02-03 02:03:16 --> Severity: error --> Exception: Call to a member function rules() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 299
ERROR - 2024-02-03 02:05:11 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:05:42 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 294
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Faktur_model.php 295
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Faktur_model.php 296
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 297
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: tanggal_jatuh_tempo C:\xampp\htdocs\simba\application\models\Faktur_model.php 298
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: tanggal_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 299
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: petugas_penerima C:\xampp\htdocs\simba\application\models\Faktur_model.php 300
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Faktur_model.php 304
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: total_pembayaran C:\xampp\htdocs\simba\application\models\Faktur_model.php 306
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Faktur_model.php 307
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Faktur_model.php 308
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 311
ERROR - 2024-02-03 02:06:21 --> Severity: Notice --> Undefined property: stdClass::$surat_pesanan C:\xampp\htdocs\simba\application\views\admin\e_faktur.php 44
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 294
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Faktur_model.php 295
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Faktur_model.php 296
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 297
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: tanggal_jatuh_tempo C:\xampp\htdocs\simba\application\models\Faktur_model.php 298
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: tanggal_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 299
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: petugas_penerima C:\xampp\htdocs\simba\application\models\Faktur_model.php 300
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Faktur_model.php 304
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: total_pembayaran C:\xampp\htdocs\simba\application\models\Faktur_model.php 306
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Faktur_model.php 307
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Faktur_model.php 308
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 311
ERROR - 2024-02-03 02:06:35 --> Severity: Notice --> Undefined property: stdClass::$surat_pesanan C:\xampp\htdocs\simba\application\views\admin\e_faktur.php 44
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 294
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Faktur_model.php 295
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Faktur_model.php 296
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 297
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: tanggal_jatuh_tempo C:\xampp\htdocs\simba\application\models\Faktur_model.php 298
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: tanggal_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 299
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: petugas_penerima C:\xampp\htdocs\simba\application\models\Faktur_model.php 300
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Faktur_model.php 304
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: total_pembayaran C:\xampp\htdocs\simba\application\models\Faktur_model.php 306
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Faktur_model.php 307
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Faktur_model.php 308
ERROR - 2024-02-03 02:07:01 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 311
ERROR - 2024-02-03 02:07:25 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:07:35 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 294
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Faktur_model.php 295
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Faktur_model.php 296
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 297
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: tanggal_jatuh_tempo C:\xampp\htdocs\simba\application\models\Faktur_model.php 298
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: tanggal_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 299
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: petugas_penerima C:\xampp\htdocs\simba\application\models\Faktur_model.php 300
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Faktur_model.php 304
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: total_pembayaran C:\xampp\htdocs\simba\application\models\Faktur_model.php 306
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Faktur_model.php 307
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Faktur_model.php 308
ERROR - 2024-02-03 02:07:58 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 311
ERROR - 2024-02-03 02:08:02 --> Severity: Notice --> Undefined index: file_var_name C:\xampp\htdocs\simba\application\models\Faktur_model.php 322
ERROR - 2024-02-03 02:08:03 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 294
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Faktur_model.php 295
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Faktur_model.php 296
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 297
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: tanggal_jatuh_tempo C:\xampp\htdocs\simba\application\models\Faktur_model.php 298
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: tanggal_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 299
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: petugas_penerima C:\xampp\htdocs\simba\application\models\Faktur_model.php 300
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Faktur_model.php 304
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: total_pembayaran C:\xampp\htdocs\simba\application\models\Faktur_model.php 306
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Faktur_model.php 307
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Faktur_model.php 308
ERROR - 2024-02-03 02:09:23 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 311
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 294
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Faktur_model.php 295
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Faktur_model.php 296
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 297
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: tanggal_jatuh_tempo C:\xampp\htdocs\simba\application\models\Faktur_model.php 298
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: tanggal_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 299
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: petugas_penerima C:\xampp\htdocs\simba\application\models\Faktur_model.php 300
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Faktur_model.php 304
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: total_pembayaran C:\xampp\htdocs\simba\application\models\Faktur_model.php 306
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Faktur_model.php 307
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Faktur_model.php 308
ERROR - 2024-02-03 02:09:24 --> Severity: Notice --> Undefined index: no_faktur C:\xampp\htdocs\simba\application\models\Faktur_model.php 311
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:09:38 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 35
ERROR - 2024-02-03 02:09:46 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:09:46 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:09:46 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:10:14 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:10:19 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:10:23 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:10:32 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:10:38 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:11:37 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:12:10 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:12:25 --> Severity: Notice --> Trying to get property 'id_pesanan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'id_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Uninitialized string offset: 0 C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Warning --> Illegal string offset 'surat_permintaan' C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:12:50 --> Severity: Notice --> Uninitialized string offset: 0 C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 39
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:13:04 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:13:41 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:13:49 --> Severity: Notice --> Undefined variable: id_permintaan C:\xampp\htdocs\simba\application\controllers\Admin.php 434
ERROR - 2024-02-03 02:13:49 --> Severity: Notice --> Undefined variable: JBarang C:\xampp\htdocs\simba\application\views\admin\t_pesanan.php 34
ERROR - 2024-02-03 02:13:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\simba\application\views\admin\t_pesanan.php 34
ERROR - 2024-02-03 02:15:04 --> Severity: Notice --> Undefined variable: id_permintaan C:\xampp\htdocs\simba\application\controllers\Admin.php 434
ERROR - 2024-02-03 02:15:04 --> Severity: Notice --> Undefined variable: JBarang C:\xampp\htdocs\simba\application\views\admin\t_pesanan.php 34
ERROR - 2024-02-03 02:15:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\simba\application\views\admin\t_pesanan.php 34
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:15:06 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:15:18 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:15:19 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:15:20 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:15:37 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:15:38 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:15:39 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:15:40 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:16:52 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:16:53 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:17:04 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:17:08 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:17:09 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:17:36 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:17:38 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:17:43 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:17:54 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:17:56 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:18:19 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:18:27 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:18:29 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:18:39 --> Severity: Notice --> Undefined index: file_var_name C:\xampp\htdocs\simba\application\models\Pesanan_model.php 190
ERROR - 2024-02-03 02:18:39 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:18:44 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:18:45 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:18:50 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:18:54 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:19:16 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:19:25 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:19:27 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 165
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: id_permintaan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 166
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: id_supplier C:\xampp\htdocs\simba\application\models\Pesanan_model.php 167
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: id_jenis_faktur C:\xampp\htdocs\simba\application\models\Pesanan_model.php 168
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: surat_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 169
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: uraian C:\xampp\htdocs\simba\application\models\Pesanan_model.php 170
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: tanggal_surat C:\xampp\htdocs\simba\application\models\Pesanan_model.php 171
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: nip C:\xampp\htdocs\simba\application\models\Pesanan_model.php 172
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: unit C:\xampp\htdocs\simba\application\models\Pesanan_model.php 173
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: old_file C:\xampp\htdocs\simba\application\models\Pesanan_model.php 177
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Undefined index: id_pesanan C:\xampp\htdocs\simba\application\models\Pesanan_model.php 179
ERROR - 2024-02-03 02:20:29 --> Severity: Notice --> Trying to get property 'id_permintaan' of non-object C:\xampp\htdocs\simba\application\views\admin\e_pesanan.php 37
ERROR - 2024-02-03 02:20:49 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:22:54 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:23:01 --> 404 Page Not Found: 
ERROR - 2024-02-03 02:24:43 --> 404 Page Not Found: 
