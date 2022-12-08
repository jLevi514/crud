<h1>Listar Notas</h1>
<?php
// include('config.php');

$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

$count = 1;



if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Titulo</th>";
    print "<th>Nota</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $count++ . "</td>";
        print "<td>" . $row->titulo . "</td>";
        print "<td>" . $row->nota . "</td>";
        print "<td> <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>

         <button onclick=\"if(confirm('Quer exluir essa nota ?')){location.href='?page=delete&acao=delete&id=" . $row->id . "';} else{false;}\"
         class='btn btn-danger'>Exluir</button>
         </td>";

        print "</tr>";
    }
    print "</table>";

} else {
    print "<p class='alert alert-danger'>Não encontrou resultado!</p>";
}

?>