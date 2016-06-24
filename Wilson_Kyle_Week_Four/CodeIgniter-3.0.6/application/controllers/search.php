<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
        $this->load->model('employee_model');
    }

    //index function
    function index($empno)
    {
        $data['empno'] = $empno;

        //fetch data from department and designation tables
        $data['department'] = $this->employee_model->get_department();
        $data['designation'] = $this->employee_model->get_designation();

        //fetch employee record for the given employee no
        $data['emprecord'] = $this->employee_model->get_employee_record($empno);

        //set validation rules
        $this->form_validation->set_rules('employeename', 'Employee Name', 'trim|required|callback_alpha_only_space');
        $this->form_validation->set_rules('department', 'Department', 'callback_combo_check');
        $this->form_validation->set_rules('designation', 'Designation', 'callback_combo_check');
        $this->form_validation->set_rules('hireddate', 'Hired Date', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            //fail validation
            $this->load->view('search_view', $data);
        } else {
            //pass validation
            $data = array(
                'employee_name' => $this->input->post('employeename'),
                'department_id' => $this->input->post('department'),
                'designation_id' => $this->input->post('designation'),
                'hired_date' => @date('Y-m-d', @strtotime($this->input->post('hireddate'))),
                'salary' => $this->input->post('salary'),
            );
        }
    }
}
?>