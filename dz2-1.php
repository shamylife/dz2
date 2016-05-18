<?php
/*
    Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе.
    
    Примечание: Теги параграфа <p></p>.
    
    Дополнительно (не обязательно): При выводе каждую строку выводить внутри параграфа случайное число раз.
*/

    $strings = ['String', 'Tring', 'Ring', 'Ing'];

    # Вывод каждой строки массива в отдельном параграфе:

//    function output_strings ($array) {
//
//        foreach ($array as $string) {
//            echo '<p>' . $string . '</p>';
//        }
//    }
//
//    output_strings($strings);


    # Вывод каждой строки массива в отдельном параграфе случайное число раз:
    # (условно принял, что строка будет выводится не менее 1-го раза и не больше 10 раз)

    function output_strings ($array) {

        foreach ($array as $string) {

            $result = '';

            $number = mt_rand(1, 10);

            for ($j = 0; $j < $number; $j++) {
                $result .= $string . ' ';
            }

            echo '<p>' . $result . '</p>';
        }
    }

    output_strings($strings);


    # Вариант с циклом for:

//    function output_strings ($array) {
//
//    for ($i = 0; $i < count($array); $i++) {
//
//        $result = '';
//
//        $number = mt_rand(1, 10);
//
//        for ($j = 0; $j < $number; $j++) {
//            $result .= $array[$i] . ' ';
//        }
//
//        echo '<p>' . $result . '</p>';
//    }
//}
//
//output_strings($strings);