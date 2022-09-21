<?php

class ContactController{

    public function registerContact()
    {
    require_once('views/templates/header.php');
    require_once('views/contact/registerContact.php');
    require_once('views/templates/footer.php');
    }

    public function registerViewContact(){
        
        if(isset($_POST['accept'])){
            $accept = true;
        }else {
            $accept = false;
        }

        $arrayContacts = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'message' => $_POST['message'],
        );

        require_once('views/templates/header.php');
        require_once('views/contact/registerViewContact.php');
        require_once('views/templates/footer.php');

    }

    public function listContacts()
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();
        $result = $contactModel -> listContacts();

        $arrayContacts = array();
        while($contact = $result -> fetch_assoc()){
            array_push($arrayContacts, $contact);
        }
        
        require_once('views/templates/header.php');
        require_once('views/contact/listContacts.php');
        require_once('views/templates/footer.php');
    }
}
