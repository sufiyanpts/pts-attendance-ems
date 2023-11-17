<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller{

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
        $this->load->view('admin/view-attendance-history');
        $this->load->view('admin/footer');
    }
    

    public function manage_attendance()
    {
        $data['content']=$this->Attendance_model->select_attendance();
        $this->load->view('admin/header');
        $this->load->view('admin/add-attendance',$data);
        $this->load->view('admin/footer');
    }

    // public function view()
    // {
    //     $staff=$this->session->userdata('userid');
    //     $data['content']=$this->Attendance_model->select_attendance_byStaffID($staff);
    //     $this->load->view('staff/header');
    //     $this->load->view('staff/view-attendance',$data);
    //     $this->load->view('staff/footer');
    // }


    public function staff_attendance_history()
    {
        $staff=$this->session->userdata('userid');
        $data['staff']=$this->Staff_model->select_staff();
        $data['attendance_data'] = $this->Attendance_model->select_attendance_byStaffID($staff);
        $data['content']=$this->Attendance_model->select_attendance();
        $this->load->view('admin/header');
        $this->load->view('admin/staff-attendance-history',$data);
        $this->load->view('admin/footer');
    }

    public function staff_range_attendance_history()    
    {
        $staff=$this->session->userdata('userid');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $staff_name = $this->input->post('txtname');
        $data['attendance_data'] = $this->Attendance_model->staff_range_attendance_history($from_date, $to_date, $staff_name);
        $this->load->view('admin/header');
        $this->load->view('admin/staff-range-attendance-history',$data);
        $this->load->view('admin/footer');
    }

    public function manual_attendance_request()
    {
        $staff=$this->session->userdata('userid');
        $data['staff']=$this->Staff_model->select_staff_byID($staff);
        $data['content']=$this->Attendance_model->select_attendance();
        $this->load->view('staff/header', $data);
        $this->load->view('staff/manual-attendance-request',$data);
        $this->load->view('staff/footer');
    }

    
    public function insert()
    {
        $this->form_validation->set_rules('checkin', 'Check In', 'required');
        $this->form_validation->set_rules('checkout', 'Check Out', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('txtreason', 'Reason', 'required');


        $staff=$this->session->userdata('userid');
        $checkin=$this->input->post('checkin');
        $checkout=$this->input->post('checkout');
        $date=$this->input->post('date');
        $desc=$this->input->post('txtreason');
        $data=$this->Attendance_model->insert_attendance(array('staff_id'=>$staff,'check_in'=>$checkin,'check_out'=>$checkout,'date'=>$date,'txtreason'=>$desc,'applied_on'=>date('Y-m-d')));
        if($data==true)
        {
            $this->session->set_flashdata('success', "Attendance Added Succesfully");
        }else{
            $this->session->set_flashdata('error', "Sorry, Attendance 
            Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


    //Attendance History

    public function view() {
        $staff=$this->session->userdata('userid');
        $data['staff']=$this->Staff_model->select_staff_byID($staff);
        $data['attendance_data'] = $this->Attendance_model->select_attendance_byStaffID($staff);
        $this->load->view('staff/header', $data);
        $this->load->view('staff/view-attendance',$data);
        $this->load->view('staff/footer');
    }

    public function filter_by_date_range() {
        $staff=$this->session->userdata('userid');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $data['staff']=$this->Staff_model->select_staff_byID($staff);
        $data['attendance_data'] = $this->Attendance_model->filter_attendance_by_date_range($from_date, $to_date);
        $this->load->view('staff/header', $data);
        $this->load->view('staff/view-attendance-history',$data);
        $this->load->view('staff/footer');
    }


    //COFF
    public function approve(){
        $staff=$this->session->userdata('userid');
        $data['content']=$this->Attendance_model->select_coff_forApprove();
        $this->load->view('admin/header');
        $this->load->view('admin/approve-coff',$data);
        $this->load->view('admin/footer');
    }

    public function coff_request()
    {
        $staff=$this->session->userdata('userid');
        $data['staff']=$this->Staff_model->select_staff_byID($staff);
        $data['content']=$this->Attendance_model->select_coff();
        $this->load->view('staff/header', $data);
        $this->load->view('staff/coff-request',$data);
        $this->load->view('staff/footer');
    }

    public function manage_coff_request()
    {
        $data['content']=$this->Attendance_model->select_coff();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-coff',$data);
        $this->load->view('admin/footer');
    }


    public function insert_coff_approve($id)
    {
        $data=$this->Attendance_model->update_coff(array('status'=>1),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "COFF Approved Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, COFF Approve Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function insert_coff_reject($id)
    {
        $data=$this->Attendance_model->update_coff(array('status'=>2),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "COFF Rejected Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, COFF Reject Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function insert_coff()
    {
        $this->form_validation->set_rules('txtcofffrom', 'Comp Off From', 'required');
        $this->form_validation->set_rules('txtcoffto', 'Comp Off To', 'required');
        $this->form_validation->set_rules('txtreason', 'Reasoon', 'required');

        $staff=$this->session->userdata('userid');
        $reason=$this->input->post('txtreason');
        $cfrom=$this->input->post('txtcofffrom');
        $cto=$this->input->post('txtcoffto');
        $desc=$this->input->post('txtdescription');
        $data=$this->Attendance_model->insert_coff(array('staff_id'=>$staff,'coff_from'=>$cfrom,'coff_to'=>$cto, 'txtreason'=>$reason,'description'=>$desc,'applied_on'=>date('Y-m-d')));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New Request Applied Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New Request Apply Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


}


?>