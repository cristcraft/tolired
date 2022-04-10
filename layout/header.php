<?php
$url = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/6799570f9e.js" crossorigin="anonymous"></script>
    <?php if($url !== 'index.php'){?>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <?php }else{?>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <?php } ?>
</head>

<body>
    <header>
        <nav>
            <?php 
                if($url !== 'index.php'){
            ?>
            <div class="phone-menu">
                <i class="fas fa-bars menu"></i>
                <i class="fas fa-times hidde exit"></i>
            </div>
            <div class="img">
                <img src="../img/logo.jpeg" alt="">
            </div>
            <div class="ul-menu">
                <ul>
                    <li class="item"><a href="/">inicio</a></li>

                    <li class="<?php if($url == 'about.php'){echo 'item active';};?>"><a
                            href="../router.php?page=about">sobre nosotros</a></li>

                    <li class="<?php if($url == 'plans.php'){echo 'item active';};?>"><a
                            href="../router.php?page=plans">planes</a></li>
                </ul>
            </div>
            
            <?php
                }else{
            ?>
            <div class="phone-menu">
                <i class="fas fa-bars menu"></i>
                <i class="fas fa-times hidde exit"></i>
            </div>
            <div class="img">
                <img src="./img/logo.jpeg" alt="">
            </div>
            <div class="ul-menu">
                <ul>
                    <li class="item active"><a href="#">inicio</a></li>
                    <li class="item"><a href="./router.php?page=about">sobre nosotros</a></li>
                    <li class="item"><a href="./router.php?page=plans">planes</a></li>
                </ul>
            </div>
            <?php
                }
            ?>
        </nav>
    </header>