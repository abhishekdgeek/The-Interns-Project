<?php

include('connection.php');
for($i=1; $i<=100; $i++)
{
$actual_image= "./actual images/test-app-400x400_$i.png";
$blur_image= "./blur images/test-app-400x400-blur_$i.png";
//echo $actual_image;


$sql1= "INSERT into slice_images (actual_image,blur_image) VALUES('".$actual_image."','".$blur_image."')";

            if (!mysql_query($sql1))
                        { 
                 die('Error: ' . mysql_error());
                        }
                else
                { 
                  echo "photos updated";
                }
}				
?>				