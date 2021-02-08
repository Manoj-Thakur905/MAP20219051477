<!DOCTYPE html>
<html>
	<head>
	</head>
<body>
	<?php
		session_start();
		
    	include ('db.php');
	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
		$password = $_REQUEST['pass'];
		$username = $_REQUEST['user'];
        $db = new db();
        
        $conn = $db->db_connect();
        
        $query = "SELECT * FROM users where username = :username";
        $stmt = $conn->prepare($query);
		$stmt->bindParam(':username',$username);
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $result[0]['Password'])) {
		//User Logged in Successfully
		$_SESSION['isAuthenticated'] =1;
		unset($_SESSION['failedAttempts']);
		header("Location: secret.php");
		
		} else {
		if ($_SESSION['failedAttempts']) {
			$_SESSION['failedAttempts']++;
		} else 
			$_SESSION['failedAttempts'] = 1;
		}
		}
	?>
</body>
</html>