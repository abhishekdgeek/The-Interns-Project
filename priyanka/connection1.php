<?php
$con=mysql_connect("localhost","root","");
$rs=mysql_select_db("slicing_images");
if(!$rs)
{
echo "error";
die();
}

?>