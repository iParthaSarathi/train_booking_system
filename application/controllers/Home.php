<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->helper('url'); 
		$this->load->view('admin/signin');
	}
		
	public function dashboard()
	{
		$this->load->helper('url'); 
		$this->load->model("admin");
		$data["user"] = $this->admin->user();
		$data["fetch_user_data"] = $this->admin->fetch_user_data(); 
		$data["fetch_data"] = $this->admin->fetch_data(); 
		$this->load->view('admin/dashboard', $data);
	}
	
	public function checkTrain()
	{
		$trainName = $_REQUEST['trainName'];
		$this->load->model("admin");
		$res = $this->admin->chkTrain($trainName);
		
		echo $res;
		
		exit;
	
	}
	
	public function checkTrainNo()
	{
		$trainNo = $_REQUEST['trainNo'];
		$this->load->model("admin");
		$res = $this->admin->chkTrainNo($trainNo);
		echo $res;
		exit;
	
	}
	
	public function userList()
	{
		$this->load->helper('url'); 
		$this->load->model("admin");
		$data["user"] = $this->admin->user();
		$this->load->view('admin/userList',$data);
	}
	
	public function calender()
	{
		$this->load->helper('url'); 
		$this->load->view('admin/calendar');
	}
	
	public function userprofile()
	{
		$this->load->helper('url'); 
		$this->load->view('admin/userprofile');
	}
	
	
	
	public function trainList()
	{
		$this->load->helper('url'); 
		$this->load->model("admin");
		$data["trainList"] = $this->admin->trainList();
		$this->load->view('admin/trainList', $data);
	}
	
	public function trashBin()
	{
		$this->load->helper('url'); 
		$this->load->model("admin");
		$data["trashBin"] = $this->admin->trashBin();
		$this->load->view('admin/trash', $data);
	}
	
	public function delete()
	{
		$this->load->model("admin");
		$id = $this->input->get('id');
		if($this->admin->deleteTrains($id)){
			$data['trainList']= $this->admin->trainList();
			$this->load->view('admin/trainList', $data);
		}
		
	}
	
	
	public function signIn()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userName', 'User Name', 				'required|alpha_numeric|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
		if($this->form_validation->run() ){
			$this->load->model('admin');
			$email = $this->input->post('userName');
			$password = $this->input->post('password');
			$data = $this->admin->auth($email,$password);
			if (count($data)>0){
				$data = $data[0];
				$this->session->set_userdata($data);
				redirect(base_url().'index.php/Home/admin_session');
			}else{
				$this->session->set_flashdata('error','Invalid Email or Password');
				redirect("index.php/Home/index");
			}
		}else{
			 
			$this->load->view('home/signin');
		}
	}
	
	
	
	public function admin_session(){
		if($this->session->has_userdata('id')){
			redirect(base_url().'index.php/Home/dashboard');
		}else{
			redirect(base_url().'index.php/Home/index');
		}
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/Home/index');
	}
	
	public function userDetails(){
  		$postData = $this->input->post();

  		$this->load->model('home');

  		$data = $this->home->getUserDetails($postData);

  		echo json_encode($data);
 }
	
	public function trainEntry()
	{
		$this->load->helper('url');
		$this->load->model('admin');
		$this->load->view('admin/trainEntry');
		if(isset($_POST['submitReg'])){
				$regData =array(
					'trainNo' =>$_POST['trainNo'],
					'trainName' =>$_POST['trainName'],
					'trainStation' =>$_POST['stations'],
					'operatingDay' =>$_POST['days'],
					'ArrvialTime' =>$_POST['arrvialStarthrs'] .":". $_POST['arrvialStartmins'],
					'DeparturetTime' =>$_POST['departureStarthrs'] .":". $_POST['departureStartmins'],
					'seatAvlForBooking' =>$_POST['seatAvlForBooking'],
					'speed' =>$_POST['speed'],
					'CurrentAvlTkt' =>$_POST['currentAvlTkt'],
					'quota' =>$_POST['quota'],
					'price' =>$_POST['price'],
					'cupon ' =>$_POST['cupon']
				);
				$this->db->insert('train',$regData);
		}
		
	}
	
}