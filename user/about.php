<?php
session_start();
if (!isset($_SESSION['email'])) {
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
    #about img{
        height: 300px;
        width: 300px;
        
        margin-top: 40px;
        margin-left: 20%;
        border-radius: 50%;
        display: flex;
        margin-bottom: 20px;

    }
    h2{
        padding-top: 30px;
        padding-right: 30px;
    }
    h5{
         display: flex;
        
    }
    .content{
        height: 300px;
        width: 800px;
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

        <!-- about section -->

        <div class="row" id='about'>
            <div class="col-sm-4">
                <img src="sobhaImage.jpg">
            </div>
            <div class="col-sm-8">
                <h2><b>Shobha Pal, chief excutive officer-</b></h2>
                <div class="content"><h5><b><q>Welcome to [e-commerce website] – where quality meets convenience! We’re a passionate team dedicated to bringing you the best products from trusted brands and artisans worldwide. With a curated selection that spans fashion, home decor, tech gadgets, and more, we make it easy to find something special for every need, occasion, and lifestyle.Our journey began with a simple belief: online shopping should be seamless, inspiring, and customer-focused. That's why every product we offer is carefully chosen for its quality, style, and value. From the moment you browse our collection to the arrival of your order, we prioritize a delightful, trustworthy experience.</q></b></h5></div>
            </div>
        </div>

        <div class="row" id="about-content">
            <div><h1>About</h1></div>
            <div>
                <p>At [e-commerce website], we believe that shopping should be more than just a transaction – it should be a memorable experience that combines quality, inspiration, and convenience. Our mission is simple: to offer you a thoughtfully curated collection of products that bring value and joy into your life.Since our founding, we've been passionate about creating a marketplace that caters to your diverse needs and interests, making it easy for you to find everything from the latest fashion trends and home decor to innovative tech gadgets and unique gifts. We source products from trusted brands and talented artisans worldwide, ensuring you get only the best.

</p>
            </div>
            <hr>
            <div>
                <h4>Our Community</h4>
            </div>
            <div>
                <p>We love connecting with our customers! Through our social media channels and blog, we share product tips, style inspiration, and exclusive offers. Join our community to stay updated on the latest arrivals, and let us be part of your everyday life.Thank you for choosing [Your Brand Name]. We’re thrilled to be part of your journey and look forward to helping you find products that make life a little brighter.</p>
            </div>


        </div>



    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html