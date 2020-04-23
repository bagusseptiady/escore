<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dash_model extends CI_Model{
 
    public function nsmp()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH1','100');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nsmp2()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH2','100');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nsmp3()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH3','100');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nsmp4()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH4','100');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nsmp5()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH5','100');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nsmp6()
    {   
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('PTS','100');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nsmp7()
    {   
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('PAS','100');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function ndbk()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH1<KKMNH');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function ndbk2()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH2<KKMNH');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function ndbk3()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH3<KKMNH');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function ndbk4()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH4<KKMNH');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function ndbk5()
    {   
        $this->db->select('*');
        $this->db->from('nilaiharian');
        $this->db->where('user_id',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH5<KKMNH');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function ndbk6()
    {   
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('PTS<KKMT');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function ndbk7()
    {   
        $this->db->select('*');
        $this->db->from('nilairaport');
        $this->db->where('uid',$this->session->userdata('id_user'));
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('PAS<KKMA');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nksg()
    {   
        $this->db->select('NH1');
        $this->db->from('nilaiharian');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH1','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nksg2()
    {   
        $this->db->select('NH2');
        $this->db->from('nilaiharian');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH2','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nksg3()
    {   
        $this->db->select('NH3');
        $this->db->from('nilaiharian');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH3','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nksg4()
    {   
        $this->db->select('NH4');
        $this->db->from('nilaiharian');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH4','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nksg5()
    {   
        $this->db->select('NH5');
        $this->db->from('nilaiharian');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NH5','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        $query = $this->db->get();
        return $query;
    }
    public function nksg6()
    {   
        $this->db->select('PTS');
        $this->db->from('nilairaport');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('PTS','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        return $query;
    }
    public function nksg7()
    {   
        $this->db->select('PAS');
        $this->db->from('nilairaport');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('PAS','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        return $query;
    }
    public function nksg8()
    {   
        $this->db->select('NP');
        $this->db->from('nilairaport');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NP','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        return $query;
    }
    public function nksg9()
    {   
        $this->db->select('NK');
        $this->db->from('nilairaport');
        $this->db->join('matapel','id_mt= Matpel','left');
        $this->db->where('NK','0');
        $this->db->order_by('Semester','ASC');
        $this->db->order_by('Matpel','ASC');
        return $query;
    }
}