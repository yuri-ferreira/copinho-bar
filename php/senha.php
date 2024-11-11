<?php
session_start();
include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../html/login.php");
    exit();
}

$user_id = $_SESSION['usuario_id'];
$nova_senha = $_POST['nova_senha'];

// Atualiza a senha no banco de dados
$sql = "UPDATE usuarios SET senha = '$nova_senha' WHERE id = $user_id";

// Redireciona de volta para a página de perfil sem redirecionar para o login
header("Location: ../html/perfil.php");
exit();
?>
