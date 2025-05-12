<?php
namespace App\Models;

class Producto {
    public $id;
    public $nombre;
    public $precio;

    public function __construct($id, $nombre, $precio) {
        $this->id      = $id;
        $this->nombre  = $nombre;
        $this->precio  = $precio;
    }

    // Simula un “find all”
    public static function all() {
        return [
            new Producto(1, 'Motosierra X', 250.00),
            new Producto(2, 'Desbrozadora Y', 180.00),
        ];
    }
}