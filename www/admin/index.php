<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    if(!isset($_GET['controller'])){
        require_once('controllers/MainController.php');
        $Main = new MainController();
        $Main ->index();

    }else{
        switch ($_REQUEST['controller']) {
            case 'main':
                require_once('controllers/MainController.php');
                $Main = new MainController();

                if(!isset($_GET['action'])){

                }else{
                    switch ($_REQUEST['action']) {

                        case 'login':
                            $Main -> login();
                        break;

                        case 'index':
                            $Main -> index();
                        break;

                        case 'logout':
                            $Main -> logout();
                        break;
 
                    }
                }
            break;
            
            case 'user':
                require_once("controllers/UserController.php");
                $User = new UserController();
                
                if(!isset($_GET['action'])){
                    $User -> index();
                }else{
                    switch ($_REQUEST['action']) {
                        case 'validatelogin':
                            $User -> validateLogin();
                            break;
                    }
                }    
            break;

            case 'client':
                require_once('controllers/ClientController.php');
                $client = new ClientController();
                if(!isset($_GET['action'])){
                    //xxxx

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

                        case 'createClient':
                            $client -> createClient();  
                        break;

                        case 'createClientAction':
                            $client -> createClientAction();  
                        break;

                        case 'updateClient':
                            $id = $_GET['id'];
                            $client -> updateClient($id);
                        break;

                        case 'updateClientAction':
                            $id = $_GET['id'];
                            $client -> updateClientAction($id);
                        break;

                        case 'deleteClient':
                            $id = $_GET['id'];
                            $client -> deleteClient($id);
                        break;

                        default:
                      
                        break;
                    }

            break;

            case 'contact':
                require_once('controllers/ContactController.php');
                $contact = new ContactController();
                if(!isset($_GET['action'])){
                    //xxxx

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

                        case 'createContact':
                            $contact -> createContact();  
                        break;

                        case 'createContactAction':
                            $contact -> createContactAction();  
                        break;

                        case 'updateContact':
                            $id = $_GET['id'];
                            $contact -> updateContact($id);
                        break;

                        case 'updateContactAction':
                            $id = $_GET['id'];
                            $contact -> updateContactAction($id);
                        break;

                        case 'deleteContact':
                            $id = $_GET['id'];
                            $contact -> deleteContact($id);
                        break;

                        default:
                      
                        break;
                    }

            break;

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

                    }
                }
        }
    }

?>
