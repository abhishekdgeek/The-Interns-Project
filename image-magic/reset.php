<?php 

/*Connect to DB*/
include('connection.php');

for ($i=0; $i < 400; $i++) { 
	$sql = "UPDATE  `test_image`.`imgs1` SET  `active` =  '0' WHERE  `imgs1`.`id` =$i";
	$result = mysql_query($sql);
}

?>