<?php
include 'sexDetermination.php';
include 'array.php';

// ---- Определение возрастно-полового состава ----

function getGenderDescription($array) {
    $count = [];
    for($i = 0; $i < count($array); $i++) {
        $values = array_values($array[$i]);
        $count[$i] = getGenderFromName($values[0]);
    };
    // фильтрация элементов массива, функция подсчета элементов массива, округление.
    $resultMen = round(count(array_filter($count, function($number){
        return ($number == 1);
    })) * 100 / count($count), 1);

    $resultWomen = round(count(array_filter($count, function($number){
        return ($number == -1);
    })) * 100 / count($count), 1);

    $indefined = round(count(array_filter($count, function($number){
        return ($number == 0);
    })) * 100 / count($count), 1);


    return "<div class ='box'>
                <p>
                Гендерный состав аудитории:<br>
                ---------------------------------------------<br>
                Мужчины - {$resultMen} %<br>
                Женщины - {$resultWomen} %<br>
                Не удалось определить - {$indefined} %
                </p>
            </div>";
};
