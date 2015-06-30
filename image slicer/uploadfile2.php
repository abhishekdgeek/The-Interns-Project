<!-- 
This will help to demonstrate the JPEGSlicer working. 
thecoderin@aol.in 
--> 
<?php 
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE);
include("jpegslicr.php"); 
//include('connect.php');
//echo"FILE PROPERTIES<br><pre>"; 
//print_r($_FILES); 
//echo"</pre>"; 
$image = $_FILES['image']['tmp_name']; 
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Example Page for JPEG SLICER </title> 
</head> 

<body> 

<?php 
//JPEGSlicer(directory, temp_image,selection,resize) 
    /* 
        -->directory = directory name to be uploaded (string) 
        
        -->temp_image = The temporary image file example: $_FILES['image']['tmp_name'] (string) 
        
        -->selection = The selection for resize (dtring) 
            ->if selection = 'height' 
                the image is resized , ie. new image height will be resize value of the function parameter 
            ->if selection = 'width' 
                the image is resized , ie. new image width will be resize value of the function parameter 
            ->if selection ='nill' 
                NO IMAGE RESIZE PLEASE ASSIGN resize = 0 
                
        -->resize = value assigned to the fixed selection (integer) 
            resize will be zero if the selection goes to zero 
            
            
            THE IMAGES WILL BE IN THE object->filename ARRAY 
    */ 

$ImgObject = new JPEGSlicer('slice', $image,'nill',0); //JPEG SLICE WITHOUT RESIZE 
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
for($i=0;$i<100;$i++) 
    { 
 ?> 
    
<td><img src="<?php echo $ImgObject->filename[$i]; ?>" /></td> 
 <?php if(($i)==((9*$x)+($x-1)))
       { 
           $x=$x+1;
   ?> 
   
</tr><tr> 
<?php } 
$sql1= "INSERT into stats (slice) VALUES('".$ImgObject->filename[$i]."')";

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
</body> 
</html> 