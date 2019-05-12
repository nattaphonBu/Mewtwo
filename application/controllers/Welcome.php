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
		// $studentid = isset($_GET['studentid'])?$_GET['studentid']:""
		$nameActivity = isset($_POST['nameActivity'])?$_POST['nameActivity']:"";
		$details = isset($_POST['details'])?$_POST['details']:"";
		$school_year = isset($_POST['school_year'])?$_POST['school_year']:"";
		$start_date = isset($_POST['start_date'])?$_POST['start_date']:"";
		$final_date = isset($_POST['final_date'])?$_POST['final_date']:"";
		$start_time = isset($_POST['start_time'])?$_POST['start_time']:"";
		$final_time = isset($_POST['final_time'])?$_POST['final_time']:"";
		$year = isset($_POST['year'])?$_POST['year']:"";
		$term = isset($_POST['term'])?$_POST['term']:"";

		// $pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('activity');
		$result = $this->activity->create($nameActivity, $details, $school_year, $start_date, $final_date, $start_time, $final_time, $year, $term);
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

	public function update(){
		// $studentid = isset($_GET['studentid'])?$_GET['studentid']:""
		$nameActivity = isset($_POST['nameActivity'])?$_POST['nameActivity']:"";
		$details = isset($_POST['details'])?$_POST['details']:"";
		$school_year = isset($_POST['school_year'])?$_POST['school_year']:"";
		$start_date = isset($_POST['start_date'])?$_POST['start_date']:"";
		$final_date = isset($_POST['final_date'])?$_POST['final_date']:"";
		$start_time = isset($_POST['start_time'])?$_POST['start_time']:"";
		$final_time = isset($_POST['final_time'])?$_POST['final_time']:"";
		$year = isset($_POST['year'])?$_POST['year']:"";
		$term = isset($_POST['term'])?$_POST['term']:"";

		// $pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('activity');
		$result = $this->activity->update($nameActivity, $details, $school_year, $start_date, $final_date, $start_time, $final_time, $year, $term);
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

	public function cancel(){
		// $studentid = isset($_GET['studentid'])?$_GET['studentid']:""
		$status = isset($_POST['status'])?$_POST['status']:"";
		// $pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('activity');
		$result = $this->activity->cancel($status);
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
