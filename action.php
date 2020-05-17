<?php

  $con = mysqli_connect("localhost", "root", "", "dynamic_signup");

  $email = $_POST['email'];
  $password = $_POST['passowrd'];

  $sql = "select * from reg where email='$email' and password='$password'";

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

   if($row['email'] == $email && $row['password'] == $password) {
    echo "<h1>Login Successfully!</h1>";
   }
   else {
     echo "Email or Password error!";
   }

?>