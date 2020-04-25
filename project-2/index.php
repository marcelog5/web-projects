<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="author" content="marcelog5"/>
    <meta name="keywords" content="site,dogs"/>
    <meta name="description" content="project-2"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH;?>css/style.css" rel="stylesheet"/>
    <title>project-2</title>
</head>
<body>
    
    <header>
        <div class="container">
            <div class="logo">
                <h2>Meu WebSite</h2>
            </div><!--logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>about">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>services">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contact">Contato</a></li>
                </ul>
            </nav><!--menu-desktop-->

            <nav class="menu-mobile">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>about">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>services">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contact">Contato</a></li>
                </ul>
            </nav><!--menu-mobile-->
        </div><!--container-->
        <div class="clear"></div><!--clear-->
    </header>

    <?php

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            $page404 = true;
            include('pages/404.php');
        }

    ?>

    <footer <?php if(isset($page404) && $page404 == true) echo 'class="fixed"'?>>
        <div class="container">
            <p>Todos os direitos reservados</p>
        </div><!--container-->
    </footer>

    <script src="<?php echo INCLUDE_PATH;?>js/jquery-3.5.0.min.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>

    <?php 
        if($url == 'contact'){
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx8sh_HlLuleKqI2-ujHXj3P4jZfhnSUQ"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/initMaps.js"></script>
    <?php
        }
    ?>

</body>
</html>
