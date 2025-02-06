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
        $data['title'] = 'Data User';
        $data['Rajal'] = $this->Data_model->getRajal();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rajal', $data);
        $this->load->view('templates/footer');
    }

    public function Ranap()
    {
        $data['title'] = 'Data User';

        $data['Ranap'] = $this->Data_model->getRanap();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/ranap', $data);
        $this->load->view('templates/footer');
    }

    public function RL38()
    {
        $data['title'] = 'Data User';

        $data['RL38'] = $this->Data_model->getRL38();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rl38', $data);
        $this->load->view('templates/footer');
    }

    public function RL41()
    {
        $data['title'] = 'Data User';

        $data['Ranap'] = $this->Data_model->getRL41();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/rl41', $data);
        $this->load->view('templates/footer');
    }

}
