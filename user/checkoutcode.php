<?php


if (isset($_POST['btn'])) {
    session_start();
    $email = $_SESSION['email'];
    include("../admin/db.php");

    $date = date("d/m/y");
    date_default_timezone_set("asia/kolkata");
    $time = date("h:i:sa");


    $sel = "SELECT * FROM `addcart` WHERE email = '$email'";
    $query = mysqli_query($conn, $sel);
    $p_id = [];
    while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
        // echo $row[1];
        $p_id[] = $row['1'];
    }

    $pid = implode(',',$p_id); 

    $name = $_POST['name'];
    $mobile = $_POST['number'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    

    $ins = "INSERT INTO `orders`(`product_id`, `user_email`, `name`, `mobile`, `city`, `address`, `date`, `time`) VALUES ('$pid','$email','$name','$mobile','$city','$address','$date','$time')";

     if(mysqli_query($conn,$ins)){
        header("location:paymentproceed.php");

     }
     else{
        echo"data not insert";
     }



} else {
    header("location:checkout.php");
}
