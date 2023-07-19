<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    /* Estilos gerais */
    body {
      font-family: Arial, sans-serif;
      background-color: #1a1a1a;
      color: #fff;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .panel {
      /* Estilos do painel */
      background-color: #333;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      max-width: 400px;
      width: 100%;
      /* Animação do painel */
      animation: fadeInPanel 1.5s;
    }

    .panel h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    /* Animação de entrada do painel */
    @keyframes fadeInPanel {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Estilos para os botões */
    .panel input[type="submit"],
    .panel a {
      display: block;
      width: 100%;
      text-align: center;
      text-decoration: none;
      color: white;
      padding: 10px;
      border-radius: 5px;
      margin-top: 10px;
      font-size: 16px;
    }

    .panel input[type="submit"] {
      background-image: linear-gradient(to right, #0080ff, #00ccff);
    }

    .panel input[type="submit"]:hover {
      background-image: linear-gradient(to right, #00ccff, #00e6ff);
    }

    .panel a {
      background-image: linear-gradient(to right, #33cc33, #66ff66);
    }

    .panel a:hover {
      background-image: linear-gradient(to right, #66ff66, #99ff99);
    }

    /* Outros estilos */
    .panel form label {
      display: block;
      margin-bottom: 5px;
    }

    .panel input {
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: none;
    }

    /* Estilos para o link "Não tem conta? Clique aqui para cadastrar." */
    .panel .register-link {
      display: block;
      text-align: center;
      text-decoration: none;
      color: #fff;
      margin-top: 10px;
      font-size: 14px;
    }

    .panel .register-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="panel">
      <h2>Login</h2>
      <?php
      // Verificar se há mensagem de erro na sessão e exibi-la
      if (isset($_SESSION['error_message'])) {
        echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']); // Limpar a mensagem da sessão após exibi-la
      }
      ?>
      <form action="login_handler.php" method="post">
        <label for="login">Nome do usuário:</label>
        <input type="text" id="login" name="login" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <div class="buttons">
          <input type="submit" value="Entrar">
          <a class="register-link" href="cadastro.php">Não tem conta? Clique aqui para cadastrar.</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
