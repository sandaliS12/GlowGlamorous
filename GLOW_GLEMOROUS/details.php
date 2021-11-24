<?php
        $active='Cart';
        include("includes/header.php");
?>


    <div id="content"><!--content begin  -->
        <div class="container"><!--container begin  -->
            <div class="col-md-12"><!--col-md-12 begin  -->

                <ul class="breadcrumb"><!--breadcrumb begin  -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        shop
                    </li>
                    <li>
                    <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                   </li>
                   <li> <?php echo $pro_title; ?> </li>
                </ul><!--breadcrumb finish  -->
            </div><!--col-md-12 finish  -->

            <div class="col-md-3"><!--col-md-3 begin  -->

            <?php

                include("includes/sidebar.php");
            ?>
           
            </div><!--col-md-3 finish  -->

            <div class="col-md-9"><!--col-md-9 begin  -->
                <div id="productMain" class="row"><!--productMain begin  -->
                    <div class="col-sm-6"><!--col-sm-6 begin  -->
                        <div id="mainImage"><!--mainImage begin  -->
                            <div id="myCarousel"  class="carousel slide" data-ride="carousel"><!--myCarousel begin  -->
                                <ol class="carousel-indicators"><!--carousel-indicators begin  -->
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol><!--carousel-indicators finish  -->

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1">
                                        </center>
                                    </div>
                                    <div class="item ">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 1">
                                        </center>
                                    </div>
                                  
                                </div><!--carousel-inner finish  -->

                                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>

                                    </a>

                                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>

                                    </a>

                            </div><!--myCarousel finish  -->
                        </div><!--mainImage finish  -->
                    </div><!--col-sm-6 finish  -->


                    <div class="col-sm-6"><!--col-sm-6 begin  -->
                        <div class="box"><!--box begin  -->
                            <h1 class="text-center"><?php echo $pro_title; ?></h1>

                            <?php addToCart(); ?>

                            <form action="details.php?add_cart=<?php echo $product_id; ?>"  class="form-horizontal" method="post"><!--form-horizontal begin  -->
                                <div class="form-group"><!--form-group begin  -->
                                    <label for="" class="col-md-5 control-label">Product Quantity</label>

                                        <div class="col-md-7"><!--col-md-7 begin  -->
                                            <select name="product_qty" id=""  class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>


                                        </div><!--col-md-7 finish  -->
                                </div><!--form-group finish  -->

                                <div class="form-group"><!--form-group begin  -->
                                    <label for="" class="col-md-5 control-label">Product Size</label>

                                        <div class="col-md-7"><!--col-md-7 begin  -->
                                            <select name="product_size" id=""  class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">
                                                <option disabled selected>Select a Size</option>
                                                <option>Xs</option>
                                                <option>S</option>
                                                <option>L</option>
                                                <option>XL</option>
                                                <option>XXL</option>
                                            </select>


                                        </div><!--col-md-7 finish  -->
                                </div><!--form-group finish  -->

                                <p class="price">RS.<?php echo $pro_price; ?></p>

                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">   Add to Cart</button></p>

                            </div><!--form-horizontal finish  -->

                        </div><!--box finish  -->

                            <div class="row" id="thumbs"> <!--row begin  -->
                                <div class="col-xs-4"><!--col-XS-4 begin  -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 1" class="img-responsive" >
                                    </a>
                                    

                                </div><!--col-XS-4 finish  -->
                                
                                
                                
                                

                                
                            </div><!--row finish  -->

                    </div><!--col-sm-6 finish  -->

                    <h1></h1>

                    <div class="box" id="details" ><!--box begin  -->
                        <h4>Product Details</h4>
                            <?php echo $pro_desc; ?>
                            
                        <h4> Size</h4>

                            <ul>
                                <li>    XS</li>
                                <li>    S</li>
                                <li>    M</li>
                                <li>    L</li>
                                <li>    XL</li>
                                <li>    XXL</li>
                            </ul>

                        <hr>
                   

                    </div><!--box finish  -->

                    <div id="row same-heigh-row"><!--row same-heigh-row begin  -->
                    <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 begin  -->
                        <div class="box same-height headline"><!--box same-height headline begin  -->
                            <h3 class="text-center">Product You Like</h3>
                            </div><!--box same-height headline finish  -->
                    </div><!--col-md-3 col-sm-6 finish  -->


                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin  -->
                        <div class="product same-height "><!--product same-height begin  -->
                            <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/p2_a.jpg" alt="product 1"  >
                            </a>

                            <div class="text"><!--text begin  -->
                                <h3><a href="details.php">Casual women</a></h3>

                                <p class="price">$40</p>
                            </div><!--text finish  -->
                        </div><!--product same-height finish  -->
                    </div><!--col-md-3 col-sm-6 center-responsive finish  -->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin  -->
                        <div class="product same-height "><!--product same-height begin  -->
                            <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/p2_a.jpg" alt="product 1"  >
                            </a>

                            <div class="text"><!--text begin  -->
                                <h3><a href="details.php">Casual women</a></h3>

                                <p class="price">$40</p>
                            </div><!--text finish  -->
                        </div><!--product same-height finish  -->
                    </div><!--col-md-3 col-sm-6 center-responsive finish  -->

                    <div class="col-md-3 col-sm-6 center-responsive"><!--col-md-3 col-sm-6 center-responsive begin  -->
                        <div class="product same-height "><!--product same-height begin  -->
                            <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/p2_a.jpg" alt="product 1"  >
                            </a>

                            <div class="text"><!--text begin  -->
                                <h3><a href="details.php">Casual women</a></h3>

                                <p class="price">$40</p>
                            </div><!--text finish  -->
                        </div><!--product same-height finish  -->
                    </div><!--col-md-3 col-sm-6 center-responsive finish  -->



                </div><!--row same-heigh-row finish  -->



                </div><!--productMain finish  -->




                
            </div><!--col-md-9 finish  -->

        </div><!--container finish  -->
    </div><!--content finish  -->



    <?php

        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>