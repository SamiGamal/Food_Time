

<?php

//if user insert any url thats not in our site
// the will do nothink 
//but if user insert our url then will dirict him to page he's wannet



$request = $_SERVER['REQUEST_URI'];



    switch ($request) {

        case "/mvc3":
        case "/mvc3/app":
            die("Forbidden enter main page");
            break;


             case '/mvc3/public/home':
           require  'app/views/home.class.php';
            break;


   case '/mvc3/app/controller/insertorder/':
           require  'app/controller/insertorder.class.php';
            break;

               case '/mvc3/bootstraping/':
           require  'app/bootstraping.php';
            break;
 
        default:
            require  'app/views/404page.php';  
            break;
    }
    
   // all of the above is a requists from user to site
    
    //new comment
    //second comment

