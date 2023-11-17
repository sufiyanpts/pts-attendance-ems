<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url() . 'login');
        }
    }

    public function index()
    {
        $data['branch'] = $this->Branch_model->select_branch();
        $data['department'] = $this->Department_model->select_departments();
        $data['country'] = $this->Home_model->select_countries();
        $this->load->view('admin/header');
        $this->load->view('admin/add-staff', $data);
        $this->load->view('admin/footer');
    }

    public function manage()
    {
        $data['content'] = $this->Staff_model->select_staff();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-staff', $data);
        $this->load->view('admin/footer');
    }

    public function view_staff($id)
    {
        $data['department'] = $this->Department_model->select_departments();
        $data['country'] = $this->Home_model->select_countries();
        $data['content'] = $this->Staff_model->select_staff_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/view-staff', $data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('mname', 'Middle Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('slcgender', 'Gender', 'required');
        $this->form_validation->set_rules('txtemail', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('txtmobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('jobtitle', 'Job Title', 'required');
        $this->form_validation->set_rules('slcposition', 'Position', 'required');
        $this->form_validation->set_rules('slcdepartment', 'Department', 'required');
        $this->form_validation->set_rules('slcbranch', 'Branch', 'required');
        $this->form_validation->set_rules('txtmanager', 'Manager', 'required');
        $this->form_validation->set_rules('empcode', 'Employee Code', 'required');
        $this->form_validation->set_rules('slcemptype', 'Employee Type', 'required');
        $this->form_validation->set_rules('txtdob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('txtdoj', 'Date of Joining', 'required');
        $this->form_validation->set_rules('txtstreet', 'Street', 'required');
        $this->form_validation->set_rules('txtblock', 'Block', 'required');
        $this->form_validation->set_rules('hzipcode', 'Zip Code
        ', 'required');
        $this->form_validation->set_rules('locaddress', 'Address
        ', 'required');
        $this->form_validation->set_rules('txtcity', 'City', 'required');
        $this->form_validation->set_rules('txtstate', 'State', 'required');
        $this->form_validation->set_rules('slccountry', 'Country', 'required');
        $this->form_validation->set_rules('slcshift', 'Shift', 'required');
        $this->form_validation->set_rules('startdate', 'Start Date', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('trmdate', 'Terminated Date');
        $this->form_validation->set_rules('trmreason', 'Terminated Reason');
        $this->form_validation->set_rules('txtmarital', 'Marital Status');
        $this->form_validation->set_rules('txtchild', 'Child No');
        $this->form_validation->set_rules('txtadhaarno', 'Adhaar No', 'required');
        $this->form_validation->set_rules('txtpanno', 'PAN No', 'required');
        $this->form_validation->set_rules('fathername', 'PAN No', 'required');
        $this->form_validation->set_rules('citizen', 'Citizen', 'required');
        $this->form_validation->set_rules('nominee-name', 'Nominee Name', 'required');
        $this->form_validation->set_rules('relation-nominee', 'Relation Nominee', 'required');
        $this->form_validation->set_rules('emerno', 'Emergency No', 'required');
        $this->form_validation->set_rules('txtsalary', 'Salary', 'required');
        $this->form_validation->set_rules('bankname', 'Bank Name', 'required');
        $this->form_validation->set_rules('accno', 'Account Number', 'required');
        $this->form_validation->set_rules('ifsccode', 'IFSC Code', 'required');
        $this->form_validation->set_rules('pfnum', 'PF Number');
        $this->form_validation->set_rules('esicnum', 'ESIC Number');
        $this->form_validation->set_rules('aadharphoto', 'Adhaar Photo');
        $this->form_validation->set_rules('panphoto', 'PAN Photo');
        $this->form_validation->set_rules('passphoto', 'Passport Photo');
        $this->form_validation->set_rules('sscresult', 'SSC Photo');
        $this->form_validation->set_rules('hscresult', 'HSC Photo');
        $this->form_validation->set_rules('diploma', 'Diploma Photo');
        $this->form_validation->set_rules('gesult', 'Graduate Results Photo');
        $this->form_validation->set_rules('pgesult', 'Post Graduate Results Photo');
        $this->form_validation->set_rules('offerletter', 'Offer Letter');
        $this->form_validation->set_rules('rletter', 'Relieving Letter');
        $this->form_validation->set_rules('other', 'Other');



        $fname = $this->input->post('fname');
        $mname = $this->input->post('mname');
        $lname = $this->input->post('lname');
        $gender = $this->input->post('slcgender');
        $email = $this->input->post('txtemail');
        $mobile = $this->input->post('txtmobile');
        $jobtitle = $this->input->post('jobtitle');
        $slcposition = $this->input->post('slcposition');
        $department_id = $this->input->post('slcdepartment');
        $slcbranch = $this->input->post('slcbranch');
        $txtmanager = $this->input->post('txtmanager');
        $empcode = $this->input->post('empcode');
        $slcemptype = $this->input->post('slcemptype');
        $dob = $this->input->post('txtdob');
        $doj = $this->input->post('txtdoj');
        $txtstreet = $this->input->post('txtstreet');
        $streetno = $this->input->post('streetno');
        $txtblock = $this->input->post('txtblock');
        $hzipcode = $this->input->post('hzipcode');
        $locaddress = $this->input->post('locaddress');
        $city = $this->input->post('txtcity');
        $state = $this->input->post('txtstate');
        $country = $this->input->post('slccountry');
        $shift = $this->input->post('slcshift');
        $start_date = $this->input->post('startdate');
        $status = $this->input->post('status');
        $terminate_date = $this->input->post('trmdate');
        $terminate_reason = $this->input->post('trmreason');
        $maritial_status = $this->input->post('txtmarital');
        $no_of_child = $this->input->post('txtchild');
        $adhaar_no = $this->input->post('txtadhaarno');
        $pan_no = $this->input->post('txtpanno');
        $father_name = $this->input->post('fathername');
        $citizen = $this->input->post('citizen');
        $nominee_name = $this->input->post('nominee-name');
        $nominee_relation = $this->input->post('relation-nominee');
        $emergency_no = $this->input->post('emerno');
        $salary = $this->input->post('txtsalary');
        $bank_name = $this->input->post('bankname');
        $account_no = $this->input->post('accno');
        $ifsc_code = $this->input->post('ifsccode');
        $pf_no = $this->input->post('pfnum');
        $esic_no = $this->input->post('esicnum');
        $adhaar_photo = $this->input->post('aadharphoto');
        $pan_photo = $this->input->post('panphoto');
        $passport_photo = $this->input->post('passphoto');
        $ssc_result_photo = $this->input->post('sscresult');
        $hsc_result_photo = $this->input->post('hscresult');
        $diploma_result_photo = $this->input->post('diploma');
        $graduate_result_photo = $this->input->post('gresult');
        $pgraduate_result_photo = $this->input->post('pgresult');
        $offer_letter = $this->input->post('offerletter');
        $relieving_letter = $this->input->post('rletter');
        $experience_letter = $this->input->post('expletter');
        $others    = $this->input->post('other');
        $added = $this->session->userdata('userid');


        if ($this->form_validation->run() !== false) {
            $this->load->library('image_lib');
            $config['upload_path'] = 'uploads/profile-pic/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('filephoto')) {
                $image = 'default-pic.jpg';
            } else {
                $image_data =   $this->upload->data();

                $configer =  array(
                    'image_library'   => 'gd2',
                    'source_image'    =>  $image_data['full_path'],
                    'maintain_ratio'  =>  TRUE,
                    'width'           =>  150,
                    'height'          =>  150,
                    'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $image = $image_data['file_name'];
            }
            $login = $this->Home_model->insert_login(array('username' => $email, 'password' => $mobile, 'usertype' => 2));
            if ($login > 0) {
                $data = $this->Staff_model->insert_staff(array(
                    'id' => $login,
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'gender' => $gender,
                    'email' => $email,
                    'mobile' => $mobile,
                    'jobtitle' => $jobtitle,
                    'slcposition' => $slcposition,
                    'department_id' => $department_id,
                    'slcbranch' => $slcbranch, 'txtmanager' => $txtmanager,
                    'empcode' => $empcode,
                    'slcemptype' => $slcemptype,
                    'dob' => $dob,
                    'doj' => $doj,
                    'streetno' => $streetno,
                    'txtblock' => $txtblock,
                    'hzipcode' => $hzipcode,
                    'locaddress' => $locaddress, 'txtstreet' => $txtstreet,
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                    'shift' => $shift,
                    'start_date' => $start_date,
                    'status' => $status,
                    'terminate_date' => $terminate_date,
                    'terminate_reason' => $terminate_reason,
                    'maritial_status' => $maritial_status,
                    'no_of_child' => $no_of_child,
                    'adhaar_no' => $adhaar_no,
                    'pan_no' => $pan_no,
                    'father_name' => $father_name,
                    'citizen' => $citizen,
                    'nominee_name' => $nominee_name,
                    'nominee_relation' => $nominee_relation,
                    'emergency_no' => $emergency_no,
                    'salary' => $salary,
                    'bank_name' => $bank_name,
                    'account_no' => $account_no,
                    'ifsc_code' => $ifsc_code,
                    'pf_no' => $pf_no,
                    'esic_no' => $esic_no,
                    'adhaar_photo' => $adhaar_photo,
                    'pan_photo' => $pan_photo,
                    'passport_photo' => $passport_photo,
                    'ssc_result_photo' => $ssc_result_photo,
                    'hsc_result_photo' => $hsc_result_photo,
                    'diploma_result_photo' => $diploma_result_photo,
                    'graduate_result_photo' => $graduate_result_photo,
                    'pgraduate_result_photo' => $pgraduate_result_photo,
                    'offer_letter' => $offer_letter,
                    'relieving_letter' => $relieving_letter,
                    'experience_letter' => $experience_letter,
                    'others' => $others,
                    'added_by' => $added,
                    'pic'=>$image,
                ));
            }

            if ($data == true) {
                $this->session->set_flashdata('success', "New Staff Added Succesfully");
            } else {
                $this->session->set_flashdata('error', "Sorry, New Staff Adding Failed.");
            }
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->index();
            return false;
        }
    }

    public function update()
    {
        $this->load->helper('form');
        $this->form_validation->set_rules('fname', 'First Name');
        $this->form_validation->set_rules('mname', 'Middle Name');
        $this->form_validation->set_rules('lname', 'Last Name');
        $this->form_validation->set_rules('slcgender', 'Gender');
        $this->form_validation->set_rules('txtemail', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('txtmobile', 'Mobile Number ', 'regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('jobtitle', 'Job Title');
        $this->form_validation->set_rules('slcposition', 'Position');
        $this->form_validation->set_rules('slcdepartment', 'Department');
        $this->form_validation->set_rules('slcbranch', 'Branch');
        $this->form_validation->set_rules('txtmanager', 'Manager');
        $this->form_validation->set_rules('empcode', 'Employee Code');
        $this->form_validation->set_rules('slcemptype', 'Employee Type');
        $this->form_validation->set_rules('txtdob', 'Date of Birth');
        $this->form_validation->set_rules('txtdoj', 'Date of Joining');
        $this->form_validation->set_rules('txtstreet', 'Street');
        $this->form_validation->set_rules('txtblock', 'Block');
        $this->form_validation->set_rules('hzipcode', 'Zip Code
        ');
        $this->form_validation->set_rules('locaddress', 'Address
        ');
        $this->form_validation->set_rules('txtcity', 'City');
        $this->form_validation->set_rules('txtstate', 'State');
        $this->form_validation->set_rules('slccountry', 'Country');
        $this->form_validation->set_rules('slcshift', 'Shift');
        $this->form_validation->set_rules('startdate', 'Start Date');
        $this->form_validation->set_rules('status', 'Status');
        $this->form_validation->set_rules('trmdate', 'Terminated Date');
        $this->form_validation->set_rules('trmreason', 'Terminated Reason');
        $this->form_validation->set_rules('txtmarital', 'Marital Status');
        $this->form_validation->set_rules('txtchild', 'Child No');
        $this->form_validation->set_rules('txtadhaarno', 'Adhaar No');
        $this->form_validation->set_rules('txtpanno', 'PAN No');
        $this->form_validation->set_rules('fathername', 'PAN No');
        $this->form_validation->set_rules('citizen', 'Citizen');
        $this->form_validation->set_rules('nominee-name', 'Nominee Name');
        $this->form_validation->set_rules('relation-nominee', 'Relation Nominee');
        $this->form_validation->set_rules('emerno', 'Emergency No');
        $this->form_validation->set_rules('txtsalary', 'Salary');
        $this->form_validation->set_rules('bankname', 'Bank Name');
        $this->form_validation->set_rules('accno', 'Account Number');
        $this->form_validation->set_rules('ifsccode', 'IFSC Code');
        $this->form_validation->set_rules('pfnum', 'PF Number');
        $this->form_validation->set_rules('esicnum', 'ESIC Number');
        $this->form_validation->set_rules('aadharphoto', 'Adhaar Photo');
        $this->form_validation->set_rules('panphoto', 'PAN Photo');
        $this->form_validation->set_rules('passphoto', 'Passport Photo');
        $this->form_validation->set_rules('sscresult', 'SSC Photo');
        $this->form_validation->set_rules('hscresult', 'HSC Photo');
        $this->form_validation->set_rules('diploma', 'Diploma Photo');
        $this->form_validation->set_rules('gesult', 'Graduate Results Photo');
        $this->form_validation->set_rules('pgesult', 'Post Graduate Results Photo');
        $this->form_validation->set_rules('offerletter', 'Offer Letter');
        $this->form_validation->set_rules('rletter', 'Relieving Letter');
        $this->form_validation->set_rules('other', 'Other');

        $id = $this->input->post('txtid');
        $fname = $this->input->post('fname');
        $mname = $this->input->post('mname');
        $lname = $this->input->post('lname');
        $gender = $this->input->post('slcgender');
        $email = $this->input->post('txtemail');
        $mobile = $this->input->post('txtmobile');
        $jobtitle = $this->input->post('jobtitle');
        $slcposition = $this->input->post('slcposition');
        $department_id = $this->input->post('slcdepartment');
        $slcbranch = $this->input->post('slcbranch');
        $txtmanager = $this->input->post('txtmanager');
        $empcode = $this->input->post('empcode');
        $slcemptype = $this->input->post('slcemptype');
        $dob = $this->input->post('txtdob');
        $doj = $this->input->post('txtdoj');
        $txtstreet = $this->input->post('txtstreet');
        $streetno = $this->input->post('streetno');
        $txtblock = $this->input->post('txtblock');
        $hzipcode = $this->input->post('hzipcode');
        $locaddress = $this->input->post('locaddress');
        $city = $this->input->post('txtcity');
        $state = $this->input->post('txtstate');
        $country = $this->input->post('slccountry');
        $shift = $this->input->post('slcshift');
        $start_date = $this->input->post('startdate');
        $status = $this->input->post('status');
        $terminate_date = $this->input->post('trmdate');
        $terminate_reason = $this->input->post('trmreason');
        $maritial_status = $this->input->post('txtmarital');
        $no_of_child = $this->input->post('txtchild');
        $adhaar_no = $this->input->post('txtadhaarno');
        $pan_no = $this->input->post('txtpanno');
        $father_name = $this->input->post('fathername');
        $citizen = $this->input->post('citizen');
        $nominee_name = $this->input->post('nominee-name');
        $nominee_relation = $this->input->post('relation-nominee');
        $emergency_no = $this->input->post('emerno');
        $salary = $this->input->post('txtsalary');
        $bank_name = $this->input->post('bankname');
        $account_no = $this->input->post('accno');
        $ifsc_code = $this->input->post('ifsccode');
        $pf_no = $this->input->post('pfnum');
        $esic_no = $this->input->post('esicnum');
        $adhaar_photo = $this->input->post('aadharphoto');
        $pan_photo = $this->input->post('panphoto');
        $passport_photo = $this->input->post('passphoto');
        $ssc_result_photo = $this->input->post('sscresult');
        $hsc_result_photo = $this->input->post('hscresult');
        $diploma_result_photo = $this->input->post('diploma');
        $graduate_result_photo = $this->input->post('gresult');
        $pgraduate_result_photo = $this->input->post('pgresult');
        $offer_letter = $this->input->post('offerletter');
        $relieving_letter = $this->input->post('rletter');
        $experience_letter = $this->input->post('expletter');
        $others    = $this->input->post('other');
        $added = $this->session->userdata('userid');


        if ($this->form_validation->run() !== false) {
            $this->load->library('image_lib');
            $config['upload_path'] = 'uploads/profile-pic/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('filephoto')) 
            {
                $data = $this->Staff_model->update_staff(array(
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'gender' => $gender,
                    'email' => $email,
                    'mobile' => $mobile,
                    'jobtitle' => $jobtitle,
                    'slcposition' => $slcposition,
                    'department_id' => $department_id,
                    'slcbranch' => $slcbranch, 
                    'txtmanager' => $txtmanager,
                    'empcode' => $empcode,
                    'slcemptype' => $slcemptype,
                    'dob' => $dob,
                    'doj' => $doj,
                    'streetno' => $streetno,
                    'txtblock' => $txtblock,
                    'hzipcode' => $hzipcode,
                    'locaddress' => $locaddress,
                    'txtstreet' => $txtstreet,
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                    'shift' => $shift,
                    'start_date' => $start_date,
                    'status' => $status,
                    'terminate_date' => $terminate_date,
                    'terminate_reason' => $terminate_reason,
                    'maritial_status' => $maritial_status,
                    'no_of_child' => $no_of_child,
                    'adhaar_no' => $adhaar_no,
                    'pan_no' => $pan_no,
                    'father_name' => $father_name,
                    'citizen' => $citizen,
                    'nominee_name' => $nominee_name,
                    'nominee_relation' => $nominee_relation,
                    'emergency_no' => $emergency_no,
                    'salary' => $salary,
                    'bank_name' => $bank_name,
                    'account_no' => $account_no,
                    'ifsc_code' => $ifsc_code,
                    'pf_no' => $pf_no,
                    'esic_no' => $esic_no,
                    'adhaar_photo' => $adhaar_photo,
                    'pan_photo' => $pan_photo,
                    'passport_photo' => $passport_photo,
                    'ssc_result_photo' => $ssc_result_photo,
                    'hsc_result_photo' => $hsc_result_photo,
                    'diploma_result_photo' => $diploma_result_photo,
                    'graduate_result_photo' => $graduate_result_photo,
                    'pgraduate_result_photo' => $pgraduate_result_photo,
                    'offer_letter' => $offer_letter,
                    'relieving_letter' => $relieving_letter,
                    'experience_letter' => $experience_letter,
                    'others' => $others), $id);
            } else {
                $image_data =   $this->upload->data();

                $configer =  array(
                    'image_library'   => 'gd2',
                    'source_image'    =>  $image_data['full_path'],
                    'maintain_ratio'  =>  TRUE,
                    'width'           =>  150,
                    'height'          =>  150,
                    'quality'         =>  50
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                $data = $this->Staff_model->update_staff(array(
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'gender' => $gender,
                    'email' => $email,
                    'mobile' => $mobile,
                    'jobtitle' => $jobtitle,
                    'slcposition' => $slcposition,
                    'department_id' => $department_id,
                    'slcbranch' => $slcbranch, 'txtmanager' => $txtmanager,
                    'empcode' => $empcode,
                    'slcemptype' => $slcemptype,
                    'dob' => $dob,
                    'doj' => $doj,
                    'streetno' => $streetno,
                    'txtblock' => $txtblock,
                    'hzipcode' => $hzipcode,
                    'locaddress' => $locaddress, 'txtstreet' => $txtstreet,
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                    'shift' => $shift,
                    'start_date' => $start_date,
                    'status' => $status,
                    'terminate_date' => $terminate_date,
                    'terminate_reason' => $terminate_reason,
                    'maritial_status' => $maritial_status,
                    'no_of_child' => $no_of_child,
                    'adhaar_no' => $adhaar_no,
                    'pan_no' => $pan_no,
                    'father_name' => $father_name,
                    'citizen' => $citizen,
                    'nominee_name' => $nominee_name,
                    'nominee_relation' => $nominee_relation,
                    'emergency_no' => $emergency_no,
                    'salary' => $salary,
                    'bank_name' => $bank_name,
                    'account_no' => $account_no,
                    'ifsc_code' => $ifsc_code,
                    'pf_no' => $pf_no,
                    'esic_no' => $esic_no,
                    'adhaar_photo' => $adhaar_photo,
                    'pan_photo' => $pan_photo,
                    'passport_photo' => $passport_photo,
                    'ssc_result_photo' => $ssc_result_photo,
                    'hsc_result_photo' => $hsc_result_photo,
                    'diploma_result_photo' => $diploma_result_photo,
                    'graduate_result_photo' => $graduate_result_photo,
                    'pgraduate_result_photo' => $pgraduate_result_photo,
                    'offer_letter' => $offer_letter,
                    'relieving_letter' => $relieving_letter,
                    'experience_letter' => $experience_letter,
                    'others' => $others,
                    'pic'=>$image_data['file_name'],
                    'added_by' => $added
                ), $id);
            }

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', "Staff Updated Succesfully");
            } else {
                $this->session->set_flashdata('error', "Sorry, Staff Updated Failed.");
            }
            redirect(base_url() . "manage-staff");
        } else {
            $this->index();
            return false;
        }
    }


    function edit($id)
    {
        $data['department'] = $this->Department_model->select_departments();
        $data['country'] = $this->Home_model->select_countries();
        $data['content'] = $this->Staff_model->select_staff_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-staff', $data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $this->Home_model->delete_login_byID($id);
        $data = $this->Staff_model->delete_staff($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', "Staff Deleted Succesfully");
        } else {
            $this->session->set_flashdata('error', "Sorry, Staff Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
