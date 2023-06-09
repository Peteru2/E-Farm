<?php
 	session_start();
	require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$productType = $_POST['type'];
		$productName = dataFilter($_POST['pname']);
		$productInfo = $_POST['pinfo'];
		$productPrice = dataFilter($_POST['price']);
		$fid = $_SESSION['id'];
		if (empty($productType)||empty($productName)||empty($productInfo)||empty($productPrice)){
			$_SESSION['message'] = "Sorry, not all field was filled";
		}else{
		$sql = "INSERT INTO fproduct (fid, product, pcat, pinfo, price)
			   VALUES ('$fid', '$productName', '$productType', '$productInfo', '$productPrice')";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			$_SESSION['message'] = "Unable to upload Product !!!";
			header("Location: Login/error.php");
		}
		else {
			$_SESSION['message'] = "successfull !!!";
		}
	}
		$pic = $_FILES['productPic'];
		$picName = $pic['name'];
		$picTmpName = $pic['tmp_name'];
		$picSize = $pic['size'];
		$picError = $pic['error'];
		$picType = $pic['type'];
		$picExt = explode('.', $picName);
		$picActualExt = strtolower(end($picExt));
		$allowed = array('jpg','jpeg','png');

		if(in_array($picActualExt, $allowed))
		{
			if($picError === 0)
			{
				$_SESSION['productPicId'] = $_SESSION['id'];
				$picNameNew = $productName.$_SESSION['productPicId'].".".$picActualExt ;
				$_SESSION['productPicName'] = $picNameNew;
				$_SESSION['productPicExt'] = $picActualExt;
				$picDestination = "images/productImages/".$picNameNew;
				move_uploaded_file($picTmpName, $picDestination);
				$id = $_SESSION['id'];

				$sql = "UPDATE fproduct SET picStatus=1, pimage='$picNameNew' WHERE product='$productName';";

				$result = mysqli_query($conn, $sql);
				if($result)
				{

					$_SESSION['message'] = "Product Image Uploaded successfully !!!";
					header("Location: market.php");
				}
				else
				{
					//die("bad");
					$_SESSION['message'] = "There was an error in uploading your product Image! Please Try again!";
					header("Location: Login/error.php");
				}
			}
			else
			{
				$_SESSION['message'] = "There was an error in uploading your product image! Please Try again!";
				header("Location: Login/error.php");
			}
		}
		else
		{
			$_SESSION['message'] = "You cannot upload files with this extension or not all field are field!!!";
			header("Location: Login/error.php");
		}
	}

	function dataFilter($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>E-Farm</title>
		<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<?php require 'menu.php'; ?>

		<!-- One -->

			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<form method="POST" action="uploadProduct.php" enctype="multipart/form-data">
						<h2 style = "color: black">Enter the Product Information here..!!</h2>
						<br>
				<div class = "row">
				<p>Image of your product...  </p>
					<input type="file" name="productPic"></input>
					<br />
			</div>
				<div class="row">
					  <div class="col-sm-6">
						  <div class="select-wrapper" style="width: auto" >
							  <select name="type" id="type" required style="background-color:white;color: black;">
								  <option value="" style="color: black;">- Category -</option>
								  <option value="Fruit" style="color: black;">Fruit</option>
								  <option value="Vegetable" style="color: black;">Vegetable</option>
								  <option value="Grains" style="color: black;">Grains</option>
								  <option value="Cereals" style="color: black;">Cereals</option>
								  <option value="Fruits" style="color: black;">Fibres</option>
								  <option value="Others" style="color: black;">Others</option>
								  


							  </select>
						</div>
					  </div>
					  <div class="col-sm-6">
						<input type="text" name="pname" id="pname" value="" placeholder="Product Name" style="background-color:white;color: black;" />
					  </div>
				</div>
				<br>
				<div>
					<textarea  name="pinfo" id="pinfo" rows="12" placeholder = "Product Description"></textarea>
				</div>
			<br>
			<p>Please add your currency sign e.g #2000(Naira), $100(Dollar) etc... </p>
			<div class="row">
				
				<div class="col-sm-6">
					  <input type="text" name="price" id="price" value="" placeholder="Price" style="background-color:white;color: black;" />
				</div>
				<div class="col-sm-6">
					<button class="button fit" style="width:auto; color:black;">Submit</button>
				</div>
			</div>
			</form>
		</div>
	</section>

		<script>
			 CKEDITOR.replace( 'pinfo' );
		</script>


<?php 
		include "footer.php";
		?>
	</body>
</html>
