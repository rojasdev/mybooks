<?php
class User{
	public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Error: Could connect to Database.";
			exit;
		}
	}
	
	public function check_login($useremail,$password){
		$password = md5($password);
		$sql="SELECT user_firstname FROM tbl_users WHERE 
		user_email='$useremail' AND user_password='$password'";
		
		$result=mysqli_query($this->db,$sql);
		//$user_data=mysqli_fetch_array($result);
		$count_row=$result->num_rows;
		
		if($count_row==1){
            //$_SESSION['status'] = "Cheetos";
			$_SESSION['authuser']=true;
			return true;
		}else{
			return false;
		}
	}
	
	public function get_session(){
		return $_SESSION['authuser'];
	}
	
	public function user_logout(){
		$_SESSION['authuser']=false;
		session_destroy();
    }
}
?>