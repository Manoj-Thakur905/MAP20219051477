<?php

class Login extends Controller {

    public function index() {		
	    $this->view('login/index');
    }
    
    public function verify(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
		
		$user = $this->model('User');
		if(!empty($username) && !empty($password) && !is_numeric($username) && htmlspecialchars($username))
		{
		$user->authenticate($username, $password); 
		die;
		} else {
			$message = "Username & Password must be a valid, try again";
			}
		$this->view('login/index', ['message' => $message]);
	}

}
