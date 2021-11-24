
<?php
$active='my';
include("includes/header.php");
?>

<kkkk>
    <div id="content"><!--content begin  -->
        <div class="container"><!--container begin  -->
            <div class="col-md-12"><!--col-md-12 begin  -->

                <ul class="breadcrumb"><!--breadcrumb begin  -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Register
                    </li>
                </ul><!--breadcrumb finish  -->
            </div><!--col-md-12 finish  -->

            <div class="col-md-3"><!--col-md-3 begin  -->

            <?php

                include("includes/sidebar.php");
            ?>
           
            </div><!--col-md-3 finish  -->


            <div class="col-md-9"><!--col-md-9 begin  -->
                <div class="box"><!--box begin  -->
                    <div class="box-header"><!--box-header begin  -->

                    <center>
                        <h2>Customer Registration</h2>
                            <p class="text-muted">
                                Welcome for our new customers.
                            </p> 
                    </center>
                    <form action="customer_register.php" method="post" enctype="multipart/form-data"><!--form begin-->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Name</label>
                            <input type="text" class="form-control" name="u_name" required>
                        </div><!--form-group finish  -->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Email</label>
                            <input type="text" class="form-control" name="u_email" required>
                        </div><!--form-group finish  -->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Password</label>
                            <input type="password" class="form-control" name="u_pass" required>
                        </div><!--form-group finish  -->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Country</label>
                            <input type="text" class="form-control" name="u_country" required>
                        </div><!--form-group finish  -->

                        
                        <div class="form-group"><!--form-group begin  -->
                            <label>Contact</label>
                            <input type="text" class="form-control" name="u_contact" required>
                        </div><!--form-group finish  -->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Address</label>
                            <input type="text" class="form-control" name="u_address" required>
                        </div><!--form-group finish  -->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Profile Picture</label>
                            <input type="file" class="form-control form-height-custom" name="u_pic" required>
                        </div><!--form-group finish  -->


                        <div class="text-center"><!--text-center begin  -->
                            <button type="submit" name="register" class="btn btn-primary">
                            <i class="fa fa-user-md"></i>Register</button>
                        </div><!--form-group finish  -->

                    </form><!--form finish  -->
                    </div><!--box-header finish  -->

                </div><!--box finish  -->

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


<?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['u_name'];
    
    $c_email = $_POST['u_email'];
    
    $c_pass = $_POST['u_pass'];
    
    $c_country = $_POST['u_country'];
    
    $c_contact = $_POST['u_contact'];
    
    $c_address = $_POST['u_address'];
    
    $c_image = $_FILES['u_pic']['name'];
    
    $c_image_tmp = $_FILES['u_pic']['tmp_name'];
    
    $c_ip = getR();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into users (name,email,password,country,contact,address,profile_pic,user_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from custom_cart where item_p='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>