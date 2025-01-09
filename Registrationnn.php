<?php

include('Patientinfo.php');

$Patient_Full_Name=$_POST['Patient_Full_Name'];
$Contact_Details =$_POST['Contact_Details'];
$Other_Contact_Details =$_POST['Other_Contact_Details'];
$Ward=$_POST['Ward'];
$Room_no=$_POST['Room_no'];

 $Patient_Full_Name=stripcslashes($Patient_Full_Name);
$Contact_Details=stripcslashes($Contact_Details);
$Other_Contact_Details = stripcslashes($Other_Contact_Details);

 $Ward=stripcslashes($Ward);
$Room_no=stripcslashes($Room_no);

$Patient_Full_Name=mysqli_real_escape_string($con,$Patient_Full_Name);

$Contact_Details =mysqli_real_escape_string($con,$Contact_Details);
$Other_Contact_Details=mysqli_real_escape_string($con,$Other_Contact_Details);

$Ward=mysqli_real_escape_string($con,$Ward);
$Room_no=mysqli_real_escape_string($con,$Room_no);

$sql= "INSERT INTO patientinfo (Patient_Full_Name, Contact_Details, Other_Contact_Details, Ward, Room_no) VALUES ('$Patient_Full_Name','$Contact_Details','$Other_Contact_Details','$Ward','$Room_no')";
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


?>;