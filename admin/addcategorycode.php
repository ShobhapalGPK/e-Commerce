<?php
include("db.php");

$icon = $_FILES['file']['name'];
$tmp_icon = $_FILES['file']['tmp_name'];

$ctegory_name = $_POST['cate_name'];
$path = "category_icon/";

$ins = "INSERT INTO `addcategory`(`category_icon`, `category_name`, `status`) VALUES ('$icon','$ctegory_name','true')";
if(mysqli_query($conn, $ins)){
    move_uploaded_file($tmp_icon ,$path.$icon);
    echo"category added";

}
else{
    echo"category not add";
}
?>