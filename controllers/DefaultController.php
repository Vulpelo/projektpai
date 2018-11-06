<?php

// Zwraca błąd servera jeżeli niebędzie tej klasy, lub będzie wielokrotnie wczytane
require_once("AppController.php");

class DefaultController extends AppController
{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $name = 'Damian';
            $this->render('index', ['name'=>$name]);
        }

        public function login()
        {
            if ($this->isPost()) {
                var_dump($_POST);
            }
            $this->render('login');
        }
}

?>
