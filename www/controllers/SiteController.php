<?php

class SiteController{

    //criar funções para cada evento que vai ter

    public function home(){
        require_once('views/templates/header.php');
        require_once('views/pages/home.php');
        require_once('views/templates/footer.php');
    }

    public function products(){
        require_once('views/templates/header.php');
        require_once('views/pages/products.php');
        require_once('views/templates/footer.php');         
    }

}

?>