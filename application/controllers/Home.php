<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url('login'));
        }
		else
        {
            if($this->session->userdata('usertype')==1)
            {
                $data['department']=$this->Department_model->select_departments();
                $data['staff']=$this->Staff_model->select_staff();
                $data['leave']=$this->Leave_model->select_leave_forApprove();
                $data['salary']=$this->Salary_model->sum_salary();
                $data['birthday']=$this->Birthday_model->select_birthday();
                $data['anniversary']=$this->Anniversary_model->select_anniversary();
                $data['coff']=$this->Attendance_model->select_coff(); 
                $data['notice']=$this->Notice_model->select_notice();
                $data['attendance']=$this->Attendance_model->select_attendance();
                $data['holiday']=$this->Holiday_model->select_holiday();
                $data['assetstype']=$this->Assetstype_model->select_assetstype();
                $data['assets']=$this->Assets_model->select_assets();                
                $this->load->view('admin/header');
                $this->load->view('admin/dashboard',$data);
                $this->load->view('admin/footer');
            }
            else{
                $staff=$this->session->userdata('userid');
                $data['staff']=$this->Staff_model->select_staff_byID($staff);
                $data['leave']=$this->Leave_model->select_leave_byStaffID($staff);
                $data['coff']=$this->Attendance_model->select_coff_byStaffID($staff);
                $data['attendance']=$this->Attendance_model->select_attendance_byStaffID($staff);
                $data['birthday']=$this->Birthday_model->select_birthday();
                $data['anniversary']=$this->Anniversary_model->select_anniversary();
                $data['coff']=$this->Attendance_model->select_coff($staff);
                $data['notice']=$this->Notice_model->select_notice();
                $data['holiday']=$this->Holiday_model->select_holiday();
                $data['assetstype']=$this->Assetstype_model->select_assetstype();
                $this->load->view('staff/header', $data);  
                $this->load->view('staff/dashboard',$data);
                $this->load->view('staff/footer');
            }
            
        }
	}

    


    public function login_page()
    {
        $this->load->view('login');
    }

    public function error_page()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/error_page');
        $this->load->view('admin/footer');
    }

	function login()
    {
        $un=$this->input->post('txtusername');
        $pw=$this->input->post('txtpassword');
        $this->load->model('Home_model');
        $check_login=$this->Home_model->logindata($un,$pw);
        if($check_login<>'')
        {
            if($check_login[0]['status']==1){
                if($check_login[0]['usertype']==1){
                    $data = array(
                        'logged_in'  =>  TRUE,
                        'username' => $check_login[0]['username'],
                        'usertype' => $check_login[0]['usertype'],
                        'userid' => $check_login[0]['id']
                    );
                    $this->session->set_userdata($data);
                    redirect('/');
                }
                elseif($check_login[0]['usertype']==2){
                    $data = array(
                        'logged_in'  =>  TRUE,
                        'username' => $check_login[0]['username'],
                        'usertype' => $check_login[0]['usertype'],
                        'userid' => $check_login[0]['id']
                    );
                    $this->session->set_userdata($data);
                    redirect('/');
                }
                else{
                    $this->session->set_flashdata('login_error', 'Sorry, you cant login right now.', 300);
                    redirect(base_url().'login');
                }
                
            }
            else{
                $this->session->set_flashdata('login_error', 'Sorry, your account is blocked.', 300);
                redirect(base_url().'login');
            }
            
        }
        else{
            $this->session->set_flashdata('login_error', 'Please check your username or password and try again.', 300);
            redirect(base_url().'login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }

}
