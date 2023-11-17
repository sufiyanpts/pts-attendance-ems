<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

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
        $this->load->view('admin/add-notice');
        $this->load->view('admin/footer');
    }

    public function manage_Notice()
    {
        $data['content']=$this->Notice_model->select_notice();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-notice',$data);
        $this->load->view('admin/footer');
    }


    public function view()
    {
        $data['content']=$this->Notice_model->select_notice();
        $this->load->view('staff/header');
        $this->load->view('staff/view-notice',$data);
        $this->load->view('staff/footer');
    }   


    public function insert()
    { 


        $notice=$this->input->post('txtnotice');
        $noticedesc=$this->input->post('noticedesc');
        $dop=$this->input->post('dop');
        $data=$this->Notice_model->insert_notice(array("txtnotice"=>$notice, "noticedesc"=>$noticedesc, "dop"=>$dop));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Notice Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Notice Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $notice=$this->input->post('txtnotice');
        $noticedesc=$this->input->post('noticedesc');
        $dop=$this->input->post('dop');        
        $data=$this->Notice_model->update_notice(array( "txtnotice"=>$notice, "noticedesc"=>$noticedesc, "dop"=>$dop),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Notice Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Notice Update Failed.");
        }
        redirect(base_url()."notice/manage_notice");
    }


    function edit($id)
    {
        $data['content']=$this->Notice_model->select_notice_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-notice',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Notice_model->delete_notice($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Notice Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Notice Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
