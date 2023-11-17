<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birthday_model extends CI_Model {

    function insert_birthday($data)
    {
        $this->db->insert("birthday_tbl",$data);
        return $this->db->insert_id();
    }



    function select_birthday()
    {
        
        $this->db->order_by('birthday_tbl.id','AESC');
        $this->db->select("birthday_tbl.*,staff_tbl.staff_name,staff_tbl.dob");
        $this->db->from("birthday_tbl");
        $this->db->join("staff_tbl",'staff_tbl.staff_name=birthday_tbl.staff_name','staff_tbl.dob=birthday_tbl.dob');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
 
    

        function select_birthday_byID($id)
        {
    
            $this->db->where('id',$id);
            $qry=$this->db->get('birthday_tbl');
            if($qry->num_rows()>0)
            {
                $result=$qry->result_array();
                return $result;
            }
        }

    function select_birthday_byStaffID($staffid)
    {
        $this->db->order_by('birthday_tbl.id','AESC');
        $this->db->where('birthday_tbl.staff_name',$staffid);
        $this->db->select("birthday_tbl.*,staff_tbl.staff_name");
        $this->db->from("birthday_tbl");
        $this->db->join("staff_tbl",'staff_tbl.dob=birthday_tbl.dob');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_birthday($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("birthday_tbl");
        $this->db->affected_rows();
    }

}

?>


