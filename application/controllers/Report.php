<?php error_reporting(0); ?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->model("Data_model");
        $this->load->database();
        $this->load->library('form_validation');
    }

    
    
public function index(){
    $data['title'] = 'Cetak Data Rawat Jalan';

    $start_date = $this->input->get('tanggal1');
    $end_date = $this->input->get('tanggal2');
    $data['Rajal'] = $this->Data_model->getRajal();

    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ 
        $filter = $_GET['filter'];
        if($filter == '1'){ 
            $tanggal1 = $_GET['tanggal1'];
            $tanggal2 = $_GET['tanggal2'];
            $label = 'Data Tanggal '.date('d-m-Y', strtotime($tanggal1)).' Sampai ' .date('d-m-Y', strtotime($tanggal2));
            $url_export = 'report/exportrajal?filter=1&tanggal1='.$tanggal1.'&tanggal2='.$tanggal2;
            $Rajal = $this->Data_model->rajal_view_by_date($tanggal1, $tanggal2); 
        } else if($filter == '2'){ 
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
            $label = 'Data Bulan '.$nama_bulan[$bulan].' '.$tahun;
            $url_export = 'report/exportrajal?filter=2&bulan='.$bulan.'&tahun='.$tahun;
            $Rajal = $this->Data_model->rajal_view_by_month($bulan, $tahun); 
        } /*else if($filter == '3'){ 
            $tahun = $_GET['tahun'];
            $label = 'Data Tahun '.$tahun;
            $url_export = 'report/exportrajal?filter=3&tahun='.$tahun;
            $Rajal = $this->Data_model->rajal_view_by_year($tahun);
        } */
    } else { 
        $label = 'Data Bulan '.date('F Y');
        $url_export = 'report/exportrajal';
        $Rajal = $this->Data_model->rajal_view_all();
    }

    $data['label'] = $label;
    $data['url_export'] = base_url($url_export);
    $data['Rajal'] = $Rajal;
    $data['option_tahun'] = $this->Data_model->option_tahun();

    $this->load->view('templates/header');  
    $this->load->view('templates/topbar');  
    $this->load->view('report/cetakrajal', $data);
    $this->load->view('templates/footer');  
}


