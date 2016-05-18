<?php
/*
    Функция должна принимать 2 параметра:
        а) массив чисел;
        б) строку, обозначающую арифметическое действие,
           которое нужно выполнить со всеми элементами массива.
    Функция должна вывести результат.

    Например: имя функции someFunction(array(1,2,3,4), ‘ – ’);
    Результат: 1 – 2 – 3 – 4 = -8

    Дополнительно (не обязательно): Написать все, на Ваш взгляд, требуемые
    проверки. Сделать по умолчанию любую арифметическую операцию. И сделать
    возможность приём не только одного арифметического действия, но и массив
    действий. И сколько заданных действий будет, столько и должно быть выведено
    результатов.
*/

    # Первая часть задания:

//    function calculator ($array, $string) {
//        $result = '';
//
//        foreach ($array as $number) {
//            $result .= $number . $string;                  // Составляем строку выражения
//        }
//
//        $result = substr($result, 0, -1);                  // Удаление последнего знака
//
//        $evaluate = eval("return($result);");              // Исполнение выражения в строке
//
//        echo 'Результат: ' . $result . ' = ' . $evaluate;  // Вывод результата
//    }
//
//    $numbers = [5, 10, 15, 20];
//
//    $operator = '+';
//
//    calculator($numbers, $operator);


    # Дополнительно:
    
    function calculator ($array, $string = '+') {
        if ( !(is_array($string)) ) {                                            // Проверка наличая массива операторов
    
            if( !('/' === $string && in_array(0, $array)) ) {                    // Проверка деления на ноль
    
                $result = '';
    
                foreach ($array as $number) {
                    $result .= $number . $string;                                // Составляем строку выражения
                }
    
                $result = substr($result, 0, -1);                                // Удаление последнего знака
    
                $evaluate = eval("return($result);");                            // Исполнение выражения в строке
    
                echo 'Результат: ' . $result . ' = ' . $evaluate;                // Вывод результата
    
            } else {
                echo "Деление на ноль невозможно!";
            }
    
        } else {
            if ( !(in_array('/', $string) && in_array(0, $array)) ) {            // Проверка деления на ноль
    
                foreach ($string as $operator) {
    
                    $result = '';
    
                    foreach ($array as $number) {
                        $result .= $number . $operator;                          // Составляем строку выражения
                    }
    
                    $result = substr($result, 0, -1);                            // Удаление последнего знака
    
                    $evaluate = eval("return($result);");                        // Исполнение выражения в строке
    
                    echo 'Результат: ' . $result . ' = ' . $evaluate . "</br>";  // Вывод результата
                }
            } else {
                echo "Деление на ноль невозможно!";
            }
        }
    }
    
    $numbers = [5, 10, 15, 20];
    
    $operator = '+';
    
    $operators = ['+', '-', '*', '/'];
    
    calculator($numbers, $operators);