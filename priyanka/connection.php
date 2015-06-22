<?php
$con=mysql_connect("localhost","detailsa_solomo","solomo!@#$%^");
$rs=mysql_select_db("detailsa_solomo");
if(!$rs)
{
echo "error";
die();
}

?>