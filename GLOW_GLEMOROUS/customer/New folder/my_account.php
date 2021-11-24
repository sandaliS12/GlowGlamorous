<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOW GLEMOROUS</title>
    <link rel="stylesheet" href="styles/boostrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div id="top"><!--begin top header menu -->
        <div class="container"> <!-- container begin -->
            <div class="col-md-6 offer">
                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="checkout.php">4 Items In Your Cart | total prise = $300</a>

            </div>

            <div class= "col-md-6">
                <ul class = "menu">
                    <li> 
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li> 
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li> 
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li> 
                        <a href="checkout.php">Login</a>
                    </li>
            </div>
        </div>
    </div> <!--finish top -->


    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default begin-->

        <div class="container"> <!-- container begin-->

            <div class="navbar-header"> <!-- navbar-header begin-->

                <a href="index.php" class="navbar-brand home">

                    <img src="images/logo_new.jpg" alt="glow_logo" width="150" height="52"  class="hidden-xs">
                    <img src="images/logo_new.jpg" alt="glow_logo" width="150" height="49"  class="visible-xs">

                </a>

                    <button class ="navbar-toggle" data-toggle="collapse" data-target="#navigation" >

                        <span class="sr-only"> Toggle Navigation </span>

                        <i class="fa fa-align-justyfy" > </i>

                    </button>

                    <button class ="navbar-toggle" data-toggle="collapse" data-target="#search" >

                        <span class="sr-only"> Toggle Search </span>

                        <i class="fa fa-search" > </i>

                    </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse begin-->

                <div class="padding-nav"> <!-- padding-nav begin-->

                        <ul class="nav navbar-nav left"> <!-- navbar-nav left begin-->

                                <li> 
                                    <a href="../index.php">Home</a>
                                </li>
                                <li >
                                    <a href="../shop.php">Items</a> 
                                </li>
                                <li class="active"> 
                                    <a href="my_account.php">My Account</a>
                                </li>
                                <li> 
                                    <a href="../cart.php">Shopping Cart</a>
                                </li>
                             
                                <li>
                                    <a href="../contact.php">contact</a>
                                </li>
                                <li> </li>


                        </ul> <!-- navbar-nav left finish-->

                </div> <!-- padding-nav finish-->

            

                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>
                    </button>


                    <a href="cart.php" class="btn navbar-btn btn-primary right">
                         <i class="fa fa-shopping-cart"></i>
                         <spam> 4 Item In Your Cart </spam>
                    </a>

                </div>

            

                <div class="collapse clearfix" id="search">

                    <form method="get" action="results.php" class="navbar-form">

                        <div class="input-group">

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">
                            <button type="submit" name="search" value="search" class="btn btn-primary">
                                <i class="fa fa-search"> </i>
                            </button>
                            </span>
                        </div>
                    </form>
                </div>

            </div><!--navbar-collapse collapse finish-->
        
        </div>
       

    </div> <!-- navbar navbar-default finish-->


    <div id="content"><!--content begin  -->
        <div class="container"><!--container begin  -->
            <div class="col-md-12"><!--col-md-12 begin  -->

                <ul class="breadcrumb"><!--breadcrumb begin  -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        My Account
                    </li>
                </ul><!--breadcrumb finish  -->
            </div><!--col-md-12 finish  -->

            <div class="col-md-3"><!--col-md-3 begin  -->

            <?php

                include("includes/sidebar.php");
            ?>
           
            </div><!--col-md-3 finish  -->

            

</div><!--container finish  -->
</div><!--content finish  -->



<?php

include("includes/footer.php");
?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>