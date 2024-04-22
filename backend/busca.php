<?php

// informa o banco de dados que queremos usar
require_once('conexao.php');

// inserir os valores que estao presente nos arquivos de cadastro


$nome = $_POST["txt_nome"];
$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];
$email = $_POST["txt_email"];
$sexo = $_POST["txt_sexo"];
$nivel = $_POST["txt_nivel"];
$descricao = $_POST["txt_descricao"];


$sql_cadastro_usu = mysqli_query($ligar, "INSERT INTO usu (nome, usuario, email) values ('$nome','$usuario','$email')");

// $descricao = $_POST["Descricao"];
// insere os valors no banco de dados

$sql_cadastro = mysqli_query($ligar, "INSERT INTO tb_empregador (nome, usuario, senha, email, sexo, nivel, descricao) values ('$nome','$usuario','$senha','$email','$sexo','$nivel','$descricao')");



// descricao se o cadastro foi feito com secesso
if ($sql_cadastro == true){
    // caso o cadastro tenha cido bem sucedido
    echo "<script>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='index_usu.php';
    </script>";
}else{
//  caso nao tenha realizado o cadastro
    echo "<script>
        alert('Falha no cadastro!');
        window.location.href='cadastro_usu.php';
    </script>";

}


?>