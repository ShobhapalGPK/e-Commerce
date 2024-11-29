

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">

        <!-----------------------------------navbar ------------------------->
        <div class="row">
            <div class="col-sm-12">
                <?php
                include("nav.php")
                ?>
            </div>
        </div>
        <!-- show whislist -->
        <div class="row">

        <?php
        include("../admin/db.php");

         $id = $_REQUEST['idd'];
        $sel = "SELECT * FROM `addcategory` WHERE id = '$id'";
        $query = mysqli_query($conn, $sel);
        while($row = mysqli_fetch_array($query , MYSQLI_BOTH)){

                $p_id = $row['0'];
                $ps = "SELECT * FROM `addproduct` WHERE category_id = '$p_id'";
                $quu = mysqli_query($conn ,$ps);
                while($roww = mysqli_fetch_array($quu , MYSQLI_BOTH)){

               
        ?>
            <div class="col-sm-4">
                <a href="productview.php"><div class="card" style="width: 18rem;">
                    <img src="../admin/product/<?php echo $roww['p_image_1']?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $roww['category_id']?></h5>
                        <p class="card-text"><?php echo $roww['product_short_discription']?></p>
                        <a href="#" class="btn btn-primary">Add to Card</a>
                        
                    </div>
                </div></a>
            </div>
            <?php
             }
        
            }
            ?>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>