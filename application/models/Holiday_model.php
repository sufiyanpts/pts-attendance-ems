<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday_model extends CI_Model {


    function insert_holiday($data)
    {
        $this->db->insert("holiday_tbl",$data);
        return $this->db->insert_id();
    }

    function select_holiday()
    {
        $qry=$this->db->get('holiday_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_holiday_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('holiday_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_holiday($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("holiday_tbl");
        $this->db->affected_rows();
    }

    

    function update_holiday($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('holiday_tbl',$data);
        $this->db->affected_rows();
    }


}
