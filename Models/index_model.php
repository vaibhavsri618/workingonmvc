<?php


    class IndexModel
    {

        private $message = 'Welcome to MVC  page.';

        

        public function welcomeMessage()
        {
            return $this->message;
        }

    }