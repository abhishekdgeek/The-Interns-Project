
<?php  
     include('connection.php'); 
      $password1= $_POST['password1'];
	  $email1 = $_POST['email1'];
	  if(!(empty($password1)) && !(empty($email1)))   //check if any of the field is not empty
	   {
		   $password2= md5($password1);
       $sql=mysql_query("SELECT  user_email,user_password FROM user  WHERE user_email='".$_POST['email1']."'and user_password='".$password2."' ");
       if(mysql_num_rows($sql)>=1)
        {
	     echo "congratulations!!";
        }
        else
        {
           echo "invalid username or password";
        }
	   }
	   else
	   {
		   echo "fields are empty";
	   }
?>