<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets_model extends CI_Model {


    function insert_assets($data)
    {
        $this->db->insert("assets",$data);
        return $this->db->insert_id();
    }

    function select_assets()
    {
        $qry=$this->db->get('assets');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_assets_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('assets');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_assets($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("assets");
        $this->db->affected_rows();
    }

    

    function update_assets($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('assets',$data);
        $this->db->affected_rows();
    }

    // function select_assets_byCategory($sts)
    // {
    //     $this->db->where('assets.id',$sts);
    //     $this->db->select("assets.*,assets_category.cat_status");
    //     $this->db->from("assets");
    //     $this->db->join("assets_category",'assets_category.id=assets.id');
    //     $qry=$this->db->get();
    //     if($qry->num_rows()>0)
    //     {
    //         $result=$qry->result_array();
    //         return $result;
    //     }
    // }    

}
