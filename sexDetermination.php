<?php
include_once 'splittingJoining.php';

// ---- Функция определения пола по ФИО ----
// принимает как аргумент строку, содержащую ФИО (вида «Иванов Иван Иванович»).
function getGenderFromName($fullName) {

    $summOfsex = 0;
    // делим ФИО на составляющие
    $newArray = array_values(getPartsFromFullname($fullName));

    // Меняем кодировку на windows-1251
    $genderSurName = iconv('UTF-8','windows-1251', $newArray[0]);
    $genderName = iconv('UTF-8','windows-1251', $newArray[1]);
    $genderPatronymic = iconv('UTF-8','windows-1251', $newArray[2]);

    
    if ( iconv('windows-1251','UTF-8', substr($genderSurName, -2)) == 'ва' || iconv('windows-1251','UTF-8', substr($genderName, -1)) == 'а' || iconv('windows-1251','UTF-8', substr($genderPatronymic, -3)) == 'вна') {
        $summOfsex--; // если присутствует признак женского пола — отнимаем единицу.

    } else if (iconv('windows-1251','UTF-8', substr($genderSurName, -1)) == 'в' || iconv('windows-1251','UTF-8', substr($genderName, -1)) == 'й' || iconv('windows-1251','UTF-8', substr($genderName, -1)) == 'н' || iconv('windows-1251','UTF-8', substr($genderPatronymic, -2)) == 'ич') {
        $summOfsex++; // если присутствует признак мужского пола — прибавляем единицу
    };
    

    // после проверок всех признаков, если «суммарный признак пола» больше нуля — возвращаем 1 (мужской пол)
    if ($summOfsex > 0){
        return 1; // мужской пол

    // если «суммарный признак пола» меньше нуля — возвращаем -1 (женский пол)
    } else if ($summOfsex < 0){
        return -1; // женский пол

        // если «суммарный признак пола» равен 0 — возвращаем 0 (неопределенный пол)
    } else if ($summOfsex == 0) {
        return 0; // неопределенный пол
    }; 

};


