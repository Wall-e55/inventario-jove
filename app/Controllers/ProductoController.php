<?php
namespace App\Controllers;
use App\Models\Producto;

class ProductoController {
    public function index() {
        // Simula obtener todos los productos
        $productos = Producto::all();
        require __DIR__ . '/../Views/producto.php';
    }
}
