<?php
  define("dbhost",'localhost');
  define("dbuser",'root');
  define("dbpass",'password');

  $connection = mysqli_connect(dbhost, dbuser, dbpass);
   if(! $connection ) {
       echo '<script>alert("Could not connect:" . mysqli_error())</script>';
   }
  // echo '<script>alert("Database Connected successfully")</script>';
   mysqli_select_db($connection,"Testing");
?>
