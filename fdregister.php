 <?php

include('fdconnect.php');


$fdlist= $_POST["fdlist"];
 $fdlist=stripcslashes($fdlist);
$fdlist=mysqli_real_escape_string($conn,$fdlist);
$sql= "INSERT INTO fdback_details (fdlist) VALUES ('$fdlist')";

if (mysqli_query($conn, $sql))
{
    echo '<script type="text/javascript">';
    echo '  alert("Thank for your Response") ';  
    
    echo '</script>';
 

}

else
{
    echo '<script type="text/javascript">';
    echo '  alert(" OOPs something is wrong") ';  
    echo '</script>';

}

?> 