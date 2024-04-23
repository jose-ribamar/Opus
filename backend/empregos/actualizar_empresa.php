<?php

// informa o banco de dados que queremos usar
include_once('../conexao_banco_dados/conexao.php');

// inserir os valores que estao presente nos arquivos de cadastro

$id=$_POST['codigo'];

$nome = $_POST["txt_nome"];
$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];
$email = $_POST["txt_email"];
$sexo = $_POST["txt_sexo"];
$nivel = $_POST["txt_nivel"];

$descricao = $_POST["txt_descricao"];


// $descricao = $_POST["Descricao"];
// insere os valors no banco de dados

$sql_actualizar = mysqli_query($ligar, "UPDATE tb_empregador SET nome='$nome', usuario='$usuario', senha='$senha', email='$email', sexo='$sexo', nivel='$nivel', descricao='$descricao' WHERE id='$id'");

// descricao se o cadastro foi feito com secesso
if ($sql_actualizar == true){
    // caso o cadastro tenha cido bem sucedido
    echo "<script>
        alert('Usuário actualizado com sucesso!');
        window.location.href='../candidatos/confirma_usuario.php';
    </script>";
}else{
//  caso nao tenha realizado o cadastro
    echo "<script>
        alert('Falha na edição do registro!');
        window.location.href='../logar/grupo_usuarios.php';
    </script>";

}


?>