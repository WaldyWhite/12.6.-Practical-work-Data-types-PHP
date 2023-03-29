<?php

include 'array.php';

function getPerfectPartner($surname, $name, $patronymic, $array) {
    // приводим фамилию, имя, отчество к привычному регистру;
    $newSurname = mb_strtoupper(mb_substr($surname,0,1)).mb_substr(mb_strtolower($surname),1);
    $newName = mb_strtoupper(mb_substr($name,0,1)).mb_substr(mb_strtolower($name),1);
    $newPatronymic = mb_strtoupper(mb_substr($patronymic,0,1)).mb_substr(mb_strtolower($patronymic),1);

    // случайным образом выбираем любого человека в массиве
   /*  $randPerson = array_values($array[rand(0, count($array)-1)])[0]; */
    // склеиваем ФИО, используя функцию
    $fullName = getFullnameFromParts($newSurname, $newName, $newPatronymic);
    // определяем пол для ФИО с помощью функции
    $genderOne = getGenderFromName($fullName);


    $runWhile = true;
    while($runWhile) {
       $randPro = round(lcg_value() * 100, 2);


        $randPerson = array_values($array[rand(0, count($array)-1)])[0];
        $genderTwo = getGenderFromName($randPerson);
        if($genderOne != $genderTwo && $genderOne != 0 && $genderTwo != 0) {
            $runWhile = false;
            return getShortName($fullName).' + '.getShortName($randPerson).' = '."♡ Идеально на {$randPro}% ♡";
        }
    };
};
