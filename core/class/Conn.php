<?php
//Seta Nome do Arquivo
$file = 'conn.php';
//Pega o caminho base utilizado
$pathFile = basename($_SERVER["PHP_SELF"]);
//Se caminho for o mesmo que o arquivo nega acesso
if ($pathFile == $file) {
    exit ("Acesso Restrito !");
}

require '../config.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $mysqli = new mysqli(HOST, LOGIN, PASSWD, DB);
    $mysqli->set_charset("utf8mb4");
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('Algo estranho aconteceu!'); //Mensagem de erro!
}