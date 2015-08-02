<?php
session_start();
$username= $_POST['username'];
$password= $_POST['password'];

if($username&&$password)
{
   $connect = mysql_connect("localhost","root","root") or die("Could not connect database");
           mysql_select_db("photoupload") or die("No DataBase");
           
  $querycheck=  mysql_query("SELECT * FROM user WHERE username='$username'");
  $check = mysql_num_rows($querycheck);
  if($check==0)
  {
  	die("User doesnot exists. <a href = 'index.php' rel = 'register'>Try again</a>");
  }

  elseif($check!=0)
  {
         $querycheck= mysql_query("Select * from user where username ='$username'");    
	     $row1 = mysql_fetch_assoc($querycheck);
       		 if($username==$username&&$password==$password)
		   {
			      $_SESSION['username']= $username;
                           header('location: second.php');
                         }
  } 
                 else 
		  {
	     		echo "password doesnot match!";
	          }  
	
}       	   
  else
  {
    die("Dont leave the feilds empty!.<a href = 'index.php'>Try again</a>");	
  }
  mysql_close($connect);
?>
<html>
<body>
</body>
</html>
