<?php
	session_start();
	require 'db.php';
    if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}
    $bid = $_SESSION['id'];
    if(isset($_GET['flag']))
    {
        $pid = $_GET['pid'];

        $sql = "INSERT INTO mycart (bid,pid)
               VALUES ('$bid', '$pid')";
        $result = mysqli_query($conn, $sql);
    }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>E-Farm: My Cart</title>
		
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
			<section id="main" class="wrapper style1 align-center" >
				<div class="container">
						<h2>My Cart</h2>

				<section id="two" class="wrapper style2 align-center">
				<div class="container">
					
					<?php
                        $sql = "SELECT * FROM mycart WHERE bid = '$bid'";
                        $result = mysqli_query($conn, $sql);
						while($row = $result->fetch_array()):
                            $pid = $row['pid'];
                            $sql = "SELECT * FROM fproduct WHERE pid = '$pid'";
                            $result1 = mysqli_query($conn, $sql);
                            $row1 = $result1->fetch_array();
							$picDestination = "images/productImages/".$row1['pimage'];
						?>
							<div class="col-md-4 col-sm-3 col-xs-12">
							<section>
							<strong><h2 class="title" style="color:black; "><?php echo $row1['product'].'';?></h2></strong>
							<a href="review.php?pid=<?php echo $row1['pid'];?>"> <img class="image fit" src="<?php echo $picDestination;?>" alt="" /> </a>

							<div style="align: left">
							<blockquote><?php echo "Type : ".$row1['pcat'].'';?><br><?php echo "Price : ".$row1['price'].' /-';?><br></blockquote>

						</section>
						</div>

                    <?php endwhile;	?>



					</div>

			</section>
					</header>

			</section>

	</body>
</html>
