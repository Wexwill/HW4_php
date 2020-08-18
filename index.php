<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW 4</title>
</head>
<body>
<?php

    echo 'TASK 1 <br />';
        $string1 = 'minsk';
        echo strtoupper($string1);
    echo '<hr />';

    echo 'TASK 2 <br />';
        $date = '31-12-2030';
        $arr_date = explode('-', $date);
        echo $arr_date[2] . '.' . $arr_date[1] . '.' . $arr_date[0];
    echo '<hr />';

    echo 'TASK 3 <br />';
        $string2 = 'london is the capital of great britain';
        echo ucwords($string2);
    echo '<hr />';

    echo 'TASK 4 <br />';
        $st = 2 ** 10;
        echo $st;   
    echo '<hr />';

    echo 'TASK 5 <br />';
        $string3 = 'abc abc abc';
        echo strpos($string3, 'b');
    echo '<hr />';

    echo 'TASK 6 <br />';
        $str4 = 'abc abc abc';
        echo strpos($str4, 'b', 3);   
    echo '<hr />';

    echo 'TASK 7 <br />';
        $str4 = 'html css php';
        echo '<pre>' . print_r(explode(' ', $str4), true) . '</pre>';
    echo '<hr />';

    echo 'TASK 8 <br />';
        $str5 = '1234567890';
        echo '<pre>' . print_r(str_split($str5, 2), true) . '</pre>';
    echo '<hr />';

    echo 'TASK 9 <br />';
        $str6 = '0123456789';
        echo str_shuffle($str6);
    echo '<hr />';

    echo 'TASK 10 <br />';
        $str7 = 'html, <b>php</b>, js';
        echo strip_tags($str7);
    echo '<hr />';

    echo 'TASK 11 <br />';
        echo date("d.m.Y G:i:s", strtotime('23 september 2031, 12:59:59'));
    echo '<hr />';

    echo 'TASK 12 <br />';
        date_default_timezone_set('Europe/Minsk');
        echo date("G:i:s d.m.Y");
    echo '<hr />';

    echo 'TASK 13 <br />';
        $a = date("w", mktime(0, 0, 0, 9, 1, 2010));
        $b = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
        echo $b[$a];
    echo '<hr />';

    echo 'TASK 14 <br />';
        echo date("t", time());
    echo '<hr />';

    echo 'TASK 15 <br />';
        echo date("Y-m-d / d.m.Y / d.m.y / H:i:s");
    echo '<hr />';

    echo 'TASK 16 <br />';
        $date = date('Y-m-d', strtotime('+2 days')); // '+1 month 3 days'   '+1 year'    '-3 days'
        echo $date;
    echo '<hr />';

    echo 'TASK 17 <br />';
        $password = '123';
        if (strlen($password) >= 5 && strlen($password) <= 10) echo 'Пароль подходит';
        else echo 'Пароль НЕ подходит';
    echo '<hr />';

    echo 'TASK 18 <br />';
        $str8 = 'ajf38u19fjlamfp1902rj219f12f';
        echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str8);
    echo '<hr />';

    echo 'TASK 19 <br />';
        echo sqrt(245);
    echo '<hr />';

    echo 'TASK 20 <br />';
        echo max(4, -2, 5, 19, -130, 0, 10) . '<br />';
        echo min(4, -2, 5, 19, -130, 0, 10);
    echo '<hr />';

    echo 'TASK 21 <br />';
        echo mt_rand(1,100);
    echo '<hr />';

    echo 'TASK 22 <br />';
        $arr = ['Привет', ',', ' мир', '!'];
        $text = implode('', $arr);
        echo $text;
    echo '<hr />';

    echo 'TASK 23 <br />';
        $arr = [1,42,61,326,7,43,2];
        $sum = 0;
        foreach ($arr as $value) {
            $sum += $value;
        }
        echo $sum;
    echo '<hr />';

    echo 'TASK 24 <br />';
        $arr = [ 'ru'=> ['голубой', 'красный', 'зеленый'], 'en'=> ['blue', 'red', 'green'], ];
        echo $arr['ru'][0];
    echo '<hr />';

    echo 'TASK 25 <br />';
        $arr = [2, 5, 3, 9];
        $result =  $arr[0] * $arr[1] + $arr[2] * $arr[3];
        echo $result;
    echo '<hr />';

    echo 'TASK 26 <br />';
        $arr = [
            1 => 'Понедельник',
            2 => 'Вторник',
            3 => 'Среда',
            4 => 'Четверг',
            5 => 'Пятница',
            6 => 'Суббота',
            7 => 'Воскресенье',      
        ];
        echo $arr[date('w')];
    echo '<hr />';

    echo 'TASK 27 <br />';
        for ($i = 0; $i <= 30; $i++) {
            $arr[$i] = rand(1,10);
        }
        print_r($arr);
    echo '<hr />';

    echo 'TASK 28 <br />';
        $arr = [1, 2, -1, -2, 3, -3];
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i] = -$arr[$i];
        }
        print_r($arr);
    echo '<hr />';

    echo 'TASK 29 <br />';
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $sum = 0;
        $i = 0;
        foreach ($arr as $value) {
            $sum += $value;
            $i++;
            if ($sum > 10) break;
        }
        echo $i;
    echo '<hr />';

    echo 'TASK 30 <br />';
        $arr = [[1, 2, 3], [4, 5], [6]];
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                $sum += $arr[$i][$j];
            }
        }
        echo $sum;
    echo '<hr />';

    echo 'TASK 31 <br />';
        $array = [1,1,1,1,2,2,3,3,3];
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $array[$i-1]) continue;
            else echo $array[$i];
        }
    echo '<hr />';

    

    echo 'TASK 34 <br />';
        $str = '1234567890';
        $a = 0;
        $b = 1; 
        while(substr($str, $a, $b)){
        $arr[$b - 1] = substr($str, $a, $b);
        $a = $a + $b;
        $b++;
        }
        echo '<pre>' . print_r($arr, true) . '</pre>';
    echo '<hr />';

?>
</body>
</html>