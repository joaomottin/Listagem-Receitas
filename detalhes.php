<<<<<<< HEAD

=======
>>>>>>> 8a8dbde (Atualização códigos)
<?php 
include 'dados.php'; 

$id = $_GET['id'] ?? null;
$receitaSelecionada = null;

foreach ($receitas as $receita) {
    if ($receita['id'] == $id) {
        $receitaSelecionada = $receita;
        break;
    }
}

if (!$receitaSelecionada) {
    echo "<p>Receita não encontrada.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
<<<<<<< HEAD
    <title>Detalhes da Receita</title>
</head>
<body>
    <h1><?= $receitaSelecionada['nome']; ?></h1>
    <img src="<?= $receitaSelecionada['imagem']; ?>" alt="<?= $receitaSelecionada['nome']; ?>" width="300">
    <p><strong>Tipo:</strong> <?= $receitaSelecionada['tipo']; ?></p>
    <p><strong>País de Origem:</strong> <?= $receitaSelecionada['pais']; ?></p>
    <p><?= $receitaSelecionada['descricao']; ?></p>
    <a href="index.php">Voltar ao Catálogo</a>
=======
    <title><?= $receitaSelecionada['nome']; ?> | Detalhes da Receita</title>
</head>
<body>
    <div class="detalhes">
        <h1><?= $receitaSelecionada['nome']; ?></h1>
        <img src="<?= $receitaSelecionada['imagem']; ?>" alt="<?= $receitaSelecionada['nome']; ?>">

        <div class="info">
            <p><strong>Tipo:</strong> <?= $receitaSelecionada['tipo']; ?></p>
            <p><strong>País de Origem:</strong> <?= $receitaSelecionada['pais']; ?></p>
        </div>

        <div class="descricao">
            <?= $receitaSelecionada['descricao']; ?>
        </div>

        <div class="voltar">
            <a href="index.php">← Voltar ao Catálogo</a>
        </div>
    </div>
>>>>>>> 8a8dbde (Atualização códigos)
</body>
</html>
