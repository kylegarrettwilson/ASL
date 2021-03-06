<?php
/*
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class employee_model extends CI_Model
{
    function __construct()
    {
        //Call the Model constructor
        parent::__construct();
    }

    //fetch employee record by employee no
    function get_employee_record($empno)
    {
        $this->db->where('employee_no', $empno);
        $this->db->from('tbl_employee');
        $query = $this->db->get();
        return $query->result();
    }

    //get department table to populate the department name dropdown
    function get_department()
    {
        $this->db->select('department_id');
        $this->db->select('department_name');
        $this->db->from('tbl_department');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $dept_id = array('-SELECT-');
        $dept_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($dept_id, $result[$i]->department_id);
            array_push($dept_name, $result[$i]->department_name);
        }
        return $department_result = array_combine($dept_id, $dept_name);
    }

    //get designation table to populate the designation dropdown
    function get_designation()
    {
        $this->db->select('designation_id');
        $this->db->select('designation_name');
        $this->db->from('tbl_designation');
        $query = $this->db->get();
        $result = $query->result();

        $designation_id = array('-SELECT-');
        $designation_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($designation_id, $result[$i]->designation_id);
            array_push($designation_name, $result[$i]->designation_name);
        }
        return $designation_result = array_combine($designation_id, $designation_name);
    }

    //fetch all employee records
    function get_employee_list()
    {
        $this->db->from('tbl_employee');
        $this->db->join('tbl_department', 'tbl_employee.department_id = tbl_department.department_id');
        $this->db->join('tbl_designation', 'tbl_employee.designation_id = tbl_designation.designation_id');
        $query = $this->db->get();
        return $query->result();
    }
}
?>



