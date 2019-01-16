<?php
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

$i = 0;
while($i < 2){
    echo $arr4[$i]['title'] . ' - ' . $arr4[$i]['price'];
    echo '<br>';
    $i++;
}
?>