<?php
include "conecta.php";

$sql = "select * from livro";
$res = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($res);

echo "form name='dados' action='editar_excluir_livro.php' method='post'>";

for ($i = 0; $i < $linhas; $i++){
    $resgitro = mysqli_fetch_array($res);

    echo $registro['titulo'] . "<br/>";
    echo $registro['autor'] . "<br/>";
    echo $registro['nome'] . "<br/>";

    echo "<button name='editar' value='" . $registro['id'] . "'>Editar</button>";

    echo "<button name='excluir' value='" . $registro['id'] . "'>Excluir</button><br/>";
}

echo "</form>";

?>

<?php
if(isset($_POST['editar'])){
    $codigo = $_POST['editar'];
    $sql = "select * from livros where id = '$codigo'";
    $res = mysqli_query($conexao, $sql);
    $registro = mysqli_fetch_array($res);

    echo "<form name='dados' action='editar_excluir_livro.php' method='post'>";
    echo "Título: <input type='text' name='title' value='" . $registro['titulo'] ."'><br/>";
    echo "Autor: <input type='text' name='aut' value='" . $registro['autor'] ."'><br/>";
    echo "Área: <input type='text' name='nome'value='".$registro['nome']."'><br>";
    
}


?>