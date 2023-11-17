<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller {

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
        $data['assets_name']= $this->Assets_model->select_assets();
        $this->load->view('admin/header');
        $this->load->view('admin/add-assets',$data);
        $this->load->view('admin/footer');
    }

    public function manage_Assets()
    {
        $data['content']=$this->Assets_model->select_assets();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-assets',$data);
        $this->load->view('admin/footer');
    }


    public function view()
    {
        $data['content']=$this->Assets_model->select_assets();
        $this->load->view('staff/header');
        $this->load->view('staff/view-assets',$data);
        $this->load->view('staff/footer');
    }   


    public function insert()
    { 


        $assets=$this->input->post('ass_name');
        $brand=$this->input->post('ass_brand');
        $model=$this->input->post('ass_model');
        $code=$this->input->post('ass_code');
        $configuration=$this->input->post('configuration');
        $purchase=$this->input->post('purchasing_date');
        $data=$this->Assets_model->insert_assets(array("ass_name"=>$assets, "ass_brand"=>$brand, "ass_model"=>$model, "ass_code"=>$code, "configuration"=>$configuration, "purchasing_date"=>$purchase));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Assets Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Assets Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $assets=$this->input->post('ass_name');
        $brand=$this->input->post('ass_brand');
        $model=$this->input->post('ass_model');
        $code=$this->input->post('ass_code');
        $configuration=$this->input->post('configuration');
        $purchase=$this->input->post('purchasing_date');
        $data=$this->Assets_model->update_assets(array("ass_name"=>$assets, "ass_brand"=>$brand, "ass_model"=>$model, "ass_code"=>$code, "configuration"=>$configuration, "purchasing_date"=>$purchase),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Assets Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Assets Update Failed.");
        }
        redirect(base_url()."assets/manage_assets");
    }


    function edit($id)
    {
        $data['content']=$this->Assets_model->select_assets_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-assets',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Assets_model->delete_assets($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Assets Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Assets Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
