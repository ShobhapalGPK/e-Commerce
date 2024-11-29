<?php
if(isset($_POST['btn'])){
       
    include("../admin/db.php");
    session_start();
    $email = $_SESSION['forget_email'];
    $npass = mysqli_real_escape_string($conn,$_POST['npass']);
    $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);


    if($npass == $cpass){
        $up = "UPDATE `user_register` SET `password` = '$npass' WHERE email = '$email'";
        if(mysqli_query($conn,$up)){
            header("location:register.php");
        }
        else{
            echo"password not changed";
        }

    }
    else{
        echo"npass and cpass not match";
    }

}
else{
    header("location:cpass.php");
}




?>