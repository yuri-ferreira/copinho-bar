<?php
include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';
$nome_produto = mysqli_real_escape_string($con, $_POST['nome_produto']);
$preco_produto = $_POST['preco_produto'];
$imagem_produto = $_FILES['imagem_produto']['name'];
$imagem_destino = '../uploads/' . $imagem_produto;

if(move_uploaded_file($_FILES['imagem_produto']['tmp_name'],$imagem_destino)) {
  $sql = "INSERT INTO produtos(nome_produto, preco_produto, imagem_produto)
          VALUES ('$nome_produto', '$preco_produto', '$imagem_produto')";
}

if ($con->query($sql) === TRUE) {
  echo "Produto cadastrado com sucesso!";
  header("location: ../html/adm.php");
} else {
  echo "Erro ao cadastrar produto: " . $con->error;
}

?>