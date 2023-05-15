<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
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
    <section class="sect">
    <div class="conteudo">
    <form id="formc" action="cadastrar_aluno.php" method="post">
        <p class="p1"> Formulário de cadastro de aluno </p>

        <label> Nome: <input name="nome" type="text" id="nomealuno"></label><br>
        <label> Matrícula: <input name="matr" type="text" id="matr"></label><br>
        <label> CPF: <input name="cpf" type="text" id="cpfaluno"></label><br>
        <label> Email: <input name="email" type="text" id="emailaluno"></label><br>
        <label> Data de Nascimento: <input name="dtnasc" type="date" id="dtnasc"></label><br>
       
        
        <input name="cad" type="submit" id="cad" value="Cadastrar">
        <input name="limp" type="reset" id="limp" value="Limpar">
    </form>
    </div>
    </section>
    
</body>
</html>