<?php
    include("includes/db.php")
?>

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link rel="stylesheet" href="styles/boostrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    

</head>
<body>

        <div class="row"><!--row begin -->
            <div class="col-lg-12"><!--col-lg-12 begin -->
                <ol class="breadcrumb"><!--breadcrumb begin -->
                    <li class="active">
                        <i class="fa fa-dashboard"></i>Dashboard / Insert Products

                    </li>

                </ol><!--breadcrumb finish -->


            </div><!--col-lg-12 finish -->

        </div><!--row finish -->

        <div class="row"><!--row begin -->
            <div class="col-lg-12"><!--col-lg-12 begin -->
                <div class="panel panel-default"><!--panel panel-default begin -->
                    <div class="panel-heading"><!--panel-heading begin -->
                        <h3 class="panel-title">
                            <i class="fa fa-money fa-fw"></i> Insert Products
                        </h3>
                    </div><!--panel-heading finish -->
                    <div class="panel-body"><!--panel-body begin -->
                        <form method="post" class="form-horizontal" enctype="multipart/form-data"><!--form-horizontal begin -->

                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Title</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="p_title" type="text" class="form-control" required>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Category</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <select name="p_cat" class="form-control">
                                        <option> Select a category product</option>

                                        <?php

                                        $get_p_cats = "select * from item_categories";
                                        $run_p_cats = mysqli_query($con,$get_p_cats);

                                        while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];

                                            echo "
                                            <option value='$p_cat_id'> $p_cat_title </option> ";

                                        }

                                        ?>

                                    </select>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Category</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <select name="cat" class="form-control">
                                        <option> Select a category product</option>

                                        <?php

                                        $get_cat = "select * from main_categories";
                                        $run_cat = mysqli_query($con,$get_cat);

                                        while ($row_cat=mysqli_fetch_array($run_cat)){
                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];

                                            echo "
                                            <option value='$cat_id'> $cat_title </option> ";

                                        }

                                        ?>

                                    </select>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Image 1</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="p_img1" type="file" class="form-control" required>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Image 2</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="p_img2" type="file" class="form-control" required>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Price</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="p_price" type="text" class="form-control" required>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Keywords</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="p_keywords" type="text" class="form-control" required>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->



                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Product Description</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <textarea name="p_desc" cols="19" rows="6"  class="form-control"></textarea>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label"></label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->



                        </form><!--form-horizontal finish -->

                    </div><!--panel-body finish -->

                </div><!--panel panel-default finish -->


            </div><!--col-lg-12 finish -->

        </div><!--row finish -->

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>

</body>
</html>


<?php
if(isset($_POST['submit'])){

    $p_title = $_POST['p_title'];
    $p_cat = $_POST['p_cat'];
    $cat = $_POST['cat'];
    $p_price = $_POST['p_price'];
    $p_keywords = $_POST['p_keywords'];
    $p_desc = $_POST['p_desc'];

    $p_img1 = $_FILES['p_img1']['name'];
    $p_img2 = $_FILES['p_img2']['name'];

    $temp_name1 = $_FILES['p_img1']['tmp_name'];
    $temp_name2 = $_FILES['p_img2']['tmp_name'];

    move_uploaded_file($temp_name1,"product_images/$p_img1");
    move_uploaded_file($temp_name2,"product_images/$p_img2");

    $insert_product="insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_price,product_desc,product_keywords	) values 
    ('$p_cat', '$cat',NOW(),'$p_title','$p_img1','$p_img2','$p_price','$p_desc','$p_keywords')";

    $pro_run=mysqli_query($con,$insert_product);

    if($pro_run){
        echo "<script>alert('Product has been inserted successfully')</script>";
        echo "<script>window.open('Product_insert.php','_self')</script>";
        
    }
    
}

?>
                                   
