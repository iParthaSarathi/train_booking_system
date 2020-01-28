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
	/* Author: Jorge Torres
* Description: Login controller class
// */
// 		function __construct(){
// 	parent::__construct();
// 	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
		if(isset($_POST['submitReg'])){
			$this->form_validation->set_rules('userNameReg' ,'user Name','required');
			$this->form_validation->set_rules('emailReg' ,'email','required');
			$this->form_validation->set_rules('phone' ,'phone','required');
			$this->form_validation->set_rules('gender' ,'gender','required');
			$this->form_validation->set_rules('passwordReg' ,'password','required');
			if($this->form_validation->run() == TRUE){
				$regData =array(
					'userName' =>$_POST['userNameReg'],
					'email' =>$_POST['emailReg'],
					'phone' =>$_POST['phone'],
					'gender	' =>$_POST['gender'],
					'password' =>$_POST['passwordReg']
				);
				$this->db->insert('user',$regData);
				$this->load->model('home');
			$email = $this->input->post('userNameReg');
			$password = $this->input->post('passwordReg');
			$data = $this->home->auth($email,$password);
			if (count($data)>0){
				$data = $data[0];
				$this->session->set_userdata($data);
				redirect(base_url().'index.php/welcome/user_session');
			}else{
				redirect("index.php/Welcome/index");
			}
			}
		}
		
}
public function signIn()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userName', 'User Name','required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() ){
			$this->load->model('home');
			$email = $this->input->post('userName');
			$password = $this->input->post('password');
			$data = $this->home->auth($email,$password);
			if (count($data)>0){
				$data = $data[0];
				$this->session->set_userdata($data);
				redirect(base_url().'index.php/welcome/user_session');
			}else{
				$this->session->set_flashdata('error','Invalid Email or Password');
				redirect(base_url());
			}
		}else{
			 
			$this->load->view('welcome_message');
		}
	}
	public function user_session(){
		if($this->session->has_userdata('id')){
		redirect(base_url().'index.php/Welcome/userform');
		}else{
			redirect(base_url().'index.php/Welcome/index');
		}
		
	}




	public function userform() //fill the remain form

	{
		$this->load->helper('url'); 
		$this->load->model("home");
		$data["user"] = $this->home->user();
		$this->load->view('userform', $data);
		$ip=$_SERVER['REMOTE_ADDR'] ;
		$sessionid = $_SESSION['id'];
		$email= $_SESSION['email'];$password= $_SESSION['password'];
		if(isset($_POST['subButton'])){
				$regData1 =array(
					'fname' =>$_POST['firstName'],
					'lastname' =>$_POST['lastName'],
					'birthDate' =>$_POST['datepicker'],
					'address' =>$_POST['address'],
					'city' =>$_POST['city'],
					'state' =>$_POST['state'],
					'securityQuestion' =>$_POST['securityQust'],
					'SecQusAns' =>$_POST['securityAns'],
					'marriedStatus' =>$_POST['marriedStatus'],
					'userIp' =>$ip,
					'idcardType' =>$_POST['selectIdCard'],
					'idCardNum' =>$_POST['idCardNumber'],
					'fomcompleate' =>'1'
				);
				$this->db->where('id',$sessionid);
				$this->db->update('user',$regData1);
				$this->session->set_userdata('fname', $_POST['firstName']);
				$this->session->set_userdata('lastname', $_POST['lastName']);
				$this->session->set_userdata('birthDate', $_POST['datepicker']);
				$this->session->set_userdata('address', $_POST['address']);
				$this->session->set_userdata('city', $_POST['city']);
				$this->session->set_userdata('state', $_POST['state']);
				$this->session->set_userdata('securityQuestion', $_POST['securityQust']);
				$this->session->set_userdata('marriedStatus', $_POST['marriedStatus']);
				$this->session->set_userdata('SecQusAns', $_POST['securityAns']);
				$this->session->set_userdata('idcardType', $_POST['selectIdCard']);
				$this->session->set_userdata('idCardNum', $_POST['idCardNumber']);
				$this->session->set_userdata('fomcompleate','1');


		redirect(base_url().'index.php/Welcome/dashIndex');
			}


	}
	function dashIndex(){
		$this->load->helper(array('form', 'url'));
		$this->load->model("home");
		$sessionid =$_SESSION['id'];	
		//$data = $this->home->auth($email,$password);
		$data["pendingShow"] = $this->home->pendTickt($sessionid);

		$this->load->view('elements/userdashHead');
		$this->load->view('dashIndex',$data);
		$this->load->view('elements/userdashfoot');

	}

	function userprofile(){
		$this->load->view('elements/userdashHead');
		$this->load->view('userprofile');
		$this->load->view('elements/userdashfoot');
	}
	function userprofileEdit(){
		$this->load->view('elements/userdashHead');
		$this->load->view('userprofileupdate');
		$this->load->view('elements/userdashfoot');
		$sessionid = $_SESSION['id'];

		if(isset($_POST['buttonUpdate'])){
	   $config['upload_path'] ='./assets/upload/'; 
	   $config['allowed_types'] = 'jpg|png|jpeg';
	   $config['max_size'] = '3000';
	   $config['encrypt_name'] = TRUE;
			
	  $this->load->library('upload',$config);
	  if($this->upload->do_upload("photo"))
	  {
	  	$upload_data = $this->upload->data(); 
	  
	    $file_name = $upload_data['file_name'];
	     echo $file_name ;

	  $regData1 =array(
					'photo' =>$file_name,
					'fname' =>$_POST['firstName'],
					'lastname' =>$_POST['lastname'],
					'bio' =>$_POST['bio'],
					'address' =>$_POST['address'],
					'city' =>$_POST['city'],
					'state' =>$_POST['state'],
					'securityQuestion' =>$_POST['securityQuestion'],
					'SecQusAns' =>$_POST['secQusAns'],
					'marriedStatus' =>$_POST['marriedStatus'],
					'work' =>$_POST['work'],
					'paymentCardType' =>$_POST['paymentCardType'],
					'paymentCardNumber' =>$_POST['marriedStatus'],
					'exp' =>$_POST['exp']				
				);
		 	
	 	     }else{
                    $regData1 =array(
					'fname' =>$_POST['firstName'],
					'lastname' =>$_POST['lastname'],
					'bio' =>$_POST['bio'],
					'address' =>$_POST['address'],
					'city' =>$_POST['city'],
					'state' =>$_POST['state'],
					'securityQuestion' =>$_POST['securityQuestion'],
					'SecQusAns' =>$_POST['secQusAns'],
					'marriedStatus' =>$_POST['marriedStatus'],
					'work' =>$_POST['work'],
					'paymentCardType' =>$_POST['paymentCardType'],
					'paymentCardNumber' =>$_POST['paymentCardNumber'],
					'exp' =>$_POST['exp']				
				);
                    $file_name=$_SESSION['photo'];
		 		
	 	     }
	 	        $this->db->where('id',$sessionid);
				$this->db->update('user',$regData1);
				$this->session->set_userdata('fname', $_POST['firstName']);
				$this->session->set_userdata('lastname', $_POST['lastname']);
				$this->session->set_userdata('bio', $_POST['bio']);
				$this->session->set_userdata('address', $_POST['address']);
				$this->session->set_userdata('city', $_POST['city']);
				$this->session->set_userdata('state', $_POST['state']);
				$this->session->set_userdata('securityQuestion', $_POST['securityQuestion']);
				$this->session->set_userdata('SecQusAns', $_POST['secQusAns']);
				$this->session->set_userdata('marriedStatus', $_POST['marriedStatus']);
				$this->session->set_userdata('work', $_POST['work']);
				$this->session->set_userdata('paymentCardType', $_POST['paymentCardType']);
				$this->session->set_userdata('paymentCardNumber', $_POST['paymentCardNumber']);
				$this->session->set_userdata('exp', $_POST['exp']);
				$this->session->set_userdata('photo',$file_name);

	 	     redirect(base_url().'index.php/Welcome/userprofile');
				
		 }
	}

	//train list
	function trainList(){
		$this->load->model("home");
		$data["trainListShow"] = $this->home->trainListShow();
		$this->load->view('elements/userdashHead');
		$this->load->view('trainlist',$data);
		$this->load->view('elements/userdashfoot');
	}

	public function search()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->model("home");
		$search = $this->input->post('search');	
		//$data = $this->home->auth($email,$password);
		$data["trainListShow"] = $this->home->search($search);
		$this->load->view('elements/userdashHead');
		$this->load->view('search',$data);
		$this->load->view('elements/userdashfoot');
	}

	//wallet list
	function wallet(){
		$sessionid = $_SESSION['id'];
		 //$this->load->model("home");
		// $data["trainListShow"] = $this->home->trainListShow();
		$this->load->view('elements/userdashHead');
		$this->load->view('wallet');
		$this->load->view('elements/userdashfoot');
		//add money to wallet
		if(isset($_POST['moneySubmit'])){
			$money=$_SESSION['wallet'];
			$added=$_POST['enterAmount'];
			$current = ($money+$added);
			echo $current;
				$regDataMoney =array(
					'wallet' =>$current
				);
				$this->db->where('id',$sessionid);
				$this->db->update('user',$regDataMoney);
				$this->session->set_userdata('wallet',$current);
				redirect(base_url().'index.php/Welcome/wallet');
	}
		//add card
		if(isset($_POST['addCardSub'])){
				$regDatacard =array(
					'paymentCardType' =>$_POST['paymentCard'],
					'paymentCardNumber' =>$_POST['CardNumber'],
					'exp' =>$_POST['expdate']	
				);
				$this->db->where('id',$sessionid);
				$this->db->update('user',$regDatacard);
				$this->session->set_userdata('paymentCardType', $_POST['paymentCard']);
				$this->session->set_userdata('paymentCardNumber', $_POST['CardNumber']);
				$this->session->set_userdata('exp', $_POST['expdate']);
				redirect(base_url().'index.php/Welcome/wallet');
	}
}
	
	//sent mail
	 public function send_mail() {
      //  $this->load->library('email');

        // $nome = $this->input->post('nome');
        // $email = $this->input->post('email');
        // $msg = $this->input->post('msg');
        // $mailto = $this->input->post('mailto');
        // $secure = $this->input->post('secure');
       $string='abcdefghijklmnopqrstwxyz1234567890!@#$%^&*';
        $suffel=str_shuffle($string);
        $substr=substr($suffel, 3,9);

      
$config['protocol']    = 'smtp';

$config['smtp_host']    = 'ssl://smtp.gmail.com';

$config['smtp_port']    = '465';

$config['smtp_timeout'] = '7';
$config['smtp_user'] = 'ps747842@gmail.com';
$config['smtp_pass'] = "@@@@@@747392@@@@@@6264";
$config['charset']    = 'utf-8';

$config['newline']    = "\r\n";

$config['mailtype'] = 'text'; // or html

$config['validation'] = TRUE;
	
	  $this->load->library('email', $config); 

        $this->email->from("ps597924@gmail.co","nome");
        $this->email->to($_SESSION['email']);
        $this->email->subject('OTP For Add Money To Wallet');
        $this->email->message('Hi'. $_SESSION['fname']." ".$_SESSION['lastname']."this is a ONE time OTP for Your transaction Your OTP is ".$substr);
        if ($this->email->send()){
			echo json_encode(array("sent"=>TRUE,"data"=>$substr));
        }else{
            echo json_encode(array("sent"=>FALSE));
        }
}


		//search Train Station
	function searchStation(){
		$sessionid = $_SESSION['id'];
		if (isset($_GET['vid'])) {
			//echo $_GET['vid'];
			$search=$_GET['vid'];
		}else{
			$search='';
		}

		$this->load->helper(array('form', 'url'));
		$this->load->model("home");
		//$data = $this->home->auth($email,$password);
		$data["trainList"] = $this->home->search($search);

		
		$this->load->view('elements/userdashHead');
		$this->load->view('searchStation',$data);
		$this->load->view('elements/userdashfoot');

		if(isset($_POST['trainFormSubmit'])){
				$regData1 =array(
					'userId' =>$sessionid,
					'trainId' =>$_POST['trainName'],
					'confirm' =>0,
					//////////////////////////////////////////////////
					'passsengerName' =>$_POST['enterName'],
					'passsengerage' =>$_POST['enterage'],
					'passsengerIdValType' =>$_POST['enterIdCard'],
					'passsengerIdValNumber' =>$_POST['enterCardNumber'],
					'passsengercontact' =>$_POST['enterContact'],
					'passMale' =>$_POST['enterNoOfMale'],
					'female' =>$_POST['enterNoOfFeMale'],
					'childPass' =>$_POST['enterNoOfChild'],
					'seniorCity' =>$_POST['enterNoSeniorCitizen'],
					'seatCondition' =>$_POST['Coondition'],
					'food' =>$_POST['enterFoode'],
					'fromStation' =>$_POST['fromStation'],
					'toSation' =>$_POST['toStation'],
					'rac' =>$_POST['StatusTicket'],
					'dateOfTravel' =>$_POST['dateTicket'],
					'price' =>$_POST['priceTicket']
				);
				$this->db->insert('trainBookingNormal',$regData1);
				redirect(base_url().'index.php/Welcome/ticketStatus');
	}
}
function finalPaym(){
		$this->load->helper(array('form', 'url'));
		$this->load->model("home");
		$ses=$_SESSION["id"];
		if (isset($_GET['vid'])) {
			//echo $_GET['vid'];
			$sessionid=$_GET['vid'];
		}else{
			$sessionid='';
		}	
		//$data = $this->home->auth($email,$password);
		$data["pendingShow"] = $this->home->pendTickt1($sessionid);

		$this->load->view('elements/userdashHead');
		$this->load->view('finalPaym',$data);
		$this->load->view('elements/userdashfoot');
		if(isset($_POST['finalSubmit'])){
			$sesWallet=$_SESSION["wallet"]-$_POST['money'];
				$regData1 =array(
					'confirm' =>1);
				$regData2 =array(
					'wallet' =>$sesWallet);
				$this->db->where('id',$sessionid);
				$this->db->update('trainBookingNormal',$regData1);
				$this->db->where('id',$ses);
				$this->db->update('user',$regData2);
				$this->session->set_userdata('wallet',$sesWallet);


				redirect(base_url().'index.php/Welcome/ticketStatus');
	}


	}
	function ticketStatus(){
		$this->load->helper(array('form', 'url'));
		$this->load->model("home");
		$sessionid =$_SESSION['id'];	
		//$data = $this->home->auth($email,$password);
		$data["pendingShow"] = $this->home->pendTickt($sessionid);
		$this->load->view('elements/userdashHead');
		$this->load->view('ticketStatus',$data);
		$this->load->view('elements/userdashfoot');
	}

	//for registration 
	public function userDetails(){
  // POST data
  $postData = $this->input->post();

  //load model
  $this->load->model('home');

  // get data
  $data = $this->home->getUserDetails($postData);

  echo json_encode($data);
 }

 //for email 
	public function useremail(){
  // POST data
  $postData = $this->input->post();

  //load model
  $this->load->model('home');

  // get data
  $data = $this->home->emailValidChk($postData);

  echo json_encode($data);
 }

 //for mobile 
	public function userphone(){
  // POST data
  $postData = $this->input->post();

  //load model
  $this->load->model('home');

  // get data
  $data = $this->home->phoneValidChk($postData);

  echo json_encode($data);
 }




	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
//}
