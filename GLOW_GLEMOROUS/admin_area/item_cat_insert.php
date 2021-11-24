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
                        <i class="fa fa-dashboard"></i>Dashboard / Item Category Insert

                    </li>

                </ol><!--breadcrumb finish -->


            </div><!--col-lg-12 finish -->

        </div><!--row finish -->

        <div class="row"><!--row begin -->
            <div class="col-lg-12"><!--col-lg-12 begin -->
                <div class="panel panel-default"><!--panel panel-default begin -->
                    <div class="panel-heading"><!--panel-heading begin -->
                        <h3 class="panel-title">
                            <i class="fa fa-money fa-fw"></i> Item Category Insert
 
                        </h3>
                    </div><!--panel-heading finish -->
                    <div class="panel-body"><!--panel-body begin -->
                        <form method="post" class="form-horizontal" enctype="multipart/form-data"><!--form-horizontal begin -->

                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Item Category Title</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="i_cat_title" type="text" class="form-control" required>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->

                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label">Item Category Description</label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <textarea name="i_cat_desc" cols="19" rows="6"  class="form-control"></textarea>
                                </div><!--col-md-6 finish -->
                    
                            </div><!--form-group finish -->


                            <div class="form-group"><!--form-group begin -->
                                    <label class="col-md-3 control-label"></label>
                                <div class="col-md-6"><!--col-md-6 begin -->
                                    <input name="submit" value="Item Category Insert" type="submit" class="btn btn-primary form-control">
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
              
              $p_cat_title = $_POST['p_cat_title'];
              
              $p_cat_desc = $_POST['p_cat_desc'];
              
              $p_insert_cat = "insert into item_categories (p_cat_title,p_cat_desc) values ('$p_cat_title','$p_cat_desc')";
              
              $p_run_cat = mysqli_query($con,$p_insert_cat);
              
              if($p_run_cat){
                  
                  echo "<script>alert('Your New Category Has Been Inserted')</script>";
                  
                  echo "<script>window.open('index.php?view_item_cats','_self')</script>";
                  
              }
              
          }

?>

<?php  ?>

                               
