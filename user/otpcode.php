<?php
if(isset($_POST['btn'])){
    include("../admin/db.php");
    session_start();
    $email = $_SESSION['forget_email'];

    $otp = mysqli_real_escape_string($conn,$_POST['otp']);

    $sel = "SELECT * FROM `user_register` WHERE email = '$email'";
    $query = mysqli_query($conn,$sel);
    $row = mysqli_fetch_array($query);

    if($row['otp'] == $otp){
        header("location:cpass.php");

    }
    else{
        echo"otp not match";
    }

}
else{
    header("location:otp.php");
}



?>