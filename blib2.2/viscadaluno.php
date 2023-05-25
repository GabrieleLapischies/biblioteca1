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
                <p class="cnaveg"><a href="pagviscad.php">Página de Visualização de Cadastro</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="pagcadastro.php">Página de Cadastro</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="index.php">Página inicial</a></p>
            </div>
    </nav>
    <a href="javascript:window.history.go(-1)">Voltar</a>
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
            echo $user['matricula'] . " -- ";
            echo $user['cpf'] . " -- ";
            echo $user['email'] . " -- ";
            echo $user['data_nasc'] . "<br/>";
        }


        ?>
    </div>  
</body>
</html>
