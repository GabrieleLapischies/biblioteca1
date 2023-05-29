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
                <p class="cnaveg"><a href="reserva_livro.php">Reserva de Livros</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="pagviscad.php">Visualização de Cadastro</a></p>
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
                
        <table border="1">
            <tr>
                <th align="center">Nome</th>
                <th align="center">Matrícula</th>
                <th align="center">CPF</th>
                <th align="center">Email</th>
                <th align="center">Data de Nascimento</th>     
            </tr>
        <?php
            include_once 'conecta.php';
            $sql = "select nome, matricula, cpf, email, data_nasc from aluno";
            $res = mysqli_query($conexao, $sql);
            while ($aluno = mysqli_fetch_array($res)) { 
            echo "<tr>";
            echo "<td>". $aluno['nome'] . "</td>";
            echo "<td>" . $aluno['matricula'] . "</td>";
            echo "<td>" . $aluno['cpf'] . "</td>";
            echo "<td>" . $aluno['email'] . "</td>";
            echo "<td>" . $aluno['data_nasc'] . "</td>"; 
            echo "</tr>";
            }
        ?>
        </table>
        
    
    </div>  
</body>
</html>
