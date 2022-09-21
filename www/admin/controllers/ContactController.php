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
            'accept' => $accept
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

    public function createContact()
    {
        require_once('views/templates/header.php');
        require_once('views/contact/createContact.php');
        require_once('views/templates/footer.php');
    }

    public function createContactAction()
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();

        $arrayContact['name'] = $_POST['name'];
        $arrayContact['email'] = $_POST['email'];
        $arrayContact['message'] = $_POST['message'];
        
        $idContact = $contactModel -> createContact($arrayContact);

        $this -> savePhoto($idContact);

        header('Location: index.php?controller=contact&action=listContacts');
    }

    public function updateContact($id)
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();
        $result = $contactModel -> listContact($id);

        if($arrayContact = $result -> fetch_assoc())
        {
            require_once('views/templates/header.php');
            require_once('views/contact/updateContact.php');
            require_once('views/templates/footer.php');  
        }

    }

    public function updateContactAction($id)
    {
        require_once('models/ContactModel.php');
        $ContactModel = new ContactModel();

        $arrayContact['idContact'] = $id;
        $arrayContact['name'] = $_POST['name'];
        $arrayContact['email'] = $_POST['email'];
        $arrayContact['message'] = $_POST['message'];
        
        $contactModel -> updateContact($arrayContact);

        $this -> savePhoto($id);

        header('Location: index.php?controller=contact&action=listContacts');
    }

    public function deleteContact($id)
    {
        require_once('models/ContactModel.php');
        $contactModel = new ContactModel();
        $contactModel -> deleteContact($id);

        $linkPhoto = "assets/img/{$id}.jpg";

        if(is_file($linkPhoto)){
            unlink($linkPhoto);
        }


        header('Location: index.php?controller=contact&action=listContacts');
    }

    public function savePhoto($id)
    {
        if(isset($_FILES['photo']) && $_FILES['photo']['name'] != ''){
            
            $foto_temp = $_FILES["photo"]["tmp_name"];	//pega o caminho temporário do arquivo
            $foto_name = $_FILES["photo"]["name"];		//pega o nome
        
            $extensao = str_replace('.','',strrchr($foto_name, '.')); //strtolower(end(explode('.', $foto_name))); //seleciona a extenção da imagem
            $max_width = 600; //define largura máxima
            $max_height = 600; //define altura míxima
        
            // Carrega a imagem 
            $img = null;
        
            //Transforma a imagem em JPG
            if ($extensao == 'jpg' || $extensao == 'jpeg') { 
                $img = imagecreatefromjpeg($foto_temp);
            } else if ($extensao == 'png') { 
                $img = imagecreatefrompng($foto_temp);
            } else if ($extensao == 'gif') { 
                $img = imagecreatefromgif($foto_temp); 
            }  else     
                $img = imagecreatefromjpeg($foto_temp); 
        
            // Se a imagem foi carregada com sucesso, testa o tamanho da mesma
            if ($img) { 
                // Pega o tamanho da imagem e calcula proporção de resize 
                $width  = imagesx($img); 
                $height = imagesy($img); 
                $scale  = min($max_width/$width, $max_height/$height); 
                // Se a imagem é maior que o permitido, encolhe ela! 
                if ($scale < 1) { 
                    $new_width = floor($scale*$width); 
                    $new_height = floor($scale*$height);
                    // Cria uma imagem temporária 
                    $tmp_img = imagecreatetruecolor($new_width, $new_height);
                    // Copia e resize a imagem velha na nova     
                    imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, 
                                    $new_width, $new_height, $width, $height);  
                    imagedestroy($img); 
                    $img = $tmp_img; 
                }           
            }
        
            //cria imagem no diretório @imagejpeg($img,"diretorio/".$id_noticia) se já tiver com este nome vai substituir
            $localFile = "assets/img/{$id}.jpg";
            imagejpeg($img, $localFile); 
            
        }
    }
}
