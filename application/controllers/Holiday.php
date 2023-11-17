 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday extends CI_Controller {

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
        $this->load->view('admin/add-holiday');
        $this->load->view('admin/footer');
    }

    public function manage_Holiday()
    {
        $data['content']=$this->Holiday_model->select_holiday();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-holiday',$data);
        $this->load->view('admin/footer');
    }


    public function view()
    {
        $data['content']=$this->Holiday_model->select_holiday();
        $this->load->view('staff/header');
        $this->load->view('staff/view-holiday',$data);
        $this->load->view('staff/footer');
    }   


    public function insert()
    { 

        $holiday=$this->input->post('holiday_name');
        $holidaydate=$this->input->post('from_date');
        $holidateto=$this->input->post('to_date');
        $days=$this->input->post('number_of_days');
        $year=$this->input->post('year'); 
        $data=$this->Holiday_model->insert_holiday(array("holiday_name"=>$holiday, "from_date"=>$holidaydate, "to_date"=>$holidateto, "number_of_days"=>$days, "year"=>$year));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Holiday Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Holiday Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $holiday=$this->input->post('holiday_name');
        $holidaydate=$this->input->post('from_date');
        $holidateto=$this->input->post('to_date');
        $days=$this->input->post('number_of_days');
        $year=$this->input->post('year');      
        $data=$this->Holiday_model->insert_holiday(array("holiday_name"=>$holiday, "from_date"=>$holidaydate, "to_date"=>$holidateto, "number_of_days"=>$days, "year"=>$year));
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Holiday Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Holiday Update Failed.");
        }
        redirect(base_url()."holiday/manage_holiday");
    }


    function edit($id)
    {
        $data['content']=$this->Holiday_model->select_holiday_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-holiday',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Holiday_model->delete_holiday($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Holiday Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Holiday Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
