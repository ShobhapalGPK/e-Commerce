<?php
 session_start();
include("../admin/db.php");

$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);


$date = date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time = date("h:i:sa");

$datetime = $date."".$time;


$sel = "SELECT * FROM `user_register` WHERE email = '$email'";
$k = mysqli_query($conn , $sel);
$r = mysqli_fetch_assoc($k);

if($r == null){

$ins = "INSERT INTO `user_register`( `email`, `password`, `status`, `datetime`) VALUES ('$email','$password','true','$datetime')";
$query = mysqli_query($conn , $ins);
if($query){
   
    $_SESSION['email'] = $email;
    header("location:userdashboard.php");
}
else{
    header("location:register.php");
    echo"data not save";
}

}
else{
    if($r['password']==$password){
        $_SESSION['email'] = $email;
        header("location:userdashboard.php");
    }
    else{
        
        echo "password wrong";
    }
}
?>