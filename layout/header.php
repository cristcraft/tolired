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
    <?php if($url !== 'index.php'){?>
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/navbar.css">
    <?php }else{?>
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/navbar.css">
    <?php } ?>
</head>
<body>
    <header>
        <nav>
            <div class="img">
                <img src="" alt="LOGO">
            </div>
            <?php 
                if($url !== 'index.php'){
            ?>
                    <ul>
                        <li class="item"><a href="/">inicio</a></li>
                        <li class="item"><a href="../router.php?page=about">sobre nosotros</a></li>
                        <li class="item"><a href="../router.php?page=plans">planes</a></li>
                    </ul>
            <?php
                }else{
            ?>
                    <ul>
                        <li class="item active"><a href="#">inicio</a></li>
                        <li class="item"><a href="./router.php?page=about">sobre nosotros</a></li>
                        <li class="item"><a href="./router.php?page=plans">planes</a></li>
                    </ul>
            <?php
                }
            ?>
        </nav>
    </header>

