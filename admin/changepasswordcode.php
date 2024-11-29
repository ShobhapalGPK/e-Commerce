<?php
include("db.php");

session_start();

$email = $_SESSION['admin'];

$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$conform_password = $_POST['conform_password'];

$sel = "SELECT * FROM `admin` WHERE email = '$email'";
$query = mysqli_query($conn,$sel);
$row  = mysqli_fetch_assoc($query);

if($row['password']== $old_password){
    if($new_password == $conform_password){
        $up = "UPDATE `admin` SET`password`='$new_password' WHERE email = '$email'";
        if(mysqli_query($conn,$up)){
            header("location:index.php");
        }
        else{
            echo"password not change";
        }

    }
    else{
        echo "new and conform password not match";
    }

}
else{
    echo"old password wrong";
}
?>