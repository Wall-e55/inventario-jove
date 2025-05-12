<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Productos</title></head>
<body>
  <h1>Listado de Productos</h1>
  <ul>
    <?php foreach($productos as $p): ?>
      <li><?= htmlspecialchars($p->nombre) ?> — S/. <?= number_format($p->precio, 2) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>