<?php

namespace app\controllers;

use app\core\App;
use app\core\Request;
use app\core\Response;
use app\models\TaskModel;

class TaskController
{
    public function index()
    {
        $params = [
            'user' => 'flame'
        ];
        return App::$app->router->renderView('index', $params);
    }

    public function task(Request $request)
    {
        $errors = [];
        $data = [];
        $taskModel = new TaskModel();
        if($request->isPost()) {
            $data = $request->getBody();
            if ($data['username'] === '') $errors['username'] = 'This field required';
            if($data['email'] === '') {
                $errors['email'] = 'This field required';
            }
            elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'This field must valid email address';
            }
            if($data['text'] === '') $errors['text'] = 'This field required';

            if(empty($errors)) {
                $taskModel->loadData($data);
                $taskModel->create();
                App::$app->response->redirect('/');
            }
        }

        return App::$app->router->renderView('task', [
            'errors' => $errors,
            'data' => $data
        ]);
    }
}