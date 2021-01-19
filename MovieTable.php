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

table.a {
  table-layout: auto;
  width: 50px;  
}
	#movies{
font-family: sans-serif;
  border-collapse: collapse;
  width: 55%;
}
#movies td, #movies th {
  border: 1px solid ;
  padding: 4px;
}

#movies th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: centre;
}
	     </style>

</head><body>
	<?php
    $superheroes= array(

"comedy" => array (

0 => "Pink Panther",

1 => "johnny English",

2 => "Tommy Boy"),

"action" => array (
0 => "Die Hard",
1 => "Expendables"),

"epic" => array(
0 => "The Lord of the"),

"Romance" => array (
0 => "Romeo and Julie")
);
	echo"<h2>Table Movies</h2>";
	echo "<table border='1' id='Movies' width='275'>

<tr>

<th>Genere</th>

<th>Movies</th>

</tr>";
foreach ($superheroes as $masterkey => $mastervalue)
{
echo "<table id='movies'><tbody>";
     
    echo "<tr><th width='18.6%'>".$masterkey."</th>";

    foreach($mastervalue as $key => $value)
    {
        echo "<td>".$value."</td></td></th>";
       

    //echo "</tr>";
    }
 echo "</tr></tbody></table>";
} echo "<br>";;
 
?>
</body>
</html>