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
                $this->product_model->up($id,$email);
                $this->product_model->up1($id,$email);
                $this->product_model->up2($id,$email);
                $this->product_model->up3($id,$email);
                $this->product_model->update2($id,$name,$notlp,$email,$username,$password,$alamat,$jurusan,$kelas,$ttl,$tl);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Edit</div>');
                redirect('page/profil2');
                  
            }
            else{
                $foto=$this->upload->data('file_name');
            }
            $this->product_model->up($id,$email);
            $this->product_model->up1($id,$email);
            $this->product_model->up2($id,$email);
            $this->product_model->up3($id,$email);
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
    function hapus3(){
        $idab=$this->input->post('id_absen');
        $this->product_model->hapusab($idab);
        redirect('page/absen');
    }
    function hapus4(){
        $idpt=$this->input->post('id_pts');
        $this->product_model->hapusnp($idpt);
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
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $this->product_model->tambahh($id,$nh1,$nh2,$nh3,$nh4,$nh5,$kkmnh,$matpel,$semester);
        redirect('page/lihat');
    }
    function tambah2(){
        $id  = $this->input->post('uid',TRUE);
        $pas = $this->input->post('pas',TRUE);
        $kkma = $this->input->post('kkma',TRUE);
        $np = $this->input->post('np',TRUE);
        $nk  = $this->input->post('nk',TRUE);
        $kkm = $this->input->post('kkm',TRUE);
        $kkm2 = $this->input->post('kkm2',TRUE);
        $predikat  = $this->input->post('predikat',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $this->product_model->tambahh2($id,$nh,$pts,$kkmt,$pas,$kkma,$np,$kkm,$nk,$kkm2,$predikat,$matpel,$semester);
        redirect('page/lihat');
    }
    function tambah3(){
        $id  = $this->input->post('id_us',TRUE);
        $np = $this->input->post('np',TRUE);
        $pts = $this->input->post('pts',TRUE);
        $kkmt = $this->input->post('kkmt',TRUE);
        $predikat  = $this->input->post('predikat',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $this->product_model->tambahh3($id,$np,$pts,$predikat,$matpel,$semester);
        redirect('page/lihat');
    }
    function ed(){
        $id  = $this->input->post('user_id',TRUE);
        $nh1 = $this->input->post('nh1',TRUE);
        $nh2 = $this->input->post('nh2',TRUE);
        $nh3 = $this->input->post('nh3',TRUE);
        $nh4 = $this->input->post('nh4',TRUE);
        $nh5  = $this->input->post('nh5',TRUE);
        $kkmnh = $this->input->post('kkmnh',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $idnh=$this->input->post('idnh');
        $this->product_model->edd($id,$idnh,$nh1,$nh2,$nh3,$nh4,$nh5,$kkmnh,$matpel,$semester);
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
        $predikat  = $this->input->post('predikat',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $idr=$this->input->post('idr');
        $this->product_model->edd2($id,$idr,$nh,$pts,$pas,$np,$nk,$kkmt,$kkma,$kkm,$kkm2,$predikat,$matpel,$semester);
        redirect('page/lihat');
    }
    function ed3(){
        $id  = $this->input->post('usr_id',TRUE);
        $alpa = $this->input->post('alpa',TRUE);
        $sakit = $this->input->post('sakit',TRUE);
        $izin = $this->input->post('izin',TRUE);
        $alpa2 = $this->input->post('alpa2',TRUE);
        $sakit2 = $this->input->post('sakit',TRUE);
        $izin2 = $this->input->post('izin2',TRUE);
        $idab=$this->input->post('id_absen');
        $this->product_model->edd3($id,$idab,$alpa,$sakit,$izin,$alpa2,$sakit2,$izin2);
        redirect('page/absen');
    }
    function ed4(){
        $id  = $this->input->post('id_us',TRUE);
        $nh = $this->input->post('nh',TRUE);
        $pts = $this->input->post('pts',TRUE);
        $kkmt = $this->input->post('kkmt',TRUE);
        $predikat  = $this->input->post('predikat',TRUE);
        $matpel  = $this->input->post('matpel',TRUE);
        $semester = $this->input->post('semester',TRUE);
        $idp=$this->input->post('idp');
        $this->product_model->edd4($id,$idp,$nh,$pts,$predikat,$matpel,$semester);
        redirect('page/lihat');
    }
    public function cetakpts(){
        $this->load->library('dompdf_gen');
        $data['dee'] = $this->product_model->cri4()->result();
        $data['pts'] = $this->product_model->nilaipt()->result();
        $data['siswa'] = $this->product_model->got()->result();
        $this->load->view('page/cetakpts',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Nilai_PTS_S1.pdf", array('Attachment' => 0));
    }
    public function cetakpts2(){
        $this->load->library('dompdf_gen');
        $data['dee'] = $this->product_model->cri34->result();
        $data['pts'] = $this->product_model->nilaipts()->result();
        $data['siswa'] = $this->product_model->got()->result();
        $this->load->view('page/cetakpts2',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Nilai_PTS_S2.pdf", array('Attachment' => 0));
    }
    public function cetakpas(){
        $this->load->library('dompdf_gen');
        $data['de'] = $this->product_model->cri3()->result();
        $data['pas'] = $this->product_model->nilair()->result();
        $data['siswa'] = $this->product_model->got()->result();
        $this->load->view('page/cetakpas',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Nilai_PAS_S1.pdf", array('Attachment' => 0));
    }
    public function cetakpas2(){
        $this->load->library('dompdf_gen');
        $data['de'] = $this->product_model->cri3()->result();
        $data['pas'] = $this->product_model->nilaira()->result();
        $data['siswa'] = $this->product_model->got()->result();
        $this->load->view('page/cetakpas2',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Nilai_PAS_S2.pdf", array('Attachment' => 0));
    }
    public function excelnh(){
        $data['nilai'] = $this->product_model->nilaihar()->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("SMKN 24 Jakarta");
        $object->getProperties()->setLastModifiedBy("SMKN 24 Jakarta");
        $object->getProperties()->setTitle("Nilai Harian");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Semester');
        $object->getActiveSheet()->setCellValue('C1', 'Mata Pelajaran');
        $object->getActiveSheet()->setCellValue('D1', 'Nilai Harian 1');
        $object->getActiveSheet()->setCellValue('E1', 'Nilai Harian 2');
        $object->getActiveSheet()->setCellValue('F1', 'Nilai Harian 3');
        $object->getActiveSheet()->setCellValue('G1', 'Nilai Harian 4');
        $object->getActiveSheet()->setCellValue('H1', 'Nilai Harian 5');
        $object->getActiveSheet()->setCellValue('I1', 'Rata-Rata');

        $baris = 2;
        $no = 1;
        foreach ($data['nilai'] as $nh) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $nh->Semester);
            $object->getActiveSheet()->setCellValue('C'.$baris, $nh->Matpel);
            $object->getActiveSheet()->setCellValue('D'.$baris, $nh->NH1);
            $object->getActiveSheet()->setCellValue('E'.$baris, $nh->NH2);
            $object->getActiveSheet()->setCellValue('F'.$baris, $nh->NH3);
            $object->getActiveSheet()->setCellValue('G'.$baris, $nh->NH4);
            $object->getActiveSheet()->setCellValue('H'.$baris, $nh->NH5);
            $object->getActiveSheet()->setCellValue('I'.$baris, $nh->Rata);
            $baris++;
        }
        $filename="Nilai_Harian".'.xlsx';
        $object->getActiveSheet()->setTitle("Nilai Harian");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
?>