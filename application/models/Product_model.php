<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Product_model extends CI_Model{
     
    function get_category(){
        $query = $this->db->get('sekolah');
        return $query;  
    }
    function get_mt(){
        $query = $this->db->get('matapel');
        return $query;  
    }
    function get_sub(){
        $query = $this->db->get('subsekolah');
        return $query;  
    }
    function get(){
        $query = $this->db->get_where('user',array('id_user' => $this->session->userdata('id_user')));
        return $query;
    }
    
    function got(){
        $this->db->select('id_user,Nama,Notlp,Email,Username,Password,Alamat,Foto,Sekolah,id_sek,id_sub,Nama_Jurusan,Nama_Kelas');
        $this->db->from('user');
        $this->db->where('id_user',$this->session->userdata('id_user') );
        $this->db->join('sekolah','id_sek= Jurusan','left');
        $this->db->join('subsekolah','id_sub = Kelas','left'); 
        $query = $this->db->get();
        return $query;
    }
    function get_sub_category($id_sek){
        $query = $this->db->get_where('subsekolah', array('sek_id' => $id_sek));
        return $query;
    }
    function get_sub_nm($id_sub){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('Kelas',$id_sub);
        $this->db->order_by('Nama','ASC');
        $query = $this->db->get();
        return $query;
    }
    function regis($name,$notlp,$email,$username,$password,$alamat,$jurusan,$kelas,$foto,$sekolah){
        $data = array(
            'Nama' => $name,
            'Notlp' => $notlp,
            'Email' => $email,
            'Username' => $username,
            'Password' => $password,
            'Alamat' => $alamat,
            'Sekolah' => $sekolah,
            'Jurusan' => $jurusan,
            'Kelas' => $kelas,
            'Foto' => $foto,
            'Level' => 'Siswa'

        );
        $this->db->insert('user',$data);
    }
    function regis2($name,$notlp,$email,$username,$password,$alamat,$matpel,$kelas,$foto,$sekolah){
        $data = array(
            'Nama' => $name,
            'Notlp' => $notlp,
            'Email' => $email,
            'Username' => $username,
            'Password' => $password,
            'Alamat' => $alamat,
            'Sekolah' => $sekolah,
            'Matpelguru' => $matpel,
            'Kelas2' => $kelas,
            'Foto' => $foto,
            'Level' => 'Guru'

        );
        $this->db->insert('user',$data);
    }
    
    function update($id,$name,$notlp,$email,$username,$password,$alamat,$jurusan,$kelas,$foto,$sekolah){
        $this->db->query("UPDATE user SET Nama='$name',Notlp='$notlp',Email='$email', Username='$username', Password='$password' ,Alamat='$alamat',Foto='$foto',Sekolah='$sekolah',Jurusan='$jurusan',Kelas='$kelas' WHERE id_user='$id'");
    }
    function update2($id,$name,$notlp,$email,$username,$password,$alamat,$jurusan,$kelas,$sekolah){
        $this->db->query("UPDATE user SET Nama='$name',Notlp='$notlp',Email='$email', Username='$username', Password='$password' ,Alamat='$alamat',Sekolah='$sekolah',Jurusan='$jurusan',Kelas='$kelas' WHERE id_user='$id'");
    }
    function update3($id,$name,$notlp,$email,$username,$password,$alamat,$matpel,$kelas,$foto,$sekolah){
        $this->db->query("UPDATE user SET Nama='$name',Notlp='$notlp',Email='$email', Username='$username', Password='$password' ,Alamat='$alamat',Foto='$foto',Sekolah='$sekolah',Matpelguru='$matpel',Kelas2='$kelas' WHERE id_user='$id'");
    }
    function update4($id,$name,$notlp,$email,$username,$password,$alamat,$matpel,$kelas,$sekolah){
        $this->db->query("UPDATE user SET Nama='$name',Notlp='$notlp',Email='$email', Username='$username', Password='$password' ,Alamat='$alamat',Sekolah='$sekolah',Matpelguru='$matpel',Kelas2='$kelas' WHERE id_user='$id'");
    }
    function nilaih(){
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('Semester','Semester 1');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    function nilaiha(){
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('Semester','Semester 2');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    function nilaihar(){
        $nm = $this->input->post('nam',TRUE);
        $sm = $this->input->post('sm',TRUE);
        $kls = $this->input->post('subsekolah',TRUE);
        $sesdata = array(
            'Nam'   => $nm,
            'Kls'  => $kls                
        );
        $this->session->set_flashdata($sesdata);
        if($sm=='Semua'){
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$nm);
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
        }
        else{
            $this->db->select('*');
            $this->db->from('nilaiharian');
            $this->db->where('user_id',$nm);
            $this->db->where('Semester',$sm);
            $this->db->join('matapel','id_mt= Matpel','left');
            $this->db->order_by('Matpel','ASC');
            $query = $this->db->get();
            return $query;
        }
    }
    function namkel(){
        $this->db->select('Nama,id_sub,Nama_Kelas');
        $this->db->from('user');
        $this->db->where('id_user',$this->session->flashdata('Nam') );
        $this->db->join('subsekolah','id_sub = Kelas','left'); 
        $query = $this->db->get();
        return $query;
    }
    function nilair(){
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('Semester','Semester 1');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    function nilaira(){
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('Semester','Semester 2');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    function nilairap(){
        $nm = $this->input->post('nam',TRUE);
        $sm = $this->input->post('sm',TRUE);
        $kls = $this->input->post('subsekolah',TRUE);
        if($sm =='Semua'){
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$nm);
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
        }
        else{
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$nm);
        $this->db->where('Semester',$sm);
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
        }
    }
    function cri(){
        $kel = $this->input->post('subsekolah',TRUE);
        $this->db->select('id_user,Nama,Notlp,Email,Username,Password,Alamat,Foto,Sekolah,id_sub,Nama_Kelas');
        $this->db->from('user');
        $this->db->where('Kelas',$kel);
        $this->db->join('subsekolah','id_sub = Kelas','left');
        $this->db->order_by('Nama','ASC');
        $query = $this->db->get();
        return $query;
    }
    function hapusnh($idnh){
        $this->db->query("DELETE FROM nilaiharian WHERE id_nh='$idnh'");
    }
    function hapusnr($idr){
        $this->db->query("DELETE FROM nilairaport WHERE id_raport='$idr'");
    }
    function tambahh($id,$nh1,$nh2,$nh3,$nh4,$nh5,$kkmnh,$rata,$matpel,$semester){
        $data = array(
            'Semester' => $semester,
            'Matpel' => $matpel,
            'NH1' => $nh1,
            'NH2' => $nh2,
            'NH3' => $nh3,
            'NH4' => $nh4,
            'NH5' => $nh5,
            'KKMNH' => $kkmnh,
            'Rata' => $rata,
            'user_id' => $id

        );
        $this->db->insert('nilaiharian',$data);
    }
    function tambahh2($id,$nh,$pts,$kkmt,$pas,$kkma,$np,$kkm,$nk,$kkm2,$matpel,$semester){
        $data = array(
            'Semester' => $semester,
            'Matpel' => $matpel,
            'NH' => $nh,
            'PTS' => $pts,
            'KKMT' => $kkmt,
            'PAS' => $pas,
            'KKMA' => $kkma,
            'NP' => $np,
            'KKM' => $kkm,
            'NK' => $nk,
            'KKM2' => $kkm2,
            'uid' => $id

        );
        $this->db->insert('nilairaport',$data);
    }
    function edd($id,$idnh,$nh1,$nh2,$nh3,$nh4,$nh5,$kkmnh,$rata,$matpel,$semester){
        $this->db->query("UPDATE nilaiharian SET Semester='$semester',Matpel='$matpel',NH1 = '$nh1',NH2 = '$nh2',NH3 = $nh3,NH4 = '$nh4',NH5 = '$nh5',KKMNH => '$kkmnh' ,Rata = '$rata', user_id = '$id' WHERE id_nh='$idnh'");
    }
    function edd2($id,$idr,$nh,$pts,$pas,$np,$nk,$kkmt,$kkma,$kkm,$kkm2,$matpel,$semester){
        
        $this->db->query("UPDATE nilairaport SET NH = '$nh',PTS = '$pts',PAS = $pas,NP = '$np',KKM = '$kkm',KKMT = '$kkmt',KKMA = '$kkma',NK = '$nk',KKM2 = '$kkm2', uid = '$id' WHERE id_raport='$idr'");
        
    }
    function awal1($username){
        $data = array(
            'user_id'=> '1',
            'Namaa' => $username
        );
        $this->db->insert('nilaiharian',$data);
    }
    function awal($id){
        $this->db->query("UPDATE nilaiharian SET user_id='$id'");
    }
    function awal2($username){
        $data = array(
            'uid'=> '1',
            'Namaaa' => $username
        );
        $this->db->insert('nilairaport',$data);
    }
    function awall($id){
        $this->db->query("UPDATE nilairaport SET uid='$id'");
    }
    function get_data(){
        $mt = $this->input->post('mtpl',TRUE);
        if($mt == NULL){
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('Matpel','6');
        $query = $this->db->get();
        return $query;
        }
        else{
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('Matpel',$mt);
        $query = $this->db->get();
        return $query;
        }
    }
    function get_data2(){
        $mt2 = $this->input->post('mtpl2',TRUE);
        if($mt2 == NULL){
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('Matpel','6');
        $query = $this->db->get();
        return $query;
        }
        else{
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('Matpel',$mt2);
        $query = $this->db->get();
        return $query;
        }
    }
    function nampel(){
        $mt = $this->input->post('mtpl',TRUE);
        if($mt == NULL){
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('Matpel','6');
        $this->db->join('matapel','id_mt= Matpel','left'); 
        $query = $this->db->get();
        return $query;
        }
        else{
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('Matpel',$mt);
        $this->db->join('matapel','id_mt= Matpel','left'); 
        $query = $this->db->get();
        return $query;
        }
    }
    function nampel2(){
        $mt2 = $this->input->post('mtpl2',TRUE);
        if($mt2 == NULL){
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('Matpel','6');
        $this->db->join('matapel','id_mt= Matpel','left'); 
        $query = $this->db->get();
        return $query;
        }
        else{
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('Matpel',$mt2);
        $this->db->join('matapel','id_mt= Matpel','left'); 
        $query = $this->db->get();
        return $query;
        }
    }
    
}
?>