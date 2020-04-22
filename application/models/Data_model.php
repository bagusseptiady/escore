<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_model extends CI_Model{
 
    public function nsr()
    {   
        $this->db->select('NH1');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH1','100');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nsr2()
    {   
        $this->db->select('NH2');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH2','100');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nsr3()
    {   
        $this->db->select('NH3');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH3','100');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nsr4()
    {   
        $this->db->select('NH4');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH4','100');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nsr5()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH5','100');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nsr6()
    {   
        $this->db->select('PTS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PTS','100');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nsr7()
    {   
        $this->db->select('PAS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PAS','100');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkkm()
    {   
        $this->db->select('NH1');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH1>=KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkkm2()
    {   
        $this->db->select('NH2');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH2>=KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkkm3()
    {   
        $this->db->select('NH3');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH3>=KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkkm4()
    {   
        $this->db->select('NH4');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH4>=KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkkm5()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH5>=KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    
    public function nkkm6()
    {   
        $this->db->select('PTS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PTS>=KKMT');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkkm7()
    {   
        $this->db->select('PAS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PAS>=KKMT');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nbkkm()
    {   
        $this->db->select('NH1');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH1<KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    
    public function nbkkm2()
    {   
        $this->db->select('NH2');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH2<KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nbkkm3()
    {   
        $this->db->select('NH3');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH3<KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    
    public function nbkkm4()
    {   
        $this->db->select('NH4');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH4<KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    
    public function nbkkm5()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH5<KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nbkkm5a()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH5<KKMNH');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }

    public function nbkkm6()
    {   
        $this->db->select('PTS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PTS<KKMT');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    
    public function nbkkm7()
    {   
        $this->db->select('PAS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PAS<KKMT');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    
    public function nks()
    {   
        $this->db->select('NH1');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH1','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nks2()
    {   
        $this->db->select('NH2');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH2','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nks3()
    {   
        $this->db->select('NH3');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH3','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nks4()
    {   
        $this->db->select('NH4');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH4','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nks5()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->where('NH5','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nks6()
    {   
        $this->db->select('PTS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PTS','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nks7()
    {   
        $this->db->select('PAS');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->where('PAS','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss()
    {   
        $this->db->select('NH1');
        $this->db->from('nilaiharian');
        $this->db->where('NH1','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss2()
    {   
        $this->db->select('NH2');
        $this->db->from('nilaiharian');
        $this->db->where('NH2','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss3()
    {   
        $this->db->select('NH3');
        $this->db->from('nilaiharian');
        $this->db->where('NH3','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss4()
    {   
        $this->db->select('NH4');
        $this->db->from('nilaiharian');
        $this->db->where('NH4','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss5()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->where('NH5','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss6()
    {   
        $this->db->select('PTS');
        $this->db->from('nilairaport');
        $this->db->where('PTS','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss7()
    {   
        $this->db->select('PAS');
        $this->db->from('nilairaport');
        $this->db->where('PAS','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss8()
    {   
        $this->db->select('NP');
        $this->db->from('nilairaport');
        $this->db->where('NP','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss9()
    {   
        $this->db->select('NK');
        $this->db->from('nilairaport');
        $this->db->where('NK','0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkssa()
    {   
        $this->db->select('NH1');
        $this->db->from('nilaiharian');
        $this->db->where('NH1>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss2a()
    {   
        $this->db->select('NH2');
        $this->db->from('nilaiharian');
        $this->db->where('NH2>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss3a()
    {   
        $this->db->select('NH3');
        $this->db->from('nilaiharian');
        $this->db->where('NH3>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss4a()
    {   
        $this->db->select('NH4');
        $this->db->from('nilaiharian');
        $this->db->where('NH4>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss5a()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->where('NH5>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss6a()
    {   
        $this->db->select('PTS');
        $this->db->from('nilairaport');
        $this->db->where('PTS>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss7a()
    {   
        $this->db->select('PAS');
        $this->db->from('nilairaport');
        $this->db->where('PAS>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss8a()
    {   
        $this->db->select('NP');
        $this->db->from('nilairaport');
        $this->db->where('NP>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function nkss9a()
    {   
        $this->db->select('NK');
        $this->db->from('nilairaport');
        $this->db->where('NK>0');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function jkls()
    {   
        $this->db->select('*');
        $this->db->from('subsekolah');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
    public function jssw()
    {   
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('Level','Siswa');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }   
        else
        {
            return 0;
        }
    }
}
?>