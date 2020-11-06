<?php


namespace app\core;


class App
{
    public static string $ROOT_DIR;
    public Router $router;
    public static App $app;
    public Database $db;

    /**
     * App constructor.
     * @param $rootPath
     * @param array $config
     */
    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}