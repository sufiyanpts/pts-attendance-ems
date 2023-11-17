<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {


    function insert_attendance($data)
    {
        $this->db->insert("attendance_tbl",$data);
        return $this->db->insert_id();
    }

    function select_attendance()
    {
        $this->db->order_by('attendance_tbl.id','DESC');
        $this->db->select("attendance_tbl.*,staff_tbl.staff_name,department_tbl.department_name");
        $this->db->from("attendance_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=attendance_tbl.staff_id');
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_department_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('department_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_attendance_byStaffID($staffid)
    {
        $this->db->order_by('attendance_tbl.id','DESC');
        $this->db->where('attendance_tbl.staff_id',$staffid);
        $this->db->select("attendance_tbl.*,staff_tbl.staff_name,department_tbl.department_name");
        $this->db->from("attendance_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=attendance_tbl.staff_id');
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_attendance_forApprove()
    {
        $this->db->where('attendance_tbl.status',0);
        $this->db->select("attendance_tbl.*,staff_tbl.staff_name,department_tbl.department_name");
        $this->db->from("attendance_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=attendance_tbl.staff_id');
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }


    

    //Attendance History

    public function filter_attendance_by_date_range($from_date, $to_date) {
        // Filter attendance records by the provided date range
        $this->db->where('date >=', $from_date);
        $this->db->where('date <=', $to_date);
        return $this->db->get('attendance_tbl')->result();
    }


    public function staff_range_attendance_history($from_date, $to_date, $staff_name){
        $this->db->where('date >=', $from_date);
        $this->db->where('date <=', $to_date);
        $this->db->where('staff_name =', $staff_name);
        $this->db->select("attendance_tbl.*,staff_tbl.staff_name,department_tbl.department_name");
        $this->db->from("attendance_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=attendance_tbl.staff_id');
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }



    //Comp Off 

    function insert_coff($data)
    {
        $this->db->insert("coff_tbl",$data);
        return $this->db->insert_id();
    }

    function select_coff()
    {
        $this->db->order_by('coff_tbl.id','DESC');
        $this->db->select("coff_tbl.*,staff_tbl.pic,staff_tbl.staff_name,department_tbl.department_name");
        $this->db->from("coff_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=coff_tbl.staff_id');
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    

    function select_coff_byStaffID($staffid){
        $this->db->order_by('coff_tbl.id','DESC');
        $this->db->where('coff_tbl.staff_id',$staffid);
        $this->db->select("coff_tbl.*,staff_tbl.staff_name");
        $this->db->from("coff_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=coff_tbl.staff_id');
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_coff_forApprove()
    {
        $this->db->where('coff_tbl.status',0);
        $this->db->select("coff_tbl.*,staff_tbl.staff_name,department_tbl.department_name");
        $this->db->from("coff_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=coff_tbl.staff_id');  
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_coff($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("coff_tbl");
        $this->db->affected_rows();
    }

    
    
    function update_coff($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('coff_tbl',$data);
        $this->db->affected_rows();
    }

    





}

?>