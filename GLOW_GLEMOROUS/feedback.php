<?php
        $active='Feedback';
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
                        Feedback
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
                        <h2>Send Us Your Feedback</h2>
                            <p class="text-muted">
                                We would  love to hear what you have to say!
                            </p> 
                    </center>
                    <form action="feedback.php" method="post"><!--form begin-->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div><!--form-group finish  -->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div><!--form-group finish  -->

                        <div class="form-group"><!--form-group begin  -->
                            <label>Feedback</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div><!--form-group finish  -->

                        <div class="text-center"><!--text-center begin  -->
                            <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user-md"></i>  Submit</button>
                        </div><!--form-group finish  -->

                    </form><!--form finish  -->

                    <?php
                    if(isset($_POST['submit'])){
                        $cus_name = $_POST['name'];
                        $cus_email = $_POST['email'];
                        $cus_message = $_POST['message'];
                        $admin_email = "sandalisandya99@gmail.com";
                        mail($admin_email,$cus_name,$cus_email,$cus_message);


                        $email = $_POST['email'];
                        $sub="Welcome Glow Glamarous";
                        $reply="Thank you for your feedback";
                        $my = "sandalisandya99@gmail.com";
                        mail($email,$sub,$reply,$my);
                        echo "<h2> Reply sent successfully!</h2>";
                    }
                    ?>
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