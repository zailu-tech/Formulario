<?php
// verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$nascimento = $_POST["nascimento"];
$curso = $_POST["curso"];
$turno = $_POST["turno"];
$aceito = isset($_POST["aceito"]) ? "Sim" : "Não";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <meta http-equiv="refresh" content="10;url=ex006.html"> <!-- Redireciona após 10 segundos -->
</head>
<body>
    <!-- Exibir mensagem de sucesso e os dados enviados -->
 <p style = 'color: green; '> <strong>Formulário enviado com sucesso!</strong></p>
<p><b>Você será redirecionado de volta em 10 segundos.</b></p>
<p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
<p><strong>Telefone:</strong> <?= htmlspecialchars($tel) ?></p>
<p><strong>Data de Nascimento:</strong> <?= htmlspecialchars($nascimento) ?></p>
<p><strong>Curso:</strong> <?= htmlspecialchars($curso) ?></p>
<p><strong>Turno:</strong> <?= htmlspecialchars($turno) ?></p>
<p><strong>Aceito os termos:</strong> <?= htmlspecialchars($aceito) ?></p>
</body>
</html>
<!-- Se os dados não foram enviados, exibir mensagem de erro -->
<?php
} else {
    echo "<p style = 'color: red; '> <strong>Nenhum dado foi enviado.</strong></p>";

}
?>