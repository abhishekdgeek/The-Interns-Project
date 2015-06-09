<?php 
session_start();
?>

<?php  
include('connection.php'); 

     $pass = $_POST['password'];
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
     $email= $_POST['email'];
	 $_SESSION['email']=$_POST['email'];
	 $_SESSION['fname']=$_POST['fname'];
	if(!(empty($pass)) && !(empty($fname)) && !(empty($lname)) && !(empty($email)))   //check if any of the field is not empty
	{
	$password1= md5($pass);
    $sql=mysql_query("SELECT  user_email FROM user  WHERE user_email='".$_POST['email']."'");    // check no duplicate email
       if(mysql_num_rows($sql)>=1)
         {
          echo "invalid email";            //alert
         }
        else
        {
          $sql1 = "INSERT into user (user_fname,user_lname,user_email,user_password) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$password1."')";                                  //if everythng ok insert in database
	             if (!mysql_query($sql1))
		            { 
		               die('Error: ' . mysql_error());
		            }
	             else
		              {
		                   include('contact.php');          //email sent;           
		              }
          $sql5 = "SELECT * from user where user_email= '".$_POST['email']."' ";           //session create for userid
          $result = mysql_query($sql5);
          while($row1= mysql_fetch_array($result))                                                 
                {
	             $_SESSION['user_id'] = $row1['user_id'];
	            }
        }

    }
 
    else
        { 
	    echo "fields are empty";                     //fields empty msg
	    }
?>