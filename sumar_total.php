<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire acondicionado Split frio/calor surrey 2900f",
    "marca" => "surrey",
    "modelo" => "553ai35k",
    "stock" => 5,
    "precio" => 45000
);
$aProductos[] = array(
    "nombre" => "impresora HP laser",
    "marca" => "Hp",
    "modelo" => "p1032e432",
    "stock" => 5,
    "precio" => 25000
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=w, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>sumar total</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="py-5">Listado de Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>stock</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                        $sumatoriaPrecio=0;
                       
                       for($contador =0; $contador < count ($aProductos ); $contador++) { 
                       $sumatoriaPrecio += $aProductos [$contador]["precio"];
                       ?>
                        <tr>
                            <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                            <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                            <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                            <td><?php echo $aProductos[$contador]["stock"] == 0 ? "no hay stock" : ($aProductos[$contador]["stock"] <= 10 ? "poco stock" : "hay stock"); ?> </td>
                            <td><?php echo $aProductos[$contador]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button></td>
                        </tr>
                    <?php
                          
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>La sumatoria de los precios de los productos es: <?php echo $sumatoriaPrecio ?></p>
                </div>
            </div>
        </div>

    </main>
    
</body>
</html>