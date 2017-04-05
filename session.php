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


  
  // if(!isset($_SESSION['hofits'])){
  //    header("location:index.php");
  // }
?>