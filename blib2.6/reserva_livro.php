<?php
                include_once 'conecta.php';
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Livro</title>
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
    <section class="sect">
    <div class="conteudo">
    <form id="formc" action="cadastra_livro.php" method="post">
        <p class="p1"> Formulário de reserva de livro </p>

        <label> Título: <input name="title" type="text" id="title"></label><br>
        <label> Autor: <input name="aut" type="text" id="aut"></label><br>
          
        <select name="select_area">
                <option>Selecione</option>
                <?php
                
                $result_area = "select * from area";

                $res = mysqli_query($conexao, $result_area);
                $linhas = mysqli_num_rows($res);
                for ($i = 0; $i < $linhas; $i++){
                    $area = mysqli_fetch_array($res);
                    echo "<option value = ".$area['id'].">";
                    echo $area['nome'];
                    echo "</option>";
                }


               /* outra forma
               $result_area = "select * from area";
               while ($row_area = mysqli_fetch_assoc($resultado_area)){
                   echo " <option value=$row_area['id']>";
                   echo $row_area['nome'];
                   echo "</option>";
                }*/
               
                echo "</selec>";

       ?>
        
        <input name="cad" type="submit" id="cad" value="Cadastrar">
        <input name="limp" type="reset" id="limp" value="Limpar">
    </form>
    </div>
    </section>
    
</body>
</html>