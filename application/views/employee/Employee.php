

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller{

function __construct(){

	parent:: __construct();
	$this->load->model('employee_m', 'm');
}

function index(){

	$this->load->view('layout/header');
	$this->load->view('employee/index');
	$this->load->view('layout/footer');

}

}