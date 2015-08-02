<?php
$password = $_POST['password'];
$confirm = $_POST['cnfpassword'];

if($password == $confirm)
{
$con=mysqli_connect("localhost","root","root","photoupload");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$user = mysqli_real_escape_string($con, $_POST['username']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$cnf = mysqli_real_escape_string($con, $_POST['cnfpassword']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);



$path=$user;
if (!file_exists($path)) 
{
    mkdir($path);
}

$sql="INSERT INTO user (username,password,email,contact)
VALUES ('$user','$pass','$email','$contact')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "User added successfully";
echo "</br></br> Back To Home Page</br> <a href=\"index.php\" > <strong> Home</strong> </a>";

mysqli_close($con);
}
else
{
	echo "</br></br> Passwords do not Match  </br> <a href=\"signup.html\" > <strong> Back To SignUp </strong> </a>";
}
?>

<!--$input = $user;
// Do some stuff with it here
$file_path .= $input . "/";

if (!file_exists($file_path)) {
    mkdir($file_path);
} -->
<!--
	CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-->