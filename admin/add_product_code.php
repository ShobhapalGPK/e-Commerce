<?php

if (isset($_POST['btn'])) {
    include("db.php");

    $chose = mysqli_real_escape_string($conn, $_POST['chose']);
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $pprice = mysqli_real_escape_string($conn, $_POST['pprice']);
    $poprice = mysqli_real_escape_string($conn, $_POST['poprice']);
    $psdescription = mysqli_real_escape_string($conn, $_POST['psdescription']);
    $pldescription = mysqli_real_escape_string($conn, $_POST['pldescription']);

    $img1 = $_FILES['p1_image']['name'];
    $tmp_img1 = $_FILES['p1_image']['tmp_name'];


    $img2 = $_FILES['p2_image']['name'];
    $tmp_img2 = $_FILES['p2_image']['tmp_name'];


    $img3 = $_FILES['p3_image']['name'];
    $tmp_img3 = $_FILES['p3_image']['tmp_name'];


    $img4 = $_FILES['p4_image']['name'];
    $tmp_img4 = $_FILES['p4_image']['tmp_name'];

    $path = "product/";

    $ins = "INSERT INTO `addproduct`(`category_id`, `product_name`, `product_price`, `product_offer_price`, `product_short_discription`, `product_long_discripton`, `p_image_1`, `p_image_2`, `p_image_3`, `p_image_4`, `status`) VALUES ('$chose','$pname','$pprice','$poprice','$psdescription','$pldescription','$img1','$img2','$img3','$img4','true')";

    if (mysqli_query($conn, $ins)) {
        move_uploaded_file($tmp_img1 , $path.$img1);
        move_uploaded_file($tmp_img2 , $path.$img2);
        move_uploaded_file($tmp_img3 , $path.$img3);
        move_uploaded_file($tmp_img4 , $path.$img4);
        echo "product add";
    } else {
        echo "product not add";
    }
} else {
    header("location:add_product.php");
}
