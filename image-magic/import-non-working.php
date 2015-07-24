<?php
error_reporting(E_ERROR | E_PARSE);
//include('connection.php');

/*$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
	echo "YOUR CONNECTION HAS FAILED";
    die();
} 

// Create database
$sql = "CREATE DATABASE image1";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: ";
}*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql ="CREATE TABLE imgs (
	 part int(11) NOT NULL,
     org_img varchar(80) NOT NULL,
     blur_img varchar(80) NOT NULL,
	 timestamp bigint(20) NOT NULL
 )";

if ($conn->query($sql) === TRUE) {
$f_name=$_POST['f_name'];	   
$f = fopen($f_name, "r");
while(!feof($f)) { 
  $data = explode(" ", fgets($f));
// print_r($data);
  //echo $data[0];
  //echo $data[1];
  //echo $data[2];
  //echo $data[3]; 
  $sql1= "INSERT into imgs (part,org_img,blur_img,timestamp) VALUES('".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";

           if (!mysql_query($sql1))
                       { 
                die('Error: ' . mysql_error());
                       }       
 
}
fclose($f); 
	
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>