<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'copinhobar';

$conn = mysqli($host, $user, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $sql = "SELECT id FROM users WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        header("Location: perfil.php");
    } else {
        echo "Email ou senha incorretos.";
    }
}

$conn->close();
?>
