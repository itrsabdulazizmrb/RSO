<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-31 01:33:58 --> Severity: error --> Exception: Too few arguments to function Admin::detailfaktur(), 0 passed in C:\xampp\htdocs\simba\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\simba\application\controllers\Admin.php 604
ERROR - 2023-10-31 02:06:50 --> 404 Page Not Found: Admin/barangmasuk
ERROR - 2023-10-31 02:22:13 --> 404 Page Not Found: Admin/barangmasuk
ERROR - 2023-10-31 02:36:10 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: UPDATE `tbl_detail_faktur` SET `id_barang` = NULL, `no_faktur` = NULL, `nama_barang` = NULL, `jumlah` = NULL, `satuan` = NULL, `no_batch` = NULL, `expired` = NULL, `harga` = NULL, `diskon` = NULL, `total` = NULL, `status` = NULL
WHERE `id` IS NULL
ERROR - 2023-10-31 02:36:51 --> 404 Page Not Found: 
ERROR - 2023-10-31 04:20:34 --> 404 Page Not Found: Admin/barangmasuk
ERROR - 2023-10-31 04:24:58 --> 404 Page Not Found: 
ERROR - 2023-10-31 04:25:59 --> 404 Page Not Found: Admin/barangmasuk
ERROR - 2023-10-31 05:00:54 --> Query error: Table 'simba.detail_faktur' doesn't exist - Invalid query: SELECT SUM(`harga`) AS `total_harga`
FROM `detail_faktur`
WHERE `no_faktur` = '1101199991412100'
ERROR - 2023-10-31 05:01:14 --> Query error: Unknown column 'id_barang' in 'field list' - Invalid query: UPDATE `tbl_faktur` SET `total_hutang` = '9740001', `id_barang` = NULL, `no_faktur` = '1101199991412100', `nama_barang` = 'Obat', `jumlah` = '100', `satuan` = 'Kapsul', `no_batch` = '091090201909', `expired` = '2023-10-31', `harga` = '20000', `diskon` = '10', `total` = '1800000', `status` = 'belum'
WHERE `no_faktur` = '1101199991412100'
AND `no_faktur` IS NULL
ERROR - 2023-10-31 05:02:14 --> Query error: Unknown column 'nama_barang' in 'field list' - Invalid query: UPDATE `tbl_faktur` SET `total_hutang` = '9760001', `id_barang` = NULL, `no_faktur` = '1101199991412100', `nama_barang` = 'Obat', `jumlah` = '100', `satuan` = 'Kapsul', `no_batch` = '091090201909', `expired` = '2023-10-31', `harga` = '20000', `diskon` = '10', `total` = '1800000', `status` = 'belum'
WHERE `no_faktur` = '1101199991412100'
AND `no_faktur` IS NULL
ERROR - 2023-10-31 05:02:45 --> Query error: Table 'simba.detail_faktur' doesn't exist - Invalid query: SELECT SUM(`harga`) AS `total_harga`
FROM `detail_faktur`
WHERE `no_faktur` = '1101199991412100'
ERROR - 2023-10-31 05:03:39 --> 404 Page Not Found: Admin/barangmasuk
ERROR - 2023-10-31 05:32:05 --> Severity: error --> Exception: Call to undefined method Detailfaktur_model::getBarangById() C:\xampp\htdocs\simba\application\models\Detailfaktur_model.php 117
ERROR - 2023-10-31 05:32:45 --> Severity: error --> Exception: Call to undefined method Detailfaktur_model::getBarangById() C:\xampp\htdocs\simba\application\models\Detailfaktur_model.php 117
ERROR - 2023-10-31 05:35:21 --> Severity: error --> Exception: Call to undefined method Detailfaktur_model::getBarangById() C:\xampp\htdocs\simba\application\models\Detailfaktur_model.php 117
ERROR - 2023-10-31 05:35:25 --> Severity: error --> Exception: Call to undefined method Detailfaktur_model::getBarangById() C:\xampp\htdocs\simba\application\models\Detailfaktur_model.php 117
ERROR - 2023-10-31 05:36:03 --> Severity: error --> Exception: Call to undefined method Detailfaktur_model::getFakturByNoFaktur() C:\xampp\htdocs\simba\application\models\Detailfaktur_model.php 125
ERROR - 2023-10-31 05:37:09 --> Query error: Table 'simba.faktur' doesn't exist - Invalid query: SELECT *
FROM `faktur`
WHERE `no_faktur` IS NULL
ERROR - 2023-10-31 05:37:27 --> Query error: Table 'simba.faktur' doesn't exist - Invalid query: SELECT *
FROM `faktur`
WHERE `no_faktur` IS NULL
ERROR - 2023-10-31 05:37:53 --> Query error: Table 'simba.faktur' doesn't exist - Invalid query: SELECT *
FROM `faktur`
WHERE `no_faktur` IS NULL
ERROR - 2023-10-31 05:40:47 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\simba\application\models\Detailfaktur_model.php 128
ERROR - 2023-10-31 06:10:58 --> Query error: Unknown column 'status' in 'field list' - Invalid query: INSERT INTO `tbl_detail_faktur` (`id_barang`, `no_faktur`, `nama_barang`, `jumlah`, `satuan`, `no_batch`, `expired`, `harga`, `diskon`, `total`, `status`) VALUES (NULL, '0998989898998989', 'Obat', '100', 'Kapsul', '091090201909', '', '50000', '10', '4500000', NULL)
ERROR - 2023-10-31 06:11:15 --> Query error: Unknown column 'status' in 'field list' - Invalid query: INSERT INTO `tbl_detail_faktur` (`id_barang`, `no_faktur`, `nama_barang`, `jumlah`, `satuan`, `no_batch`, `expired`, `harga`, `diskon`, `total`, `status`) VALUES (NULL, '0998989898998989', 'Obat', '100', 'Kapsul', '091090201909', '', '50000', '10', '4500000', NULL)
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/css
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:29:58 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:30:18 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:30:42 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:31:00 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:03 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:24 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:49:34 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:51:22 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/vendor
ERROR - 2023-10-31 06:51:26 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-31 06:51:49 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:51:50 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:51:56 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:52:00 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 06:52:05 --> 404 Page Not Found: Admin/img
ERROR - 2023-10-31 07:47:26 --> Severity: error --> Exception: Call to undefined method Faktur_model::getPembayaran() C:\xampp\htdocs\simba\application\controllers\Admin.php 28
ERROR - 2023-10-31 07:58:38 --> Query error: Table 'simba.faktur' doesn't exist - Invalid query: SELECT COUNT(*) as total_faktur FROM faktur
