<?php

    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
  //  print_r($url);
    if ($url == '/')
    {

        

        require_once 'Models/index_model.php';
        require_once 'Controllers/index_controller.php';
        require_once 'Views/index_view.php';

      
        $indexView = New IndexView();

        print $indexView->index();

    }else{


      
        $requestedController = $url[0]; 

      
        $requestedAction = isset($url[1])? $url[1] :'';

       
        $requestedParams = array_slice($url, 2); 

     
        $ctrlPath = 'Controllers/'.$requestedController.'_controller.php';



        if (file_exists($ctrlPath))
        {

            require_once 'Models/'.$requestedController.'_model.php';
            require_once 'Controllers/'.$requestedController.'_controller.php';
            require_once 'Views/'.$requestedController.'_view.php';

            $modelName      = ucfirst($requestedController).'Model';
            $controllerName = ucfirst($requestedController).'Controller';
            $viewName       = ucfirst($requestedController).'View';

            
           
            $viewObj        = new $viewName();
           
            if ($requestedAction != '')
            {
               
                print $viewObj->$requestedAction($requestedParams);

            }

        }else{

           echo "Page not found";
           
        }
    }