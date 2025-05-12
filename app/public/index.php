<?php
require __DIR__ . '/../app/Models/Producto.php';
require __DIR__ . '/../app/Controllers/ProductoController.php';

use App\Controllers\ProductoController;

// Ruteo muy básico
$controller = new ProductoController();
$controller->index();