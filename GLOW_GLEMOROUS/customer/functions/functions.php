<?php
    $db=mysqli_connect("localhost","root","","glow_store");

    function getR(){
        switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
        }
    }


    function addToCart(){
        global $db;

        if(isset($_GET['add_cart'])){
        
            $ip_add = getR();
            
            $p_id = $_GET['add_cart'];
            
            $product_qty = $_POST['product_qty'];
            
            $product_size = $_POST['product_size'];
            
            $check_product = "select * from custom_cart where item_p='$ip_add' AND p_id='$p_id'";
            
            $run_check = mysqli_query($db,$check_product);
            
            if(mysqli_num_rows($run_check)>0){
                
                echo "<script>alert('This product has already added in cart')</script>";
                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
                
            }else{
                
                $query = "insert into custom_cart (p_id,item_p,quantity,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
                
                $run_query = mysqli_query($db,$query);
                
                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
                
            }
            
        }
    }

    function getPro(){
        global $db;

        $get_prod = "select * from products order by 1 DESC LIMIT 0,3";
        $run_prod = mysqli_query($db,$get_prod);
        while($row_prod=mysqli_fetch_array($run_prod)){
            $pro_id=$row_prod['product_id'];
            $pro_title=$row_prod['product_title'];
            $pro_price=$row_prod['product_price'];
            $pro_img1=$row_prod['product_img1'];

            echo "
                <div class='col-md-4 col-sm-6 single' >
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

                        <p class='price'>Rs.
                            $pro_price
                        </p>

                        <p class='button'>
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

    }

    function getItemcat(){
        global $db;

        $get_item_cat = "select * from item_categories";
        $run_item_cat = mysqli_query($db,$get_item_cat);
        while($row_i_cat=mysqli_fetch_array($run_item_cat)){
            $i_cat_id=$row_i_cat['p_cat_id'];
            $i_cat_title=$row_i_cat['p_cat_title'];
            echo "
                <li>
                    <a href='shop.php?p_cat=$i_cat_id'> $i_cat_title </a>
                </li>
            ";

        }
    }

    function getMainitemcat(){
        global $db;

        $get_main_cat = "select * from main_categories";
        $run_main_cat = mysqli_query($db,$get_main_cat);
        while($row_main_cat=mysqli_fetch_array($run_main_cat)){
            $main_cat_id=$row_main_cat['cat_id'];
            $main_cat_title=$row_main_cat['cat_title'];
            echo "
                <li>
                    <a href='shop.php?cat=$main_cat_id'> $main_cat_title </a>
                </li>
            ";

        }
    }

    function sidepget(){
        global $db;

        if(isset($_GET['p_cat'])){
            $p_c_id = $_GET['p_cat'];
            $p_cat_get = "select * from item_categories where p_cat_id='$p_c_id'";
            $p_cat_run= mysqli_query($db,$p_cat_get);
            $p_cat_row = mysqli_fetch_array($p_cat_run);
            $title_p_cat = $p_cat_row['p_cat_title'];
            $desc_p_cat = $p_cat_row['p_cat_desc'];
            $get_pro = "select * from products where p_cat_id='$p_c_id'";
            $run_p = mysqli_query($db,$get_pro);
            $count=mysqli_num_rows($run_p);
            if($count==0){
                echo "
                <div class='box'>
                <h1> No product found in this category </h1>
                </div>
                ";
            }else{
                echo "
                <div class='box'>
                <h1> $title_p_cat </h1>
                <p> $desc_p_cat </p>
                </div>
                ";
            
            }
            while($row_pro=mysqli_fetch_array($run_p)){
                $pro_id=$row_pro['product_id'];
                $pro_title=$row_pro['product_title'];
                $pro_price=$row_pro['product_price'];
                $pro_img1=$row_pro['product_img1'];

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

                        <p class='button'>
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

        }
    }

    function getmaincat(){
        global $db;

        if(isset($_GET['cat'])){
            $p_c_id = $_GET['cat'];
            $p_cat_get = "select * from main_categories where cat_id='$p_c_id'";
            $p_cat_run= mysqli_query($db,$p_cat_get);
            $p_cat_row = mysqli_fetch_array($p_cat_run);
            $title_p_cat = $p_cat_row['cat_title'];
            $desc_p_cat = $p_cat_row['cat_desc'];
            $get_pro = "select * from products where p_cat_id='$p_c_id' LIMIT 0,6";
            $run_p = mysqli_query($db,$get_pro);
            $count=mysqli_num_rows($run_p);
            if($count==0){
                echo "
                <div class='box'>
                <h1> No product found in this category </h1>
                </div>
                ";
            }else{
                echo "
                <div class='box'>
                <h1> $title_p_cat </h1>
                <p> $desc_p_cat </p>
                </div>
                ";
            

                while($row_pro=mysqli_fetch_array($run_p)){
                    $pro_id=$row_pro['product_id'];
                    $pro_title=$row_pro['product_title'];
                    $pro_price=$row_pro['product_price'];
                    $pro_img1=$row_pro['product_img1'];
    
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
    
                            <p class='button'>
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
            
        }
        }
    }

    function i_ord(){

        global $db;

        $c_add = getR();
        $cg_item = "select * from custom_cart where item_p='$c_add'";
        $run_cg_items = mysqli_query($db,$cg_item);
    
        $co_items = mysqli_num_rows($run_cg_items);
    
        echo $co_items;

    }


    function c_tot(){
    
        global $db;
        
        $ip_add = getR();
        
        $total = 0;
        
        $select_cart = "select * from custom_cart where item_p='$ip_add'";
        
        $run_cart = mysqli_query($db,$select_cart);
        
        while($record=mysqli_fetch_array($run_cart)){
            
            $pro_id = $record['p_id'];
            
            $pro_qty = $record['quantity'];
            
            $get_price = "select * from products where product_id='$pro_id'";
            
            $run_price = mysqli_query($db,$get_price);
            
            while($row_price=mysqli_fetch_array($run_price)){
                
                $sub_total = $row_price['product_price']*$pro_qty;
                
                $total += $sub_total;
                
            }
            
        }
        
        echo "$" . $total;
    }
        ?>