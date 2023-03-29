<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php 
        include 'definitionOfage.php';
        include 'nameReduction.php';
        include 'matchmaking.php';
        include 'array.php';
    ?>
    <title>12.6. Практическая работа</title>
</head>
    <body>
        <div class="header">
            <svg xmlns="http://www.w3.org/2000/svg" width="125" height="39" viewBox="0 0 125 39" fill="#181818"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.723 8.234c.485.208.901.485 1.248.831.346.346.623.762.832 1.247.208.485.346.97.346 1.524v1.177c0 .277-.138.485-.415.555l-2.842.761c-.278.07-.416 0-.416-.346v-2.078a.786.786 0 00-.208-.554.786.786 0 00-.554-.208h-.278a.786.786 0 00-.554.208.786.786 0 00-.208.554v2.84c0 .208.069.416.138.623.07.139.208.347.347.485l4.089 3.117c.347.278.555.624.624.9.07.278.139.624.208 1.04v5.403c0 .554-.139 1.039-.347 1.524-.208.485-.485.9-.832 1.247a3.934 3.934 0 01-1.247.831c-.485.208-.97.346-1.525.346H3.951c-.554 0-1.04-.138-1.525-.346a3.933 3.933 0 01-1.248-.831 3.93 3.93 0 01-.831-1.247C.139 27.49 0 26.937 0 26.45v-3.047c0-.277.139-.485.416-.555l2.842-.761c.277-.07.416 0 .416.346v3.879c0 .208.069.416.208.554a.787.787 0 00.554.208h.277c.208 0 .416-.07.555-.208a.786.786 0 00.208-.554v-4.156c0-.277-.07-.485-.139-.693a1.51 1.51 0 00-.346-.554L.9 17.793c-.346-.277-.554-.554-.693-.9C.069 16.614 0 16.2 0 15.714v-3.74c0-.555.139-1.04.347-1.525.208-.484.485-.9.831-1.246a3.932 3.932 0 011.248-.832c.485-.207.97-.346 1.525-.346h1.178a3.09 3.09 0 011.594.208zm15.318 3.186a.21.21 0 010 .277l-4.297 8.035 4.227 9.975c.07.139 0 .208 0 .277-.069.07-.138.139-.277.139h-3.119c-.138 0-.207-.07-.346-.139-.139-.069-.208-.138-.208-.277l-2.287-5.195-.555 1.039v4.156c0 .277-.139.416-.416.416h-2.772c-.277 0-.416-.139-.416-.416v-18.01c0-.277.139-.415.416-.415h2.772c.277 0 .416.138.416.415v5.472l2.911-5.541c.139-.277.277-.346.624-.346h3.119c.139 0 .208.069.208.138zm5.822 18.287c0 .277-.139.416-.416.416h-2.773c-.277 0-.415-.139-.415-.416v-18.01c0-.277.138-.415.415-.415h2.773c.277 0 .416.138.416.415v18.01zm11.02-2.77v2.77c0 .277-.139.416-.416.416h-7.139c-.277 0-.415-.139-.415-.416v-18.01c0-.277.138-.415.415-.415h2.773c.277 0 .416.138.416.415v14.754h3.881c.346 0 .485.208.485.485zm10.397 0v2.77c0 .277-.139.416-.416.416h-7.14c-.276 0-.415-.139-.415-.416v-18.01c0-.277.139-.415.416-.415h2.772c.278 0 .416.138.416.415v14.754h3.882c.346 0 .485.208.485.485zM59.19 8.58v2.77c0 .278-.139.417-.416.417h-3.604v4.502h3.12c.276 0 .415.139.415.416v2.77c0 .277-.139.416-.416.416h-3.119v9.698c0 .277-.139.415-.416.415h-2.772c-.277 0-.416-.138-.416-.415V8.58c0-.277.139-.415.416-.415h6.862c.207 0 .346.138.346.415zm10.674 21.127c.07.277-.069.416-.347.416h-2.842c-.277 0-.415-.139-.485-.416l-.277-3.117h-1.94l-.278 3.117c-.069.277-.208.416-.485.416H60.37c-.277 0-.415-.139-.346-.416l2.356-18.01c.07-.277.208-.415.486-.415h4.158c.277 0 .485.138.485.415l2.357 18.01zm8.456-18.287c.485.208.901.485 1.247.831.347.347.624.762.832 1.247.208.485.347.97.347 1.524v1.87c0 .277-.139.485-.417.555l-2.84.415c-.278.07-.417 0-.417-.346V15.09a.785.785 0 00-.208-.554.786.786 0 00-.555-.208h-.277a.787.787 0 00-.554.208.785.785 0 00-.208.554v11.083c0 .208.07.416.208.555a.787.787 0 00.554.207h.277c.21 0 .417-.069.555-.207a.785.785 0 00.208-.555v-3.74c0-.277.14-.416.416-.346l2.841.346c.278.07.417.277.417.554v3.325c0 .554-.139 1.039-.347 1.524-.208.485-.485.9-.832 1.247a3.927 3.927 0 01-1.247.831c-.485.208-.97.346-1.525.346h-1.178c-.555 0-1.04-.138-1.525-.346a3.932 3.932 0 01-1.248-.831 3.94 3.94 0 01-.832-1.247c-.208-.485-.346-.97-.346-1.524v-11.29c0-.555.138-1.04.346-1.525.208-.485.486-.9.832-1.247a3.93 3.93 0 011.248-.83c.485-.209.97-.347 1.525-.347h1.178c.554 0 1.04.07 1.525.346zm12.545.347v2.77c0 .277-.139.416-.416.416h-2.218v14.754c0 .277-.139.416-.416.416h-2.772c-.139 0-.208-.07-.277-.139a.526.526 0 01-.139-.346V14.953H82.41c-.277 0-.416-.139-.416-.416v-2.77c0-.278.14-.416.416-.416h8.11c.207-.07.346.07.346.415zM101.61 26.45c0 .555-.139 1.04-.347 1.524a3.94 3.94 0 01-.831 1.247 3.943 3.943 0 01-1.248.832c-.485.207-.97.346-1.525.346H96.48c-.554 0-1.04-.139-1.525-.346a3.927 3.927 0 01-1.247-.832 3.926 3.926 0 01-.832-1.247c-.208-.485-.347-.97-.347-1.524V15.022c0-.554.14-1.039.347-1.524.208-.485.485-.9.832-1.247a3.925 3.925 0 011.247-.83c.485-.209.971-.347 1.525-.347h1.178c.555 0 1.04.138 1.525.346.485.208.901.485 1.248.831.346.347.623.762.831 1.247.208.485.347.97.347 1.524v11.43zm6.169 3.256c0 .277-.139.416-.486.416h-2.772c-.277 0-.416-.139-.416-.416v-18.01c0-.277.139-.415.416-.415h4.713c.555 0 1.04.138 1.525.346.485.208.901.485 1.247.831.347.347.624.762.832 1.247.208.485.347.97.347 1.524v3.879c0 .762-.208 1.455-.693 2.078a5.493 5.493 0 01-1.664 1.455l2.98 7.065c.07.277-.069.416-.346.416h-2.842a.529.529 0 01-.346-.139.38.38 0 01-.208-.346l-2.287-5.819v5.888zm17.535-18.287a.211.211 0 010 .277l-3.604 11.152v6.858c0 .277-.139.416-.416.416h-2.842c-.277 0-.415-.139-.415-.416V22.85l-3.674-11.082c-.069-.14 0-.208 0-.278.069-.069.139-.138.277-.138h3.327c.278 0 .485.138.485.415l1.248 6.027h.138l1.248-6.026c.069-.278.208-.416.485-.416h3.327c.277-.07.347 0 .416.07zM65.637 23.127l-.624-6.927h-.277l-.624 6.927h1.525zm32.23-7.966a.785.785 0 00-.209-.554.786.786 0 00-.555-.208h-.277a.787.787 0 00-.554.208.785.785 0 00-.208.554v11.083c0 .207.07.415.208.554a.787.787 0 00.554.208h.277c.21 0 .417-.07.555-.208a.785.785 0 00.208-.554V15.16zm9.911 4.571h1.039c.208 0 .416-.069.554-.207a.784.784 0 00.208-.555v-3.532a.784.784 0 00-.208-.554.785.785 0 00-.554-.208h-1.039v5.056z"></path></svg>
        </div>
        
        <div class="main">
            <span class="titleMain">12.6. Практическая работа</span>
            <div class="content">
                <!-- Разбиение и объединение ФИО  -->
                <div class="splittingJoining">
                    <div class="blok"></div> <span class="title">Разбиение и объединение ФИО</span>
                    <div class="splitting"> <p><span class="func">function getFullnameFromParts</span> принимает как аргумент три строки — фамилию, имя и отчество. Возвращает как результат их же, но склеенные через пробел.</p>
                        <div class="textResult">результат работы функции:</div>
                        <div class="box">
                                <span class="text"><?php var_export(getFullnameFromParts($surnameNew, $nameNew, $patronomycNew)); ?>
                            </div><br>
                        </div>


                    <div class="joining"> <p><span class="func">function getPartsFromFullname</span> принимает как аргумент одну строку — склеенное ФИО. Возвращает как результат массив из трёх элементов с ключами  "surname", "name" и "patronomyc".</p>
                        <div class="textResult">результат работы функции:</div>
                        <div class="box">
                            <span class="text"><?php print_r(getPartsFromFullname($name));?></span>
                        </div>
                    </div>
                </div>
                <!-- / Разбиение и объединение ФИО  -->

                <!-- Сокращение ФИО -->
                <div class="blok"></div> <span class="title">Сокращение ФИО</span>
                <div class="shortName"><p><span class="func">function getShortName</span> принимает как аргумент строку, содержащую ФИО вида «Иванов Иван Иванович» и возвращает строку вида<br>«Иван И.», 
                где сокращается фамилия и отбрасывается отчество. Для разбиения строки на составляющие используется функция <span class="func">getPartsFromFullname</span> из файла splittingJoining.php</p>
                    <div class="textResult">результат работы функции:</div> 
                    <div class="box">
                        <span class="text"><?php echo getShortName("Козодоев Геннадий Петрович"); ?></span>
                    </div>
                </div>
                <!-- / Сокращение ФИО -->

                <!-- Функция определения пола по ФИО -->
                <div class="blok"></div> <span class="title">Функция определения пола по ФИО </span>

                <div class="gender"><p><span class="func">function getPartsFromFullname </span><br>&bull; после проверок всех признаков, если «суммарный признак пола» больше нуля — возвращаем 1 (мужской пол);<br>
                &bull; после проверок всех признаков, если «суммарный признак пола» меньше нуля — возвращаем -1 (женский пол);<br>
                &bull; после проверок всех признаков, если «суммарный признак пола» равен 0 — возвращаем 0 (неопределенный пол).<br></p>
                    <div class="textResult">результат работы функции:</div>
                    <div class="box"> 
                        <span class="text"><?php print_r(getGenderFromName('Горбунков Семён Семёнович'));?></span>
                    </div>
                </div>
                <!-- / Функция определения пола по ФИО -->

                <!-- Определение возрастно-полового состава -->
                <div class="blok"></div> <span class="title">Определение возрастно-полового состава</span>
                <div class="ageGender"><p><span class="func">function getGenderDescription</span> для определения полового состава аудитории.<br>
                    Как аргумент в функцию передается массив <span class="func">$example_persons_array</span>. </p>
                    <div class="textResult">результат работы функции:</div>
                    <?php print_r(getGenderDescription($example_persons_array)); ?> 
                </div>
                <!-- / Определение возрастно-полового состава -->

                <!-- Идеальный подбор пары -->
                <div class="blok"></div><span class="title">Идеальный подбор пары</span>
                <div class="match"><p><span class="func">function getPerfectPartner</span> для определения «идеальной» пары.<br><br>
                Как первые три аргумента в функцию передаются строки с фамилией, именем и отчеством (именно в этом порядке). При этом регистр может быть любым: ИВАНОВ ИВАН ИВАНОВИЧ, ИваНов Иван иванович.<br><br>
                Как четвертый аргумент в функцию передается массив<span class="func">$example_persons_array</span>. </p>
                    <div class="textResult">результат работы функции:</div>
                    <div class="box"> 
                        <span class="text"><?php print_r(getPerfectPartner('ИваНова', 'ИваНа', 'иваНоВна', $example_persons_array));?></span>
                    </div>
                </div>
                <!-- / Идеальный подбор пары -->
            </div>
        </div>
        <div class="student">
            <img src="1989711.svg" alt="student">
            <span class="autor">Владимир Вайс</span>
        </div>
    </body>
</html>