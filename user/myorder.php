<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:index.php");
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
        <!-- show whislist -->
       

        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">p Image</th>
                            <th scope="col">p name</th>
                            <th scope="col">p price</th>
                            
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
            include("../admin/db.php");
            // session_start();
            $email = $_SESSION['email'];
            $sel = "SELECT * FROM `orders` WHERE user_email = '$email'";
            $query = mysqli_query($conn,$sel);
            while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {

                $pid = $row['1'];
                $p_id = explode(',',$pid);

                foreach($p_id as $x){
                $ps = "SELECT * FROM `addproduct` WHERE id = '$x'";
                $quu = mysqli_query($conn, $ps);
                while ($roww = mysqli_fetch_array($quu, MYSQLI_BOTH)) {


            ?>
                        <tr>

                            <td><?php echo $roww['id']?></td>
                            <td><img src="../admin/product/<?php echo $roww['p_image_1'] ?>" class="card-img-top">
                            <div class="card-body"></td>
                            <td><?php echo $roww['product_name'] ?></td>
                            <td><?php echo $roww['product_price'] ?></td>
                            <td><a href="" class="btn btn-primary">order cancel</a></td>
                        </tr>
          <?php
                }
            }
        }
          
          ?>

                    </tbody>
                </table>

        </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>