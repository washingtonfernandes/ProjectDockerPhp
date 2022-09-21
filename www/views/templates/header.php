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
    <header class="jumbotron text-center mb-0 bg-info">
        <h2>Programação Web - Docker</h2>
        <p>Minha primeira página - disciplina PW.</p>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-2 p-2 bg-dark">
                <h5 class="text-white text-center bg-secondary">Menu</h5>
                <ul class="navflex-column">
                    <li class="nav-item btn btn-info mb-1">
                        <a class="nav-link text-white" href="?controller=site&action=home">Home</a>
                    </li>
                    <li class="nav-item btn btn-info mb-1">
                        <a class="nav-link text-white" href="?controller=site&action=products">Produtos</a>
                    </li>

                    <li class="nav-item btn btn-success mb-1">
                        <a class="nav-link text-white" href="?controller=contact&action=registerContact">Inserir Contatos</a>
                    </li>


                    <h5 class="text-white p-1 bg-secondary">Clientes</h5>
                    <li class="nav-item btn btn-info mb-1">
                        <a class="nav-link text-white" href="?controller=client&action=listClients">Listar Clientes</a>
                    </li>

                    </li>

                </ul>   

            </nav>
            <section class="col-10 p-4">