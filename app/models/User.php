<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate($username, $password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		$username = strtolower($username);
		$db = db_connect();
        $statement = $db->prepare('select * from Users
                                WHERE username = :username;');
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			$_SESSION['username'] = ucwords($username);
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
    }
	public function user_exists($username)
	{
	
	$db = db_connect();
 	$statement = $db->prepare("SELECT * FROM Users WHERE username= :username");
	$statement->execute(array(':username' => $username));
 	$statement->execute();
 	$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	$numberRows = count($rows);
 	return $numberRows;
	}
	
	public function insert_new_user($username,$password)
	{
	$db = db_connect();
	
	$statement = $db->prepare("insert into Users (username, password) values(:username,:password)");
	$statement->execute(array(':username' => $username, 'password'=>$password));
	}
}
