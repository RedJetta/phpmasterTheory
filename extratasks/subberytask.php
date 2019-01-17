<?php
$str = 'aaabbccccdddefghsskpefujjsjsafffdswwwwwwwww';
echo strlen($str);
$arr = array();
for ($i = 0; $i < strlen($str); $i++){
    $arr[$i] = $str[$i];
}
echo '<pre>';
var_dump($arr);
echo '</pre>';

$final = array();
$counter = 1;
for ($i = 0; $i < count($arr); $i++){
    if($arr[$i] == $arr[$i+1]){
        $counter++;
    }elseif($arr[$i]!=$arr[$i+1]){
        array_push($final, $counter, $arr[$i]);
        $counter = 1;
    }
}

echo '<pre>';
print_r($final);
echo '</pre>';

$finalstr = '';
for ($i = 0; $i < count($final); $i++){
    $finalstr[$i] = $final[$i];
}

echo $finalstr;
?>