<div id="footer"><!-- footer begin-->
    <div class="container"><!-- container begin-->
        <div class="row"><!-- row begin-->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin-->

                <h4>Pages</h4>

                    <ul> <!-- ul begin-->
                        <li><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="shop.php">Items</a></li>
                        <li><a href="customer/my_account.php">My Account</a></li>
                    </ul> <!-- ul finish-->

                    <hr>
                        <h4> User Section</h4>

                        <ul> <!-- ul begin-->
                        <li><a href="shop.php">Items</a></li>
                        <li><?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='login.php'>My Account</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?></li>
                        <li><a href="customer/my_account.php">My Account</a></li>
                    </ul> <!-- ul finish-->

                    <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 finish-->


            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin-->

                <h4>Top Product Categories</h4>

                    <ul> <!-- ul begin-->
                        <?php

                            $get_p_category="select * from item_categories";
                            $run_p_category = mysqli_query($con,$get_p_category);
                            while($row_p_category=mysqli_fetch_array( $run_p_category)){
                                $p_cat_id=$row_p_category['p_cat_id'];
                                $p_cat_title=$row_p_category['p_cat_title'];

                                echo "
                                    <li>
                                        <a href='shop.php?p_cat=$p_cat_id'>
                                             $p_cat_title
                                        </a>
                                    </li>
                                        
                                        ";
                                
                            }

                        ?>
                    </ul> <!-- ul finish-->

                    <hr class="hidden-md hidden-lg ">

            </div><!-- col-sm-6 col-md-3 finish-->


            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin-->

                <h4>Find Us</h4>

                    <p> <!-- p begin-->
                        <strong>Glow Glamorous Media</strong>
                        </br>glowg@gmail.com
                        </br>0712323432
                        </br>Sri Lanka


                    </p> <!-- p finish-->

                    <a href="contact.php">For Your Contact</a>

                    <hr class="hidden-md hidden-lg ">

            </div><!-- col-sm-6 col-md-3 finish-->


            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 begin-->

                <h4>Get the News</h4>

                    <p class="text-muted"> <!-- p begin-->
                        For your updates.
                    </p> <!-- p finish-->

                <form action="" method="post"><!-- form begin-->

                    <div class="input-group"><!-- input-group begin-->

                        <input type="text" class="form-control" name="email">

                        <span class="input-group-btn"><!-- input-group-btn begin-->

                            <input type="submit" value="subscribe" class="btn btn-default" >

                        </span><!-- input-group-btn finish-->

                    </div><!-- input-group finish-->

                </form><!-- form finish-->

                <hr>
                        <h4> Keep In Touch</h4>

                        <p class="social"> <!-- p begin-->

                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-envelope"></a>

                        </p> <!-- p finish-->

                        
            

                    

            </div><!-- col-sm-6 col-md-3 finish-->



        </div><!-- row finish-->
    </div><!-- container finish-->
</div><!-- footer finish-->

<div id="copyright"><!-- copyright begin-->

    <div class="container"><!-- container begin-->

        <div class="col-md-6"><!-- col-md-6 begin-->

            <p class="pull-left">&copy: 2021 Glow Glamorous</p>

        </div><!-- col-md-6 finish-->

        <div class="col-md-6"><!-- col-md-6 begin-->

            <p class="pull-right">Theme by: <a href="#"> Glow Glamorous</a></p>

        </div><!-- col-md-6 finish-->

    </div><!-- container finish-->

</div><!-- copyright finish-->