<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<title>E-Farm</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet">
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<!-- <link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" /> -->
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />		
</head>

			<header id="header">
				<h1><a href="index.php">E-Farm</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
						<li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> Blog</a></li>
						<li><a href="about.php"><span class="glyphicon glyphicon-tint">About</a></li>
					</ul>
				</nav>
			</header>
	
	<div id="content">
    <span class="slide"><a href="#" onclick="openBar()"><i class="fa fa-bars" id="hide"></i></a> </span>
     <div  id="menu" class="nav">
        				<a href="#" class="clos" onclick="closeBar()" style="padding: 5px 5px; " ><i class="fa fa-times"></i></a>
						<a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
						<a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> MyCart</a>
						<a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a>
						<a href="market.php"><span class="glyphicon glyphicon-grain"></span> Digital-Market</a>
						<a href="blogView.php"><span class="glyphicon glyphicon-comment"></span> Blog</a>
						<a href="about.php"><span class="glyphicon glyphicon-tint"></span>About</a>

	
	</div>
</div>

<script>
 function openBar(){
                document.getElementById('menu').style.width = '200px';
                document.getElementById('content').style.marginLeft='200px';
                document.getElementById('hide').style.visibility = 'hidden';
            }
            function closeBar(){
                document.getElementById('menu').style.width='0px';
                document.getElementById('content').style.marginLeft='0px';
                document.getElementById('hide').style.visibility = 'visible';
            }
	
</script>

	</body>
</html>
