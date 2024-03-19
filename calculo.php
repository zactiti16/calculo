<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Funcionário</title>
    </head>
<body>

<?php
// Verifica se os campos foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos necessários estão presentes e não estão vazios
    if (isset($_POST["salary"]) && isset($_POST["increase"])) {
        // Obtém os valores dos campos
        $salario = $_POST["salary"];
        $increase = $_POST["increase"];

        // Calcula o novo salário com o aumento
        $novo_salario = $salario + ($salario * $increase / 100);

        // Exibe o novo salário
        echo "<h2>Novo Salário:</h2>";
        echo "<p>O salário atual de R$ $salario, com um aumento de $increase%, torna-se R$ $novo_salario.</p>";
    } else {
        // Se algum dos campos estiver faltando, exibe uma mensagem de erro
        echo "<h2>Erro:</h2>";
        echo "<p>Por favor, preencha todos os campos.</p>";
    }
}
?>

</body>
</html>