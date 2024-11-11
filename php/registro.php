<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'copinhobar';

$conn = mysqli($host, $user, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
    $endereco = $_POST['Endereco'];
    $nome = $_POST['Nome'];
    $telefone = $_POST['Telefone'];
    $data_nascimento = $_POST['dNascimento'];


    $sql = "INSERT INTO users (email, senha, endereco, nome, telefone, data_nascimento, ) 
            VALUES ('$email', '$senha', '$endereco', '$nome', '$telefone', '$data_nascimento',)";

if ($conn->query($sql) === TRUE) {
  header("Location: ../html/login.php");
  exit();
} else {
  echo "Erro: " . $conn->error;
}

}

$conn->close();
?>
