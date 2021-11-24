<div class="box"><!-- box Begin -->
    
  <div class="box-header"><!-- box-header Begin -->
      
      <center><!-- center Begin -->
          
          <h1> Login </h1>
          
        
          
          <p class="text-muted"> Login to browse our amazing Products !!! </p>
          
      </center><!-- center Finish -->
      
  </div><!-- box-header Finish -->
   
  <form method="post" action="login.php"><!-- form Begin -->
      
      <div class="form-group"><!-- form-group Begin -->
          
          <label> Email </label>
          
          <input name="u_email" type="text" class="form-control" required>
          
      </div><!-- form-group Finish -->
      
       <div class="form-group"><!-- form-group Begin -->
          
          <label> Password </label>
          
          <input name="u_pass" type="password" class="form-control" required>
          
      </div><!-- form-group Finish -->
      
      <div class="text-center"><!-- text-center Begin -->
          
          <button name="login" value="Login" class="btn btn-primary">
              
              <i class="fa fa-sign-in"></i> Login
              
          </button>
          
      </div><!-- text-center Finish -->     
      
  </form><!-- form Finish -->
   
  <center><!-- center Begin -->
      
     <a href="customer_register.php">
         
         <h4 style="color:red;"> Already Don't have an account? Register </h4>
         
     </a> 
      
  </center><!-- center Finish -->
    
</div><!-- box Finish -->


<?php 

if(isset($_POST['login'])){
    
    $customer_email = $_POST['u_email'];
    
    $customer_pass = $_POST['u_pass'];
    
    $select_customer = "select * from users where customer_email='$customer_email' AND customer_pass='$customer_pass'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $get_ip = getR();
    
    $check_customer = mysqli_num_rows($run_customer);
    
    $select_cart = "select * from custom_cart where item_p='$get_ip'";
    
    $run_cart = mysqli_query($con,$select_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_customer==0 AND $check_cart==1){
        
        echo "<script>alert('Your email or password is wrong')</script>";
        
        exit();
        
    }
    
    if($check_customer==1 AND $check_cart==0){
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
        
    }else{
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
        
    }
    
}

?>