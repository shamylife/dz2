<?php
/**
 * Функция принимает 1 строковый параметр и возвращает TRUE, если строка
 * является палиндромом, FALSE в противном случае. Пробелы не должны учитываться.
 * Регистр не должен учитываться.
 *
 * Палиндром – строка, одинаково читающаяся в обоих направлениях.
 *
 * Дополнительно (не обязательно): Искала бы все палиндромы, в строке начиная с
 * трёх символов.
 */

# Выполнение основного задания:

/**
 * Строка для проверки на палиндром
 * @param $string
 */

function isPalindrom($string)
{
    echo "Строка \"$string\"";

    $result = checkPalindrom($string);

    if ($result === true) {
        echo ' является палиндромом!';
    } elseif ($result === -1) {
        echo ' является недопустимым параметром';
    } else {
        echo ' не является палиндромом!';
    }
}

function checkPalindrom($str)
{
    if (!(is_string($str))) {
        return -1;
    }

    $str = mb_strtolower(str_replace(' ', '', $str));

    $reverse_str = stringReverse($str);

    return $str === $reverse_str;
}


function stringReverse($str)
{
    $count = mb_strlen($str, 'UTF-8');

    $arr = array();

    for ($i = 0; $i < $count; $i++) {
        $arr[] = mb_substr($str, $i, 1, 'UTF-8');
    }

    $reversed_string = implode(array_reverse($arr));

    return $reversed_string;
}

$first_string = "Аргентина манит негра";
$second_string = "А роза упала на лапу Азора";
$third_string = "Some string";
$fourth_string = 51;

isPalindrom($first_string);
