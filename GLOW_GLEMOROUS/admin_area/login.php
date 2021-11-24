<?php 

    session_start();
    include("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GLow Glamorous Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   
   <div class="container"><!-- container begin -->
       <form action="" class="form-login" method="post"><!-- form-login begin -->
           <h3 class="form-login-heading"> Glow Glamorous Administrator Login </h2>
           <br/>
           <h4 class="email"> Enter email address </h4>
           <input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>
           <h4 class="email"> Enter password </h4>
           <input type="password" class="form-control" placeholder="Password" name="admin_password" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->
               
               Login
               
           </button><!-- btn btn-lg btn-primary btn-block finish -->
           
       </form><!-- form-login finish -->
   </div><!-- container finish -->
    
</body>
</html>


<?php 

    if(isset($_POST['admin_login'])){
        
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
        
        $admin_password = mysqli_real_escape_string($con,$_POST['admin_password']);
        
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_password='$admin_password'";
     
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_email']=$admin_email;
            
            echo "<script>alert('You have logged in successfully')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is wrong. Please re-enter')</script>";
            
        }
        
    }

?>