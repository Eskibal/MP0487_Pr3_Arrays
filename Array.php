<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3 - RA3. Arrays</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
    $dato = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => "23", "ciudad" => "Barcelona");
    $cont = 1;
    foreach ($dato as $value) {
        echo "dato $cont º: $value <br>";
        $cont++;
    }

    echo "<h1>Ejercicio 2</h1>";
    foreach ($dato as $key => $value) {
        echo " $key: $value <br>";
    }

    echo "<h1>Ejercicio 3</h1>";
    if ($dato["edad"] == 23) {
        $dato["edad"] = 24;
        $cont = 1;
        foreach ($dato as $value) {
            echo "dato $cont º: $value <br>";
            $cont++;
        }
    }

    echo "<h1>Ejercicio 4</h1>";
    unset($dato["ciudad"]);
    var_dump($dato);

    echo "<h1>Ejercicio 5</h1>";
    $letters = "a, b, c, d, e, f";
    $letter = explode(" ", $letters);
    arsort ($letter);
    $cont = 6;
    foreach ($letter as $value) {
        echo "letter $cont º: $value <br>";
        $cont--;
    }

    echo "<h1>Ejercicio 6</h1>";
    $notas = array("Marta" => 10, "Isabel" => 8, "Luís" => 7, "Miguel" => 5, "Aitor" => 4, "Pepe" => 1);
    echo "Notas de los estudiantes:";
    foreach ($notas as $key => $value) {
        arsort($notas);
        echo " $key: $value ";
    }

    echo "<h1>Ejercicio 7</h1>";
    $media = array_sum($notas) / count($notas);
    
    echo "Media de las notas: " . number_format($media, 2) . "<br>";
    echo "Alumnos con nota por encima de la media<br>";
    foreach ($notas as $key => $value) {
        if ($value > $media) {
            echo "$key <br>";
        }
    }

    echo "<h1>Ejercicio 8</h1>";
    $mejor_alumno = array_search(max($notas), $notas);

    echo "La nota más alta es " . max($notas) . " y el mejor alumno es $mejor_alumno";
    ?>
    
</body>
</html>