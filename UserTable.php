<!DOCTYPE html>
<html><head>
<style>
           table {
  border-collapse: collapse;
  border: 1px solid black;
}

th,td {
  border: 1px solid black;
}
	table.b {
  table-layout: fixed;
  width: 496px;  
}
	   </style>

</head><body>
	<?php
	$favorites = array(

array (
"Name" => "Dave Punk",
"Phone"=>"5689741523",
"Email" => "davepeunk@gnail.com"),
array(
"Name"=> "Monty Smith",
"Phone" => "2584369721",
"Email" => "montysmith@gmail.com"),
array(
"Name" => "John Flinch",
"Phone"=> "9875147536",
"Email"=> "johnflinch@gmail.com")
);
	 echo"<h2>Table User</h2>";
 
 
 echo "<table border-height = thin border-style = solid cellpadding = 1 width = 490px border= 3><tbody><th>Name</th>  <th>Phone No.</th>     <th>Gmail</th></tbody></table>";
 
 foreach ($favorites as $makey => $mavalue)
 {
 echo "<table class= b border-height = thin border-style = solid cellpadding = 1 width = 300px border= 3><tbody><tr>";
 foreach($mavalue as $key => $value)
{
 
        echo "<th>".$value."</th>";
        }
 echo "</tr></tbody></table>";
 };
?>
</body>
</html>