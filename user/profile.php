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

       
      

    </div>
 <?php
 include("footer.php");
 ?>
</body>

</html>