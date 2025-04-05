<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in(); 
        
        $this->load->model("Data_model");
        $this->load->database();
        $this->load->library('form_validation');
    }

    public function Rajal()
    {
        $data['title'] = 'Data Rawat Jalan';
        $data['username'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');

        if ($start_date && $end_date) {
            $data['Rajal'] = $this->Data_model->getRajalByDateRange($start_date, $end_date);
        } else {
            $data['Rajal'] = $this->Data_model->getRajal();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rajal', $data);
        $this->load->view('templates/footer');
    }

    public function Ranap()
    {
        $data['title'] = 'Data Rawat Inap';
        $data['username'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');

        if ($start_date && $end_date) {
            $data['Ranap'] = $this->Data_model->getRanapByDateRange($start_date, $end_date);
        } else {
            $data['Ranap'] = $this->Data_model->getRanap();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/ranap', $data);
        $this->load->view('templates/footer');
    }

    public function RL35()
    {
        $data['title'] = 'Data RL 3.5 Kunjungan';
        $data['username'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $bulan = $this->input->get('bulan') ?: date('m');
        $tahun = $this->input->get('tahun') ?: date('Y');

        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;

        $data['RL35'] = $this->Data_model->getRL35($bulan, $tahun);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rl35', $data);
        $this->load->view('templates/footer');
    }

    public function RL38()
    {
        $data['title'] = 'Data RL 3.8 Laboratorium';
        $data['username'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $bulan = $this->input->get('bulan') ?: date('m');
        $tahun = $this->input->get('tahun') ?: date('Y');
        
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        
        $lab_data = $this->Data_model->getRL38($bulan, $tahun);
        $data['RL38'] = is_array($lab_data) ? $lab_data : []; // Avoid error

        $total_tindakan = 0;
        foreach ($data['RL38'] as $row) {
            $total_tindakan += $row->total_tindakan;
        }

        $jumlah_hari = date('t');
        $data['total_tindakan'] = $total_tindakan;
        $data['rata_rata'] = $jumlah_hari > 0 ? $total_tindakan / $jumlah_hari : 0;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rl38', $data);
        $this->load->view('templates/footer');
    }

    public function RL310()
    {
        $data['title'] = 'Data RL 3.10 Rujukan';
        $data['username'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $bulan = $this->input->get('bulan') ?: date('m');
        $tahun = $this->input->get('tahun') ?: date('Y');
        
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['RL310'] = $this->Data_model->getRL310($bulan, $tahun);

        $total_rujukan = 0;
        foreach ($data['RL310'] as $row) {
            $total_rujukan += $row->Total_Rujukan;
        }

        $data['total_rujukan'] = $total_rujukan;
        $data['rata_rata'] = ($total_rujukan > 0) ? ($total_rujukan / date('t')) : 0;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rl310', $data);
        $this->load->view('templates/footer');
    }

    public function RL41()
    {
        $data['title'] = 'Data RL 3.41 Morbiditas Pasien Rawat Jalan';
        $data['username'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $bulan = $this->input->get('bulan') ?: date('m');
        $tahun = $this->input->get('tahun') ?: date('Y');
        
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;

        $data['RL41'] = $this->Data_model->getRL41($bulan, $tahun);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rl41', $data);
        $this->load->view('templates/footer');
    }

    public function RL41Ralan()
    {

        $data['title'] = 'Data RL 3.51 Morbiditas Pasien Rawat Jalan';
        $data['username'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();

        $bulan = $this->input->get('bulan') ?: date('m');
        $tahun = $this->input->get('tahun') ?: date('Y');
        
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['RL41'] = $this->Data_model->getRL41Ralan($bulan, $tahun);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rl41ralan', $data);
        $this->load->view('templates/footer');
    }

}
