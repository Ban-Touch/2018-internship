<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_IF extends CI_Controller {

	//Default constructor
	function __construct()
	{
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}

	public function index()
	{
		$this->load->view('login/login');
	}
	public function home()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function company()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/company/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function tutor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/tutor/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function supervisor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/supervisor/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function student()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/student/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function calendar()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/calendar/index.php');
		$this->load->view('IF/template/footer.php');
	}
}