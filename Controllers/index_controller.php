<?php

    class IndexController
    {
        private $model;

        function __construct()
        {
            $this->model=new IndexModel();
        }

        public function sayWelcome()
        {
            return $this->model->welcomeMessage();
        }


    }