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

                        <form action="add_product_code.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">choose category </label>
                                <select class="form-control"  name="chose">
                                <?php
                                include("db.php");
                                $sel = "SELECT * FROM `addcategory`";
                                $query = mysqli_query($conn , $sel);
                                while($row = mysqli_fetch_assoc($query)){
                                ?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['category_name']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">product name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="pname">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">product price </label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="pprice">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">product offer price</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="poprice">
                            </div>
                          

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">product short description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="psdescription">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">product long description</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="pldescription">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">product image1</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" name="p1_image">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">product image2</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" name="p2_image">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">product image3</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" name="p3_image">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">product image4</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" name="p4_image">
                            </div>
                            <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>