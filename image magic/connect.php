<?php
$con=mysql_connect("localhost","root","");
$rs=mysql_select_db("images_table");
if(!$rs)
{
echo "error";
}

?>