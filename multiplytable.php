<?php
$i = 1;
echo "<table border=\"1\">\n";
while($i <= 9){
    echo "\t<tr>\n";
    $n = 1;
    while($n<=9){
        echo "\t\t<td>\\\$i*\\\$n=" . $i*$n . "</td>\n";
        $n++;
    }
    //тут  баловался с экарнированием.
    echo "\t</tr>\n";
    $i++;
}
echo '</table>';
?>