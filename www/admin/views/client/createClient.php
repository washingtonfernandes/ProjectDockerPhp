<h2>Cadastro de Clientes</h2>

<form action="?controller=client&action=createClientAction" method=POST enctype='multipart/form-data'>
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
            <label for="tel">Telefone:</label>
            <input type="text" class="form-control" name="phone" >
        </div>
        <div>
            <label for="end">Endereço:</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div>
            <label for="photo">Foto</label>
            <input type="file" class="form-control" name="photo" id="">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>