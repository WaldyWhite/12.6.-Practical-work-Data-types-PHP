<?php

// ---- Разбиение и объединение ФИО ----

// принимает как аргумент три строки — фамилию, имя и отчество. Возвращает как результат их же, но склеенные через пробел.
function getFullnameFromParts ($surname, $name, $patronomyc) {
    $personFullName = $surname ." ". $name ." ". $patronomyc;
    return $personFullName;
};

$surnameNew = "Семён";
$nameNew = "Семёнович";
$patronomycNew = "Горбунков";

// принимает как аргумент одну строку — склеенное ФИО. Возвращает как результат массив из трёх элементов с ключами "name", "surname" и "patronomyc".
function getPartsFromFullname($fullName) {
    $arrayKeys = ['surname', 'name', 'patronomyc'];
    return array_combine($arrayKeys, explode(' ', $fullName));
};

$name = 'Геннадий Петрович Козодоев';


