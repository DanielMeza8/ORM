<?php 

    use controller\Productos;

    $productos = new Productos();
    echo 'Numero Productos';
    echo '<br>';
    print_r($productos->numeroProductos());
    echo '<br>';
    echo 'Tres Productos';
    echo '<br>';
    print_r($productos->tresProductos());
    echo '<br>';
    echo 'Filtrar Productos';
    echo '<br>';
    print_r($productos->filtrarProducto());
    echo '<br>';
    echo 'Obtener todos los Productos';
    echo '<br>';
    print_r($productos->obtenerProductos());
    echo '<br>';
    echo 'Un Producto';
    echo '<br>';
    print_r($productos->obtenerPrimerProducto());
    echo '<br>';
    print_r($productos->eliminarProducto());
    
    
    
?>
