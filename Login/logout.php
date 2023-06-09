<?php
	session_start();
		$_SESSION['logged_in'] = false;
	session_unset();
	session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
        <title>E-Farm: LogOut</title>
    </head>
      <?php
            require "menu.php";
        ?>

	<body>
	    <section id="banner" class = "wrapper">
			<div class="container">
                <header class="logOut">
                    <h2 class="logOut">Thanks for visiting !!!</h2>
                    	<p>You have been succesfully logged out !!!</p>
                        <div>
							<br />
                            <a href="../index.php" class="button special">HOME</a>
                        </div>
                </header>
                </div>
            </div>
            <div>
       

			</section>
            <!-- -- Banner  -->

            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
	</body>
</html>
