<?php

include_once('conexao.php');
$id = $_GET['codigo'];

$sql_eliminar=mysqli_query($ligar, "DELETE FROM tb_usuarios WHERE id='$id' ");

if($sql_eliminar==true){
    echo "<script>
        alert('Usuario excluído com sucesso!');
        window.location.href='list_adm.php';
    </script>";

} else{
    echo "<script>
        alert('Falha ao excluir usuário!');
        window.location.href='list_adm.php';
    </script>";
}


?>