<?php
	session_start();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>E-Farm : Write a Blog</title>
	</head>
	<body class="subpage">

		<?php
			require 'menu.php';
		?>



	<!--	<div class="btn-group-lg btn-group-justified">
			<div class="row">
				<div class="4u$ 12u$(small)">
    				<a href="#" class="button alt fit">Blogs & Poetry</a>
				</div>
				<div class="4u$ 12u$(small)">
    				<a href="#" class="button alt fit">Photography</a>
				</div>
				<div class="4u$ 12u$(small)">
					<a href="#" class="button alt fit">Paintings and Sketches</a>
				</div>
			</div>
  		</div>

		<br> -->

	<form method="post" action="Blog/blogSubmit.php">
        <section id="main" class="wrapper">
            <div class="inner">
				<div class="container col-md-8 col-md-offset-2">
				<div class="row uniform">
					<div class="9u 12u$(small)">

					</div>
					<div class="3u 12u$(small)">
						<a href="blogView.php" class="button special fit">View Blogs</a>
					</div>
				</div>
				<br />
                <div class="box">
                    <div class="row uniform">
                        <div class="12u$">
                            <input type="text" name="blogTitle" id="blogTitle" value="" placeholder="Blog Title" required/>
                        </div>
                       	<div class="12u$">
							<textarea name="blogContent" id="blogContent" rows="12" placeholder="Blog Content"></textarea>
						</div>
						<br>
						<div class="12u$">
						<center>
							<input type="submit" name="submit" class="button special" value="SUBMIT"/>
						</center>
						</div>
                    </div>
                </div>
            </div>
        </section>
    </form>

		<script>
			 CKEDITOR.replace( 'blogContent' );
		</script>

		<!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

	</body>
</html>
