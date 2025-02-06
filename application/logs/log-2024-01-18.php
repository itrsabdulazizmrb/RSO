<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-18 14:07:39 --> Query error: Unknown column 'id_user' in 'where clause' - Invalid query: SELECT *
FROM `tbl_user`
WHERE `id_user` IS NULL
ERROR - 2024-01-18 14:15:54 --> Query error: Unknown column 'nama_user' in 'field list' - Invalid query: INSERT INTO `tbl_user` (`nip`, `nama_user`, `jabatan`, `unit`, `username`, `password`, `id_role`) VALUES ('16630204', 'Rajif', 'Kepala Ruangan', 'Teknologi Informasi', 'rajif', '$2y$10$/Z3jtBesDaO6C.1zC9QHHe4VHABb.LWIfyvrVUDly0rnKUEiDdUqa', '0')
ERROR - 2024-01-18 14:27:57 --> Query error: Table 'simba.tbl_barang' doesn't exist - Invalid query: SELECT `tbl_permintaan`.*, `tbl_barang`.*, `tbl_jenis_barang`.*, `tbl_user`.*
        FROM `tbl_permintaan` JOIN `tbl_barang` ON `tbl_permintaan`.`id_barang` = `tbl_barang`.`id_barang` 
        JOIN `tbl_jenis_barang` ON `tbl_barang`.`id_jenis_barang` = `tbl_jenis_barang`.`id_jenis_barang`
        JOIN tbl_user ON tbl_permintaan.id_user = tbl_user.id_user
ERROR - 2024-01-18 14:28:03 --> Query error: Table 'simba.tbl_barang' doesn't exist - Invalid query: SELECT `tbl_permintaan`.*, `tbl_barang`.*, `tbl_jenis_barang`.*, `tbl_user`.*
        FROM `tbl_permintaan` JOIN `tbl_barang` ON `tbl_permintaan`.`id_barang` = `tbl_barang`.`id_barang` 
        JOIN `tbl_jenis_barang` ON `tbl_barang`.`id_jenis_barang` = `tbl_jenis_barang`.`id_jenis_barang`
        JOIN tbl_user ON tbl_permintaan.id_user = tbl_user.id_user
ERROR - 2024-01-18 15:34:23 --> Query error: Table 'simba.tbl_barang' doesn't exist - Invalid query: SELECT *
FROM `tbl_barang`
ERROR - 2024-01-18 16:25:00 --> Query error: Column 'unit' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '1111', NULL, 'Anu kami ni handak blablabla', '2024-01-18', '4__SK_ASLI.pdf')
ERROR - 2024-01-18 16:26:07 --> Query error: Column 'unit' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '1111', NULL, 'Anu kami ni handak blablabla', '2024-01-18', '5__BUKTI_PEMBAYARAN_GAJI_ASLI.pdf')
ERROR - 2024-01-18 16:28:09 --> Query error: Column 'unit' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '1111', NULL, 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:29:13 --> Query error: Column 'unit' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '1111', NULL, 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:29:46 --> Query error: Column 'file_permintaan' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '1111', '1111', 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:29:56 --> Query error: Column 'file_permintaan' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '1111', '1111', 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:30:01 --> Query error: Column 'file_permintaan' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '1111', '', 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:30:27 --> Query error: Column 'file_permintaan' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '', '', 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:31:24 --> Query error: Column 'file_permintaan' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '', '', 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:31:28 --> Query error: Column 'file_permintaan' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '', '', 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:31:58 --> Query error: Column 'file_permintaan' cannot be null - Invalid query: INSERT INTO `tbl_permintaan` (`id_permintaan`, `surat_permintaan`, `id_supplier`, `nip`, `unit`, `rincian_permintaan`, `tanggal_permintaan`, `file_permintaan`) VALUES (NULL, '90/ssss', '1', '', '', 'Anu kami ni handak blablabla', '2024-01-18', NULL)
ERROR - 2024-01-18 16:35:58 --> 404 Page Not Found: Admin/permintaa
ERROR - 2024-01-18 16:35:59 --> 404 Page Not Found: Admin/permintaa
ERROR - 2024-01-18 17:01:50 --> 404 Page Not Found: Admin/editpermintaan
ERROR - 2024-01-18 17:01:55 --> 404 Page Not Found: Admin/editpermintaan
ERROR - 2024-01-18 17:02:02 --> 404 Page Not Found: Admin/editpermintaan
ERROR - 2024-01-18 17:17:12 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:17:37 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:17:40 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:18:02 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:18:24 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:18:53 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:18:56 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:18:57 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:19:18 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:19:53 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:19:55 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:20:20 --> 404 Page Not Found: 
ERROR - 2024-01-18 17:21:25 --> Query error: Table 'simba.tbl_barang' doesn't exist - Invalid query: SELECT `tbl_penerimaan`.*, `tbl_barang`.*, `tbl_jenis_barang`.*
        FROM `tbl_penerimaan` JOIN `tbl_barang` ON `tbl_penerimaan`.`id_barang` = `tbl_barang`.`id_barang` 
        JOIN `tbl_jenis_barang` ON `tbl_barang`.`id_jenis_barang` = `tbl_jenis_barang`.`id_jenis_barang`
ERROR - 2024-01-18 17:22:12 --> Query error: Table 'simba.tbl_barang' doesn't exist - Invalid query: SELECT `tbl_penerimaan`.*, `tbl_barang`.*, `tbl_jenis_barang`.*
        FROM `tbl_penerimaan` JOIN `tbl_barang` ON `tbl_penerimaan`.`id_barang` = `tbl_barang`.`id_barang` 
        JOIN `tbl_jenis_barang` ON `tbl_barang`.`id_jenis_barang` = `tbl_jenis_barang`.`id_jenis_barang`
