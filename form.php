<?php
  $dbhost = 'remotemysql.com';
    $dbname = 'A8BWnEolTn';
    $dbuser = 'A8BWnEolTn';
    $dbpass = 'adgadEvIoZ';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $query = "SELECT * FROM fruits";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

?>

<html>
<head></head>
<body>
      <form action="form.php" method="post"> 
	        <label for="fname">First name:</label>
	        <br>
	        <input type="text" id="fname" name="fname">
	        <br>
	      
		    <label for="lname">Last name:</label>
	        <br>
	        <input type="text" id="lname" name="lname">
	        <br>
		  
	        <select name="fruits" id="Fruits">
                 <option value="apple">Apple</option>
                 <option value="banana">Banana</option>
                 <option value="orange">Orange</option>
            </select>
	        <br><br>
	        
		  <input type="submit" value = "Submit">
	      
		  <?php
	              if($_SERVER['REQUEST_METHOD']=='POST'){
				       echo'Information Updated';
                  }
	       ?>
      </form>
</body>
</html>