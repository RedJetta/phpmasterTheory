<?php
$arr1 = array('Ivanov', 'Petrov', 'Vasechkin');
$arr2 = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'description' => 'Desc'
    ],
    [
        'title' => 'IPad',
        'price' => '900',
        'description' => 'AppleGoods'
    ]

];


echo count($arr1);//считает количество
echo '<br>';
echo count($arr2, 1); //Единица тут обозначает необязательный параметр COUNT_RECURSIVE
echo '<br>';

$array1 = array("a" => "green", "red", "blue", "red",2,4);
$array2 = array("b" => "green", "yellow", "red",4);
$result = array_diff($array1, $array2); //есть в первои нет во втором
$result2 = array_intersect($array1, $array2); //есть впервом и втором
$resmerge = array_merge($array1, $array1); //cливает два в один
$resrand = array_rand($array1,2); //hвыводит рандомное значение. Доп: количество рандомных
$resrev = array_reverse($array1, true); //переворачивает массив. ПРи необязательном тру он сохранит ключи. при вфолс перезапишет
echo '<pre>';
print_r($result);
print_r($result2);
print_r($resmerge);
print_r($resrand);
print_r($resrev);
echo '</pre>';


$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}


$reskeys = array_keys($arr1);
$resval = array_values($arr2);
echo '<pre>';
print_r($reskeys);
print_r($resval);
echo '</pre>';

$city = 'Minsk';
$state = 'South-West';
$street = 'Rafieva';

$rescompact = compact('city', 'state', 'street'); //захуйнул переменные и их значения в массив
echo '<pre>';
print_r($rescompact);
echo '</pre>';


$array5 = [
    'city' => 'Gomel',
    'state' => 'Leninsky'
];
extract($array5); //хуячит ключи массива в название переменных а значения записывает в эти переменные. Раюотает тллько с ассоциацивными массивами
echo $state;

//arsort сортирует в обратном порядке по значениям сохраняя ключи
//asort сортирует в прямом порядке сохраняя ключт
//rsort сортирует в обратном порядке перезаписывая ключи
//sort сортирует в прямом порядке перезаписывая ключи
//krsort сортирует по ключам в обратном порядке
//ksort сортирует по ключам в прямом порядке
?>