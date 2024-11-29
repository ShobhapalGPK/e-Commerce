<?php

if(isset($_POST['btn'])){

    include("db.php");
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $password = mysqli_real_escape_string($conn,$_POST['password']);

   $sel = "SELECT * FROM `admin` WHERE email = '$email' or password = '$password'";
   $query = mysqli_query($conn , $sel);
   $row = mysqli_fetch_assoc($query);
   if($row != null){
      if($row['email'] == $email)
      {
        if($row['password']==$password)
        {
            $up = "UPDATE `admin` SET `status`='true' WHERE email = '$email'";
            if(mysqli_query($conn ,$up)){
                 session_start();
                 $_SESSION['admin'] = $email;
                 header("location:dashboard.php");
            }
            else{
                echo"login failed";
            }
        }
        else
        {
            echo"password wrong";
        }
      }
      else
      {
        echo"email wrong";
      }
   }
   else{
         echo"data not match";
   }

}
else{
    header("location:index.php");
}
?>