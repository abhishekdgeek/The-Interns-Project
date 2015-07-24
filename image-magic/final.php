<style>
	.image-part {
	  display: inline;
	}
	.image-part img {
	  width: 2%;
	}
</style>

<div class="">
	<div class="image-block"> 
		<div class="image-row"> 

<?php

//echo "<pre>";

/*Connect to DB*/
include('connection.php');


/*Connect to DB*/
/*$con=mysql_connect("localhost","solomapv_plaunch","GA%Ts&1T~h9(");
$rs=mysql_select_db("solomapv_plaunch");
if(!$rs)
{
echo "error";
}*/

/*Real Time stats*//*
$url= "http://graph.facebook.com/"."http://www.videoconmobiles.com/";
$fb_graph = json_decode(file_get_contents($url));
$t_fb_shares = $fb_graph->shares;
$show=round($t_fb_shares/20);*/
$show=400;
/*Stats from DB*/
$sql = "SELECT * from `imgs1` WHERE  `active` =1";
$result = mysql_query($sql); 
$totaloriginal = mysql_num_rows($result); 

if($totaloriginal <= $show){
	$itr =  $show - $totaloriginal;
	for ($i=0; $i < $itr;) { 
		/*Select ID*/
		$sql = "SELECT `id` from imgs1 WHERE  `active` =1";
		$result = mysql_query($sql);
		/*Fetch the rows that have been revealed.*/
		while($row= mysql_fetch_row($result))  {
			$newrow[] = $row[0];
		}
		$new = rand(1, 400);
		if(!in_array($new, $newrow)){
			$sql = "UPDATE  `test_image`.`imgs1` SET  `active` =  '1' WHERE  `imgs1`.`id` =$new";
			$result = mysql_query($sql);
			$i++;
		}
	}
}
$sql = "SELECT * from `imgs1` WHERE  `active` =1";
$result = mysql_query($sql); 
$totaloriginal = mysql_num_rows($result); 


$sql = "SELECT * from imgs1";
$result = mysql_query($sql);
//echo "<pre>";
$x=0;
while($row = mysql_fetch_row($result))  {
	if ($x%20 == 0 && $x!=0){
		echo "</div><div class='image-row'>";
	}
		if($row['5'])
			echo "<div class='image-part'><img src= '".$row[2]."'></div>";
		else
			echo "<div class='image-part'><img src= '".$row[3]."'></div>";
	//$newrow[]=$row;
		$x++;
}


/*$sql = "SELECT * from imgs1";
$result = mysql_query($sql); 

$clear = "SELECT * FROM  `imgs1` WHERE  `active` =1";
$result = mysql_query($clear);
echo "<pre>";
while($row= mysql_fetch_row($result))  {
	$newrow[$row[0]] = $row[2];
}

$countsql = "SELECT * FROM  `imgs1` WHERE  `active` =0";
$result = mysql_query($countsql);
echo "<pre>";
while($row= mysql_fetch_row($result))  {
	$newrow[$row[0]] = $row[3];
}*/



//print_r($newrow);


?>
<?php 
//$x=1;
/*while($row= mysql_fetch_array($result))  
{
	$j=1;
	if ($j<=$show){
		echo "<td>";
			echo "<img src= '".$row['org_img']."'>" ;
		echo "</td>";
		$part= $row['part'];
		if(($part-1)==((3*$x)+($x-1))){ 
			$x=$x+1 ;
			echo "</tr> <tr>";
 		}
		$show--;
	}
	else{
		echo "<td>";
			echo "<img src= '".$row['blur_img']."'>" ;
		echo "</td>";
		$part= $row['part'];
		// echo $id;
		 if(($part-1)==((3*$x)+($x-1))){ 
			$x=$x+1;
			echo "</tr> <tr>";
		}
	}
}*/
?>
		</div>
	</div>
</div>

<?php
echo '$totaloriginal '.$totaloriginal;
echo '<br>$show'.$show;
?>