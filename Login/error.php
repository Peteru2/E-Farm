<?php session_start();?>
<!DOCTYPE html>
    <html >
     <head>
        <title>E-Farm</title>
        
    </head>

    <body>
        <?php
            require 'menu.php';
        ?>

        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <h2>ERROR</h2>
                </header>
                <p>
                    <?php
                        $page = $_SERVER['HTTP_REFERER'];
                        if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                        }
                        else
                        {
                            header("Location: ../index.php");
                        }
                    ?>
                </p><br />
                <a href ="<?= $page ?>" class="button special">Retry</a>


    	<?php $_SESSION['message'] = ""; ?>

    </body>
</html>
