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
                                    <th scope="col">Product_name</th>
                                    <th scope="col">Product_price</th>
                                    <th scope="col">POprice</th>
                                    <th scope="col">PSprice</th>
                                    <th scope="col">PLprice</th>
                                    <th scope="col">img1</th>
                                    <th scope="col">img2</th>
                                    <th scope="col">img3</th>
                                    <th scope="col">img4</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("db.php");
                                $sel = "SELECT * FROM `addproduct`";
                                $query = mysqli_query($conn,$sel);
                                while($row = mysqli_fetch_array($query , MYSQLI_BOTH)){
                                    ?>
                                <tr>
                                    <td><?php echo $row['0']?></td>
                                    <td><?php echo $row['2']?></td>
                                    <td><?php echo $row['3']?></td>
                                    <td><?php echo $row['4']?></td>
                                    <td><?php echo $row['5']?></td>
                                    <td><?php echo $row['6']?></td>
                                    <td> <img src="product/<?php echo $row['7']?>" height="50px" width="50px"></td>
                                    <td><img src="product/<?php echo $row['8']?>" height="50px" width="50px"></td>
                                    <td><img src="product/<?php echo $row['9']?>" height="50px" width="50px"></td>
                                    <td><img src="product/<?php echo $row['10']?>" height="50px" width="50px"></td>
                                    <td><?php echo $row['11']?></td>
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