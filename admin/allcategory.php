<?php
session_start();
if (!isset($_SESSION['admin'])) {
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
                <?php include("menu.php") ?>
            </div>

            <div class="col-sm-10">
                <div class="row bg-primary" style="height: 42px;">

                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">

                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">category_icon</th>
                                    <th scope="col">category_name</th>
                                    <th scope="col">status</th>
                                    <th scope="col">action</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("db.php");
                                $sel = "SELECT * FROM `addcategory`";
                                $query = mysqli_query($conn , $sel);
                                while($row = mysqli_fetch_assoc($query)){
                                
                                ?>
                                <tr>
                                    <th><?php echo $row['id']?></th>
                                    <td><img src="category_icon/<?php echo $row['category_icon']?>" height="50px" width="50px"></td>
                                    <td><?php echo $row['category_name']?></td>
                                    <td><?php echo $row['status']?></td>
                                    <td><button class="btn btn-primary">Edit</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                               <?php
                               }
                               ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3"></div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>