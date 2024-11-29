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

          <!-- image full view code  -->
        <div class="row">
            <?php
            include("../admin/db.php");
            $id = $_REQUEST['idd'];
            $sel = "SELECT * FROM `addproduct` where id = '$id'";
            $query = mysqli_query($conn,$sel);
            $row = mysqli_fetch_array($query , MYSQLI_BOTH);
            ?>
            <div class="col-sm-6">
                <img src="../admin/product/<?php echo $row['7']?>" width="600PX" height="400PX" class="img-thumbnail">
                <div class="row">
                    <div class="col-sm-4">
                    <img src="../admin/product/<?php echo $row['8']?>" width="100%" class="img-thumbnail">
                    </div>
                    <div class="col-sm-4">
                    <img src="../admin/product/<?php echo $row['9']?>" width="100%" class="img-thumbnail">
                    </div>
                    <div class="col-sm-4">
                    <img src="../admin/product/<?php echo $row['10']?>" width="100%" class="img-thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <p><?php echo $row['2']?></p>
                <p><span>Rs.<?php echo $row['3'] ?></span> <span>Rs.<?php echo $row['4'] ?></span></p>
                <p><?php echo $row['5'] ?></p>
                <p><?php echo $row['6'] ?></p>
                <button class="btn btn-primary">add to cart</button>
                <button class="btn btn-secondary">wishlist</button>
            </div>
        </div>





       </div>
<?php
include("footer.php");
?>
</body>

</html>