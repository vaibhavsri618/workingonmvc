<?php

    class IndexView
    {

        private $model;

        private $controller;


        function __construct()
        {
           

            $this->controller=new IndexController();

            print "Home - ";
        }

        public function index()
        {
            return $this->controller->sayWelcome();
        }

        public function action()
        {
            return $this->controller->takeAction();
        }

    }