<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function register($email,$username,$password,$level)
	{
		$data_user = array(
			'email'=>$email,
			'username'=>$username,
			'level'=>$level,
			'password'=>$password,
			
		);
		$this->db->insert('user',$data_user);
	}
}
?>