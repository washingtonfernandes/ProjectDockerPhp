
<h1>Lista de Contatos</h1>

<table class="table table-striped">

    <tr>
        <th>ID Contato</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Mensagem</th>
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
        </tr>

    <?php
        }
    ?>

</table>

