
<?php
$active='Item';
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
                </ul><!--breadcrumb finish  -->
            </div><!--col-md-12 finish  -->

            <div class="col-md-3"><!--col-md-3 begin  -->

            <?php

                include("includes/sidebar.php");
            ?>
           
            </div><!--col-md-3 finish  -->

     
            <div class="col-md-9"><!--col-md-9 begin  -->


            <?php
                if(!isset($_GET['p_cat'])){
                    if(!isset($_GET['cat'])){
               

                echo "
                <div class='box'><!--box begin  -->
                    <h1>Our products</h1>
                    <p>Browse our amazing Products and shop to your heart's content !!!</p>
            
           
                </div><!--box finish  -->

                ";

                        }
                    }
                ?>

                <div class="row"><!--row begin  -->

                <?php
                    if(!isset($_GET['p_cat'])){
                    if(!isset($_GET['cat'])){

                        $page_max=6;

                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }else{
                                    $page=1;
                                }
                                $start=($page-1) * $page_max;
                                $dis_product ="select * from products order by 1 DESC LIMIT $start, $page_max ";
                                $p_run = mysqli_query($con,$dis_product);
                                while($row_prod=mysqli_fetch_array($p_run)){
                                    $pro_id=$row_prod['product_id'];
                                    $pro_title=$row_prod['product_title'];
                                    $pro_price=$row_prod['product_price'];
                                    $pro_img1=$row_prod['product_img1'];
                                    
                                    echo "
                                    <div class='col-md-4 col-sm-6 center-responsive' >
                                        <div class='product'>
                                            <a href='details.php?pro_id=$pro_id'>
                                                <img class='img-responsive' src='admin_area/product_images/$pro_img1' >
                                            </a>
                                        <div class='text'>
                                            <h3>
                                                <a href='details.php?pro_id=$pro_id'>
                                                    $pro_title
                                                </a>
                                            </h3>

                                        <p class='price'>
                                            $pro_price
                                        </p>

                                        <p class='buttons'>
                                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                            View Details
                                            </a>

                                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                                <i class='fa fa-shopping-cart'></i> Add to Cart
                                            </a>
                                        </p>
                                    </div>
                                    </div>
                                </div>  
                                    ";
                                
                            }

                            
                ?>
                </div><!--row finish  -->

                

                <center>
                    <ul class="pagination">
                        <?php

                        $que="select * from products";
                        $res=mysqli_query($con,$que);
                        $tot_rec=mysqli_num_rows($res);
                        $tot_p= ceil($tot_rec/$page_max);

                        echo "<li>
                                    <a href='shop.php?page=1'>".'First Page'."</a>
                                </li>
                                ";
                                for($i=1; $i<=$tot_p; $i++){
                                    echo "
                                    <li>
                                    <a href='shop.php?page=".$i."'>".$i."</a>
                                </li>
                                ";
                                    
                                };

                                echo "<li>
                                    <a href='shop.php?page=$tot_p'>".'Last Page'."</a>
                                </li>
                                ";

                                
                                    }
                                }
                        ?>
                    </ul>
                </center>

                
                <?php
                
                    sidepget();
                    getmaincat();
                    
                ?>
                

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