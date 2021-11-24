<?php
    include("includes/db.php");
    include("functions/functions.php");

    
?>



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
                    <a href="checkout.php"><?php i_ord(); ?> Items In Your Cart | total prise = <?php c_tot(); ?></a>

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

                                <li class="<?php if($active=='Home') echo"active"; ?>"> 
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="<?php if($active=='Item') echo"active"; ?>">
                                    <a href="shop.php">Items</a> 
                                </li>
                                <li class="<?php if($active=='my') echo"active"; ?>"> 
                                    <a href="customer/my_account.php">My Account</a>
                                </li>
                                <li class="<?php if($active=='Cart') echo"active"; ?>"> 
                                    <a href="cart.php">Shopping Cart</a>
                                </li>
                             
                                
                                <li class="<?php if($active=='contact') echo"active"; ?>">
                                    <a href="contact.php">Offers</a>
                                </li>
                                <li class="<?php if($active=='Feedback') echo"active"; ?>">
                                    <a href="feedback.php">Feedback</a>
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
                         <spam><?php i_ord(); ?> Item In Your Cart </spam>
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