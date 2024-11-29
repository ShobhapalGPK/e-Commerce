<?php
if(isset($_POST['btn'])){
    include("../admin/db.php");
    session_start();
    $email = $_SESSION['email'];

    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];

    $sel = "SELECT * FROM `user_register` WHERE email = '$email'";
    $query = mysqli_query($conn , $sel);
    $row = mysqli_fetch_assoc($query);

    if($row['password'] == $opass){
        if($npass == $cpass){
            $up = "UPDATE `user_register` SET `password`='$npass' WHERE email = '$email'";
            if(mysqli_query($conn , $up)){
                header("location:register.php");
                
            }
            else{
                echo"password not change";
            }

        }
        else{
            echo"new password is not same conform password";
        }
    }
    else{
        echo"old password not match";
    }

}
else{
    header("location:changepassword.php");
}


?>