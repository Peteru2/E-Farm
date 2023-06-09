<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = dataFilter($_POST['name']);
	$mobile = dataFilter($_POST['mobile']);
	$user = dataFilter($_POST['uname']);
	$email = dataFilter($_POST['email']);
	$pass =	dataFilter(password_hash($_POST['pass'], PASSWORD_BCRYPT));
	$hash = dataFilter( md5( rand(0,1000) ) );
	$category = dataFilter($_POST['category']);
    $addr = dataFilter($_POST['addr']);

	$_SESSION['Email'] = $email;
    $_SESSION['Name'] = $name;
    $_SESSION['Password'] = $pass;
    $_SESSION['Username'] = $user;
    $_SESSION['Mobile'] = $mobile;
    $_SESSION['Category'] = $category;
    $_SESSION['Hash'] = $hash;
    $_SESSION['Addr'] = $addr;
    $_SESSION['Rating'] = 0;
}


require '../db.php';

$length = strlen($mobile);

if($length != 11)
{
	$_SESSION['message'] = "Invalid Mobile Number !!!";
	header("location: error.php");
	die();
}

if($category == 1)
{
    $sql = "SELECT * FROM farmer WHERE femail='$email'";

    $result = mysqli_query($conn, "SELECT * FROM farmer WHERE femail='$email'") or die($mysqli->error());

    if ($result->num_rows > 0 )
    {
        $_SESSION['message'] = "User with this email already exists!";
        //echo $_SESSION['message'];
        header("location: error.php");
    }
    else
    {
    	$sqli = "INSERT INTO members (Name, Username, Password, Hash, Mobileno, Email)
    			VALUES ('$name','$user','$pass','$hash','$mobile','$email')";
                mysqli_query($conn, $sqli);

        $sql = "INSERT INTO farmer (fname, fusername, fpassword, fhash, fmobile, femail, faddress,fcategory)
    			VALUES ('$name','$user','$pass','$hash','$mobile','$email','$addr','$category')";

    	if (mysqli_query($conn, $sql))
    	{
    	    $_SESSION['Active'] = 0;
            $_SESSION['logged_in'] = true;

            $_SESSION['picStatus'] = 0;
            // $_SESSION['picExt'] = png;

            $sql = "SELECT * FROM farmer WHERE fusername='$user'";
            $result = mysqli_query($conn, $sql);
            $User = $result->fetch_assoc();
            $_SESSION['id'] = $User['fid'];

            if($_SESSION['picStatus'] == 0)
            {
                $_SESSION['picId'] = 0;
                $_SESSION['picName'] = "profile0.png";
            }
            else
            {
                $_SESSION['picId'] = $_SESSION['id'];
                $_SESSION['picName'] = "profile".$_SESSION['picId'].".".$_SESSION['picExt'];
            }

            $_SESSION['message'] =

                     "Confirmation link has been sent to $email, please verify
                     your account by clicking on the link in the message!";

            $subject = "Account Verification";
            $message_body = "
                     Hello '.$user.',
         
                     Thank you for signing up!
                     Please click this link to activate your account:
                    
             http://localhost/E-Farm-Mana/Login/verify.php?email=".$email."&hash=".$hash;
                     
                    
              $mail = new PHPMailer(true);       
              $mail -> isSMTP();
              $mail ->Host ='smtp.gmail.com';
              $mail->SMTPAuth = true;

              $mail->Username = "efarm2023@gmail.com";
              $mail->Password = "zwophkdrfdzkbgon";
              $mail->SMTPSecure = 'ssl';
              $mail->Port = 465;

              $mail->setFrom('efarm2023@gmail.com');
              $mail->addAddress($email);
              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body = $message_body;
              
              $mail-> send();
                    
            header("location: profile.php");
    	}
    	else
    	{
    	    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    	    $_SESSION['message'] = "Registration failed!";
            header("location: error.php");
    	}
    }
}

else
{
    $sql = "SELECT * FROM buyer WHERE bemail='$email'";

    $result = mysqli_query($conn, "SELECT * FROM buyer WHERE bemail='$email'") or die($mysqli->error());

    if ($result->num_rows > 0 )
    {
        $_SESSION['message'] = "User with this email already exists!";
        //echo $_SESSION['message'];
        header("location: error.php");
    }
    else
    {
    	$sql = "INSERT INTO buyer (bname, busername, bpassword, bhash, bmobile, bemail, baddress,bcategory)
    			VALUES ('$name','$user','$pass','$hash','$mobile','$email','$addr','$category')";

    	if (mysqli_query($conn, $sql))
    	{
    	    $_SESSION['Active'] = 0;
            $_SESSION['logged_in'] = true;

            $sql = "SELECT * FROM buyer WHERE busername='$user'";
            $result = mysqli_query($conn, $sql);
            $User = $result->fetch_assoc();
            $_SESSION['id'] = $User['bid'];

            $_SESSION['message'] =

                     "Confirmation link has been sent to $email, please verify
                     your account by clicking on the link in the message!";

            $to      = $email;
            $subject = "Account Verification";
            $message_body = "
            Hello '.$user.',
            <p>
            Thank you for signing up! q
            Please click this link to activate your account:
            http://localhost/E-Farm-Mana/Login/verify.php?email=".$email."&hash=".$hash."</p>";

            $mail = new PHPMailer(true);       
            $mail -> isSMTP();
            $mail ->Host ='smtp.gmail.com';
            $mail->SMTPAuth = true;

            $mail->Username = "efarm2023@gmail.com";
            $mail->Password = "zwophkdrfdzkbgon";
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('efarm2023@gmail.com');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message_body;
            
            $mail-> send();
                  
          header("location: profile.php");
    
        }
    	else
    	{
    	    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    	    $_SESSION['message'] = "Registration not successfull!";
            header("location: error.php");
    	}
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
