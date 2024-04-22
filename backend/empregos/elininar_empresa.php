<?php

include_once('../conexao_banco_dados/conexao.php');
$id = $_GET['codigo'];

$sql_eliminar=mysqli_query($ligar, "DELETE FROM tb_empregador WHERE id='$id' ");

if($sql_eliminar==true){
    echo "<script>
        alert('Usuario excluído com sucesso!');
        window.location.href='../../index.html';
    </script>";

} else{
    echo "<script>
        alert('Falha ao excluir usuário!');
        window.location.href='../../index.html';
    </script>";
}


?>