<?php
/*
    Функция принимает 1 строковый параметр и возвращает TRUE, если строка
    является палиндромом, FALSE в противном случае. Пробелы не должны учитываться.
    Регистр не должен учитываться.

    Палиндром – строка, одинаково читающаяся в обоих направлениях.

    Дополнительно (не обязательно): Искала бы все палиндромы, в строке начиная с
    трёх символов.
*/

    function is_palindrom ($string) {

        echo "Строка \"$string\"";

        $result = check_palindrom($string);

        if ($result === true)
            echo ' является палиндромом!';

        else if ($result === -1)
            echo ' является недопустимым параметром';

        else
            echo ' не является палиндромом!';
    }

    function check_palindrom ($str) {

        if ( !(is_string($str)) )
            return -1;

        $str = mb_strtolower(str_replace(' ', '', $str));

        $reverse_str = string_reverse($str);

        return $str === $reverse_str;
    }


    function string_reverse ($str) {
    
        $count = mb_strlen($str, 'UTF-8');
    
        $arr = array();
    
        for($i = 0; $i < $count; $i++) {
            $arr[] = mb_substr($str, $i, 1, 'UTF-8');
        }
    
        $reversed_string = implode(array_reverse($arr));
    
        return $reversed_string;
    }