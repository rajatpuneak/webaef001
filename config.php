<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'anjum9io_admin');
   define('DB_PASSWORD', '=nUufAG]QT5n');
   define('DB_DATABASE', 'anjum9io_user');
   define('DB_PORT','3306');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_PORT);
   if (mysqli_connect_errno())
       {  echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
?>