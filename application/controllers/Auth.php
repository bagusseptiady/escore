<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Product_model','product_model');
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run() == false){
        $data['title'] = 'E - Score | Masuk';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
        }
        else {
            $username   = $this->input->post('username',TRUE);
            $password = $this->input->post('password',TRUE);
            $this->product_model->get($username);
            $validate = $this->login_model->validate($username,$password);
            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $name  = $data['Nama'];
                $username  = $data['Username'];
                $level = $data['Level'];
                $id = $data['id_user'];
                $kelas = $data['Kelas'];
                $email = $data['Email'];
                $sesdata = array(
                    'id_user'   => $id,
                    'Nama'  => $name,
                    'Username'  => $username,
                    'Kelas'     => $kelas,
                    'Level'     => $level,
                    'logged_in' =>TRUE                   
                );
                
                $this->session->set_userdata($sesdata);
                if($level === 'Guru'){
                    redirect('page');
                }
                else if($level === 'Adminguru'){
                    redirect('page');
                }
                else if($level === 'Adminsiswa'){
                    redirect('page/siswa');
                }elseif($level === 'Siswa'){
                    $this->product_model->awal($id,$email);
                    $this->product_model->awall($id,$email);
                    $this->product_model->awalll($id,$email);
                    $this->product_model->awallll($id,$email);
                    redirect('page/siswa');
                }
            }
            else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Anda Salah</div>');
                redirect('auth');
            }
        }
    }

    public function regis(){
        $this->form_validation->set_rules('name','Nama','required|trim');
        $this->form_validation->set_rules('notlp','Nomor Telepon','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email',['valid_email' => 'Email Tidak Valid. Contoh : qwerty@asd.com']);
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[5]',['min_length' => 'Password Teralalu Singkat!']);
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        if($this->form_validation->run() == false){
            $data['title'] = 'E - Score | Daftar';
            $this->load->view('templates/auth_header', $data);
            $data['sekolah'] = $this->product_model->get_category()->result();
            $this->load->view('auth/regis', $data);
            $this->load->view('templates/auth_footer2');
        }
        else {
            $name   = $this->input->post('name',TRUE);
            $notlp   = $this->input->post('notlp',TRUE);
            $email = $this->input->post('email',TRUE);
            $username = $this->input->post('username',TRUE);
            $password  = $this->input->post('password',TRUE);
            $alamat  = $this->input->post('alamat',TRUE);
            $tl = $this->input->post('tl',TRUE);
            $ttl = $this->input->post('ttl',TRUE);
            $jurusan  = $this->input->post('sekolah',TRUE);
            $kelas = $this->input->post('subsekolah',TRUE);
            $foto = $_FILES['foto'];
            if ($foto=''){}
            else{
                $config['upload_path']='./assets/foto';
                $config['allowed_types']='jpg|jpeg|png|gif';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Foto Gagal!</div>');
                    redirect('auth/regis');
                }
                else{
                    $foto=$this->upload->data('file_name');
                }
            }
            $this->product_model->awal1($email);
            $this->product_model->awal2($email);
            $this->product_model->awal3($email,$kelas);
            $this->product_model->awal4($email);
            $this->product_model->regis($name,$notlp,$email,$username,$password,$alamat,$jurusan,$kelas,$foto,$ttl,$tl);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Daftar Berhasil!. Silahkan Login</div>');
            redirect('auth');
        }
        
        
    }
    function get_sub_category(){
        $id_sek = $this->input->post('id',TRUE);
        $data = $this->product_model->get_sub_category($id_sek)->result();
        echo json_encode($data);
    }
    function get_subnm(){
        $id_sub = $this->input->post('id',TRUE);
        $data = $this->product_model->get_sub_nm($id_sub)->result();
        echo json_encode($data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
    public function regis2(){
        $this->form_validation->set_rules('name','Nama','required|trim');
        $this->form_validation->set_rules('notlp','Nomor Telepon','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email',['valid_email' => 'Email Tidak Valid. Contoh : qwerty@asd.com']);
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[5]',['min_length' => 'Password Teralalu Singkat!']);
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('matpel','Mata Pelajaran','required|trim');
        $this->form_validation->set_rules('kelas','Kelas','required|trim');
        if($this->form_validation->run() == false){
            $data['title'] = 'E - Score | Daftar';
            $this->load->view('templates/auth_header', $data);
            $data['sekolah'] = $this->product_model->get_category()->result();
            $this->load->view('auth/regis2', $data);
            $this->load->view('templates/auth_footer');
        }
        else {
            $name   = $this->input->post('name',TRUE);
            $notlp   = $this->input->post('notlp',TRUE);
            $email   = $this->input->post('email',TRUE);
            $username = $this->input->post('username',TRUE);
            $password  = $this->input->post('password',TRUE);
            $alamat = $this->input->post('alamat',TRUE);
            $tl = $this->input->post('tl',TRUE);
            $ttl = $this->input->post('ttl',TRUE);
            $matpel  = $this->input->post('matpel',TRUE);
            $kelas = $this->input->post('kelas',TRUE);
            $foto = $_FILES['foto'];
            if ($foto=''){}
            else{
                $config['upload_path']='./assets/foto';
                $config['allowed_types']='jpg|jpeg|png|gif';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Foto Gagal!</div>');
                    redirect('auth/regis2');
                }
                else{
                    $foto=$this->upload->data('file_name');
                }
            }
            $this->product_model->regis2($name,$notlp,$email,$username,$password,$alamat,$matpel,$kelas,$foto,$ttl,$tl);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Daftar Berhasil!. Silahkan Login</div>');
            redirect('auth');
        }
    }
    public function change(){
        $this->form_validation->set_rules('email','Email','required|trim|valid_email',['valid_email' => 'Email Tidak Valid. Contoh : qwerty@asd.com']);
        $this->form_validation->set_rules('pass','Password','required|trim|min_length[5]',['min_length' => 'Password Teralalu Singkat!']);
        $this->form_validation->set_rules('pass1','Password','required|trim|min_length[5]',['min_length' => 'Password Teralalu Singkat!']);
        if($this->form_validation->run() == false){
        $data['title'] = 'E - Score | Lupa Password';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/change');
        $this->load->view('templates/auth_footer');
        }
        else {
            $email = $this->input->post('email');
            $cek = $this->db->get_where('user', ['Email' => $email])->row_array();
            if($cek){
                $this->form_validation->set_rules('pass','Password','matches[pass1]',['matches' => 'Password Tidak Sama']);
                $this->form_validation->set_rules('pass1','Password','matches[pass]',['matches' => 'Password Tidak Sama']);
                if($this->form_validation->run() == false){
                $data['title'] = 'E - Score | Lupa Password';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/change');
                $this->load->view('templates/auth_footer');
                } else{
                $pass = $this->input->post('pass');
                $this->db->set('password', $pass);
                $this->db->where('email', $email);
                $this->db->update('user');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diganti!</div>');
                redirect('auth');
                }
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
                redirect('auth/change');
            }
        }
    }
    public function changeun(){
        $this->form_validation->set_rules('email','Email','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run() == false){
        $data['title'] = 'E - Score | Lupa Username';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/changeun');
        $this->load->view('templates/auth_footer');
        }
        else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $cek = $this->db->get_where('user', ['Email' => $email])->row_array();
            if($cek){
                $cek2= $this->db->get_where('user', ['Password' => $password])->row_array();
                if($cek2){
                    if($this->form_validation->run() == false){
                    $data['title'] = 'E - Score | Lupa Username';
                    $this->load->view('templates/auth_header', $data);
                    $this->load->view('auth/changeun');
                    $this->load->view('templates/auth_footer');
                    } else{
                    $username = $this->input->post('username');
                    $this->db->set('Username', $username);
                    $this->db->where('Email', $email);
                    $this->db->where('Password', $password);
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Username Berhasil Diganti!</div>');
                    redirect('auth');
                    }
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Passowrd Anda Salah!</div>');
                    redirect('auth/changeun');
                }
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
                redirect('auth/changeun');
            }
        }
    }
    
}
?>