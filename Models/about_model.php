<?php


    class AboutModel
    {

        private $message;

        public function __construct()
        {
            $this->message = "Welcome to the of PHP MVC framework official site.";
        }

        public function nowADays()
        {
            return $this->message = "Now a days working with mvc improves code quality";
        }
    }