<?php
	class DB {
    public function db_connect(){
    $dbhost = 'remotemysql.com';
    $dbname = 'A8BWnEolTn';
    $dbuser = 'A8BWnEolTn';
    $dbpass = 'adgadEvIoZ';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	return $conn;
    }
}
?>