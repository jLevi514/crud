<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="    css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Nova Nota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Nota</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                        include("config.php");
                        switch (@$_REQUEST["page"]) {

                            case "novo":
                                include("novo-usuario.php");
                                break;
                            case "listar":
                                include("listar-usuarios.php");
                                break;
                            case "salvar":
                                include("salvar-usuario.php");
                                break;
                            case "editar":
                                include("editar-usuario.php");
                                break;
                            case "update":
                                include("salvar-usuario.php");
                                break;
                            case "delete":
                                include("salvar-usuario.php");
                                break;
                            default:
                                print "Ufa deu certo!!";
                        }
                        ?>
                <script src="js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                    crossorigin="anonymous"></script>
</body>

</html>