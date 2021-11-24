<?php
        $active='Home';
        include("includes/header.php");
?>



    <div class="container" id="slider"> <!-- container slider begin-->

        <div class="col-md-12"> <!-- col-md-12 begin-->

            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide begin-->

                <ol class="carousel-indicators"> <!-- carousel indicators begin-->

                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>


                </ol> <!-- carousel indicators  finish-->

                    <div class="carousel-inner"><!-- carousel inner  begin-->
                        <div class="item active">

                            <img src="admin_area/slide_images/slide_1.jpg" alt="slide image 1">

                        </div>

                        <div class="item">

                            <img src="admin_area/slide_images/slide_2.jpg" alt="slide image 2">

                        </div>

                        <div class="item">

                            <img src="admin_area/slide_images/slide_3.jpg" alt="slide image 3">

                        </div>

                        <div class="item">

                            <img src="admin_area/slide_images/slide_4.jpg" alt="slide image 4">

                        </div>



                    </div> <!-- carousel inner  finish-->

                        <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control  begin-->
                           
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only"> Previous </span> 
                        
                        </a> <!-- left carousel-control  finish-->

                        <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- right carousel-control  begin-->
                           
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only"> Next </span> 
                        
                        </a> <!-- right carousel-control  finish-->



            </div> <!-- carousel slide finish-->

        </div> <!-- col-md-12 finish-->


    </div> <!-- container slider finish-->

    <div id="advantages" > <!-- advantages begin-->
    
            <div class="container" >  <!-- container begin-->

                <div class="same-height-row" >  <!-- same-height-row begin-->

                    <div class="col-sm-4" >  <!-- col-sm-4 begin-->

                        <div class="box same-height" >  <!-- box same-height begin-->

                            
                                <h3><a href="#"> We Love</a></h3>

                                <p> We're a company with a major focus on making our customers look their best by giving them access to the latest fashions and accessories. They are very stylish and trendiest. We love to make all of your fashion dreams come true. An organization with style in its very essence, this is where you should be if you're looking to be the belle of the ball!</p>

                        </div> <!-- box same-height finish-->

                    </div> <!-- col-sm-4 finish-->



                    <div class="col-sm-4" >  <!-- col-sm-4 begin-->

                        <div class="box same-height" >  <!-- box same-height begin-->

                            
                        
                                    <h3><a href="#"> Best prices</a></h3>

                                    <p> We offer the most stylish and trendiest clothes at the best prices available in the market. We offer amazing discounts, not just seasonal ones, but also for different lines of clothing. We priotize giving the best quality quality for the most reasonable prices in the market. We also have giveaways, so keep an eye on our website for more and more unbelievable deals!</p>

                        </div> <!-- box same-height finish-->

                    </div> <!-- col-sm-4 finish-->


                    <div class="col-sm-4" >  <!-- col-sm-4 begin-->

                        <div class="box same-height" >  <!-- box same-height begin-->

                            

                                <h3><a href="#"> 100% quality</a></h3>

                                <p> Our clothes are all about quality, quality and more quality! You will never find a second rate itme in our collection. We have all kinds of high quality fashion choices for one and all, and we will settle for nothing but the most premium cquality in all our clothing line. Visit us and expose yourself to a glamorous fashion experience!</p>

                        </div> <!-- box same-height finish-->

                    </div> <!-- col-sm-4 finish-->


                    


                </div> <!-- same-height-row finish-->

            </div> <!-- container finish-->

    </div> <!-- advantages finish-->


    <div id="hot" > <!-- hot begin-->
    
        <div class="box" >  <!-- box  begin-->

            <div class="container" >  <!-- container begin-->

                <div class="col-md-12"> <!-- col-md-12 begin-->    
                
                    <h2> Our Latest Products</h2>
                
                </div> <!-- col-md-12 finish-->

            </div> <!-- container finish-->

        </div> <!-- box finish-->

    </div> <!-- hot finish-->


    <div id="content" class="container" width="250" height="250"> <!-- container begin-->
    
        <div class="row" >  <!-- row  begin-->

        <?php
            getPro();
        ?>


        </div> <!-- row finish-->
    </div> <!-- container finish-->


    <div id="hot" > <!-- hot begin-->
    
    <div class="box" >  <!-- box  begin-->

        <div class="container" >  <!-- container begin-->

            <div class="col-md-12"> <!-- col-md-12 begin-->    
            
                <h2> Our New Arrivals</h2>
            
            </div> <!-- col-md-12 finish-->

        </div> <!-- container finish-->

    </div> <!-- box finish-->

</div> <!-- hot finish-->


<div id="content" class="container"> <!-- container begin-->

    <div class="row" >  <!-- row  begin-->

        <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begin-->  

            <div class="product">
                <a href="details.php">
                    <img class="img-responsive" src="admin_area/product_images/download.png" alt="product 1">

                </a>

                <div class="text">
                    <h3>
                        <a href="details.php">
                            Red Blossoms
                        </a>
                    </h3>
                    <p class="price"> RS. 1200 </p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default"> View Details</a>
                        <a href="details.php" class="btn btn-primary"> 
                            <i class="fa fa-shopping-cart">
                                Add To cart
                            </i>
                        </a>
                    </p>
                </div> <!-- text finish-->

            </div> <!-- product finish-->

        </div> <!-- col-sm-4 col-sm-6 single finish-->


<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begin-->  

    <div class="product">
        <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/blooming_floral.jpg" alt="product 1">

        </a>

        <div class="text">
            <h3>
                <a href="details.php">
                Blooming_Floral
                </a>
            </h3>
            <p class="price"> RS. 1500 </p>
            <p class="button">
                <a href="details.php" class="btn btn-default"> View Details</a>
                <a href="details.php" class="btn btn-primary"> 
                    <i class="fa fa-shopping-cart">
                        Add To cart
                    </i>
                </a>
             </p>
        </div> <!-- text finish-->

    </div> <!-- product finish-->

</div> <!-- col-sm-4 col-sm-6 single finish-->


<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single begin-->  

    <div class="product">
        <a href="details.php">
            <img class="img-responsive" src="admin_area/slide_images/product3.jpg" alt="product 1">

        </a>

        <div class="text">
            <h3>
                <a href="details.php">
                     Golden Work Saree
                </a>
            </h3>
            <p class="price"> Rs. 6000 </p>
            <p class="button">
                <a href="details.php" class="btn btn-default"> View Details</a>
                <a href="details.php" class="btn btn-primary"> 
                    <i class="fa fa-shopping-cart">
                         Add To cart
                    </i>
                </a>
            </p>
        </div> <!-- text finish-->

    </div> <!-- product finish-->

</div> <!-- col-sm-4 col-sm-6 single finish-->



    </div> <!-- row finish-->
</div> <!-- container finish-->





    <?php

        include("includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>
</html>