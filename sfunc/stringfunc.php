<?php
$str = 'Ivanov Ivan Ivanovich Petr Zaebal Sverlit';
$date = explode(' ', $str, 4); //делит строку в массив
print_r($date);

echo '<br>';

$string = implode(' | ', $date); //хуйнул массив в строку
print $string;

echo '<br>';

$str1 = "\tVasechkin";
echo trim($str1);
//ltrim rtrim в сумме создают trim. Они убирают говно слева и справа от строки соответственно
echo '<br>';
echo md5($str); //Хеширует строку
echo '<br>';
echo md5(md5($str)); //двойное хеширование
echo '<br>';
$str2 = "Hello\nworld\n";
echo nl2br($str2); //Ставит энтеры где пользователь их ёбнул,иботак они сотруться
echo '<br>';
echo str_replace('Ivan', '****', $str);
echo '<br>';
$comment = '[i]Hello![/I] My name is [b]Maslina[/b]'; //Теги, использующиеся в комментах на форумах
$comment = str_replace('[b]', '<b>', $comment);
$comment = str_replace('[/b]', '</b>', $comment); //Ищем и заменяем. То если дохуя чё менять, то неудобно
echo $comment . '<br>';
$search = ['[i]','[/i]','[b]','[/b]'];
$replace = ['<i>','</i>','<b>','</b>']; //Тогда тут захуйнули два массива,в которых соответственно вписали что на что менять
$comment = str_replace($search, $replace, $comment);
echo $comment . '<br>';
$comment = str_ireplace($search, $replace, $comment);
echo $comment . '<br>';  //str_ireplace заменяет символы без учёта регистра


$str3 ="&amp<i>Hello!</i> My name is <b>Maslina</b><script>alert('XSS')</script>";
echo strip_tags($str3) . '<br>'; //Вырезает нахуй все хтмл теги
echo '<pre>' . strip_tags($str3, '<b>') . '</pre>'; //Указываем теги, которые не удалять
$str4 = 'Хуесос';
echo strlen($str4) . '<br>'; //возвращает количество байт в строке
echo mb_strlen($str4, 'utf-8') . '<br>'; //работает с мультибайтными кодировками, тип кириллица
echo mb_strpos($str4, 'с', 0, 'utf-8') . '<br>';// та же дичь только для кирилицы, третий параметр это начальный индекс с которого будет работаь функция
echo strpos($str, 'a') . '<br>';//даёт индекс первого найденного по параметру элемента строки

if (mb_strpos($str4, 'Х', 0, 'utf-8')) echo 'OK';
else echo 'NO'; //выведет NO потому что индекс Х = 0, а в ифе 0 преобразуется в булев тип фолс
if (mb_strpos($str4, 'Х', 0, 'utf-8') !== false) echo 'OK';
else echo 'NO';

echo strtoupper($str);//Переведёт в верхний регистр
echo strtolower($str);//Переведёт в нижний регистр. Обе есть для двубайтовых
$str5 = 'Hello world!';
echo '<br>';
echo substr($str5, 2,5) . '<br>';//Вырезаем из строки с 2 символа берём 5. Есть двубайтовая

echo htmlspecialchars($str3, ENT_QUOTES, 'utf-8', false) . '<br>'; // делает так чтобы теги просто отображались и не отрабатывали. Они заменяются мнемоникой. послений параметр если false - не приобразовывает уже преобразованные сущноси
$str6 = '&amp;amp&lt;i&gt;Hello!&lt;/i&gt; My name is &lt;b&gt;Maslina&lt;/b&gt;&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;';
echo htmlspecialchars_decode($str6); //преобразовывает сущности в хтмл сущности
?>