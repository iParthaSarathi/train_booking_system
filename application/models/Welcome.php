<?php
class home extends CI_Model{
	
public function __construct() {
parent::__construct();
}
public function auth($email,$password)
	{
		$this->db->where('userName',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('user')->result_array();
		return $query;
	}

}
?>
