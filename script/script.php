<?php
ini_set('display_errors', 1); // включает ошибки
ini_set('display_startup_errors', 1); //
error_reporting(E_ALL); // вывод всех ошибок

# include - тип подключения когда фала если нет, код дальше выполняет работу (Warning)
# include_once - не подключает файл больше одного раза

# require - тип подключение файла без которого дальше код не выполняется (Fatal error)
# require_once

# __DIR__ . '/path'; - правильное прописывание абсолютного пути к папке относительно проекта

$text = "User: %$1s %$2s, Birthdate \"%$3s\". \t Email - %$4s \n";

if (isset($_POST['register'])) {
    $userInfo = [
        ucfirst($_POST['name']). '' . ucfirst($_POST['last_name']),
        $_POST['birthdate'],
        $_POST['email']
    ];
    
    $file = __DIR__ . '/user-info.txt';
    
    // csv
    if (!file_exists($file) || empty($file)) {
        file_put_contents($file, "User;Birthdate;Email;\n", FILE_APPEND);
    }

var_dump(file_put_contents($file, implode(';', $userInfo). ";\n", FILE_APPEND));    
die();
}
header('Location: http://localhost:8888/phpBasic');
exit;