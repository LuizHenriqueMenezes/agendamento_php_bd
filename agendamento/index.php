<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agendamento";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $horario = $_POST["horario"];
    $servico = $_POST["servico"];

    // Preparar e executar a consulta SQL para inserir dados
    $sql = "INSERT INTO agendamentos (nome, telefone, horario, servico) VALUES ('$nome', '$telefone', '$horario', '$servico')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
}

// Consulta SQL para obter todos os agendamentos
$sql_select = "SELECT * FROM agendamentos ORDER BY horario ASC";
$result = $conn->query($sql_select);

// Exibir a tabela com os agendamentos
if ($result->num_rows > 0) {
    echo "<h2>Agendamentos</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Horário</th><th>Serviço</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["telefone"] . "</td>";
        echo "<td>" . $row["horario"] . "</td>";
        echo "<td>" . $row["servico"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Contar o número de clientes cadastrados usando um laço FOR
    // Exemplo usando um laço FOR
    $total_cadastrados_for = 0;
    for ($i = 0; $i < $result->num_rows; $i++) {
        $total_cadastrados_for++;
    }

    echo "<p>Total de clientes cadastrados: " . $total_cadastrados_for . "</p>";
} else {
    echo "Nenhum agendamento encontrado.";
}

// Fechar a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Agendamento</title>
    <!-- Se desejar, adicione estilos CSS aqui -->
</head>

<body>

    <h2>Formulário de Agendamento</h2>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome: <input type="text" name="nome" required><br>
        Telefone: <input type="tel" name="telefone" required><br>
        Horário: <input type="datetime-local" name="horario" required><br>
        Serviço: <input type="text" name="servico" required><br>
        <input type="submit" value="Agendar">
    </form>

</body>

</html>

