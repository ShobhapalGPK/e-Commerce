<?php
session_start();
if(isset($_SESSION['email'])){
    session_destroy();
    header("location:register.php");
}
else{
    echo"logout failed";
}


?>