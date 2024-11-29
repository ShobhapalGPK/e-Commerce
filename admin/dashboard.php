<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location:index.php");
}       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("link.php");
    ?>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2  p-0">
            <?php include("menu.php")?>
            </div>

            <div class="col-sm-10">
                <div class="row bg-primary" style="height: 42px;">

                </div>
            </div>
        </div>
    </div>
</body>
</html>