<?php
session_start();
$email = $_SESSION['email'];
include("../admin/db.php");

if(isset($_SESSION['email'])){
    $id = $_REQUEST['idd'];

    $ins = "INSERT INTO `whishlist`(`product_id`, `user_email`) VALUES ('$id','$email')";
    if(mysqli_query($conn , $ins)){
        echo"whishlist add";
    }
    else{
        echo"whishlist not add";
    }

}
else{
    echo"login first";
}

?>