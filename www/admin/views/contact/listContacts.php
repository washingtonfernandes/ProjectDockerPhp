
<h1>Lista de Contatos</h1>

<table class="table table-striped">

    <tr>
        <th>ID Cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Message</th>
        <th colspan="1">Ações</th>
    </tr>

    <?php
        foreach($arrayContacts as $contact){
    ?>  

        <tr>
            <td>
                <?=$contact['idContact']?>
            </td>
            <td>
                <?=$contact['name']?>
            </td>
            <td>
                <?=$contact['email']?>
            </td>
            <td>
                <?=$contact['message']?>
            </td>
            <td>
                <a 
                    href="?controller=contact&action=updateContact&id=<?=$contact['idContact']?>" 
                    class="btn btn-warning">
                    Alterar
                </a>
            </td>
            <td>
                <a 
                    href="?controller=contact&action=deleteContact&id=<?=$contact['idContact']?>" 
                    class="btn btn-danger">
                    Deletar
                </a>
            </td>

        </tr>

    <?php
        }
    ?>

</table>

