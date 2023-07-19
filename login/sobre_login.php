<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre o Login</title>
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
      max-width: 600px;
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

    /* Estilos para o botão */
    .panel input[type="submit"] {
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
      cursor: pointer;
    }

    .panel input[type="submit"]:hover {
      background-image: linear-gradient(to right, #66ff66, #99ff99);
    }

    /* Outros estilos */
    .panel p {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="panel">
      <h2>Sobre o Login</h2>
      <p>
        Esta é a página "Sobre o Login", onde você pode encontrar informações sobre o projeto e o sistema de login.
      </p>
      <p>
        O projeto foi desenvolvido utilizando HTML, CSS, e PHP para a criação das páginas e interações com o servidor de banco de dados MySQL. Foram aplicados métodos ágeis de desenvolvimento para garantir uma maior eficiência e qualidade no processo de criação.
      </p>
      <p>
        Para garantir a segurança das informações dos usuários, as senhas são armazenadas no banco de dados utilizando o algoritmo de hash SHA-256, o que torna as senhas praticamente impossíveis de serem decifradas mesmo em caso de acesso não autorizado ao banco de dados.
      </p>
      <form action="login.php" method="post">
        <input type="submit" value="Encerrar Sessão">
      </form>
    </div>
  </div>
</body>
</html>
