<h1>Editar nota</h1>
<?php
//include('config.php');
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id'];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=update&acao=update" method="POST">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?= $row->titulo;?>">

    </div>
    <div class="mb-3">
        <label>Nota</label>
        <input type="text" name="nota" class="form-control" value="<?= $row->nota;?>">
    </div>
    <div class="mb-3">
        <button type="submit"  class="btn btn-success" href="listar-usuarios.php" >Salvar</button>   
        <button type="delet" class="btn btn-primary">Resetar</button> 
    </div>
</form>