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
        $statement = $db->prepare("select * from users
                                WHERE username = :name;
                ");
        $statement->bindValue(':name', $username);
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

if(isset($_POST['create']))
{
$sql_u = "select * from Users where username = '$username' " ;
$res_u = mysqli_query($db, $sql_u) or die(mysqli_query($db));
if (mysqli_num_rows($res_u) > 0) {
$name_error = "Sorry Username already taken";
}
							else{
$query = "insert into Users ('username','password') VALUES ('$username', '" .md5($password)."')";
$res_u = mysqli_query($db, $query) or die(mysqli_query($db));
echo "saved";
exit();
}
}
		}
}

