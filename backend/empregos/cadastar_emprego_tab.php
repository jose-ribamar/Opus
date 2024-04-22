<?php

// informa o banco de dados que queremos usar
include_once('../conexao_banco_dados/conexao.php');

// inserir os valores que estao presente nos arquivos de cadastro


$id_empregador = $_POST["id_empregador"];
$titulo = $_POST["titulo"];
$data_cadastro = $_POST["data_cadastro"];
$descricao = $_POST["descricao"];



// $descricao = $_POST["Descricao"];
// insere os valors no banco de dados

$sql_cadastro = mysqli_query($ligar, "INSERT INTO tb_vagas (id_empregador, titulo, data_cadastro, descricao) values ('$id_empregador','$titulo','$data_cadastro','$descricao')");



// descricao se o cadastro foi feito com secesso
if ($sql_cadastro == true){
    // caso o cadastro tenha cido bem sucedido
    echo "<script>
        alert('Vaga cadastrada com sucesso!');
        window.location.href='../logar/grupo_usuarios.php';
    </script>";
}else{
//  caso nao tenha realizado o cadastro
    echo "<script>
        alert('Falha no cadastro!');
        window.location.href='../logar/grupo_usuarios.php';
    </script>";

}


?>