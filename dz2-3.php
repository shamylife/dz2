<?php
/**
 * Функция должна принимать переменное число аргументов, но первым
 * аргументом обязательно должна быть строка, обозначающая арифметическое
 * действие, которое необходимо выполнить со всеми передаваемыми аргументами.
 * Остальные аргументы целые и/или вещественные.
 *
 * Например: имя функции someFunction(‘+’, 1, 2, 3, 5.2);
 * Результат: 1 + 2 + 3 + 5.2 = 11.2
 *
 * Дополнительно (не обязательно): Задание взять из Задачи №2.
 */

# Выполнение основной части задания:

function calculator()
{
    $arg_list = func_get_args();                                 // Получаем массив аргументов

    $operator = array_shift($arg_list);                          // Получаем оператор из массива аргументов

    $result = '';

    foreach ($arg_list as $number) {
        $result .= $number . $operator;                          // Составляет строку выражения
    }

    $result = substr($result, 0, -1);                            // Удаление последнего знака

    $evaluate = eval("return($result);");                        // Исполнение выражения в строке

    echo 'Результат: ' . $result . ' = ' . $evaluate . "</br>";  // Вывод результата
}

$operator = '*';

$arg1 = 1;
$arg2 = 2.5;
$arg3 = 3;

calculator($operator, $arg1, $arg2, $arg3);

echo "<hr><br>";

# Дополнительно:

function extraCalculator($operator = ['+'])
{
    $arg_list = func_get_args();                                         // Получаем массив аргументов

    $operator = array_shift($arg_list);                                  // Получаем оператор из массива аргументов

    if (!(in_array('/', $operator) && in_array(0, $arg_list))) {         // Проверка деления на ноль

        foreach ($operator as $symbol) {
            $result = '';

            foreach ($arg_list as $number) {
                $result .= $number . $symbol;                            // Составляет строку выражения
            }

            $result = substr($result, 0, -1);                            // Удаление последнего знака

            $evaluate = eval("return($result);");                        // Исполнение выражения в строке

            echo 'Результат: ' . $result . ' = ' . $evaluate . "</br>";  // Вывод результата
        }

    } else {
        echo "Деление на ноль невозможно!";
    }
}

$operators = ['+', '-', '*', '/'];

$arg1 = 1;
$arg2 = 2.5;
$arg3 = 3;

extraCalculator($operators, $arg1, $arg2, $arg3);

echo "<hr><br>";
