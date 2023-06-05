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
        <p class="p1">Livros cadastrados</p>
        
        <table border="1">
            <tr>
                <th align="center">Título</th>
                <th align="center">Autor</th>
                <th align="center">Área</th>
                <th align="center">Edição</th>
                <th align="center">Exclusão</th>     
            </tr>
        <?php
            include_once 'conecta.php';
            $sql = "select livro.id, titulo, autor, nome from livro inner join area on livro.id_area = area.id";
            $res = mysqli_query($conexao, $sql);
            while ($livros = mysqli_fetch_array($res)) { 
                
                echo "<tr>";
                echo "<td>". $livros['titulo'] . "</td>";
                echo "<td>" . $livros['autor'] . "</td>";
                echo "<td>" . $livros['nome'] . "</td>";
                echo "<form name='dados' method='post'>";
                echo "<input type='hidden' name='idlivro' value='". $livros['id']. "'>";
                echo "<input type='hidden' name='title' value='". $livros['titulo']. "'>";
                echo "<input type='hidden' name='aut' value='". $livros['autor']. "'>";
                echo "<input type='hidden' name='nome' value='". $livros['nome']. "'>";
                echo "<td><input class='botao' type='submit' name='editar' value='Editar'></td>";
                echo "<td><input class='botao' type='submit' name='excluir' value='Excluir'></td>";
                echo "</form>";
                echo "</tr>";

                
           
            }
            echo "</table>";
            if(isset($_POST['editar'])){
                echo "<form method='post'>";
                echo "<input type='hidden' name='idlivro' value='".$livros['id']."'><br>";
                echo "Título do Livro: <input type='text' name='title' value='".$livros['titulo']."'><br>";
                echo "Nome do Autor: <input type='text' name='autor'value='".$livros['autor']."'><br>";
                echo "Nome da Área: <input type='text' name='nome'value='".$livros['nome']."'><br>";
                echo "<input type='submit' name='confirma_ed' value='Confirmar'>";
                echo "<input type='submit' name='cancela_ed' value='Cancelar'>";
                echo "</from>";

                if (isset($_POST['confirma_ed'])){
                    $ltitulo = $_POST['title'];
                    $lautor = $_POST['aut'];
                    $larea = $post['nome'];
                    
                $sql = "update livro set titulo='$ltitulo', autor='$lautor', nome='$larea' where id = '". $_POST['idlivro'];
                $res = mysqli_query($conexao, $sql);
                    
                }
            
            
            
            }
            elseif (isset($_POST['excluir'])){
                $sql = "delete from livro where id = " . $_POST['idlivro'];
                $res = mysqli_query($conexao, $sql);
                header('Location: viscadlivro.php'); 
            }
        ?>
        
    </div>
</body>
</html>
