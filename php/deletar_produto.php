<?php
include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';
$nome_produto = $_POST['nome_produto'];



if (isset($_POST['nome_produto'])) {

  $sql = "DELETE FROM produtos WHERE nome_produto = '$nome_produto'";

  // Executa a consulta e verifica o resultado
  if (mysqli_query($con, $sql)) {
      echo "Produto deletado com sucesso!";
  } else {
      echo "Erro ao deletar produto: " . mysqli_error($con);
  }
} 

?>