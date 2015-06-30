<?php
include('connection.php');
$url= "http://graph.facebook.com/"."http://www.videoconmobiles.com/z50q-lite";
$test = json_decode(file_get_contents($url));
$test1 = $test-> shares;
$show=round($test1/1);

$sql2 = "SELECT * from imgs";
$result1 = mysql_query($sql2); ?>
<div class="table-responsive">
<table align="center" class="tab" cellpadding="0" cellspacing="0" border="1"> 
<tr> 
<?php 
$x=1;
while($row1= mysql_fetch_array($result1))                                                 
 {	
  $j=1; 
 if ($j<=$show)
 {
	 echo "<td>";
	 
 echo "<img src= '".$row1['org_img']."'>" ;
 echo "</td>";
 $part= $row1['part'];
 if(($part-1)==((3*$x)+($x-1)))
       { 
           $x=$x+1 ;
		   
echo "</tr> <tr>"; 
 }
 $show--;
 }
 else
 {   echo "<td>";
	 echo "<img src= '".$row1['blur_img']."'>" ;
	 echo "</td>";
 $part= $row1['part'];
// echo $id;
 if(($part-1)==((3*$x)+($x-1)))
       { 
           $x=$x+1;
echo "</tr> <tr>";
       }
	
}
 }?>
</tr>
 </table>