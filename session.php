<?php
   include('config.php');
  session_start();
  $hofits =  $_SESSION['login_user'];
 $output='';

  $sql = "SELECT *  FROM hofdata WHERE itsno = '$hofits'";
   
   $result = mysqli_query($db,$sql);
    
    $count = mysqli_num_rows($result);
 
  if($count >= 1) {
  $hofdata= mysqli_fetch_array($result,MYSQLI_ASSOC);

   
  }else {
     //  <!--$error = "Your Login Name or Password is invalid";-->
         echo "ERROR!"; 
   }

 $sql2 = "SELECT *  FROM login WHERE itsno = '$hofits'";
   
   $result2 = mysqli_query($db,$sql2);
    
    $count2 = mysqli_num_rows($result2);
 
  if($count2 >= 1) {
  $logindata= mysqli_fetch_array($result2,MYSQLI_ASSOC);

   
  }else {
     //  <!--$error = "Your Login Name or Password is invalid";-->
         echo "ERROR!"; 
   }

  
?>