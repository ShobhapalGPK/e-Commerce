<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:register.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    .card1 img{
        border-radius: 50%;
        border: none;
        
       
    }
    .card-title h6{
        margin-bottom: 40px;
    }

    .card{
        display: flex;
        margin-bottom: 30px;
    }

    
</style>
<body>
    <div class="container-fluid">

<!-----------------------------------navbar ------------------------->
        <div class="row">
            <div class="col-sm-12">
                <?php
                    include("nav1.php")
                ?>
                </div>
        </div>
<!-- show all category  -->

        <a href="viewallcategory.php" ><div class="row d-flex justify-content-end"> <button class=" col-sm-2 btn btn-primary float end">view more....</button></div></a>
<!---------------------------- cateogry ------------------------------>
        <div class="row">
        <?php
            include("../admin/db.php");
            $sell = "SELECT * FROM `addcategory` limit 12";
            $query = mysqli_query($conn,$sell);
            while($row = mysqli_fetch_assoc($query)){
                ?>
            <div class="col-sm-1">
                <div class="card1">
                    <img src="../admin/category_icon/<?php echo $row['category_icon']?>" height="100px" width="100px">
                </div>
                <div class="card-title">
                   <h6><?php echo $row['category_name']?></h6> </div>
            </div>
            <?php
            }
            ?>

        </div>
        
       
<!-------------------------------- product secction ------------------------------>
        <div class="row">
            <?php
            include("../admin/db.php");
            $sel = "SELECT * FROM `addproduct`";
            $query = mysqli_query($conn,$sel);
            while($row = mysqli_fetch_assoc($query))
            {
            
            ?>
           <div class="col-sm-3">
           <a href="productview.php?idd=<?php echo $row['id']?>"><div class="card" style="width: 18rem;">
                    <img src="../admin/product/<?php echo $row['p_image_1']?>" height="300px" width="400px"
            class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']?></h5>
                        <p class="card-text"><span>Rs.<?php echo $row['product_price']?></span> <span>Rs.<?php echo $row['product_offer_price']?></span></p>
                        <a href="addcart.php?idd=<?php echo $row['id']?>" class="btn btn-primary">Add to Card</a>
                        <a href="whishlistcode.php?idd=<?php echo $row['id']?>" class="btn btn-primary">Whislist</a>
                    </div>
                </div></a>
            </div>
            <?php
            }
            ?>
        </div>


    </div>
 <?php
 include("footer.php");
 ?>
</body>

</html>