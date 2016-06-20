<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class department_model extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //read the department list from db
    function get_department_list()
    {
        $sql = 'select * from tbl_employee where tbl_employee.employee_id = tbl_employee.employee_id';
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}
