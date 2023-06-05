<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //cadastrando as áreas
    include_once 'conecta.php';

    $nome_area = $_POST['nome'];
    $cod_area = $_POST['id'];

    $sql = "insert into area (nome) values ('$nome_area')";
    
    $res = mysqli_query($conexao, $sql);

    mysqli_close($conexao);


    ?>
</body>
</html>