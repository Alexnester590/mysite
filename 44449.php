<!DOCTYPE html>
<html lang='ru'>
<head>
<title>Простейший PHP-сценарий</title>
<meta charset='utf-8'>
</head>
<body>
<h1>Здравствуйте!</h1>
<p>
<?php
  // Вычисляем текущую дату в формате "день.месяц год"
  $dat = date("d.m y");
  // Вычисляем текущее время
  $tm = date("h:i:s");
  # Выводим их
  echo "Текущая дата: $dat года<br />\n";
  echo "Текущее время: $tm<br />\n";
  # Выводим цифры
  echo "А вот квадраты и кубы первых 5 натуральных чисел:<br />\n";
  echo "<ul>\n";
  for ($i = 1; $i <= 5; $i++) {
    echo "<li>$i в квадрате = " . ($i * $i);
    echo ", $i в кубе = " . ($i * $i * $i) . "</li>\n";
  }
 
  require 'vendor/autoload.php';

  ParseClient::initialize( kza8RK6DdjO0fmGSHUnPkNmxOHdftAc9968sVMAM, 7DTuovRnZHFxLh297IQmwP7V7wAFk4jXevcwrM2A, kkBI2lr93RQ7v7QhL33WhDy1irfb5oBaghtrQvKm);
  ParseClient::setServerURL('https://parseapi.back4app.com','/');


?>
</ul>
</p>
</body></html>
