
<?php 
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE);
$t=time();
include("originalslicer.php"); 
include("blurredslicer.php");
include('connection.php');
$a= $_POST['url'];
$url= "http://graph.facebook.com/".$a;
$test = json_decode(file_get_contents($url));
echo "<pre>";
$test1 = $test-> shares;
$show=round($test1/1);
 echo $show;
//echo"FILE PROPERTIES<br><pre>"; 
//print_r($_FILES); 
//echo"</pre>"; 
$image = $_FILES['image']['tmp_name']; 
$image1= $_FILES['image']['name'];
$email=$_POST['email'];
$dir_name=explode('@',$email);
//print_r ($dir_name);
//echo "$dir_name[0]";
$dir= $dir_name[0];
// $dir1= date("Y-m-d",$t);

 
 
if (substr_count($image1, "'") > 0)
{
	echo "there is some error in image!!!please upload correct image";
	die();
}
else
{
	
$sql= "INSERT into user_info (email,img_name) VALUES('.$email.','.$image1.')";

           if (!mysql_query($sql))
                       { 
                //die('Error: ' . mysql_error());

		    echo "there is some error in image"	;
		}
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Example Page for JPEG SLICER </title> 
</head> 

<body> 

<?php 
$ImgObject = new JPEGSlicer($dir, $image,'nill',$t,0); //JPEG SLICE WITHOUT RESIZE 
$ImgObject1 = new JPEGSlicer1($dir, $image,'nill',$t,0); //JPEG SLICE WITHOUT RESIZE 
//$ImgObject = new JPEGSlicer('slice', $image,'width',100); //JPEG SLICE WITH RESIZE ACCORDING TO WIDTH SIZE = 100px 
//$ImgObject = new JPEGSlicer('slice', $image,'height',100); //JPEG SLICE WITH RESIZE ACCORDING TO HEIGHT SIZE = 100px 
?> 
<html> 
<head> 
<title>Example Page for JPEG SLICER-</title> 
</head> 
<body> 
<!--<pre> 
<?php// print_r($ImgObject); ?> 
</pre>--> 
<br /> 
<table align="center" cellpadding="0" cellspacing="0" border="1"> 
<tr> 
<?php 
$x=1;
for($i=0;$i<16;$i++) 
    { 
 ?> 
    
<td><img src="<?php echo $ImgObject->filename[$i]; ?>" /></td>
 <?php if(($i)==((3*$x)+($x-1)))
       { 
           $x=$x+1;
   ?> 
   
</tr><tr> 
<?php } 
$p=$i+1;
$sql1= "INSERT into img_table (part,org_img,blur_img,timestamp) VALUES('".$p."','".$ImgObject->filename[$i]."','".$ImgObject1->filename[$i]."','".$t."')";

           if (!mysql_query($sql1))
                       { 
                //die('Error: ' . mysql_error());

        echo"there is some error in image"  ;
        }
 
    } 
?> 
</tr> 
</table> 
<br /> 
<?php

$sql2 = "SELECT * from img_table where timestamp='".$t."' ";
$result1 = mysql_query($sql2); ?>
<table align="center" cellpadding="0" cellspacing="0" border="1"> 
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
 echo "<!--Test $id -->";
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
 <?php
   $fh = fopen('export.txt', 'w');
    /* insert field values into export.txt */

    $result2 = mysql_query("SELECT * FROM img_table where timestamp= '".$t."'");   
    while ($row = mysql_fetch_array($result2)) {          
        $num = mysql_num_fields($result2) ;    
        $last = $num - 1;
        for($i = 0; $i < $num; $i++) {            
            fwrite($fh, $row[$i]);                       
            if ($i != $last) {
                fwrite($fh, " ");
            }
        }                                                                 
        fwrite($fh, "\n");
    }
    fclose($fh); 
	?>


</body> 
</html> 