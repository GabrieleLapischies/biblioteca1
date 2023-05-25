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
        <p class="p1">Livros cadastrados</p>
        <?php /*
        include_once 'conecta.php';

        $sql = "select titulo, autor, nome from area inner join livro on livro.id_area = area.id
        ";

        $res = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($res);

        for ($i = 0; $i < $linhas; $i++){
            $user = mysqli_fetch_array($res);
            echo $user['titulo'] . " -- ";
            echo $user['autor'] . " -- ";
            echo $user['nome'] . "<br/>";
        }


        */?>

<table border="1">
    <tr>
        <td align="center">Título</td>
        <td align="center">Autor</td>
        <td align="center">Área</td>
        <td align="center"></td>
        <td align="center"></td>     
    </tr>
<?php
    include_once 'conecta.php';
    $sql = "select titulo, autor, nome from area inner join livro on livro.id_area = area.id";
    $res = mysqli_query($conexao, $sql);
    while ($livros = mysqli_fetch_array($res)) { ?>
        <tr>
            <td align="center"><?php echo $livros['titulo']; ?></td>
            <td align="center"><?php echo $livros['autor']; ?></td>
            <td align="center"><?php echo $livros['nome']; ?></td>
            <td align="center"><?php echo '<a target="_blank" href="ver_imagem.php?codigo='.$aquivos['codigo'].'">Imagem '.$aquivos['codigo'].'</a>'; ?></td>
            <td align="center"><?php echo '<a href="excluir_imagem.php?codigo='.$aquivos['codigo'].'">Imagem '.$aquivos['codigo'].'</a>'; ?></td>
            </tr>
<?php } ?>
</table>
    </div>
</body>
</html>
