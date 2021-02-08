<?php
	require_once('header.php');
?>
<html>
	<head>
		<title>Welcome to LAB 4</title>
	</head>

	<body>
	
		<form action="login.php" method="POST">
           <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <button type="submit">Login</button>
	      </div>
		</form>
	
	</body>
</html>
<?php
	require_once('footer.php');
?>
