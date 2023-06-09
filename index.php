<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

	<?php
		require 'menu.php';
	?>
	<body>


	
		<!-- Banner -->
			<section id="banner" class="wrapper">
				<div class="container">
				<h2>E-Farm</h2>
				<p>Your Product Our Market</p>
				<p>Your Need Our Product</p>

				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
						<a class ="nav-a" href = "Registration-form.php"><button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button></a>
						</div>
					</div>
				</center>


			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2 style= "color: black">E-Farm</h2>
						<p>Explore the new way of trading...</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
						<a href = "" class ="nav-b" ><i class="icon big rounded fa-clock-o"></i>
							<p>Digital Market</p></a>
						</section>
						<section class="4u 12u$(small)">
						<a href = "" class ="nav-b" >	<i class="icon big rounded fa-comments"></i>
							<p>EFarm-Blog</p></a>
						</section>
						<section class="4u$ 12u$(small)">
						<a class ="nav-b"  href = "Registration-form.php"><i class="icon big rounded fa-user"></i>
							<p>Register with us</p></a>
						</section>
					</div>
				</div>
			</section>


		<!-- Footer -->

		<?php 
		include "footer.php";
		?>
		<!--Footer Ends -->

	<!-- Login-form -->

	-<?php 
		include "login-form.php";
		?>
		<!-- Login-form -->


		





<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


	</body>
</html>
