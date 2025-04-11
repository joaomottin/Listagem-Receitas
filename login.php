<?php
session_start();

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === 'admin' && $senha === '1234') {
        $_SESSION['logado'] = true;
        header('Location: protegido.php');
        exit;
    } else {
        $erro = 'Usuário ou senha inválidos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Login do Admin</title>
</head>
<body>
    <div class="detalhes">
        <h1>Login do Admin</h1>

        <?php if ($erro): ?>
            <p style="color: red;"><?= $erro; ?></p>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuário" required><br><br>
            <input type="password" name="senha" placeholder="Senha" required><br><br>
            <button type="submit">Entrar</button>
        </form>

        <div class="voltar">
            <a href="index.php">← Voltar ao Catálogo</a>
        </div>
    </div>
</body>
</html>
