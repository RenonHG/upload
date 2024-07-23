<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <h1>Editar Usuário</h1>

    <?php 
    include 'conexao.php';
    $script = "SELECT * FROM foto WHERE id = " .$_GET['id'];
    $resultado = $conn->query($script)->fetch();
    // echo "<pre>";
    // print_r($resultado);


    ?>

    <form name="editar-usuario" method="post" action="salvar-editar.php?id=<?= $_GET['id'];?>" enctype="multipart/form-data">

        <label for="nome">Nome</label>
        <input name="nome" id="nome" type="text" value="<?= $resultado['nome'];?>">
        <br><br>

        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto">
        <br><br>

        <button type="submit">SALVAR</button>
        <br><br>

    </form>

    <a href="index.php">Voltar</a>
</body>

</html>