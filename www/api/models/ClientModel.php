<?php

class ClientModel{

    public function listClient($id)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            SELECT * FROM 
                clients
            WHERE
                idClient = {$id}
        ";

        return $connection -> query($sql);
    }

    public function listClients()
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = 'SELECT * FROM clients';

        return $connection -> query($sql);
    }

    public function createClient($arrayClient)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            INSERT INTO clients
                (name, email, phone, address)
            VALUES
            (
                '{$arrayClient['name']}', 
                '{$arrayClient['email']}',
                '{$arrayClient['phone']}',
                '{$arrayClient['address']}'
            )
        ";
        $connection -> query($sql);
        return $connection -> insert_id;
    }

    public function updateClient($arrayClient)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            UPDATE clients
                SET
                    name='{$arrayClient['name']}',
                    phone='{$arrayClient['phone']}',
                    email='{$arrayClient['email']}',
                    address='{$arrayClient['address']}'
                WHERE
                    idClient = {$arrayClient['idClient']}
        ";
        return $connection -> query($sql);
    }

    public function deleteClient($id)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            DELETE FROM 
                clients
            WHERE
                idClient = {$id}
        ";

        return $connection -> query($sql);
    }
}
?>