
<?php  
include('connection.php'); 
      $pass=$_POST['password'];
	  $password1= md5($pass);
       $sql=mysql_query("SELECT  user_email,user_password FROM user  WHERE user_email='".$_POST['email']."'and user_password='".$password1."' ");
if(mysql_num_rows($sql)>=1)
   {
	
header('Location:userinfo.php');
}
else
{
?>
   <script>
 window.alert('useremail or password doesnot exits');
    window.location.href='check.html';
</script>
  <?php

}
?>