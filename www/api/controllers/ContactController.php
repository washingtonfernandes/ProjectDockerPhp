<?php

class ContactController{

    public function listContacts()
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();
        
        $result = $contactModel -> listContacts();

        $arrayContacts = array();
        while($contact = $result -> fetch_assoc()){
            array_push($arrayContacts, $contact);
        }
        header('Content-Type: application/json');
        echo json_encode($arrayContacts);
    }

    public function listContact($idContact)
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();
        
        $result = $contactModel -> listContact($idContact);

        $arrayContacts = array();
        while($contact = $result -> fetch_assoc()){
            array_push($arrayContacts, $contact);
        }
        header('Content-Type: application/json');
        echo json_encode($arrayContacts);
    }

    public function createContact()
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();

        $contact = json_decode(file_get_contents('php://input'));

        $arrayContact['name'] = $contact -> name;
        $arrayContact['email'] = $contact -> email;
        $arrayContact['message'] = $contact -> message;

        $idContact = $contactModel -> createContact($arrayContact);

    }

    public function updateContact($id)
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();

        $contact = json_decode(file_get_contents('php://input'));

        $arrayContact['idContact'] = $id;
        $arrayContact['name'] = $contact -> name;
        $arrayContact['email'] = $contact -> email;
        $arrayContact['message'] = $contact -> address;
        
        $contactModel -> updateContact($arrayContact);

    }

    public function deleteContact($id)
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();
        $contactModel -> deleteContact($id);

    }

}
