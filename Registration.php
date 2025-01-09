<?php    
     include('appointdetails.php');

$name=$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];

 $name=stripcslashes($name);
$email=stripcslashes($email);
$phone = stripcslashes($phone);

 $date=stripcslashes($date);
$time=stripcslashes($time);

$name=mysqli_real_escape_string($con,$name);

$email =mysqli_real_escape_string($con,$email);
$phone=mysqli_real_escape_string($con,$phone);

$date=mysqli_real_escape_string($con,$date);
$time=mysqli_real_escape_string($con,$time);

$sql= "INSERT INTO appointdetails (name, email,phone,date,time) VALUES ('$name','$email','$phone','$date','$time')";
if (mysqli_query($con, $sql))
{
    echo '<script type="text/javascript">';
    echo '  alert("Registerd Successfully") ';  
    echo '</script>';

}

else
{
    echo '<script type="text/javascript">';
    echo '  alert(" Entered Details are Invalid") ';  
    echo '</script>';

}
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['phone']==''|| $_REQUEST['date']==''|| $_REQUEST['time'])
{

Echo "please fill the empty field.";
}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $date = $_POST['date'];
     $time = $_POST['time'];

     
     echo "Appointment Details:<br>";
     echo "Name: $name<br>";
     echo "Email: $email<br>";
     echo "Phone: $phone<br>";
     echo "Date: $date<br>";
     echo "Time: $time<br>";
 }


?>