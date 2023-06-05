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
    //cadastrando os alunos
    include_once 'conecta.php';

    $nome = $_POST['nome'];
    $matr = $_POST['matr'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $dtnasc = $_POST['dtnasc'];

    $sql = "insert into aluno (nome, matricula, cpf, email, data_nasc) values ('$nome', '$matr', '$cpf', '$email', '$dtnasc')";

    $res = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    ?>
</body> 
</html>