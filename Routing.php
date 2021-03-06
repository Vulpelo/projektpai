<?php

require_once('controllers/DefaultController.php');
require_once('controllers/UploadController.php');
require_once('controllers/LibraryController.php');


class Routing
{
    public $routes = [];

    public function __construct()
    {
        $this->routes = [
            'index' => [
                'controller' => 'DefaultController',
                'action' => 'index'
            ], 
            'login' => [
                'controller' => 'DefaultController',
                'action' => 'login'
            ],
            'upload' => [
                'controller' => 'UploadController',
                'action' => 'upload'
            ],
            'library' => [
                'controller' => 'LibraryController',
                'action' => 'library'
            ]
        ];
    }


    public function run()
    {
        //localhost:8000?page=login
        // isset() - sprawdzanie czy taka zmienna wogule istnieje
        $page = isset($_GET['page']) 
            && isset( $this->routes[$_GET['page']] ) ? $_GET['page'] : 'index';
        
        if ($this->routes[$page])
        {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            // tworzenie klasy z nazwą zapisaną w stringu
            $object = new $controller;
            $object->$action();
        }
        
    }
}

?>
