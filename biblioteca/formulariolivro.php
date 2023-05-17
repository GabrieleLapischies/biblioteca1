<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
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
    <section class="sect">
    <div class="conteudo">
    <form id="formc" action="cadastra_livro.php" method="post">
        <p class="p1"> Formulário de cadastro de livro </p>

        <label> Título: <input name="title" type="text" id="title"></label><br>
        <label> Autor: <input name="aut" type="text" id="aut"></label><br>
             <selec name="select_area">
                <option>Selecione</option>
                <?php
                include_once 'conecta.php';

                $result_area = "select * from area";
                $resultado_area = mysqli_query($conexao, $result_area);
                while ($row_area = mysqli_fetch_assoc($resultado_area)){?>
                    <option value="<?php echo $row_area['id'];?>">
                        <?php 
                            echo $row_area['nome'];
                        ?>
                    </option>
                <?php
                }
                ?>
             </selec>

       
        
        <input name="cad" type="submit" id="cad" value="Cadastrar">
        <input name="limp" type="reset" id="limp" value="Limpar">
    </form>
    </div>
    </section>
    
</body>
</html>