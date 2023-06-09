<?php
 	session_start();
	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>E-Farm</title>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<?php require 'menu.php'; ?>
	<body>



		<!-- One -->
			<section id="one" class="wrapper style1 align-center" style="height: 600px">
				<div class="container">
					<h2>Welcome to Digital Market</h2>
					<br /><br />
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<a href="profileView.php"><img src="profileDefault.png"></a>
							<p>Your Profile</p>
						</section>
						<section class="4u 12u$(small)">
							<a href="productMenu.php?n=1" name="catSearch"><img src="search.png"></a>
							<p>Search according to your needs</p>
						</section>
						<section class="4u$ 12u$(small)">
							<a href="productmenu.php?n=0"><img src="product.png"></a>
							<p>Our products</p>
						</section>
					</div>
				</div>
			</section>



		<!-- Footer -->
			<!--<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Welcome to Digital market</h3>

							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Quod adipisci perferendis et itaque.</a></li>
								<li><a href="#">Itaque eveniet ullam, veritatis reiciendis?</a></li>
								<li><a href="#">Accusantium repellat accusamus a, soluta.</a></li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									1234 Somewhere Road<br>
									Nashville, TN 00000
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">someone@untitled.tld</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>-->




	</body>
</html>
