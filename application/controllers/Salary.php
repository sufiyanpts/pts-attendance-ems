<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller {

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
        $data['departments']=$this->Department_model->select_departments();
        $this->load->view('admin/header');
        $this->load->view('admin/add-salary',$data);
        $this->load->view('admin/footer');
    }

    public function invoice($id)
    {
        $data['content']=$this->Salary_model->select_salary_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/salary-invoice',$data);
        $this->load->view('admin/footer');
    }

    public function invoicestaff($id)
    {
        $staff=$this->session->userdata('userid');
        $data['staff']=$this->Staff_model->select_staff_byID($staff);
        $data['content']=$this->Salary_model->select_salary_byID($id);
        $this->load->view('staff/header', $data);
        $this->load->view('staff/salaryinvoice',$data);
        $this->load->view('staff/footer');
    }

    public function invoice_print($id)
    {
        $data['content']=$this->Salary_model->select_salary_byID($id);
        $this->load->view('admin/invoice-print',$data);
    }

    public function manage()
    {
        $data['content']=$this->Salary_model->select_salary();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-salary',$data);
        $this->load->view('admin/footer');
    }

    public function view()
    {
        $staff=$this->session->userdata('userid');
        $data['staff']=$this->Staff_model->select_staff_byID($staff);
        $data['content']=$this->Salary_model->select_salary_byStaffID($staff);
        $this->load->view('staff/header', $data);
        $this->load->view('staff/view-salary',$data);
        $this->load->view('staff/footer');
    }

    public function insert()
    {
        $id=$this->input->post('txtid');
        $basic=$this->input->post('txtbasic');
        $hra=$this->input->post('txthra');
        $conveyance=$this->input->post('txtconveyance');
        $medical=$this->input->post('txtmedical');
        $allowance=$this->input->post('txtallowance');
        $total=$this->input->post('txttotal');
        $month=$this->input->post('txtmonth');
        $year=$this->input->post('txtyear');
        $added=$this->session->userdata('userid');

        $salary=array();
        for ($i=0; $i < count($id); $i++)
        { 
            if($total[$i]>0)
            {
                $data=$this->Salary_model->insert_salary(array('staff_id' => $id[$i],
                    'basic_salary' => $basic[$i],
                    'hra' => $hra[$i],
                    'conveyance' => $conveyance[$i],
                    'medical' => $medical[$i],
                    'allowance' => $allowance[$i],
                    'total' => $total[$i],
                    'month_slip' => $month[$i],
                    'year_slip' => $year[$i],
                    'added_by' => $added)
                );
            }
        }
        
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Salary Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Salary Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $department=$this->input->post('txtdepartment');
        $data=$this->Department_model->update_department(array('department_name'=>$department),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Salary Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Salary Update Failed.");
        }
        redirect(base_url()."department/manage_department");
    }


    function edit($id)
    {
        $data['content']=$this->Department_model->select_department_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-department',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Salary_model->delete_salary($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Salary Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Salary Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


    public function get_salary_list()
    {
        $dept = $_POST['dept'];
        $data=$this->Staff_model->select_staff_byDept($dept);
        if(isset($data)){
            print '<div class="box-body">
            <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
            <thead>
                  <tr>
                    <th>Staff</th>
                    <th>₹ Basic + DA</th>
                    <th>₹ HRA</th>
                    <th>₹ Conveyance</th>
                    <th>₹ Medical</th>
                    <th>₹ Others</th>
                    <th>₹ Total</th>
                    <th>Slip of Month</th>
                    <th>Year</th>
                  </tr>
                  </thead>
                  <tbody>';

            foreach($data as $d)
            {
                print '<tr>
                <td>'.$d["staff_name"].'</td>
                <td><input type="hidden" name="txtid[]" value="'.$d["id"].'">
                    <input type="text" name="txtbasic[]" class="form-control expenses">
                </td>
                <td><input type="text" name="txthra[]" class="form-control expenses"></td>
                <td><input type="text" name="txtconveyance[]" class="form-control expenses"></td>
                <td><input type="text" name="txtmedical[]" class="form-control expenses"></td>
                <td><input type="text" name="txtallowance[]" class="form-control expenses"></td>
                <td><input type="text" id="total" name="txttotal[]" class="form-control"></td>

                <td>
                    <select name="txtmonth[]" class="form-control">
                    <option value="">Select Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                    </select>
                </td>
              <td><select name="txtyear[]" class="form-control">
                <option value="">Select Year</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
                <option value="2034">2034</option>
                <option value="2035">2035</option>
                <option value="2036">2036</option>
                <option value="2037">2037</option>
                <option value="2038">2038</option>
                <option value="2038">2038</option>
                <option value="2039">2039</option>
                <option value="2040">2040</option>
                <option value="2041">2041</option>
                <option value="2042">2042</option>
                <option value="2043">2043</option>
                <option value="2044">2044</option>
                <option value="2045">2045</option>
                <option value="2046">2046</option>
                <option value="2047">2047</option>
                <option value="2048">2048</option>
                <option value="2049">2049</option>
                </select></td>
                
                </tr>';
            }
            print '</tbody>
            </table>
            </div>
            </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>';
            // print '<div class="col-md-12">
            //       <div class="form-group">
            //         <label for="exampleInputPassword1">Department Name</label>
            //         <select class="form-control" name="slcdepartment" onchange="getstaff(this.value)">
            //           <option value="">Select</option>
                        
            //         </select>
            //       </div>
            //     </div>';

        }
        
        

    }



}
