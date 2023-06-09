<?php
	session_start();
	require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>E-Farm</title>
		
		<!-- <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif] -->
	</head>
	<body class>

		<?php
			require 'menu.php';
			function dataFilter($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>

		<!-- One -->
			<section id="main" class="" >
				<div class="container">
		<div class = "marg"></div>
						<h2 class = "text-center">Welcome to digital market</h2>

				<?php
					if(isset($_GET['n']) AND $_GET['n'] == 1):
				?>
					<h3>Select Filter</h3>
					<form method="GET" action="productMenu.php?">
						<input type="text" value="1" name="n" style="display: none;"/>
						<center>
							<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<div class="select-wrapper" style="width: auto" >
									<select name="type" id="type" required style="background-color:white; color: black;">
										<option value="all" style="color: black;">List All</option>
										<option value="fruit" style="color: black;">Fruit</option>
										<option value="vegetable" style="color: black;">Vegetable</option>
										<option value="grain" style="color: black;">Grains</option>
									</select>
							  	</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<input class="button special" type="submit" value="Go!" />
							</div>
							<div class="col-sm-4"></div>
						</div>
						</center>
					</form>
					</section>
				
				<?php endif; ?>
				<section id="two" class="wrapper style2 align-center">
				<div class="container">
					<div class="row">
				
				<?php
					if(!isset($_GET['type']) OR $_GET['type'] == "all")
					{
					 	$sql = "SELECT * FROM fproduct WHERE 1";
					}
				    if(isset($_GET['type']) AND $_GET['type'] == "fruit")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Fruit'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "vegetable")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Vegetable'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "grain")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Grains'";
					}
					$result = mysqli_query($conn, $sql);

					?>
					<?php
						while($row = $result->fetch_array()):
							$picDestination = "images/productImages/".$row['pimage'];
						?>
						<section id="two" >
						<a href="review.php?pid=<?php echo $row['pid'] ;?>" > 
						<div class="col-md-3">

					<div class="thumbnail">
							<img src="<?php echo $picDestination;?>" class="img-responsive" title="<?php echo $row['product'].'';?>" alt="<?php echo $row['product'].'';?>">
				   <div class="caption">
						<h3  ><?php echo $row['product'].'';?></h3>
						<h5 class=""><b>Type : </b><?php echo $row['pcat'].'';?></h5>
						<h5 class=""><b>Price : </b><?php echo "#".$row['price'];?></h5>
						</div>	
					</div>
					</section
				</div>
					</a>
		
						
				
				</section>
						<?php endwhile;	?>

</div>
	</body>
</html>
