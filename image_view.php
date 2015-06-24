<?php
include ('connection.php');
$a= $_POST['n1'];
$url= "http://graph.facebook.com/".$a;
//echo $url;
$test = json_decode(file_get_contents($url));
echo "<pre>";
$test1 = $test-> shares;
$show=round($test1/50000);
 //echo $show;
//print_r($test1);
$sql = "SELECT * from img_table";
$result = mysql_query($sql);
while($row1= mysql_fetch_array($result))                                                 
 {	
  $j=1;
 if ($j<$show)
 {
 echo "<img src= '".$row1['org_img']."'>" ;
 $id= $row1['id'];
// echo $id;
 if($id%10==0)
 {
	 echo "<br>";
 }
 $show--;
 }
 else
 {
	 echo "<img src= '".$row1['blur_img']."'>" ;
 $id= $row1['id'];
// echo $id;
 if($id%10==0)
 {
	 echo "<br>";
 }
 }
 }

 
	//replace upto that ...blur wid original 
	/*for($i=1;$i<=$show;$i++)
	{
	echo "<img src= '".$row1['org_img']."'>";
	if($i%10==0)
	{
		echo "<br>";
	}
   }*/
   
   // echo  "<img src= '".$row1['blur_img']."'>";


 
?>