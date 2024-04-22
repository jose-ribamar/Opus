<?php

// informa o banco de dados que queremos usar
require_once('../conexao_banco_dados/conexao.php');

// inserir os valores que estao presente nos arquivos de cadastro


$id_vaga = $_POST["id_vaga"];
$id_candidato = $_POST["id_candidato"];
$id_empre= $_POST["id_empre"];





// $descricao = $_POST["Descricao"];
// insere os valors no banco de dados

$sql_cadastro = mysqli_query($ligar, "INSERT INTO tb_cadastrado ( id_usuarios , id_vagas, id_empregador) values ('$id_candidato','$id_vaga','$id_empre' )");



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