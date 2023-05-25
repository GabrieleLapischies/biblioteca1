<?php
    $serv = "localhost";
    $user = "root";
    $pass = "";
    $bd = "bdimagens";

    $conexao = mysqli_connect($serv, $user, $pass, $bd);

    if (!$conexao)
        die("Falha na conexão");
?> 

<?php
    include_once 'conecta.php';
?>

<!DOCTYPE html>
<html>
    <head lang="en">
    <meta charset="UTF-8">
    <title>Armazenamento de imagens no MySQL</title>
</head>
<body>
    <h2>Selecione um arquivo de imagem</h2>
    <form enctype="multipart/form-data" action="upload.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
        <div><input name="descricao" type="textarea"/></div>
        <div><input name="imagem" type="file"/></div>
        <div><input type="submit" value="Salvar"/></div>
    </form>
    <br />
    <table border="1">
    <tr>
        <td align="center">Código</td>
        <td align="center">Descrição</td>
        <td align="center">Visualizar imagem</td>
        <td align="center">Excluir imagem</td>
    </tr>
<?php
    $querySelecao = "SELECT codigo, descricao, imagem FROM tabela_imagens";
    $resultado = mysqli_query($conexao, $querySelecao);
    while ($aquivos = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td align="center"><?php echo $aquivos['codigo']; ?></td>
            <td align="center"><?php echo $aquivos['descricao']; ?></td>
            <td align="center"><?php echo '<a target="_blank" href="ver_imagem.php?codigo='.$aquivos['codigo'].'">Imagem '.$aquivos['codigo'].'</a>'; ?></td>
            <td align="center"><?php echo '<a href="excluir_imagem.php?codigo='.$aquivos['codigo'].'">Imagem '.$aquivos['codigo'].'</a>'; ?></td>
        </tr>
<?php } ?>
</table>

<?php
    require("conecta.php");
    $descricaoImagem = $_POST['descricao'];
    $imagem = $_FILES['imagem']['tmp_name'];
    $tamanho = $_FILES['imagem']['size'];
    $tipo = $_FILES['imagem']['type'];
    $nome = $_FILES['imagem']['name'];
    if ($imagem != "none" ){
 $fp = fopen($imagem, "rb");
 $conteudo = fread($fp, $tamanho);
 $conteudo = addslashes($conteudo);
 fclose($fp);
 $queryInsercao = "INSERT INTO tabela_imagens (descricao, imagem) VALUES
('$descricaoImagem','$conteudo')";
 mysqli_query($conexao, $queryInsercao) or die("Algo deu errado ao inserir o
registro. Tente novamente.");
 if(mysqli_affected_rows($conexao) > 0)
 print "Imagem salva";
 else
 print "Não foi possível salvar a imagem";
}
else
 print "Não foi possível carregar a imagem.";
header('Location: index.php');
?> 


</body>
</html>