public function exportrajal(){
include APPPATH.'third_party/PHPExcel/PHPExcel.php';
$excel = new PHPExcel();
    $excel->getProperties()->setCreator('IT RSHAA')
                 ->setLastModifiedBy('IT RSHAA')
                 ->setTitle("Data Rajal")
                 ->setSubject("Data Rajal")
                 ->setDescription("Laporan Data Rajal")
                 ->setKeywords("Data Rajal");
    $style_col = array(
      'font' => array('bold' => true), 
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER  
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),   
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)  
      )
    );
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER  
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),   
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)  
      )
    );
    
    $search = $this->input->get('search');
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ 
        $filter = $_GET['filter']; 
        if(isset($search) && !empty($search)) {
            $this->db->like('status_mutasi', $search);
        } else if($filter == '1'){ 
            $tanggal1 = $_GET['tanggal1'];
            $tanggal2 = $_GET['tanggal2'];
            $label = 'Data Rajal Tanggal '.date($tanggal1) .date($tanggal2);
            $Rajal = $this->Data_model->rajal_view_by_date($tanggal1, $tanggal2); 
        }else if($filter == '2'){ 
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
            $label = 'Data Rajal Bulan '.$nama_bulan[$bulan].' '.$tahun;
            $Rajal = $this->Data_model->rajal_view_by_month($bulan, $tahun); 
        } /*else if($filter == '3'){ 
            $tahun = $_GET['tahun'];
            $label = 'Data Tahun '.$tahun;
            $Rajal = $this->Data_model->rajal_view_by_year($tahun);
        } */
    } else { 
        $label = 'Semua Data Rajal RSUD H. Abdul Aziz Marabahan';
        $Rajal = $this->Data_model->rajal_view_all();
    }
    
    $excel->setActiveSheetIndex(0);
    $excel->getActiveSheet()->setCellValue('A1', $label); 
    $excel->getActiveSheet()->mergeCells('A1:I1');
    $excel->getActiveSheet()->setCellValue('A4', "No");
    $excel->getActiveSheet()->setCellValue('B4', "Tanggal Periksa");
    $excel->getActiveSheet()->setCellValue('C4', "No. RM"); 
    $excel->getActiveSheet()->setCellValue('D4', "Kunjungan");
    $excel->getActiveSheet()->setCellValue('E4', "Cara Masuk");
    $excel->getActiveSheet()->setCellValue('F4', "Nama Pasien");
    $excel->getActiveSheet()->setCellValue('G4', "jenis Kelamin");
    $excel->getActiveSheet()->setCellValue('H4', "Umum (hari)");
    $excel->getActiveSheet()->setCellValue('I4', "Alamat");
    $excel->getActiveSheet()->setCellValue('J4', "Kecamatan");
    $excel->getActiveSheet()->setCellValue('K4', "Kabupaten");
    $excel->getActiveSheet()->setCellValue('L4', "Provinsi");
    $excel->getActiveSheet()->setCellValue('M4', "Diagnosa");
    $excel->getActiveSheet()->setCellValue('N4', "Tindakan");
    $excel->getActiveSheet()->setCellValue('O4', "Cara Keluar");
    $excel->getActiveSheet()->setCellValue('P4', "DPJP");
    $excel->getActiveSheet()->setCellValue('Q4', "Pembayaran");
    $excel->getActiveSheet()->setCellValue('R4', "Poli");
    $excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Q4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('R4')->applyFromArray($style_col);

    $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(100);
    $excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
    $excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
    $excel->getActiveSheet()->getRowDimension('4')->setRowHeight(20);
    $excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
    $excel->getActiveSheet()->getRowDimension('6')->setRowHeight(40);
    $excel->getActiveSheet()->getRowDimension('7')->setRowHeight(20);
    $excel->getActiveSheet()->getRowDimension('8')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('9')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('10')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('11')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('12')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('13')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('14')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('15')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('16')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('17')->setRowHeight(50);
    $excel->getActiveSheet()->getRowDimension('18')->setRowHeight(50);
    $no = 1; 
    $numrow = 5; 
    foreach($Rajal as $data){ 
        
        $data_array = json_decode(json_encode($data), true);
        $excel->getActiveSheet()->setCellValue('A'.$numrow, $no);
        $excel->getActiveSheet()->setCellValue('B'.$numrow, $data_array['Tanggal_Pendaftaran']);
        $excel->getActiveSheet()->setCellValue('C'.$numrow, $data_array['NRM']);
        $excel->getActiveSheet()->setCellValue('D'.$numrow, $data_array['Kunjungan']);
        $excel->getActiveSheet()->setCellValue('E'.$numrow, $data_array['cara_masuk']);
        $excel->getActiveSheet()->setCellValue('F'.$numrow, $data_array['nama']);
        $excel->getActiveSheet()->setCellValue('G'.$numrow, $data_array['jenis_kelamin']);
        $excel->getActiveSheet()->setCellValue('H'.$numrow, $data_array['umur_hari']);
        $excel->getActiveSheet()->setCellValue('I'.$numrow, $data_array['Alamat']);
        $excel->getActiveSheet()->setCellValue('J'.$numrow, $data_array['kecamatan']);
        $excel->getActiveSheet()->setCellValue('K'.$numrow, $data_array['kabupaten']);
        $excel->getActiveSheet()->setCellValue('L'.$numrow, $data_array['provinsi']);
        $excel->getActiveSheet()->setCellValue('M'.$numrow, $data_array['diagnosa']);
        $excel->getActiveSheet()->setCellValue('N'.$numrow, $data_array['tindakan']);
        $excel->getActiveSheet()->setCellValue('O'.$numrow, $data_array['cara_keluar']);
        $excel->getActiveSheet()->setCellValue('P'.$numrow, $data_array['DPJP']);
        $excel->getActiveSheet()->setCellValue('Q'.$numrow, $data_array['Pembayaran']);
        $excel->getActiveSheet()->setCellValue('R'.$numrow, $data_array['Poli']);
        $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
        $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
        $no++; 
        $numrow++; 
        }

        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(10); 
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(50);
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('R')->setWidth(40);

        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

        $excel->getActiveSheet()->setTitle("Data Rajal ");
        $excel->getActiveSheet();
        //ob_end_clean();

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Rajal.xlsx"'); 
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }
    
    public function ranap(){
        $data['title'] = 'Cetak Data Rawat Inap';
    
        $start_date = $this->input->get('tanggal1');
        $end_date = $this->input->get('tanggal2');
        $data['Ranap'] = $this->Data_model->getRanap();
    
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ 
            $filter = $_GET['filter'];
            if($filter == '1'){ 
                $tanggal1 = $_GET['tanggal1'];
                $tanggal2 = $_GET['tanggal2'];
                $label = 'Data Tanggal '.date('d-m-Y', strtotime($tanggal1)).' Sampai ' .date('d-m-Y', strtotime($tanggal2));
                $url_export = 'report/exportRanap?filter=1&tanggal1='.$tanggal1.'&tanggal2='.$tanggal2;
                $Ranap = $this->Data_model->Ranap_view_by_date($tanggal1, $tanggal2); 
            } else if($filter == '2'){ 
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                $label = 'Data Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_export = 'report/exportranap?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $Ranap = $this->Data_model->ranap_view_by_month($bulan, $tahun); 
            } /*else if($filter == '3'){ 
                $tahun = $_GET['tahun'];
                $label = 'Data Tahun '.$tahun;
                $url_export = 'report/exportRanap?filter=3&tahun='.$tahun;
                $Ranap = $this->Data_model->Ranap_view_by_year($tahun);
            } */
        } else { 
            $label = 'Data Bulan '.date('F Y');
            $url_export = 'report/exportranap';
            $Ranap = $this->Data_model->ranap_view_all();
        }
    
        $data['label'] = $label;
        $data['url_export'] = base_url($url_export);
        $data['Ranap'] = $Ranap;
        $data['option_tahun'] = $this->Data_model->option_tahun();
    
        $this->load->view('templates/header');  
        $this->load->view('templates/topbar');  
        $this->load->view('report/cetakranap', $data);
        $this->load->view('templates/footer');  
    }
    
    
    public function exportranap(){
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    $excel = new PHPExcel();
        $excel->getProperties()->setCreator('IT RSHAA')
                     ->setLastModifiedBy('IT RSHAA')
                     ->setTitle("Data Ranap")
                     ->setSubject("Data Ranap")
                     ->setDescription("Laporan Data Ranap")
                     ->setKeywords("Data Ranap");
        $style_col = array(
          'font' => array('bold' => true), 
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER  
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),   
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)  
          )
        );
        $style_row = array(
          'alignment' => array(
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER  
          ),
          'borders' => array(
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),   
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)  
          )
        );
        
        $search = $this->input->get('search');
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ 
            $filter = $_GET['filter']; 
            if(isset($search) && !empty($search)) {
                $this->db->like('status_mutasi', $search);
            /*} else if($filter == '1'){ 
                $tanggal1 = $_GET['tanggal1'];
                $tanggal2 = $_GET['tanggal2'];
                $label = 'Data Ranap Tanggal '.date($tanggal1) .date($tanggal2);
                $Ranap = $this->Data_model->rajal_view_by_date($tanggal1, $tanggal2); */
            }else if($filter == '2'){ 
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                $label = 'Data Ranap Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $Ranap = $this->Data_model->ranap_view_by_month($bulan, $tahun); 
            } /*else if($filter == '3'){ 
                $tahun = $_GET['tahun'];
                $label = 'Data Tahun '.$tahun;
                $Ranap = $this->Data_model->Ranap_view_by_year($tahun);
            } */
        } else { 
            $label = 'Semua Data Ranap RSUD H. Abdul Aziz Marabahan';
            $Ranap = $this->Data_model->ranap_view_all();
        }
        
        $excel->setActiveSheetIndex(0);
        $excel->getActiveSheet()->setCellValue('A1', $label); 
        $excel->getActiveSheet()->mergeCells('A1:I1');
        $excel->getActiveSheet()->setCellValue('A4', "No");
        $excel->getActiveSheet()->setCellValue('B4', "No. RM");
        $excel->getActiveSheet()->setCellValue('C4', "Kunjungan"); 
        $excel->getActiveSheet()->setCellValue('D4', "Tanggal Pendaftaran");
        $excel->getActiveSheet()->setCellValue('E4', "Tanggal Masuk");
        $excel->getActiveSheet()->setCellValue('F4', "Tanggal Keluar");
        $excel->getActiveSheet()->setCellValue('G4', "Cara Keluar");
        $excel->getActiveSheet()->setCellValue('H4', "Nama");
        $excel->getActiveSheet()->setCellValue('I4', "Jenis Kelamin");
        $excel->getActiveSheet()->setCellValue('J4', "Umur (hari)");
        $excel->getActiveSheet()->setCellValue('K4', "Alamat");
        $excel->getActiveSheet()->setCellValue('L4', "Diagnosa");
        $excel->getActiveSheet()->setCellValue('M4', "Tindakan");
        $excel->getActiveSheet()->setCellValue('N4', "Cara Keluar");
        $excel->getActiveSheet()->setCellValue('O4', "DPJP");
        $excel->getActiveSheet()->setCellValue('P4', "Pembayaran");
        $excel->getActiveSheet()->setCellValue('Q4', "Ruang");
        $excel->getActiveSheet()->setCellValue('R4', "Kelas");
        $excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Q4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('R4')->applyFromArray($style_col);
    
        $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('4')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('6')->setRowHeight(40);
        $excel->getActiveSheet()->getRowDimension('7')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('8')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('9')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('10')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('11')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('12')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('13')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('14')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('15')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('16')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('17')->setRowHeight(50);
        $excel->getActiveSheet()->getRowDimension('18')->setRowHeight(50);
        $no = 1; 
        $numrow = 5; 
        foreach($Ranap as $data){ 
            
            $data_array = json_decode(json_encode($data), true);
            $excel->getActiveSheet()->setCellValue('A'.$numrow, $no);
            $excel->getActiveSheet()->setCellValue('B'.$numrow, $data_array['NRM']);
            $excel->getActiveSheet()->setCellValue('C'.$numrow, $data_array['Kunjungan']);
            $excel->getActiveSheet()->setCellValue('D'.$numrow, $data_array['Tanggal_Pendaftaran']);
            $excel->getActiveSheet()->setCellValue('E'.$numrow, $data_array['Tanggal_masuk']);
            $excel->getActiveSheet()->setCellValue('F'.$numrow, $data_array['Tanggal_keluar']);
            $excel->getActiveSheet()->setCellValue('G'.$numrow, $data_array['Poli']);
            $excel->getActiveSheet()->setCellValue('H'.$numrow, $data_array['nama']);
            $excel->getActiveSheet()->setCellValue('I'.$numrow, $data_array['jenis_kelamin']);
            $excel->getActiveSheet()->setCellValue('J'.$numrow, $data_array['umur_hari']);
            $excel->getActiveSheet()->setCellValue('K'.$numrow, $data_array['Alamat']);
            $excel->getActiveSheet()->setCellValue('L'.$numrow, $data_array['diagnosa']);
            $excel->getActiveSheet()->setCellValue('M'.$numrow, $data_array['tindakan']);
            $excel->getActiveSheet()->setCellValue('N'.$numrow, $data_array['stts_pulang']);
            $excel->getActiveSheet()->setCellValue('O'.$numrow, $data_array['DPJP']);
            $excel->getActiveSheet()->setCellValue('P'.$numrow, $data_array['Pembayaran']);
            $excel->getActiveSheet()->setCellValue('Q'.$numrow, $data_array['ruang']);
            $excel->getActiveSheet()->setCellValue('R'.$numrow, $data_array['kelas']);
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
            $no++; 
            $numrow++; 
            }
    
            $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
            $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
            $excel->getActiveSheet()->getColumnDimension('C')->setWidth(10); 
            $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
            $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
            $excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
            $excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
            $excel->getActiveSheet()->getColumnDimension('H')->setWidth(50);
            $excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
            $excel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
            $excel->getActiveSheet()->getColumnDimension('K')->setWidth(40);
            $excel->getActiveSheet()->getColumnDimension('L')->setWidth(40);
            $excel->getActiveSheet()->getColumnDimension('M')->setWidth(40);
            $excel->getActiveSheet()->getColumnDimension('N')->setWidth(40);
            $excel->getActiveSheet()->getColumnDimension('O')->setWidth(40);
            $excel->getActiveSheet()->getColumnDimension('P')->setWidth(40);
            $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(40);
            $excel->getActiveSheet()->getColumnDimension('R')->setWidth(40);
    
            $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    
            $excel->getActiveSheet()->setTitle("Data Ranap");
            $excel->getActiveSheet();
            //ob_end_clean();
    
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="Data Ranap.xlsx"'); 
            header('Cache-Control: max-age=0');
            $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $write->save('php://output');
        }
}
