
                                 <?php
                                    include("../admin/db.php");
                                    // session_start();
                                    $email1 = $_SESSION['email'];
                                    $sel = "SELECT count(*) FROM `addcart` WHERE email = '$email1'";
                                    $query = mysqli_query($conn,$sel);
                                    $row = mysqli_fetch_array($query, MYSQLI_BOTH);
                                       $select ="SELECT count(*) FROM `whishlist` WHERE user_email = '$email1'"; 
                                       $quu = mysqli_query($conn,$select);
                                       $fetch = mysqli_fetch_array($quu,MYSQLI_BOTH);
                                    ?>



                                    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
                    <div class="container-fluid">

                        <a class="navbar-brand" href="#">SHOPPING</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">

                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                               

                                <li class="nav-item">
                                    
                                    <a class="nav-link " href="cartshow.php" tabindex="-1" aria-disabled="true">Cart (<?php echo $row[0]?>)</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="whislist.php" tabindex="-1" aria-disabled="true">Whislist (<?php echo $fetch[0]?>)</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="profile.php" tabindex="-1" aria-disabled="true">User Profile</a>
                                </li>

                               <li class="nav-item">
                                    <a class="nav-link " href="myorder.php" tabindex="-1" aria-disabled="true">my order</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="changepassword.php" tabindex="-1" aria-disabled="true">changepassword</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link " href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
                                </li>

                                
                                

                               

                                
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>