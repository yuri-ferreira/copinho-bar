<?php
session_start();
include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';


if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../html/login.php");
    exit();
}
if($_SESSION['role'] !== "adm") {
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="/copinho-bar/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/1393f63ea6.js"
      crossorigin="anonymous"
    ></script>
    <title>Copinho Bar</title>
  </head>
  <body>
    <a href="../index.php">Voltar Home</a>
    <div class="menu">
      <button class="abrir" id="abrirAdicionar">Adicionar Produto</button>
      <button class="abrir" id="abrirEdi">Editar Produto</button>
      <button class="abrir" id="abrirDel">Deletar Produto</button>
    </div>
    <div class="tela-adicionar" id="adicionar">
      <button class="fechar" id="fecharAdd">
        <i class="fa-solid fa-rectangle-xmark"></i>
      </button>
      <form action="../php/registrar_produto.php" method="post" enctype="multipart/form-data" >
        <label for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" required />
        <label for="preco_produto">Preço do Produto</label>
        <input name="preco_produto" type="number" step="0.01" min="0.01" required />
        <label for="imagem_produto">Imagem do Produto</label>
        <input
    id="imagem"
    type="file"
    name="imagem_produto"
    accept="image/png, image/jpeg"
    required
        />
        <input type="submit" value="Cadastrar Produto" />
      </form>
    </div>
    <div class="tela-editar" id="editar">
      <button class="fechar" id="fecharEdi">
        <i class="fa-solid fa-rectangle-xmark"></i>
      </button>
      <form action="../php/editar_produto.php" method="post">
        <label for="nomeproduto">Nome do Produto</label>
        <input type="text" name="nomeproduto" />
        <label for="nomenovo">Novo nome</label>
        <input type="text" name="nomenovo">
        <label for="preconovo">Novo Preço</label>
        <input type="number" name="preconovo" step="0.01" min="0.01" />
        <input type="submit" value="Editar Produto" />
      </form>
    </div>
    <div class="tela-deletar" id="deletar">
    <ul class="deletar-ul">
      <button class="fechar" id="fecharDel"><i class="fa-solid fa-rectangle-xmark"></i></button>
      <form action="../php/deletar_produto.php" method="post">
        <label for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" />
        <input type="submit" value="Deletar Produto" />
      </form>
</ul>
</div>
    <script src="/copinho-bar/js/editarAdicionar.js"></script>
  </body>
</html>
