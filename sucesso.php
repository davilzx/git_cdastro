<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sucesso!</title>
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

    .message {
      background-color: #333;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      max-width: 400px;
      width: 100%;
      /* Animação do painel */
      animation: fadeInPanel 1.5s;
    }

    .message h2 {
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

    /* Estilos para o botão Voltar */
    .message a {
      display: block;
      width: 100%;
      text-align: center;
      text-decoration: none;
      color: white;
      padding: 10px;
      border-radius: 5px;
      margin-top: 20px;
      font-size: 16px;
      background-image: linear-gradient(to right, #33cc33, #66ff66);
    }

    .message a:hover {
      background-image: linear-gradient(to right, #66ff66, #99ff99);
    }
  </style>
</head>
<body>
  <div class="message">
    <h2>Cadastro realizado com sucesso!</h2>
    <p>O seu cadastro foi efetuado com sucesso. Seja bem-vindo(a) ao nosso sistema!</p>
    <a href="login/login.php">Voltar para a página de login</a>
  </div>
</body>
</html>
