<?php

namespace app\controllers;

use app\core\App;
use app\core\Request;
use app\models\UserModel;

class AuthController
{
    public function login(Request $request)
    {
        $errors = [];
        $data = [];
        $taskModel = new UserModel();
        if($request->isPost()) {
            $data = $request->getBody();

            if($data['email'] === '') {
                $errors['email'] = 'This field required';
            }
            elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'This field must valid email address';
            }
            $errors['password'] = ($data['password'] === '') ? 'This field required' : '';

            if(!count($errors)) {
                // save task
            }
        }
        return App::$app->router->renderView('login', [
            'errors' => $errors,
            'data' => $data
        ]);
    }
}