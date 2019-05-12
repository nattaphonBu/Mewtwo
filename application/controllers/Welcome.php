<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function create()
	{
		$this->load->view('create_activity');
	}
	public function edit()
	{
		$this->load->view('edit_activity');
	}

	public function insert(){
		// $studentid = isset($_GET['studentid'])?$_GET['studentid']:"";
		$studentid  = isset($_POST['studentid'])?$_POST['studentid']:"";
		$coursename = isset($_POST['coursename'])?$_POST['coursename']:"";
		$name = isset($_POST['name'])?$_POST['name']:"";
		$courseid = isset($_POST['courseid'])?$_POST['courseid']:"";
		$year = isset($_POST['year'])?$_POST['year']:"";
		$term = isset($_POST['term'])?$_POST['term']:"";
		$grade = isset($_POST['grade'])?$_POST['grade']:"";
		// $pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->insert($studentid, $coursename,$name,  $courseid, $year, $term, $grade);
		if($result){
			if($result){
				echo "<script>alert('บันทึกสำเร็จ');
					window.location.href='getdata';
					</script>";
					$this->load->view('showdata');
			}else{
				echo "<script>alert('บันทึกไม่สำเร็จ');
					window.location.href='getdata';
					</script>";
					$this->load->view('student');
			}
			
			
		}
	}
}
