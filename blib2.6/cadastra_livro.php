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
    //cadastrando os livros
    include_once 'conecta.php';

    $titulo = $_POST['title'];
    $autor = $_POST['aut'];
    $area = $_POST['select_area'];
    

    $sql = "insert into livro (titulo, autor, id_area) values ('$titulo', '$autor', '$area')";

    $res = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    ?>
</body> 
</html>