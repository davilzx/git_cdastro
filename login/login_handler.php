<?php
// Verificação do login e redirecionamento
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Dados do formulário
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  // Conexão com o banco de dados (substitua as informações de conexão conforme necessário)
  $servername = "localhost";
  $username = "root"; // Substitua pelo nome de usuário do seu banco de dados
  $password = "user808==dav1la77A";   // Substitua pela senha do seu banco de dados
  $dbname = "git_server";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Definir o modo de erro PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para verificar o login
    $stmt = $conn->prepare("SELECT id FROM login WHERE nome_user = :login AND senha = SHA2(:senha, 256)");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
      // Redirecionamento bem-sucedido após o login
      header("Location: sobre_login.php");
      exit();
    } else {
      // Login inválido - exibir mensagem de erro
      echo "Usuário ou senha inválidos.";
    }
  } catch (PDOException $e) {
    // Caso ocorra algum erro na conexão ou consulta ao banco de dados
    echo "Erro: " . $e->getMessage();
  }
}
?>
