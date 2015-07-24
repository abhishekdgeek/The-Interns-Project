<?php
$con=mysql_connect("localhost","root","root");
$rs=mysql_select_db("test_image");
if(!$rs)
{
echo "error";
}

?>