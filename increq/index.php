<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum matan is hell</p>

    <?php include 'inc/inc.php' ?>  //если проебан инклюд, то следующий код сработает
    <?php require 'inc.php'?>  //если проёбан реквайр, то слдующий код не сработает. Если добавлять once то структура будет просто проверять, если файл уже был подключён, то иди нахуй
    <p>Lorem ipsum fan is hell</p>
</body>
</html>