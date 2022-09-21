<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa página HTML com layout.</title>

    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <header class="jumbotron text-center mb-0 bg-secondary">
        <h2>Minha página administrativa.</h2>
        <a class="text-white" href="?controller=main&action=logout">Sair</a>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-2 p-2 bg-dark">
                <h4 class="text-white text-center p-1 bg-secondary">Menu</h4>
                <ul class="navflex-column">
                    <li class="nav-item btn btn-secondary mb-2">
                        <a class="nav-link text-white" href="?controller=site&action=home">Home</a>
                    </li>
                    <li class="nav-item btn btn-info mb-2">
                        <a class="nav-link text-white" href="?controller=client&action=listClients">Listar Clientes</a>
                    </li>
                    <li class="nav-item btn btn-info mb-2 p-1">
                        <a class="nav-link text-white" href="?controller=client&action=createClient">Inserir Cliente</a>
                    </li>

                    </li>
                    <li class="nav-item btn btn-success mb-2">
                        <a class="nav-link text-white" href="?controller=contact&action=listContacts">Listar Contatos</a>
                    </li>
                    <li class="nav-item btn btn-success mb-2 p-1">
                        <a class="nav-link text-white" href="?controller=contact&action=createContact">Inserir Contatos</a>
                    </li>
                   
                </ul>   

            </nav>
            <section class="col-10 p-4">