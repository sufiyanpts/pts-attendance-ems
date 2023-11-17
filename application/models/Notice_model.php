<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_model extends CI_Model {


    function insert_notice($data)
    {
        $this->db->insert("notice_tbl",$data);
        return $this->db->insert_id();
    }

    function select_notice()
    {
        $qry=$this->db->get('notice_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_notice_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('notice_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_notice($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("notice_tbl");
        $this->db->affected_rows();
    }

    

    function update_notice($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('notice_tbl',$data);
        $this->db->affected_rows();
    }


}
