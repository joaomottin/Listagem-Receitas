<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.php');
    exit;
}

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $pais = $_POST['pais'];
    $descricao = $_POST['descricao'];
    $imagem = $_POST['imagem'];

    $id = uniqid();

    $novaLinha = "    [\n" .
        "        'id' => '$id',\n" .
        "        'nome' => '$nome',\n" .
        "        'tipo' => '$tipo',\n" .
        "        'pais' => '$pais',\n" .
        "        'descricao' => \"$descricao\",\n" .
        "        'imagem' => '$imagem'\n" .
        "    ],\n";

    $arquivo = 'dados.php';
    $conteudo = file_get_contents($arquivo);
    $conteudo = preg_replace('/(\$receitas\s*=\s*\[)(.*)(\];)/sU', "\$receitas = [\n$2$novaLinha];", $conteudo); // nós confessamos que o gpt precisou dar uma ajuda nisso aqui kkkk

    file_put_contents($arquivo, $conteudo);

    $mensagem = 'Receita adicionada com sucesso!';
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Área Protegida</title>
</head>
<body>
    <div class="detalhes">
        <h1>Adicionar Receita</h1>

        <?php if ($mensagem): ?>
            <p style="color: green;"><?= $mensagem; ?></p>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="nome" placeholder="Nome da Receita" required><br><br>
            <input type="text" name="tipo" placeholder="Tipo (Doce, Salgado...)" required><br><br>
            <input type="text" name="pais" placeholder="País de Origem" required><br><br>
            <textarea name="descricao" placeholder="Descrição" required></textarea><br><br>
            <input type="text" name="imagem" placeholder="URL da Imagem" required><br><br>
            <button type="submit">Adicionar Receita</button>
        </form>

        <div class="voltar">
            <a href="index.php">← Voltar ao Catálogo</a>
        </div>
    </div>
</body>
</html>
