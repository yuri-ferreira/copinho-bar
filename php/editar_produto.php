<?php
include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';
$nome_produto_atual = $_POST['nomeproduto'];
$nome_novo = $_POST['nomenovo'];
$preco_novo = $_POST['preconovo'];


$sql = "SELECT * FROM produtos WHERE nome_produto = '$nome_produto_atual'";
$resultado = $con->query($sql);

if($resultado->num_rows > 0) {
  $sql_update = "UPDATE produtos
  SET nome_produto = '$nome_novo', preco_produto = '$preco_novo'
  WHERE nome_produto = '$nome_produto_atual'";
  
if ($con->query($sql_update) === TRUE) {
$mensagem = "Produto atualizado com sucesso!";
} else {
 $con->error;
}
} 

?>