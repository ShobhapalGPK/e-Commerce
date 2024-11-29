<?php
$id = $_REQUEST['idd'];
include("../admin/db.php");

$del = "DELETE FROM `addcart` WHERE  id = '$id'";
if(mysqli_query($conn , $del)){
    header("location:cartshow.php");
}
else{
    echo"cart product removed failed";
}

?>