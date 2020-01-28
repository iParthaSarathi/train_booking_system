<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function form_insert($data){
		$this->db->insert('train', $data);
	}
	
	public function auth($email,$password)
	{
		$this->db->where('userId',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('admin')->result_array();
		return $query;
	}
	public function fetch_data(){
		$query = $this->db->query("SELECT * FROM admin;");	
		return $query;
	}
	public function user(){
		$query = $this->db->query("SELECT * FROM user"); 
		return $query;
	}
	public function fetch_user_data(){
		$query = $this->db->query("SELECT * FROM user LIMIT 0, 2");	
		return $query;
	}
	public function trainList(){
		$query = $this->db->query("SELECT * FROM train"); 
		return $query;
	}
	
	public function trashBin(){
		$query = $this->db->query("SELECT * FROM trainbookingtrash"); 
		return $query;
	}
	
	public function chkTrain($trainName)
	{
			$this->db->where("TrainName",$trainName);
			return $this->db->get("train")->num_rows();
	
	}
	
	public function chkTrainNo($trainNo)
	{
			$this->db->where("trainNo",$trainNo);
			return $this->db->get("train")->num_rows();
	
	}
	
	function deleteTrains($id)
	{
		
		$this->db->query("DELETE FROM `train` WHERE id=".$id);
		//$this->load->database();
		//$this->db->where('id',$id);
		//$this->db->delete('train');
		return true;
	}

}

?>

