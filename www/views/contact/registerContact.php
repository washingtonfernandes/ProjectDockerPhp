<h1>Formulário de Contato</h1>
<form action="?controller=contact&action=registerViewContact" method="post">
    
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="comment">Mensagem</label>
        <input type="text" class="form-control" name="message">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>