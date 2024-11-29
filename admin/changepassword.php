<?php
session_start();
if(!isset($_SESSION['admin'])){
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
            <?php include("menu.php")?>
            </div>

            <div class="col-sm-10">
                <div class="row bg-primary" style="height: 42px;">

                </div>

                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                    <form action="changepasswordcode.php" method="post">
               <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> old password:</label>
             <input type="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="old_password">
            <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
            </div>
             <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">new password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name = "new_password">
          </div>
          <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">conform password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name = "conform_password">
          </div>
          <button type="submit" class="btn btn-primary" name="btn">Submit</button>
        </form>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>