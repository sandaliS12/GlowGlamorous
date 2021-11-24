<?php 

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from users where email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['user_id'];

$customer_name = $row_customer['name'];

$customer_email = $row_customer['email'];

$customer_country = $row_customer['country'];

$customer_contact = $row_customer['contact'];

$customer_address = $row_customer['address'];

$customer_image = $row_customer['profile_pic'];

?>


<h1 align="center"> Edit Your Account </h1>


<form action="" method="post" enctype="multipart/form-data"><!-- form begin -->
    <div class="form-group"><!-- form-group begin -->
        <label> Customer Name: </label>

        <input type="text" name="c_name" class="form-control" value="<?php echo $customer_name; ?>" required>
    </div><!-- form-group finish -->

    <div class="form-group"><!-- form-group begin -->
        <label> Customer Email: </label>

        <input type="text" name="c_email" class="form-control" value="<?php echo $customer_email; ?>" required>
    </div><!-- form-group finish -->

    <div class="form-group"><!-- form-group begin -->
        <label> Customer Country: </label>

        <input type="text" name="c_country" class="form-control" value="<?php echo $customer_country; ?>" required>
    </div><!-- form-group finish -->

    <div class="form-group"><!-- form-group begin -->
        <label> Customer Contact: </label>

        <input type="text" name="c_contact" class="form-control" value="<?php echo $customer_contact; ?>" required>
    </div><!-- form-group finish -->

    <div class="form-group"><!-- form-group begin -->
        <label> Customer Address: </label>

        <input type="text" name="c_address" class="form-control" value="<?php echo $customer_address; ?>" required>
    </div><!-- form-group finish -->

    <div class="form-group"><!-- form-group begin -->
        <label> Customer Image: </label>

        <input type="file" name="c_image" class="form-control form-height-custom" required>
        <img class="img-responsive" src="customer_images/<?php echo $customer_image; ?>" alt="customer image">
    </div><!-- form-group finish -->

    <div class="text-center"><!-- form-group begin -->
        <button name="update" class="btn btn-primary">

        <i class="fa fa-user-md"></i> Update Now

        </button>
    </div><!-- text-center finish -->
</form><!-- form finish -->


<?php 

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_address = $_POST['c_address'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    move_uploaded_file ($c_image_tmp,"customer_images/$c_image");
    
    $update_customer = "update users set name='$c_name',email='$c_email',country='$c_country',address='$c_address',contact='$c_contact',profile_pic='$c_image' where user_id='$update_id' ";
    
    $run_customer = mysqli_query($con,$update_customer);
    
    if($run_customer){
        
        echo "<script>alert('Your account has been edited, to complete the process, please Relogin')</script>";
        
        echo "<script>window.open('logout.php','_self')</script>";
        
    }
    
}

?>