<?php
include_once "splittingJoining.php";

// ---- Сокращение ФИО ----

/* принимает как аргумент строку, содержащую ФИО вида «Иванов Иван Иванович» и возвращает строку вида «Иван И.», 
где сокращается фамилия и отбрасывается отчество. Для разбиения строки на составляющие используется функция getPartsFromFullname из файла splittingJoining.php */


function getShortName($fullname) {

    $newArray = array_values(getPartsFromFullname($fullname));

    $surName = iconv('UTF-8','windows-1251', $newArray[0]); // Меняем кодировку на windows-1251
    $surName = substr($surName , 0 , 1); // Получаем требуемый символ строки
    $surName = iconv('windows-1251','UTF-8', $surName);// Меняем кодировку на UTF-8
    $name = $newArray[1];

    return $name.' '.$surName.'.';
};

