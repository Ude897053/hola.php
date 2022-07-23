<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//pacientes
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "50.454.969",
    "nombre" => "Anahi piñeiro",
    "edad" => "45",
    "peso" => 60,

);
$aPacientes[] = array(
    "dni" => "35.959.343",
    "nombre" => "Cristian Arguello",
    "edad" => "33",
    "peso" => 33,
);
$aPacientes[] = array(
    "dni" => "35.545.443",
    "nombre" => "Malena Camello",
    "edad" => "50",
    "peso" => 31, 4,
);
$aPacientes[] = array(
    "dni" => "35.959.545",
    "nombre" => "Camilo Cruz",
    "edad" => "34",
    "peso" => 45, 7,
);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Clinica</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="co-12">
                <h1 class="py-5">Listado de Pacientes</h1>
            </div>
        </div>
        <table class="table table-hover border">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>NOMBRE Y APELLIDO</th>
                    <th>EDAD</th>
                    <th>PESO</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach($aPacientes as $paciente){ 
               
                ?>
                        <tr>
                            <td><?php echo $paciente["dni"]; ?></td>
                            <td><?php echo $paciente["nombre"]; ?></td>
                            <td><?php echo $paciente["edad"]; ?></td>
                            <td><?php echo $paciente["peso"]; ?></td>
                        
                        </tr>
                        <?php } ?>
            </tbody>

        </table>
        </div>
    </div>

    </main>

</body>

</html>