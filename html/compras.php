<?php include 'D:/XAMP/htdocs/copinho-bar/php/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
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
    <title>Copinho Bar</title>
  </head>
  <body>
    <section class="secao">
      <div class="produtos">
        <ul>
        <?php
            include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';

            $sql = "SELECT * FROM produtos";
            $produtos = mysqli_query($con, $sql);
            
            if ($produtos && mysqli_num_rows($produtos) > 0) {
                while ($linha = mysqli_fetch_assoc($produtos)) {
                    echo "<li>";
                    echo "<div style=\"background-image: url('../uploads/" . $linha['imagem_produto'] . "'); background-size: contain;\">";
                    echo "<div class='preco'><p>R$ " . number_format($linha['preco_produto'], 2, ',', '.') . "</p></div>";
                    echo "</div>";
                    echo "<p>" . $linha['nome_produto'] . "</p>";
                    echo "</li>";
                }
            } else {
                echo "<p>Nenhum produto encontrado.</p>";
            }
            
            ?>
        </ul>
      </div>
    </section>
    <script src="/js/script.js"></script>
    <script src="/copinho-bar/js/menuham.js"></script>
  </body>
</html>
