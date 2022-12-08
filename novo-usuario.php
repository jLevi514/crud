<h1>Cadastra Nova Nota</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control">

    </div>
    <div class="mb-3">
        <label>Nota</label>
        <input type="text" name="nota" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>  
        <button type="reset" class="btn btn-primary">Resetar</button> 
    </div>
</form>