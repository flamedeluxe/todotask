<?php

namespace app\controllers;

use app\core\App;

class TaskController
{
    public function index()
    {
        $params = [
            'user' => 'flame'
        ];
        return App::$app->router->renderView('index', $params);
    }

    public function task()
    {

        return App::$app->router->renderView('task', []);
    }
}