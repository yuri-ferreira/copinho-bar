<?php
include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
    $endereco = $_POST['Endereco'];
    $nome = $_POST['Nome'];
    $telefone = $_POST['Telefone'];
    $data_nascimento = $_POST['dNascimento'];
    $maior_de_idade = isset($_POST['idade']) ? 1 : 0;

    $senha_protegida = password_hash($senha, PASSWORD_DEFAULT);


    $sql = "INSERT INTO usuarios (email, senha, endereco, nome, telefone, data_nascimento, maior_de_idade) 
        VALUES ('$email', '$senha_protegida', '$endereco', '$nome', '$telefone', '$data_nascimento', $maior_de_idade)";

if ($con->query($sql) === TRUE) {
  header("Location: ../html/login.php");
  exit();
} else {
  echo "Erro: " . $con->error;
}

}

$con->close();
?>
