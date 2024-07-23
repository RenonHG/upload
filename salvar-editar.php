<?php
$id = $_GET['id'];
$nome = $_POST['nome'];
$foto = $_FILES['foto'];

$nomeCaminhoDaFoto = "img/" . round(microtime(true)) . $foto['name'];
move_uploaded_file($foto['tmp_name'], $nomeCaminhoDaFoto);

include 'conexao.php';

if($foto['name'] !=""){
    $script = "UPDATE foto SET nome='$nome', foto='$nomeCaminhoDaFoto' WHERE id='$id'";
} else{
    $script = "UPDATE foto SET nome='$nome' WHERE id='$id'";

}





$resultado =$conn->query($script)->fetchAll();

?>
<a href="index.php">Início</a>