<?php include 'dados.php'; ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Catálogo de Receitas</title>
</head>
<body>
    <h1>Catálogo de Receitas</h1>
    <form action="filtrar.php" method="GET">
        <input type="text" name="busca" placeholder="Pesquisar por nome ou tipo">
        <button type="submit">Buscar</button>
    </form>
    <div style="text-align: center; padding: 20px;">    
    <a href="login.php" style="
        background-color: #8e44ad;
        color: #fff;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        text-decoration: none;
    ">Área Administrativa</a>
</div>
    <div class="container">
        <?php foreach ($receitas as $receita): ?>
            <div class="receita">
                <img src="<?= $receita['imagem']; ?>" alt="<?= $receita['nome']; ?>">
                <h2><?= $receita['nome']; ?></h2>
                <a href="detalhes.php?id=<?= $receita['id']; ?>">Ver Mais</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
