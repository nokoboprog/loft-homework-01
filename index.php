<?php

//Задание #1

$name = 'Курманбек';
$age = 41;

echo "Меня зовут: $name.<br>";
echo "Мне $age год.<br>";
echo "\"!|\\/'\"\\<br>";

//Задание #2

const IMG_ALL = 80;
const IMG_BY_MARKERS = 23;
const IMG_BY_PENCILS = 40;
const IMG_BY_PAINTS = IMG_ALL - IMG_BY_MARKERS - IMG_BY_PENCILS;

echo '<br>Дана задача: ';
echo 'На школьной выставке <b>' . IMG_ALL . '</b> рисунков. <b>' . IMG_BY_MARKERS;
echo '</b> из них выполнены <b>фломастерами, ' . IMG_BY_PENCILS . ' карандашами</b>, ';
echo 'а остальные — <b>красками</b>. Сколько рисунков, выполненные красками, на школьной выставке?<br>';

echo 'Решение задачи: ';
echo 'На школьной выставке <b>красками</b> выполнено <b>' . IMG_BY_PAINTS . '</b> рисунков.<br>';
echo '<br>';

//Задание #3

$age = mt_rand(-100, 100);

if (18 <= $age && $age <= 65) {
    echo 'Вам еще работать и работать.';
} elseif (65 < $age) {
    echo 'Вам пора на пенсию.';
} elseif (1 <= $age && $age <= 17) {
    echo 'Вам ещё рано работать.';
} else {
    echo 'Неизвестный возраст';
}
echo '<br><br>';

//Задание #4

$day = mt_rand(1, 10);

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день.';
        break;
    case 6:
    case 7:
        echo 'Это выходной день.';
        break;
    default:
        echo 'Неизвестный день.';
}
echo '<br><br>';

//Задание #5

$bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015];
$toyota = ['model' => 'Mark-2', 'speed' => 130, 'doors' => 3, 'year' => 2010];
$opel = ['model' => 'Vectra', 'speed' => 110, 'doors' => 5, 'year' => 2008];
$total_cars = ['BMW' => $bmw, 'Toyota' => $toyota, 'Opel' => $opel];

foreach ($total_cars as $key => $value) {
    echo "CAR $key<br>";
    foreach ($value as $v) {
        echo "$v ";
    }
    echo '<br>';
}
echo '<br><br>';

//Задание #6

echo '<table style="border: 1px solid #000">';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $sum = $i * $j;
        if ($i % 2 === 0 && $j % 2 === 0) {
            echo "<td style='border: 1px solid #000; text-align: center'>($sum)</td>";
        } elseif ($i % 2 === 1 && $j % 2 === 1) {
            echo "<td style='border: 1px solid #000; text-align: center'>[$sum]</td>";
        } else {
            echo "<td style='border: 1px solid #000; text-align: center'>$sum</td>";
        }
    }
    echo '</tr>';
}
echo '</table>';
