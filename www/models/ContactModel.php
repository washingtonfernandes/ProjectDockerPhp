<?php

class ContactModel{

    public function listContacts()
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = 'SELECT * FROM contacts';

        return $connection -> query($sql);
    }
}
?>