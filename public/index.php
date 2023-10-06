<?php
// Inclua o arquivo de autoload do Composer (se aplicável)
require_once '../vendor/autoload.php';

// Carregue sua configuração, como configurações de banco de dados

// Obtenha a URL da solicitação
$url = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : '/';
// Defina suas rotas
$routes = [
    '/usuario/listar' => 'UserController@listar',
    '/usuario/criar' => 'UserController@criar'
    // Adicione mais rotas conforme necessário
];

// Verifique se a rota existe
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (array_key_exists($url, $routes)) {
        list($controllerName, $action) = explode('@', $routes[$url]);
        $controllerClass = 'Imperium\\Controller\\' . $controllerName;
        
        // Crie uma instância do controlador
        $controller = new $controllerClass();
    
        // Chame a ação do controlador
        $controller->$action();
    } else {
        // Rota não encontrada, lidar com o erro 404
        echo "404 - Página não encontrada";
    }
}
else if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (array_key_exists($url, $routes)) {
        list($controllerName, $action) = explode('@', $routes[$url]);
        $controllerClass = 'Imperium\\Controller\\' . $controllerName;
        // Crie uma instância do controlador
        $controller = new $controllerClass();
    
        // Chame a ação do controlador
        $controller->$action($_POST);
    } else {
        // Rota não encontrada, lidar com o erro 404
        echo "404 - Página não encontrada";
    }
}
