<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_model extends CI_Model {


    function insert_branch($data)
    {
        $this->db->insert("branch_tbl",$data);
        return $this->db->insert_id();
    }

    function select_branch()
    {
        $qry=$this->db->get('branch_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_branch_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('branch_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_branch($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("branch_tbl");
        $this->db->affected_rows();
    }

    

    function update_branch($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('branch_tbl',$data);
        $this->db->affected_rows();
    }


}
