 <?php

include('fdconnect.php')

$fdlist=$_POST['fdlist'];
 $fdlist=stripcslashes($fdlist);
$fdlist=mysqli_real_escape_string($con,$fdlist);
$sql= "INSERT INTO fdback_details (fdlist) VALUES ('$fdlist')";
if (mysqli_query($con, $sql))
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
//  if (isset( $_POST['fdlist']) ){
//  $fdlist=$_POST['fdlist'];
 
// $conn = mysqli_connect("localhost", "root","", "feedback");

// $query ="insert into fdback_details(fd_list)values($fdlist)";
// $result = mysqli_query($conn, $query);

// if($result){
// echo '<script type="text/javascript">';
// echo '  alert("Thank u for your feedback") ';  
// echo '</script>';
// }
 
// else{
// echo '<script type="text/javascript">';
// echo ("Something terrible happened. Please try again. ");
// echo '</script>';

// }}
?> 