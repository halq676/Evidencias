<?php
//  datos
$personas = [
    ["id" => 1, "nombre" => "Carlos", "edad" => 20],
    ["id" => 2, "nombre" => "Leandro", "edad" => 50],
    ["id" => 3, "nombre" => "Sandra", "edad" => 33],
];

//  tabla
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";

// Llenar la tabla con los datos
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>" . $persona["id"] . "</td>";
    echo "<td>" . $persona["nombre"] . "</td>";
    echo "<td>" . $persona["edad"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
