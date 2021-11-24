<center>
    <h1>You really want to delete the Account</h1>
    <form action="" method="post">
        <input type="submit" name="Yes" value="Yes, I want to delete" class="btn btn-danger">
        <input type="submit" name="No" value="No, I don't want to delete" class="btn btn-primary">

    </form>

</center>

<?php 

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){
    
    $delete_customer = "delete from users where email='$c_email'";
    
    $run_delete_customer = mysqli_query($con,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Successfully delete your account, feel sorry about this. Good Bye')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['No'])){
    
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    
}

?>


