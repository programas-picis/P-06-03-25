<?php
$controllers = array(
    'amaroController' => [
        'index', 'inicio', 'error'
    ],

);

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'amaroController';

$action = isset($_GET['action']) ? $_GET['action'] : 'index'; 

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('amaroController', 'error');
    }
} else {
    call('amaroController', 'error');
}

function call($controller, $action)
{
    require_once('Controllers/' . $controller . '.php');
    
    switch ($controller) {
        case 'amaroController':
            require_once('Models/colaborador.php');
            $controllerInstance = new amaroController();
            break;
        default:
            return;
    }
    
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->{$action}();
    } else {
        $controllerInstance->error();
    }
}
