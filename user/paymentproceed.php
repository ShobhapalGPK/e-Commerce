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
    <title>Payment Getway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">

    <div class="row">
            <div class="col-sm-12">
                <?php
                include("nav1.php")
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

            <div class="card">
                <div class="card-header text-bg-primary">
                    order form
                </div>
                <div class="card-body">
                    <form id="order-form">
                        enter your name :
                        <input type="text" class="form-control" id="name".required./><br>
                        enter your email :
                        <input type="email" class="form-control" id="email".required./><br>
                        enter your phone:
                        <input type="number" class="form-control" id="mobile".required./><br>
                        enter amount to pay :
                        <input type="number" class="form-control" id="amount".required./><br>

                        <button class="btn btn-primary" id="btn1"> pay now </button>


                    </form>

                </div>

            </div>
            </div>
            <div class="col-sm-3"></div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        $(document).ready(function(){

            $("#order-form").submit(function(e){
                e.preventDefault();
                $("#btn1").prop("disable",true);


                var amt = $("#amount").val();


                $.ajax({
                    url:"https://phpcrud.himanshukashyap.com/rzp/createOrder.php?amount="+amt,
                    type:"get",
                    error:function(){
                        alert("error in ajax");
                    },
                    success:function(data){
                        var token = data.token;
                        var key = data.key;
                        // alert(token);

                        var options = {
                            "key": key,
                            "amount": amt*100,
                            "currency": "INR",
                            "name": "DigiCoders Technologies",
                            "description": "Test Transaction",
                            "image": "https://phpcrud.himanshukashyap.com/rzp/logo.jpg",
                            "order_id": token,
                            "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
                            "prefill": {
                                "name": $("#name").val(),
                                "email": $("#email").val(),
                                "contact": $("#mobile").val()
                            },
                            "notes": {
                                "address": "DigiCoders Technologies Private Limited, Lucknow, UP"
                            },
                            "theme": {
                                "color": "#3399cc"
                            }, 

                            // Handle Success Response
                            "handler": function(response) {
                                alert("Payment Success");
                                window.location.href="success.php";
                            }
                        };

                        // Initialize Razorpay SDK
                        var rzp1 = new Razorpay(options);

                        // Open Razorpay
                        rzp1.open();


                        // Handle Payment Fail Response
                        rzp1.on('payment.failed', function (response){
                            alert("Payment Failed");
                            window.location.href="failed.php";
                        });
                    }

                });
                // alert(amt);
            });
        });
    </script>
   
<?php
include("footer.php");

    ?>

</body>
</html>