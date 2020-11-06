<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\App;
use app\controllers\AuthController;
use app\controllers\TaskController;

$config = [
    'db' => [
        'dsn' => 'mysql:host=localhost;port=3306;dbname=bee_base',
        'user' => 'root',
        'password' => 'root',
    ]
];

$app = new App(dirname(__DIR__), $config);

$app->router->get('/', [TaskController::class, 'index']);
$app->router->get('/task', [TaskController::class, 'task']);
$app->router->post('/task', [TaskController::class, 'task']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->run();