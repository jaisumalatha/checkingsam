<?php
if(!defined('BASEPATH')){exit('No direct script access allowed');}
class Employee_model extends CI_Model
{
	function get_emp_list()
	{
		$this->db->select("*");
		$this->db->from('employee_table');
		$this->db->where(array('emp_action'=>0));
		$query=$this->db->get();
		return $query->result_array();
	}
	
}
?>