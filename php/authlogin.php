<?php
session_start();
include 'bd_connect.php';

if (isset($_SESSION['usuario_id'])) {
    header("Location: ../html/perfil.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $sql = "SELECT id,senha FROM usuarios WHERE email = '$email'";
    $result = $con->query($sql);


    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $senha_protegida = $user['senha'];

        // Verifica a senha inserida com o hash
        if (password_verify($senha, $senha_protegida)) {
        
            $_SESSION['usuario_id'] = $user['id'];
            header("Location: ../html/perfil.php");
            exit();
        } else {
            echo "Email ou senha incorretos.";
        }
    } else {
        echo "Email ou senha incorretos.";
    }
}

$con->close();
?>
