<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>

    <title>Profile: <?php echo $_SESSION['Username']; ?></title>

<!-- 
		<link href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" rel="stylesheet"> -->
        
       
    </head>


    <body>

         <?php
            require 'menu.php';
        ?>

        <section id="one" class ="container" >
                <header>
                    <center class = "img-responsive">
                    <span><img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" class="img-responsive img-rounded" height="60px" width = "100px"></span>
                    <br>
+                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <h4 style="color: black;">Username:- <?php echo $_SESSION['Username'];?></h4>
                    <br>
                </center>
                </header>

                <div class = "row">
               
                        <?php if($_SESSION['Category'] == 1): ?>
                        <div class="col-md-3 col-sm-5">
                            <h4><b>Ratings : </b></h4>
                            <p class = "prof-f"><?php echo $_SESSION['Rating'];?></p>
                        </div>
                        <?php endif; ?>
                        <div class="col-md-3 col-sm-5">
                        <h4><b>Email ID : </b></h4>
                            <p  class = "prof-f"><?php echo $_SESSION['Email'];?></p>
                        </div>
                    </div>
                    <br />
                
                    <div class="row">
                        <div class="col-md-3">
                            <b><h4>Mobile No : </b></h4>
                            <p  class = "prof-f"><?php echo $_SESSION['Mobile'];?></p>
                        </div>
                        <div class="col-md-3">
                            <h4> <b>Address : </b></h4>
                            <p  class = "prof-f"><?php echo $_SESSION['Addr'];?></p>
                        </div>
                    </div>
                
                    
                            <div class=" row ">
                                    <div class="col-md-3 prom-3 ">
                                        <a href="Profile/changePassForm.php" class="btn btn-danger" style="text-decoration: none;">Change Password</a>
                                    </div>

                                    <div class="col-md-3 prom-3">
                                        <a href="profileEdit.php" class="btn btn-danger" style="text-decoration: none;">Edit Profile</a>
                                    </div>

                                    <?php if($_SESSION['Category'] == 1): ?>
                                    <div class="col-md-2 prom-3">                                  
            							<a href="uploadProduct.php" class="btn btn-danger" style="text-decoration: none;">Upload Product</a>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <div class="col-md-3 m-3">
                                        <a href="Login/logout.php" class="btn btn-danger" style="text-decoration: none;">LOG OUT</a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
