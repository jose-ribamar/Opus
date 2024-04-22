<?php

// informa o banco de dados que queremos usar
require_once('../conexao_banco_dados/conexao.php');

// inserir os valores que estao presente nos arquivos de cadastro


$nome = $_POST["txt_nome"];
$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];
$email = $_POST["txt_email"];
$sexo = $_POST["txt_sexo"];
$nivel = $_POST["txt_nivel"];
$escolar = $_POST["txt_escolar"];
$descricao = $_POST["txt_descricao"];

// tabela usu

$sql_cadastro_usu = mysqli_query($ligar, "INSERT INTO usu (nome, usuario, email) values ('$nome','$usuario','$email')");

// $descricao = $_POST["Descricao"];
// insere os valors no banco de dados

$sql_cadastro = mysqli_query($ligar, "INSERT INTO tb_usuarios (nome, usuario, senha, email, sexo, nivel, escolaridade, descricao) values ('$nome','$usuario','$senha','$email','$sexo','$nivel','$escolar','$descricao')");



// descricao se o cadastro foi feito com secesso
if ($sql_cadastro == true){
    // caso o cadastro tenha cido bem sucedido
    echo "<script>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='../logar/grupo_usuarios.php';
    </script>";
}else{
//  caso nao tenha realizado o cadastro
    echo "<script>
        alert('Falha no cadastro!');
        window.location.href='cadastro_funcionario.php';
    </script>";

}


?>