<?php

include("db.php");
session_start();

$email = $_SESSION['admin'];

$photo = $_FILES['file']['name'];
$tep_photo = $_FILES['file']['tmp_name'];

$name = $_POST['name'];
 $path = "images/";

$up ="UPDATE `admin` SET `photo`='$photo',`name`='$name' WHERE email = '$email'";
if(mysqli_query($conn , $up))
{
    move_uploaded_file($tep_photo , $path.$photo);
    header("location:profile.php");
}
else{
    echo"profile not update";
}

?>