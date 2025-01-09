<?php

require(userinfo.php);

 if(isset($_POST['sign-in'])){

$user_exist_query= "SELECT * FROM 'userinfo' WHERE 'Username'='$_POST[Username]' AND 'password'='$_POST[password]'";

$result = mysqli_query($conn,$user_exist_query);
if($result)
{
     if(mysqli_num_rows($result)>0)
     {
          $result_fetch=mysqli_fetch_assoc($result);
          if($result_fetch['Username']==$_POST['Username'])
          {
               
          }
          else{
              $query= "INSERT INTO `userinfo`(`Username`, `password`) VALUES ('$_POST[Username]','$_POST[password]')";
              if(mysqli_query($conn,$query))
              {
               
               echo" <script>alert('Registratyion successfully');
               window.location.href='Login.php';</script>";
          
              }
          
          else{
               echo"<script>alert('$result_fetch[Username]'Username already taken');
               window.location.href='Login.php';</script>";
          
          }
     }}}}

  
?>