<?php
//include('listar-usuarios.php');
    if(empty($_REQUEST["acao"])){
    $_REQUEST["acao"] = 'default'; 
    }
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $titulo = $_POST["titulo"];
            $nota = $_POST["nota"];
           // $senha = md5 ($_POST["senha"]);

            $sql = "INSERT INTO usuarios (titulo, nota) VALUES (
                '{$titulo}' , '{$nota}')";

            $res = $conn->query($sql);
            if($res) {
                
                print"<script>location.href='?page=listar';</script>";
            }
            break;

            case 'update':
                $titulo = $_POST["titulo"];
                $nota = $_POST["nota"];
                
                $sql = "UPDATE usuarios SET titulo='{$titulo}', nota='{$nota}'
                        WHERE
                            id=".$_REQUEST["id"];
                $res = $conn->query($sql);

                if($res==true){
                    print"<script>alert('Editado com sucesso!');</script>";
                    print"<script>location.href='?page=update';</script>";
                    
            $_REQUEST['page'] = '';
                }else{
                    print"<script>alert('Não foi possivel editar!');</script>";
                    print"<script>location.href='?page=update';</script>";
                }

                break;

                case 'delete':
                    $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

                    $res = $conn->query($sql);

                    if($res==true){
                        print"<script>alert('Excluido com sucesso!');</script>";
                        print"<script>location.href='?page=delet';</script>";
            $_REQUEST['page'] = '';
                    }else{
                        print"<script>alert('Não foi possivel excluir!');</script>";
                        print"<script>location.href='?page=delete';</script>";
                    }

                    break;

                  default:
                break;

    }