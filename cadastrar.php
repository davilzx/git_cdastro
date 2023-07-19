<?php
// Definir as variáveis para exibir as mensagens de erro
$erroNomeUsuario = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Dados do formulário (usar htmlspecialchars para proteção contra XSS)
  $nome = htmlspecialchars($_POST["nome"]);
  $email = htmlspecialchars($_POST["email"]);
  $telefone = htmlspecialchars($_POST["telefone"]);
  $login = htmlspecialchars($_POST["login"]);
  $senha = $_POST["senha"];

  // Validações (pode adicionar mais conforme necessário)
  if (empty($nome) || empty($email) || empty($telefone) || empty($login) || empty($senha)) {
    die("Preencha todos os campos do formulário.");
  }

  // Conexão com o banco de dados (substitua as informações de conexão conforme necessário)
  $servername = "localhost";
  $username = "root"; // Substitua pelo nome de usuário do seu banco de dados
  $password = "user808==dav1la77A";   // Substitua pela senha do seu banco de dados
  $dbname = "git_server";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Definir o modo de erro PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar se o nome de usuário já existe no banco de dados
    $stmt = $conn->prepare("SELECT id FROM login WHERE nome_user = :login");
    $stmt->bindParam(':login', $login);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
      $erroNomeUsuario = 'O nome de usuário já está em uso. Por favor, escolha outro nome de usuário.';
    } else {
      // Inserir os dados na tabela cliente
      $stmt = $conn->prepare("INSERT INTO cliente (nome, email, telefone) VALUES (:nome, :email, :telefone)");
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->execute();

      // Obter o ID do último cliente inserido
      $cliente_id = $conn->lastInsertId();

      // Inserir os dados na tabela login usando Prepared Statement para evitar SQL injection
      $stmt = $conn->prepare("INSERT INTO login (nome_user, senha) VALUES (:login, SHA2(:senha, 256))");
      $stmt->bindParam(':login', $login);
      $stmt->bindParam(':senha', $senha);
      $stmt->execute();

      // Obter o ID do último login inserido
      $login_id = $conn->lastInsertId();

      // Relacionar cliente e login na tabela cliente_login_rel
      $stmt = $conn->prepare("INSERT INTO cliente_login_rel (cliente_id, login_id) VALUES (:cliente_id, :login_id)");
      $stmt->bindParam(':cliente_id', $cliente_id);
      $stmt->bindParam(':login_id', $login_id);
      $stmt->execute();

      // Redirecionar para uma página de sucesso (sucesso.php) após o cadastro
      header("Location: sucesso.php");
      exit;
    }
  } catch (PDOException $e) {
    // Caso ocorra algum erro na conexão ou inserção no banco de dados
    echo "Erro: " . $e->getMessage();
  }
}
?>
