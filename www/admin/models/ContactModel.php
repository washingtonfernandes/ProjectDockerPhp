<?php

class ContactModel{

    public function listContact($id)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            SELECT * FROM 
                contacts
            WHERE
                idContact = {$id}
        ";

        return $connection -> query($sql);
    }

    public function listContacts()
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = 'SELECT * FROM contacts';

        return $connection -> query($sql);
    }

    public function createContact($arrayContact)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            INSERT INTO contacts
                (name, email, message)
            VALUES
            (
                '{$arrayContact['name']}', 
                '{$arrayContact['email']}',
                '{$arrayContact['message']}'
            )
        ";
        $connection -> query($sql);
        return $connection -> insert_id;
    }

    public function updateContact($arrayContact)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            UPDATE contacts
                SET
                    name='{$arrayContact['name']}',
                    email='{$arrayContact['email']}',
                    message='{$arrayContact['message']}'
                WHERE
                    idContact = {$arrayContact['idContact']}
        ";
        return $connection -> query($sql);
    }

    public function deleteContact($id)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
            DELETE FROM 
                contacts
            WHERE
                idContact = {$id}
        ";

        return $connection -> query($sql);
    }
}
?>