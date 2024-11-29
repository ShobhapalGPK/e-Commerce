<?php
if(isset($_POST['btn'])){
    include("../admin/db.php");
    $email = mysqli_real_escape_string($conn,$_POST['email']);

    $rand = rand(1000,9999);
    $sel = "SELECT * FROM `user_register` where email = '$email'";
    $query = mysqli_query($conn,$sel);
    $row = mysqli_fetch_array($query);


    if($k['1']==$a){
        $up = "UPDATE `user_register` SET `otp`='$rand' WHERE email = '$email'";
        if(mysqli_query($conn,$up)){
             session_start();
             $_SESSION['forget_email'] = $email;


             header("location:otp.php");
        }
        else{
            echo"syntax error";
        }

    }
    else{
        echo"email not match";
    }


}
else{
    header("location:forgetpassword.php");
}



?>