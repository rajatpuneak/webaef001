<?php
include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myitsno = mysqli_real_escape_string($db,$_POST['itsno']);
      $mysabilno = mysqli_real_escape_string($db,$_POST['sabilno']); 
      
      $sql = "SELECT id FROM admin WHERE itsno = '$myitsno' and sabilno = '$mysabilno'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         <!--session_register("myusername");
         $_SESSION['login_user'] = $myusername;-->
         
         <!--header("location: welcome.php");-->
         echo "Hello world!"; 
      }else {
         <!--$error = "Your Login Name or Password is invalid";-->
         echo "ERROR!"; 
      }
   }
?>