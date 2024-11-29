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


        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="changepasscode.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">old password</label>
                        <input type="password" name="opass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">New_Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="npass">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">conform_Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="cpass">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>