<?php
$id = $_REQUEST['idd'];

include("../admin/db.php");

$del = "DELETE FROM `whishlist` WHERE  id = '$id'";
if(mysqli_query($conn , $del)){
    header("location:whislist.php");
}
else{
    echo"whislist product removed failed";
}

?>