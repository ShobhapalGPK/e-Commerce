<?php

session_start();
if(isset($_SESSION['email']))
{
            $email = $_SESSION['email'];
            $id = $_REQUEST['idd'];
            include("../admin/db.php");


            $date = date("d/m/y");
            date_default_timezone_set("asia/kolkata");
            $time = date("h:i:sa");

            $ins = "INSERT INTO `addcart`(`p_id`, `email`, `date`, `time`) VALUES ('$id','$email','$date','$time')";
            if(mysqli_query($conn,$ins)){
                echo"product added in cart";
            }
            else{
                echo"product not add to cart";
            }
}
else{
      echo"login first";
}



?>