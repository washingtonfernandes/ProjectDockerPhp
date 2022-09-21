<?php

class ClientController{

    public function listClients()
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        
        $result = $clientModel -> listClients();

        $arrayClients = array();
        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);
        }
        header('Content-Type: application/json');
        echo json_encode($arrayClients);
    }

    public function listClient($idClient)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        
        $result = $clientModel -> listClient($idClient);

        $arrayClients = array();
        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);
        }
        header('Content-Type: application/json');
        echo json_encode($arrayClients);
    }

    public function createClient()
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();

        $client = json_decode(file_get_contents('php://input'));

        $arrayClient['name'] = $client -> name;
        $arrayClient['phone'] = $client -> phone;
        $arrayClient['email'] = $client -> email;
        $arrayClient['address'] = $client -> address;

        $idClient = $clientModel -> createClient($arrayClient);

    }

    public function updateClient($id)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();

        $client = json_decode(file_get_contents('php://input'));

        $arrayClient['idClient'] = $id;
        $arrayClient['name'] = $client -> name;
        $arrayClient['phone'] = $client -> phone;
        $arrayClient['email'] = $client -> email;
        $arrayClient['address'] = $client -> address;
        
        $clientModel -> updateClient($arrayClient);

    }

    public function deleteClient($id)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $clientModel -> deleteClient($id);

    }

}
