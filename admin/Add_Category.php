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

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">


                    <form action="addcategorycode.php" method="post" enctype="multipart/form-data">

                          



                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">category item</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="file">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">category name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cate_name">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>