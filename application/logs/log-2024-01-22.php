<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-22 16:50:52 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:52:40 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:52:41 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:52:41 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:52:42 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:52:52 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:52:59 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:53:00 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:53:00 --> Severity: error --> Exception: Call to a member function getJenis() on null C:\xampp\htdocs\simba\application\controllers\Admin.php 263
ERROR - 2024-01-22 16:57:28 --> Severity: Compile Error --> Cannot declare class Permintaan_model, because the name is already in use C:\xampp\htdocs\simba\application\models\Jenis_model.php 64
ERROR - 2024-01-22 17:22:06 --> 404 Page Not Found: Admin/getJenisFaktur
ERROR - 2024-01-22 17:22:06 --> 404 Page Not Found: Admin/getJenisFaktur
ERROR - 2024-01-22 17:23:22 --> 404 Page Not Found: Admin/getJenisFaktur
ERROR - 2024-01-22 17:23:42 --> 404 Page Not Found: Admin/getJenisFaktur
ERROR - 2024-01-22 17:25:21 --> Query error: Column 'id_jenis_faktur' cannot be null - Invalid query: INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_permintaan`, `id_supplier`, `id_jenis_faktur`, `surat_pesanan`, `uraian`, `tanggal_surat`, `file_pesanan`) VALUES (NULL, '16', ' 2', NULL, '900/111/RSUD/2024', 'Pembelian obat pada PT. Blablabla', '2024-01-23', NULL)
ERROR - 2024-01-22 17:44:02 --> Query error: Column 'id_jenis_faktur' cannot be null - Invalid query: INSERT INTO `tbl_faktur` (`no_faktur`, `id_pesanan`, `id_supplier`, `id_jenis_faktur`, `tanggal_jatuh_tempo`, `tanggal_faktur`, `petugas_penerima`, `bukti_faktur`, `total_pembayaran`, `status`) VALUES ('2700000121231231', '27', ' 2', NULL, '2024-01-24', '2024-01-23', 'Gintoki', '6304151101990001_kartuAkun.pdf', '2700000', 'Belum')
ERROR - 2024-01-22 18:16:59 --> Query error: Unknown column 'tbl_permintaan.id_pesanan' in 'on clause' - Invalid query: SELECT `tbl_faktur`.*, `tbl_pesanan`.*, `tbl_supplier`.*, `tbl_jenis_faktur`.*, `tbl_permintaan`.*
              FROM `tbl_faktur`
              JOIN tbl_pesanan ON tbl_faktur.id_pesanan = tbl_pesanan.id_pesanan 
              JOIN tbl_supplier ON tbl_faktur.id_supplier = tbl_supplier.id_supplier
              JOIN tbl_jenis_faktur ON tbl_faktur.id_jenis_faktur = tbl_jenis_faktur.id_jenis_faktur
              JOIN tbl_permintaan ON tbl_pesanan.id_pesanan = tbl_permintaan.id_pesanan
ERROR - 2024-01-22 18:17:35 --> Query error: Unknown column 'tbl_permintaan.nama_kolom_permintaan' in 'field list' - Invalid query: SELECT `tbl_faktur`.*, `tbl_pesanan`.*, `tbl_supplier`.*, `tbl_jenis_faktur`.*, `tbl_permintaan`.*,
          `tbl_permintaan`.`nama_kolom_permintaan` AS `alias_permintaan`
          FROM `tbl_faktur`
          JOIN tbl_pesanan ON tbl_faktur.id_pesanan = tbl_pesanan.id_pesanan 
          JOIN tbl_supplier ON tbl_faktur.id_supplier = tbl_supplier.id_supplier
          JOIN tbl_jenis_faktur ON tbl_faktur.id_jenis_faktur = tbl_jenis_faktur.id_jenis_faktur
          JOIN tbl_permintaan ON tbl_pesanan.id_pesanan = tbl_permintaan.id_pesanan
ERROR - 2024-01-22 18:19:49 --> Query error: Unknown column 'tbl_pesanan.unit' in 'field list' - Invalid query: SELECT 
                    `tbl_faktur`.*, 
                    `tbl_pesanan`.*, 
                    `tbl_supplier`.*, 
                    `tbl_jenis_faktur`.*,
                    `tbl_pesanan`.`unit` AS `unit_pesanan`
                FROM 
                    `tbl_faktur` 
                JOIN 
                    `tbl_pesanan` ON `tbl_faktur`.`id_pesanan` = `tbl_pesanan`.`id_pesanan`
                JOIN 
                    `tbl_supplier` ON `tbl_faktur`.`id_supplier` = `tbl_supplier`.`id_supplier`
                JOIN 
                    `tbl_jenis_faktur` ON `tbl_faktur`.`id_jenis_faktur` = `tbl_jenis_faktur`.`id_jenis_faktur`
                LEFT JOIN 
                    `tbl_permintaan` ON `tbl_pesanan`.`id_pesanan` = `tbl_permintaan`.`id_pesanan`
