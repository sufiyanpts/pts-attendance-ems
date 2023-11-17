<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assetstype_model extends CI_Model {


    function insert_assetstype($data)
    {
        $this->db->insert("assets_category",$data);
        return $this->db->insert_id();
    }

    function select_assetstype()
    {
        $qry=$this->db->get('assets_category');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_assetstype_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('assets_category');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_assetstype($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("assets_category");
        $this->db->affected_rows();
    }

    

    function update_assetstype($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('assets_category',$data);
        $this->db->affected_rows();
    }


}
