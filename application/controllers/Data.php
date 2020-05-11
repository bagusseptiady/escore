<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Product_model','product_model');
    }
    function edit(){
        $id = $this->session->userdata('id_user');
        $name   = $this->input->post('nama',TRUE);
        $notlp   = $this->input->post('notlp',TRUE);
        $email = $this->input->post('email',TRUE);
        $username = $this->input->post('username',TRUE);
        $password  = $this->input->post('password',TRUE);
        $alamat  = $this->input->post('alamat',TRUE);
        $tl = $this->input->post('tl',TRUE);
        $ttl = $this->input->post('ttl',TRUE);
        $jurusan  = $this->input->post('sekolah',TRUE);
        $kelas = $this->input->post('subsekolah',TRUE);
        $foto = $_FILES['foto2'];
        if ($foto=''){
            
        }
        else{
            $config['upload_path']='./assets/foto';
            $config['allowed_types']='jpg|jpeg|png|gif';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto2')){
                $this->product_model->update2($id,$name,$notlp,$email,$username,$password,$alamat,$jurusan,$kelas,$ttl,$tl);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Edit</div>');
                redirect('page/profil2');
                  
            }
            else{
                $foto=$this->upload->data('file_name');
            }
            $this->product_model->update($id,$name,$notlp,$email,$username,$password,$alamat,$jurusan,$kelas,$foto,$ttl,$tl);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Edit</div>');
            redirect('page/profil2');
        
        }        
        
    }
    function edit2(){
        $id = $this->session->userdata('id_user');
        $name   = $this->input->post('nama',TRUE);
        $notlp   = $this->input->post('notlp',TRUE);
        $email = $this->input->post('email',TRUE);
        $username = $this->input->post('username',TRUE);
        $password  = $this->input->post('password',TRUE);
        $alamat  = $this->input->post('alamat',TRUE);
        $tl = $this->input->post('tl',TRUE);
        $ttl = $this->input->post('ttl',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $kelas = $this->input->post('kelas',TRUE);
        $foto = $_FILES['foto2'];
        if ($foto=''){
            
        }
        else{
            $config['upload_path']='./assets/foto';
            $config['allowed_types']='jpg|jpeg|png|gif';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto2')){
                $this->product_model->update4($id,$name,$notlp,$email,$username,$password,$alamat,$matpel,$kelas,$ttl,$tl);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Edit</div>');
                redirect('page/profil');
                  
            }
            else{
                $foto=$this->upload->data('file_name');
            }
            $this->product_model->update3($id,$name,$notlp,$email,$username,$password,$alamat,$matpel,$kelas,$foto,$ttl,$tl);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Edit</div>');
            redirect('page/profil');
        
        }        
        
    }
    function hapus(){
        $idnh=$this->input->post('id_nh');
        $this->product_model->hapusnh($idnh);
        redirect('page/lihat');
    }
    function hapus2(){
        $idr=$this->input->post('id_raport');
        $this->product_model->hapusnr($idr);
        redirect('page/lihat');
    }
    function tambah(){
        $id  = $this->input->post('user_id',TRUE);
        $nh1 = $this->input->post('nh1',TRUE);
        $nh2 = $this->input->post('nh2',TRUE);
        $nh3 = $this->input->post('nh3',TRUE);
        $nh4 = $this->input->post('nh4',TRUE);
        $nh5  = $this->input->post('nh5',TRUE);
        $kkmnh = $this->input->post('kkmnh',TRUE);
        $rata = $this->input->post('rata',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $this->product_model->tambahh($id,$nh1,$nh2,$nh3,$nh4,$nh5,$kkmnh,$rata,$matpel,$semester);
        redirect('page/lihat');
    }
    function tambah2(){
        $id  = $this->input->post('uid',TRUE);
        $nh = $this->input->post('nh',TRUE);
        $pts = $this->input->post('pts',TRUE);
        $kkmt = $this->input->post('kkmt',TRUE);
        $pas = $this->input->post('pas',TRUE);
        $kkma = $this->input->post('kkma',TRUE);
        $np = $this->input->post('np',TRUE);
        $nk  = $this->input->post('nk',TRUE);
        $kkm = $this->input->post('kkm',TRUE);
        $kkm2 = $this->input->post('kkm2',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $this->product_model->tambahh2($id,$nh,$pts,$kkmt,$pas,$kkma,$np,$kkm,$nk,$kkm2,$matpel,$semester);
        redirect('page/lihat');
    }
    function ed(){
        $id  = $this->input->post('user_id',TRUE);
        $nh1 = $this->input->post('nh1',TRUE);
        $nh2 = $this->input->post('nh2',TRUE);
        $nh3 = $this->input->post('nh3',TRUE);
        $nh4 = $this->input->post('nh4',TRUE);
        $nh5  = $this->input->post('nh5',TRUE);
        $rata = $this->input->post('rata',TRUE);
        $kkmnh = $this->input->post('kkmnh',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $idnh=$this->input->post('idnh');
        $this->product_model->edd($id,$idnh,$nh1,$nh2,$nh3,$nh4,$nh5,$kkmnh,$rata,$matpel,$semester);
        redirect('page/lihat');
    }
    function ed2(){
        $id  = $this->input->post('uid',TRUE);
        $nh = $this->input->post('nh',TRUE);
        $pts = $this->input->post('pts',TRUE);
        $kkmt = $this->input->post('kkmt',TRUE);
        $pas = $this->input->post('pas',TRUE);
        $kkma = $this->input->post('kkma',TRUE);
        $np = $this->input->post('np',TRUE);
        $nk  = $this->input->post('nk',TRUE);
        $kkm = $this->input->post('kkm',TRUE);
        $kkm2 = $this->input->post('kkm2',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $idr=$this->input->post('idr');
        $this->product_model->edd2($id,$idr,$nh,$pts,$pas,$np,$nk,$kkmt,$kkma,$kkm,$kkm2,$matpel,$semester);
        redirect('page/lihat');
    }
    
}
?>