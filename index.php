<?php
// Объявление
$name = "Иван";
$age = 25;
$isStudent = true;
$arr = [1, 2, 3];

// Константа
define("SITE_NAME", "MyWebsite");

// Вывод значений
echo "Имя: " . $name . "\n";
echo "Возраст: " . $age . "\n";
echo "Студент: " . $isStudent . "\n";
echo "Название сайта: " . SITE_NAME . "\n";

// Преобразование типов
$numberString = "10";
$number = (int)$numberString;
echo "Преобразованное число: " . $number . "\n";
echo "Тип переменной: " . gettype($number) . "\n";

// Арифметические операции
$num1 = 10;
$num2 = 20;
$result = $num1 === $num2;
echo "Сложение: " . $num2 + $num1 . "\n";
echo "Сравнение: " . $result . "\n";

// Логическое выражение
echo "Логическое выражение: " . 0 + true . "\n";

// Суперглобальная переменная $_SERVER
echo "Информация о сервере: " . $_SERVER['SERVER_NAME'] . "\n";
echo "IP-адрес клиента: " . $_SERVER['REMOTE_ADDR'];
