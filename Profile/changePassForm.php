<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="../bootstrap\css\bootstrap.css" rel="stylesheet">
		<link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="../stylesheet" href="login.css"/>
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="../indexfooter.css" />
</head>
<body>


    
<div id="id02">

  <form class=" animate" action="changePass.php" method='POST'>
  

    <div class="container">

<section>
							<h3>Change Password</h3>
							<form method="post" action="changePass.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="currPass" id="currPass" value="" placeholder="Current Password" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="newPass" id="newPass" value="" placeholder="New Password" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="conNewPass" id="conNewpass" value="" placeholder="Confirm New Password" required/>
			                        </div>
								</div>
	
                                <div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit" class="special" /></li>
									</div>
							</center>
							</form>
						</section>

    </div>
    </div>
  </form>
</div>
    
</body>
</html>




