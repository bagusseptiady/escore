<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./Spreadsheet/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
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
        $nha = $this->product_model->nilaiharia()->result();
        $nama = $this->product_model->namkel()->result();
        $sheet = new Spreadsheet();
        $sheet->getProperties()->setCreator('SMKN 24 Jakarta')
        ->setLastModifiedBy('SMKN 24 Jakarta')
        ->setTitle('Nilai Harian')
        ->setSubject('Nilai Harian')
        ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Nilai Siswa');

        $sheett = $sheet->getActiveSheet();
        $sheett->setCellValue('A1','No');
        $sheett->setCellValue('B1','Semester');
        $sheett->setCellValue('C1','Mata Pelajaran');
        $sheett->setCellValue('D1','Nilai Harian 1');
        $sheett->setCellValue('E1','Nilai Harian 2');
        $sheett->setCellValue('F1','Nilai Harian 3');
        $sheett->setCellValue('G1','Nilai Harian 4');
        $sheett->setCellValue('H1','Nilai Harian 5');
        $sheett->setCellValue('I1','Rata-Rata');

        $baris=2;
        $no=1;
        foreach ($nha as $nh) {
            if($nh->Semester&&$nh->Matpel!=NULL){
            $sheett = $sheet->getActiveSheet();
            $sheett->setCellValue('A'.$baris, $no++);
            $sheett->setCellValue('B'.$baris, $nh->Semester);
            $sheett->setCellValue('C'.$baris, $nh->Nama_Matpel);
            $sheett->setCellValue('D'.$baris, $nh->NH1);
            $sheett->setCellValue('E'.$baris, $nh->NH2);
            $sheett->setCellValue('F'.$baris, $nh->NH3);
            $sheett->setCellValue('G'.$baris, $nh->NH4);
            $sheett->setCellValue('H'.$baris, $nh->NH5);
            $sheett->setCellValue('I'.$baris, $nh->KKMNH);
            $sheett->setCellValue('I'.$baris, $nh->Rata);
            $baris++;
            }
        }
        foreach ($nama as $nma) {
            $filename = 'Nilai Harian '.$nma->Nama.'.xlsx';
        }
        $sheet->getActiveSheet()->setTitle('Nilai Harian');
        $sheet->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        header('Expires: 0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
        header('Cache-Control: cache, must-revalidate'); 
        header('Pragma: public'); 

        $writer = IOFactory::createWriter($sheet,'Xlsx');
        $writer->save('php://output');

        exit;
    }
    public function excelpts(){
        $npts = $this->product_model->nilaipetes()->result();
        $nama = $this->product_model->namkel()->result();
        $sheet1 = new Spreadsheet();
        $sheet1->getProperties()->setCreator('SMKN 24 Jakarta')
        ->setLastModifiedBy('SMKN 24 Jakarta')
        ->setTitle('Nilai PTS')
        ->setSubject('Nilai PTS')
        ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Nilai Siswa');

        $sheett1 = $sheet1->getActiveSheet();
        $sheett1->setCellValue('A1','No');
        $sheett1->setCellValue('B1','Semester');
        $sheett1->setCellValue('C1','Mata Pelajaran');
        $sheett1->setCellValue('D1','Nilai Harian');
        $sheett1->setCellValue('E1','PTS');
        $sheett1->setCellValue('F1','KKM');
        $sheett1->setCellValue('G1','Predikat');
        $baris=2;
        $no=1;
        foreach ($npts as $pts) {
            if($pts->Semester&&$pts->Matpel!=NULL){
            $sheett1 = $sheet1->getActiveSheet();
            $sheett1->setCellValue('A'.$baris, $no++);
            $sheett1->setCellValue('B'.$baris, $pts->Semester);
            $sheett1->setCellValue('C'.$baris, $pts->Nama_Matpel);
            $sheett1->setCellValue('D'.$baris, $pts->NH);
            $sheett1->setCellValue('E'.$baris, $pts->PTS);
            $sheett1->setCellValue('F'.$baris, $pts->KKMT);
            $sheett1->setCellValue('G'.$baris, $pts->Predikat);
            $baris++;
            }
        }
        foreach ($nama as $nma) {
            $filename = 'Nilai PTS '.$nma->Nama.'.xlsx';
        }
        $sheet1->getActiveSheet()->setTitle('Nilai PTS');
        $sheet1->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        header('Expires: 0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
        header('Cache-Control: cache, must-revalidate'); 
        header('Pragma: public'); 

        $writer = IOFactory::createWriter($sheet1,'Xlsx');
        $writer->save('php://output');

        exit;
    }
    
    public function excelpas(){
        $npas = $this->product_model->nilaipeakh()->result();
        $nama = $this->product_model->namkel()->result();
        $sheet2 = new Spreadsheet();
        $sheet2->getProperties()->setCreator('SMKN 24 Jakarta')
        ->setLastModifiedBy('SMKN 24 Jakarta')
        ->setTitle('Nilai PAS')
        ->setSubject('Nilai PAS')
        ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Nilai Siswa');

        $sheett2 = $sheet2->getActiveSheet();
        $sheett2->setCellValue('A1','No');
        $sheett2->setCellValue('B1','Semester');
        $sheett2->setCellValue('C1','Mata Pelajaran');
        $sheett2->setCellValue('D1','PAS');
        $sheett2->setCellValue('E1','KKM');
        $sheett2->setCellValue('F1','Nilai Pengetahuan');
        $sheett2->setCellValue('G1','KKM');
        $sheett2->setCellValue('H1','Nilai Keterampilan');
        $sheett2->setCellValue('I1','KKM');
        $sheett2->setCellValue('J1','Predikat');

        $baris=2;
        $no=1;
        foreach ($npas as $pas) {
            if($pas->Semester&&$nh->Matpel!=NULL){
            $sheett2 = $sheet2->getActiveSheet();
            $sheett2->setCellValue('A'.$baris, $no++);
            $sheett2->setCellValue('B'.$baris, $pas->Semester);
            $sheett2->setCellValue('C'.$baris, $pas->Matpel);
            $sheett2->setCellValue('D'.$baris, $pas->PAS);
            $sheett2->setCellValue('E'.$baris, $pas->KKMA);
            $sheett2->setCellValue('F'.$baris, $pas->NP);
            $sheett2->setCellValue('G'.$baris, $pas->KKM);
            $sheett2->setCellValue('H'.$baris, $pas->NK);
            $sheett2->setCellValue('I'.$baris, $pas->KKM2);
            $sheett2->setCellValue('J'.$baris, $pas->Predikat);
            $baris++;
            }
        }
        foreach ($nama as $nma) {
            $filename = 'Nilai PAS '.$nma->Nama.'.xlsx';
        }
        $sheet2->getActiveSheet()->setTitle('Nilai PAS ');
        $sheet2->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        header('Expires: 0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
        header('Cache-Control: cache, must-revalidate'); 
        header('Pragma: public'); 

        $writer = IOFactory::createWriter($sheet2,'Xlsx');
        $writer->save('php://output');

        exit;
    }
    public function excelabsen(){
        $absen = $this->product_model->cri5()->result();
        $nam = $this->product_model->namkela()->result();
        $sheet3 = new Spreadsheet();
        $sheet3->getProperties()->setCreator('SMKN 24 Jakarta')
        ->setLastModifiedBy('SMKN 24 Jakarta')
        ->setTitle('Absen')
        ->setSubject('Absen')
        ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Absen Siswa');

        $sheett3 = $sheet3->getActiveSheet();
        $sheett3->setCellValue('A1','No');
        $sheett3->setCellValue('B1','Nama');
        $sheett3->setCellValue('C1','Absen');
        $sheett3->setCellValue('D1','Semester 1');
        $sheett3->setCellValue('E1','Alpa');
        $sheett3->setCellValue('F1','Sakit');
        $sheett3->setCellValue('G1','Izin');
        $sheett3->setCellValue('H1','Semester 2');
        $sheett3->setCellValue('I1','Alpa');
        $sheett3->setCellValue('J1','Sakit');
        $sheett3->setCellValue('K1','Izin');

        $baris=2;
        $no=1;
        foreach ($absen as $ab) {
            $sheett3 = $sheet3->getActiveSheet();
            $sheett3->setCellValue('A'.$baris, $no++);
            $sheett3->setCellValue('B'.$baris, $ab->Nama);
            $sheett3->setCellValue('C'.$baris, $ab->Nilai);
            $sheett3->setCellValue('D'.$baris, $ab->Semester1);
            $sheett3->setCellValue('E'.$baris, $ab->Alpa);
            $sheett3->setCellValue('F'.$baris, $ab->Sakit);
            $sheett3->setCellValue('G'.$baris, $ab->Izin);
            $sheett3->setCellValue('H'.$baris, $ab->Semester2);
            $sheett3->setCellValue('I'.$baris, $ab->Alpa2);
            $sheett3->setCellValue('J'.$baris, $ab->Sakit2);
            $sheett3->setCellValue('K'.$baris, $ab->Izin2);
            $baris++;
        }
        foreach ($nam as $nma) {
            $filename = 'Absen Siswa '.$nma->Nama_Kelas.'.xlsx';
        }
        $sheet3->getActiveSheet()->setTitle('Absen Siswa ');
        $sheet3->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        header('Expires: 0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
        header('Cache-Control: cache, must-revalidate'); 
        header('Pragma: public'); 

        $writer = IOFactory::createWriter($sheet3,'Xlsx');
        $writer->save('php://output');

        exit;
    }
    public function excelab(){
        $abse = $this->product_model->cri6()->result();
        $na = $this->product_model->namkela()->result();
        $sheet4 = new Spreadsheet();
        $sheet4->getProperties()->setCreator('SMKN 24 Jakarta')
        ->setLastModifiedBy('SMKN 24 Jakarta')
        ->setTitle('Absen')
        ->setSubject('Absen')
        ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
        ->setKeywords('office 2007 openxml php')
        ->setCategory('Absen Siswa');

        $sheett4 = $sheet4->getActiveSheet();
        $sheett4->setCellValue('A1','No');
        $sheett4->setCellValue('B1','Nama');
        $sheett4->setCellValue('C1','Absen');
        $sheett4->setCellValue('D1','Semester 1');
        $sheett4->setCellValue('E1','Alpa');
        $sheett4->setCellValue('F1','Sakit');
        $sheett4->setCellValue('G1','Izin');
        $sheett4->setCellValue('H1','Semester 2');
        $sheett4->setCellValue('I1','Alpa');
        $sheett4->setCellValue('J1','Sakit');
        $sheett4->setCellValue('K1','Izin');
        $baris=2;
        $no=1;
        foreach ($abse as $abs) {
            $sheett4 = $sheet4->getActiveSheet();
            $sheett4->setCellValue('A'.$baris, $no++);
            $sheett4->setCellValue('B'.$baris, $abs->Nama);
            $sheett4->setCellValue('C'.$baris, $abs->Nilai);
            $sheett4->setCellValue('D'.$baris, $abs->Semester1);
            $sheett4->setCellValue('E'.$baris, $abs->Alpa);
            $sheett4->setCellValue('F'.$baris, $abs->Sakit);
            $sheett4->setCellValue('G'.$baris, $abs->Izin);
            $sheett4->setCellValue('H'.$baris, $abs->Semester2);
            $sheett4->setCellValue('I'.$baris, $abs->Alpa2);
            $sheett4->setCellValue('J'.$baris, $abs->Sakit2);
            $sheett4->setCellValue('K'.$baris, $abs->Izin2);
            $baris++;
        }
        foreach ($na as $nma) {
            $filename = 'Absen Siswa '.$nma->Nama_Kelas.'.xlsx';
        }
        $sheet4->getActiveSheet()->setTitle('Absen Siswa');
        $sheet4->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        header('Expires: 0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
        header('Cache-Control: cache, must-revalidate'); 
        header('Pragma: public'); 

        $writer = IOFactory::createWriter($sheet4,'Xlsx');
        $writer->save('php://output');

        exit;
    }
}
?>