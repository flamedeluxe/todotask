<?php


namespace app\models;


use app\core\Model;

class TaskModel extends Model
{
    public string $username = '';
    public string $email = '';
    public string $text = '';
    public int $done = 0;

    public function tableName(): string
    {
        return 'tasks';
    }

    public function attributes(): array
    {
        return ['username', 'email', 'text', 'done'];
    }

    public function create()
    {
        return parent::create();
    }
}