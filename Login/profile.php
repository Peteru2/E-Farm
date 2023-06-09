<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
    <html >
     <head>
        <title>E-Farm </title>
       
    </head>
    <?php
            require 'menu.php';
        ?>
    <body>
      

        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <h2>Welcome</h2>
                </header>
                <p>
                <?php
                    if ( isset($_SESSION['message']) )
                    {
                        echo $_SESSION['message'];
                        unset( $_SESSION['message'] );
                    }
                ?>
                </p>

                <?php
                    $sql = "SELECT * FROM members WHERE Email='$email' AND Active='0'";
                     $act = mysqli_query($conn,$sql);
                    if ($act)
                    {
                        echo
                        "<div >
                            Account is not verified! Please confirm your email by clicking
                            on the email link!
                        </div>";
                    }

                ?>
                <div class="email-veri">
                <h2 ><?php echo $name; ?></h2>
                  <p ><?= $email ?></p>
                </div>
                 

                 <?php if($_SESSION['Category'] == 1): ?>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <a href=../profileView.php class="button special">My Profile</a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="button special">LOG OUT</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <a href=../market.php class="button special">Digital Market</a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="button special">LOG OUT</a>
                        </div>
                    </div>

                <?php endif; ?>


    </body>
</html>
