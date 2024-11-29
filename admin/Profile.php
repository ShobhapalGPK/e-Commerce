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

                        <form action="profilecode.php" method="post" enctype="multipart/form-data">

                            <?php
                            include("db.php");
                            $email = $_SESSION['admin'];
                            $sel = "SELECT * FROM `admin` WHERE email = '$email'";
                            $query = mysqli_query($conn , $sel);
                            $row = mysqli_fetch_assoc($query);
                            ?>




                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Profile picture</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="file">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $row['name']?>">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']?>" readonly>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $row['password']?>" readonly>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-3">
                        <img src="images/<?php echo $row['photo']?>" height="200px" width="200px" border-radius="50%" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>