<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anniversary_model extends CI_Model {

    function insert_anniversary($data)
    {
        $this->db->insert("anniversary_tbl",$data);
        return $this->db->insert_id();
    }



    function select_anniversary()
    {
        $this->db->order_by('anniversary_tbl.id','AESC');
        $this->db->select("anniversary_tbl.*,staff_tbl.staff_name,staff_tbl.doj");
        $this->db->from("anniversary_tbl");
        $this->db->join("staff_tbl",'staff_tbl.staff_name=anniversary_tbl.staff_name','staff_tbl.doj=annivarsery_tbl.doj');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
 
    

        function select_anniversary_byID($id)
        {
    
            $this->db->where('id',$id);
            $qry=$this->db->get('anniversary_tbl');
            if($qry->num_rows()>0)
            {
                $result=$qry->result_array();
                return $result;
            }
        }

    function select_anniversary_byStaffID($staffid)
    {
        $this->db->order_by('anniversary_tbl.id','AESC');
        $this->db->where('anniversary_tbl.staff_name',$staffid);
        $this->db->select("anniversary_tbl.*,staff_tbl.staff_name");
        $this->db->from("anniversary_tbl");
        $this->db->join("staff_tbl",'staff_tbl.doj=anniversary_tbl.doj');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_anniversary($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("anniversary_tbl");
        $this->db->affected_rows();
    }
}

?>


