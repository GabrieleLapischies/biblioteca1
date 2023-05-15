<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de cadastro</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
    <header>
        <div>
            <p>Sistema de Empréstimo de Livros</p>
        </div>
    </header>
    <nav class="naveg">
            <div>
                <p class="cnaveg"><a href="formularioaluno.php">Cadastrar Aluno</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="formularioarea.php">Cadastrar Área</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="formulariolivro.php">Cadastrar Livro</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="visualizar_cadastro.php">Visualizar cadastro</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="index.php">Página inicial</a></p>
            </div>
    </nav>
    <div class="conteudo">
        <p class="p1">Alunos cadastrados</p>
        <?php
        include_once 'conecta.php';

        $sql = "select * from aluno";

        $res = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($res);

        for ($i = 0; $i < $linhas; $i++){
            $user = mysqli_fetch_array($res);
            echo $user['nome'] . " -- ";
            echo $user['matr'] . " -- ";
            echo $user['cpf'] . " -- ";
            echo $user['email'] . " -- ";
            echo $user['dtnasc'] . "<br/>";
        }


        ?>
    </div>
</body>
</html>
