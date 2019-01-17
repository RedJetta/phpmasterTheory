<?php
//echo date_default_timezone_get();
//date_default_timezone_set('Europe/Amsterdam');
//echo date_default_timezone_get();
//echo date('Y-m-d H:i:s', time() + 60*60*24);
//phpinfo();
//$date = getdate();
//print_r($date);
//echo date('Y-m-d H:i:s', strtotime("+1 day 2 hours"));
echo time() . '<br>';
echo mktime(date("H"), date("i")+2, date("s")+1);
?>