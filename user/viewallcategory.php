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
</style>
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
       
<!---------------------------- cateogry ------------------------------>
        <div class="row">
        <?php
            include("../admin/db.php");
            $sell = "SELECT * FROM `addcategory`";
            $query = mysqli_query($conn,$sell);
            while($row = mysqli_fetch_assoc($query)){
                ?>
            <div class="col-sm-1">
                <div class="card">
                    <img src="../admin/category_icon/<?php echo $row['category_icon']?>" height="100px" width="100px">
                    
                </div>
                <div class="card-title"><?php echo $row['category_name']?></div>
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