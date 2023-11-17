<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Birthday extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
        $this->load->model('Birthday_model');
    }


    public function index()
    {
        $data['birthday']=$this->Birthday_model->select_birthday();
        $data['staff']=$this->Staff_model->select_staff();
        $this->load->view('admin/header');
        $this->load->view('admin/add-birthday',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        
        $this->form_validation->set_rules('txtname', 'Name', 'required');
        $this->form_validation->set_rules('txtdob', 'Date of Birth', 'required');

        $staff=$this->session->userdata('userid');
        $name=$this->input->post('txtname');
        $dob=$this->input->post('txtdob');
        $data=$this->Birthday_model->insert_birthday(array('staff_name'=>$name,'dob'=>$dob));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Birthday Applied Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Birthday Apply Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function manage_birthday()
    {
        $data['birthday']=$this->Birthday_model->select_birthday();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-birthday',$data);
        $this->load->view('admin/footer');
    }

    function delete($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data=$this->Birthday_model->delete_birthday($id);
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