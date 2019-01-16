<?php

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b); //создаёт массив у которого ключи это значения первого массива, а значения ключей - значения второго массива

print_r($c);


$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);//извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.
$fruit = array_pop($stack);//извлекает и возвращает значение последнего элемента массива array, уменьшая размер array на один элемент.
print_r($stack);

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);//Принимает входной массив array и возвращает новый массив без повторяющихся значений.
print_r($result);

$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");//добавляет переданные в качестве аргументов элементы в начало массива array
array_push($queue, "potatoe", "tomato");//добавляет переданные значения в конец массива array
print_r($queue);

$input1 = array("oranges", "apples", "pears");
$flipped = array_flip($input1); //возвращает массив (array) наоборот, то есть ключи массива array становятся значениями, а значения массива array становятся ключами
print_r($flipped);

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {          //Проверяет, присутствует ли в массиве значение
    echo "Нашел Irix";
}
if (in_array("mac", $os)) {         //Регистрозависима, следовательно тут не найдёт
    echo "Нашел mac";
}


$info = array('кофе', 'коричневый', 'кофеин');

// Составить список всех переменных.Присваивает переменным из списка значения подобно массиву
list($drink, $color, $power) = $info;
echo "$drink - $color, а $power делает его особенным.\n";

// Составить список только некоторых из них
list($drink, , $power) = $info;
echo "В $drink есть $power.\n";

// Или пропустить все, кроме третьей
list( , , $power) = $info;
echo "Мне нужен $power!\n";

// list() не работает со строками
list($bar) = "abcde";
var_dump($bar); // NULL
?>