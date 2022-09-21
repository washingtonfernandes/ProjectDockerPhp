
<h2>Alterar Contatos</h2>

<form action="?controller=contact&action=updateContactAction&id=<?=$arrayContact['idContact']?>" method=POST enctype='multipart/form-data'>
    <div class="form-group">

        <div>
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" value="<?=$arrayContact['name']?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="mail" class="form-control" name="email" value="<?=$arrayContact['email']?>">
        </div>
        <div>
            <label for="comment">Mensagem:</label>
            <input type="text" class="form-control" name="message" value="<?=$arrayContact['message']?>">
      
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>