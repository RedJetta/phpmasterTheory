<?php
error_reporting(-1);

$arr = array('Ivanov', 'Petrov');
var_dump($arr);
echo "<pre>";
print_r($arr); //функция для распечатывания массива
echo "</pre>"; //теги пре просто перехуяривают вывод красиво
echo $arr[1]; //обратились к элементу с индексом 1
echo $arr{1}; //аналог нахуй не нужный вроде как но хз

$arr[] = 'Pupkin'; //Добавили элемент в конец массива
$arr[15] = 'Vasya'; //Добавили васю с ключом 15
$arr[0] = 'Linnik'; //Перезаписали элемент с индексом 0

echo "<pre>";
print_r($arr);
echo "</pre>";

$arr2 = [
    1,
    [
        'banana',
        'potatoe',
        'apple'
    ],
    3,
    'cat',
    5
];  //многомерный массив, заданный другим способом
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo $arr2[1][1];

$arr3 = [
    2 => 'Ivanov',
    'Petrov',
    5 => 'Sidorov'
];
echo "<pre>";
print_r($arr3);
echo "</pre>";
echo $arr3[5];

$arr4 = [
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
echo "<pre>";
print_r($arr4);
echo "</pre>";
echo $arr4[0]['title'] . '-';
echo $arr4[0]['price'];
echo '<br>';
echo $arr4[1]['title'] . '-';
echo $arr4[1]['price'];


?>