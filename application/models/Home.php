<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends CI_Model{

 function __construct(){
        parent::__construct();
    } 
    
    public function auth($email,$password)
    {
        $this->db->where('userName',$email);
        $this->db->where('password',$password);
        $query = $this->db->get('user')->result_array();
        return $query;
    }
    public function getset($sessionid)
    {
        $this->db->where('id',$sessionid);
        $query = $this->db->get('user')->result_array();
        return $query;
    }
    //for username validetion 
    function getUserDetails($postData){
 
    $response = array();
 
    if($postData['username'] ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('userName', $postData['username']);
      $q = $this->db->get('user');
      $response = $q->result_array();
 
    }
 
    return $response;
  }
  //for email validetion 
  function emailValidChk($postData){
 
    $response = array();
 
    if($postData['email'] ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('email', $postData['email']);
      $q = $this->db->get('user');
      $response = $q->result_array();
 
    }
 
    return $response;
  }
  //for phone validetion 
  function phoneValidChk($postData){
 
    $response = array();
 
    if($postData['phone'] ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('phone', $postData['phone']);
      $q = $this->db->get('user');
      $response = $q->result_array();
 
    }
 
    return $response;
  }
  //TRAIN DATA RETRIVE
    public function trainListShow(){
    $query = $this->db->query("SELECT * FROM train"); 
    return $query;
  }
   //TRAIN DATA RETRIVE
    public function search($search){
    $query = $this->db->query("SELECT * from train where (TrainName like '%" . str_replace( ' ', '%\' AND TrainName LIKE \'%', $search ) . '%\') 
         OR (operatingDay like' ."'".'%'. str_replace( ' ', '%\' AND operatingDay LIKE \'%', $search ) . '%\')
         OR (trainStation like' ."'".'%'. str_replace( ' ', '%\' AND trainStation LIKE \'%', $search ) . '%\')
         OR (ArrvialTime=' ."'". str_replace( ' ', '\' AND ArrvialTime='."'", $search )."'".')
         OR (quota=' ."'". str_replace( ' ', '\' AND quota='."'", $search )."'".')
         OR (ArrvialTime=' ."'". str_replace( ' ', '\' AND ArrvialTime='."'", $search )."'".')
         OR (trainNo=' ."'". str_replace( ' ', '\' AND trainNo='."'", $search ) ."'".') 
         OR (DeparturetTime like' ."'".'%'. str_replace( ' ', '%\' AND DeparturetTime LIKE \'%', $search ) ."%'".')'); 
    return $query;
  }
   public function pendTickt($sessionid){
    $query = $this->db->query("SELECT * from trainBookingNormal where userId =".$sessionid ); 
    return $query;
  }
  public function pendTickt1($sessionid){
    $query = $this->db->query("SELECT * from trainBookingNormal where id =".$sessionid ); 
    return $query;
  }
  public function user(){
    $query = $this->db->query("SELECT * FROM user"); 
    return $query;
  }
   public function userSession(){
    $user_id = $this->session->userdata('user_id');
  }



}
?>
