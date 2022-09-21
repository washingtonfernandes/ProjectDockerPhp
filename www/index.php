<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    if(!isset($_GET['controller'])){
        require_once('controllers/SiteController.php');
        $site = new SiteController();
        $site -> home();
    }else{
        switch ($_REQUEST['controller']) {
            case 'site':
                require_once('controllers/SiteController.php');
                $site = new SiteController();
                if(!isset($_GET['action'])){
                    $site -> home();
                }else{
                    switch ($_REQUEST['action']) {
                        case 'home':
                            $site -> home();
                        break;
                        
                        case 'products':
                            $site -> products();
                        break;  

                        case 'contact':
                            $site -> contact();
                        break; 
                    }
                }

            break;
            case 'client':
                require_once('controllers/ClientController.php');
                $client = new ClientController();
                if(!isset($_GET['action'])){

                }else
                    switch ($_REQUEST['action']) {
                        case 'register':
                           $client -> register();     
                        break;
                        case 'registerView':
                            $client -> registerView();     
                        break;
                        case 'listClients':
                            $client -> listClients();  
                            break;
                        
                        default:
                      
                    break;
                }

            break;

            case 'contact':
                require_once('controllers/ContactController.php');
                $contact = new ContactController();
                if(!isset($_GET['action'])){

                }else
                    switch ($_REQUEST['action']) {
                        case 'registerContact':
                           $contact -> registerContact();     
                        break;
                        case 'registerViewContact':
                            $contact -> registerViewContact();     
                        break;
                        case 'listContacts':
                            $contact -> listContacts();  
                            break;
                        
                        default:
                      
                    break;
                }

            break;

        }
    }

?>
