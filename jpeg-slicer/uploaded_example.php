<!-- 
This will help to demonstrate the JPEGSlicer working. 
thecoderin@aol.in 
--> 
<?php 
include("jpegslicr.php"); 
include("blurredslicr.php");
include('connection.php');
echo"FILE PROPERTIES<br><pre>"; 
print_r($_FILES); 
echo"</pre>"; 
$image = $_FILES['image']['tmp_name']; 
$image1= $_FILES['image']['name'];
$email=$_POST['email'];
$sql= "INSERT into user_info (email,img_name) VALUES('.$email.','.$image1.')";

           if (!mysql_query($sql))
                       { 
                //die('Error: ' . mysql_error());

		    echo "there is some error in image"	;
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

$ImgObject = new JPEGSlicer('slice', $image,'nill',0);
$ImgObject1 = new JPEGSlicer1('slice', $image,'nill',0); //JPEG SLICE WITHOUT RESIZE 
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
<table align="center" cellpadding="0" cellspacing="0" border="0"> 
<tr> 
<?php for($i=0;$i<16;$i++) 
    { 
$x=1;
    ?> 
<td><img src="<?php echo $ImgObject1->filename[$i]; ?>" /></td> 
<?php  if(($i)==((3*$x)+($x-1)))
       { 
           $x=$x+1;
   ?> 
   
</tr><tr> 
<?php } 
      $sql1= "INSERT into img_table (org_img,blur_img) VALUES('".$ImgObject->filename[$i]."','".$ImgObject1->filename[$i]."')";

           if (!mysql_query($sql1))
                       { 
                //die('Error: ' . mysql_error());

		echo "there is some error in image"	;
		              }
    } 
?> 
</tr> 
</table> 
<br /> 
</body> 
</html> 