<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		    $this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('Employee_model');
	}
	public function emp_list()
	{
		$data['emp_list']=$this->Employee_model->get_emp_list();
		$this->load->view('emp-list',$data);
	}
	public function emp_add_view()
	{
		//$data['emp_list']=$this->Employee_model->get_emp_list();
		$this->load->view('emp-list');
	}
}
