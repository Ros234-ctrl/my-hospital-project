<?php

include('userinfo.php');
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['Username']=='' || $_REQUEST['password'])
{

Echo "please fill the empty field.";
}
}


$Username = $_POST['Username'];
$password = $_POST['password'];


$Username = stripcslashes($Username);
$password = stripcslashes($password);
$Username = mysqli_real_escape_string($con, $Username);

$password = mysqli_real_escape_string($con, $password);

$sql = "select * from userinfo where Username='$Username' and password='$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {

  echo '<script type="text/javascript">';
     header("Location: http://127.0.0.1/Login/Homepage.html", TRUE, 301);  
     echo '</script>';
      exit();
   
   

} else {
echo '<script type="text/javascript">';
echo '  alert(" Incorrect Login Details ") ';
echo '</script>';
}


?>