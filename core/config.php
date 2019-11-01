<?php
//Seta Nome do Arquivo
$file = 'config.php';
//Pega o caminho base utilizado
$pathFile = basename($_SERVER["PHP_SELF"]);
//Se caminho for o mesmo que o arquivo nega acesso
if ($pathFile == $file) {
    exit ("Acesso Restrito !");
}

/*++++++++++++++++++++++++++++++++++
        Define Raiz do APP
++++++++++++++++++++++++++++++++++*/
if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1'){
    define('__APP_ROOT__', '/app');    
}
else{
    define('__APP_ROOT__', '');
}

define('BASE', $_SERVER['HTTP_HOST'].__APP_ROOT__."/");

/*++++++++++++++++++++++++++++++++++
Define Informaçoes do Banco de Dados
++++++++++++++++++++++++++++++++++*/

define('HOST', 'localhost');
define('LOGIN', 'root');
define('PASSWD', '');
define('DB', '');
