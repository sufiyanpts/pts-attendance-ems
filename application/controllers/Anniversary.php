<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Anniversary extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
        $this->load->model('anniversary_model');
    }


    public function index()
    {
        $data['anniversary']=$this->anniversary_model->select_anniversary();
        $data['staff']=$this->Staff_model->select_staff();
        $this->load->view('admin/header');
        $this->load->view('admin/add-anniversary',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $this->form_validation->set_rules('txtname', 'Name', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of Joining', 'required');

        $staff=$this->session->userdata('userid');
        $name=$this->input->post('txtname');
        $doj=$this->input->post('txtdoj');
        $data=$this->anniversary_model->insert_anniversary(array('staff_name'=>$name,'doj'=>$doj));
        if($data==true)
        {
            $this->session->set_flashdata('success', "Staff anniversary Applied Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Apply Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function manage_anniversary()
    {
        $data['anniversary']=$this->Anniversary_model->select_anniversary();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-anniversary',$data);
        $this->load->view('admin/footer');
    }

    function delete($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data=$this->Anniversary_model->delete_anniversary($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}


?>