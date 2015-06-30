<?php
error_reporting(E_ERROR | E_PARSE);
include('connection.php');
$sql ="CREATE TABLE imgs (
	 part int(11) NOT NULL,
     org_img varchar(150) NOT NULL,
     blur_img varchar(150) NOT NULL,
	 timestamp bigint(20) NOT NULL

      )";
           if (!mysql_query($sql))
                       { 
                die('Error: ' . mysql_error());
                       }
               else
               { 
                 echo "table created";
               } 
$f = fopen("1435664404yashi.goyal777.txt", "r");
while(!feof($f)) { 
  $data = explode(" ", fgets($f));
  echo "<pre>";
 print_r($data);
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
?>