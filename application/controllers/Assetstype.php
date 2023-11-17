<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assetstype extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add-assets-type');
        $this->load->view('admin/footer');
    }

    public function manage_assetstype()
    {
        $data['content']=$this->Assetstype_model->select_assetstype();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-assetstype',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $assetstype=$this->input->post('txttypename');
        $assetscat=$this->input->post('txtcatname');
        $data=$this->Assetstype_model->insert_assetstype(array('cat_status'=>$assetstype,'cat_name'=>$assetscat,));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Assets type and Category Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New  Assets type and Category Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $assetstype=$this->input->post('txttypename');
        $assetscat=$this->input->post('txtcatname');
        $data=$this->Assetstype_model->update_assetstype(array('cat_status'=>$assetstype,'cat_name'=>$assetscat),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', " Assets type and Category Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry,  Assets type and Category Update Failed.");
        }
        redirect(base_url()."assetstype/manage_assetstype");
    }


    function edit($id)
    {
        $data['content']=$this->Assetstype_model->select_assetstype_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-assetstype',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Assetstype_model->delete_assetstype($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Assets type and Category Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Assets type and Category Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
