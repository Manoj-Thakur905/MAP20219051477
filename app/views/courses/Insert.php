<?php require_once 'app/models/Insert.php' ?>
<html>
	<head>
		<title>PDO PHP Data Insertion </title> 		 
	</head>
	<body>
		<h1> Insert data Into phpmyadmin </h1>
		<form action= "" method = "POST">
			<table>
				<tr>
					<td>
						<center>
							<input type = "number" name= "id" placeholder = "Enter ID"/><br>
							<input type = "text" name = "course_ID" placeholder = "Enter Course ID"/> <br>
							<input type = "text" name = "course_name" placeholder = "Enter Course Name"/> <br>
							<input type = "text" name = "department" placeholder = "Enter Course Department"/> <br>
							<input type = "text" name = "program" placeholder = "Enter Program Name"/> <br>
							
							<button type = "submit" name = "insert" >Sign Up</button>
						</center>
					 </td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
/*
	public function register ($username, $password) {
		$username = strtolower($username);
		$db = db_connect();
		
		if(isset($_POST['create'])){
			$sql_u = $db->prepare("select * from Users where username = '$username' ") ;
			$res_u = mysqli_query($db, $sql_u) or die(mysqli_query($db));
		 	if (mysqli_num_rows($res_u) > 0) {
			 $name_error = "Sorry Username already taken";
			 }else if (!empty($username) && !empty($password) && !is_numeric($username)){
			$query = "insert into users ('username','password') VALUES ( '$username', '" .md5($password)."')";
			mysqli_query($db,$query);
			die;
			}else{
				echo "Please enter some valid information!";
			}
			header('Location: /login');
			die;
			
			
			/*
		$statement = $db->prepare('select * from Users
                                WHERE username = :username;');
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC); 
		
		if (isset($_SESSION['username'])){
			$username = $_SESSION['username'];
			//CHECK IF USERNAME ALREADY EXISTS
			$stmt = $db->prepare("select * from Users where username = '$username'");
			$result = mysqli_query($db, $stmt);
			if($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
			header('Location: /login');
			die;
		} */
		
	/*
	 if(isset($_POST['create'])){
			$sql_u = "select * from Users where username = '$username' " ;
			$res_u = mysqli_query($db, $sql_u) or die(mysqli_query($db));
		 	if (mysqli_num_rows($res_u) > 0) {
			 $name_error = "Sorry Username already taken";
			 }else{
			 $query = "insert into Users ('username','password') VALUES ('$username', '" .md5($password)."')";
			 $res_u = mysqli_query($db, $query) or die(mysqli_query($db));
			 echo "saved";
			 exit();
		 }
		 }
		 
		*/ 
	?>