<h1>Registro de Cliente - Visualização</h1>

<table class="table table-striped">
    <tr>
        <th>Nome:</th>
        <td>
            <?=$arrayClient['name']?>
        </td>
    </tr>

    <tr>
        <th>Email:</th>
        <td>
            <?=$arrayClient['email']?>
        </td>
    </tr>

    <tr>
        <th>Telefone:</th>
        <td>
            <?=$arrayClient['phone']?>
        </td>
    </tr>

    <tr>
        <th>Gênero:</th>
        <td>
            <?=$arrayClient['gender']?>
        </td>
    </tr>

    <tr>
        <th>Termo:</th>
        <td>
            <?php
                if($arrayClient['accept']){
                    echo('Termo aceito');
                }else{
                    echo('Termo não aceito.');
                }
                    
            ?>

        </td>
    </tr>


</table>