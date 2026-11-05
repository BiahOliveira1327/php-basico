<?php
$produtos = [
    ["nome" => "Teclado mecânico", "preco" => 249.90, "estoque" => 12],
    ["nome" => "Mouse sem fio", "preco" => 79.50, "estoque" => 30],
    ["nome" => "Monitor 24 polegadas", "preco" => 899.90, "estoque" => 5],
    ["nome" => "Headset gamer", "preco" => 199.90, "estoque" => 0],
];
function formatarPreco(float $valor): string {
    return "R$ " . number_format($valor, 2, ",", ".");
}
$total = 0;
foreach ($produtos as $item) {
    $total += $item["preco"] * $item["estoque"];
}
$quantidade = count($produtos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Lista de Produtos</title>
<style>.esgotado{color:red;font-weight:bold;}</style>
</head>
<body>
<h1>Lista de Produtos</h1>
<table border="1" cellpadding="6">
<thead><tr><th>Produto</th><th>Preço</th><th>Estoque</th><th>Situação</th></tr></thead>
<tbody>
<?php foreach ($produtos as $item): ?>
<tr>
<td><?= htmlspecialchars($item["nome"]) ?></td>
<td><?= formatarPreco($item["preco"]) ?></td>
<td><?= $item["estoque"] ?></td>
<td class="<?= $item["estoque"]>0?"":"esgotado" ?>"><?= $item["estoque"]>0?"Disponível":"Esgotado" ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<p><strong><?= $quantidade ?> produtos. Total: <?= formatarPreco($total) ?></strong></p>
</body>
</html>
