<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Product_model','product_model');
    $this->load->model('Data_model','data_model');
    $this->load->model('Dash_model','dash_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('auth');
    }
  }
 
  function index(){
      if($this->session->userdata('Level')==='Guru'){
          $data['title'] = 'E - Score | Dashboard Guru';
          $data['nkss'] = $this->data_model->nksg();
          $data['nkss2'] = $this->data_model->nksg2();
          $data['nkss3'] = $this->data_model->nksg3();
          $data['nkss4'] = $this->data_model->nksg4();
          $data['nkss5'] = $this->data_model->nksg5();
          $data['nkss6'] = $this->data_model->nksg6();
          $data['nkss7'] = $this->data_model->nksg7();
          $data['nkss8'] = $this->data_model->nksg8();
          $data['nkss9'] = $this->data_model->nksg9();
          $data['nkss'] = $this->data_model->nkss();
          $data['nkss2'] = $this->data_model->nkss2();
          $data['nkss3'] = $this->data_model->nkss3();
          $data['nkss4'] = $this->data_model->nkss4();
          $data['nkss5'] = $this->data_model->nkss5();
          $data['nkss6'] = $this->data_model->nkss6();
          $data['nkss7'] = $this->data_model->nkss7();
          $data['nkss8'] = $this->data_model->nkss8();
          $data['nkss9'] = $this->data_model->nkss9();
          $data['nkssa'] = $this->data_model->nkssa();
          $data['nkss2a'] = $this->data_model->nkss2a();
          $data['nkss3a'] = $this->data_model->nkss3a();
          $data['nkss4a'] = $this->data_model->nkss4a();
          $data['nkss5a'] = $this->data_model->nkss5a();
          $data['nkss6a'] = $this->data_model->nkss6a();
          $data['nkss7a'] = $this->data_model->nkss7a();
          $data['nkss8a'] = $this->data_model->nkss8a();
          $data['nkss9a'] = $this->data_model->nkss9a();
          $data['jkls'] = $this->data_model->jkls();
          $data['jssw'] = $this->data_model->jssw();
          $data['detail'] = $this->product_model->get()->result();
          $this->load->view('templates/dash_header',$data);
          $this->load->view('page/dashboard');
          $this->load->view('templates/dash_footer');
      }
      else if($this->session->userdata('Level')==='Adminguru'){
        $data['title'] = 'E - Score | Dashboard Guru';
        $data['nkss'] = $this->data_model->nksg();
        $data['nkss2'] = $this->data_model->nksg2();
        $data['nkss3'] = $this->data_model->nksg3();
        $data['nkss4'] = $this->data_model->nksg4();
        $data['nkss5'] = $this->data_model->nksg5();
        $data['nkss6'] = $this->data_model->nksg6();
        $data['nkss7'] = $this->data_model->nksg7();
        $data['nkss8'] = $this->data_model->nksg8();
        $data['nkss9'] = $this->data_model->nksg9();
        $data['nkss'] = $this->data_model->nkss();
        $data['nkss2'] = $this->data_model->nkss2();
        $data['nkss3'] = $this->data_model->nkss3();
        $data['nkss4'] = $this->data_model->nkss4();
        $data['nkss5'] = $this->data_model->nkss5();
        $data['nkss6'] = $this->data_model->nkss6();
        $data['nkss7'] = $this->data_model->nkss7();
        $data['nkss8'] = $this->data_model->nkss8();
        $data['nkss9'] = $this->data_model->nkss9();
        $data['nkssa'] = $this->data_model->nkssa();
        $data['nkss2a'] = $this->data_model->nkss2a();
        $data['nkss3a'] = $this->data_model->nkss3a();
        $data['nkss4a'] = $this->data_model->nkss4a();
        $data['nkss5a'] = $this->data_model->nkss5a();
        $data['nkss6a'] = $this->data_model->nkss6a();
        $data['nkss7a'] = $this->data_model->nkss7a();
        $data['nkss8a'] = $this->data_model->nkss8a();
        $data['nkss9a'] = $this->data_model->nkss9a();
        $data['jkls'] = $this->data_model->jkls();
        $data['jssw'] = $this->data_model->jssw();
        $data['detail'] = $this->product_model->get()->result();
        $this->load->view('templates/dash_header',$data);
        $this->load->view('page/dashboard');
        $this->load->view('templates/dash_footer');
    }
      else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak Ada Akses</div>');
        redirect('page/dashboard');
      }
 
  }
 
  function siswa(){
    if($this->session->userdata('Level')==='Siswa'){
      $data['title'] = 'E - Score | Dashboard Siswa';
      $data['detail'] = $this->product_model->get()->result();
      $data['nsmp'] = $this->dash_model->nsmp()->result();
      $data['nsmp2'] = $this->dash_model->nsmp2()->result();
      $data['nsmp3'] = $this->dash_model->nsmp3()->result();
      $data['nsmp4'] = $this->dash_model->nsmp4()->result();
      $data['nsmp5'] = $this->dash_model->nsmp5()->result();
      $data['nsmp6'] = $this->dash_model->nsmp6()->result();
      $data['nsmp7'] = $this->dash_model->nsmp7()->result();
      $data['ndbk'] = $this->dash_model->ndbk()->result();
      $data['ndbk2'] = $this->dash_model->ndbk2()->result();
      $data['ndbk3'] = $this->dash_model->ndbk3()->result();
      $data['ndbk4'] = $this->dash_model->ndbk4()->result();
      $data['ndbk5'] = $this->dash_model->ndbk5()->result();
      $data['ndbk6'] = $this->dash_model->ndbk6()->result();
      $data['ndbk7'] = $this->dash_model->ndbk7()->result();
      $data['nsr'] = $this->data_model->nsr();
      $data['nsr2'] = $this->data_model->nsr2();
      $data['nsr3'] = $this->data_model->nsr3();
      $data['nsr4'] = $this->data_model->nsr4();
      $data['nsr5'] = $this->data_model->nsr5();
      $data['nsr6'] = $this->data_model->nsr6();
      $data['nsr7'] = $this->data_model->nsr7();
      $data['nkkm'] = $this->data_model->nkkm();
      $data['nkkm2'] = $this->data_model->nkkm2();
      $data['nkkm3'] = $this->data_model->nkkm3();
      $data['nkkm4'] = $this->data_model->nkkm4();
      $data['nkkm5'] = $this->data_model->nkkm5();
      $data['nkkm6'] = $this->data_model->nkkm6();
      $data['nkkm7'] = $this->data_model->nkkm7();
      $data['nbkkm'] = $this->data_model->nbkkm();
      $data['nbkkm2'] = $this->data_model->nbkkm2();
      $data['nbkkm3'] = $this->data_model->nbkkm3();
      $data['nbkkm4'] = $this->data_model->nbkkm4();
      $data['nbkkm5'] = $this->data_model->nbkkm5();
      $data['nbkkm6'] = $this->data_model->nbkkm6();
      $data['nbkkm7'] = $this->data_model->nbkkm7();
      $data['nks'] = $this->data_model->nks();
      $data['nks2'] = $this->data_model->nks2();
      $data['nks3'] = $this->data_model->nks3();
      $data['nks4'] = $this->data_model->nks4();
      $data['nks5'] = $this->data_model->nks5();
      $data['nks6'] = $this->data_model->nks6();
      $data['nks7'] = $this->data_model->nks7();
      $this->load->view('templates/dash_header',$data);
      $this->load->view('page/dashboard2');
      $this->load->view('templates/dash_footer');
    }
    else if($this->session->userdata('Level')==='Adminsiswa'){
      $data['title'] = 'E - Score | Dashboard Siswa';
      $data['detail'] = $this->product_model->get()->result();
      $data['nsr'] = $this->data_model->nsr();
      $data['nsr2'] = $this->data_model->nsr2();
      $data['nsr3'] = $this->data_model->nsr3();
      $data['nsr4'] = $this->data_model->nsr4();
      $data['nsr5'] = $this->data_model->nsr5();
      $data['nsr6'] = $this->data_model->nsr6();
      $data['nsr7'] = $this->data_model->nsr7();
      $data['nkkm'] = $this->data_model->nkkm();
      $data['nkkm2'] = $this->data_model->nkkm2();
      $data['nkkm3'] = $this->data_model->nkkm3();
      $data['nkkm4'] = $this->data_model->nkkm4();
      $data['nkkm5'] = $this->data_model->nkkm5();
      $data['nkkm6'] = $this->data_model->nkkm6();
      $data['nkkm7'] = $this->data_model->nkkm7();
      $data['nbkkm'] = $this->data_model->nbkkm();
      $data['nbkkm2'] = $this->data_model->nbkkm2();
      $data['nbkkm3'] = $this->data_model->nbkkm3();
      $data['nbkkm4'] = $this->data_model->nbkkm4();
      $data['nbkkm5'] = $this->data_model->nbkkm5();
      $data['nbkkm6'] = $this->data_model->nbkkm6();
      $data['nbkkm7'] = $this->data_model->nbkkm7();
      $data['nks'] = $this->data_model->nks();
      $data['nks2'] = $this->data_model->nks2();
      $data['nks3'] = $this->data_model->nks3();
      $data['nks4'] = $this->data_model->nks4();
      $data['nks5'] = $this->data_model->nks5();
      $data['nks6'] = $this->data_model->nks6();
      $data['nks7'] = $this->data_model->nks7();
      $this->load->view('templates/dash_header',$data);
      $this->load->view('page/dashboard2');
      $this->load->view('templates/dash_footer');
    }
    else{
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak Ada Akses</div>');
      redirect('page/dashboard2');
    }
  }
  function kalender2(){
    $data['title'] = 'E Score | Kalender';
    $data['detail'] = $this->product_model->get()->result();
    $this->load->view('templates/kal_header',$data);
    $this->load->view('page/kalender2');
    $this->load->view('templates/kal_footer');
  }
  function kalender(){
    $data['title'] = 'E Score | Kalender';
    $data['detail'] = $this->product_model->get()->result();
    $this->load->view('templates/kal_header',$data);
    $this->load->view('page/kalender');
    $this->load->view('templates/kal_footer');
  }
  function daftar(){
    $data['title'] = 'E Score | Daftar Siswa';
    $data['detail'] = $this->product_model->get()->result();
    $this->load->view('templates/daf_header',$data);
    $data['de'] = $this->product_model->cri()->result();
    $data['sekolah'] = $this->product_model->get_category()->result();
    $this->load->view('page/daftar', $data);
    $this->load->view('templates/daf_footer');
  }
  function daftar2(){
    $data['title'] = 'E Score | Daftar Siswa';
    $data['detail'] = $this->product_model->get()->result();
    $this->load->view('templates/daf_header',$data);
    $data['sekolah'] = $this->product_model->get_category()->result();
    $data['data'] = $this->product_model->daftar()->result();
    $this->load->view('page/daftar', $data);
    $this->load->view('templates/daf_footer');
  }
  function dafsis(){
    $kelas = $this->input->post('subsekolah',TRUE);
    $this->product_model->daftar($kelas);
    redirect('page/daftar2');
  }
  function lihat(){
    $data['title'] = 'E Score | Nilai Siswa';
    $data['detail'] = $this->product_model->get()->result();
    $this->load->view('templates/daf_header',$data);
    $data['d'] = $this->product_model->nilaihar()->result();
    $data['deta'] = $this->product_model->got()->result();
    $data['namkls'] = $this->product_model->namkel()->result();
    $data['dl'] = $this->product_model->nilairap()->result();
    $data['sekolah'] = $this->product_model->get_category()->result();
    $data['mt'] = $this->product_model->get_mt()->result();
    $this->load->view('page/lihat', $data);
    $this->load->view('templates/daf_footer');
  }
  function harian(){
    $data['title'] = 'E Score | Nilai Harian';
    $data['detail'] = $this->product_model->get()->result();
    $this->load->view('templates/har_header',$data);
    $data['dt'] = $this->product_model->nilaih()->result();
    $data['dta'] = $this->product_model->nilaiha()->result();
    
    $data['sekolah'] = $this->product_model->get_category()->result();
    $this->load->view('page/harian', $data);
    $this->load->view('templates/har_footer');
  }
  function raport(){
    $data['title'] = 'E Score | Nilai Raport';
    $data['detail'] = $this->product_model->get()->result();
    $this->load->view('templates/har_header',$data);
    $data['dd'] = $this->product_model->nilair()->result();
    $data['dq'] = $this->product_model->nilaira()->result();
    $data['sekolah'] = $this->product_model->get_category()->result();
    $this->load->view('page/raport', $data);
    $this->load->view('templates/har_footer');
  }
  function profil(){
    $data['title'] = 'E Score | Profile';
    $data['sekolah'] = $this->product_model->get_category()->result();
    $data['detail'] = $this->product_model->get()->result();
    $data['deta'] = $this->product_model->got()->result();
    $this->load->view('templates/prof_header',$data);
    $this->load->view('page/profil');
    $this->load->view('templates/prof_footer');
  }
  function profil2(){
    $data['title'] = 'E Score | Profile';
    $data['sekolah'] = $this->product_model->get_category()->result();
    $data['detail'] = $this->product_model->get()->result();
    $data['deta'] = $this->product_model->got()->result();
    $this->load->view('templates/prof_header',$data);
    $this->load->view('page/profil2');
    $this->load->view('templates/prof_footer');
  }
}