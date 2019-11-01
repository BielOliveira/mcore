<?php
//Seta Nome do Arquivo
$file = 'routes.php';
//Pega o caminho base utilizado
$pathFile = basename($_SERVER["PHP_SELF"]);
//Se caminho for o mesmo que o arquivo nega acesso
if ($pathFile == $file) {
    exit ("Acesso Restrito !");
}

/*++++++++++++++++++++++++++++++++++++
            Define Rotas
    As rotas funcionam com arrays 
    associativas.
    -Defina a rota como o ponteiro,
    -Defina a rota e o caminho do 
    arquivo na array assosiada ao
    ponteiro.
++++++++++++++++++++++++++++++++++++*/

$routes = [
    "/" => ["/","teste.php"],
    "/login" => ["/login","view/auth/login.php"],
    "/lista-de-usuarios" => ["/lista-de-usuarios","view/user/lista-usuarios.php","id"]
];

$routes = validateRoutes($routes);