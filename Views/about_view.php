<?php

    class AboutView
    {

        // private $modelObj;

        private $controller;


        function __construct()
        {
            $this->controller =new AboutController();
            // $this->modelObj=new AboutModel();

            

            echo "About - ";
        }

        public function now()
        {
            return $this->controller->modelObj->nowADays();
        }

        public function today()
        {
            return $this->controller->current();
        }


    }