<h2>Cadastro de Contatos</h2>

<form action="?controller=contact&action=createContactAction" method=POST enctype='multipart/form-data'>
    <div class="form-group">
        <div>
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="mail" class="form-control" name="email">
        </div>
        <div>
            <label for="comment">Message:</label>
            <input type="text" class="form-control" name="message" >
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>