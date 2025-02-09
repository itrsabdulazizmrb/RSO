<?php defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
    private $_table = "reg_periksa";

    public $tanggal_periksa;    
    public $no_rkm_medis;    
    public $nomor_kartu;    
    public $nomor_referensi;    
    public $jenis_kunjungan;    
    public $status_kirim;    
    public $keterangan;    

    public function rules()
    {
        
        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_inventaris)
    {
        return $this->db->get_where($this->_table, ["id_inventaris" => $id_inventaris])->row();
    }

    public function getRajal()
{
    $query = "SELECT
                r.no_rkm_medis AS NRM,
                r.stts_daftar AS Pengunjung,
                rm.perujuk AS cara_masuk,
                r.tgl_registrasi AS Tanggal_Pendaftaran,
                px.nm_pasien AS nama,
                px.jk AS jenis_kelamin,
                DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
                px.alamat AS Alamat,
                px.kecamatanpj AS kecamatan,
                px.kabupatenpj AS kabupaten,
                px.propinsipj AS provinsi,
                GROUP_CONCAT(dpx.kd_penyakit SEPARATOR ';') AS diagnosa,
                GROUP_CONCAT(ppx.kode SEPARATOR ';') AS tindakan,
                rj.rujuk_ke AS cara_keluar,
                d.nm_dokter AS DPJP,
                pj.png_jawab AS Pembayaran,
                p.nm_poli AS Poli,
                r.status_poli AS Kunjungan
                FROM reg_periksa r
                LEFT JOIN dokter d ON r.kd_dokter = d.kd_dokter
                LEFT JOIN poliklinik p ON r.kd_poli = p.kd_poli
                LEFT JOIN pasien px ON r.no_rkm_medis = px.no_rkm_medis
                LEFT JOIN penjab pj ON r.kd_pj = pj.kd_pj
                LEFT JOIN diagnosa_pasien dpx ON r.no_rawat = dpx.no_rawat
                LEFT JOIN prosedur_pasien ppx ON r.no_rawat = ppx.no_rawat
                LEFT JOIN rujuk_masuk rm ON r.no_rawat = rm.no_rawat
                LEFT JOIN rujuk rj ON r.no_rawat = rj.no_rawat
                WHERE MONTH(r.tgl_registrasi) = MONTH(CURDATE())
                AND YEAR(r.tgl_registrasi) = YEAR(CURDATE())
                AND r.status_lanjut = 'ralan'
                GROUP BY r.no_rawat";

        return $this->db->query($query)->result_array();
    }

    public function getRanap()
    {
        $query = "SELECT
        r.no_rkm_medis AS NRM,
                    r.stts_daftar AS Pengunjung,
                    rm.perujuk AS cara_masuk,
                    r.tgl_registrasi AS Tanggal_Pendaftaran,
                    px.nm_pasien AS nama,
                    px.jk AS jenis_kelamin,
                    ki.stts_pulang AS stts_pulang,  
                    ki.tgl_masuk AS Tanggal_masuk,
                    ki.tgl_keluar AS Tanggal_keluar,
                    DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
                    px.alamat AS Alamat,
                    px.kecamatanpj AS kecamatan,
                    px.kabupatenpj AS kabupaten,
                    px.propinsipj AS provinsi,
                    GROUP_CONCAT(dpx.kd_penyakit SEPARATOR ';') AS diagnosa,
                    GROUP_CONCAT(ppx.kode SEPARATOR ';') AS tindakan,
                    rj.rujuk_ke AS cara_keluar,
                    d.nm_dokter AS DPJP,
                    pj.png_jawab AS Pembayaran,
                    p.nm_poli AS Poli,
                    r.status_poli AS Kunjungan,
                    b.nm_bangsal as ruang,
                    k.kelas as kelas
                FROM reg_periksa r
                LEFT JOIN dokter d ON r.kd_dokter = d.kd_dokter
                LEFT JOIN poliklinik p ON r.kd_poli = p.kd_poli
                LEFT JOIN pasien px ON r.no_rkm_medis = px.no_rkm_medis
                LEFT JOIN penjab pj ON r.kd_pj = pj.kd_pj
                LEFT JOIN diagnosa_pasien dpx ON r.no_rawat = dpx.no_rawat
                LEFT JOIN prosedur_pasien ppx ON r.no_rawat = ppx.no_rawat
                LEFT JOIN rujuk_masuk rm ON r.no_rawat = rm.no_rawat
                LEFT JOIN rujuk rj ON r.no_rawat = rj.no_rawat
                LEFT JOIN kamar_inap ki ON r.no_rawat = ki.no_rawat
                LEFT JOIN kamar k ON ki.kd_kamar = k.kd_kamar
                LEFT JOIN bangsal b ON k.kd_bangsal = b.kd_bangsal
                WHERE MONTH(r.tgl_registrasi) = MONTH(CURDATE())
                AND YEAR(r.tgl_registrasi) = YEAR(CURDATE())
                AND r.status_lanjut = 'ranap'
                GROUP BY r.no_rawat";

        return $this->db->query($query)->result_array();
    }

    public function getRL35()
    {
        $query = "
            SELECT 
            p.nm_poli,
            SUM(CASE WHEN pasien.jk = 'L' AND NOT EXISTS (
                SELECT 1 FROM reg_periksa r2
                WHERE r2.no_rkm_medis = rp.no_rkm_medis 
                AND r2.kd_poli = rp.kd_poli
                AND MONTH(r2.tgl_registrasi) = MONTH(CURDATE()) 
                AND YEAR(r2.tgl_registrasi) = YEAR(CURDATE()) 
                AND r2.tgl_registrasi < rp.tgl_registrasi
            ) THEN 1 ELSE 0 END) AS jk_L_baru,

            SUM(CASE WHEN pasien.jk = 'P' AND NOT EXISTS (
                SELECT 1 FROM reg_periksa r2
                WHERE r2.no_rkm_medis = rp.no_rkm_medis 
                AND r2.kd_poli = rp.kd_poli
                AND MONTH(r2.tgl_registrasi) = MONTH(CURDATE()) 
                AND YEAR(r2.tgl_registrasi) = YEAR(CURDATE()) 
                AND r2.tgl_registrasi < rp.tgl_registrasi
            ) THEN 1 ELSE 0 END) AS jk_P_baru,

            SUM(CASE WHEN pasien.jk = 'L' AND EXISTS (
                SELECT 1 FROM reg_periksa r2
                WHERE r2.no_rkm_medis = rp.no_rkm_medis 
                AND r2.kd_poli = rp.kd_poli
                AND MONTH(r2.tgl_registrasi) = MONTH(CURDATE()) 
                AND YEAR(r2.tgl_registrasi) = YEAR(CURDATE()) 
                AND r2.tgl_registrasi < rp.tgl_registrasi
            ) THEN 1 ELSE 0 END) AS jk_L_lama,

            SUM(CASE WHEN pasien.jk = 'P' AND EXISTS (
                SELECT 1 FROM reg_periksa r2
                WHERE r2.no_rkm_medis = rp.no_rkm_medis 
                AND r2.kd_poli = rp.kd_poli
                AND MONTH(r2.tgl_registrasi) = MONTH(CURDATE()) 
                AND YEAR(r2.tgl_registrasi) = YEAR(CURDATE()) 
                AND r2.tgl_registrasi < rp.tgl_registrasi
            ) THEN 1 ELSE 0 END) AS jk_P_lama

        FROM reg_periksa rp
        JOIN poliklinik p ON rp.kd_poli = p.kd_poli
        JOIN pasien ON rp.no_rkm_medis = pasien.no_rkm_medis
        WHERE MONTH(rp.tgl_registrasi) = MONTH(CURDATE()) 
        AND YEAR(rp.tgl_registrasi) = YEAR(CURDATE())
        GROUP BY p.nm_poli
        ORDER BY p.nm_poli;
        ";
        return $this->db->query($query)->result();
    }

    public function getRL310()
    {
        $query = "
        SELECT 
            bs.nmpolitujuan AS Nama_Poli,
            COUNT(*) AS Total_Rujukan,
            bs.nmppkrujukan AS Asal_Rujukan
        FROM bridging_sep bs
        WHERE MONTH(bs.tglrujukan) = MONTH(CURDATE())
        AND YEAR(bs.tglrujukan) = YEAR(CURDATE())
        GROUP BY bs.nmpolitujuan, bs.nmppkrujukan
        ORDER BY bs.nmpolitujuan, Total_Rujukan DESC;
        ";
        return $this->db->query($query)->result();
    }

    public function getRL38()
    {
        $query = "
            SELECT 
                jpl.kd_jenis_prw,
                jpl.nm_perawatan AS nama_tindakan,
                COUNT(*) AS total_tindakan,
                COUNT(CASE WHEN ps.jk = 'L' THEN 1 END) AS jumlah_L,
                COUNT(CASE WHEN ps.jk = 'P' THEN 1 END) AS jumlah_P
            FROM periksa_lab pl
            INNER JOIN jns_perawatan_lab jpl 
                ON pl.kd_jenis_prw = jpl.kd_jenis_prw 
            INNER JOIN reg_periksa rp 
                ON pl.no_rawat = rp.no_rawat
            INNER JOIN pasien ps 
                ON rp.no_rkm_medis = ps.no_rkm_medis
            WHERE MONTH(pl.tgl_periksa) = MONTH(CURDATE())
            AND YEAR(pl.tgl_periksa) = YEAR(CURDATE())
            GROUP BY jpl.kd_jenis_prw, jpl.nm_perawatan;
        ";
    
        return $this->db->query($query)->result();
    }
    
    public function getRL41()
    {
        $query = "
            SELECT 
                dp.kd_penyakit,
                SUBSTRING(p.nm_penyakit,1,80) AS nm_penyakit,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar < 1 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS jam_lt1_L,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar < 1 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS jam_lt1_P,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar BETWEEN 1 AND 23 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS jam_1_23_L,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar BETWEEN 1 AND 23 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS jam_1_23_P,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 1 AND 7 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS hari_1_7_L,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 1 AND 7 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS hari_1_7_P,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 8 AND 28 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS hari_8_28_L,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 8 AND 28 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS hari_8_28_P,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar < 3 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS bln_lt3_L,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar < 3 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS bln_lt3_P,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 3 AND 5 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS bln_3_5_L,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 3 AND 5 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS bln_3_5_P,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 6 AND 11 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS bln_6_11_L,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 6 AND 11 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS bln_6_11_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 1 AND 4 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_1_4_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 1 AND 4 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_1_4_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 5 AND 9 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_5_9_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 5 AND 9 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_5_9_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 10 AND 14 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_10_14_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 10 AND 14 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_10_14_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 15 AND 19 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_15_19_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 15 AND 19 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_15_19_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 20 AND 24 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_20_24_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 20 AND 24 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_20_24_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 25 AND 29 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_25_29_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 25 AND 29 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_25_29_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 30 AND 34 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_30_34_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 30 AND 34 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_30_34_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 35 AND 39 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_35_39_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 35 AND 39 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_35_39_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 40 AND 44 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_40_44_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 40 AND 44 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_40_44_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 45 AND 49 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_45_49_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 45 AND 49 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_45_49_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 50 AND 54 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_50_54_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 50 AND 54 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_50_54_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 55 AND 59 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_55_59_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 55 AND 59 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_55_59_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 60 AND 64 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_60_64_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 60 AND 64 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_60_64_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 65 AND 69 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_65_69_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 65 AND 69 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_65_69_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 70 AND 74 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_70_74_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 70 AND 74 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_70_74_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 75 AND 79 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_75_79_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 75 AND 79 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_75_79_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 80 AND 84 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_80_84_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 80 AND 84 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_80_84_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar >= 85 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_85_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar >= 85 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_85_P,

                SUM(CASE 
                        WHEN FIND_IN_SET(dp.kd_penyakit, REPLACE(ki.diagnosa_akhir, ' ', '')) > 0 
                        AND ki.stts_pulang LIKE '%Meninggal%' 
                        THEN 1 ELSE 0 
                    END) AS mati

                FROM diagnosa_pasien dp
                JOIN penyakit p ON dp.kd_penyakit = p.kd_penyakit
                JOIN reg_periksa rp ON rp.no_rawat = dp.no_rawat
                JOIN pasien ps ON rp.no_rkm_medis = ps.no_rkm_medis
                JOIN kamar_inap ki ON rp.no_rawat = ki.no_rawat
                WHERE dp.status = 'Ranap'
                AND YEAR(rp.tgl_registrasi) = YEAR(CURDATE())
                AND LEFT(dp.kd_penyakit,1) NOT IN ('V', 'W', 'X', 'Y') -- Mengecualikan kode penyebab eksternal
                GROUP BY dp.kd_penyakit
                ORDER BY dp.kd_penyakit;
        ";
        return $this->db->query($query)->result();
    }

    public function getRL41Ralan()
    {
        $query = "
            SELECT 
                dp.kd_penyakit,
                SUBSTRING(p.nm_penyakit,1,80) AS nm_penyakit,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar < 1 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS jam_lt1_L,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar < 1 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS jam_lt1_P,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar BETWEEN 1 AND 23 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS jam_1_23_L,
                SUM(CASE WHEN rp.sttsumur = 'Jam' AND rp.umurdaftar BETWEEN 1 AND 23 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS jam_1_23_P,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 1 AND 7 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS hari_1_7_L,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 1 AND 7 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS hari_1_7_P,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 8 AND 28 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS hari_8_28_L,
                SUM(CASE WHEN rp.sttsumur = 'Hr' AND rp.umurdaftar BETWEEN 8 AND 28 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS hari_8_28_P,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar < 3 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS bln_lt3_L,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar < 3 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS bln_lt3_P,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 3 AND 5 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS bln_3_5_L,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 3 AND 5 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS bln_3_5_P,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 6 AND 11 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS bln_6_11_L,
                SUM(CASE WHEN rp.sttsumur = 'Bl' AND rp.umurdaftar BETWEEN 6 AND 11 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS bln_6_11_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 1 AND 4 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_1_4_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 1 AND 4 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_1_4_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 5 AND 9 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_5_9_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 5 AND 9 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_5_9_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 10 AND 14 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_10_14_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 10 AND 14 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_10_14_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 15 AND 19 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_15_19_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 15 AND 19 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_15_19_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 20 AND 24 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_20_24_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 20 AND 24 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_20_24_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 25 AND 29 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_25_29_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 25 AND 29 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_25_29_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 30 AND 34 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_30_34_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 30 AND 34 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_30_34_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 35 AND 39 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_35_39_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 35 AND 39 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_35_39_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 40 AND 44 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_40_44_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 40 AND 44 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_40_44_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 45 AND 49 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_45_49_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 45 AND 49 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_45_49_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 50 AND 54 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_50_54_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 50 AND 54 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_50_54_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 55 AND 59 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_55_59_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 55 AND 59 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_55_59_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 60 AND 64 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_60_64_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 60 AND 64 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_60_64_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 65 AND 69 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_65_69_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 65 AND 69 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_65_69_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 70 AND 74 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_70_74_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 70 AND 74 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_70_74_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 75 AND 79 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_75_79_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 75 AND 79 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_75_79_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 80 AND 84 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_80_84_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar BETWEEN 80 AND 84 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_80_84_P,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar >= 85 AND ps.jk = 'L' THEN 1 ELSE 0 END) AS th_85_L,
                SUM(CASE WHEN rp.sttsumur = 'Th' AND rp.umurdaftar >= 85 AND ps.jk = 'P' THEN 1 ELSE 0 END) AS th_85_P,

                COUNT(pm.no_rkm_medis) AS mati

            FROM diagnosa_pasien dp
            JOIN penyakit p ON dp.kd_penyakit = p.kd_penyakit
            JOIN reg_periksa rp ON rp.no_rawat = dp.no_rawat
            JOIN pasien ps ON rp.no_rkm_medis = ps.no_rkm_medis
            LEFT JOIN pasien_mati pm ON pm.no_rkm_medis = ps.no_rkm_medis
            WHERE dp.status = 'Ralan'
            AND MONTH(rp.tgl_registrasi) = MONTH(CURDATE())
            AND YEAR(rp.tgl_registrasi) = YEAR(CURDATE())
            AND LEFT(dp.kd_penyakit,1) NOT IN ('V', 'W', 'X', 'Y')
            GROUP BY dp.kd_penyakit
            ORDER BY dp.kd_penyakit;

             ";
        return $this->db->query($query)->result();
    }

    public function rajal_view_by_date($date1, $date2)
    {
        $this->db->select('
            r.no_rkm_medis AS NRM,
            r.stts_daftar AS Pengunjung,
            rm.perujuk AS cara_masuk,
            r.tgl_registrasi AS Tanggal_Pendaftaran,
            px.nm_pasien AS nama,
            px.jk AS jenis_kelamin,
            DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
            px.alamat AS Alamat,
            px.kecamatanpj AS kecamatan,
            px.kabupatenpj AS kabupaten,
            px.propinsipj AS provinsi,
            GROUP_CONCAT(dpx.kd_penyakit SEPARATOR ";") AS diagnosa,
            GROUP_CONCAT(ppx.kode SEPARATOR ";") AS tindakan,
            rj.rujuk_ke AS cara_keluar,
            d.nm_dokter AS DPJP,
            pj.png_jawab AS Pembayaran,
            p.nm_poli AS Poli,
            r.status_poli AS Kunjungan
        ');
        $this->db->from('reg_periksa r');
        $this->db->join('dokter d', 'r.kd_dokter = d.kd_dokter', 'left');
        $this->db->join('poliklinik p', 'r.kd_poli = p.kd_poli', 'left');
        $this->db->join('pasien px', 'r.no_rkm_medis = px.no_rkm_medis', 'left');
        $this->db->join('penjab pj', 'r.kd_pj = pj.kd_pj', 'left');
        $this->db->join('diagnosa_pasien dpx', 'r.no_rawat = dpx.no_rawat', 'left');
        $this->db->join('prosedur_pasien ppx', 'r.no_rawat = ppx.no_rawat', 'left');
        $this->db->join('rujuk_masuk rm', 'r.no_rawat = rm.no_rawat', 'left');
        $this->db->join('rujuk rj', 'r.no_rawat = rj.no_rawat', 'left');
        $this->db->where('r.tgl_registrasi >=', $date1);
        $this->db->where('r.tgl_registrasi <=', $date2);
        $this->db->where('r.status_lanjut', 'ralan');
        $this->db->group_by('r.no_rawat');
    
        return $this->db->get()->result_array();
    }
        
        public function rajal_view_by_month($month, $year)
        {
            $this->db->select('
                r.no_rkm_medis AS NRM,
                r.stts_daftar AS Pengunjung,
                rm.perujuk AS cara_masuk,
                r.tgl_registrasi AS Tanggal_Pendaftaran,
                px.nm_pasien AS nama,
                px.jk AS jenis_kelamin,
                DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
                px.alamat AS Alamat,
                px.kecamatanpj AS kecamatan,
                px.kabupatenpj AS kabupaten,
                px.propinsipj AS provinsi,
                GROUP_CONCAT(dpx.kd_penyakit SEPARATOR ";") AS diagnosa,
                GROUP_CONCAT(ppx.kode SEPARATOR ";") AS tindakan,
                rj.rujuk_ke AS cara_keluar,
                d.nm_dokter AS DPJP,
                pj.png_jawab AS Pembayaran,
                p.nm_poli AS Poli,
                r.status_poli AS Kunjungan
            ');
            $this->db->from('reg_periksa r');
            $this->db->join('dokter d', 'r.kd_dokter = d.kd_dokter', 'left');
            $this->db->join('poliklinik p', 'r.kd_poli = p.kd_poli', 'left');
            $this->db->join('pasien px', 'r.no_rkm_medis = px.no_rkm_medis', 'left');
            $this->db->join('penjab pj', 'r.kd_pj = pj.kd_pj', 'left');
            $this->db->join('diagnosa_pasien dpx', 'r.no_rawat = dpx.no_rawat', 'left');
            $this->db->join('prosedur_pasien ppx', 'r.no_rawat = ppx.no_rawat', 'left');
            $this->db->join('rujuk_masuk rm', 'r.no_rawat = rm.no_rawat', 'left');
            $this->db->join('rujuk rj', 'r.no_rawat = rj.no_rawat', 'left');
            $this->db->where('MONTH(r.tgl_registrasi)', $month);
            $this->db->where('YEAR(r.tgl_registrasi)', $year);
            $this->db->where('r.status_lanjut', 'ralan');
            $this->db->group_by('r.no_rawat');
        
            return $this->db->get()->result_array();
        }

        public function rajal_view_by_year($year)
        {
            $this->db->select('
                r.no_rkm_medis AS NRM,
                r.stts_daftar AS Pengunjung,
                rm.perujuk AS cara_masuk,
                r.tgl_registrasi AS Tanggal_Pendaftaran,
                px.nm_pasien AS nama,
                px.jk AS jenis_kelamin,
                DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
                px.alamat AS Alamat,
                px.kecamatanpj AS kecamatan,
                px.kabupatenpj AS kabupaten,
                px.propinsipj AS provinsi,
                GROUP_CONCAT(dpx.kd_penyakit SEPARATOR ";") AS diagnosa,
                GROUP_CONCAT(ppx.kode SEPARATOR ";") AS tindakan,
                rj.rujuk_ke AS cara_keluar,
                d.nm_dokter AS DPJP,
                pj.png_jawab AS Pembayaran,
                p.nm_poli AS Poli,
                r.status_poli AS Kunjungan
            ');
            $this->db->from('reg_periksa r');
            $this->db->join('dokter d', 'r.kd_dokter = d.kd_dokter', 'left');
            $this->db->join('poliklinik p', 'r.kd_poli = p.kd_poli', 'left');
            $this->db->join('pasien px', 'r.no_rkm_medis = px.no_rkm_medis', 'left');
            $this->db->join('penjab pj', 'r.kd_pj = pj.kd_pj', 'left');
            $this->db->join('diagnosa_pasien dpx', 'r.no_rawat = dpx.no_rawat', 'left');
            $this->db->join('prosedur_pasien ppx', 'r.no_rawat = ppx.no_rawat', 'left');
            $this->db->join('rujuk_masuk rm', 'r.no_rawat = rm.no_rawat', 'left');
            $this->db->join('rujuk rj', 'r.no_rawat = rj.no_rawat', 'left');
            $this->db->where('YEAR(r.tgl_registrasi)', $year);
            $this->db->where('r.status_lanjut', 'ralan');
            $this->db->group_by('r.no_rawat');

            return $this->db->get()->result_array();
        }
       
        public function rajal_view_all()
        {
            $this->db->select('
                r.no_rkm_medis AS NRM,
                r.stts_daftar AS Pengunjung,
                rm.perujuk AS cara_masuk,
                r.tgl_registrasi AS Tanggal_Pendaftaran,
                px.nm_pasien AS nama,
                px.jk AS jenis_kelamin,
                DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
                px.alamat AS Alamat,
                px.kecamatanpj AS kecamatan,
                px.kabupatenpj AS kabupaten,
                px.propinsipj AS provinsi,
                GROUP_CONCAT(dpx.kd_penyakit SEPARATOR ";") AS diagnosa,
                GROUP_CONCAT(ppx.kode SEPARATOR ";") AS tindakan,
                rj.rujuk_ke AS cara_keluar,
                d.nm_dokter AS DPJP,
                pj.png_jawab AS Pembayaran,
                p.nm_poli AS Poli,
                r.status_poli AS Kunjungan
            ');
            $this->db->from('reg_periksa r');
            $this->db->join('dokter d', 'r.kd_dokter = d.kd_dokter', 'left');
            $this->db->join('poliklinik p', 'r.kd_poli = p.kd_poli', 'left');
            $this->db->join('pasien px', 'r.no_rkm_medis = px.no_rkm_medis', 'left');
            $this->db->join('penjab pj', 'r.kd_pj = pj.kd_pj', 'left');
            $this->db->join('diagnosa_pasien dpx', 'r.no_rawat = dpx.no_rawat', 'left');
            $this->db->join('prosedur_pasien ppx', 'r.no_rawat = ppx.no_rawat', 'left');
            $this->db->join('rujuk_masuk rm', 'r.no_rawat = rm.no_rawat', 'left');
            $this->db->join('rujuk rj', 'r.no_rawat = rj.no_rawat', 'left');
            $this->db->where('MONTH(r.tgl_registrasi) = MONTH(CURDATE())');
            $this->db->where('YEAR(r.tgl_registrasi) = YEAR(CURDATE())');
            $this->db->where('r.status_lanjut', 'ralan');
            $this->db->group_by('r.no_rawat');

            return $this->db->get()->result_array();
        }

        public function ranap_view_by_month($month, $year)
        {
            $this->db->select("
                r.no_rkm_medis AS NRM,
                r.stts_daftar AS Pengunjung,
                rm.perujuk AS cara_masuk,
                r.tgl_registrasi AS Tanggal_Pendaftaran,
                px.nm_pasien AS nama,
                px.jk AS jenis_kelamin,
                ki.stts_pulang AS stts_pulang,  
                ki.tgl_masuk AS Tanggal_masuk,
                ki.tgl_keluar AS Tanggal_keluar,
                DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
                px.alamat AS Alamat,
                px.kecamatanpj AS kecamatan,
                px.kabupatenpj AS kabupaten,
                px.propinsipj AS provinsi,
                GROUP_CONCAT(dpx.kd_penyakit SEPARATOR '; ') AS diagnosa,
                GROUP_CONCAT(ppx.kode SEPARATOR '; ') AS tindakan,
                rj.rujuk_ke AS cara_keluar,
                d.nm_dokter AS DPJP,
                pj.png_jawab AS Pembayaran,
                p.nm_poli AS Poli,
                r.status_poli AS Kunjungan,
                b.nm_bangsal AS ruang,
                k.kelas AS kelas
            ");
            $this->db->from('reg_periksa r');
            $this->db->join('dokter d', 'r.kd_dokter = d.kd_dokter', 'left');
            $this->db->join('poliklinik p', 'r.kd_poli = p.kd_poli', 'left');
            $this->db->join('pasien px', 'r.no_rkm_medis = px.no_rkm_medis', 'left');
            $this->db->join('penjab pj', 'r.kd_pj = pj.kd_pj', 'left');
            $this->db->join('diagnosa_pasien dpx', 'r.no_rawat = dpx.no_rawat', 'left');
            $this->db->join('prosedur_pasien ppx', 'r.no_rawat = ppx.no_rawat', 'left');
            $this->db->join('rujuk_masuk rm', 'r.no_rawat = rm.no_rawat', 'left');
            $this->db->join('rujuk rj', 'r.no_rawat = rj.no_rawat', 'left');
            $this->db->join('kamar_inap ki', 'r.no_rawat = ki.no_rawat', 'left');
            $this->db->join('kamar k', 'ki.kd_kamar = k.kd_kamar', 'left');
            $this->db->join('bangsal b', 'k.kd_bangsal = b.kd_bangsal', 'left');            $this->db->where('MONTH(r.tgl_registrasi)', $month);
            $this->db->where('YEAR(r.tgl_registrasi)', $year);
            $this->db->where('r.status_lanjut', 'ranap');
            $this->db->group_by('r.no_rawat');
        
            return $this->db->get()->result_array();
        }

        public function ranap_view_all()
        {
            $this->db->select("
                r.no_rkm_medis AS NRM,
                r.stts_daftar AS Pengunjung,
                rm.perujuk AS cara_masuk,
                r.tgl_registrasi AS Tanggal_Pendaftaran,
                px.nm_pasien AS nama,
                px.jk AS jenis_kelamin,
                ki.stts_pulang AS stts_pulang,  
                ki.tgl_masuk AS Tanggal_masuk,
                ki.tgl_keluar AS Tanggal_keluar,
                DATEDIFF(CURDATE(), px.tgl_lahir) AS umur_hari,
                px.alamat AS Alamat,
                px.kecamatanpj AS kecamatan,
                px.kabupatenpj AS kabupaten,
                px.propinsipj AS provinsi,
                GROUP_CONCAT(dpx.kd_penyakit SEPARATOR '; ') AS diagnosa,
                GROUP_CONCAT(ppx.kode SEPARATOR '; ') AS tindakan,
                rj.rujuk_ke AS cara_keluar,
                d.nm_dokter AS DPJP,
                pj.png_jawab AS Pembayaran,
                p.nm_poli AS Poli,
                r.status_poli AS Kunjungan,
                b.nm_bangsal AS ruang,
                k.kelas AS kelas
            ");
            $this->db->from('reg_periksa r');
            $this->db->join('dokter d', 'r.kd_dokter = d.kd_dokter', 'left');
            $this->db->join('poliklinik p', 'r.kd_poli = p.kd_poli', 'left');
            $this->db->join('pasien px', 'r.no_rkm_medis = px.no_rkm_medis', 'left');
            $this->db->join('penjab pj', 'r.kd_pj = pj.kd_pj', 'left');
            $this->db->join('diagnosa_pasien dpx', 'r.no_rawat = dpx.no_rawat', 'left');
            $this->db->join('prosedur_pasien ppx', 'r.no_rawat = ppx.no_rawat', 'left');
            $this->db->join('rujuk_masuk rm', 'r.no_rawat = rm.no_rawat', 'left');
            $this->db->join('rujuk rj', 'r.no_rawat = rj.no_rawat', 'left');
            $this->db->join('kamar_inap ki', 'r.no_rawat = ki.no_rawat', 'left');
            $this->db->join('kamar k', 'ki.kd_kamar = k.kd_kamar', 'left');
            $this->db->join('bangsal b', 'k.kd_bangsal = b.kd_bangsal', 'left');
            $this->db->where('MONTH(r.tgl_registrasi) = MONTH(CURDATE())');
            $this->db->where('YEAR(r.tgl_registrasi) = YEAR(CURDATE())');
            $this->db->where('r.status_lanjut', 'ranap');
            $this->db->group_by('r.no_rawat');

            return $this->db->get()->result_array();
        }
    
        public function option_tahun()
        {
            $this->db->select('YEAR(r.tgl_registrasi) AS tahun'); // Use tgl_registrasi from reg_periksa
            $this->db->from('reg_periksa r'); // Use reg_periksa table
            $this->db->order_by('YEAR(r.tgl_registrasi)'); // Order by year
            $this->db->group_by('YEAR(r.tgl_registrasi)'); // Group by year
            return $this->db->get()->result(); // Return results
        }
}
