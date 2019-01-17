<?php

//header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="downloaded.txt"');
readfile('inc/text');
die;
//header('HTTP/1.0 404 Not Found');
//header('Location: inc/inc.php');
//header('refresh: 5; url=inc/inc.php');
//exit;
//die;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum matan is hell</p>
<!---->
<!--    --><?php //include 'inc/inc.php' ?><!--  //если проебан инклюд, то следующий код сработает-->
<!--    --><?php //require 'inc.php'?><!--  //если проёбан реквайр, то слдующий код не сработает. Если добавлять once то структура будет просто проверять, если файл уже был подключён, то иди нахуй-->
<!--    <p>Lorem ipsum fan is hell</p>-->
</body>
</html>