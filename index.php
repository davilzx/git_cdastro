<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel de Cadastro</title>
  <style>
    /* Estilos gerais */
    body {
      font-family: Arial, sans-serif;
      background-color: #1a1a1a;
      color: #fff;
      margin: 0;
      padding: 0;
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
      /* Animação de entrada do título "Cadastro" */
      animation: fadeInTitle 2s;
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

    /* Animação de entrada do título "Cadastro" */
    @keyframes fadeInTitle {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Estilos para o formulário */
    .panel form {
      animation: fadeInForm 2s;
    }

    .panel label,
    .panel input,
    .panel .buttons {
      opacity: 0;
      animation: fadeInField 1s forwards;
    }

    @keyframes fadeInForm {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes fadeInField {
      to {
        opacity: 1;
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
  </style>
</head>
<body>
  <div class="container">
    <div class="panel">
      <h2>Cadastro</h2>
      <form action="cadastrar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label for="login">Nome do usuário:</label>
        <input type="text" id="login" name="login" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <div class="buttons">
          <input type="submit" value="Cadastrar">
          <a href="login/login.php">Já tem conta?</a> <!-- Redirecionamento para a página de login -->
        </div>
      </form>
    </div>
  </div>
</body>
</html>

