<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

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
        $this->load->view('admin/add-branch');
        $this->load->view('admin/footer');
    }

    public function manage_branch()
    {
        $data['content']=$this->Branch_model->select_branch();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-branch',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $branch=$this->input->post('txtbranch');
        $address=$this->input->post('txtaddress');
        $data=$this->Branch_model->insert_branch(array('branch_name'=>$branch,'address'=>$address,));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Branch Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Branch Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $branch=$this->input->post('txtbranch');
        $address=$this->input->post('txtaddress');
        $data=$this->Branch_model->update_branch(array('branch_name'=>$branch,'address'=>$address),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Branch Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Branch Update Failed.");
        }
        redirect(base_url()."branch/manage_branch");
    }


    function edit($id)
    {
        $data['content']=$this->Branch_model->select_branch_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-branch',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Branch_model->delete_branch($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Branch Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Branch Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
