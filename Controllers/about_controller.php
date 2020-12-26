<?php

    class AboutController
    {
        public $modelObj;

        function __construct()
        {
            $this->modelObj = new AboutModel();
           
        }

        public function current()
        {
            return $this->message = "About us today changed by aboutController.";
        }
     }