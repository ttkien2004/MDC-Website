<?php
require_once '../app/config/db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = 'controllers/' . ucfirst($controller) . 'Controller.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . 'Controller';
    if ($controller === 'auth') {
        $authController = new $controllerClass($connect);
        if ($action === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $authController->login($email, $password);
        }
    }
}else{
    echo "Controller not found.";
    exit();
}
?>