ERROR - 2024-01-18 18:09:43 --> 404 Page Not Found: Controller_pesanan/get_supplier_by_permintaan
ERROR - 2024-01-18 18:09:44 --> 404 Page Not Found: Controller_pesanan/get_supplier_by_permintaan
ERROR - 2024-01-18 18:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: SELECT `tbl_supplier`.`nama_supplier`
                FROM `tbl_permintaan`
                LEFT JOIN `tbl_supplier` ON `tbl_permintaan`.`id_supplier` = `tbl_supplier`.`id_supplier`
                WHERE `tbl_permintaan`.`id_permintaan` = 
ERROR - 2024-01-18 18:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: SELECT `tbl_supplier`.`nama_supplier`
                FROM `tbl_permintaan`
                LEFT JOIN `tbl_supplier` ON `tbl_permintaan`.`id_supplier` = `tbl_supplier`.`id_supplier`
                WHERE `tbl_permintaan`.`id_permintaan` = 
ERROR - 2024-01-18 18:18:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: SELECT `tbl_supplier`.`nama_supplier`
                FROM `tbl_permintaan`
                LEFT JOIN `tbl_supplier` ON `tbl_permintaan`.`id_supplier` = `tbl_supplier`.`id_supplier`
                WHERE `tbl_permintaan`.`id_permintaan` = 
ERROR - 2024-01-18 18:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: SELECT tbl_supplier.nama_supplier
                  FROM tbl_permintaan
                  LEFT JOIN tbl_supplier ON tbl_permintaan.id_supplier = tbl_supplier.id_supplier
                  WHERE tbl_permintaan.id_permintaan = 
ERROR - 2024-01-18 18:21:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: SELECT `tbl_supplier`.`nama_supplier`
                  FROM `tbl_permintaan`
                  LEFT JOIN `tbl_supplier` ON `tbl_permintaan`.`id_supplier` = `tbl_supplier`.`id_supplier`
                  WHERE `tbl_permintaan`.`id_permintaan` = 
ERROR - 2024-01-18 18:21:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: SELECT `tbl_supplier`.`nama_supplier`
                  FROM `tbl_permintaan`
                  LEFT JOIN `tbl_supplier` ON `tbl_permintaan`.`id_supplier` = `tbl_supplier`.`id_supplier`
                  WHERE `tbl_permintaan`.`id_permintaan` = 
ERROR - 2024-01-18 18:33:02 --> Query error: Column 'file_pesanan' cannot be null - Invalid query: INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_permintaan`, `id_supplier`, `surat_pesanan`, `uraian`, `tanggal_surat`, `file_pesanan`) VALUES (NULL, '13', ' PT. Graha Jaya Utama', '900/111/RSUD/2023', 'Pembelian obat pada PT. Blablabla', '2024-01-19', NULL)
ERROR - 2024-01-18 18:33:35 --> Query error: Column 'file_pesanan' cannot be null - Invalid query: INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_permintaan`, `id_supplier`, `surat_pesanan`, `uraian`, `tanggal_surat`, `file_pesanan`) VALUES (NULL, '13', ' PT. Graha Jaya Utama', '900/111/RSUD/2023', 'Pembelian obat pada PT. Blablabla', '2024-01-19', NULL)
ERROR - 2024-01-18 18:33:50 --> Query error: Column 'file_pesanan' cannot be null - Invalid query: INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_permintaan`, `id_supplier`, `surat_pesanan`, `uraian`, `tanggal_surat`, `file_pesanan`) VALUES (NULL, '13', ' PT. Graha Jaya Utama', '900/111/RSUD/2023', 'Pembelian obat pada PT. Blablabla', '2024-01-19', NULL)
ERROR - 2024-01-18 18:33:58 --> Query error: Column 'file_pesanan' cannot be null - Invalid query: INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_permintaan`, `id_supplier`, `surat_pesanan`, `uraian`, `tanggal_surat`, `file_pesanan`) VALUES (NULL, '13', ' PT. Graha Jaya Utama', '900/111/RSUD/2023', 'Pembelian obat pada PT. Blablabla', '2024-01-19', NULL)
ERROR - 2024-01-18 18:37:55 --> Query error: Column 'file_pesanan' cannot be null - Invalid query: INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_permintaan`, `id_supplier`, `surat_pesanan`, `uraian`, `tanggal_surat`, `file_pesanan`) VALUES (NULL, '13', ' PT. Graha Jaya Utama', 'Zazazaza', 'Pembelian obat', '2024-01-18', NULL)
ERROR - 2024-01-18 18:38:12 --> Query error: Column 'file_pesanan' cannot be null - Invalid query: INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_permintaan`, `id_supplier`, `surat_pesanan`, `uraian`, `tanggal_surat`, `file_pesanan`) VALUES (NULL, '12', ' PT. Graha Jaya Utama', 'Zazazaza', 'Pembelian obat', '2024-01-19', NULL)
ERROR - 2024-01-18 18:59:28 --> Severity: error --> Exception: Call to undefined method Pesanan_model::getSupplierName() C:\xampp\htdocs\simba\application\controllers\Admin.php 556
ERROR - 2024-01-18 19:05:52 --> 404 Page Not Found: Admin/getSupplierName
