<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de area</title>
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
    <form id="formc" action="cadastrar_prof.php" method="post">
        <p class="p1"> Formulário de cadastro da área do livro </p>

        <!--<label> ID: <input name="nome" type="text" id="nomealuno"></label><br>-->
        <label> Nome da área: <input name="matr" type="text" id="matr"></label><br>
        
       
        
        <input name="cad" type="submit" id="cad" value="Cadastrar">
        <input name="limp" type="reset" id="limp" value="Limpar">
    </form>
    </div>
    </section>
    
</body>
</html>